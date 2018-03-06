<?php
/**
 * Vue Menu Visiteur
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Naëva ARNOULD <naeva.ar@gmail.com>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
?>
<li <?php if ($uc == 'gererFrais') { ?>class="active"<?php } ?>>
    <a href="index.php?uc=gererFrais&action=saisirFrais">
        <span class="glyphicon glyphicon-pencil"></span>
        Renseigner la fiche de frais
    </a>
</li>
<li <?php if ($uc == 'etatFrais') { ?>class="active"<?php } ?>>
    <a href="index.php?uc=etatFrais&action=selectionnerMois">
        <span class="glyphicon glyphicon-list-alt"></span>
        Afficher mes fiches de frais
    </a>
</li>