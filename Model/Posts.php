<?php
class Post {
    private $postId;
    private $author;
    private $content;
    private $likes;
    private $mediaData;

    public function __construct($author, $content, $likes, $mediaData) {
        $this->author = $author;
        $this->content = $content;
        $this->likes = $likes;
        $this->mediaData = $mediaData;
    }
    public function getPostId() {
        return $this->postId;
    }
    public function setPostId($postId) {
        $this->postId = $postId;
    }
    public function getAuthor() {
        return $this->author;
    }
    public function getContent() {
        return $this->content;
    }
    public function getLikes() {
        return $this->likes;
    }
    public function getMediaData() {
        return $this->mediaData;
    }
}
?>