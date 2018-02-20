<?php $this->titre = "SimpleBlog";
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
    {
?>
<div class="col-lg-offset-2 col-lg-8 col-xs-offset-2 col-xs-8">
    <h2 style="color: red">Bonjour <?=  $_SESSION['pseudo'] ?> !</h2><br/>
    <h3 style="color: purple"> Vous pouvez modérer ce commentaire ! </h3>
</div>

<?php
    }
?>
<div class="col-lg-offset-2 col-lg-8 col-xs-offset-2 col-xs-8">
    <h1>Moderer le(s) commentaire(s)</h1>
        <?php
        if(isset($insert_erreur) AND $insert_erreur) :
            ?>
    <p><strong>Veuillez vérifier tout les champs, merci !</strong></p>
        <?php                            endif;?>
    <form action="index.php?action=modifierCom" method="post">
        <input type="hidden" value="<?= $commentaire['id']?>" name="id_com"/>
        <p><label for="auteur">Nom ou pseudo: <input name="auteur" id="auteur" type=text value="<?= $commentaire['auteur'];?>"></label></p>
        <p><label for="commentaire">Modifier le commentaire : <textarea name="commentaire" id="commentaire" rows="10" cols="60"><?= $commentaire['commentaire'];?></textarea></label></p>
        <input type="submit" value="Enregistrer les modifications du commentaire">
    </form>
</div>

