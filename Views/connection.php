<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-semibold mb-6">Connexion</h2>
    <form action="../Controller/controller.php" method="POST">
        <input type="hidden" name="action" value="conn">
        <div class="mb-4">
            <label for="login" class="block text-gray-600">Login :</label>
            <input type="text" id="login" name="login" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-600">Mot de passe :</label>
            <input type="password" id="password" name="password" class="w-full border px-4 py-2 rounded focus:outline-none focus:border-blue-500" required>
        </div>

        <div>
            <input type="submit" value="Se connecter" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer">
        </div>
    </form>


</div>
</body>
</html>


