<?php const URL = "http://gestionstock/product/"; ?>
    <h2>Liste des produits</h2>
<div class="test">
    <button onclick="window.location.href='<?= URL ?>insert/'">Ajouter un produit</button>
</div>
<?php if (!empty($data)): ?>
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
<!--                    <a href="--><?php //= URL ?><!--view/--><?php //= $product['id'] ?><!--">Détails</a>-->
                    <form id="supprform" action="<?= URL ?>view/<?= $product['id'] ?>" method="get" style="display:inline;">
                        <button type="submit">Détails</button>
                    </form>
                    <form id =supprform" action="<?= URL ?>update/<?= $product['id'] ?>" method="get" style="display:inline;">
                        <button type="submit">Modifier</button>
                    </form>
                    <form id="supprform" method="post" action="<?= URL ?>delete/<?= $product['id'] ?>" style="display:inline;">
                        <button type="submit" name="delete">Supprimer</button>
                    </form>
<!--                    <a href="--><?php //= URL ?><!--update/--><?php //= $product['id'] ?><!--">Modifier</a>-->
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun produit trouvé.</p>
<?php endif; ?>