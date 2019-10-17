<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css"></head>
<body>
<?php
require_once 'Ville.php';
require_once 'VilleHandler.php';
$results = include 'datas.php';

$villeHandler = new VilleHandler($results);
$villeHandler->sort();
$resultObj = $villeHandler->toObjectsArray();

//        var_dump($resultObj);

?>

<table
        data-toggle="table"
        data-sortable="true"
>
    <thead>
        <tr>
            <th data-field="nom" data-sortable="true">VILLE</th>
            <th ata-sortable="true">DEPARTEMENT</th>
            <th>LATITUDE</th>
            <th>LONGITUDE</th>
            <th data-sortable="true">POPULATION</th>
            <th data-sortable="true">DENSITE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultObj as $ville): ?>
            <tr>
                <td><?= $ville->getNom() ?></td>
                <td><?= $ville->getDepartement() ?></td>
                <td><?= $ville->getLatitude() ?></td>
                <td><?= $ville->getLongitude() ?></td>
                <td><?= $ville->getPopulation() ?></td>
                <td><?= $ville->getDensite() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>

</body>
</html>