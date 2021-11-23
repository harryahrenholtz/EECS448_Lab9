<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function mult($x, $y) {
  $z = $x*$y;
  return $z;
}

echo "<table>";
echo "<tr>  <th></th> <th>1</th> <th>2</th> <th>3</th> <th>4</th> <th>5</th> <th>6</th> <th>7</th> <th>8</th> <th>9</th> <th>10</th><tr>";

for($i=1; $i<=10; $i++)
{
  echo "<tr>";
  for($j=1; $j<=10; $j++)
  {
    if($j==1)
    {
      echo "<td><b>" . $i ."</b></td>";
    }
    echo "<td>" . mult($i, $j) . "</td>";
  }
  echo "</tr>";
}
echo "</table>";

 ?>
