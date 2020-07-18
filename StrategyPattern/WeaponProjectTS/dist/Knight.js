"use strict";Object.defineProperty(exports, "__esModule", {value: true});var _Character = require('./Character');
var _KnifeBehavior = require('./KnifeBehavior');

 class Knight extends _Character.Character {

  constructor() {
    super(new (0, _KnifeBehavior.KnifeBehavior)())
  }

   display() {
    console.log("I'm Knight")
  }
} exports.Knight = Knight;