<?php
include 'App/modele/M_categorie.php';
include 'App/modele/M_exemplaire.php';
include 'App/modele/M_Etat.php';
include 'App/modele/M_Console.php';
include 'App/modele/M_Licences.php';
include 'App/modele/M_Edition.php';

/**
 * Controleur pour la consultation des exemplaires
 * @author Loic LOG
 */
switch ($action) {
    case 'voirJeux':
        $categorie = filter_input(INPUT_GET, 'categorie');
        $lesJeux = M_Exemplaire::trouveLesJeuxDeCategorie($categorie);
        break;
    case 'voirConsole':
        $console = filter_input(INPUT_GET, 'console');
        $lesJeux = M_Exemplaire::trouveLesJeuxDeConsole($console);
        break;
    case 'voirEtat':
        $etat = filter_input(INPUT_GET, 'etat_jeu');
        $lesJeux = M_Exemplaire::trouveLesEtat($etat);
        break;
    case 'voirLicences':
        $licences = filter_input(INPUT_GET, 'licences');
        $lesJeux = M_Exemplaire::trouveLesLicences($licences);
        break;
    case 'voirEdition':
        $edition = filter_input(INPUT_GET, 'editions');
        $lesJeux = M_Exemplaire::trouveLesEdition($edition);
        break;
    case 'ajouterAuPanier':
        $idJeu = filter_input(INPUT_GET, 'jeu');
        $categorie = filter_input(INPUT_GET, 'categorie');
        if (!ajouterAuPanier($idJeu)) {
            afficheErreurs(["Ce jeu est déjà dans le panier !!"]);
        } else {
            afficheMessage("Ce jeu a été ajouté");
        }
        $lesJeux = M_Exemplaire::trouveLesJeuxDeCategorie($categorie);
        break;
    default:
        $lesJeux = [];
        break;
}
$lesCategories = M_Categorie::trouveLesCategories();
$lesEtats = M_Etat::trouveLesEtat();
$lesConsoles = M_Console::trouveLesConsole();
$lesLicences = M_Licences::trouveLesLicences();
$lesEditions = M_Edition::trouveLesEdition();
