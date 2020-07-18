import { Character } from "./Character"
export class Simulator {
  
  private character: Character

  constructor(character?: Character) {
    this.character = character
  }

  public setCharacter(character: Character) {
    this.character = character
  }

  public getCharacter(): Character {
    return this.character
  }

  public startProgram() {
    console.log('Initializing Program');
  }

  public endProgram() {
    console.log("Finishing Program\n\n");
  }

  public execute() {
    this.startProgram()
    this.getCharacter().display()
    this.getCharacter().useWeapon()
    this.getCharacter().getDamage()
    this.getCharacter().fight()
    this.endProgram()
  }
}