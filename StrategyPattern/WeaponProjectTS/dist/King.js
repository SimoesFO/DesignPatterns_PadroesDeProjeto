"use strict";Object.defineProperty(exports, "__esModule", {value: true});var _Character = require('./Character');
var _SwordBehavior = require('./SwordBehavior');

 class King extends _Character.Character {

  constructor() {
    super(new (0, _SwordBehavior.SwordBehavior)())
  }

   display() {
    console.log("I'm King")
  }
} exports.King = King;