<?php
class Champions extends Controller
{
    public function seeAll()
    {
        $this->loadModel('Champion');
        $champions = $this->Champion->getAll();
        $this->render('seeAll', compact('champions'));
    }
    public function fiche($id)
    {

        $this->loadModel('Champion');
        $champion = $this->Champion->getOne($id);
        $team = $this->Champion->getTeam($id);
        $this->render('fiche', compact('champion', 'team'));
    }
}
