# PHP exercise
In this little PHP exercise, you will learn to use simple PHP commands. There are mainly two parts that you need to complete. In **PART 1** you will learn simple PHP commands that you will use later in **PART 2**. In **PART 2** you need to download the repository and try solve.

**PART 1**
1. Go through the Quick PHP introduction below
**PART 2**
2. After completing step 1 - go and download this repository
3. Next go and open **index.php** file with your editor (vscode or brackets)
4. I've inserted PHP comments with instructions inside each PHP file that you should try to solve
5. Repeat **step 4** for all the other PHP files

## PART 1 - Quick introduction to PHP

This is a quick introduction to the programming language PHP

### Create a new PHP-file
Go and open your favorite text-editor (eg. Visual Studio Code or Brackets). Create a new file and save it as **index.php**

### Write your first PHP code

Always when you want to write some PHP code you must start with **opening PHP tag** and **closing PHP tag**.  You must enter exactly like the example below:

```php
<?php 

?>
```

### Print out data to screen
There are two ways that you can output data to the screen in PHP: **echo** or **print**. Remember that you must surround a string with either a *'single'* of *"double"* quotation mark. The closing tag of a block of PHP code automatically implies a *semicolon* **;** 
```php
<?php 
 echo "This is a string where I use echo surrounded with double quotation";
 print 'This is another string where I use print surrounded with single quotation';
?>
```

### Storing information in PHP variables

Variables are "containers" for storing information. Creating variables in PHP, always begins with the **$** sign, followed by the **name** of the variable. In the example below I assign the variable **$firstname** a value by using the **=** character. PHP generally uses *semicolons* **;** to mark the end of a statement:
```php
<?php 
   $firstname = "Sally";
?>
```

### Datatypes in PHP

PHP supports different datatype.
- An integer is a non-decimal number between -2,147,483,648 and 2,147,483,647
- A float (floating point number) is a number with a decimal point or a number in exponential form
- A string is a sequence of characters, like "Hello world!"
- A Boolean represents two possible states: TRUE or FALSE
```php
<?php 
   $flotingnumber = 199.95;
   $integernumber = 123456;
   $string = "This is a string";
   $boolean = true;
?>
```

### Comments in PHP
PHP supports several ways of commenting:
```php
<?php 
   // This is a single-line comment

   # This is also a single-line comment

   /* 
      This is a multiline comment 
      and its continue on second line
   */
?>
```

### PHP is case-sentative
Case-sensitive means if you, for example, create a PHP variable (eg. *$Firstname*) where the first letter begins with an uppercase and another variable but with the same name, but this time all letters with lowercase (eg. *$firstname*), then PHP will recognize this as two different variables.".
```php
<?php  
 $firstname = "Joe";
 $Firstname = "Kelly";
 echo $firstname // output Joe
 echo $Firstname // output Kelly
?>
```

### PHP if-statement
Conditional statements are used to perform different actions based on different conditions. The if statement executes some code inside the curly brackets if one condition is true.
```php
<?php  
 $age = 18;
 if ($age >= 18) {echo 'You are allowed to driver a car 🚘 in Denmark';}
?>
```

### PHP if-else statement
The if...else statement executes some code if a condition is true and another code if that condition is false.
```php
<?php  
 $age = 70;
 if ($age < 18) {echo 'You are NOT allowed to drive car 🚘 in Denmark';}
 elseif ($age >= 18 AND $age <= 70) {echo 'You are allowed to drive car 🚘 in Denmark';}
 else {echo 'It might be a good idea to have a medical check-up by your doctor if you want to continue driving car';}
 
?>
```

### PHP date function
The PHP date() function is used to format a date and/or a time.

Here are some characters that are commonly used for dates:

- d - Represents the day of the month (01 to 31)
- m - Represents a month (01 to 12)
- Y - Represents a year (in four digits)
- l (lowercase 'L') - Represents the day of the week

```php
<?php
  echo "Today is " . date("Y/m/d") . "<br>"; # 2020/08/22
  echo "Today is " . date("Y") . "<br>";     # 2020
  echo "Today is " . date("m-d") . "<br>";   # 08-22
  echo "Today is " . date("l");              # Saturday
?>
```

### PHP include function
The **include** function in PHP takes all the text/code/markup that exists in the specified file and copies it into the file that uses the **include** function
#### Create a footer.php file
Go and create a new PHP-file with your editor (eg- Brackets) and  name it **footer.php**. Insert the PHP-code below into the newly created **footer.php** file:
```php
#footer.php file
<?php
echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
?>
```

#### Create a frontpage.php file
Now finally go and create a new PHP-file with your editor (eg. Brackets) and name it **frontpage.php**. To include the **footer.php** file in this newly created **frontpage.php** file, use the include function in PHP:

```php
#frontpage.php file
<html>
<head>...</head>
<body>

<h1>Welcome to my frontpage!</h1>
<p>Some text.</p>
<p>Some more text.</p>
<?php include 'footer.php';?>

</body>
</html>
```

### Learn more about PHP 
If you want to learn more about PHP please check following websites:

- [tutorialspoint](https://www.tutorialspoint.com/php/index.htm)
- [code-academy](https://www.codecademy.com/learn/learn-php)
- [w3school](https://www.w3schools.com/php/DEFAULT.asp)
