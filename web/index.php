<?php

header("refresh: 5;");


$tm = file_get_contents("/usr/src/powermon/lastrun");
echo date("Y-m-d H:i:s",$tm);
echo "<p>";

if(time()-$tm>5) echo "<font color=red>数据更新不及时</font><p>";

echo "温湿度:";
readfile ("/usr/src/powermon/temp");
echo "°";
readfile ("/usr/src/powermon/hum");

echo "%<p>";

echo "<table border=1 cellspacing=0>\n";

echo "<tr><td>&nbsp;</td><td>主用</td><td>备用</td></tr>\n";

echo "<tr><td>电源</td><td><img src=I";
readfile ("/usr/src/powermon/L1");
echo ".png></td><td><img src=I";
readfile ("/usr/src/powermon/L2");
echo ".png></td><tr>\n";

echo "<tr><td>开关</td><td><img src=N";
readfile ("/usr/src/powermon/L3");
echo ".png></td><td><img src=R";
readfile ("/usr/src/powermon/L4");
echo ".png></td><tr>\n";

echo "<tr><td>过流</td><td><img src=B";
readfile ("/usr/src/powermon/L5");
echo ".png></td><td><img src=B";
readfile ("/usr/src/powermon/L6");
echo ".png></td><tr>\n";
echo "</table>";

?>
