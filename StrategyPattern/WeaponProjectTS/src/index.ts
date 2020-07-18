import { Simulator } from './Simulator'
import { King } from './King'
import { Knight } from './Knight';
import { Troll } from './Troll';
import { Queen } from './Queen';

let simulator = new Simulator();

simulator.setCharacter(new King())
simulator.execute()

simulator.setCharacter(new Queen())
simulator.execute()

simulator.setCharacter(new Knight())
simulator.execute()

simulator.setCharacter(new Troll())
simulator.execute()