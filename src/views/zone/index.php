<?php const URL = "http://gestionstock/zone/"; ?>
    <h2>Liste des zones</h2>
    <button onclick="window.location.href='<?= URL ?>insert/'">Ajouter une zone</button>
<?php if (!empty($data)): ?>
    <table>
        <thead>
        <tr>
<!--            <th>id</th>-->
            <th>nom</th>
            <th>adresse</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $zone): ?>
            <tr>
<!--                <td>--><?php //= $zone['id'] ?><!--</td>-->
                <td><?= $zone['libelle'] ?></td>
                <td><?= $zone['adresse'] ?></td>
                <td>
                    <a href="<?= URL ?>view/<?= $zone['id'] ?>">Détails</a>
                    <form id="supprform" method="post" action="<?= URL ?>delete/<?= $zone['id'] ?>" style="display:inline;">
                        <button type="submit" name="delete">Supprimer</button>
                    </form>
                    <a href="<?= URL ?>update/<?= $zone['id'] ?>">Modifier</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucune zone trouvée.</p>
<?php endif; ?>