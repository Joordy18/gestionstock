<h1>Ajouter une zone</h1>
<div class="container">
    <form method="post" action="/zone/insert">
        <label for="libelle">Libellé:</label>
        <input type="text" id="libelle" name="libelle" required>

        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" required>

        <button type="submit">Ajouter</button>
        <button type="button" onclick="window.location.href='/zone/index'">Retour à la liste</button>
    </form>
</div>