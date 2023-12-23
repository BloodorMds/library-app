<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Exercice</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-semibold mb-6">Menu</h2>
    <div class="space-y-4">
        <!-- Écran de recherche d'un livre -->
        <a href="#" class="block bg-blue-500 text-white px-4 py-2 rounded text-center hover:bg-blue-600"
           onclick="submitForm('menulivreForm')">Écran de recherche d'un livre</a>

        <!-- Fiche d'un abonné -->
        <a href="#" class="block bg-green-500 text-white px-4 py-2 rounded text-center hover:bg-green-600"
           onclick="submitForm('ficheabonneForm')">Fiche d'un abonné</a>

        <!-- Modifier un abonné -->
        <a href="#" class="block bg-purple-500 text-white px-4 py-2 rounded text-center hover:bg-purple-600"
           onclick="submitForm('consulterFicheForm')">Modifier un abonné</a>

        <!-- Consulter les emprunts de l'abonné et ses suggestions -->
        <a href="#" class="block bg-purple-500 text-white px-4 py-2 rounded text-center hover:bg-purple-600"
           onclick="submitForm('consult')">Consulter les emprunts de l'abonné et ses suggestions</a>

        <!-- Form for searching a book -->
        <form id="menulivreForm" action="../Controller/controller.php" method="POST" style="display: none;">
            <input type="hidden" name="action" value="lol">
        </form>

        <!-- Form for displaying subscriber details -->
        <form id="ficheabonneForm" action="../Controller/controller.php" method="POST" style="display: none;">
            <input type="hidden" name="action" value="ficheabonne">
        </form>

        <!-- Form for modifying a subscriber -->
        <form id="consulterFicheForm" action="../Controller/controller.php" method="POST" style="display: none;">
            <input type="hidden" name="action" value="modifgestion">
        </form>

        <!-- Form for consulting the subscriber's loans and suggestions -->
        <form id="consult" action="../Controller/controller.php" method="POST" style="display: none;">
            <input type="hidden" name="action" value="vueform">
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

