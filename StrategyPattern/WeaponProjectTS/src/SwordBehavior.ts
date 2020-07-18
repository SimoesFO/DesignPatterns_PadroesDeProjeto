export class SwordBehavior implements IWeaponBehaviorStrategy {
  
  public useWeapon(): string {
    return 'Cutting with Sword...'
  }

  public getDamage(): number {
    return 40
  }
}