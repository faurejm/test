<?php 

$MovieName = 'Indiana Jones and the Last Crusade';
$MovieSeen = true;
$MovieYear = 1989;
$MovieNote= 8.3;

$ConvBool = ($MovieSeen) ? 'Yes' : 'No';

echo "Movie: ";
echo $MovieName;
echo "<br>";
echo "Seen: ";
echo $ConvBool;
echo "<br>";
echo "Release Date: ";
echo $MovieYear;
echo "<br>";
echo "Note: ";
echo $MovieNote;

echo $MovieNote;