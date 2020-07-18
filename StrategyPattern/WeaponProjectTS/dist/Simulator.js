"use strict";Object.defineProperty(exports, "__esModule", {value: true});
 class Simulator {
  
  

  constructor(character) {
    this.character = character
  }

   setCharacter(character) {
    this.character = character
  }

   getCharacter() {
    return this.character
  }

   startProgram() {
    console.log('Initializing Program');
  }

   endProgram() {
    console.log("Finishing Program\n\n");
  }

   execute() {
    this.startProgram()
    this.getCharacter().display()
    this.getCharacter().useWeapon()
    this.getCharacter().getDamage()
    this.getCharacter().fight()
    this.endProgram()
  }
} exports.Simulator = Simulator;