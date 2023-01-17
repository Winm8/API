# API
* Categories f1 ---> f4
## File Name
* index.php
## Description
* Simple Math API
* Made in php
* Code in UTF-8
## Manual - Code Breakdown
### Manual
* Choose one of these operations: "sum","minus","multi","div","modulo"
* Write any 2 numbers
* Example :
* https://localhost/[index.php]/?oper=[minus]&numbers=[6],[15]
### Code Breakdown
#### Variables
* $numbers - For the declaration of numbers
* $operation - For the declaration of operation
* $result - We can only get it after both variables have been put in
* $report - Reports if code have been succesfull or not
#### Functions
* explode - Breaks string into an array
* filter_input - Gets a variable and filters it
* count - Counts elements in array
* echo - Outputs strings
## Errors
* If an operation was written wrong: wrong operation
* If you didn´t wrote any operations: no operation
* If you didn´t wrote any numbers: no numbers
## Output
* Output will be shown in json array
