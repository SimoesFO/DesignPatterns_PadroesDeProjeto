import { Character } from "./Character"
import { BowAndArrowBehavior } from "./BowAndArrowBehavior"

export class Queen extends Character {

  constructor() {
    super(new BowAndArrowBehavior())
  }

  public display(): void {
    console.log("I'm Queen")
  }
}