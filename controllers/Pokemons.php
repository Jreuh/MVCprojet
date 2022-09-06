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
    public function creation()
    {
        $this->render('createPokemon');
        if (isset($_POST['addpoke'])) {

            if (isset($_POST['number']) && !empty($_POST['number']) && $_POST != '***') {
                $number = htmlspecialchars(strip_tags($_POST['number']));
            } else {
                $this->render('createPokemon');
            }
            if (isset($_POST['first_name']) && !empty($_POST['first_name'])) {
                $firstname = htmlspecialchars(strip_tags($_POST['first_name']));
            } else {
                $this->render('createPokemon');
            }
            if (isset($_POST['type1']) && !empty($_POST['type1'])) {
                $type1 = htmlspecialchars(strip_tags($_POST['type1']));
            } else {
                $this->render('createPokemon');
            }
            if (isset($_POST['type2'])) {
                $type2 = htmlspecialchars(strip_tags($_POST['type2']));
            } else {
                $this->render('createPokemon');
            }

            if (isset($_FILES['image']) && !empty($_FILES['image'])) {
                $target_dir = ROOT . 'public/images/Pokemon/';
                $target_file = $target_dir . basename($_FILES['image']['name']);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                rename($target_file, "public/images/Pokemon/$firstname.png");
                $image = "public/images/Pokemon/$firstname.png";
                $image = htmlspecialchars($image);
            } else {
                $this->render('createPokemon');
            }
            $this->loadModel('Pokemon');
            $this->Pokemon->creatPoke($number, $firstname, $type1, $type2, $image);
            header('Location: http://localhost/MVCPOO/Pokemons');
        }
    }
    public function updatePokemon($id)
    {
        $this->loadModel('Pokemon');
        $pokemon = $this->Pokemon->getOne($id);
        $this->render('updatePokemon', compact('pokemon'));
        if (isset($_POST['editp'])) {

            if (isset($_POST['number']) && !empty($_POST['number']) && $_POST != '***') {
                $number = htmlspecialchars(strip_tags($_POST['number']));
            } else {
                $this->render("updatePokemon/$id");
            }
            if (isset($_POST['first_name']) && !empty($_POST['first_name'])) {
                $firstname = htmlspecialchars(strip_tags($_POST['first_name']));
            } else {
                $this->render("updatePokemon/$id");
            }
            if (isset($_POST['type1']) && !empty($_POST['type1'])) {
                $type1 = htmlspecialchars(strip_tags($_POST['type1']));
            } else {
                $this->render("updatePokemon/$id");
            }
            if (isset($_POST['type2'])) {
                $type2 = htmlspecialchars(strip_tags($_POST['type2']));
            } else {
                $this->render("updatePokemon/$id");
            }

            if (isset($_FILES['image']) && !empty($_FILES['image'])) {
                $target_dir = ROOT . 'public/images/Pokemon/';
                $target_file = $target_dir . basename($_FILES['image']['name']);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                rename($target_file, "public/images/Pokemon/$firstname.png");
                $image = "public/images/Pokemon/$firstname.png";
                $image = htmlspecialchars($image);
            } else {
                $this->render("updatePokemon/$id");
            }
            $this->Pokemon->updatePoke($id, $number, $firstname, $type1, $type2, $image);

            header('Location: http://localhost/MVCPOO/Pokemons/fiche/' . $id);
        }
    }
    public function deletePokemon($id)
    {
        $this->loadModel('Pokemon');
        $pokemon = $this->Pokemon->getOne($id);
        $this->render('deletePokemon', compact('pokemon'));
        if (isset($_POST['approve'])) {
            $this->Pokemon->deletePoke($id);
        }
        if (isset($_POST['cancel'])) {
            header('Location: http://localhost/MVCPOO/Pokemons/fiche/' . $id);
        }
    }
}
