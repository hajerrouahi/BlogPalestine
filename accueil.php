<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PALESTINEPULSE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/styleForum.css">
    <script src="js/forum.js"></script>
    <link href="img/flag.jpg" rel="icon">
    <?php
        require_once "../../Controller/PostsC.php";
        session_start();
        if(!isset($_SESSION['prenom'])) {
            header("location: index.php");
            exit;
        }
        else {
            echo '<script>';
            echo 'document.addEventListener("DOMContentLoaded", function() {';
            echo '    var prenom = "' . htmlspecialchars($_SESSION['prenom']) . '";';
            echo '    var users = document.getElementsByClassName("username");';
            echo '    for (var i = 0; i < users.length; i++) {';
            echo '        users[i].textContent = prenom;';
            echo '    }';
            echo '});';
            echo '</script>';
            if(isset($_POST['postContent'])){
                if (isset($_FILES['postMedia']) && $_FILES['postMedia']['error'] === UPLOAD_ERR_OK) {
                    $postMedia = file_get_contents($_FILES['postMedia']['tmp_name']);
                }
                else{
                    $postMedia = '';
                }
                $poste = new Post($_SESSION['prenom'], $_POST['postContent'], 0, $postMedia);
                $posteC = new PostsC();
                $posteC->createPost($poste);                
            }
        }
    ?>
    <style>
        .media_img{
            max-width: 900px;
            max-height: 900px;
        }
        .author-name {
            font-weight: bold;
            color: #333;
        }

        .post-content {
            margin-top: 10px;
        }

        .post-actions {
            margin-top: 10px;
        }

        /* Style for file name display */
        .file-name {
            margin-top: 5px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1><img src="img/flag.jpg" alt="" width="40px" height="30px"> PALESTINEPULSE</h1>
        <div class="dropdown" style="float:left;">
            <div class="dropbtn">
                <a><i class="fas fa-user user-icon"></i></a>
                <label class="username"></label>
            </div>
            <div class="dropdown-content" style="left:0;">
                <a href="#" onclick="toggleVerticalNavbar()">Gérer votre compte</a>
                <a href="logout.php">Déconnecté</a>
            </div>
        </div>
    </div>

    <!-- Vertical navbar -->
    <div class="vertical-navbar" id="verticalNavbar">
        <span class="close-icon" onclick="toggleVerticalNavbar()"><i class="fas fa-times"></i></span>
        <center>        
            <img src="img/usr.png" width="100" height="100" alt="" style="margin-top: 50px;"> <br>
            <div><h3>user name</h3></div>
            <br> <br>
            <form id="frm"> 
                <label ><input type="email" placeholder="Email .." > </label> <br><br> <br>
                <label ><input type="password" placeholder="Mot de passe .."> </label> <br><br> <br>
                <button  type="submit" >Modifier !</button>
            </form>
        </center> 
    </div>

    <div class="container">
        <header>
            <h1>Accueil</h1>
        </header>
        <hr>
        <br>
        <div class="post-form">
            <form method="post" enctype="multipart/form-data">
                <textarea id="postContent" name="postContent" placeholder="Partagez vos idées? À quoi vous pensez?" onkeypress="postOnEnter(event, this)"></textarea>
                <label for="postMedia" class="file-upload">
                    <i class="fas fa-camera"></i>
                </label>
                <input type="file" id="postMedia" name="postMedia" onchange="updateFileName(this)">
                <span class="file-name" id="fileName"></span>
                <button type="submit">Post</button>
            </form>
        </div>
        <br><br>
        <div id="espace"></div>
        <?php
            $postsC = new PostsC();
            $allPosts = array_reverse($postsC->getAllPosts()); // Reverse the array to display posts in reverse order
            foreach ($allPosts as $post){
        ?>
        <div class="post">
            <p class="author-name">Auteur: <?php echo htmlspecialchars($post['Author']); ?></p>
            <div class="post-content">
                <p><?php echo htmlspecialchars($post['Content']); ?></p>
                <?php if (!empty($post['MediaData'])) : ?>
                    <img class="media_img" src="data:image/png;base64,<?php echo base64_encode($post['MediaData']); ?>" alt="Post Media">
                <?php endif; ?>
            </div>
            <div class="post-actions">
                <button class="like-button" onclick="toggleLike(this)"><i class="far fa-heart"></i> Like</button>
                <button class="comment-button">Comment</button>
            </div>
        </div>
        <?php
            }
        ?>

        <footer>
            <p>  &copy; 2024 PALESTINEPULSE.</p><div id="myid"></div>   
            <!--Multilingue-->
            <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
            <script>
                function loadGoogleTranslate() {
                    new google.translate.TranslateElement("myid");
                }
            </script>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

        <script>
            function toggleVerticalNavbar() {
                var navbar = document.getElementById("verticalNavbar");
                navbar.style.display = (navbar.style.display === "none") ? "block" : "none";
            }

            function toggleLike(button) {
                if (button.classList.contains('liked')) {
                    button.innerHTML = '<i class="far fa-heart"></i> Like';
                    button.classList.remove('liked');
                } else {
                    button.innerHTML = '<i class="fas fa-heart"></i> Liked';
                    button.classList.add('liked');
                }
            }

            function updateFileName(input) {
                var fileName = input.files[0].name;
                document.getElementById("fileName").innerText = fileName;
            }
        </script>
    </div>
</body>
</html>