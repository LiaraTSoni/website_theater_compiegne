<form method="post" action="./includes/lefichierquireceptionnelesdonnees.php" class="okppk" id="mklmkl">
<div class="ligne">
	<span class="libelle"><label for="nom">Nom :</label></span><input type="text" id="nom" class="inputtexte" name="nom" maxlength="10" value="" placeholder="Indiquez votre adresse nom" />
</div>
<div class="ligne">
	<span class="libelle"><label for="email">Email :</label></span><input type="text" id="email" class="inputtexte" name="email" maxlength="10" value="" placeholder="Indiquez votre adresse email" />
</div>
<div class="ligne">
	<span class="libelle"><label for="motdepasse">Mot de passe :</label></span><input type="password" id="motdepasse" class="inputtexte" name="lemotdepasse" value="" placeholder="Entrez votre mot de passe" />
</div>
<div class="ligne">
	<span class="libelle"><label for="zonesaisie">Votre message :</label></span><textarea id="zonesaisie" class="inputtextearea" name="message" placeholder="Indiquez votre message"></textarea>
</div>
<div class="ligne">
	<span class="libelle">Sexe :</span><input type="radio" name="sexe" value="masculin" id="radiom" class="laclasseradio" /><label for="radiom">Masculin</label>
	<input type="radio" name="sexe" value="feminin" id="radiof" class="laclasseradio" /><label for="radiof">Féminin</label>
	<input type="radio" name="sexe" value="neutre" id="radion" class="laclasseradio" checked /><label for="radion">Neutre</label>
</div>
<div class="ligne">
	<span class="libelle"></span><input type="checkbox" name="lacaseacocher" value="lacaseaetecochee" id="caseacocher" class="case" checked /> <label for="caseacocher">Inscription à la newsletter</label>
</div>
<div class="ligne">
	<span class="libelle"></span><input type="checkbox" name="lacaseacochercgv" value="lacasecgvaetecochee" id="caseacochercgv" class="case" /> <label for="caseacochercgv">CGV</label>
</div>
<div class="ligne">
	<span class="libelle"><label for="identifiantselect">Année : </label></span>
	<select name="annee" id="identifiantselect" class="inputtexte">
		<option value="2000">2000</option>
		<option value="2001">2001</option>
		<option value="2002">2002</option>
		<option value="2003">2003</option>
		<option value="2004">2004</option>
	</select>
</div>
<div class="ligne lignesubmit">
	<input type="hidden" name="inscription" value="ok" id="inscriptionok" class="champcache" />

	<input type="submit" id="envoyer" class="inputtexte" name="boutonenvoyer" value="Envoyer le formulaire" />
</div>
</form>
