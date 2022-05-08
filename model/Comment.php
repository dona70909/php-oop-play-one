<?php 

    class Comment {
        
        public $username;
        public $vote;
        public $comment;

        public function __construct($username,$vote,$comment)
        {
            $this->username = $username;
            $this->vote = $vote;
            $this->comment = $comment;
        }
    }
?>