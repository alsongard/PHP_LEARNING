# CALCULATOR WEBSITE

## Description
This is a rensponsive website that takes a user input, perform either simple or complex mathematical operations depending on the users option.

## table of content
* [Installation](#installation)  
* [Usage](#usage)  
* [Features](#features)  
* [License](#license)  

## Installation

### Requirements
1. Xampp application
2. Morder Web browser  

### Steps
1. Clone the repository to your htdocs file inside your xampp installation folder
``git clone ``   
2. Run the website:    
To run the website enter : ``localhost\calculator.php``  
3. Prototype Model:  
A prototype model is also provided that uses javascript for performing complex mathematical operations and is more dynamic. File name : *calculator_prototype.php.*  

<br>

## Usage 
The website takes user input using html input elements. Dpending on  the type of calculation the user wants to perform the result will be displayed.  


<br>

## Features
The website takes user input using input html elements. After which the user is required to either choose to perform either simple or complex arithmetic calculations. After selecting either options, form validation follows next. Uses tailwindcss for adding styling to the html elements.

**Calculator code**  
In form validation, ``$_SERVER["REQUEST_METHOD"]`` is used to check if the form submission is correct and submited by the given method which can either be ``GET`` or ``POST`` method. This is set by the method form attribute.  
The data is assigned to the variables by using the method for which the form is submitted in our case, it's the ``POST`` method. 

**``Empty() function``**   
The empty() function is used to check if the given variable is empty. if empty it returns true and otherwise it's false.   
The values given below are considered as empty:
- "" (empty string)
- 0  
- null  

**Mathematical functions:**   
PHP provides inbuilt mathematical function for calculating the following:  

| Mathematical Operation | PHP Function |
| :---- | :----: |
| logarithm | ``log()`` |
| sin | ``sin()`` |
| tan | ``tan()`` |
| cos | ``cos()`` |
| power | ``pow()`` |

<br>


## License
The project is licensed under the GPlv2 Licencse
