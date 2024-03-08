<?php 
$style = "
<style>
nav a:nth-child(5) {
    text-decoration: underline;
}
.label {
    display: block;
}
</style>";

$quizIsSubmitted = isset($_POST["bmi-submitted"]);
if ($quizIsSubmitted) {
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $bmi = $weight / (2 * ($height/100));
    $info = showQuizResponse($bmi);
} else {
    $info = "
<form method='post' action='index.php?page=bmi'>
<p>Calculate your BMI with this tool.</p>
<label class='label 'for='weight'>Weight in KG</label><input type='number' name='weight' id='weight'/>
<label class='label for='height'>Height in CM</label><input type='number' name='height' id='height'/>
<input type='submit' name='bmi-submitted' value='Calculate BMI'/>
</form>";
}

function showQuizResponse( string $bmi) {
    $formattedBMI = number_format($bmi,2);
    $response = "<p>Your BMI is $formattedBMI</p><p>More precisely, it's $bmi</p>";
    $response .= "<p><a href='index.php?page=bmi'>Calculate again?</a></p>";
    return $response;
}
