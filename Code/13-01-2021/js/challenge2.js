var mark = {
    fullName: "Mark",
    mass: 60,
    height: 1.66,
    bmi: function() {
        return this.mass / (this.height * this.height);
    }
};

var john = {
    fullName: "john",
    mass: 70,
    height: 1.66,
    bmi: function() {
        return this.mass / (this.height * this.height);
    }
};

console.log(mark.fullName + " : " + mark.bmi());
console.log(john.fullName + " : " + john.bmi());

if (mark.bmi() == john.bmi()) {
    console.log("Both Have Equal");
} else if (mark.bmi() > john.bmi()) {
    console.log(mark.fullName + " Has Greater BMI then " + john.fullName);
} else {
    console.log(john.fullName + " Has Greater BMI then " + mark.fullName);
    console.log("Both Have Equal");
}