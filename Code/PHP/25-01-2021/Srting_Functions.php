<?php

//Original String
$s="Lorem ipsum dolor sit amet, 'consectetur' adipisicing elit. Eaque et vero, perferendis ab libero laboriosam, atque voluptatibus harum nobis excepturi quia deleniti aliquam animi cupiditate repellat tempora error laudantium corrupti.";
$s2="Lorem ipsum dolor sit amet.";
echo ($s);

//Total Number Words in String
echo("<hr><b>Totla Words</b><BR>");
echo (str_word_count($s));

//Array of words
echo("<hr><b>Array of Words</b><BR>");
print_r (str_word_count($s,1));

//Array of words wit starting index
echo("<hr><b>Array of Words With Starting Index</b><BR>");
print_r (str_word_count($s,2));

//Shuffle Whole String
echo("<hr><b>Shuffle The String</b><BR>");
print_r (str_shuffle($s));


//Display Only 10 Characters of String from specified index
echo("<hr><b>Shuffle The String</b><BR>");
print_r (substr(str_shuffle($s),0,10));


//Reverse The String
echo("<hr><b>Reverse String</b><BR>");
print_r (strrev($s));


//Similarities Between 2 string in %
echo("<hr><b>Similarity beteween two String</b><BR>");
similar_text($s,$s2,$result);
print_r ($result);

//string Length
echo("<hr><b>Length of string</b><BR>");
print_r (strlen($s));

//Removing Empty spaces from starting and end of string
echo("<hr><b>Remove Space</b><BR>");
print_r (trim($s));

//Add slash
echo("<hr><b>added slashes instead of space</b><BR>");
print_r (addslashes($s));
?>