"use strict";Object.defineProperty(exports, "__esModule", {value: true});var _Character = require('./Character');
var _BowAndArrowBehavior = require('./BowAndArrowBehavior');

 class Queen extends _Character.Character {

  constructor() {
    super(new (0, _BowAndArrowBehavior.BowAndArrowBehavior)())
  }

   display() {
    console.log("I'm Queen")
  }
} exports.Queen = Queen;