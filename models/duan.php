<?php
	class DUAN extends DATABASE{
		protected $_title;
		protected $_description;
		protected $_image;
                protected $_logo;
		protected $_thongtin;
		protected $_vitri;
		protected $_matbang;
		protected $_vitrihienthi;
		
		public function __construct(){
			$this->connect();	
		}

		public function setImage($i){
			$this->_image = $i;
		}
		public function getImage(){
			return $this->_image;
		}

		public function setLogo($i){
			$this->_logo = $i;
		}
		public function getLogo(){
			return $this->_logo;
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

		public function setThongtin($s){
			$this->_thongtin = $s;
		}
		public function getThongtin(){
			return $this->_thongtin;
		}

		public function setVitri($s){
			$this->_vitri = $s;
		}
		public function getVitri(){
			return $this->_vitri;
		}

		public function setMatbang($s){
			$this->_matbang = $s;
		}
		public function getMatbang(){
			return $this->_matbang;
		}

		public function setVitrihienthi($s){
			$this->_vitrihienthi = $s;
		}
		public function getVitrihienthi(){
			return $this->_vitrihienthi;
		}
		/*--------------------------FUNCITONS--------------------------*/

		public function listOne($id){
			$sql = "SELECT * FROM duan WHERE id=$id";
			$this->query($sql);
			$data = '';
			if($this->num_rows() != 0){
				$data = $this->fetch();
			}
			return $data;
		}

		public function listAll($isNoithanh){
			$sql = "SELECT * FROM duan";
                        if (!empty($isNoithanh)) {
                            $sql .= " WHERE is_noithanh = {$isNoithanh}";
                        }
                        $sql .= " ORDER BY id DESC";
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
			$sql = "SELECT * FROM duan WHERE image='".$this->getImage()."' AND id != '$id'";
			$this->query($sql);
			if($this->num_rows() != 0){
				return FALSE; // iamge title đã tồn tại
			}else{
				return TRUE; // image title chua co
			}
		}

		public function insert(){
			$sql = "INSERT INTO duan(title, logo, image, description, thongtin, vitri, matbang, vitrihienthi) values('".$this->getTitle()."', '".$this->getLogo()."', '".$this->getImage()."', '".$this->getDescription()."', '".$this->getThongtin()."', '".$this->getVitri()."', '".$this->getMatbang()."', '".$this->getVitrihienthi()."')";
			$this->query($sql);
		}

		public function update($id){
                    $sql = 'UPDATE duan SET';
                    if (!empty($this->getImage())) {
                        $sql .= " image='".$this->getImage()."',";
                    }
                    if (!empty($this->getLogo())) {
                        $sql .= " logo='".$this->getLogo()."',";
                    }
                    $sql .= " description='".$this->getDescription()."', title='".$this->getTitle()."', thongtin='".$this->getThongtin()."', vitri='".$this->getVitri()."', matbang='".$this->getMatbang()."', vitrihienthi='".$this->getVitrihienthi()."' WHERE id='".$id."'";
			
                    $this->query($sql);
		}

		public function delete($id){
			$sql = "DELETE FROM duan WHERE id=$id";
			$this->query($sql);
		}

	}
?>