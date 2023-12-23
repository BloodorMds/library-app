<!DOCTYPE html>
<html>
<head>
    <title>Catalogue</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/dist/output.css">
</head>
<body class="bg-gray-100 p-4">
<div class="bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-semibold mb-6">Catalogue</h1>
    <p class="text-gray-600 mb-4">Voici la liste des livres disponibles :</p>
    <table class="w-full border-collapse border border-gray-300">
        <thead>
        <tr class="bg-gray-200">
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">ID</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Titre</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Genre</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Catégorie</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../Model/request.php';
        $cataloguer=getcatalogue();
        foreach ($cataloguer as $livre) {
            echo "<tr class='hover:bg-gray-100'>";
            echo "<td class='px-6 py-4 text-sm'>" . $livre['nom'] ."</td>";
            echo "<td class='px-6 py-4 text-sm'>" . $livre[1] . "</td>";
            echo "<td class='px-6 py-4 text-sm'>" . $livre[2] . "</td>";
            echo "<td class='px-6 py-4 text-sm'>" . $livre[3] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
