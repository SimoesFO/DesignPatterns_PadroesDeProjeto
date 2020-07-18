export class KnifeBehavior implements IWeaponBehaviorStrategy {
  
  public useWeapon(): string {
    return 'Cutting with Knife...'
  }

  public getDamage(): number {
    return 15
  }
}