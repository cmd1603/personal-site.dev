
"use strict";
 
var numbers = document.getElementsByClassName('numbers');
var operatorBox = document.getElementById('operatorBox');
var leftOperand = document.getElementById('leftOperand');
var rightOperand = document.getElementById('rightOperand');
var clear = document.getElementById('clear');
var operator = document.getElementsByClassName('operator');
var answerBox = document.getElementById('answer');
var finalResult = document.getElementById('equals');

function clickNumber () {
	if (operatorBox.value == "") {
		leftOperand.value += this.innerHTML
	} else {
		rightOperand.value += this.innerHTML
	}
};
for (var i = 0; i < numbers.length; i++) {
	numbers[i].addEventListener('click', clickNumber);
};

function clickOperator () {
	if (leftOperand.value == "") {
		answerBox.value = "Please enter a value";
	} else {
	operatorBox.value = this.innerHTML
	}
}


for (var i = 0; i < operator.length; i++) {
	operator[i].addEventListener('click', clickOperator);
}

function clearEverything () {
	leftOperand.value = "";
	rightOperand.value = "";
	operatorBox.value = "";
	answerBox.value = "";
}

clear.addEventListener('click', clearEverything);

function displayResult () {
	// answerBox.toFixed(8);
	
	if (operatorBox.value == "+") {
		answerBox.value = (parseFloat(leftOperand.value)) + (parseFloat(rightOperand.value));
		leftOperand.value = "";
		rightOperand.value = "";
		operatorBox.value = "";
	} else if (operatorBox.value == "-") {
		answerBox.value = (parseFloat(leftOperand.value)) - (parseFloat(rightOperand.value));
		leftOperand.value = "";
		rightOperand.value = "";
		operatorBox.value = "";
		} else if (operatorBox.value == "*") {
		answerBox.value = (parseFloat(leftOperand.value)) * (parseFloat(rightOperand.value));
		leftOperand.value = "";
		rightOperand.value = "";
		operatorBox.value = "";
	} else if (operatorBox.value == "/" && rightOperand.value == 0) {
		answerBox.value = "Can't / by 0";
		leftOperand.value = "";
		rightOperand.value = "";
		operatorBox.value = "";
	} else if (operatorBox.value == "/") {
		answerBox.value = (parseFloat(leftOperand.value)) / (parseFloat(rightOperand.value));
		leftOperand.value = "";
		rightOperand.value = "";
		operatorBox.value = "";
	} else if (operatorBox.value == "%") {
		answerBox.value = (parseFloat(rightOperand.value)) * (parseFloat(leftOperand.value)) / 100;
		leftOperand.value = "";
		rightOperand.value = "";
		operatorBox.value = "";
	} else if (operatorBox.value == "^") {
		answerBox.value = Math.pow((parseFloat(leftOperand.value)), (parseFloat(rightOperand.value)));
		leftOperand.value = "";
		rightOperand.value = "";
		operatorBox.value = "";
	}
}

finalResult.addEventListener('click', displayResult);

var negative = document.getElementById('Neg');
var sqroot = document.getElementById('sqrt');

function negativeNumber () {
	if (rightOperand.value == "") {
		leftOperand.value = "-"+leftOperand.value;
	} else if (leftOperand.value = "-") {
		leftOperand.value = ""+leftOperand.value;
	} 
	 else if (leftOperand != "") {
		rightOperand.value = "-"+rightOperand.value;
	}
}

negative.addEventListener('click', negativeNumber);

function squareRoot () {
	
	if(leftOperand.value == "") {
		leftOperand.value = "";
      return answerBox.value = "Please enter a value";
    } 
    if(leftOperand.value == 0) {
    	leftOperand.value = "";
      return answerBox.value = "Square root is 0";
    }
    if(leftOperand.value < 0) {
    	leftOperand.value = "";
      return answerBox.value = "Square root is an imaginary number";
    } else {
		answerBox.value = Math.sqrt(parseFloat(leftOperand.value));
		leftOperand.value = "";
		operatorBox.value = "";
		rightOperand.value = "";
		}
  }

sqroot.addEventListener('click', squareRoot);



