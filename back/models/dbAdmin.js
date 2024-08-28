const {DataTypes} = require('sequelize')

const db = require('../db/conn')

const Contatos = db.define('Contato', {
     wpp: {
          type: DataTypes.STRING,
          required: true
     },
     instagram: {
         type: DataTypes.STRING,
         required: true
     },
     email: {
        type: DataTypes.STRING,
        required: true
     },
     linkedin: {
        type: DataTypes.STRING,
        required: true
     },
     facebook: {
        type: DataTypes.STRING,
        required: true
     },
     cidade: {
        type: DataTypes.STRING,
        required: true
     },
     estado: {
        type: DataTypes.STRING,
        required: true
     },
})

module.exports = Contatos