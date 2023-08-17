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
?>
    </div>
</body>
</html>