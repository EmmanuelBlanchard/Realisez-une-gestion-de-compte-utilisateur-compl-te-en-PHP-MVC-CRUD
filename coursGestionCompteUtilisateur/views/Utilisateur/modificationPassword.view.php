<h1>Modification du mot de passe - <?= $_SESSION['profil']['login'] ?></h1>

<form method="POST" action="<?= URL ?>compte/validation_modificationPassword">
    <div class="mb-3">
        <label for="password" class="form-label">Ancien mot de passe</label>
        <input type="password" class="form-control" id="ancienPassword" name="ancienPassword" required>
    </div>
    <div class="mb-3">
        <label for="nouveauPassword" class="form-label">Nouveau mot de passe</label>
        <input type="password" class="form-control" id="nouveauPassword" name="nouveauPassword" required>
    </div>
    <div class="mb-3">
        <label for="confirmationNouveauPassword" class="form-label">Confirmation du nouveau mot de passe</label>
        <input type="password" class="form-control" id="confirmationNouveauPassword" name="confirmationNouveauPassword" required>
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
</form>