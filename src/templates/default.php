<nav>
    <ul>
        <li><a href="/product/index">Produits</a></li>
        <li><a href="/zone/index">Zones</a></li>
    </ul>
</nav>
<style>
    nav {
        background-color: #007bff;
        padding: 10px 20px;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        gap: 15px;
    }

    nav ul li {
        display: inline;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    nav ul li a:hover {
        color: #ced4da;
        text-decoration: none;
        font-weight: bold;
    }
</style>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php $this->add_css(['styles']);
    $this->add_js(['test']);
    ?>

    <title>Gestion Stock</title>
</head>
<body>
<?= $content_for_layout ?>

</body>
</html>