<?php

require_once __DIR__ . "./../class/databse.php";
require_once __DIR__ . "./../class/categories.php";

class categoriesRepository extends Db {
    public function getAll() {
        $data = $this->getDb()->query("SELECT * FROM categories");

        $categories = [];

        foreach ($data as $categoryData) {
            $newCategory = new Categories(
                $categoryData['id'],
                $categoryData['personnel'],
                $categoryData['travail'],
                $categoryData['famille'],
                $categoryData['amis']
            );

            $categories[] = $newCategory;
        }

        return $categories;
    }

    public function create($newCategory) {
        $request = "INSERT INTO categories (id, personnel, travail, famille, amis) VALUES (?, ?, ?, ?, ?)";
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $newCategory->getId(),
            $newCategory->getPersonnel(),
            $newCategory->getTravail(),
            $newCategory->getFamille(),
            $newCategory->getAmis()
        ]);
    }

    public function update($category) {
        $request = "UPDATE categories SET personnel = ?, travail = ?, famille = ?, amis = ? WHERE id = ?";
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $category->getPersonnel(),
            $category->getTravail(),
            $category->getFamille(),
            $category->getAmis(),
            $category->getId()
        ]);
    }

    public function delete($categoryId) {
        $request = "DELETE FROM categories WHERE id = ?";
        $query = $this->getDb()->prepare($request);

        $query->execute([$categoryId]);
    }
}