<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beschikbare voertuigen</title>
    <link rel="stylesheet" href="../../../public/css/instructeurGlobal.css">
</head>
<body>
    <main>
        <h3><?= $data['title'] ?></h3>

        <div class="instructeur">
            <p>
                <span>Naam: </span><?= $data['instructeur'][0]->Voornaam . " " . $data['instructeur'][0]->Tussenvoegsel . " " . $data['instructeur'][0]->Achternaam ?>
                <br><span>Datum in dienst: </span><?= $data['instructeur'][0]->DatumInDienst ?>
                <br><span>Aantal sterren: </span><?= $data['instructeur'][0]->AantalSterren ?>
            </p>
        </div>

        <div class="voertuigTable">
            <table>
                <thead>
                    <th>Type voertuig</th>
                    <th>Type</th>
                    <th>Kenteken</th>
                    <th>Bouwjaar</th>
                    <th>Brandstof</th>
                    <th>Rijbewijscategorie</th>
                </thead>
                <tbody>
                    <?= "test"//$data['tableRows']; ?>
                </tbody>
            </table>
        </div>

    </main>
</body>
</html>