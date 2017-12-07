<?php $this->titre = "SimpleBlog - " . strip_tags($billet['titre']); ?>
<div id="content">
                    <div id="box1">
                        <div class="blogpost primary_wide2">
                            <h2 style="color: purple; text-align: center"><?= strip_tags($billet['titre']); ?></h2>
                        </div>
                    </div>
                </div>

    <div id="content">
        <div id="box1">
            <div class="blogpost primary_wide2">
                <h3> Le <em><?= $billet['date_publication_fr']; ?></em>  Par <em><?= strip_tags($billet['auteur']); ?></em></h3>
                <p>
                    <?= nl2br(strip_tags($billet['contenu'])); ?>
                </p>
            </div>
        </div>
        <div id="box1">
            <div class="blogpost primary_wide2">
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
        <div id="box1">
            <?php
            foreach($commentaires as $com): ?>
            <div id="box1">
                <div class="blogpost primary_wide2">
                    <h2><?= strip_tags($com['auteur']); ?></h2>
                    <h3> Le <em><?= $com['date_commentaire_fr']; ?></em></h3>
                    <p>
                        <?= nl2br(strip_tags($com['commentaire'])); ?>
                    </p>
                    <?php
                    if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
                    {?>
                    <p class="meta">
                        <span class="comments"><a href="<?= "index.php?action=modererCom&id=" . $com['id'] ?>">Modérer le commentaire</a></span>
                        <span class="comments"><a href="<?= "index.php?action=supprimerCom&id=" . $com['id'] ?>">Supprimer le commentaire</a></span>
                    </p> 
                    <?php
                           }
                     ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
