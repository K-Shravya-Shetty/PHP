<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial 2</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-size:border-box;
    }
    .container{
        max-width:80%;
        background-color:rgb(223, 122, 122);
        margin:auto;
        padding:23px;
    }
</style>
<body>
    <div class="container">
        <h1> lets learn php</h1>
        <p> Voting status</p>
    <?php
    $age=34;
    if($age>18){
    echo "you can vote";
}
else if($age==17){
    echo "wait for one more year";
}
else{
    echo "you can not vote";
}
$languages=array("python","c++","php");
echo $languages[0];
echo count($languages);
//loops in php
$a=5;
while ($a <=10){
    echo "<br>the value of a is ";
    echo $a;
    $a++;
}
$a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }
     // Do while loop
$a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

     // For loop
    for ($a=5; $a <10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }
?>

    </div>
</body>
</html>