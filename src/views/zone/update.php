<h1>Modifier une zone</h1>
<div class="container">
    <form method="post" action="/zone/update/<?= $zone['id'] ?>">
        <label for="libelle">Libellé:</label>
        <input type="text" id="libelle" name="libelle" value="<?= htmlspecialchars($zone['libelle']) ?>" required>

        <label for="rue">Rue:</label>
        <input type="text" id="rue" name="rue" value="<?= htmlspecialchars($zone['rue']) ?>" required>

        <label for="codepostal">Code Postal</label>
        <input type="number" id="codepostal" name="codepostal" value="<?= htmlspecialchars($zone['codePostal']) ?>" required>

        <label for="ville">Ville:</label>
        <input type="text" id="ville" name="ville" value="<?= htmlspecialchars($zone['ville']) ?>" required>

        <button type="submit">Modifier</button>
        <button type="button" onclick="window.location.href='/zone/index'">Retour à la liste</button>
    </form>
</div>