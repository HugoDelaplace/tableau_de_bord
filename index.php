<!DOCTYPE html>
<html lang="fr">
<?php
    $file = './data/pokedex.json';
    $data = file_get_contents($file);
    $obj = json_decode($data);
    $truc = json_decode($data);
    if (!empty($_GET['q'])){
        if (!empty($_GET['rch'])){
            $obj = array();
            foreach ($truc as $pokemon){
                if ($_GET['rch'] == "nom"){
                    if (strpos($pokemon->name, $_GET['q']) !== false | strpos(strtolower($pokemon->name), $_GET['q']) !== false){
                        array_push($obj, $pokemon);
                    }
                }
                elseif ($_GET['rch'] == "type"){
                    if (strpos(strtolower($pokemon->type1), strtolower($_GET['q'])) !== false | strpos(strtolower($pokemon->type2), strtolower($_GET['q'])) !== false){
                        array_push($obj, $pokemon);
                    }
                }
            }
        }
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="static/style.css">
    <title>Pokédex</title>
</head>

<body class="p-4">
    <h1>Pokédex</h1>
    <form action="" class="mb-4">
        <div class="form-group">
            <input type="text" class="recherches" name="q"> 
        </div>
        <button class="btn">Rechercher</button>
        <p>Rechercher par :</p>
        <select name="rch" id="rch">
            <option value="nom">Nom</option>
            <option value="type">Type</option>
        </select>
    </form>
    <table class="tablepoke">
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
                        <?= '<p class="type">'.$poke->type1.'</p>' ?>
                    </td>
                    <td>
                        <?= '<p class="type">'.$poke->type2.'</p>' ?>
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
        </tbody>
    </table>
</body>
</html>

<script>
    var types = document.getElementsByClassName("type");
    for (let i = 0; i<types.length; i++){
        types[i].style.textAlign = 'center';
        types[i].style.borderRadius = '2em';
        types[i].style.margin = '0%';
        if (types[i].textContent == "Grass"){
            types[i].style.backgroundColor = '#7BCE52';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Fire"){
            types[i].style.backgroundColor = '#F75231';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Water"){
            types[i].style.backgroundColor = '#399CFF';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Poison"){
            types[i].style.backgroundColor = '#B55AA5';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Electric"){
            types[i].style.backgroundColor = '#FFC631';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Normal"){
            types[i].style.backgroundColor = '#ADA594';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Bug"){
            types[i].style.backgroundColor = '#ADBD21';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Fighting"){
            types[i].style.backgroundColor = '#A55239';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Psychic"){
            types[i].style.backgroundColor = '#FF73A5';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Ground"){
            types[i].style.backgroundColor = '#D6B55A';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Rock"){
            types[i].style.backgroundColor = '#BDA55A';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Flying"){
            types[i].style.backgroundColor = '#9CADF7';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Ghost"){
            types[i].style.backgroundColor = '#6363B5';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Ice"){
            types[i].style.backgroundColor = '#5ACEE7';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Dragon"){
            types[i].style.backgroundColor = '#8858F6';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Steel"){
            types[i].style.backgroundColor = '#ADADC6';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Dark"){
            types[i].style.backgroundColor = '#735A4A';
            types[i].style.color = 'white';
        }
        if (types[i].textContent == "Fairy"){
            types[i].style.backgroundColor = '#E09AE3';
            types[i].style.color = 'white';
        }
    }
</script>