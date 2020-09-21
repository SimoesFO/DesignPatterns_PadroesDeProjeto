import { ClassA1 } from "./ClassA1";
import { EClasses } from "./EClasses";
import { IHomework } from "./IHomework";
import { Teacher } from "./Teacher";

let teacher = new Teacher();
let classA1 = new ClassA1(teacher);

let newHomework: IHomework = { IDClass: EClasses.A1, task: 'New Task!'};
teacher.setNewHomework(newHomework);