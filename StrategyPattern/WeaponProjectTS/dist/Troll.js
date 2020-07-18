"use strict";Object.defineProperty(exports, "__esModule", {value: true});var _Character = require('./Character');
var _AxeBehavior = require('./AxeBehavior');

 class Troll extends _Character.Character {
  constructor() {
    super(new _AxeBehavior.AxeBehavior);
  }

   display() {
    console.log("I'm Troll");
  }
} exports.Troll = Troll;