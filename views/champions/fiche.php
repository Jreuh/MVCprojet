<?php $title = 'Fiche champion' ?>
<section>
    <div class="card <?php
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

                        ?>">
        <div class="title">
            <p><?= $champion['id'] ?></p>
            <p class="champion-name"><?= $champion['champion'] ?></p>
        </div>

        <img class="card-image" src="../../../MVCPOO/public/images/champion/<?= $champion['champion'] ?>">
        <div>
            <p class="card-text type "><img src="../../../MVCPOO/public/images/Type/<?= $champion['type'] ?>" class="card-img-top type" alt=<?= $champion['type'] ?>>
            <p class="card-text">Ville : <?= $champion['city'] ?></p>
        </div>
        <div>

            <a href="../../Champions/updateChampion/<?= $champion['id'] ?>">Modifier <?= $champion['champion'] ?>?</a>
            <a href="../../Champions/deleteChampion/<?= $champion['id'] ?>">Effacer <?= $champion['champion'] ?>?</a>
        </div>
        <div class="equipe">
            <div>
                <p>Equipe de <?= $champion['champion'];      ?></p>
            </div>
        </div>
        <div class="team">
            <?php foreach ($team as $member) { ?>
                <div class="card <?php
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

                                    ?>">
                    <p class="uptitle"> <?= $member['first_name']; ?> <?= $member['number']; ?></p>
                    <img src="../../public/images/Pokemon/<?= $member['first_name'] ?>" alt="">
                    <a href="Pokemons/fiche/<?= $member['id']; ?>">WTF</a>
                </div> <?php var_dump($member['number']);
                    }; ?>


        </div>
</section>