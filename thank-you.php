<?php require "connection/connect.php"; ?>
<?php require "includes/header.php"; ?>


<?php

$name              = mysql_real_escape_string($_POST['givenname']);
$email             = mysql_real_escape_string($_POST['email']);
$answerOne         = mysql_real_escape_string($_POST['question3']);
$answerTwo         = mysql_real_escape_string($_POST['question4']);
$answerThree       = mysql_real_escape_string($_POST['question5']);
$answerFour        = mysql_real_escape_string($_POST['question6']);
$answerFive        = mysql_real_escape_string($_POST['question7']);
$answerSix         = mysql_real_escape_string($_POST['question8']);
$answerSeven       = mysql_real_escape_string($_POST['question9']);
$answerEight       = mysql_real_escape_string($_POST['question10']);
$answerNine        = mysql_real_escape_string($_POST['question11']);
$answerTen         = mysql_real_escape_string($_POST['question12']);
$answerEleven      = mysql_real_escape_string($_POST['question13']);
$answerTwelve      = mysql_real_escape_string($_POST['question14']);
$answerThirteen    = mysql_real_escape_string($_POST['question15']);
$answerFourteen    = mysql_real_escape_string($_POST['question16']);
$answerFifteen     = mysql_real_escape_string($_POST['question17']);
$answerSixteen     = mysql_real_escape_string($_POST['question18']);
$answerSeventeen   = mysql_real_escape_string($_POST['question19']);
$answerEighteen    = mysql_real_escape_string($_POST['question20']);
$answerNineteen    = mysql_real_escape_string($_POST['question21']);
$answerTwenty      = mysql_real_escape_string($_POST['question22']);
$answerTwentyone   = mysql_real_escape_string($_POST['question23']);
$answerTwentytwo   = mysql_real_escape_string($_POST['question24']);
$answerTwentythree = mysql_real_escape_string($_POST['question25']);

?>

<?php

$sql = "INSERT INTO techtest (name, email, question_one, question_two, question_three, question_four, question_five, question_six, question_seven, question_eight, question_nine, question_ten, question_eleven, question_twelve, question_thirteen, question_fourteen, question_fifteen, question_sixteen, question_seventeen, question_eighteen, question_nineteen, question_twenty, question_twentyone, question_twentytwo, question_twentythree)
VALUES ('$name', '$email', $answerOne, $answerTwo, $answerThree, $answerFour, $answerFive, $answerSix, $answerSeven, $answerEight, $answerNine, $answerTen, $answerEleven, $answerTwelve, $answerThirteen, $answerFourteen, $answerFifteen, $answerSixteen, $answerSeventeen, $answerEighteen, $answerNineteen, $answerTwenty, $answerTwentyone, $answerTwentytwo, $answerTwentythree)";

if ($conn->query($sql) === TRUE) {
  echo '<div class="response container"><h3>Thank you for taking our test, '.$name.'</h3></div><br>';
} else {
  echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
