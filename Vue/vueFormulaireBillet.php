<?php $this->titre = "SimpleBlog";
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
    {
?>
<div id="content">
    <div id="box1">
        <div class="blogpost primary_wide2">
            <h2 style="color: red">Bonjour <?php echo  $_SESSION['pseudo'] ?> !</h2><br/>
            <h3 style="color: purple"> Vous pouvez <?php if(isset($billet['id']) AND $billet['id']) {?> modifier votre billet.<?php } else {;?> rédiger un nouveau billet !<?php }?></h3>
        </div>
    </div>
</div>
<?php
    }
?>
<div id="content">
    <div id="box1">
        <div class="blogpost primary_wide2">
            <h1>Ecrire un nouveau billet</h1>
                <?php
                if(isset($insert_erreur) AND $insert_erreur) :
                    ?>
            <p><strong>Veuillez renseigner tout les champs, merci !</strong></p>
                <?php                            endif;?>
            <form <?php if(isset($billet['id']) AND $billet['id']) {?> action="index.php?action=enregistrerModif&amp;id=<?= $billet['id'] ?>"<?php } else {;?> action="index.php?action=ecrireBillet" <?php }?>method="post">
                <p><label for="titre">Titre : <input name="titre" id="titre" type=text <?php if(isset($billet['id']) AND $billet['id']) :?> value="<?= strip_tags($billet['titre']);?>"<?php endif;?>></label></p>
                <p><label for="contenu">Contenu : <textarea name="contenu" id="contenu" rows="20" cols="80"><?php if(isset($billet['id']) AND $billet['id']) :?><?= nl2br(strip_tags($billet['contenu']));?><?php endif;?></textarea></label></p>
                <p><label for="auteur">Auteur: <input name="auteur" id="auteur" type=text <?php if(isset($billet['id']) AND $billet['id']) :?> value="<?= strip_tags($billet['auteur']);?>"<?php endif;?>></label></p>
                <p><label for="statut">Statut du billet :</label>
                    <select name="statut" id="statut">
                        <option value="publie">Publié</option>
                        <option value="brouillon">Brouillon</option>
                    </select>
                </p>
                <input type="submit" value="Enregistrer le billet">
            </form>
        </div>
    </div>
    <br class="clear" />
</div>





