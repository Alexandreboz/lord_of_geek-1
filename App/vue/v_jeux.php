<section id="visite">
    <aside id="categories">
        <ul>
            <?php
            foreach ($lesCategories as $uneCategorie) {
                $idCategorie = $uneCategorie['id'];
                $libCategorie = $uneCategorie['nom'];
            ?>
                <li>
                    <a href=index.php?uc=visite&categorie=<?php echo $idCategorie ?>&action=voirJeux><?php echo $libCategorie ?></a>
                </li>
            <?php
            }
            foreach ($lesEtats as $uneEtat) {
                $idEtat = $uneEtat['id'];
                $libEtat = $uneEtat['nom_etat'];
            ?>
                <li>
                    <a href=index.php?uc=visite&etat_jeu=<?php echo $idEtat ?>&action=voirEtat><?php echo $libEtat ?></a>
                </li>
            <?php
            }
            foreach ($lesConsoles as $uneConsole) {
                $idconsole = $uneConsole['id'];
                $libconsole = $uneConsole['nom_console'];
            ?>
                <li>
                    <a href=index.php?uc=visite&console=<?php echo $idconsole ?>&action=voirConsole><?php echo $libconsole ?></a>
                </li>
            <?php
            }
            foreach ($lesEditions as $uneEdition) {
                $idedition = $uneEdition['id'];
                $libedition = $uneEdition['nom_edition'];
            ?>
                <li>
                    <a href=index.php?uc=visite&editions=<?php echo $idedition ?>&action=voirEdition><?php echo $libedition ?></a>
                </li>
            <?php
            }
            foreach ($lesLicences as $uneLicence) {
                $idLicences = $uneLicence['id'];
                $libLicences = $uneLicence['nom_licence'];
            ?>
                <li>
                    <a href=index.php?uc=visite&licences=<?php echo $idLicences ?>&action=voirLicences><?php echo $libLicences ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </aside>
    <section id="jeux">
        <?php
        foreach ($lesJeux as $unJeu) {
            $id = $unJeu['id'];
            $description = $unJeu['descriptions'];
            $prix = $unJeu['prix'];
            $image = $unJeu['image'];
            $annee = $unJeu['annee_sortie'];
            $etat = $unJeu['nom_etat'];
            $console = $unJeu['nom_console'];
            $licence = $unJeu['nom_licence'];
            $edition = $unJeu['nom_edition'];
            ?>
            <article>
                <img src="public/images/jeux/<?= $image ?>" alt="Image de <?= $description; ?>" />
                <p><?= $description ?></p>
                <p><?= "Prix :  $prix  Euros <br> Sorti en  $annee<br> Son état est : $etat<br>Le jeu est sur $console<br>Ce jeu fait partie de la licence $licence<br>L'exemplaire est en version $edition<br>" ?>
                    <a href="index.php?uc=visite&jeu=&action=ajouterAuPanier">
                        <img src="public/images/mettrepanier.png" title="Ajouter au panier" class="add" />
                    </a>
                </p>
            </article>
        <?php
        }
        ?>
    </section>
</section>