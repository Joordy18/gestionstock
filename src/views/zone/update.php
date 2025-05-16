<h1>Modifier une zone</h1>
<div class="container">
    <form method="post" action="/zone/update/<?= $zone['id'] ?>">
        <label for="libelle">Libellé:</label>
        <input type="text" id="libelle" name="libelle" value="<?= htmlspecialchars($zone['libelle']) ?>" required>

        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" value="<?= htmlspecialchars($zone['adresse']) ?>" required>

        <button type="submit">Modifier</button>
        <button type="button" onclick="window.location.href='/zone/index'">Retour à la liste</button>
    </form>
</div>