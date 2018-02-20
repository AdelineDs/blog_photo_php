<?php $this->titre = "Mon blog photo - " . strip_tags($billet['titre']); ?>
<div class="row">
    <div class="col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10 articleBlog">
            <div>
                <h2><?= strip_tags($billet['titre']); ?></h2>
                <p class="contenuArticle">
                    <?= nl2br($billet['contenu']); ?>
                </p>
                <h5> Le <em><?= $billet['date_publication_fr']; ?></em>  Par <strong><?= strip_tags($billet['auteur']); ?></strong></h5>
            </div>
        </div>
        <div class="col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10 newCom">
            <div>
                <h1>Ecrire un commentaire</h1>
                    <?php
                    if(isset($insert_erreur) AND $insert_erreur) :
                    ?>
                <p><strong>Veuillez renseigner tout les champs, merci !</strong></p>
                    <?php                            endif;?>
                <form action="index.php?action=commenter" method="post">
                    <input type="hidden" value="<?= $billet['id']?>" name="id_billet"/>
                    <p><label for="auteur">Nom ou pseudo: <input name="auteur" id="auteur" type=text></label></p>
                    <p><label for="commentaire">Votre commentaire : <textarea name="commentaire" id="commentaire" rows="10" cols="60"></textarea></label></p>
                    <input type="submit" value="Enregistrer le commentaire">
                </form>
            </div>
        </div>
        <div class="col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10  listeCom">
            <?php
            foreach($commentaires as $com): ?>
            <div class="commentaire">
                <div>
                    <h3><?= strip_tags($com['auteur']); ?></h3>
                    <h5> Le <em><?= $com['date_commentaire_fr']; ?></em></h5>
                    <p>
                        <?= nl2br(strip_tags($com['commentaire'])); ?>
                    </p>
                    <?php
                    if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
                    {?>
                    <p>
                        <span><a href="<?= "index.php?action=modererCom&id=" . $com['id'] ?>">Modérer le commentaire</a></span>
                        <span><a href="<?= "index.php?action=supprimerCom&id=" . $com['id'] ?>">Supprimer le commentaire</a></span>
                    </p> 
                    <?php
                           }
                     ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
