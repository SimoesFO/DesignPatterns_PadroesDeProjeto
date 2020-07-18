"use strict";Object.defineProperty(exports, "__esModule", {value: true}); class Character {

  

  constructor(weapon) {
    this.weapon = weapon
  }

   setWeapon(weapon) {
    this.weapon = weapon
  }

   useWeapon() {
    console.log(this.weapon.useWeapon())
  }

   getDamage() {
    console.log(this.weapon.getDamage())
  }

   fight() {
    console.log(
      `${this.weapon.useWeapon()} - Damage: ${this.weapon.getDamage()}`
    )
  }

  

} exports.Character = Character;