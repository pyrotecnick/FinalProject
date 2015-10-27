##Testcases

##Test case 1, Show Welcome Page with Current Time
Welcome Page should be shown upon user arrival with current time

###Input:
 * Navigate to site.
 
###Output:
 * The text "Please Select a Tool Above", is shown.
 * Current Date and Time are Displayed at Bottom of Page
 * Links to Home, Calculator, Unit Converter, and Periodic Table are shown

***

##Test case 2 Calculator

###Input:
 * Click "Calculator"

###Output:
 * No feedback message
 * The text "Enter Operands, select an operation, and press =", is shown.
 * Form for calculator is shown
 * Date and time are displayed at the bottom of the page

***

##Test case 2.1: Calculation without operand 1 fails

###Input:
 * Test case 2 Calculator
 * Click "=" button without filling in any fields

###Output:
 * Message "Please Fill in both Operands" is shown
 * Still shows the calculator form

***

##Test case 2.2: Calculation without operand 2 should fail

###Input:
 * Test case 2 Calculator
 * Enter a valid number into Operand 1
 * Click "=" button 

###Output:
 * Message: "Operand 2 Must be a Number" is shown

***

##Test case 2.3: Calculation with non-numeric characters should fail

###Input:
 * Test case 2 Calculator
 * Enter non-numerical characters into either operand
 * Click "=" button 

###Output:
 * If invalid input in Operand 1:
 * Message: "Operand 1 Must be a Number" is shown
 * If valid input in Operand 1 and invalid input in Operand 2:
 * Message: "Operand 2 Must be a Number" is show
 
***

##Test case 2.4: Calculation with no operation selected should fail

###Input:
 * Test case 2 Calculator
 * Enter a valid numbers in both operand 1 and 2
 * Click "=" button 

###Output:
 * Message: "Please Select an Operation" is shown

***

##Test case 2.5: Calculation with multiple operations selected should fail

###Input:
 * Test case 2 Calculator
 * Enter a valid numbers in both operand 1 and 2
 * Select multiple operations
 * Click "=" button 

###Output:
 * Message: "Please Only Select One Operation" is shown

***

##Test case 2.6 Addition Function Succedes

###Input:
 * Test case 2 Calculator
 * Enter 3 in operand 1 and 2 in operand 2
 * Select Addition operation
 * Click "=" button 
 
###Output:
 * Message: "5" is displayed
 
***

##Test case 2.7 Subtraction Function Succedes

###Input:
 * Test case 2 Calculator
 * Enter 3 in operand 1 and 2 in operand 2
 * Select Subtraction operation
 * Click "=" button 
 
###Output:
 * Message: "1" is displayed
 
***

##Test case 2.8 Multiplication Function Succedes

###Input:
 * Test case 2 Calculator
 * Enter 3 in operand 1 and 2 in operand 2
 * Select Multiplication operation
 * Click "=" button 
 
###Output:
 * Message: "6" is displayed
 
 ***

##Test case 2.9 Division Function Succedes

###Input:
 * Test case 2 Calculator
 * Enter 3 in operand 1 and 2 in operand 2
 * Select Division operation
 * Click "=" button 
 
###Output:
 * Message: "1.5" is displayed
 
 ***
 
##Test case 2.10 Modulus Function Succedes

###Input:
 * Test case 2 Calculator
 * Enter 3 in operand 1 and 2 in operand 2
 * Select Modulus operation
 * Click "=" button 
 
###Output:
 * Message: "1" is displayed
 
 ***
 
##Test case 2.11 Exponentiation Function Succedes

###Input:
 * Test case 2 Calculator
 * Enter 3 in operand 1 and 2 in operand 2
 * Select Exponentiation operations
 * Click "=" button 
 
###Output:
 * Message: "9" is displayed
 
 ***

##Test case 3 Unit Converter

###Input:
 * Click "Unit Converter"

###Output:
 * The text "Enter Input, Select a Conversion, and Press Convert" is shown
 * Form for Unit Conversion is shown
 * The text "Results are rounded to 2 decimal places" is shown
 * Date and time are displayed on the bottom of the page

***

##Test case 3.1: Conversion Without Input Fails

###Input:
 * Test case 3 Unit Converter
 * Click "convert" button without filling in the input field

###Output:
 * Message "Please Enter a Number to Convert" is shown
 
***

##Test case 3.2: Conversion With Non-numeric Input Fails

###Input:
 * Test case 3 Unit Converter
 * Enter non-numeric characters into the input field
 * Click "convert" button

###Output:
 * Message "Please Enter a Number to Convert" is shown
 
***
 
 ##Test case 3.3: Conversion With No Operation Selected Fails

