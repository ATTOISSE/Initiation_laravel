<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>N°</th>
            <th>Nom</th>
            <th>Duree</th>
        </tr>
        <?php for ($i=0; $i < 3; $i++) { ?>
            <tr>
                 <td> <?= $cours->numero[$i] ?> </td>
                <td><?= $cours->nom[$i] ?> </td>
                <td><?= $cours->duree[$i] ?> </td>
            </tr>
      <?php  } ?>
    </table>
</body>
</html>