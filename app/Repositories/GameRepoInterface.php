<?php 

namespace App\Repositories;

interface GameRepoInterface {
    public function getbyId($id=null);
    public function store();
    public function getOptions();
}