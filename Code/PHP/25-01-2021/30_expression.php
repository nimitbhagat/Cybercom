<?php

$name="Cyebrcom Creation";

echo(preg_match('/Cyebrcom/',$name));

echo("<BR>");

echo(preg_match('/nimit/',$name));

echo("<BR>");

if(preg_match('/Cyebrcom/',$name)){
    echo("Match Found");
}else{
    echo("Match Not Found");
}

?>