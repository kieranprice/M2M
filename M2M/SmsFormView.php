<?php


class SmsFormView
{
private $html;

public function __construct()
{
    $html = "";
}

public function __destruct()
{
    // TODO: Implement __destruct() method.
}

public function setHtml() {
$output = <<< HEREDOC
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SmsForm</title>
</head>
<body>
<form method="post">
<p>Switch State</p>
<input type="checkbox" name="switchOne">
<input type="checkbox" name="switchTwo">
<input type="checkbox" name="switchThree">
<input type="checkbox" name="switchFour"><br>
<p>Fan Direction</p>
<select name="fanDir">
<option value="forward">Forward</option>
<option value="reverse">Reverse</option>
</select><br>
<p>Heater Temperature</p>
<input type="number" name="temperature"><br>
<p>Keypad Number</p>
<input type="number" name="keypad"><br>
<button type="submit" value="submit"></button>
</form>

</body>
</html>
HEREDOC;

$this->html = $output;
}

public function getHtml() {
    return $this->html;
}
}