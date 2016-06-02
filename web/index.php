<?php

header("refresh: 20;");

echo "<meta name=\"viewport\" content=\"initial-scale=1\">";
echo "<meta name=\"viewport\" content=\"width=device-width\">";


echo "服务器房间<br>\n";
$tm = file_get_contents("/usr/src/powermon/Slastrun");
echo date("Y-m-d H:i:s",$tm);
echo "<br>";

if(time()-$tm>5) echo "<font color=red>数据更新不及时</font><br>";


echo "<table border=1 cellspacing=0>\n";

echo "<tr><td>&nbsp;</td><td>主用</td><td>备用</td></tr>\n";

echo "<tr height=44><td>电源</td><td width=44><img src=I";
readfile ("/usr/src/powermon/SL1");
echo ".png></td><td width=44><img src=I";
readfile ("/usr/src/powermon/SL2");
echo ".png></td><tr>\n";

echo "<tr height=44><td>开关</td><td width=44><img src=N";
readfile ("/usr/src/powermon/SL3");
echo ".png></td><td width=44><img src=R";
readfile ("/usr/src/powermon/SL4");
echo ".png></td><tr>\n";

echo "<tr height=44><td>过流</td><td width=44><img src=B";
readfile ("/usr/src/powermon/SL5");
echo ".png></td><td width=44><img src=B";
readfile ("/usr/src/powermon/SL6");
echo ".png></td><tr>\n";
echo "</table><p>";

echo "UPS房间<br>\n";
$tm = file_get_contents("/usr/src/powermon/Ulastrun");
echo date("Y-m-d H:i:s",$tm);
echo "<br>";

if(time()-$tm>5) echo "<font color=red>数据更新不及时</font><br>";

//echo "温湿度:";
readfile ("/usr/src/powermon/Utemp");
echo "°C ";
readfile ("/usr/src/powermon/Uhum");

echo "%<br>";

echo "<table border=1 cellspacing=0>\n";

echo "<tr><td>&nbsp;</td><td>主用</td><td>备用</td></tr>\n";

echo "<tr height=44><td>电源</td><td width=44><img src=I";
readfile ("/usr/src/powermon/UL1");
echo ".png></td><td width=44><img src=I";
readfile ("/usr/src/powermon/UL2");
echo ".png></td><tr>\n";

echo "<tr height=44><td>开关</td><td width=44><img src=N";
readfile ("/usr/src/powermon/UL3");
echo ".png></td><td width=44><img src=R";
readfile ("/usr/src/powermon/UL4");
echo ".png></td><tr>\n";

echo "<tr height=44><td>过流</td><td width=44><img src=B";
readfile ("/usr/src/powermon/UL5");
echo ".png></td><td width=44><img src=B";
readfile ("/usr/src/powermon/UL6");
echo ".png></td><tr>\n";
echo "</table>";

?>
