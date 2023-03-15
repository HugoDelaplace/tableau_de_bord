<!DOCTYPE html>
<html lang="fr">
<?php
    $file = './data/pokedex.json';
    $data = file_get_contents($file);
    $obj = json_decode($data);
    $truc = null;
    if (!empty($_GET['q'])){
        foreach ($obj as $pokemon){
            if (($pokemon->name) == $_GET['q']){
                $truc = $pokemon;
                break;
            }
        }
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">"
    <title>Pokédex</title>
</head>

<body class="p-4">
    <h1>Pokédex</h1>
    <form action="" class="mb-4">
        <div class="form-group">
            <input type="text" class="form-control" name="q"> 
        </div>
        <button class="btn btn-primary">Rechercher</button>
    </form>
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
            <?php if ($truc == null):
                foreach ($obj as $poke): ?>
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
                        <?= $poke->weight ?> kg
                    </td>
                    <td>
                        <?= $poke->height ?> m
                    </td>
                </tr>
            <?php endforeach ?>
            <?php else:?>
                    <tr>
                        <td>
                            <?= $truc->name ?>
                        </td>
                        <td>
                            <?= $truc->type1 ?>
                        </td>
                        <td>
                            <?= $truc->type2 ?>
                        </td>
                        <td>
                            <?= $truc->description ?>
                        </td>
                        <td>
                            <?= $truc->weight ?> kg
                        </td>
                        <td>
                            <?= $truc->height ?> m
                        </td>
                    </tr>
            <php? endif ?>
        </tbody>
    </table>
</body>

</html>