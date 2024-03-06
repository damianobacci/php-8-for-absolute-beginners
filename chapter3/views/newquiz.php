<?php 
$quizIsSubmitted = isset($_POST["quiz-submitted"]);
if ($quizIsSubmitted) {
    $answer = $_POST["answer"];
    $info = showQuizResponse($answer);
} else {
    include_once"views/quizform.php";
}

function showQuizResponse( string $answer) {
    $response = "<p>You clicked $answer</p>";
    $response .= "<p><a href='index.php?page=newquiz'>Try quiz again?</a></p>";
    return $response;
}

?>