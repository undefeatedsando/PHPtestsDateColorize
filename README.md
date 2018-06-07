# PHPtestsDateColorize

This is PHP-sample which shows usage and manipulations with PHP date&time functions.

## What it does?

You insert date in text style, like "last Sunday" or "12 July 1990". Script checks if it is future date or past. Then it colors it. Red = past, green = future (and present).

## PHP date and time functions cheatshit
<
date_default_timezone_set('Europe/Moscow'); //this gives you correct hours
date() //THIS WON'T WORK
date("Y.m.d") //this gives current date
date("Y-m-d h:i:sa", $d) //this transforms $d to specialized format
mktime(hour,minute,second,month,day,year) //this is probably useless function
strtotime("+1 Month", $date) //this is EXTREMELY USEFUL function
>

##Running code

If you are lazy and don't want to mess up with local or remote server, copy code [here](http://phpfiddle.org/ "PHP fiddle") and just run it.