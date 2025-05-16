<h1>Ajouter un produit</h1>
<div class="container">
    <form method="post" action="/product/insert">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>

        <label for="quantite">Quantité:</label>
        <input type="number" id="quantite" name="quantite" required>

        <label for="prixHT">Prix HT:</label>
        <input type="number" step="0.01" id="prixHT" name="prixHT" required>

        <label for="TVA">TVA:</label>
        <select id="TVA" name="TVA" required>
            <option value="">Sélectionnez un taux de TVA</option>
            <option value="20">20</option>
        </select>

        <label for="zoneStockage">Zone de stockage:</label>
        <select id="zoneStockage" name="zoneStockage" required>
            <option value="">Sélectionnez une zone</option>
            <?php foreach ($zones as $zone): ?>
                <option value="<?= htmlspecialchars($zone['id']) ?>"><?= htmlspecialchars($zone['libelle']) ?></option>
            <?php endforeach; ?>
        </select>

        <label for="image">Image (URL):</label>
        <input type="url" id="image" name="image" required>

        <button type="submit">Ajouter</button>
        <button onclick="window.location.href='http://gestionstock/product/index'">Retour à la liste</button>
    </form>
</div>