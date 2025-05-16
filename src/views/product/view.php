<?php const URL = "http://gestionstock/product/"; ?>
<div class="container">
    <h1>Détails du produit</h1>

    <?php if (!empty($product)): ?>
        <div class="product-details">
            <img src="<?= $product['image'] ?>" alt="<?= $product['nom'] ?>">
            <table class="details-table">
<!--                <tr>-->
<!--                    <th>ID</th>-->
<!--                    <td>--><?php //= $product['id'] ?><!--</td>-->
<!--                </tr>-->
                <tr>
                    <th>Nom</th>
                    <td><?= $product['nom'] ?></td>
                </tr>
                <tr>
                    <th>Quantité</th>
                    <td><?= $product['quantite'] ?></td>
                </tr>
                <tr>
                    <th>Prix HT</th>
                    <td><?= $product['prixHT'] ?></td>
                </tr>
                <tr>
                    <th>Prix TTC</th>
                    <td><?= $product['prixTTC'] ?></td>
                </tr>
                <tr>
                    <th>TVA</th>
                    <td><?= $product['TVA'] ?></td>
                </tr>
                <tr>
                    <th>Zone de stockage</th>
                    <td><?= $product['zoneStockage']['id'] ?> - <?= $product['zoneStockage']['libelle'] ?></td>
                </tr>
            </table>
        </div>
    <?php else: ?>
        <p>Produit introuvable.</p>
    <?php endif; ?>
    <button onclick="window.location.href='<?= URL ?>index'">Retour à la liste</button>
</div>