<?php
class Requester
{
    public function insertProduct($data) {
        return "INSERT INTO product (nom, quantite, prixHT, prixTTC, TVA, zoneStockage, image)
                  VALUES (:nom, :quantite, :prixHT, :prixTTC, :TVA, :zoneStockage, :image)";
    }

    public function updateProduct($id, $data) {
        return "UPDATE product SET nom = :nom, quantite = :quantite, prixHT = :prixHT, prixTTC = :prixTTC,
                  TVA = :TVA, zoneStockage = :zoneStockage, image = :image WHERE id = :id";
    }

    public function deleteProduct($id) {
        return "DELETE FROM product WHERE id = :id";
    }

    public function find($id) {
        return "SELECT * FROM product WHERE id = :id";
    }

    public function findAllProducts() {
        return "SELECT * FROM product";
    }

    public function findWithJoin($table, $onCondition) {
        return "SELECT * FROM product INNER JOIN $table ON $onCondition";
    }

    public function findAllZones() {
        return "SELECT * FROM zone";
    }
    public function findZone($id){
        return "SELECT * FROM zone WHERE id = :id";
    }
    public function insertZone($data) {
        return "INSERT INTO zone (libelle, adresse) VALUES (:libelle, :adresse)";
    }

    public function updateZone($id, $data) {
        return "UPDATE zone SET libelle = :libelle, adresse = :adresse WHERE id = :id";
    }

    public function deleteZone($id) {
        return "DELETE FROM zone WHERE id = :id";
    }
}