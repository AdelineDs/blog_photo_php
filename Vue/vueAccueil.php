<?php $this->titre = 'Simple Blog'; ?> <!-- définition de l'élément spécifique $titre -->
<div id="content">
    <div id="box1">
        <div class="blogpost primary_wide2">
            <h2 style="color: purple">Bienvenue sur mon Blog !!</h2>
        </div>
    </div>
</div>
<?php foreach ($billets as $billet): ?> <!-- génère les balises HTML article associées aux billets du blog.
Le flux HTML créé est mis en tampon -->
<div id="content">
    <div id="box1">
        <div class="blogpost primary_wide2">
            <h2><a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>"><?= strip_tags($billet['titre']); ?></a></h2>
            <p>
                <?= nl2br(strip_tags($billet['contenu'])); ?>
            </p>
        </div>
    </div>
</div>
<?php endforeach; ?>

