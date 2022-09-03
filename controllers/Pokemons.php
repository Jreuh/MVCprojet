<?php
class Pokemons extends Controller
{
    public function index()
    {
        $this->loadModel('Pokemon');
        $pokemons = $this->Pokemon->getAll();
        $this->render('index', compact('pokemons'));
    }

    public function fiche($id)
    {

        $this->loadModel('Pokemon');
        $pokemon = $this->Pokemon->getOne($id);
        $this->render('fiche', compact('pokemon'));
    }
}
