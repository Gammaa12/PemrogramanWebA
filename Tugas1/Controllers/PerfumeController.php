<?php

namespace Controllers;

use WebPerfume\PerfumeMen;
use WebPerfume\PerfumeWomen;
use Traits\ResponseFormatter;

class PerfumeController {
    use ResponseFormatter;

    public function getAllPerfumes() {
        $perfumes = [
            new PerfumeMen("Blue de Chanel", 1500000, "Woody, Aromatic, Fresh Spicy"),
            new PerfumeMen("Dior Sauvage", 1200000, "Fresh Spicy, Amber, Aromatic"),
            new PerfumeWomen("Miss Dior", 1800000, "Floral, Fresh, Sweet"),
            new PerfumeWomen("Chanel N°5", 1600000, "Floral, Powdery, Woody")
        ];

        $data = array_map(function($perfume) {
            return [
                "namaPerfume" => $perfume->getName(),
                "hargaPerBottle" => $perfume->getPrice(),
                "deskripsi" => $perfume->getScent(),
                "jenis" => $perfume instanceof PerfumeMen ? "Men" : "Women"
            ];
        }, $perfumes);

        return json_encode($this->success($data));
    }
}