<?php
/**
 * Vue Succès
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Naëva ARNOULD <naeva.ar@gmail.com>
 * @copyright 2018 Réseau CERTA
 * @license   Réseau CERTA
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
?>
<div class="alert alert-success" role="alert">
    <?php
    foreach ($_REQUEST['succes'] as $succes) {
        echo '<p>' . htmlspecialchars($succes) . '</p>';
    }
    ?>
</div>