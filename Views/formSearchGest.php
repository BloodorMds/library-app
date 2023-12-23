<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de Fiche Abonné</title>
    <!-- Add the link to the Tailwind CSS file if you're using it -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-semibold mb-6">Recherche de Fiche Abonné</h2>
    <form action="../Controller/controller.php" method="POST">
        <input type="hidden" name="action" value="findlesub">

        <div class="mb-4">
            <label for="name" class="block text-gray-600">Nom :</label>
            <input type="text" id="name" name="name" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="surname" class="block text-gray-600">Prénom :</label>
            <input type="text" id="surname" name="surname" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="country" class="block text-gray-600">Pays :</label>
            <input type="text" id="country" name="country" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="sub" class="block text-gray-600">Abonnement :</label>
            <input type="text" id="sub" name="sub" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500">
        </div>

        <div>
            <input type="submit" value="Rechercher" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer">
        </div>
    </form>
</div>
</body>

</html>
