const {DataTypes} = require('sequelize')

const db = require('../db/conn')

const Projetos = db.define('Projeto', {
     imgName: {
          type: DataTypes.STRING,
          required: true
     },
     titulo: {
         type: DataTypes.STRING,
         required: true
     },
     descricao: {
        type: DataTypes.TEXT,
        required: true
     },
     link: {
        type: DataTypes.STRING,
        required: true
     },
     lado: {
        type: DataTypes.STRING,
        required: true
     },
})

module.exports = Projetos