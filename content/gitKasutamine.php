<?php
echo "<h2>GIT käsud</h2>";
echo "<ol>";
echo "<li>Repo loomine";
echo "<pre>git init</pre>";
echo "</li>";
?>
<li>Konfigureerimine
<pre>
    git config --global user.name "Irina Merkulova"
    git config --global user.email "irina.merkulova@gmail.com"
    git config --global --list
</pre>
</li>
<li>
    Ssh võti loomine
    <pre>
        ssh-keygen -o -t rsa -C "irina.merkulova@gmail.com"
    </pre>
    id_rsa.pub võti kopeeritakse githubi nagu deploy key
</li>
<li>
    Jälgimise lisamine ja commit'i tegemine
    <pre>
        git status
        git add .
        git commit -a -m "commiti tekst"
    </pre>
</li>
<?php
echo "<li>GITHUB projektiga sidumine";
echo "<pre>";
echo "git remote add origin git@github.com:IrinaMerkulova/veebPHPtarpv24.git

git branch -M main

git push -u origin main";
echo "</pre>";
echo "</li>";

echo "<li>Projekti kloonimine desktopi.<br>
 * Kontrolli, et id_rsa võti on olemas .ssh kaustas<br>
 * GIT CMD on lahti ja <br>";
echo "<pre>";
echo "git clone git@github.com:IrinaMerkulova/veebPHPtarpv24.git";
echo "</pre>";
echo "</li>";
echo "</ol>";
