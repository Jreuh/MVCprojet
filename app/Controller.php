<?php
abstract class Controller
{
    public function loadModel(string $model)
    {    // On va chercher le fichier correspondant au modèle souhaité
        require_once(ROOT . 'models/' . $model . '.php');
        // On crée une instance de ce modèle. Ainsi "Pokemon" sera accessible par $this->pokemon
        $this->$model = new $model();
    }

    public function render(string $file, array $data = [])
    {
        extract($data);

        ob_start();
        require_once(ROOT . 'views/' . strtolower(get_class($this)) . '/' . $file . '.php');
        $content = ob_get_clean();
        require_once('./views/layouts/default.php');
    
    }
}
