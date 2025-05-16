<?php const URL = "http://gestionstock/zone/"; ?>
<div class="container">
    <h1>Détails de la zone</h1>

    <?php if (!empty($zone)): ?>
        <div class="product-details">
            <table class="details-table">
<!--                <tr>-->
<!--                    <th>ID</th>-->
<!--                    <td>--><?php //= $zone['id'] ?><!--</td>-->
<!--                </tr>-->
                <tr>
                    <th>Nom</th>
                    <td><?= $zone['libelle'] ?></td>
                </tr>
                <tr>
                    <th>Adresse</th>
                    <td><?= $zone['rue']." ".$zone['codePostal']." ".$zone['ville']?></td>
                </tr>

            </table>
        </div>
    <?php else: ?>
        <p>Zone introuvable.</p>
    <?php endif; ?>
    <button onclick="window.location.href='<?= URL ?>index'">Retour à la liste</button>
</div>