'use strict';
// alert("Hello This is Kumar")
// alert()

// console.log('Hello This is Kumar');


var nameOfUser = "Sharvan";

var firstName = "Amit";

var lastName = "Kumar";


//console.log(firstName + " " +lastName);


//console.log(nameOfUser);


// console.log(`${firstName} ${lastName}`);



// var a = 5;
// var b = 10;
// console.log('Fifteen is ' + (a + b) + ' and\nnot ' + (2 * a + b) + '.');
// // "Fifteen is 15 and
// // not 20."


// console.log(`Fifteen is ${a + b} and
// not ${2 * a + b}.`);

// {
// 	var a = 5;

// 	console.log(a);
// }

// console.log(a);


// {
// 	let a = 5;
// 	console.log(a);
// }

// console.log(a);


// const a = 10

// let a = 45.65
// console.log(a);
	
// let list = [45,89,78, "Test"]

// let objectList = {name: "Sharvan", email: "s@gmail.com"}

// console.log(typeof(objectList));

// console.log(typeof(list));

//console.log(typeof(a))

// let newdata // undefined

// console.log(newdata);

// + - * / % ++ -- && || >= <= > < ? ** 

// let x = parseInt("40")
// let y = parseInt("50")

// console.log(typeof(x));


// console.log(x+y);

// var x = 55
// var y = 10

// let a = 2
// let b = 3

// console.log(x+y); // 65
// console.log(x-y); // 45
// console.log(x*y); //550
// console.log(x/y); // 5
// console.log(x%y); // 5
// console.log(a**b); // 8


// console.log(x++); // 55
// console.log(x--); // 55
// console.log(++x); // 56
// console.log(--x); // 55



// console.log(x>y); // true
// console.log(x<y); // false
// console.log(x>=y); // true
// console.log(x<=y); // false

// console.log(x>5 && x>15); //true
// console.log(x>100 || x>50); // true

// console.log(x>5 ? x : y); // 55


// let nameOfU = prompt("Enter Your Name");

// let email = prompt("Enter Your Email");

// document.write(nameOfU+email);

// console.log(nameOfU);


// let isStatus = confirm("You are about to DESTROY a complete database! Do you really want to execute");

// //console.log(isStatus);

// console.log(isStatus ? 'Deleted' : 'Not');

// let x = Math.pow(2,8)

// console.log(2**8);
// console.log(x);

// function cofirmDelete() {
// 	let isStatus = confirm("You are about to DESTROY a complete database! Do you really want to execute");
// 	console.log(isStatus ? 'Deleted' : 'Not');
// }


// var nameOfUser = "Sharvan";

// var firstName = "Amit";

// var lastName = "Kumar";

// console.log(nameOfUser.length);



//let para = document.getElementById

//let para = document.getElementsByName

//let para = document.getElementsByClassName

// let para = document.getElementsByTagName

// let para = document.getElementById("para")

// console.log(para);

// console.log(para.style.border = "1px solid blue");

// let getDiv = document.getElementById("Result");

// getDiv.innerHTML = "<h1>This is Kumar</h1>";
// getDiv.style.color = "blue";
// getDiv.style.backgroundColor = "black";


// getDiv.style.cssText = `
//   color: red; 
//   background-color: black;
//   font-size: 50px;
// `;

// console.log(getDiv);

// var div = document.getElementById("para");

// console.log(div.innerHTML);

// var input = document.getElementById("name");

// console.log(input.value);

// var h1 = document.getElementsByTagName("h1");

// console.log(h1[0].innerHTML = input.value);

// console.log(div.style.backgroundColor = "red");
// var onBulbImg = document.getElementById("bulb");
// function onBulb() {
	
// 	onBulbImg.src = "img/ONbulb.jpg";
// }

// function offBulb() {
// 	onBulbImg.src = "img/OFFbulb.jpg";
// }

// function onOffBulb() {
// 	//console.log(onBulbImg.src);

// 	if(onBulbImg.src=='http://localhost/php_11th_aug/javascript/img/ONbulb.jpg') {
// 		onBulbImg.src = "img/OFFbulb.jpg";
// 	} else {
// 		onBulbImg.src='img/ONbulb.jpg';
// 	}
// } 

// if (true) {}

// if() {

// } else {

// }

// if (true) {} else if {} else {}

// switch() {

// }

// for loop 
// while loop 
// do while loop


// var x = 5
// var y = 10

// if(x>y) {
// 	console.log(x);
// }

// if() {

// } else {

// }


// const person = {fname:"John", lname:"Doe", age:25};

// let text = "";

// for (let x in person) {

//   text += person[x];

//   //console.log(person[x]);

//   //console.log(x);

// }

// console.log(text);


// const cars = ["BMW", "Volvo", "Mini"];

// let text = "";
// for (let x of cars) {
//   text += x;

// //  console.log(x);
// }

// console.log(text);

// {0: jan, 1 : frb}


let dateObject = new Date();


// console.log(dateObject.getHours());

// console.log(dateObject.getMinutes());
// console.log(dateObject.getSeconds());

// console.log(dateObject.getHours()+":"+dateObject.getMinutes()+":"+dateObject.getSeconds());

// document.getElementById("time").innerHTML = dateObject.getHours()+":"+dateObject.getMinutes()+":"+dateObject.getSeconds();

// console.log(dateObject);

console.log(dateObject.getFullYear()); // 2021


console.log(dateObject.getMonth());

console.log(dateObject.getDay());


var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
// var dateString = "2021/11/14";

var dateString = "2021-11-14";
var d = new Date(2010, 7, 5);
var dayName = days[d.getDay()];

// console.log(days[dateObject.getDay()]);

console.log(dayName);



// function GetFormattedDate() {
//     var todayTime = new Date();
//     console.log(todayTime);
//     var month = format(todayTime .getMonth() + 1);
//     var day = format(todayTime .getDate());
//     var year = format(todayTime .getFullYear());
//     return month + "/" + day + "/" + year;
// }

// GetFormattedDate()

function geneateDate() {
	var getCurrentDate = "11/18/2021"; // M-d-y

	console.log(getCurrentDate); 


	var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

	var d = new Date(getCurrentDate);
	var dayName = days[d.getDay()];

	console.log(d);
}



function getRealTime() {
	let dateObject = new Date();

	let ourHours;
	let ourMinutes;
	let ourSeconds;
	if((dateObject.getHours()).toString().length==1) {
		
		ourHours = "0"+(dateObject.getHours()).toString()
		
	} else {
		ourHours = (dateObject.getHours()).toString();
	}

	if((dateObject.getMinutes()).toString().length==1) {
		
		ourMinutes = "0"+(dateObject.getMinutes()).toString()
		
	} else {
		ourMinutes = (dateObject.getMinutes()).toString()
	}

	if((dateObject.getSeconds()).toString().length==1) {
		
		ourSeconds = "0"+(dateObject.getSeconds()).toString()
		
	} else {
		ourSeconds = (dateObject.getSeconds()).toString()
	}

	document.getElementById("time").innerHTML = ourHours+":"+ourMinutes+":"+ourSeconds;
}

getRealTime()


setInterval(
	getRealTime, 1000
);
