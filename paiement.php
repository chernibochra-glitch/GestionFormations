<?php require 'views/partials/header.php'; ?>

<h1>Paiement</h1>

<div class="form-box">
    <div class="paiement-info">
        <p><strong>Nom & Prénom<?= htmlspecialchars($inscription['prenom'] . ' ' . $inscription['nom']) ?></strong></p>
        <p>Email<?= htmlspecialchars($inscription['email']) ?></p>
        <p>Formation ID : #<?= $inscription['formation_id'] ?></p>
        <p>Statut : <span class="badge badge-attente">En attente</span></p>
    </div>

    <hr style="margin: 20px 0;">

    <h2>Informations de paiement (simulation)</h2>

    <form method="POST" action="index.php?page=paiement&id=<?= $inscription['id'] ?>">
        <label>Numéro de carte</label>
        <input type="text" placeholder="1234 5678 9012 3456" maxlength="19">

        <label>Date d'expiration</label>
        <input type="text" placeholder="MM/AA" maxlength="5">

        <label>CVV</label>
        <input type="text" placeholder="123" maxlength="3">

        <button type="submit" name="mode" value="ok" class="btn" style="width:100%; margin-top:20px; background:#27ae60;">
     Confirmer le paiement →

        </button>
    </form>
</div>

<?php require 'views/partials/footer.php'; ?>