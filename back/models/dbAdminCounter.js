const {DataTypes} = require('sequelize')

const db = require('../db/conn')

const Counter = db.define('Counter', {
     dia: {
          type: DataTypes.INTEGER,
          required: true
     },
     mes: {
          type: DataTypes.INTEGER,
          required: true
     },
})

module.exports = Counter