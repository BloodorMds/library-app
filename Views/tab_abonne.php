
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Abonnés</title>
    <!-- Ajoutez le lien vers le fichier Tailwind CSS si vous l'utilisez -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4">Liste des Abonnés</h2>

        <?php if (!empty($result) && is_array($result)) : ?>
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Nom</th>
                        <th class="border px-4 py-2">Prénom</th>
                        <th class="border px-4 py-2">Pays</th>
                        <!-- Ajoutez d'autres colonnes au besoin -->
                    </tr>
                </thead>
                <tbody>
                <?php
                // tab_abonne.php

                if (!empty($result)) {
                    foreach ($result as $subscriber) {
                        // Affichez les détails du souscripteur selon vos besoins
                        echo "Nom : " . $subscriber['name'] . "<br>";
                        echo "Prénom : " . $subscriber['surname'] . "<br>";
                        echo "Pays : " . $subscriber['country'] . "<br>";
                        echo "Souscripteur : " . $subscriber['sub'] . "<br>";
                        echo "-------------------------<br>";
                    }
                } else {
                    echo "Aucun résultat trouvé.";
                }
                ?>
                </tbody>
            </table>
        <?php else : ?>
    <p>Aucun résultat trouvé.</p>
<?php endif; ?>
</div>
</body>
</html>
