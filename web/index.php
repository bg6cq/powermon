<?php

header("refresh: 20;");

echo "<meta name=\"viewport\" content=\"initial-scale=1\">";
echo "<meta name=\"viewport\" content=\"width=device-width\">";


echo "����������<br>\n";
$tm = file_get_contents("/usr/src/powermon/Slastrun");
echo date("Y-m-d H:i:s",$tm);
echo "<br>";

if(time()-$tm>5) echo "<font color=red>���ݸ��²���ʱ</font><br>";


echo "<table border=1 cellspacing=0>\n";

echo "<tr><td>&nbsp;</td><td>����</td><td>����</td></tr>\n";

echo "<tr height=44><td>��Դ</td><td width=44><img src=I";
readfile ("/usr/src/powermon/SL1");
echo ".png></td><td width=44><img src=I";
readfile ("/usr/src/powermon/SL2");
echo ".png></td><tr>\n";

echo "<tr height=44><td>����</td><td width=44><img src=N";
readfile ("/usr/src/powermon/SL3");
echo ".png></td><td width=44><img src=R";
readfile ("/usr/src/powermon/SL4");
echo ".png></td><tr>\n";

echo "<tr height=44><td>����</td><td width=44><img src=B";
readfile ("/usr/src/powermon/SL5");
echo ".png></td><td width=44><img src=B";
readfile ("/usr/src/powermon/SL6");
echo ".png></td><tr>\n";
echo "</table><p>";

echo "UPS����<br>\n";
$tm = file_get_contents("/usr/src/powermon/Ulastrun");
echo date("Y-m-d H:i:s",$tm);
echo "<br>";

if(time()-$tm>5) echo "<font color=red>���ݸ��²���ʱ</font><br>";

//echo "��ʪ��:";
readfile ("/usr/src/powermon/Utemp");
echo "��C ";
readfile ("/usr/src/powermon/Uhum");

echo "%<br>";

echo "<table border=1 cellspacing=0>\n";

echo "<tr><td>&nbsp;</td><td>����</td><td>����</td></tr>\n";

echo "<tr height=44><td>��Դ</td><td width=44><img src=I";
readfile ("/usr/src/powermon/UL1");
echo ".png></td><td width=44><img src=I";
readfile ("/usr/src/powermon/UL2");
echo ".png></td><tr>\n";

echo "<tr height=44><td>����</td><td width=44><img src=N";
readfile ("/usr/src/powermon/UL3");
echo ".png></td><td width=44><img src=R";
readfile ("/usr/src/powermon/UL4");
echo ".png></td><tr>\n";

echo "<tr height=44><td>����</td><td width=44><img src=B";
readfile ("/usr/src/powermon/UL5");
echo ".png></td><td width=44><img src=B";
readfile ("/usr/src/powermon/UL6");
echo ".png></td><tr>\n";
echo "</table>";

?>
