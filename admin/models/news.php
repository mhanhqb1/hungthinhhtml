<?php
    class NEWS extends DATABASE{
        protected $_title;
        protected $_description;
        protected $_detail;
        protected $_image;

        public function __construct(){
            $this->connect();   
        }

        public function setImageAlt($i){
            $this->_imageAlt = $i;
        }
        public function getImageAlt(){
            return $this->_imageAlt;
        }

        public function setTitleTag($i){
            $this->_titleTag = $i;
        }
        public function getTitleTag(){
            return $this->_titleTag;
        }

        public function setMetaDescription($i){
            $this->_metaDescription = $i;
        }
        public function getMetaDescription(){
            return $this->_metaDescription;
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

        public function setDescription($p){
            $this->_description = $p;
        }
        public function getDescription(){
            return $this->_description;
        }

        public function setDetail($p){
            $this->_detail = $p;
        }
        public function getDetail(){
            return $this->_detail;
        }

        public function setIsFeatured($s){
            $this->_isFeatured = $s;
        }
        public function getIsFeatured(){
            return $this->_isFeatured;
        }

        public function setIsTintuc($s){
            $this->_isTintuc = $s;
        }
        public function getIsTintuc(){
            return $this->_isTintuc;
        }
        /*--------------------------FUNCITONS--------------------------*/

        public function listOne($id){
            $sql = "SELECT * FROM news WHERE news_id=$id";
            $this->query($sql);
            $data = '';
            if($this->num_rows() != 0){
                $data = $this->fetch();
            }
            return $data;
        }

        public function listAll(){
            $sql = "SELECT * FROM news ORDER BY news_id DESC";
            $this->query($sql);
            $new = '';
            if($this->num_rows() != 0){
                while ($data = $this->fetch()) {
                    $new[] = $data; 
                }
            }
            return $new;
        }

        public function checkImageExist($id = ''){
            $sql = "SELECT * FROM news WHERE image='".$this->getImage()."' AND news_id != '$id'";
            $this->query($sql);
            if($this->num_rows() != 0){
                return FALSE; // iamge title đã tồn tại
            }else{
                return TRUE; // image title chua co
            }
        }

        public function insert(){
            $sql = "INSERT INTO news(title, image, description, detail) values('".$this->getTitle()."', '".$this->getImage()."', '".$this->getDescription()."','".$this->getDetail()."')";
            $this->query($sql);
        }

        public function update($id, $image=''){
            if($image != ''){
                $sql = "UPDATE news SET image='".$this->getImage()."', description='".$this->getDescription()."', title='".$this->getTitle()."', detail='".$this->getDetail()."' WHERE news_id='".$id."'";
            }else{
                $sql = "UPDATE news SET description='".$this->getDescription()."', title='".$this->getTitle()."', detail='".$this->getDetail()."' WHERE news_id='".$id."'";
            }
            $this->query($sql);
        }

        public function delete($id){
            $sql = "DELETE FROM news WHERE news_id=$id";
            $this->query($sql);
        }

    }
?>