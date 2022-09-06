<?php $title = 'Modification Pokemon' ?>

<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="number">numeros</label>
        <input type="number" class="form-control" id="number" name="number" value=<?= $pokemon['number'] ?>>

    </div>
    <div class="form-group">
        <label for="Nom">Nom</label>
        <input type="text" class="form-control" id="Nom" name="first_name" value=<?= $pokemon['first_name'] ?>>
    </div>

    <div class="form-group">
        <label for="type1">type1</label>
        <input type="text" class="form-control" id="type1" name="type1" value=<?= $pokemon['type1'] ?>>
    </div>
    <div class="form-group">
        <label for="type2">type2</label>
        <input type="text" class="form-control" id="type2" name="type2" value=<?= $pokemon['type2'] ?>>
    </div>


    <div class="form-group">
        <label for="id">id</label>
        <input type="text" class="form-control" id="id" readonly="readonly" name="id" value=<?= $pokemon['id']  ?>>
    </div>
    <div class="form-group">
        <label for="image">image</label>
        <input type="file" name="image">

    </div>

    <button type="submit" value="editp" name="editp" class="btn ">modifier</button>
</form>