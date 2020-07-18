export class AxeBehavior implements IWeaponBehaviorStrategy {

  public useWeapon(): string {
    return "Using Axe"
  }

  public getDamage(): number {
    return 50
  }
}