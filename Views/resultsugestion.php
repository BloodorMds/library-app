<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la Suggestion</title>
    <!-- Ajoutez le lien vers le fichier Tailwind CSS si vous l'utilisez -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-4">
<div class="bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-semibold mb-6">Résultats de la Suggestion</h1>
    <p class="text-gray-600 mb-4">Voici la liste des livres suggérés :</p>
    <table class="w-full border-collapse border border-gray-300">
        <thead>
        <tr class="bg-gray-200">
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Titre</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Assurez-vous que $results contient les résultats de la requête SQL
        foreach ($result as $row) {
            echo "<tr class='hover:bg-gray-100'>";
            echo "<td class='px-6 py-4 text-sm'>" . $row['titre'] . "</td>";
            echo "</tr>";
        }
        ?>

        </tbody>
    </table>
    <H3> vos derniers emprunt </H3>
    <table class="w-full border-collapse border border-gray-300">
        <thead>
        <tr class="bg-gray-200">
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Titre</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($resultdeux as $row){
            echo "<tr class='hover:bg-gray-100'>";
        echo "<td class='px-6 py-4 text-sm'>" . $row['titre'] . "</td>";
        echo "</tr>";
        }
        ?>



        </tbody>
    </table>
</div>
</body>

</html>
