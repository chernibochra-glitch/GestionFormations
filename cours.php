<?php require 'views/partials/header.php'; ?>

<div class="cours-box">
    <h1>Bienvenue dans votre formation !</h1>

    <?php if ($formation): ?>
        <div class="cours-header">
            <h2><?= htmlspecialchars($formation['titre']) ?></h2>
            <span class="badge badge-<?= strtolower(str_replace('é','e',$formation['niveau'])) ?>">
                <?= htmlspecialchars($formation['niveau']) ?>
            </span>
            <p><?= htmlspecialchars($formation['description']) ?></p>
            <p>Durée : <strong><?= htmlspecialchars($formation['duree']) ?></strong></p>
        </div>

        <hr style="margin: 24px 0;">

        <h3>Contenu du cours</h3>
        <div class="chapitres">
            <div class="chapitre">
                <span class="chapitre-num">01</span>
                <div>
                    <strong>Introduction</strong>
                    <p>Présentation du cours et des objectifs.</p>
                </div>
            </div>
            <div class="chapitre">
                <span class="chapitre-num">02</span>
                <div>
                    <strong>Concepts fondamentaux</strong>
                    <p>Les bases théoriques indispensables.</p>
                </div>
            </div>
            <div class="chapitre">
                <span class="chapitre-num">03</span>
                <div>
                    <strong>Pratique guidée</strong>
                    <p>Exercices et projets pratiques.</p>
                </div>
            </div>
            <div class="chapitre">
                <span class="chapitre-num">04</span>
                <div>
                    <strong>Projet final</strong>
                    <p>Réalisation d'un projet complet de A à Z.</p>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p>Formation introuvable.</p>
    <?php endif; ?>
</div>
<a href="#" class="chapitre">

</a>

<?php require 'views/partials/footer.php'; ?>