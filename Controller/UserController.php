<?php
    session_start();
    require_once "../../config/connexion.php";
    require_once "../../Model/ClassUser.php";
    class UserC{
        function inscrire(user $usr) {
            try {
                if (!empty($usr->get_nom()) && !empty($usr->get_prenom()) && !empty($usr->get_email()) && !empty($usr->get_type()) && !empty($usr->get_motDePasse())) {
                    $pdo = openDB();
                    $query = $pdo->prepare("INSERT INTO utilisateur(nom, prenom, email, type, motDePasse) VALUES (?, ?, ?, ?, ?)");
                    $query->bindValue(1, $usr->get_nom(), PDO::PARAM_STR);
                    $query->bindValue(2, $usr->get_prenom(), PDO::PARAM_STR);
                    $query->bindValue(3, $usr->get_email(), PDO::PARAM_STR);
                    $query->bindValue(4, $usr->get_type(), PDO::PARAM_STR);
                    $query->bindValue(5, $usr->get_motDePasse(), PDO::PARAM_STR);
                    
                    if ($query->execute()) {
                        $_SESSION['email'] = $usr->get_email();
                        $id = $this->getIdByEmail($usr->get_email());
                        if ($id) {
                            $_SESSION['id'] = $id;
                        }
                        echo "<script>alert('Utilisateur ajouté avec succès');</script>";
                        header("Location: accueil.php");
                        exit();
                    } else {
                        echo "<script>alert('Erreur lors de l'ajout de l'utilisateur');</script>";
                    }
                } else {
                    echo '<script>alert("Données incomplètes!");</script>';
                }
            } catch(PDOException $e) {
                echo "Erreur: ". $e->getMessage();
            }
        }     
        function connx(user $usr){
            try{
                if (!empty($usr->get_email()) && !empty($usr->get_motDePasse())) {
                    $pdo = openDB();
                    $query = $pdo->prepare("SELECT id, prenom FROM utilisateur WHERE email = ? AND motDePasse = ?");
                    $query->bindValue(1, $usr->get_email(), PDO::PARAM_STR);
                    $query->bindValue(2, $usr->get_motDePasse(), PDO::PARAM_STR);
                    $query->execute();
                    
                    if ($rows = $query->fetch()) {
                        session_start();
                        $_SESSION['id'] = $rows['id'];
                        $_SESSION['prenom'] = $rows['prenom'];
                        $_SESSION['email'] = $usr->get_email(); // Store email in session
                        echo '<script>alert("Vous êtes connecté(e) ^_^ ");</script>';
                        header("Location: accueil.php"); 
                    } else {
                        echo '<script>alert("Email ou mot de passe erroné!!");</script>';
                    }
                }
            } catch(PDOException $e){
                echo "error: ". $e->getMessage();
            }
        }
        function getIdByEmail($email) {
            try {
                $pdo = openDB();
                $query = $pdo->prepare("SELECT id FROM utilisateur WHERE email = ?");
                $query->bindValue(1, $email, PDO::PARAM_STR);
                $query->execute();
                $row = $query->fetch(PDO::FETCH_ASSOC);
                if ($row) {
                    return $row['id'];
                } else {
                    return null;
                }
            } catch(PDOException $e) {
                echo "Erreur: ". $e->getMessage();
                return null;
            }
        }
        function ModifyUser($id){
            $pdo=openDB();
            $usr = new user($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['type'],$_POST['motDePasse']);
            if(!empty($usr->get_nom()) && !empty($usr->get_prenom()) && !empty($usr->get_email()) && !empty($usr->get_motDePasse())){
                $query=$pdo->prepare("UPDATE utilisateur set nom=?,prenom=?,email=?,motDePasse=? where id=?");
                $query->bindValue(1, $usr->get_nom(), PDO::PARAM_STR);
                $query->bindValue(2, $usr->get_prenom(), PDO::PARAM_STR);
                $query->bindValue(3, $usr->get_email(), PDO::PARAM_STR);
                $query->bindValue(4, $usr->get_motDePasse(), PDO::PARAM_STR);
                $query->bindValue(5, $id, PDO::PARAM_STR);
                if($query->execute()){
                    echo '<script>alert("User modified successfully ^_^ ");</script>';
                    header("Location:accueil.php");
                }
                else{
                    echo '<script>alert("Erreur de modification");</script>';
                }
            }
            else{
                echo '<script>alert("Données incomplettes");</script>';
            }
        }
        function DeleteUser(){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $pdo=openDB();
                $query=$pdo->prepare("DELETE from utilisateur where id=?");
                $query->bindValue(1, $id, PDO::PARAM_INT);
                if($query->execute()){
                    echo '<script>alert("User deleted successfully ^_^ ");</script>';
                }
                header("Location: accueil.php");
            }
            else{
                echo '<p>Error 404!!</p>';
            }
        }
    }
?>