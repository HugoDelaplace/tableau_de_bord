<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">"
    <title>Pokédex</title>
</head>

<body>
    <?php
    $file = './data/pok.json';
    $data = file_get_contents($file);
    $obj = json_decode($data);
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type 1</th>
                <th>Type 2</th>
                <th>Description</th>
                <th>Poids</th>
                <th>Taille</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($obj as $poke): ?>
                <tr>
                    <td>
                        <?= $poke->name ?>
                    </td>
                    <td>
                        <?= $poke->type1 ?>
                    </td>
                    <td>
                        <?= $poke->type2 ?>
                    </td>
                    <td>
                        <?= $poke->description ?>
                    </td>
                    <td>
                        <?= $poke->weight ?>
                    </td>
                    <td>
                        <?= $poke->height ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>