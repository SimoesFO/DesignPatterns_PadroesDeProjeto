export abstract class Character {

  private weapon: IWeaponBehaviorStrategy

  constructor(weapon?: IWeaponBehaviorStrategy) {
    this.weapon = weapon
  }

  public setWeapon(weapon: IWeaponBehaviorStrategy) {
    this.weapon = weapon
  }

  public useWeapon(): void {
    console.log(this.weapon.useWeapon())
  }

  public getDamage(): void {
    console.log(this.weapon.getDamage())
  }

  public fight(): void {
    console.log(
      `${this.weapon.useWeapon()} - Damage: ${this.weapon.getDamage()}`
    )
  }

  abstract display(): void;

}