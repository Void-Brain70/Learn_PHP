<?php
$str = "Anik das";
echo "String length->", strlen($str);
echo "<br>";
echo "Total Word->", str_word_count($str);
echo "<br>";
echo "Reverse String->", strrev($str);
echo "<br>";
echo "Serach item->", strpos($str, "das");
echo "<br>";
echo "Replace item->", str_replace("das", "Koyel", "Anik das");
echo "<br>";
?>