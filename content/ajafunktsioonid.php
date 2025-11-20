<?php
echo "<div><h2>Ajafunktsioonid</h2>";
//timezone, juhul kui timezone ei ole määratud, siis php näitab localhost'i aeg
date_default_timezone_set('Europe/Tallinn');
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezone list</a>";
echo "<br>";
echo "time() -aeg sekundides - ".time();
echo "<br>";
echo "date()-". date("d.m.Y G:i:s", time())."</div>";
echo "<div></div><br>";
echo "date('d.m.Y H:i:s', time())";

echo "<pre> 
d- päev 01...31
m - kuu 01..12
Y -aasta - nelja kohane arv
G - 24h formaat
i - minutid 0..59
s - sekundid 0...59
";
echo "</pre></div>";
echo "<div><strong>Tehted kuupäevaga</strong>";
echo "<br>";
echo "+1 min=time()+60 =".date("d.m.Y G:i:s", time()+60);
echo "<br>";
echo "+1 tund=time()+60*60 =".date("d.m.Y G:i:s", time()+60*60);
echo "<br>";
echo "+1 päev=time()+60*60*24=".date("d.m.Y G:i:s", time()+60*60*24). "</div>";

echo "<br>";
echo "<div><strong>Kuupäeva genireerimine</strong>";
echo "<br>";
echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
$synd=mktime(5,10,10,7,4,1976);
echo "</div><div>minu sünnipäev: ".date("d.m.Y G:i:s", $synd);
echo "<br>";
echo "Massiivi abil näidata tänase kuu nimega ";
echo "<br>";
$kuud=array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'december');
$aasta=date("Y");
$paev=date("d");
$kuu=$kuud[date('m')];
echo "Täna on :".$paev.".".$kuu." ".$aasta ."a.</div>";
