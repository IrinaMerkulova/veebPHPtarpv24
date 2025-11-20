<?php
echo "<h2>Tekstfunktsioonid</h2>";
$tekst='PHP on skriptikeel serveripoolne';
echo $tekst;
echo "<br>";
echo "teksti pikkus -strlen() = ".strlen($tekst). " tähemärgi";
echo "<br>";
echo "Esimesed 6 tähte -substr() = ".substr($tekst, 0,6);
echo "<br>";
echo "Alates 6 tähest =".substr($tekst, 6);
echo "<br>";
echo "Sõnade arv lauses -str_word_count() =".str_word_count($tekst). " sõna lauses";
echo "<br>";
echo "Kõik tähed on suured -".strtoupper($tekst);
echo "<br>";
echo "Kõik tähed on väikesed -".strtolower($tekst);
echo "<br>";
echo "Iga sõna algab suure tähega -".ucwords($tekst);
echo "<br>";
echo ucwords(strtolower($tekst));
$tekst2='      PHP on skriptikeel serveripoolne      ';
//trim, ltrim , rtrim
echo "<br>";
echo "|".$tekst2. "|";
echo "<br>";
echo "trim()- eemaldab tekstist tühikuid paremalt ja vasakult -".trim($tekst2);
echo "<br>";
echo "ltrim()- eemaldab tekstist tühikuid vasakult -".ltrim($tekst2);
echo "<br>";
echo "rtrim()- eemaldab tekstist tühikuid paremalt -".rtrim($tekst2);
echo "<br>";
echo "<h3>Tekst kui massiiv</h3>";
echo "1.täht massiivist - ".$tekst[0];
echo "<br>";
echo "5.täht massiivist - ".$tekst[4];
echo "<br>";
//määrab iga sõna nagu eraldi element
print_r(str_word_count($tekst, 1)); //Array ( [0] => PHP [1] => on [2] => skriptikeel [3] => serveripoolne )
$syna=str_word_count($tekst, 1);
echo "<br>";
echo "massivist 2 sõna - ". $syna[2];
echo "<br>";
// määrab mis sümbool on iga sõna alguses
print_r(str_word_count($tekst, 2)); //Array ( [0] => PHP [4] => on [7] => skriptikeel [19] => serveripoolne )
echo "<br>";
echo "<h2>Teksti asendamine -replace</h2>";
$asendus='Javascript';
echo substr_replace($tekst, $asendus, 0, 3);
//ise vaheta serveripoolne - kliendipoolne
echo "<br>";
$otsi=array('PHP', 'serveripoolne');
$asendav=array('Javascript', 'kliendipoolne');

echo str_replace($otsi, $asendav, $tekst);

echo "<br>";
echo "<h2>Mõistatus. Arva ära Eesti linnanimi</h2>";
// tee 5-6 tekstfunktsiooni mis aitavad aru saada miline linnanimi oli.
?>
<form name="tekstkontroll" action="tekstfunktsioonid.php" method="post">
    <label for="linn">Sisesta linnanimi:</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>
<?php
if(isset($_REQUEST["linn"])){
    if($_REQUEST["linn"]=="JS"){
        echo $_REQUEST["linn"]. " on õige";
    } else {
        echo $_REQUEST["linn"]. " on vale";
    }
}



