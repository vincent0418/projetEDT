
<?php
    echo '<p>lesson '. htmlspecialchars($v->getImmatriculation()) .' de marque '. htmlspecialchars($v->getMarque()) .' (couleur '. htmlspecialchars($v->getCouleur()) .')</p>';
    echo '<p><a href="index.php?action=delete&immat='. rawurlencode($v->getImmatriculation()) .'">Supprimer la lesson</a></p>';
    echo '<a href="index.php?action=update&immat='. rawurlencode($v->getImmatriculation()) .'">Modifier la lesson</a>';
?>