<?php
echo "<html><body>";
$answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];

$answer5 = $_POST['question-5-answers'];



$totalCorrect = 0;
echo "<center><h5>Kaden's Super Auto Grader Says:</h5><br><div style='padding:10px;margin-left:auto;margin-right:auto;text-align:left;'>";

if ($answer1 == "B") {
  echo "<div>Question 1: Correct</div>";
  $totalCorrect++;
}else {
  echo "<div>Question 1: <b>Incorrect</b></div>";
  echo "<div>You Answered: " . $answer1 . "<br>Correct Answer: B) Madrid</div>";
}

if ($answer2 == "A") {
  echo "<div style='margin-top:10px;'>Question 2: Correct</div>";
  $totalCorrect++;
}else {
  echo "<div style='margin-top:10px;'>Question 2: <b>Incorrect</b></div>";
  echo "<div>You Answered: " . $answer2 . "<br>Correct Answer: A) Chicken</div>";
}

if ($answer3 == "A") {
  echo "<div style='margin-top:10px;'>Question 3: Correct</div>";
  $totalCorrect++;
}else {
  echo "<div style='margin-top:10px;'>Question 3: <b>Incorrect</b></div>";
  echo "<div>You Answered: " . $answer3 . "<br>Correct Answer: A) Broncos</div>";
}

if ($answer4 == "C") {
  echo "<div style='margin-top:10px;'>Question 4: Correct</div>";
  $totalCorrect++;
}else {
  echo "<div style='margin-top:10px;'>Question 4: <b>Incorrect</b></div>";
  echo "<div>You Answered: " . $answer4 . "<br>Correct Answer: C) 0.621371</div>";
}

if ($answer5 == "A") {
  echo "<div style='margin-top:10px;'>Question 5: Correct</div>";
  $totalCorrect++;
}else {
  echo "<div style='margin-top:10px;'>Question 5: <b>Incorrect</b></div>";
  echo "<div>You Answered: " . $answer5 . "<br>Correct Answer: A) Fish</div>";
}


echo "<div style='margin-top:15px;'>Your score: " . (($totalCorrect / 5) * 100) . "%</div>";
echo "</div></center>";
echo "</body></html>";
?>
