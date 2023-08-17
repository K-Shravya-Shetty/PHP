<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <div class="container">
        this is my first php file
        <?php
        echo "hello world this is printed using php";
        //this is a comment
        /*this is 
        a multiline commemt*/
        //variables in php
        $variable1=6;
        $variable2=3;
        echo $variable1;
        echo $variable2;
        echo "<br>";//new line
        echo $variable1+$variable2;
        ?>
        <?php
        define('PI',3.14);//constat value
        //operators in PHP
        // Arithmetic operators
        echo "the value of the variable1 + variable2 is";
        echo "<br>";
        echo $variable1 + $variable2;
        echo "<br>";
        echo "the value of the variable1 - variable2 is";
        echo "<br>";
        echo $variable1 - $variable2;
        echo "<br>";
        echo "the value of the variable1 * variable2 is";
        echo "<br>";
        echo $variable1 * $variable2;
        echo "<br>";
        echo "the value of the variable1 / variable2 is";
        echo "<br>";
        echo $variable1 / $variable2;
        echo "<br>";
        // Assignment operators
        $newVar=$variable1;
        $newVar +=1;//increments the value of the variable by one 
        echo "the value of the new variable is ";
        echo $newVar;
        // Comparision operators
        echo "<h1> comparision operators</h1>";
        echo "the value of 1==4 is ";
        echo var_dump(1==4);//it is a function used to know the value of the variable
        echo "<br>";
        echo "the value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "the value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "the value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        // Increment/Decrement operators
        echo $variable1++;
        echo "<br>";
        echo $variable1--;
        echo "<br>";
        echo ++$variable1;
        echo "<br>";
        echo --$variable1;
        echo "<br>";
        // Logical operators
        $myvar= (true && true);
        echo var_dump($myvar);
        echo "<br>";
        $myvar= (false && true);
        echo var_dump($myvar);
        echo "<br>";
        $myvar= (false || true);
        echo var_dump($myvar);
        echo "<br>";
        $myvar= (false || true);
        echo var_dump($myvar);
        echo "<br>";
        $myvar= (false || false);
        echo var_dump($myvar);
        echo "<br>";
        /*similarly the xor and not operators are possible to be used in the similar way*/
        //data types in php
        echo "<br>datatypes<br>";
        //string
        $var ="this is a string";
        echo var_dump($var);
        echo "<br>";
        //integer
        $var1 =72;
        echo var_dump($var1);
        //float
        echo "<br>";
        $var =75.5;
        echo var_dump($var);
        echo "<br>";
        //boolean
        $var =true;
        echo var_dump($var);
        echo "<br>";
        //array
        //object
        echo PI;
        ?>
    </div>
</body>
</html>