<?php
require_once "../../config/connexion.php";
require_once "../../Model/Posts.php";

class PostsC {
    public function createPost(Post $post){
        try {
            $pdo = openDB();
            $query = $pdo->prepare("INSERT INTO posts (author, content, likes, MediaData) VALUES (?, ?, ?, ?)");
            $query->bindValue(1, $post->getAuthor(), PDO::PARAM_STR);
            $query->bindValue(2, $post->getContent(), PDO::PARAM_STR);
            $query->bindValue(3, $post->getLikes(), PDO::PARAM_INT);
            $mediaData = $post->getMediaData();
            if ($mediaData !== null) {
                $query->bindValue(4, $mediaData, PDO::PARAM_LOB);
            } else {
                $query->bindValue(4, null, PDO::PARAM_NULL);
            }
            
            $query->execute();
            echo "<script>alert('Post added successfully');</script>";
            header("Location: accueil.php");
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }    
    public function getAllPosts() {
        try {
            $pdo = openDB();
            $stmt = $pdo->query("SELECT * FROM posts");
            return $stmt->fetchAll();
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function updatePost(Post $post) {
        try {
            $pdo = openDB();
            $query = $pdo->prepare("UPDATE posts SET author=?, content=?, likes=?, MediaData=? WHERE PostID=?");
            $query->execute([$post->getAuthor(), $post->getContent(), $post->getLikes(), $post->getMediaData(), $post->getPostId()]);
            echo "<script>alert('Post updated successfully');</script>";
            header("Location: FrontOffice/posts.php");
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function deletePost($postId) {
        try {
            $pdo = openDB();
            $query = $pdo->prepare("DELETE FROM posts WHERE PostID=?");
            $query->execute([$postId]);
            echo "<script>alert('Post deleted successfully');</script>";
            header("Location: FrontOffice/posts.php");
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>