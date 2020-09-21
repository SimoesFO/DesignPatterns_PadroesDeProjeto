import { IObserver } from './IObserver';
import { ISendNotification } from './ISendNotification';
import { IObservable } from './IObservable';
import { IHomework } from './IHomework';
import { Teacher } from './Teacher';
import { EClasses } from './EClasses';

export class ClassA1 implements IObserver, ISendNotification {

  private observable: IObservable;
  private homeworks: Array<IHomework>;

  constructor(observable: IObservable) {
    this.observable = observable;
    this.homeworks = [];
    this.subscribe();
  }

  public subscribe(): void {

    this.observable.add(this);
  }

  public unsubscribe(): void {
    
    this.observable.remove(this);
  }

  public update(): void {

    if(this.observable instanceof Teacher) {
      
      let lastHomework = this.observable.getHomeworks();

      if(lastHomework.IDClass == EClasses.A1) {
        
        this.homeworks.push( lastHomework );
      }

      this.notifyClass();
    }
  }

  public notifyClass(): void {
    console.log("Task add");
  }
}