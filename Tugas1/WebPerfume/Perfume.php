<?php

namespace WebPerfume;

abstract class Perfume {
    protected $name;
    protected $price;
    protected $scent;

    public function __construct($name, $price, $scent) {
        $this->name = $name;
        $this->price = $price;
        $this->scent = $scent;
    }

    abstract public function getDescription();

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getScent() {
        return $this->scent;
    }
}