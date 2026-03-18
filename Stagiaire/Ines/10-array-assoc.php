<?php
// tableau associatif
$monTabAssoc = ["prenom" => "Michaël", "nom" => "Pitz", "caracteristique" => "égocentrique", "dateDeNaissance" => "1951-03-02"];
?>
<h3>Tableau associatif, il faut utiliser la clef</h3>
<p>Version concaténation</p>
<pre><code>echo $monTabAssoc["prenom"]."&lt;hr>".
     $monTabAssoc["nom"]."&lt;hr>".
     $monTabAssoc["caracteristique"]."&lt;hr>".
     $monTabAssoc["dateDeNaissance"]."&lt;hr>";</code></pre>
     <hr>
<?php
echo $monTabAssoc["prenom"]."<hr>".
     $monTabAssoc["nom"]."<hr>".
     $monTabAssoc["caracteristique"]."<hr>".
     $monTabAssoc["dateDeNaissance"]."<hr>";     
?>
<h3>Tout mettre dans les ""ne fonctionne pas pour un tableau indexé avec ' ou "</h3>
<p>Mais on peut les retirer sur les clef, malgré que ce soit une chaîne de caractère ! (old school)</p>
<pre><code>echo "$monTabAssoc[prenom]&lt;hr>
     $monTabAssoc[nom]&lt;hr>
     $monTabAssoc[caracteristique]&lt;hr>
     $monTabAssoc[dateDeNaissance]&lt;hr>";</code></pre>
    <?php
    echo "$monTabAssoc[prenom]<hr>
     $monTabAssoc[nom]<hr>
     $monTabAssoc[caracteristique]<hr>
     $monTabAssoc[dateDeNaissance]<hr>"; 
    ?>
<h3>Méthode moderne</h3> 
<p>Est utilisée en OO (orienté objet), et permet d'éviter les concaténations complexes en utilsant {}</p> 
<pre><code>echo "{$monTabAssoc['prenom']}&lt;hr>
     {$monTabAssoc['nom']}&lt;hr>
     {$monTabAssoc['caracteristique']}&lt;hr>
     {$monTabAssoc['dateDeNaissance']}&lt;hr>";</code></pre> 
<?php
    echo "{$monTabAssoc['prenom']}<hr>
     {$monTabAssoc['nom']}<hr>
     {$monTabAssoc['caracteristique']}<hr>
     {$monTabAssoc['dateDeNaissance']}<hr>"; 
    ?>  