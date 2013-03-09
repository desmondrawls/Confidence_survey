<?php //test storing answers to confidence survey
require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die ("Unable to connect to MySql: " . mysql_error());

mysql_select_db($db_database, $db_server)
or die("unable to select database: " . mysql_error());

if (isset($_POST['name']) &&
isset($_POST['date']) &&
isset($_POST['confidence']))

{
$user = get_post('name');
$date = get_post('date');
$confidence = get_post('confidence');

$query = "INSERT INTO confidence_survey VALUES" . "('$user', '$date', '$confidence')";

if (!mysql_query($query, $db_server))
echo "INSERT failed: $query<br/>" . mysql_error() . "<br/><br/>";

}

mysql_close($db_server);

function get_post($var)
{
  return mysql_real_escape_string($_POST[$var]);
}



?>

<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="container">
<div id="header"></div>
<div id="leftnav">
Do you like drugs?<br>
Do you like drugs tonight?<br>
Do you like drugs?<br>
Do you like drugs tonight?<br>
Do you like drugs?<br>
Do you like drugs tonight?<br>
Do you like drugs?<br>
Do you like drugs tonight?<br>
Do you like drugs</div>
<div id="rightnav">
Do you like drugs.<br>
Do you like drugs tonight.<br>
Do you like drugs.<br>
Do you like drugs tonight.<br>
Do you like drugs.<br>
Do you like drugs tonight.<br>
Do you like drugs.<br>
Do you like drugs tonight.<br>
Do you like drugs.</div>
<div id="body"><br>Thanks for being honest! We want to help! What do you need?<br><br><br>
<body>
<form action = "http://www.theguidingcircle.com/" method = "post">
<input type = "submit" value = "I need knowledge of self"></input><br/><br/>
</form>
<form action = "https://fetlife.com/" method = "post">
<input type = "submit" value = "I need Love!"></input><br/><br/>
</form>
<form action = "http://www.tbd.com/articles/2011/05/space-travel-moon-vacations-possible-for-a-price-60365.html/" method = "post">
<input type = "submit" value = "I need a VACATION!"></input><br/><br/>
</form>
<form action = "http://newyork.craigslist.org/mnh/lab/3657343789.html" method = "get">
<input type = "submit" value = "I need Money!"></input><br/><br/>
</form>
<form action = "http://semperfelix.com/blog/2013/02/07/stickin-it-to-the-man-a-cautionary-tale-of-self-sabotage-wasted-energy-and-really-strong-cleaning-products/there_used_to_be_a_way_to_stick_it_to_the_man__it_was_called_rock_n__roll/" method = "post">
<input type = "submit" value = "I don't need anything! I'm ready to stick it to the man"></input><br/><br/>
</form>
<align="right">
<form action = "confidence_survey_retrieve.html">
	<input type = "submit" value = "View History"></form>
</div>
<div id="footer">Zoe Kanan makes the best pie this side of the Rio Grande!</div>
</div>

</body>
</html>
