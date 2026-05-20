<?php require 'views/partials/header.php'; ?>

<h1>Nos Formations</h1>
<p class="subtitle">Trouvez la formation qui correspond à vos besoins.</p>

<div class="filter-bar">
    <a href="index.php?page=formations" class="filter-btn <?= empty($niveau) ? 'active' : '' ?>">Toutes</a>
    <a href="index.php?page=formations&niveau=Débutant" class="filter-btn <?= $niveau === 'Débutant' ? 'active' : '' ?>">Débutant</a>
    <a href="index.php?page=formations&niveau=Intermédiaire" class="filter-btn <?= $niveau === 'Intermédiaire' ? 'active' : '' ?>">Intermédiaire</a>
    <a href="index.php?page=formations&niveau=Avancé" class="filter-btn <?= $niveau === 'Avancé' ? 'active' : '' ?>">Avancé</a>
</div>

<?php if (empty($formations)): ?>
    <p class="empty">Aucune formation disponible pour ce niveau.</p>
<?php else: ?>
    <div class="formations-grid">
        <?php foreach ($formations as $f): ?>
        <div class="formation-card">
            <span class="badge badge-<?= strtolower(str_replace('é', 'e', $f['niveau'])) ?>">
                <?= htmlspecialchars($f['niveau']) ?>
            </span>
            <h2><?= htmlspecialchars($f['titre']) ?></h2>
            <p><?= htmlspecialchars($f['description']) ?></p>
            <p class="meta"><?= htmlspecialchars($f['duree']) ?></p>
            <p class="prix"><?= number_format($f['prix'], 2, ',', ' ') ?> DT</p>
            <a href="index.php?page=inscription&formation_id=<?= $f['id'] ?>" class="btn">S'inscrire →</a>
        </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php require 'views/partials/footer.php'; ?>
