<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la recherche d'abonné</title>
    <!-- Ajoutez le lien vers le fichier Tailwind CSS si vous l'utilisez -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
<div class="bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-semibold mb-6">Résultats de la recherche d'abonné</h1>
    <p class="text-gray-600 mb-4">Voici les résultats de la recherche :</p>

    <?php if (!empty($result)) : ?>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
            <tr class="bg-gray-200">
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Nom</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Prénom</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Ville</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Date de naissance</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Date de fin d'abonnement</th>
                <!-- Ajoutez d'autres colonnes en fonction de vos besoins -->
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $abonne) : ?>
                <tr class='hover:bg-gray-100'>
                    <td class='px-6 py-4 text-sm'><?= $abonne['nom'] ?></td>
                    <td class='px-6 py-4 text-sm'><?= $abonne['prenom'] ?></td>
                    <td class='px-6 py-4 text-sm'><?= $abonne['ville'] ?></td>
                    <td class='px-6 py-4 text-sm'><?= $abonne['date_naissance'] ?></td>
                    <td class='px-6 py-4 text-sm'><?= $abonne['date_fin_abo'] ?></td>
                    <!-- Ajoutez d'autres colonnes en fonction de vos besoins -->
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p class="text-gray-600">Aucun résultat trouvé.</p>
    <?php endif; ?>
</div>
</body>
</html>
