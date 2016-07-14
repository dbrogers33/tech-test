<?php require "connection/connect.php"; ?>
<?php require "includes/header.php"; ?>


<?php
// storing answers as variables
$name              = mysqli_real_escape_string($conn, $_POST['givenname']);
$email             = mysqli_real_escape_string($conn, $_POST['email']);
$answerOne         = mysqli_real_escape_string($conn, $_POST['question3']);
$answerTwo         = mysqli_real_escape_string($conn, $_POST['question4']);
$answerThree       = mysqli_real_escape_string($conn, $_POST['question5']);
$answerFour        = mysqli_real_escape_string($conn, $_POST['question6']);
$answerFive        = mysqli_real_escape_string($conn, $_POST['question7']);
$answerSix         = mysqli_real_escape_string($conn, $_POST['question8']);
$answerSeven       = mysqli_real_escape_string($conn, $_POST['question9']);
$answerEight       = mysqli_real_escape_string($conn, $_POST['question10']);
$answerNine        = mysqli_real_escape_string($conn, $_POST['question11']);
$answerTen         = mysqli_real_escape_string($conn, $_POST['question12']);
$answerEleven      = mysqli_real_escape_string($conn, $_POST['question13']);
$answerTwelve      = mysqli_real_escape_string($conn, $_POST['question14']);
$answerThirteen    = mysqli_real_escape_string($conn, $_POST['question15']);
$answerFourteen    = mysqli_real_escape_string($conn, $_POST['question16']);
$answerFifteen     = mysqli_real_escape_string($conn, $_POST['question17']);
$answerSixteen     = mysqli_real_escape_string($conn, $_POST['question18']);
$answerSeventeen   = mysqli_real_escape_string($conn, $_POST['question19']);
$answerEighteen    = mysqli_real_escape_string($conn, $_POST['question20']);
$answerNineteen    = mysqli_real_escape_string($conn, $_POST['question21']);
$answerTwenty      = mysqli_real_escape_string($conn, $_POST['question22']);
$answerTwentyone   = mysqli_real_escape_string($conn, $_POST['question23']);
$answerTwentytwo   = mysqli_real_escape_string($conn, $_POST['question24']);
$answerTwentythree = mysqli_real_escape_string($conn, $_POST['question25']);

// Checking Answers to Question 1
if ($answerOne === "1") {
  $questionOneGrade = 1;
} else {
  $questionOneGrade = 0;
}

// Checking Answers to Question 2
if ($answerTwo === "2") {
  $questionTwoGrade = 1;
} else {
  $questionTwoGrade = 0;
}

// Checking Answers to Question 3
if ($answerThree === "1") {
  $questionThreeGrade = 1;
} else {
  $questionThreeGrade = 0;
}

// Checking Answers to Question 4
if ($answerFour === "3") {
  $questionFourGrade = 1;
} else {
  $questionFourGrade = 0;
}

// Checking Answers to Question 5
if ($answerFive === "3") {
  $questionFiveGrade = 1;
} else {
  $questionFiveGrade = 0;
}

// Checking Answers to Question 6
if ($answerSix === "2") {
  $questionSixGrade = 1;
} else {
  $questionSixGrade = 0;
}

// Checking Answers to Question 7
if ($answerSeven === "2") {
  $questionSevenGrade = 1;
} else {
  $questionSevenGrade = 0;
}

// Checking Answers to Question 8
if ($answerEight === "2") {
  $questionEightGrade = 1;
} else {
  $questionEightGrade = 0;
}

// Checking Answers to Question 9
if ($answerNine === "4") {
  $questionNineGrade = 1;
} else {
  $questionNineGrade = 0;
}

// Checking Answers to Question 10
if ($answerTen === "3") {
  $questionTenGrade = 1;
} else {
  $questionTenGrade = 0;
}

// Checking Answers to Question 11
if ($answerEleven === "4") {
  $questionElevenGrade = 1;
} else {
  $questionElevenGrade = 0;
}

// Checking Answers to Question 12
if ($answerTwelve === "5") {
  $questionTwelveGrade = 1;
} else {
  $questionTwelveGrade = 0;
}

