<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche Emprunts et Suggestions</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-semibold mb-6">Recherche Emprunts et Suggestions</h2>
    <form action="../Controller/controller.php" method="POST">
        <input type="hidden" name="action" value="fin">

        <div class="mb-4">
            <label for="id_abonne" class="block text-gray-600">ID de l'Abonné :</label>
            <input type="text" id="id_abonne" name="id_abonne" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <div>
            <input type="submit" value="Rechercher" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer">
        </div>
    </form>
</div>
</body>

</html>
