let Jhon = [89, 141, 103]; //Jhon's Teams Score in array
let Mike = [116, 94, 123]; //Mike's Teams Score in array
let Mary = [97, 131, 105]; //Mary's Teams Score in array

var J_sum = 0,
    M_sum = 0,
    Ma_sum = 0; //Variables Initiated for sum of teams 

for (var i = 0; i < 3; i++) {
    J_sum += Jhon[i];
    M_sum += Mike[i];
    Ma_sum += Mary[i];
} //Calculating Total Sum Of each team

var J_avg = J_sum / 3,
    M_avg = M_sum / 3,
    Ma_avg = Ma_sum / 3; //Variables Initiated for average of teams 

console.log(J_avg == M_avg == Ma_avg);


if ((J_avg == M_avg) && (J_avg == Ma_avg)) {
    console.log("Draw Between Teams With Average Score : " + J_avg);
} else if ((J_avg == M_avg) && (J_avg > Ma_avg)) {
    console.log("Draw Between Jhon's and Mike's Team With Average Score : " + J_avg);
} else if ((J_avg == Ma_avg) && (J_avg > M_avg)) {
    console.log("Draw Between Jhon's and Mary's Team With Average Score : " + J_avg);
} else if ((M_avg == Ma_avg) && (M_avg > J_avg)) {
    console.log("Draw Between Mike's and Mary's Team With Average Score : " + M_avg);
} else if ((J_avg > M_avg) && (J_avg > Ma_avg)) {
    console.log("Jhon's Team Wins With Average Score : " + J_avg);
} else if ((M_avg > J_avg) && (M_avg > Ma_avg)) {
    console.log("Mike's Team Wins With Average Score : " + M_avg);
} else {
    console.log("Mary's Team Wins With Average Score : " + Ma_avg);
} //Conditions To Check the winner team