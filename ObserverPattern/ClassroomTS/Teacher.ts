import { EClasses } from "./EClasses";
import { IHomework } from "./IHomework";
import { IObservable } from "./IObservable";
import { IObserver } from "./IObserver";

export class Teacher implements IObservable {

  private observers: Array<IObserver>;
  private homework: IHomework;

  constructor() {
    this.observers = [];
    this.homework = {} as IHomework;
  }

  public add(observer: IObserver): void {
    this.observers.push(observer);
  }

  public remove(observer: IObserver): void {
    let index = this.observers.indexOf(observer);
    this.observers.splice(index, 1);
  }

  public notify(): void {
    this.observers.forEach( observer => observer.update() );
  }

  public getHomeworks(): IHomework {
    return this.homework;
  }

  public setNewHomework(homework: IHomework): void {
    this.homework = homework;
    this.notify();
  }
  
}