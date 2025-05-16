<?php const URL = "http://gestionstock/zone/"; ?>
    <h2>Liste des zones</h2>
    <button onclick="window.location.href='<?= URL ?>insert/'">Ajouter une zone</button>
<?php if (!empty($data)): ?>
    <table>
        <thead>
        <tr>
<!--            <th>id</th>-->
            <th>nom</th>
            <th>rue</th>
            <th>code Postal</th>
            <th>ville</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $zone): ?>
            <tr>
<!--                w-->
                <td><?= $zone['libelle'] ?></td>
                <td><?= $zone['rue'] ?></td>
                <td><?= $zone['codePostal'] ?></td>
                <td><?= $zone['ville'] ?></td>
                <td>
<!--                    <a href="--><?php //= URL ?><!--view/--><?php //= $zone['id'] ?><!--">Détails</a>-->
                    <form id="supprform" action="<?= URL ?>view/<?= $zone['id'] ?>" method="get" style="display:inline;">
                        <button type="submit">Détails</button>
                    </form>
                    <form id =supprform" action="<?= URL ?>update/<?= $zone['id'] ?>" method="get" style="display:inline;">
                        <button type="submit">Modifier</button>
                    <form id="supprform" method="post" action="<?= URL ?>delete/<?= $zone['id'] ?>" style="display:inline;">
                        <button type="submit" name="delete">Supprimer</button>
                    </form>
<!--                    <a href="--><?php //= URL ?><!--update/--><?php //= $zone['id'] ?><!--">Modifier</a>-->
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucune zone trouvée.</p>
<?php endif; ?>