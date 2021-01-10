var M_mass = 60;
var J_mass = 70;

var M_height = 1.61;
var J_height = 1.5;

var MARK = M_mass / (Math.pow(M_height, 2));
var JHON = J_mass / (Math.pow(J_height, 2));
var ANS = MARK > JHON;




console.log("Mark's BMI = " + MARK);
console.log("JOHN's BMI = " + JHON);
console.log("Is Mark's BMI Higher Than John's\n" + ANS);