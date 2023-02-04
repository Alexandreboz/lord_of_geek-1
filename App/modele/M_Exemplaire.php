<?php

/**
 * Requetes sur les exemplaires  de jeux videos
 *
 * @author Loic LOG
 */
class M_Exemplaire
{
    /**
     * Retourne sous forme d'un tableau associatif tous les jeux de la
     * catégorie passée en argument
     *
     * @param $idCategorie
     * @return un tableau associatif
     */
    public static function trouveLesJeuxDeCategorie($idCategorie)
    {
        $req = "SELECT * FROM exemplaires 
        JOIN etat_jeu ON exemplaires.etat_id = etat_jeu.id
        join console on exemplaires.console_id = console.id
        join editions on exemplaires.edition_id = editions.id
        join licences on exemplaires.licences_id = licences.id
        join categories on exemplaires.categorie_id = categories.id
        WHERE categorie_id = '$idCategorie'";
        $res = AccesDonnees::query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }
    public static function trouveLesJeuxDeConsole($idConsole)
    {
        $req = "SELECT * FROM exemplaires 
        JOIN etat_jeu ON exemplaires.etat_id = etat_jeu.id
        join console on exemplaires.console_id = console.id
        join editions on exemplaires.edition_id = editions.id
        join licences on exemplaires.licences_id = licences.id
        join categories on exemplaires.categorie_id = categories.id 
        WHERE console_id = '$idConsole'";
        $res = AccesDonnees::query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }
    public static function trouveLesEtat($idEtat)
    {
        $req = "SELECT * FROM exemplaires 
        JOIN etat_jeu ON exemplaires.etat_id = etat_jeu.id
        join console on exemplaires.console_id = console.id
        join editions on exemplaires.edition_id = editions.id
        join licences on exemplaires.licences_id = licences.id
        join categories on exemplaires.categorie_id = categories.id 
        WHERE etat_id = '$idEtat' ";
        $res = AccesDonnees::query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }
    public static function trouveLesEdition($idEdition)
    {
        $req = "SELECT * FROM exemplaires 
        JOIN etat_jeu ON exemplaires.etat_id = etat_jeu.id
        join console on exemplaires.console_id = console.id
        join editions on exemplaires.edition_id = editions.id
        join licences on exemplaires.licences_id = licences.id
        join categories on exemplaires.categorie_id = categories.id
        WHERE edition_id = '$idEdition'";
        $res = AccesDonnees::query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }
    public static function trouveLesLicences($idLicences)
    {
        $req = "SELECT * FROM exemplaires 
        JOIN etat_jeu ON exemplaires.etat_id = etat_jeu.id
        join console on exemplaires.console_id = console.id
        join editions on exemplaires.edition_id = editions.id
        join licences on exemplaires.licences_id = licences.id
        join categories on exemplaires.categorie_id = categories.id
        WHERE licences_id = '$idLicences'";
        $res = AccesDonnees::query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    /**
     * Retourne les jeux concernés par le tableau des idProduits passée en argument
     *
     * @param $desIdJeux tableau d'idProduits
     * @return un tableau associatif
     */
    public static function trouveLesJeuxDuTableau($desIdJeux)
    {
        $nbProduits = count($desIdJeux);
        $lesProduits = array();
        if ($nbProduits != 0) {
            foreach ($desIdJeux as $unIdProduit) {
                $req = "SELECT * FROM exemplaires WHERE id = '$unIdProduit'";
                $res = AccesDonnees::query($req);
                $unProduit = $res->fetch();
                $lesProduits[] = $unProduit;
            }
        }
        return $lesProduits;
    }
}
