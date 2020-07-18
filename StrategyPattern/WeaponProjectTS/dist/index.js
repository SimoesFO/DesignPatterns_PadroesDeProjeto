"use strict";var _Simulator = require('./Simulator');
var _King = require('./King');
var _Knight = require('./Knight');
var _Troll = require('./Troll');
var _Queen = require('./Queen');

let simulator = new (0, _Simulator.Simulator)();

simulator.setCharacter(new (0, _King.King)())
simulator.execute()

simulator.setCharacter(new (0, _Queen.Queen)())
simulator.execute()

simulator.setCharacter(new (0, _Knight.Knight)())
simulator.execute()

simulator.setCharacter(new (0, _Troll.Troll)())
simulator.execute()