let Jhon = [89, 141, 103]; //Jhon's Teams Score in array
let Mike = [116, 94, 123]; //Mike's Teams Score in array

var J_sum = 0,
    M_sum = 0; //Variables Initiated for sum of teams 

for (var i = 0; i < Jhon.length; i++) {
    J_sum += Jhon[i];
    M_sum += Mike[i];
} //Calculating Total Sum Of each team

if ((J_sum / 3) == (M_sum / 3)) {
    console.log("Draw Between Team With Average Score : " + J_sum);
} else if ((J_sum / 3) > (M_sum / 3)) {
    console.log("Jhon's Team Wins With Average Score : " + J_sum);
} else {
    console.log("Mike's Team Wins With Average Score : " + M_sum);
} //Conditions To Check the winner team