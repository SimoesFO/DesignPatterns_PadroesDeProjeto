import { Character } from "./Character"
import { AxeBehavior } from "./AxeBehavior"

export class Troll extends Character {
  constructor() {
    super(new AxeBehavior);
  }

  public display(): void {
    console.log("I'm Troll");
  }
}