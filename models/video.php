<?php
    class VIDEO extends DATABASE{
        protected $_title;
        protected $_link;
        protected $_image;

        public function __construct(){
            $this->connect();   
        }

        public function setImage($i){
            $this->_image = $i;
        }
        public function getImage(){
            return $this->_image;
        }

        public function setTitle($p){
            $this->_title = $p;
        }
        public function getTitle(){
            return $this->_title;
        }
        
        public function setLink($p){
            $this->_link = $p;
        }
        public function getLink(){
            return $this->_link;
        }
        /*--------------------------FUNCITONS--------------------------*/

        public function listOne($id){
            $sql = "SELECT * FROM videos WHERE id=$id";
            $this->query($sql);
            $data = '';
            if($this->num_rows() != 0){
                $data = $this->fetch();
            }
            return $data;
        }

        public function listAll($limit = ''){
            $sql = "SELECT * FROM videos ORDER BY id DESC";
            if (!empty($limit)) {
                $sql .= ' LIMIT ' . $limit; 
            }
            $this->query($sql);
            $new = '';
            if($this->num_rows() != 0){
                while ($data = $this->fetch()) {
                    $new[] = $data; 
                }
            }
            return $new;
        }

        public function insert(){
            $sql = "INSERT INTO videos(title, image, link) values('".$this->getTitle()."', '".$this->getImage()."', '".$this->getLink()."')";
            $this->query($sql);
        }

        public function update($id){
            $sql = "UPDATE videos SET ";
            $image = $this->getImage();
            if (!empty($image)) {
                $sql .= "image='".$this->getImage()."', ";
            }
            $sql .= "title='".$this->getTitle()."', link='".$this->getLink()."' WHERE id='".$id."'";
            
            $this->query($sql);
        }

        public function delete($id){
            $sql = "DELETE FROM videos WHERE id=$id";
            $this->query($sql);
        }

    }
?>