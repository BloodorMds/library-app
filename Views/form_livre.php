<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de Livre</title>
    <!-- Ajoutez le lien vers le fichier Tailwind CSS si vous l'utilisez -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-semibold mb-6">Recherche de Livre</h2>
    <form action="../Controller/controller.php" method="POST">
        <input type="hidden" name="action" value="findlivre">

        <div class="mb-4">
            <label for="titre" class="block text-gray-600">Titre :</label>
            <input type="text" id="titre" name="titre" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="auteur" class="block text-gray-600">Auteur :</label>
            <input type="text" id="auteur" name="auteur" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="editeur" class="block text-gray-600">Éditeur :</label>
            <input type="text" id="editeur" name="editeur" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="disponible" class="block text-gray-600">Disponible :</label>
            <input type="text" id="disponible" name="disponible" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500">
        </div>


        <div>
            <input type="submit" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer">
        </div>
    </form>
</div>
</body>

</html>
