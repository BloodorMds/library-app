<?php
require_once '../Model/requete.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        if ($action === 'conn') {
            // Handling connection
            if (isset($_POST['login']) && isset($_POST['password'])) {

                $login = $_POST['login'];
                $password = $_POST['password'];

                Serviceconnexion($login, $password);

            }
        } elseif ($action === 'lol') {
            require_once '../Views/form_livre.php';
        } elseif ($action === 'findlivre') {
            // Fetch values from form
            $titre = isset($_POST['titre']) ? $_POST['titre'] : '';
            $auteur = isset($_POST['auteur']) ? $_POST['auteur'] : '';
            $editeur = isset($_POST['editeur']) ? $_POST['editeur'] : '';

            // Call the findbook function with fetched values
            find($titre, $auteur, $editeur);
        } elseif ($action === 'ficheabonne') {
            formSubsciber();
        } elseif($action==='findlesub') {
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $surname = isset($_POST['surname']) ? $_POST['surname'] : '';
            $country = isset($_POST['country']) ? $_POST['country'] : '';
            $sub = isset($_POST['sub']) ? $_POST['sub'] : '';

            detailSub($name,$surname,$country,$sub);

        } elseif ($action==='suggestion'){
            if (isset($_SESSION['abonne'])) {
                $abonne = $_SESSION['abonne'];
                sugestionsub($abonne);
            } else {
                echo 'Session abonné non trouvée';
            }
        }
        elseif ($action==='consulterFicheAbonne'){
            require_once '../Views/updateScreen.php';

        }
        elseif ($action==='vueform'){

            require_once '../Views/Epruntgestionaire.php';

        }
        elseif ($action==='fin'){
            $abonne = isset($_POST['id_abonne']) ? $_POST['id_abonne'] : '';;
            sugestiongestionaire($abonne);
        }



        elseif($action==='modifgestion'){

            require_once '../Views/updateScreenGestion.php';
        }
        elseif ($action==='modifabo'){

            $id = isset($_POST['name']) ? $_POST['name'] : '';
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $surname = isset($_POST['surname']) ? $_POST['surname'] : '';
            $country = isset($_POST['country']) ? $_POST['country'] : '';
            $numberPostal = isset($_POST['numberPostal']) ? $_POST['numberPostal'] : '';
            $adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';
            $birth = isset($_POST['birth']) ? $_POST['birth'] : '';
            $sub = isset($_POST['sub']) ? $_POST['sub'] : '';

            $date_inscription = isset($_POST['date_inscription']) ? $_POST['date_inscription'] : '';
            $date_fin = isset($_POST['date_fin']) ? $_POST['date_fin'] : '';

            $updateSuccess = updateSub($id, $name, $surname, $country, $numberPostal, $adresse, $birth, $sub, $date_inscription, $date_fin);

            if ($updateSuccess) {
                echo 'La mise à jour a été effectuée avec succès!';

                require_once '../Views/Screengestio.php';
            } else {
                echo 'La mise à jour a échoué.';
                require_once '../Views/updateScreen.php';
            }
        }
        elseif ($action === 'updateSub') {
            $abonne = $_SESSION['abonne'];
            $id = $abonne['id_abonne'];
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $surname = isset($_POST['surname']) ? $_POST['surname'] : '';
            $country = isset($_POST['country']) ? $_POST['country'] : '';
            $numberPostal = isset($_POST['numberPostal']) ? $_POST['numberPostal'] : '';
            $adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';
            $birth = isset($_POST['birth']) ? $_POST['birth'] : '';
            $sub = isset($_POST['sub']) ? $_POST['sub'] : '';

            $date_inscription = isset($_POST['date_inscription']) ? $_POST['date_inscription'] : '';
            $date_fin = isset($_POST['date_fin']) ? $_POST['date_fin'] : '';

            $updateSuccess = updateSub($id, $name, $surname, $country, $numberPostal, $adresse, $birth, $sub, $date_inscription, $date_fin);

            if ($updateSuccess) {
                echo 'La mise à jour a été effectuée avec succès!';
                require_once '../Views/menu.php';
            } else {
                echo 'La mise à jour a échoué.';
                require_once '../Views/updateScreen.php';
            }
        }
        elseif ($action==='consulterFicheAbonneGestionaire'){
            require_once '../Views/formSearchGest.php';
        }
        elseif($action=='formgestionfindsubsubmit'){
            $idAbonne=isset($_POST['idAbonne']) ? $_POST['idAbonne'] : '';

        }


    }

}

function formSubsciber()
{
    require_once '../Views/findSub.php';
}

function getresultSubscriber($name, $surname, $country, $sub)
{
    require_once '../Views/tab_abonne.php';
}

function formLivre()
{
    require_once '../Views/form_livre.php';
}

function Serviceconnexion($login, $password)
{
    $result = getInfoAbonne($login, $password);
    if ($result) {
        $_SESSION['abonne'] = $result;

        $idUtilisateur = $result['id_utilisateur'];
        $statut = $result['statut'];
        var_dump($statut);
        if ($statut === 'abonne' ) {
            require_once '../Views/menu.php';

        } elseif ($statut === 'gestionnaire') {
            require_once '../Views/Screengestio.php';
        }
    } else {
        echo 'Mauvais identifiants';
        require_once '../Views/connexion.php';
    }
}

function appelAcceuil()
{
    $catalogue = getcatalogue();
    require_once '../Views/resultat.php';
}

function appelEmprunts()
{
    require_once '../Views/emprunts.php';
}

function find($titre, $auteur, $editeur)
{
    $result = findbook($titre, $auteur, $editeur);
    require_once '../Views/resultat.php';
}

function detailSub($name,$surname,$country,$sub)
{
    $result = findSub($name,$surname,$country,$sub);
    require_once '../Views/resultSub.php';
}

function sugestiongestionaire($abonne)
{
    $result = selectPreferredBooks($abonne);
    $resultdeux=getBooksBorrowedByDate($abonne);
    require_once ('../Views/resultsugestion.php');
}
function sugestionsub($abonne)
{
    $param = $abonne['id_abonne'];
    echo $param;
    $result = selectPreferredBooks($param);
    $resultdeux=getBooksBorrowedByDate($param);
    require_once ('../Views/resultsugestion.php');
}
?>


