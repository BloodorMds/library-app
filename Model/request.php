<?php
function getcatalogue(){
    $connexion = new PDO('mysql:host=localhost;dbname=abonne', 'root', 'root');
    $requete = $connexion->query('SELECT * FROM livre');
    $catalogue = array();

    while ($livre = $requete->fetch()) {
        $catalogue[] = $livre;
    }

    $connexion = null;

    return $catalogue;
}

function findbook($titre, $auteur, $editeur)
{
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=abonne', 'root', 'root');

        $query = "SELECT livre.titre, auteur.nom AS auteur_nom, editeur.nom AS editeur_nom, MAX(emprunt.date_emprunt) AS max_date_emprunt, emprunt.disponible
                  FROM livre  
                  JOIN auteur ON auteur.id = livre.auteur_id
                  JOIN editeur ON editeur.id = livre.editeur_id
                  JOIN emprunt ON emprunt.id_livre = livre.id
                  WHERE emprunt.disponible = 1";

        // Add additional conditions based on user input
        if (!empty($titre)) {
            $query .= " AND livre.titre LIKE :titre";
        }

        if (!empty($auteur)) {
            $query .= " AND auteur.nom LIKE :auteur";
        }

        if (!empty($editeur)) {
            $query .= " AND editeur.nom LIKE :editeur";
        }

        $query .= " GROUP BY livre.titre, auteur_nom, editeur_nom, emprunt.disponible
                   ORDER BY max_date_emprunt DESC";

        $requete = $connexion->prepare($query);

        // Bind parameters if they are provided
        if (!empty($titre)) {
            $requete->bindParam(':titre', $titre, PDO::PARAM_STR);
        }

        if (!empty($auteur)) {
            $requete->bindParam(':auteur', $auteur, PDO::PARAM_STR);
        }

        if (!empty($editeur)) {
            $requete->bindParam(':editeur', $editeur, PDO::PARAM_STR);
        }

        $requete->execute();

        $catalogue = $requete->fetchAll(PDO::FETCH_ASSOC);

        $connexion = null;

        return $catalogue;
    } catch (PDOException $e) {
        // Handle database errors here (log, display, etc.)
        die("Error: " . $e->getMessage());
    }
}

