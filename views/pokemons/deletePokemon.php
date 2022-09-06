<?php $title = 'Effacer un pokemon' ?>

<div class="card <?php
                    if ($pokemon['type1'] === 'Plante') {
                        echo "plante";
                    }
                    if ($pokemon['type1'] === 'Insecte') {
                        echo "insect";
                    }
                    if ($pokemon['type1'] === 'Eau') {
                        echo "eau";
                    }
                    if ($pokemon['type1'] === 'Dragon') {
                        echo "dragon";
                    }
                    if ($pokemon['type1'] === 'Feu') {
                        echo "feu";
                    }
                    if ($pokemon['type1'] === 'Electrick') {
                        echo "electric";
                    }
                    if ($pokemon['type1'] === 'Glace') {
                        echo "glace";
                    }
                    if ($pokemon['type1'] === 'Sol') {
                        echo "sol";
                    }
                    if ($pokemon['type1'] === 'Combat') {
                        echo 'combat';
                    }
                    if ($pokemon['type1'] === 'Roche') {
                        echo 'roche';
                    }
                    if ($pokemon['type1'] === 'Poison') {
                        echo 'poison';
                    }
                    if ($pokemon['type1'] === 'Psy') {
                        echo 'psy';
                    }
                    if ($pokemon['type1'] === 'Spectre') {
                        echo 'spectre';
                    }
                    if ($pokemon['type1'] === 'Normal') {
                        echo 'normal';
                    }

                    ?>">
    <div class="title">
        <p><?= $pokemon['number'] ?></p>
        <p class="pokemon-name"><?= $pokemon['first_name'] ?></p>
    </div>

    <img class="card-image" src="../../../MVCPOO/public/images/Pokemon/<?= $pokemon['first_name'] ?>">
    <div>
        <p class="card-text type "><img src="../../../MVCPOO/public/images/Type/<?= $pokemon['type1'] ?>" class="card-img-top type" alt=<?= $pokemon['type1'] ?>>
        <p class="card-text "><img src="../../../MVCPOO/public/images/Type/<?= $pokemon['type2'] ?>" class="card-img-top type" alt=<?= $pokemon['type2'] ?>>
    </div>
    <div>
        <div>
            <p>Etes vous sur de vouloir supprimer <?= $pokemon['first_name'] ?></p>
            <form action="" method="post">
                <button type="submit" value="approve">Effacer</button>
                <button type="submit" value="cancel">Annuler</button>
            </form>
        </div>
    </div>
</div>