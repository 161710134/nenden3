<?php

class identitas{
	public $nama;
	public $tempatlahir;
	public $kelas;
	public $status;
//konstruktor
	public function __construct($n,$t,$k,$s){
		$this->nama=$n;
		$this->tempatlahir=$t;
		$this->kelas=$k;
		$this->status=$s;
	}

	public function get_nama(){
	return $this->nama;
	}
	public function get_tempatlahir(){
	return $this->tempatlahir;
}

	public function get_kelas(){
	return $this->kelas;
}

	public function get_status(){
	return $this->status;
}


}
?>