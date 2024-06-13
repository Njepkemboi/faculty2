//  LEARNING JAVASSCRIPT

console.log ("Hello from JavaScript")
var myName = "Naum"
/* DECLARING VARIABLES
Var-> is used throughout the program
Let-> is used within the scope its declard
Cont-> is used with variables that do not change */

 
 var myName = "Naum"

 let ourName = RiaraUniversity

 const pi = 3.142


 //assigning variables
 var a ; // declaring varible a
 var b = 2; // declaring variable b and assigning 2 to it.

 console.log(a) // the cosole will show null because a has not been asigned a value yet.

 a = 7; 

 b = a;

 console.log(a) // the cosole will show 7 which the the number assigned to variable a

 // initializing a variable to an initial value at the same time it is declared

 var a = 9;
 // var a is declaring it and =9 is declaring it.


 // uninitialized variables 

 //INITIALIZE THESE VARIABLES
 var a;
  var b;
  var c;

  var a = 1;
  var b = 5;
  var c = "I am ";

  var a = a + 3; // will be 1+3
  var b = b + 10; // will be 5+10
  var c = c + "string"; // will be i am+ string.
  
  

  //CASE SENSITIVE 
  
  var StudentName;
  studentname = "Naum";
  // the code above will show reference error since studentname has not been defined.


  // ADDING NUMBERS 
  var sum = 5 + 10;
  console.log(sum)  
  // 15 will be displayed in the cosole


  //SUBTRACTING NUMBERS
var difference = 40-5; // the difference variable = 35


// MULTIPLICATION
var product = 2 * 10;
// product variable = 20


// DIVISION
var quotient = 60/2;
// quotient = 30

// INCREMENTING NUMBERS 
var myVar = 80;


myVar = myVar + 1;
//or
myVar ++; 
//inrements 80 to 81 

// decrementing
var myvar = 10;
myVar --;

// DECIMAL NUMBERS
var myDecimal = 4.5;


// MULTIPLY DECIMALS
//Similar to integer multiplication.

// REMAINDER
var remainder = 10 % 3;


//DECLARE STRING VARIABLES

var firstName = "Naum";
var lastName = "Jepkemboi";

// ESCAPING LITERAL QUOTES IN STRINGS
// quotes within the string
var myStr = "I like playing \"football\" soccer";
cosole.log(myStr)
// the console with show the string without the slash and without igoning the quotations inside the main quotation.

// QUOTING STRINGS WITH SINGLE QUOTES
// Use single quotes as the main quotation to escape the slash
var myStr = 'I like playing \"football\" soccer';


//ESCAPING SEQUENCES IN STRINGS

/*
 CODE   OUTPUT
 \'      single quote
\"       double quote
\\       backslash
\n       newline
\r       carriage return
\t       tab
\b       backspace
\f       form feed 
*/


//example
var myStr = "FirstLine\n \t\\SecondLine\nThirdLine"

// CONCATENATING STRINGS WITH PLUS OPERATOR
// joining character strings end-to-end.

var myStr = "My name is Naum." + "I am a student."; 
console.log(myStr)
// My name is Naum. I am a student.

//use of += to concatenate
var ourStr = "My name is Naum. ";
ourStr +="I am a student."


//CONCATENATE STRINGS WITH VARIABLES
var myName = "NaumLagat";
var ourStr = "Hello, my name is " + myName + ", how are you doing? ";
console.log(myStr)
// console log outputs: Hello, my name is NaumLagat how are you doing?


//APPENDING VARIABLES TO STRINGS
var anAdjective = "Wonderful!";
var myStr = "My name is ";
myStr += anAdjective;
// console log will output my name is Wonderful!

// LENGTH OF A STRING
var firstNameLength = 0;
var firstName = "Lagat";
firstNameLength = firstName.length;
//    .length will return an integer showing the number of charactes in the string 
//  eg: 5

// BRACKET NOTATION TO FIND FIRST CHARACTER IN STRING
//JavaScript uses zero-based indexing-> start counting from 0
// It is a way to get a character at a specific index within a string.
 var firstLetterOfFirstName = ""
 var firstName = "Naum"
 var firstLetterOfFirstName = firstName [0];
 console.log(0)
// console outupts N

// N=0, a=1, u=2, m=3 


// STRING IMUTABILITY
// IMUTABILE -> They cannot be altered once created
var myStr = "Jello world";

myStr [0] = {H};
//We cannot change individual characters.
myStr = "Hello world";


//BRACKET NOTATION TO FIND nth CHARACTER IN A STRING
var firstLetterOfFirstName = ""
 var firstName = "Naum"
 var firstLetterOfFirstName = firstName [0];

 // To find the 3rd leter replace 0 with 2
 var thirdLetterOfFirstName = firstName [2];


//BRACKET NOTATION TO FIND LAST CHARACTER IN A STRING
 var firstName = "Naum"
 var firstLetterOfFirstName = firstName [firstName.length - 1];
/* .length-1 will show the last index
we subract 1 since its indexing starts with o
*/

// FINDING nth TO LAST LETER IN A STRING
var firstName = "Naum"
 var secondToLastLetterOfFirstName = firstName [firstName.length - 2]


 // MULTIPLE VALUES ARRAYS
 var ourArray =["Naum" , 21];


 //NESTED ARRAY
 var ourArray =[["Naum" , 21], ["Deborah", 9]];

 // ACCESS ARRAYS WITH INDEXES
 var ourArray = [10,20,30];
var ourData = [0]; // it is index 1,, is equals to 10
 console.log(myData)
// console outputs 10

// MODIFY ARRAY DATA WITH INDEXES
var ourArray = [15,20,2];
ourArray[1] = 10; // The new array will be  [10,15,20,25]

//MANIPULATE ARRAY USING PUSH()
var ourArray = ["Naum", "j", "Lagat"];
ourArray.push (["is", "happy"]);
// our array is now ["Naum", "j", "Lagat", ["is", "happy"]]


//MANIPULATE ARRAYS WITH POP
var ourArray = [1,2,3,4];
var removedFromOurArray = ourArray.pop();
// 4 is removed from the array and the new aray is [1,2,3]


//MANIPULATE ARRAYS USING SHIFT()
// Removes the first element in an array
var ourArray = [1,2,3,4];
var removedFromOurArray = ourArray.shift();
// 1 is removed from the array and the new aray is [2,3,4]


//MANIPULATE ARRAYS USING UNSHIFT()
//adds an element to the begining of the array
var ourArray = ["Naum", "j", "Lagat"];
ourArray.shift(); // new array becomes ["j", "Lagat"]
ourArray.unshift("Memo"); // new array becomes ["Memo", "j", "Lagat"


//CREATING REUSABLE CODE
function ourReusableFunction() {
  console.log ("Hello, World");
}

//when you write the function (ourReusableFunction), hello world is displayed in the console.



//PASSING VALUES TO FUNCTIONS WITH ARGUMENTS

// PARAMETERS -> Variables that act as placeholders for values to be input to a function when it is called.

function ourFunctionWithArgs(a, b) {
  console.log(a+b);
}
ourFunctionWithArgs(10,6);  // output = 4

