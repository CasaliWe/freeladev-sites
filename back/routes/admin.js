const express = require('express')
const router = express.Router()
const multer = require('multer')
const path = require('path')

const AdminControllers = require('../controllers/Admin')

const storage = multer.diskStorage({
    destination: function(req, file, cb){
          cb(null, "public/projetos/") 
    },
    filename: function(req, file, cb){
        cb(null, file.originalname + Date.now() + path.extname(file.originalname))
    }
})
const upload = multer({storage})



//mostrar página login
router.get('/', AdminControllers.login)

//verificar login
router.post('/verificarLogin', AdminControllers.verificarLogin)

//sair
router.get('/sair', AdminControllers.sair)

//mostrar dashboard
router.get('/dashboard', AdminControllers.dashboard)

//Atualizar informações
router.post('/atualizarInfos', AdminControllers.atualizarInfos)

//salvar novo projeto
router.post('/salvarProjeto', upload.single('file'),  AdminControllers.salvarNovoPorjeto)

//excluir projeto
router.get('/deletarProjeto/:id', AdminControllers.deletarProjeto)

//salvar contagem visita
router.get('/salvarContagem', AdminControllers.salvarContagem)

//resetar visitas dia
router.get('/resetarVisitasDia', AdminControllers.resetarVisitasDia)

//resetar visitas all
router.get('/resetarVisitasAll', AdminControllers.resetarVisitasAll)



//-----------------------------API------------------------------

//ENVIAR EMAIL
router.post('/enviarEmail', AdminControllers.enviarEmail)

//BUSCAR INFORMAÇÕES
router.get('/api/infos', AdminControllers.infosApi)

//BUSCAR PROJETOS
router.get('/api/projetos', AdminControllers.projetosApi)



module.exports = router