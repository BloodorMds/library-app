<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Abonné</title>
    <!-- Ajoutez le lien vers le fichier Tailwind CSS si vous l'utilisez -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-semibold mb-6">Modifier Abonné</h2>
    <form action="../Controller/controller.php" method="POST">
        <input type="hidden" name="action" value="modifabo">

        <!-- Ajoutez le champ pour l'ID abonné à modifier -->
        <div class="mb-4">
            <label for="id" class="block text-gray-600">ID Abonné à modifier :</label>
            <input type="text" id="id" name="id" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <!-- Reste du formulaire pour la modification -->
        <div class="mb-4">
            <label for="name" class="block text-gray-600">Nom :</label>
            <input type="text" id="name" name="name" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <!-- Ajoutez les autres champs nécessaires pour la modification -->

        <div class="mb-4">
            <label for="surname" class="block text-gray-600">Prénom :</label>
            <input type="text" id="surname" name="surname" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="country" class="block text-gray-600">Ville :</label>
            <input type="text" id="country" name="country" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="numberPostal" class="block text-gray-600">Code Postal :</label>
            <input type="text" id="numberPostal" name="numberPostal" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="adresse" class="block text-gray-600">Adresse :</label>
            <input type="text" id="adresse" name="adresse" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="birth" class="block text-gray-600">Date de Naissance :</label>
            <input type="date" id="birth" name="birth" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="sub" class="block text-gray-600">Abonnement :</label>
            <input type="text" id="sub" name="sub" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="date_inscription" class="block text-gray-600">Date d'inscription :</label>
            <input type="date" id="date_inscription" name="date_inscription" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="date_fin" class="block text-gray-600">Date Fin Abonnement :</label>
            <input type="date" id="date_fin" name="date_fin" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <div>
            <input type="submit" value="Modifier Abonné" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer">
        </div>
    </form>
</div>
</body>

</html>
