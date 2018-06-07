
<h1>This is deadly simple datecheck script</h1>
<h3>Input date in english. If it is past, it will be <h2 style = "color:red;">red</h2>. If it is future, it will be <h2 style = "color:green;">green</h2></h3>
<?php

date_default_timezone_set('Europe/Moscow');
if (checkRequest()!=""){
    echo packDate(checkRequest());
}

?>
<form action="<?php echo basename(__FILE__, '.php')?>.php" method="post">
 Time:<br>
  <input type="text" name="input_date"><br>
  <input type="submit" value="Submit">
</form>

<?php
/*Checks if your request is empty*/
function checkRequest(){
    if(isset($_POST["input_date"]))
   {
    return strtotime($_POST["input_date"]);
   }
   else{
    return "";
   }
}
/*Checks if time is future*/
function isFuture($date){
    if ($date>=strtotime("now")){
        return true;
    }
    else{
        return false;
    }
}
/*Converts date to specialized format*/
function displayDate($date, $format = "d:m:Y"){
    return date($format, $date);
}
/*Adds colors*/
function packDate($date){
$red = 'red';
$green = 'green';
$pattern = '<p style = "color:black">#</p>';
$beautifulDate = displayDate($date);
$pattern = str_replace("#", $beautifulDate, $pattern);
    if (isFuture($date)){
    $pattern = str_replace("black", $green, $pattern);
    } else{
    $pattern = str_replace("black", $red, $pattern);
    }
return $pattern;
}
?>