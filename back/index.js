const express = require('express')
const exphbs = require('express-handlebars')

const conn = require('./db/conn')

const adminRoutes = require('./routes/admin') 

const ModelsAdmin = require('./models/dbAdmin')
const ModelsAdminProjetos = require('./models/dbAdminProjetos')
const ModelsAdminCounter = require('./models/dbAdminCounter')

const cors = require("cors")

const multer = require('multer')
const path = require('path')

const { Cookie } = require('express-session')
const session = require('express-session')
const FileStore = require('session-file-store')(session)
const flash = require('express-flash')

const nodemailer = require('nodemailer')

const app = express()

app.use(
    express.urlencoded({
         extended: true
    })
)
app.use(express.json())

app.use(flash())

app.use(
    session({
          name: 'session',
          secret: 'nosso_secret',
          resave: false,
          saveUninitialized: false,
          store: new FileStore({
              logFn: function() {}, 
              path: require('path').join(require('os').tmpdir(), 'session'),
          }),
          cookie: {
            secure:false,
            expires: new Date(Date.now() + (365 * 24 * 60 * 60 * 1000)),
            httpOnly: true
          }
    })
)
app.use((req, res, next)=>{
        if(req.session.userid){
             res.locals.session = req.session
        }
        next()
})


  
app.use(cors());


app.engine('handlebars', exphbs.engine())
app.set('view engine', 'handlebars')
app.use(express.static('public')) 


app.use('/', adminRoutes)



conn.sync().then(()=>{
    app.listen(3003)
}).catch((err) => console.log(err))
// ({force:true}) ;