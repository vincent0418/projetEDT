
<form method="get" action="index.php">
  <fieldset>
    <legend>Mon formulaire :</legend>
    <p>
      <label for="marq_id">Marque du skate</label> :
      <input type="text" name="marque" id="marq_id" value=<?php echo htmlspecialchars($v->getMarque()) ?> required/>
    </p>
    <p>
      <label for="coul_id">Couleur</label> :
      <input type="text" name="couleur" id="coul_id" value=<?php echo htmlspecialchars($v->getCouleur()) ?> required/>
    </p>
    <p>
      <label for="immat_id">Immatriculation</label> :
      <input type="text" name="immatriculation" id="immat_id" value=<?php echo htmlspecialchars($v->getImmatriculation()) ?> readonly/>
    </p>
    <p>
      <input type='hidden' name='action' value='updated'>
    </p>
    <p>
      <input type="submit" value="Envoyer" />
    </p>
  </fieldset> 
</form>