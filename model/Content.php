
<?php  

    class Content {

        public $title;
        public $year;
        public $director;
        public $type_content;
        public $cover = null;

        public function __construct($title,$year,$director,$type_content,$cover)
        {
            $this->title = $title;
            $this->year = $year;
            $this->director = $director;
            $this->type_content = $type_content;
            $this->cover = $cover;
        }
    }
?>