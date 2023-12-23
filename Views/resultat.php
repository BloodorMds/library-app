<!DOCTYPE html>
<html>
<head>
    <title>Résultats de la recherche d'abonné</title>
    <meta charset="UTF-8">
    <!-- Ajoutez le lien vers le fichier Tailwind CSS si vous l'utilisez -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
<div class="bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-semibold mb-6">Résultats de la recherche de livre </h1>
    <p class="text-gray-600 mb-4">Voici les résultats de la recherche :</p>

    <?php if (!empty($result)) : ?>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
            <tr class="bg-gray-200">
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Titre</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Auteur</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Éditeur</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Disponibilité</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Date eMPRUNT</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $livre) : ?>
                <tr class='hover:bg-gray-100'>
                    <td class='px-6 py-4 text-sm'><?= $livre['titre'] ?></td>
                    <td class='px-6 py-4 text-sm'><?= $livre['auteur_nom'] ?></td>
                    <td class='px-6 py-4 text-sm'><?= $livre['editeur_nom'] ?></td>
                    <td class='px-6 py-4 text-sm'><?= $livre['disponible'] == 1 ? "disponible" : "non disponible" ?></td>
                    <td class='px-6 py-4 text-sm'><?= $livre['max_date_emprunt'] ?></td>
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
