<?php
class productController extends Controller {

    public function index() {
        $requester = new Requester();
        $query = $requester->findAllProducts();
        $stmt = $this->product->co->query($query);
        $data = $stmt->fetchAll();
        $this->set(compact("data"));
        $this->render();
    }

    public function insert() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nom' => $_POST['nom'],
                'quantite' => $_POST['quantite'],
                'prixHT' => $_POST['prixHT'],
                'TVA' => $_POST['TVA'],
                'zoneStockage' => $_POST['zoneStockage'],
                'image' => $_POST['image'],
                'prixTTC' => $_POST['prixHT'] + ($_POST['prixHT'] * $_POST['TVA'] / 100)
            ];
            $requester = new Requester();
            $query = $requester->insertProduct($data);
            $stmt = $this->product->co->prepare($query);
            $stmt->execute($data);
            header('Location: /product/index');
            exit;
        }

        // Récupération des zones de stockage
        $requester = new Requester();
        $query = $requester->findAllZones();
        $stmt = $this->product->co->query($query);
        $zones = $stmt->fetchAll();

        $this->set(compact("zones"));
        $this->render();
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nom' => $_POST['nom'],
                'quantite' => $_POST['quantite'],
                'prixHT' => $_POST['prixHT'],
                'prixTTC' => $_POST['prixHT'] + ($_POST['prixHT'] * $_POST['TVA'] / 100),
                'TVA' => $_POST['TVA'],
                'zoneStockage' => $_POST['zoneStockage'],
                'image' => $_POST['image']
            ];
            $requester = new Requester();
            $query = $requester->updateProduct($id, $data);

            // Ajout de l'ID au tableau des paramètres
            $data['id'] = $id;

            $stmt = $this->product->co->prepare($query);
            $stmt->execute($data);
            header('Location: /product/index');
            exit;
        } else {
            $requester = new Requester();

            // Récupération des informations du produit
            $query = $requester->find($id);
            $stmt = $this->product->co->prepare($query);
            $stmt->execute(['id' => $id]);
            $product = $stmt->fetch();

            // Récupération des zones de stockage
            $queryZones = $requester->findAllZones();
            $stmtZones = $this->product->co->query($queryZones);
            $zones = $stmtZones->fetchAll();

            $this->set(compact("product", "zones"));
            $this->render();
        }
    }

    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $requester = new Requester();
            $query = $requester->deleteProduct($id);
            $stmt = $this->product->co->prepare($query);
            $stmt->execute(['id' => $id]);
            header('Location: /product/index');
            exit;
        }
        $this->render();
    }

    public function view($id) {
        $requester = new Requester();
        $query = $requester->findWithJoin('zone', 'product.zoneStockage = zone.id') . " WHERE product.id = :id";
        $stmt = $this->product->co->prepare($query);
        $stmt->execute(['id' => $id]);
        $product = $stmt->fetch();

        if ($product) {
            $product['zoneStockage'] = [
                'id' => $product['zoneStockage'],
                'libelle' => $product['libelle']
            ];
        }

        $this->set(compact("product"));
        $this->render();
    }
}