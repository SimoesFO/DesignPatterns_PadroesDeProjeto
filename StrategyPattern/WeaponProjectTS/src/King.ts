import { Character } from "./Character"
import { SwordBehavior } from "./SwordBehavior"

export class King extends Character {

  constructor() {
    super(new SwordBehavior())
  }

  public display(): void {
    console.log("I'm King")
  }
}