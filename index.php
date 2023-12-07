<?php
// &$a - присвоєння за посиланням а не за значенням
// . - конкатенація також як і .= аналог +=


////////for

$a = 10;

// for ($i = 1; $i <= $a; $i++) {
//   echo "$i<br>";
// };


// $i = 0;

// for (;;) {
//   echo "$i<br>";

//   $i++;

//   if ($i === 10) break;
// };

$args = ['Ann', 'Ben', 'Max'];

for ($i = 0; $i < count($args); $i++) {
?>
  <h2><?php echo "$args[$i]" ?></h2><?php
                                  };
                                    ?>

<?php



/////////////////while

// $i = 1;


// while ($i <= 10) {
//   echo $i . "<br>";
//   $i++;
// };




$i = 1;
$row = 3;
$col = 3;

echo "<table border=\"1\">";
while ($i <= $row) {
  echo "<tr>";
  $j = 1;
  while ($j <= $col) {
    echo "<td>Pядок: " . $i . " Стовбець: " . $j . "</td>";
    $j++;
  }
  echo "</tr>";
  $i++;
};
echo "</table>";



$year = 1922;
echo "<select>";

while ($year <= 2024) :
  echo "<option value=" . $year . ">$year</option>";
  $year++;
endwhile;
echo "</select><br>";



/////////do....while

$i = 1;

do {
  echo $i . "<br>";
  $i++;
} while ($i <= 10);



//////foreach

$container = [
  "videos" => "3",
  "songs" => "8",
  "games" => "5",
];

foreach ($args as $arg) {
  $arg .= ".";
  echo "$arg<br>";
};

foreach ($container as $key => $item) {
  echo $key . ": $item <br>";
}


?>