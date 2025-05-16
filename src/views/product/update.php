<h1>Modifier un produit</h1>

<div class="container">
    <form method="post" action="/product/update/<?= $product['id'] ?>">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($product['nom']) ?>" required>

        <label for="quantite">Quantité:</label>
        <input type="number" id="quantite" name="quantite" value="<?= htmlspecialchars($product['quantite']) ?>" required>

        <label for="prixHT">Prix HT:</label>
        <input type="number" step="0.01" id="prixHT" name="prixHT" value="<?= htmlspecialchars($product['prixHT']) ?>" required>

        <label for="TVA">TVA:</label>
        <select id="TVA" name="TVA" required>
            <option value="">Sélectionnez un taux de TVA</option>
            <option value="20">20</option>
        </select>

        <label for="zoneStockage">Zone de stockage:</label>
        <select id="zoneStockage" name="zoneStockage" required>
            <option value="">Sélectionnez une zone</option>
            <?php foreach ($zones as $zone): ?>
                <option value="<?= htmlspecialchars($zone['id']) ?>" <?= $zone['id'] == $product['zoneStockage'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($zone['libelle']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="image">Image (URL):</label>
        <input type="url" id="image" name="image" value="<?= htmlspecialchars($product['image']) ?>" required>

        <button type="submit">Modifier</button>
        <button onclick="window.location.href='http://gestionstock/product/index'">Retour à la liste</button>
    </form>
</div>