<h1>Ajouter une zone</h1>
<div class="container">
    <form method="post" action="/zone/insert">
        <label for="libelle">Libellé:</label>
        <input type="text" id="libelle" name="libelle" required>

        <label for="rue">Rue:</label>
        <input type="text" id="rue" name="rue" required>

        <label for="codepostal">Code Postal</label>
        <input type="number" id="codepostal" name="codepostal" required>

        <label for="ville">Ville:</label>
        <input type="text" id="ville" name="ville" required>

        <button type="submit">Ajouter</button>
        <button type="button" onclick="window.location.href='/zone/index'">Retour à la liste</button>
    </form>
</div>