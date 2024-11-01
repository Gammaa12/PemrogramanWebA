<?php

namespace WebPerfume;

class PerfumeWomen extends Perfume {
    public function getDescription() {
        return "Women's Perfume: {$this->name} - {$this->scent} scent";
    }

    public function __toString() {
        return $this->getDescription();
    }
}