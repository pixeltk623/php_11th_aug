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

let getDiv = document.getElementById("Result");

getDiv.innerHTML = "<h1>This is Kumar</h1>";
getDiv.style.color = "blue";
getDiv.style.backgroundColor = "black";


getDiv.style.cssText = `
  color: red; 
  background-color: black;
  font-size: 50px;
`;

console.log(getDiv);