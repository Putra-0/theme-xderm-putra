<?php

$tx = shell_exec("ifconfig tun0 | grep 'bytes:' | awk '{print $7, $8}' | sed 's/(//g; s/)//g'");
$rx= shell_exec("ifconfig tun0 | grep 'bytes:' | awk '{print $3, $4}' | sed 's/(//g; s/)//g'");

echo "<table align='center' style='margin-top:-20px;margin-bottom:10px;'>
	<tr class='col-butt'>
		<td style='width:370px;padding-top:5px' class='glow-on-hover'><span style='color:red'>RX | TX: </span><span>$rx | $tx</span</td>
	</tr>
      </table>"

?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/style.css">
</head>


<script>
$.get("http://ip-api.com/json", function (response) {
    $("#ip").html(response.query);
    $("#isp").html(response.isp + " (" + response.countryCode + ")");
}, "jsonp");
</script>

