<?php
/**
 * Vue Déconnexion
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @author    Naëva ARNOULD <naeva.ar@gmail.com>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
 
 
deconnecter();

?>
<div class="alert alert-info" role="alert">
    <p>Vous avez bien été déconnecté ! <a href="index.php">Cliquez ici</a> 
        pour revenir à la page de connexion.</p>
</div>
<?php
if (headers_sent()) {
    die("Redirection échouée: <a href=\"\index.php\">Cliquer ici</a>");
} else {
    exit(header("Refresh: 3; URL = index.php"));
}
