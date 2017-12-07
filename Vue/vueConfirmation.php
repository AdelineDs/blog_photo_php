<?php
$this->titre = "SimpleBlog";
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
    {
?>
<div id="content">
    <div id="box1">
        <div class="blogpost primary_wide2">
            <h2 style="color: red">Etes_vous sûre <?=  $_SESSION['pseudo'] ?> de vouloir supprimer ce <?php if(isset($billet['id']) AND $billet['id']) {?> billet.<?php } elseif(isset($commentaire['id']) AND $commentaire['id']) {;?> commentaire<?php }?> ?</h2>
                <?php
                if(isset($insert_erreur) AND $insert_erreur) :
                    ?>
            <p><strong>Une erreur c'est produite !</strong></p>
                <?php                            endif;?>
        </div>
    </div>
</div>
<div id="content">
    <div id="box1">
        <div class="blogpost primary_wide2">
            <?php if(isset($billet['id']) AND $billet['id']) {?>
            <h2><?= strip_tags($billet['titre']); ?></h2>
            <h3> Le <em><?= $billet['date_publication_fr']; ?></em>  Par <em><?= strip_tags($billet['auteur']); ?></em></h3>
            <p>
                <?= nl2br(strip_tags($billet['contenu'])); ?>
            </p>
            <?php } elseif(isset($commentaire['id']) AND $commentaire['id']) {;?>
            <h3> Le <em><?= $commentaire['date_commentaire_fr']; ?></em>  Par <em><?= strip_tags($commentaire['auteur']); ?></em></h3>
            <p>
                <?= nl2br(strip_tags($commentaire['commentaire'])); ?>
            </p>
            <?php } ?>
        </div>
    </div>
    <div id="content">
        <div id="box1">
            <div class="blogpost primary_wide2">
                <?php if(isset($billet['id']) AND $billet['id']) {?>
                <form action="index.php?action=confirmer" method="post">
                    <input type="hidden" value="<?= $billet['id']?>" name="id_billet"/>
                    <input  class="comments" type="submit" value="OUI">
                </form>
                 <?php } elseif(isset($commentaire['id']) AND $commentaire['id']) {;?>
                <form action="index.php?action=confirmerCom" method="post">
                    <input type="hidden" value="<?= $commentaire['id']?>" name="id_com"/>
                    <input  class="comments" type="submit" value="OUI">
                </form>
            <?php } ?>
                <form action="index.php?action=blog" method="post">
                    <input  class="comments" type="submit" value="NON">
                </form>
            </div>
        </div>
    </div>
 <?php
    }
?>
