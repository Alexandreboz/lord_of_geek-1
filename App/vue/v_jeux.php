<section id="visite">
    <aside id="categories">
        <ul >
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
            ?>
        </ul>
    </aside>
    <section  id="jeux">
        <?php
        foreach ($lesJeux as $unJeu) {
            $id = $unJeu['id'];
            $description = $unJeu['descriptions'];
            $prix = $unJeu['prix'];
            $image = $unJeu['image'];
            $annee = $unJeu['annee_sortie'];
            $etat = $unJeu['etat_id'];
            $console = $unJeu['console_id'];
            $licence = $unJeu['licences_id'];
            $edition = $unJeu['edition_id'];
            ?>
            <article>
                <img src="public/images/jeux/<?= $image ?>" alt="Image de <?= $description; ?>"/>
                <p><?= $description ?></p>
                <p><?= "Prix : " . $prix . " Euros <br> Sortie en " .$annee."<br>".$etat.$console.$licence.$edition?>
                    <a href="index.php?uc=visite&categorie=<?= $categorie ?>&jeu=<?= $id ?>&action=ajouterAuPanier">
                        <img src="public/images/mettrepanier.png" title="Ajouter au panier" class="add"/>
                    </a>
                </p>
            </article>
            <?php
        }
        ?>
    </section>
</section>
