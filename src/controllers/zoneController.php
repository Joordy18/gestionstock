<?php

class zoneController extends Controller {

    public function index(){
        $requester = new Requester();
        $query = $requester->findAllZones();
        $stmt = $this->zone->co->query($query);
        $data = $stmt->fetchAll();
        $this->set(compact("data"));
        $this->render();
    }

    public function insert() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'libelle' => $_POST['libelle'],
                'adresse' => $_POST['adresse']
            ];
            $requester = new Requester();
            $query = $requester->insertZone($data);
            $stmt = $this->zone->co->prepare($query);
            $stmt->execute($data);
            header('Location: /zone/index');
            exit;
        }
        $this->render();
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'libelle' => $_POST['libelle'],
                'adresse' => $_POST['adresse'],
                'id' => $id
            ];
            $requester = new Requester();
            $query = $requester->updateZone($id, $data);
            $stmt = $this->zone->co->prepare($query);
            $stmt->execute($data);
            header('Location: /zone/index');
            exit;
        } else {
            $requester = new Requester();
            $query = $requester->findZone($id);
            $stmt = $this->zone->co->prepare($query);
            $stmt->execute(['id' => $id]);
            $zone = $stmt->fetch();
            $this->set(compact("zone"));
            $this->render();
        }
    }

    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $requester = new Requester();
            $query = $requester->deleteZone($id);
            $stmt = $this->zone->co->prepare($query);
            $stmt->execute(['id' => $id]);
            header('Location: /zone/index');
            exit;
        }
        $this->render();
    }

    public function view($id) {
        $requester = new Requester();
        $query = $requester->findZone($id);
        $stmt = $this->zone->co->prepare($query);
        $stmt->execute(['id' => $id]);
        $zone = $stmt->fetch();
        $this->set(compact("zone"));
        $this->render();
    }
}