function findSub($name, $surname, $country, $sub)
{
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=abonne', 'root', 'root');

        // Base query
        $query = "SELECT abonne.nom, abonne.prenom, abonne.ville, abonne.date_naissance, abonne.date_fin_abo
                  FROM abonne
                  WHERE 1";

        // Check and append conditions for each provided parameter
        if ($name !== '') {
            $query .= " AND abonne.nom LIKE :name";
        }

        if ($surname !== '') {
            $query .= " AND abonne.prenom LIKE :surname";
        }

        if ($country !== '') {
            $query .= " AND abonne.ville LIKE :country";
        }

        if ($sub !== '') {
            $query .= " AND abonne.sub LIKE :sub";
        }

        $requete = $connexion->prepare($query);

        // Bind parameters if they are provided
        if ($name !== '') {
            $requete->bindParam(':name', $name, PDO::PARAM_STR);
        }

        if ($surname !== '') {
            $requete->bindParam(':surname', $surname, PDO::PARAM_STR);
        }

        if ($country !== '') {
            $requete->bindParam(':country', $country, PDO::PARAM_STR);
        }

        if ($sub !== '') {
            $requete->bindParam(':sub', $sub, PDO::PARAM_STR);
        }

        // Execute the query
        $requete->execute();

        // Fetch results
        $catalogue = $requete->fetchAll(PDO::FETCH_ASSOC);

        // Close the connection
        $connexion = null;

        return $catalogue;
    } catch (PDOException $e) {
        // Handle database errors here (log, display, etc.)
        die("Error: " . $e->getMessage());
    }
}


    function findallsub(){
        $connexion = new PDO('mysql:host=localhost;dbname=abonne', 'root', 'root');
        $requete=$connexion->query('select * from abonne');
        $result = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

function updateSub($id, $name, $surname, $country, $numberPostal, $adresse, $birth, $sub, $date_inscription, $date_fin) {
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=abonne', 'root', 'root');

        $requete = $connexion->prepare("UPDATE abonne
                                             SET 
                                            abonne.nom = :name,
                                            abonne.prenom = :surname,
                                            abonne.ville = :country,
                                            abonne.code_postal = :numberPostal,
                                            abonne.adresse = :adresse,
                                            abonne.date_naissance = :birth,
                                            abonne.sub = :sub,
                                            abonne.date_inscription = :date_inscription,
                                            abonne.date_fin_abo = :date_fin
                                        where abonne.id = :id
                                        ");

        $requete->bindParam(':name', $name, PDO::PARAM_STR);
        $requete->bindParam(':surname', $surname, PDO::PARAM_STR);
        $requete->bindParam(':country', $country, PDO::PARAM_STR);
        $requete->bindParam(':numberPostal', $numberPostal, PDO::PARAM_STR);
        $requete->bindParam(':adresse', $adresse, PDO::PARAM_STR);
        $requete->bindParam(':birth', $birth, PDO::PARAM_STR);
        $requete->bindParam(':sub', $sub, PDO::PARAM_STR);

        $requete->bindParam(':date_inscription', $date_inscription, PDO::PARAM_STR);
        $requete->bindParam(':date_fin', $date_fin, PDO::PARAM_STR);
        $requete->bindParam(':id', $id, PDO::PARAM_STR);

        $requete->execute();

        $connexion = null;

        return true; // Update succeeded
    } catch (PDOException $e) {
        // Handle database errors
        die("Error: " . $e->getMessage());
        return false;
    }



    }
function selectebookofsub($id_abo) {
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=abonne', 'root', 'root');
        $requete = $connexion->prepare('SELECT livre.titre, auteur.nom AS nom_auteur, editeur.nom AS nom_editeur
                                       FROM livre
                                       JOIN abonne ON abonne.id = livre.id_abonne
                                       JOIN auteur ON auteur.id = livre.auteur_id
                                       JOIN editeur ON editeur.id = livre.editeur_id
                                       WHERE abonne.id = :id_abo');

        $requete->bindParam(':id_abo', $id_abo, PDO::PARAM_INT);
        $requete->execute();

        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

        $connexion = null;

        return $resultat;
    } catch (PDOException $e) {
        // Handle database errors
        die("Error: " . $e->getMessage());
    }
}
function getStatusUser($login, $password) {
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=abonne', 'root', 'root');

        // Prepare SQL request
        $query = "SELECT statut FROM utilisateur WHERE login = :login AND mot_de_passe = :password";

        // Prepare request with PDO
        $stmt = $connexion->prepare($query);

        // Bind parameters
        $stmt->bindParam(':login', $login, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        // Execute the request
        $stmt->execute();

        // Fetch results
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // End connection
        $conn = null;

        // Retourn either the user status or null
        return $result ? $result['statut'] : null;
    } catch (PDOException $e) {
        // Handle database errors
        die("Error: " . $e->getMessage());
    }
}

function getInfoAbonne($idUtilisateur,$mot_de_passe) {
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=abonne', 'root', 'root');

        // Prepare SQL request to get sub info
        $query = "SELECT id_utilisateur, mot_de_passe,statut,email ,id_abonne FROM utilisateur WHERE id_utilisateur = :id_utilisateur AND mot_de_passe = :mot_de_passe";

        // Prepare SQL request with PDO
        $stmt = $connexion->prepare($query);

        // Bind parameters
        $stmt->bindParam(':id_utilisateur', $idUtilisateur, PDO::PARAM_INT);
        $stmt->bindParam(':mot_de_passe', $mot_de_passe, PDO::PARAM_STR);

        // Execute the request
        $stmt->execute();

        // Fetch results as a associative tab
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // End connection
        $conn = null;

        return $result;

    } catch (PDOException $e) {
        // Handle database errors
        die("Error: " . $e->getMessage());
    }
}
function selectPreferredBooks($id_abonne) {
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=abonne', 'root', 'root');
        $requete = $connexion->prepare("
           SELECT titre 
FROM livre
         JOIN emprunt  ON emprunt.id_livre = livre.id
WHERE livre.categorie =
      (
          SELECT livre.categorie
          FROM emprunt
                   JOIN livre  ON emprunt.id_livre = livre.id
          WHERE emprunt.id_abonne = :id
            AND livre.categorie <> ''
          GROUP BY livre.categorie
          ORDER BY COUNT(*) DESC
          LIMIT 1
      )
  AND emprunt.date_emprunt >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR)
  AND emprunt.disponible = 1
GROUP BY livre.titre
ORDER BY COUNT(*) DESC
LIMIT 5
        ");

        // Correct param name
        $requete->bindParam(':id', $id_abonne, PDO::PARAM_INT);
        $requete->execute();

        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

        $connexion = null;

        return $resultat;
    } catch (PDOException $e) {
        // Handle database errors
        die("Error: " . $e->getMessage());
    }
}
function getBooksBorrowedByDate($id_abonne) {
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=abonne', 'root', 'root');
        $requete = $connexion->prepare("
            SELECT livre.titre, emprunt.date_emprunt
            FROM livre
            JOIN emprunt ON emprunt.id_livre = livre.id
            WHERE emprunt.id_abonne = :id
            ORDER BY emprunt.date_emprunt DESC
        ");

        $requete->bindParam(':id', $id_abonne, PDO::PARAM_INT);
        $requete->execute();

        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

        $connexion = null;

        return $resultat;
    } catch (PDOException $e) {
        // Handle database errors
        die("Error: " . $e->getMessage());
    }
}

