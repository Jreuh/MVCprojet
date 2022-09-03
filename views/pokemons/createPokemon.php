<?php $title = "Ajout d'un pokemon" ?>
<form action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="number">Numeros</label>
        <input class="form-control" id="number" name="number" value=<?php if (isset($_POST['number']) && !empty($_POST['number'])) {
                                                                        echo $_POST['number'];
                                                                    } else {
                                                                        echo '***';
                                                                    } ?>>

    </div>
    <div class="form-group">
        <label for="Nom">Nom</label>
        <input type="text" class="form-control" id="Nom" name="first_name" value=<?php if (isset($_POST['first_name']) && !empty($_POST['first_name'])) {
                                                                                        echo $_POST['first_name'];
                                                                                    } else {
                                                                                        echo "Requis";
                                                                                    } ?>>
    </div>

    <div class="form-group">
        <label for="type1">Type1</label>
        <input type="text" class="form-control" id="type1" name="type1" value=<?php if (isset($_POST['type1']) && !empty($_POST['type1'])) {
                                                                                    echo $_POST['type1'];
                                                                                } else {
                                                                                    echo "Requis";
                                                                                } ?>>
    </div>
    <div class="form-group">
        <label for="type2">Type2</label>
        <input type="text" class="form-control" id="type2" name="type2">
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image">

    </div>

    <button type="submit" value="addpoke" class="btn btn-primary" name="addpoke">ajouter</button>
</form>