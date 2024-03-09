<?php 
$style = "
<style>
nav a:nth-child(6) {
    text-decoration: underline;
}
.label {
    display: block;
}
</style>";

$formIsSubmitted = isset($_POST["currency-submitted"]);
if ($formIsSubmitted) {
    $currency = $_POST["currency"];
    $converted = $_POST["converted"];
    $amount = $_POST["amount"];
    $info = "<p>You asked to convert $amount $currency into $converted.</p><p>The result is:</p>";
    $info .= convert($currency, $converted, $amount);
    $info .= "<p><a href='index.php?page=currency'>Convert a different amount?</a></p>";
} else {
    $info = "
<form method='post' action='index.php?page=currency'>
<p>This currency converter makes API calls to <a href='https://www.exchangerate-api.com/'>ExchangeRate</a> to find conversion rates.</p>
<p>Convert between selected currencies:</p>
<label class='label for='amount'>Amount</label><input type='number' name='amount' min='1' max='1000000000'/>
<label class='label 'for='currency'>From:</label>
<select name='currency'>
<option value='EUR'>EUR</option>
<option value='USD'>USD</option>
<option value='CHF'>CHF</option>
</select>
<label class='label 'for='converted'>To:</label>
<select name='converted'>
<option value='EUR'>EUR</option>
<option value='USD'>USD</option>
<option value='CHF'>CHF</option>
</select>
<input type='submit' name='currency-submitted' value='Convert'/>
</form>";
}

function convert( string $currency, string $converted, string $amount ) {
    $response = file_get_contents("https://v6.exchangerate-api.com/v6/API_KEY/pair/$currency/$converted/$amount");
    $response =json_decode($response);
    $conversion_result = $response->conversion_result;
    return $conversion_result;
}