const ModelsAdmin = require('../models/dbAdmin')
const ModelsAdminProjetos = require('../models/dbAdminProjetos')
const ModelsAdminCounter = require('../models/dbAdminCounter')

const nodemailer = require('nodemailer')

const fs = require('fs')


const user = process.env.EMAIL
const pass = process.env.SENHAEMAIL


const transporter = nodemailer.createTransport({
    host: 'smtp.gmail.com', 
    port: 587,
    secure: false,
    auth: {
        user, pass 
    }
})






module.exports = class AdminControllers {
        
        //mostrar view de login se não estiver logado
        static async login(req,res){

            if(req.session.userid){
                res.redirect('/dashboard')
           } else{
                res.render('login')
           }

        }

        
        //verificar login 
        static async verificarLogin(req,res){
                
               if(req.body.login == process.env.LOGIN && req.body.senha == process.env.PASSWORD){

                    req.session.userid = process.env.USERID
                    req.session.save(()=>{
                        res.redirect('/dashboard')
                    })
                   
               }else{
                
                   req.flash('message','Verifique os dados!') 
                   req.session.save(()=>{
                       res.redirect('/')
                   })

               }

        }




        //sair
        static sair(req,res){
              req.session.destroy()
              res.redirect('/')
        }




        //mostrar dashboard
        static async dashboard(req,res){

            if(req.session.userid){

                //Pegar informações
                const infos = await ModelsAdmin.findOne({raw:true, where:{id:1}})

                //Pegar Projetos
                const projetos = await ModelsAdminProjetos.findAll({raw:true})

                //Pegar acessos no site
                const visitas = await ModelsAdminCounter.findAll({raw:true})
                const totalVisitas = visitas.length //VAI PARA A VIEW
                const data = new Date()
                const dia = data.getDate()
                const mes = data.getMonth() +1
                const visitasDia = []
                visitas.forEach((v)=>{
                       if(v.dia == dia && v.mes == mes){
                           visitasDia.push(v)
                       }
                })
                const visitasDeHoje = visitasDia.length //VAI PARA A VIEW

                 

                res.render('dashboard', {infos, projetos,totalVisitas,visitasDeHoje})
            } else{
                res.redirect('/')
            }

        }



        //Atualizar informações
        static async atualizarInfos(req,res){
            const wpp = req.body.whatsapp
            const instagram = req.body.instagram
            const linkedin = req.body.linkedin
            const email = req.body.email
            const cidade = req.body.cidade
            const estado = req.body.estado
            const facebook = req.body.facebook
            
            try{
                await ModelsAdmin.update({wpp,instagram,linkedin,email,cidade,estado,facebook}, {where:{id: 1}})
                req.flash('messageOk','Dados atualizados com sucesso!') 
                req.session.save(()=>{
                    res.redirect('/dashboard')
                })
            }catch(err){
                req.flash('messageErr','Erro ao atualizar os dados!') 
                req.session.save(()=>{
                    res.redirect('/dashboard')
                })
            }

        }




        //salvar novo projeto
        static async salvarNovoPorjeto(req,res){
            const imgName = req.file.filename;
            const titulo = req.body.titulo
            const descricao = req.body.descricao
            const link = req.body.link
            
            try {

                await ModelsAdminProjetos.create({imgName,titulo,descricao,link})
                req.flash('messageOk','Projeto adicionado!') 
                req.session.save(()=>{
                    res.redirect('/dashboard')
                })

            }catch(err){

                req.flash('messageErr','Erro ao adicionar novo projeto!') 
                req.session.save(()=>{
                    res.redirect('/dashboard')
                })
                   
            }
        }



        //deletar projeto
        static async deletarProjeto(req,res){
               const id = req.params.id

               try{
                    const projeto = await ModelsAdminProjetos.findOne({raw:true,where:{id:id}})

                    var imgDeletar = projeto.imgName
                  
                    if(imgDeletar){
                        fs.unlink(`public/projetos/${imgDeletar}`, (err) => {
                             if (err) {
                               console.error(err);
                               return;
                             }
                             
                             console.log(`Imagem ${imgDeletar} deletada com sucesso.`);
                        });
                    }

                    await ModelsAdminProjetos.destroy({where:{id:id}})
                    req.flash('messageOk','Projeto deletado!') 
                    req.session.save(()=>{
                        res.redirect('/dashboard')
                    })

               }catch(err){

                    req.flash('messageErr','Falha ao deletar projeto!') 
                    req.session.save(()=>{
                        res.redirect('/dashboard')
                    })

               }

        }




        //salvar contagem
        static async salvarContagem(req,res){
              const data = new Date()
              const dia = data.getDate()
              const mes = data.getMonth() +1

              await ModelsAdminCounter.create({dia,mes})

              res.json('Visita salva!')
        }


        //resetar contagem dia
        static async resetarVisitasDia(req,res){

            //Pegar acessos no site
            const visitas = await ModelsAdminCounter.findAll({raw:true})
            const data = new Date()
            const dia = data.getDate()
            const mes = data.getMonth() +1
            const visitasDia = []
            visitas.forEach((v)=>{
                    if(v.dia == dia && v.mes == mes){
                        visitasDia.push(v.id)
                    }
            })
            
            await ModelsAdminCounter.destroy({where:{id: [visitasDia]}})

            req.flash('messageOk','Contagem do dia resetada!') 
            req.session.save(()=>{
                res.redirect('/dashboard')
            })
              
        }

        //resetar contagem all
        static async resetarVisitasAll(req,res){

            //Pegar acessos no site
            const visitas = await ModelsAdminCounter.findAll({raw:true})
            const visitasIds = []
            visitas.forEach((v)=>{
                visitasIds.push(v.id)
            })
            
            await ModelsAdminCounter.destroy({where:{id: [visitasIds]}})

            req.flash('messageOk','Contagem resetada!') 
            req.session.save(()=>{
                res.redirect('/dashboard')
            })
        
        }





        //------------------------------------API------------------------------------------
        
        //envio de email
        static async enviarEmail(req,res){

               /*
               const nome = req.body.nome
               const email = req.body.email
               const wpp = req.body.wpp
               const mensagem = req.body.mensagem

               //enviar para freeladev
               transporter.sendMail({
                    from: nome,
                    to: 'wesleicasali18@gmail.com',
                    subject: 'Trabalho Freeladev!',
                    html: `
                        
                          <div>
                             <p style="margin-bottom: 10px; text-align: center;"> Nome: ${nome} </p> 
                             <p style="margin-bottom: 10px; text-align: center;"> Email: ${email} </p>
                             <p style="margin-bottom: 10px; text-align: center;"> Whatsapp: ${wpp} </p>
                             <p style="margin-bottom: 10px; text-align: center;"> Mensagem: ${mensagem} </p>     
                          </div>

                    ` 
               }).then((info)=>{console.log('Email Enviado para Weslei')}).catch(err => console.log(err))

               //enviar para cliente
               transporter.sendMail({
                    from: user,
                    to: email,
                    subject: 'Agradecimento - Freeladev',
                    html: `
       
                       Caro(a) ${nome}, <br> <br>
                       Agradecemos pelo interesse em nossos serviços. Em breve, entraremos em contato para discutir os detalhes. <br> <br> <br>
                       Atenciosamente, <br> 
                       Equipe <span style="color:orangered">Freeladev</span>
  
                    `
               }).then((info)=>{console.log('Email Enviado para Cliente')}).catch(err => console.log(err))
               */


               res.redirect('https://freeladev.website')
        }



        //BUSCAR INFORMAÇÕES
        static async infosApi(req,res){

            const infos = await ModelsAdmin.findOne({raw:true, where:{id:1}})

            res.json(infos)
              
        }


        //BUSCAR PROJETOS
        static async projetosApi(req,res){

            const projetos = await ModelsAdminProjetos.findAll({raw:true})

            res.json(projetos)
        
        }

}