<?php
    $q1res = $_POST["q1"];
    $q2res = $_POST["q2"];
    $q3res = $_POST["q3"];
    $q4res = $_POST["q4"];
    $q5res = $_POST["q5"];

    $count = 0;
    $total = 5;

    $q1ans = "2021";
    $q2ans = "Washington D.C.";
    $q3ans = "10";
    $q4ans = "Patrick Mahomes";
    $q5ans = "Royals";

    echo "<p>Question 1: What year is it?<br>";
    echo "You Answered: " . $q1res . "<br>";
    echo "The Correct Answer: " . $q1ans . "<br><br>";

    echo "Question 2: What is the capital of the United States?<br>";
    echo "You Answered: " . $q2res . "<br>";
    echo "The Correct Answer: " . $q2ans . "<br><br>";

    echo "Question 3: What is 5+5?<br>";
    echo "You Answered: " . $q3res . "<br>";
    echo "The Correct Answer: " . $q3ans . "<br><br>";

    echo "Question 4: Who is the quarterback for the Chiefs?<br>";
    echo "You Answered: " . $q4res . "<br>";
    echo "The Correct Answer: " . $q4ans . "<br><br>";

    echo "Question 5: What MLB Team is based out of Kansas City?<br>";
    echo "You Answered: " . $q5res . "<br>";
    echo "The Correct Answer: " . $q5ans . "<br><br>";

    if($q1res == $q1ans)
    {
      $count++;
    }
    if($q2res == $q2ans)
    {
      $count++;
    }
    if($q3res == $q3ans)
    {
      $count++;
    }
    if($q4res == $q4ans)
    {
      $count++;
    }
    if($q5res == $q5ans)
    {
      $count++;
    }

    echo "Total Correct Answers: " . $count . "<br><br>";
    echo "Percentage: " . (($count/$total)*100) . "% </p>";

?>
