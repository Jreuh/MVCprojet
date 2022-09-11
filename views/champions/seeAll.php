<?php $title = "Listes des Champions"; ?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <?php foreach ($champions as $champion) { ?>
            <div class="card m-3 col-3 <?php
                                        if ($champion['type'] === 'Plante') {
                                            echo "plante";
                                        }
                                        if ($champion['type'] === 'Insecte') {
                                            echo "insect";
                                        }
                                        if ($champion['type'] === 'Eau') {
                                            echo "eau";
                                        }
                                        if ($champion['type'] === 'Dragon') {
                                            echo "dragon";
                                        }
                                        if ($champion['type'] === 'Feu') {
                                            echo "feu";
                                        }
                                        if ($champion['type'] === 'Electrick') {
                                            echo "electric";
                                        }
                                        if ($champion['type'] === 'Glace') {
                                            echo "glace";
                                        }
                                        if ($champion['type'] === 'Sol') {
                                            echo "sol";
                                        }
                                        if ($champion['type'] === 'Combat') {
                                            echo 'combat';
                                        }
                                        if ($champion['type'] === 'Roche') {
                                            echo 'roche';
                                        }
                                        if ($champion['type'] === 'Poison') {
                                            echo 'poison';
                                        }
                                        if ($champion['type'] === 'Psy') {
                                            echo 'psy';
                                        }
                                        if ($champion['type'] === 'Spectre') {
                                            echo 'spectre';
                                        }
                                        if ($champion['type'] === 'Normal') {
                                            echo 'normal';
                                        }

                                        ?>" style="width : 15rem">
                <?php $path = ROOT . "public/images/champion/";
                var_dump($path) ?>
                <img src="../../../MVCPOO/public/images/Champion/<?= $champion['champion'] ?>" class="card-img-top" alt=<?= $champion['champion'] ?>>
                <div class="card-body">
                    <h5 class="card-title"> <?= $champion['city'] . " " ?> <br><?= $champion['champion'] ?></h5>
                    <p class="card-text type"><img src="../../../MVCPOO/public/images//Type/<?= $champion['type'] ?>"> <br></p>
                    <p> <?= $champion['badge'] ?> &nbsp <img src="../../../MVCPOO/public/images//Badge/<?= $champion['badge'] ?>"></p>
                    <a href="Champion/fiche/<?= $champion['id'] ?>" class="btn btn-dark">fiche champion</a>
                </div>

            </div> <?php } ?>
    </div>
</div>