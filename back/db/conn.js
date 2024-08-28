const {Sequelize} = require('sequelize')

require('dotenv').config()

const sequelize = new Sequelize(process.env.NOMEBANCO, process.env.USER, process.env.SENHA, {
     host: process.env.HOST,
     dialect: process.env.BANCO
})

module.exports = sequelize