// Checking Answers to Question 13
if ($answerThirteen === "1") {
  $questionThirteenGrade = 1;
} else {
  $questionThirteenGrade = 0;
}

// Checking Answers to Question 14
if ($answerFourteen === "1") {
  $questionFourteenGrade = 1;
} else {
  $questionFourteenGrade = 0;
}

// Checking Answers to Question 15
if ($answerFifteen === "3") {
  $questionFifteenGrade = 1;
} else {
  $questionFifteenGrade = 0;
}

// Checking Answers to Question 16
if ($answerSixteen === "2") {
  $questionSixteenGrade = 1;
} else {
  $questionSixteenGrade = 0;
}

// Checking Answers to Question 17
if ($answerSeventeen === "5") {
  $questionSeventeenGrade = 1;
} else {
  $questionSeventeenGrade = 0;
}

// Checking Answers to Question 18
if ($answerEighteen === "3") {
  $questionEighteenGrade = 1;
} else {
  $questionEighteenGrade = 0;
}

// Checking Answers to Question 19
if ($answerNineteen === "3") {
  $questionNineteenGrade = 1;
} else {
  $questionNineteenGrade = 0;
}

// Checking Answers to Question 20
if ($answerTwenty === "1") {
  $questionTwentyGrade = 1;
} else {
  $questionTwentyGrade = 0;
}

// Checking Answers to Question 21
if ($answerTwentyone === "2") {
  $questionTwentyoneGrade = 1;
} else {
  $questionTwentyoneGrade = 0;
}

// Checking Answers to Question 22
if ($answerTwentytwo === "1") {
  $questionTwentytwoGrade = 1;
} else {
  $questionTwentytwoGrade = 0;
}

// Checking Answers to Question 23
if ($answerTwentythree === "4") {
  $questionTwentythreeGrade = 1;
} else {
  $questionTwentythreeGrade = 0;
}

// Calculate Grade
$twenties = ($questionTwentyGrade + $questionTwentyoneGrade + $questionTwentytwoGrade + $questionTwentythreeGrade);
$pointsTotal = ($questionOneGrade + $questionTwoGrade + $questionThreeGrade + $questionFourGrade + $questionFiveGrade + $questionSixGrade + $questionSevenGrade + $questionEightGrade + $questionNineGrade + $questionTenGrade + $questionElevenGrade + $questionTwelveGrade + $questionThirteenGrade + $questionFourteenGrade + $questionFifteenGrade + $questionSixteenGrade + $questionSeventeenGrade +$questionEighteenGrade + $questionNineteenGrade + $twenties);
$gradePoints = ($pointsTotal / 23);
$grade = ($gradePoints * 100);
$finalGrade = round($grade);
?>

<?php

// Storing all results
$graded = "INSERT INTO grades (name, email, grade)
VALUES ('$name', '$email', $finalGrade)";

if ($conn->query($graded) === TRUE) {
  //echo '<div class="response container">All is good</h3></div><br>';
} else {
  echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO techtest (name, email, question_one, question_two, question_three, question_four, question_five, question_six, question_seven, question_eight, question_nine, question_ten, question_eleven, question_twelve, question_thirteen, question_fourteen, question_fifteen, question_sixteen, question_seventeen, question_eighteen, question_nineteen, question_twenty, question_twentyone, question_twentytwo, question_twentythree)
VALUES ('$name', '$email', $answerOne, $answerTwo, $answerThree, $answerFour, $answerFive, $answerSix, $answerSeven, $answerEight, $answerNine, $answerTen, $answerEleven, $answerTwelve, $answerThirteen, $answerFourteen, $answerFifteen, $answerSixteen, $answerSeventeen, $answerEighteen, $answerNineteen, $answerTwenty, $answerTwentyone, $answerTwentytwo, $answerTwentythree)";

if ($conn->query($sql) === TRUE) {
  echo '<div class="container"><div class="row"><div class="col-lg-4 col-lg-offset-4 col-xs-12"><img src="imgs/Hutson-Logo-Square.png" class="img-responsive"/></div></div>';
  echo '<div class="row"><div class="col-md-12"><h3 class="text-center">Thank you for taking our test, '.$name.'</h3></div></div></div><br>';
} else {
  echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
