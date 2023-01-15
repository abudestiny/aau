
function gradeCalc(grade, unit) {
  if (grade === "A") {
    return 5 * unit;
  } else if (grade === "B") {
    return 4 * unit;
  } else if (grade === "C") {
    return 3 * unit;
  } else if (grade === "D") {
    return 1 * unit;
  } else if (grade === "F") {
    return 0 * unit;
  }
  // else if (grade === "E") {
  //   return 1 * unit;
  // } 

}


/**
 * @description calculates cgpa
 */
function calcCgpa() {
  const TOTALUNIT = document.getElementById('totalUnit');
  const TEARNEDUNIT = document.getElementById('TearnedUnit');
  const CGPAPARAGRAPH = document.getElementById("cgpa-calc");
  const GRADESSELECT = document.querySelectorAll("select.grade");
  const UNIT = document.querySelectorAll("input.credit-units");

  const courseReport = {};

  const listOfGrades = [];
  const listOfUnits = [];
  let totalUnits = 0;

  GRADESSELECT.forEach((e) => {
    let GRADES = e.options;
    const selectedIndex = e.selectedIndex;
    const selectedGrade = GRADES[selectedIndex];
    const gradeValue = selectedGrade.text.toUpperCase();
    listOfGrades.push(gradeValue);
  });

  // console.log(listOfGrades);

  UNIT.forEach((e) => {
    const unitValue = parseInt(e.value);
    totalUnits += unitValue;
    listOfUnits.push(unitValue);
  });

  let totalEarnedUnits = 0;

  for (let i = 0; i < listOfUnits.length; i++) {
    totalEarnedUnits += gradeCalc(listOfGrades[i], listOfUnits[i]);
  }
  const gpa = totalEarnedUnits / totalUnits;





  if (gpa >= 0) {
    TEARNEDUNIT.textContent = "Total earned unit is: " + totalEarnedUnits;
    TOTALUNIT.textContent = "Total course unit is: " + totalUnits;
    CGPAPARAGRAPH.textContent = "CGPA is: " + gpa.toFixed(2);
  } else {
    CGPAPARAGRAPH.textContent = "Please enter your correct grade and credit units";
  }

}
