<?php
    class LINKFOOTER extends DATABASE{
        protected $_name;
        protected $_vitri;
        protected $_url;
        
        public function __construct(){
            $this->connect();   
        }

        public function setUrl($i){
            $this->_url = $i;
        }
        public function getUrl(){
            return $this->_url;
        }

        public function setName($p){
            $this->_name = $p;
        }
        public function getName(){
            return $this->_name;
        }

        public function setVitri($p){
            $this->_vitri = $p;
        }
        public function getVitri(){
            return $this->_vitri;
        }

        /*--------------------------FUNCITONS--------------------------*/

        public function listOne($id){
            $sql = "SELECT * FROM linkfooter WHERE id=$id";
            $this->query($sql);
            $data = '';
            if($this->num_rows() != 0){
                $data = $this->fetch();
            }
            return $data;
        }

        public function listAll(){
            $sql = "SELECT * FROM linkfooter ORDER BY id DESC";
            $this->query($sql);
            $linkfooter = '';
            if($this->num_rows() != 0){
                while ($data = $this->fetch()) {
                    $linkfooter[] = $data; 
                }
            }
            return $linkfooter;
        }

        public function insert(){
            $sql = "INSERT INTO linkfooter(name, url, vitri) values('".$this->getName()."', '".$this->getUrl()."', '".$this->getVitri()."')";
            $this->query($sql);
        }

        public function update($id){
            $sql = "UPDATE linkfooter SET url='".$this->geturl()."', name='".$this->getName()."', vitri='".$this->getVitri()."' WHERE id='".$id."'";            
            $this->query($sql);
        }

        public function delete($id){
            $sql = "DELETE FROM linkfooter WHERE id=$id";
            $this->query($sql);
        }

    }
?>