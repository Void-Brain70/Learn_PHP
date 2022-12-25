<?php
$str = "Anik Das";
//strlen() function
echo "String length->", strlen($str);
echo "<br>";
//string join with (.) operator
echo "Anik Das"." CSE". " 18101070";
echo "<br>";
//str_word_count() function
echo "Total Word->", str_word_count($str);
echo "<br>";
//strrev() function
echo "Reverse String->", strrev($str);
echo "<br>";
//strpos() function
echo "Serach item->", strpos($str, "das");
echo "<br>";
//str_replace() function
echo "Replace item->", str_replace("das", "Koyel", "Anik das");
echo "<br>";
//str_repeat() function
echo "Repeat->", str_repeat($str, 5);
echo "<br>";
//ltrim() and rtrim() function
echo "<pre>";
echo rtrim("   this is right trim  ");
echo "<br>";
echo ltrim("    this is left trim    ");
echo "</pre>";
?>