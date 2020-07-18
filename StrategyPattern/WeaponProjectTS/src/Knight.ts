import { Character } from "./Character"
import { KnifeBehavior } from "./KnifeBehavior"

export class Knight extends Character {

  constructor() {
    super(new KnifeBehavior())
  }

  public display(): void {
    console.log("I'm Knight")
  }
}