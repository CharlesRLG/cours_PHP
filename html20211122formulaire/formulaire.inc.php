<section>

<article id="formulairetext">

    <div class="noma">

    <form method="get" action="formulairephp.php">
    <label for="pseudo">Votre pseudo :</label>
    <input id="pseudo" type="text" name="pseudo" size="8" value="<?php echo $_GET["pseudo"] ?>" /><br>

    </div>
    <br>

    <div class="nomb">

    <form method="get" action="formulairephp.php">
    <label for="mdp">Votre mot de passe :</label>
    <input id="mdp" type="password" name="mdp" size="8" value="<?php echo $_GET["mdp"] ?>" /><br>

    </div>
    <br>

    <div class="nomc">

    <form method="get" action="formulairephp.php">
    <label for="confmdp">Ressaisir votre mot de passe :</label>
    <input id="confmdp" type="password" name="confmdp" size="8" value="<?php echo $_GET["confmdp"] ?>" /><br>

    </div>

</article>

<article class="typeradio">
    <div>
    <p>OS préféré :</p>
    </div>

    <div class="radioposi">
    <input type="radio"
    name="OS_favori" id="Win" value="Win">WIndows
    </label><br>

    <label>
    <input type="radio"
    name="OS_favori" id="Win_ant" value="Win_ant">Windows &lsaquo;10</label><br>
    <label>
    <input type="radio"
    name="OS_favori" id="MAC" value="MAC">MacOS X<br>
    </label>

    <label>
    <input type="radio"
    name="OS_favori" id="Linux" value="Linux">Linux<br>
    </label> 

    <label>
    <input type="radio"
    name="OS_favori" id="silex" value="silex">Silex<br>
    </label>
    
    <label>
        <input type="radio"
        name="OS_favori" id="Autre" value="Autre">Autre<br>
    </label> 
    </div>

</article>

<article class="possed">
    <div>
    <p>Vous possédez :</p>
    </div>

    <div class="possedposi">
    <label>
    <input type="checkbox"
    name="possession" id="ordi_bureau" value="ordi_bureau">Un ordinateur de bureau
    </label><br>

    <label>
    <input type="checkbox"
    name="possession" id="Portable" value="Portable">Un Portable</label><br>
    <label>
    <input type="checkbox"
    name="possession" id="netbook" value="netbook">Un netbook<br>
    </label>

    <label>
    <input type="checkbox"
    name="possession" id="PAD" value="PAD">Une tablette (Pad)<br>
    </label>

    <label>
        <input type="checkbox"
        name="possession" id="mur" value="mur">Un mur<br>
        </label>
    </div>

</article>

<article class="profess">
    <div>
    <p>Votre profession :</p>
    </div>
    <div class="professposi">
    <SELECT name="Profession" size="5">
    <OPTION name="Profession" id="chomeur" value="chomeur">Chômeur
    <OPTION name="Profession" id="etudiant" value="etudiant">Etudiant
    <OPTION name="Profession" id="fonctionnaire" value="fonctionnaire">Fonctionnaire
    <OPTION name="Profession" id="prive" value="prive">Privé
    <OPTION name="Profession" id="retraite" value="retraite">Retraité
    <OPTION name="Profession" id="neandertalien" value="neandertalien">néandertal
    </SELECT>
    <br>		
    <input type="submit" id="inscrire" value="S'inscrire !" name="inscription">
    </div>
</article>
</form>
</section>