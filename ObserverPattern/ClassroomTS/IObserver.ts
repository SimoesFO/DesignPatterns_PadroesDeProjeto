export interface IObserver {

  update(): void;
  subscribe(): void;
  unsubscribe(): void;
}