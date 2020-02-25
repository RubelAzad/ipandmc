<?php
/*
* Getting MAC Address using PHP
* Md. Nazmul Basher
*/

ob_start(); // Turn on output buffering
system('ipconfig /all'); //Execute external program to display output
$mycom=ob_get_contents(); // Capture the output into a variable
ob_clean(); // Clean (erase) the output buffer

$findme = "Physical";
$pmac = strpos($mycom, $findme); // Find the position of Physical text
$mac=substr($mycom,($pmac+36),17); // Get Physical Address

echo $mac;
?>

<?php
ob_start(); // Turn on output buffering
system('ipconfig /all'); //Execute external program to display output
$mycom=ob_get_contents(); // Capture the output into a variable
ob_clean(); // Clean the output buffer

$find_word = "Physical";
$pmac = strpos($mycom, $find_word); // Find the position of Physical text in array
$mac=substr($mycom,($pmac+36),17); // Get Physical Address

echo $mac;
?>
<?php
$localIP = getHostByName(getHostName());

echo $localIP;

?>
<?php
function get_mac(){
ob_start(); // Turn on output buffering
system('ipconfig /all'); //Execute external program to display output
$mycom=ob_get_contents(); // Capture the output into a variable
ob_clean(); // Clean the output buffer

$find_word = "Physical";
$pmac = strpos($mycom, $find_word); // Find the position of Physical text in array
$mac=substr($mycom,($pmac+36),17); // Get Physical Address

return $mac;
}
?>
<?php
echo get_mac();
?>
<html lang="en">

<head>
  <title>Jquery - get ip address</title>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body>

  <h1>Your Ip Address : <span class="ip"></span></h1>

  <script type="text/javascript">
    $(document).ready(function() {
      $.getJSON("https://api.ipify.org/?format=json", function(e) {
        $('.ip').text(e.ip);
      });
    });
  </script>

</body>

</html>