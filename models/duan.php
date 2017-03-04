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
		protected $_isNoiThanh;
		
		public function __construct(){
			$this->connect();	
		}

		public function setImage($i){
			$this->_image = $i;
		}
		public function getImage(){
                    if (empty($this->_image)) {
                        return '';
                    } else {
                        return $this->_image;
                    }
		}
                
		public function setIsNoiThanh($i){
			$this->_isNoiThanh = $i;
		}
		public function getIsNoiThanh(){
                    if (empty($this->_isNoiThanh)) {
                        return '';
                    } else {
                        return $this->_isNoiThanh;
                    }
		}

		public function setLogo($i){
			$this->_logo = $i;
		}
		public function getLogo(){
                    if (empty($this->_logo)) {
                        return '';
                    } else {
                        return $this->_logo;
                    }
		}

		public function setTitle($p){
			$this->_title = $p;
		}
		public function getTitle(){
                    if (empty($this->_title)) {
                        return '';
                    } else {
                        return $this->_title;
                    }
		}

		public function setDescription($p){
                        $this->_description = $p;
		}
		public function getDescription(){
                    if (empty($this->_description)) {
                        return '';
                    } else {
                        return $this->_description;
                    }
		}

		public function setThongtin($s){
			$this->_thongtin = $s;
		}
		public function getThongtin(){
                    if (empty($this->_thongtin)) {
                        return '';
                    } else {
                        return $this->_thongtin;
                    }
		}

		public function setVitri($s){
			$this->_vitri = $s;
		}
		public function getVitri(){
                    if (empty($this->_vitri)) {
                        return '';
                    } else {
                        return $this->_vitri;
                    }
		}

		public function setMatbang($s){
			$this->_matbang = $s;
		}
		public function getMatbang(){
                    if (empty($this->_matbang)) {
                        return '';
                    } else {
                        return $this->_matbang;
                    }
		}

		public function setVitrihienthi($s){
			$this->_vitrihienthi = $s;
		}
		public function getVitrihienthi(){
                    if (empty($this->_vitrihienthi)) {
                        return '';
                    } else {
                        return $this->_vitrihienthi;
                    }
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
			$sql = "INSERT INTO duan(is_noithanh, title, logo, image, description, thongtin, vitri, matbang, vitrihienthi) values('".$this->getIsNoiThanh()."', '".$this->getTitle()."', '".$this->getLogo()."', '".$this->getImage()."', '".$this->getDescription()."', '".$this->getThongtin()."', '".$this->getVitri()."', '".$this->getMatbang()."', '".$this->getVitrihienthi()."')";
			$this->query($sql);
		}

		public function update($id){
                    $sql = 'UPDATE duan SET';
                    $image = $this->getImage();
                    if (!empty($image)) {
                        $sql .= " image='".$image."',";
                    }
                    $logo = $this->getLogo();
                    if (!empty($logo)) {
                        $sql .= " logo='".$logo."',";
                    }
                    $sql .= " is_noithanh='".$this->getIsNoiThanh()."', description='".$this->getDescription()."', title='".$this->getTitle()."', thongtin='".$this->getThongtin()."', vitri='".$this->getVitri()."', matbang='".$this->getMatbang()."', vitrihienthi='".$this->getVitrihienthi()."' WHERE id='".$id."'";
			
                    $this->query($sql);
		}

		public function delete($id){
			$sql = "DELETE FROM duan WHERE id=$id";
			$this->query($sql);
		}

	}
?>