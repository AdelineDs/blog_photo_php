<?php $this->titre = "SimpleBlog";
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
    {
?>
<div class="col-lg-offset-2 col-lg-8 col-xs-offset-2 col-xs-8">
    <h2 style="color: red">Bonjour <?php echo  $_SESSION['pseudo'] ?> !</h2><br/>
    <h3 style="color: purple"> Vous pouvez <?php if(isset($billet['id']) AND $billet['id']) {?> modifier votre billet.<?php } else {;?> rédiger un nouveau billet !<?php }?></h3>
</div>
<?php
    }
?>
<div class="col-lg-offset-2 col-lg-8 col-xs-offset-2 col-xs-8">
    <h1>Ecrire un nouveau billet</h1>
        <?php
        if(isset($insert_erreur) AND $insert_erreur) :
            ?>
    <p><strong>Veuillez renseigner tout les champs, merci !</strong></p>
        <?php                            endif;?>
    <form <?php if(isset($billet['id']) AND $billet['id']) {?> action="index.php?action=enregistrerModif&amp;id=<?= $billet['id'] ?>"<?php } else {;?> action="index.php?action=ecrireBillet" <?php }?>method="post">
        <p><label for="titre">Titre : <input name="titre" id="titre" type=text <?php if(isset($billet['id']) AND $billet['id']) :?> value="<?= strip_tags($billet['titre']);?>"<?php endif;?>></label></p>
        <p><label for="resume">Résumé : <textarea name="resume" id="resume" value="<?php if(isset($billet['id']) AND $billet['id']) :?><?= nl2br(strip_tags($billet['resume']));?><?php endif;?>" maxlength="250" placeholder="250 caratères max !"><?php if(isset($billet['id']) AND $billet['id']) :?><?= strip_tags($billet['resume']);?><?php endif;?></textarea></label></p>
        <p><label for="contenu">Contenu : <textarea name="contenu" id="contenu"><?php if(isset($billet['id']) AND $billet['id']) :?><?= $billet['contenu'];?><?php endif;?></textarea></label></p>
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

<!-- TinyMCE -->
<script src="./Contenu/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="./Contenu/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript">
  tinyMCE.init({
    selector : "#contenu", 
    height: 500,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools wordcount"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    // imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
    content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'
    ]
  });
</script>





