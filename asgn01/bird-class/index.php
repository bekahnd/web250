<?php

class Bird {
  //Properties
  var $commonName;
  var $food;
  var $nestPlacement;
  var $clutchSize;
  var $conservationLevel;
  var $birdSong;

  //Methods
  function birdSong() {
    echo "<p>The " . $this->commonName . " has the call " . $this->birdSong. "</p>";
  }

}

$bird1 = new Bird;
$bird1->commonName = "Eastern Towhee";
$bird1->food = "seeds, fruits, insects, spiders";
$bird1->nestPlacement = "ground";
$bird1->clutchSize = "2 - 6 eggs";
$bird1->conservationLevel = "Low";
$bird1->birdSong = "drink-your-tea!";

echo "<p>Common Name: " . $bird1->commonName . "</p>";
echo "<p>Food: " . $bird1->food . "</p>";
echo "<p>Nest Placement: " . $bird1->nestPlacement . "</p>";
echo "<p>Clutch Size: " . $bird1->clutchSize . "</p>";
echo "<p>Conservation Level: " . $bird1->conservationLevel . "</p>";
echo $bird1->birdSong();

$bird2 = new Bird;
$bird2->commonName = "Indigo Bunting";
$bird2->food = "small seeds, berries, buds, and insects";
$bird2->nestPlacement = "fields and on the edges of woods, roadsides, and railroads";
$bird2->clutchSize = "3 - 4 eggs";
$bird2->conservationLevel = "Low";
$bird2->birdSong = "what! what!";

echo "<p>Common Name: " . $bird2->commonName . "</p>";
echo "<p>Food: " . $bird2->food . "</p>";
echo "<p>Nest Placement: " . $bird2->nestPlacement . "</p>";
echo "<p>Clutch Size: " . $bird2->clutchSize . "</p>";
echo "<p>Conservation Level: " . $bird2->conservationLevel . "</p>";
echo $bird2->birdSong();

?>