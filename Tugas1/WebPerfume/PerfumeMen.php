<?php

namespace WebPerfume;

class PerfumeMen extends Perfume {
    public function getDescription() {
        return "Men's Perfume: {$this->name} - {$this->scent} scent";
    }

    public function __toString() {
        return $this->getDescription();
    }
}