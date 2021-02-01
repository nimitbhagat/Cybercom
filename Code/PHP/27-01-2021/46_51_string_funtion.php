<?php
$s="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas consequuntur optio, incidunt voluptas aut ducimus aspernatur voluptate. Nobis, labore assumenda? Illo perferendis saepe, commodi sunt distinctio soluta cum architecto eos!";

echo("<b>Original String : </b>");
echo ($s);
echo ("<hr>");

//Length of string
echo("<b>Length Of String : </b>");
echo (strlen($s));
echo ("<hr>");

//string to uppercase
echo("<b>Change case to uppercase : </b>");
echo (strtoupper($s));
echo ("<hr>");

//string to lowercase
echo("<b>Change case to lowercase : </b>");
echo (strtolower($s));
echo ("<hr>");

//string position
echo("<b>String Position : </b>");
echo (stripos($s,"o",15));
echo ("<hr>");