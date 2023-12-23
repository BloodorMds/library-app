
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/dist/output.css">
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen p-4">
<h1 class="text-3xl font-semibold mb-6">Accueil</h1>
<p class="text-gray-700 text-center mb-6">Bienvenue sur le site de la bibliothèque de Malakoff.</p>

<a href="index.php?action=afficherCatalogue" class="mb-4 text-blue-500 hover:underline">Consulter les livres disponibles</a>
<a href="index.php?action=afficherEmprunts" class="mb-4 text-blue-500 hover:underline">Consulter les emprunts en cours</a>

<form action="../Controller/controller.php" method="POST" class="mb-8 p-4 bg-white shadow-md rounded-lg w-full max-w-md">
    <h2 class="text-xl font-semibold mb-4">Rechercher un livre</h2>
    <div class="mb-4">
        <label for="titre" class="block text-sm font-medium text-gray-700">Titre</label>
        <input type="text" name="titre" id="titre" class="mt-1 p-2 border rounded-md w-full">
    </div>
    <div class="mb-4">
        <label for="auteur" class="block text-sm font-medium text-gray-700">Nom de l'auteur</label>
        <input type="text" name="auteur" id="auteur" class="mt-1 p-2 border rounded-md w-full">
    </div>
    <div class="mb-4">
        <label for="editeur" class="block text-sm font-medium text-gray-700">Nom de l'éditeur</label>
        <input type="text" name="editeur" id="editeur" class="mt-1 p-2 border rounded-md w-full">
    </div>
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Disponible</label>
        <div class="flex items-center">
            <input type="radio" name="disponible" id="disponible_oui" value="1" class="mr-2">
            <label for="disponible_oui" class="text-sm font-medium text-gray-700">Oui</label>
        </div>
        <div class="flex items-center">
            <input type="radio" name="disponible" id="disponible_non" value="0" class="mr-2">
            <label for="disponible_non" class="text-sm font-medium text-gray-700">Non</label>
        </div>
    </div>
    <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Rechercher les livres</button>
</form>

<?php



?>
</body>
</html>


