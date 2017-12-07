<?php
$this->titre = 'Simple Blog'; 
?> <!-- définition de l'élément spécifique $titre -->
<div id="content">
    <div id="box1">
        <div class="blogpost primary_wide2">
            <h2 style="color: purple">Mes articles !!</h2>
        </div>
    </div>
</div>
<?php
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
  {
?>
<div id="content">
    <div id="box1">
        <div class="blogpost primary_wide2">
            <h2 style="color: red">Bonjour <?=  $_SESSION['pseudo'] ?> !</h2><br/>
            <h3 style="color: purple"> Vous pouvez gérer le billet de votre choix ! </h3>
        </div>
    </div>
</div>
<?php
  }
foreach ($blog as $billet): ?> 
    <div id="content">
        <div id="box1">
            <div class="blogpost primary_wide2">
                <h2><?= strip_tags($billet['titre']); ?></h2>
                <h3>Le <em><?= $billet['date_publication_fr']; ?> </em>  Par <em><?= strip_tags($billet['auteur']); ?></em></h3>
                <p>
                    <?= nl2br(strip_tags($billet['contenu'])); ?>
                </p>
                <p class="meta">
                    <span class="comments"><a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">Ecrire un commentaire</a></span>
                </p>
                                            <?php
                            if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
                            {?>
                             <p class="meta">
                                 <strong>Gestion du billet :</strong>
                                 <span class="comments"><a href="<?= "index.php?action=modifierBillet&id=" . $billet['id'] ?>">Modifier</a></span>
                                 <span class="comments"><a href="<?= "index.php?action=supprimerBillet&id=" . $billet['id'] ?>">Supprimer</a></span>
                            </p> 
                            <p class="meta">
                                <strong>Gestion des commentaires :</strong>
                                <span class="comments"><a href="<?= "index.php?action=gererCom&id=" . $billet['id'] ?>">Gestion des commentaires</a></span>
                            </p> 
                            <?php
                             }
                            ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

