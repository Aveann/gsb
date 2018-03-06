<?php
/**
 * Vue Menu Comptable
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Naëva ARNOULD <naeva.ar@gmail.com>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
?>

    <li <?php if ($uc == 'validerFicheFrais') { ?>class="active"<?php } ?>>
        <a href="index.php?uc=validerFicheFrais">
            <span class="glyphicon glyphicon-pencil"></span>
            Validation des fiches de frais
        </a>
    </li>
    <li <?php if ($uc == 'suivreFrais') { ?>class="active"<?php } ?>>
        <a href="index.php?uc=suivreFicheFrais">
            <span class="glyphicon glyphicon-list-alt"></span>
            Suivi du paiment des fiches de frais 
        </a>
    </li>
