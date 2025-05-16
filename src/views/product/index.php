<?php const URL = "http://gestionstock/product/"; ?>
    <h2>Liste des produits</h2>
<?php if (!empty($data)): ?>
    <button onclick="window.location.href='<?= URL ?>insert/'">Ajouter un produit</button>
    <table>
        <thead>
        <tr>
            <!--<th>id</th>!-->
            <th>nom</th>
            <th>quantite</th>
            <th>prixHT</th>
            <th>prixTTC</th>
            <th>TVA</th>
            <th>zoneStockage</th>
            <th>image</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $product): ?>
            <tr>
                <!--<td><?= $product['id'] ?></td>!-->
                <td><?= $product['nom'] ?></td>
                <td><?= $product['quantite'] ?></td>
                <td><?= $product['prixHT'] ?></td>
                <td><?= $product['prixTTC'] ?></td>
                <td><?= $product['TVA'] ?></td>
                <td><?= $product['zoneStockage'] ?></td>
                <td><img src="<?= $product['image'] ?>" alt="<?= $product['nom'] ?>" style="width: 100px; height: auto;"></td>
                <td>
                    <a href="<?= URL ?>view/<?= $product['id'] ?>">Détails</a>
                    <form id="supprform" method="post" action="<?= URL ?>delete/<?= $product['id'] ?>" style="display:inline;">
                        <button type="submit" name="delete">Supprimer</button>
                    </form>
                    <a href="<?= URL ?>update/<?= $product['id'] ?>">Modifier</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun produit trouvé.</p>
<?php endif; ?>