<?php

header("refresh: 5;");


$tm = file_get_contents("/usr/src/powermon/lastrun");
echo date("Y-m-d H:i:s",$tm);
echo "<p>";

if(time()-$tm>5) echo "<font color=red>���ݸ��²���ʱ</font><p>";

echo "��ʪ��:";
readfile ("/usr/src/powermon/temp");
echo "��";
readfile ("/usr/src/powermon/hum");

echo "%<p>";

echo "<table border=1 cellspacing=0>\n";

echo "<tr><td>&nbsp;</td><td>����</td><td>����</td></tr>\n";

echo "<tr><td>��Դ</td><td><img src=I";
readfile ("/usr/src/powermon/L1");
echo ".png></td><td><img src=I";
readfile ("/usr/src/powermon/L2");
echo ".png></td><tr>\n";

echo "<tr><td>����</td><td><img src=N";
readfile ("/usr/src/powermon/L3");
echo ".png></td><td><img src=R";
readfile ("/usr/src/powermon/L4");
echo ".png></td><tr>\n";

echo "<tr><td>����</td><td><img src=B";
readfile ("/usr/src/powermon/L5");
echo ".png></td><td><img src=B";
readfile ("/usr/src/powermon/L6");
echo ".png></td><tr>\n";
echo "</table>";

?>