###Input:
 * Test case 3 Unit Converter
 * Enter numeric characters into the input field
 * Click "convert" button

###Output:
 * Message "Please Select an Operation" is shown
 
***
 
 ##Test case 3.4: Conversion With Multiple Operations Selected Fails

###Input:
 * Test case 3 Unit Converter
 * Enter numeric characters into the input field
 * Select multiple conversions
 * Click "convert" button

###Output:
 * Message "Please Only Select One Operation" is shown
 
***
 
 ##Test case 3.5: Fahrenheit To Celsius Conversion Succedes

###Input:
 * Test case 3 Unit Converter
 * Enter 72 into the input field
 * Select Fahrenheit To Celsius Conversion
 * Click "convert" button

###Output:
 * Message "22.22" is shown
 
***
 
 ##Test case 3.6: Celsius To Fahrenheit Conversion Succedes

###Input:
 * Test case 3 Unit Converter
 * Enter -40 into the input field
 * Select Celsius To Fahrenheit Conversion
 * Click "convert" button

###Output:
 * Message "-40" is shown
 
***
 
 ##Test case 3.7: Pounds To Kilograms Conversion Succedes

###Input:
 * Test case 3 Unit Converter
 * Enter 165 into the input field
 * Select Pounds To Kilograms Conversion
 * Click "convert" button

###Output:
 * Message "74.84" is shown
 
***
 
 ##Test case 3.8: Kilograms To Pounds Conversion Succedes

###Input:
 * Test case 3 Unit Converter
 * Enter 20 into the input field
 * Select Kilograms To Pounds Conversion
 * Click "convert" button

###Output:
 * Message "44.09" is shown
 
***
 
 ##Test case 3.9: Miles To Kilometers Conversion Succedes

###Input:
 * Test case 3 Unit Converter
 * Enter 10 into the input field
 * Select Miles To Kilometers Conversion
 * Click "convert" button

###Output:
 * Message "16.09" is shown
 
***
 
 ##Test case 3.10: Kilometers To Miles Conversion Succedes

###Input:
 * Test case 3 Unit Converter
 * Enter 12 into the input field
 * Select Kilometers To Miles Conversion
 * Click "convert" button

###Output:
 * Message "7.46" is shown
 
***
 
 ##Test case 3.10:  Inches To Centemeters Conversion Succedes

###Input:
 * Test case 3 Unit Converter
 * Enter 7 into the input field
 * Select Inches To Centemeters Conversion
 * Click "convert" button

###Output:
 * Message "17.78" is shown
 
 ***
 
 ##Test case 3.11:  Centemeters To Inches Conversion Succedes

###Input:
 * Test case 3 Unit Converter
 * Enter 17 into the input field
 * Select Centemeters To Inches Conversion
 * Click "convert" button

###Output:
 * Message "6.69" is shown
 
  ***

##Test case 4 Periodic Table

###Input:
 * Click "Periodic Table"

###Output:
 * The text "Please enter atomic number to learn more" is shown
 * An input field and find button are shown
 * A rudimentary periodic table with only atomic numbers and atomic symbols is shown
 * Date and time are displayed on the bottom of the page
 
***

##Test case 4.1: Lookup Without Input Fails

###Input:
 * Test case 4 Periodic Table
 * Click "find" button without filling in the input field

###Output:
 * Message "Please Enter Atomic Number" is shown
 
***

##Test case 4.2: Lookup With non-numeric Input Fails

###Input:
 * Test case 4 Periodic Table
 * Enter non-numeric characters in the input field
 * Click "find" button

###Output:
 * Message "Please only enter Atomic Number" is shown
 
 ***

##Test case 4.3: Lookup With invalid Atomic Number Fails

###Input:
 * Test case 4 Periodic Table
 * Enter 125 in the input field
 * Click "find" button

###Output:
 * Message "Invalid Atomic Number" is shown
 
 ***

##Test case 4.4: Sucessfull Element Lookup

###Input:
 * Test case 4 Periodic Table
 * Enter 26 in the input field
 * Click "find" button

###Output:
 * Message "Name: Iron, Symbol: Fe, Atomic Weight: 55.845, Category: Transition Metal" is shown
 
 ***
 
 ##Test case 4.5: Sucessfull Element Lookup

###Input:
 * Test case 4 Periodic Table
 * Enter 99 in the input field
 * Click "find" button

###Output:
 * Message "Name: Einsteinium, Symbol: Es, Atomic Weight: 252, Category: Actinide" is shown
 
 ***
 
 ##Test case 5: Home Page

###Input:
 * Select Home Link

###Output:
 * The text "Please Select a Tool Above", is shown.
 * Current Date and Time are Displayed at Bottom of Page
 * Links to Home, Calculator, Unit Converter, and Periodic Table are shown