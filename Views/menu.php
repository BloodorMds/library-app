<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- Ajoutez le lien vers le fichier Tailwind CSS si vous l'utilisez -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-semibold mb-6">Menu</h2>
    <div class="space-y-4">
        <a href="#" class="block bg-blue-500 text-white px-4 py-2 rounded text-center hover:bg-blue-600" onclick="submitForm('menulivreForm')">Écran de recherche d'un livre</a>

        <a href="#" class="block bg-green-500 text-white px-4 py-2 rounded text-center hover:bg-green-600" onclick="submitForm('ficheabonneForm')">Fiche d'un abonné</a>

        <!-- Ajout du bouton pour la fonction Suggestion -->
        <a href="#" class="block bg-yellow-500 text-white px-4 py-2 rounded text-center hover:bg-yellow-600" onclick="submitForm('suggestionForm')">Suggestion</a>

        <!-- Nouveau bouton pour consulter la fiche de l'abonné -->
        <a href="#" class="block bg-purple-500 text-white px-4 py-2 rounded text-center hover:bg-purple-600" onclick="submitForm('consulterFicheForm')">Consulter la fiche de l'abonné</a>

        <form id="menulivreForm" action="../Controller/controller.php" method="POST" style="display: none;">
            <input type="hidden" name="action" value="lol">
        </form>

        <form id="ficheabonneForm" action="../Controller/controller.php" method="POST" style="display: none;">
            <input type="hidden" name="action" value="ficheabonne">
        </form>

        <!-- Forme pour la fonction Suggestion -->
        <form id="suggestionForm" action="../Controller/controller.php" method="POST" style="display: none;">
            <input type="hidden" name="action" value="suggestion">
        </form>

        <!-- Nouveau formulaire pour consulter la fiche de l'abonné -->
        <form id="consulterFicheForm" action="../Controller/controller.php" method="POST" style="display: none;">
            <input type="hidden" name="action" value="consulterFicheAbonne">
        </form>
    </div>
</div>

<script>
    function submitForm(formId) {
        document.getElementById(formId).submit();
    }
</script>
</body>

</html>



