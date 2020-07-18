export class BowAndArrowBehavior implements IWeaponBehaviorStrategy {
  
  public useWeapon(): string {
    return 'Shooting with my Bow and Arrow...'
  }

  public getDamage(): number {
    return 25
  }
}