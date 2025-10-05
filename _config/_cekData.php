<?php
    require_once "_dataBase.php";
    
    class _cekData extends _dataBase {

        //Cek Data Login
        public function cekLogin($username, $password, $level){
            $cekUser = mysqli_query($this->koneksi, "SELECT * FROM _tb_user_app_dr WHERE _username = '$username' AND _password = '$password' AND _level = '$level' AND _status = 'TRUE' ");
			$cek = mysqli_num_rows($cekUser);
			if($cek > 0){
				return true;
			}

			return false;
        }

        //Cek Data 0 Clause
        public function cekDataAll($tabel){
            $cekData = mysqli_query($this->koneksi,"SELECT * FROM $tabel ");
            $cekJumlah = mysqli_num_rows($cekData);
            
            return $cekJumlah;
        }

        //Cek Data 1 Clause
        public function cekDataFr($tabel, $colfr, $datafr){
            $cekData = mysqli_query($this->koneksi,"SELECT * FROM $tabel WHERE $colfr = '$datafr' ");
			$cekJumlah = mysqli_num_rows($cekData);
			
			return $cekJumlah;
        }

        //Cek Data 1 Clause
        public function cekDataLikeFr($tabel, $colfr, $datafr){
            $cekData = mysqli_query($this->koneksi,"SELECT * FROM $tabel WHERE $colfr LIKE '%$datafr%' ");
			$cekJumlah = mysqli_num_rows($cekData);
			
			return $cekJumlah;
        }

        //Cek Data 2 Clause
        public function cekDataLikeSc($tabel, $colfr, $datafr, $colsc, $datasc){
            $cekData = mysqli_query($this->koneksi,"SELECT * FROM $tabel WHERE $colfr LIKE '%$datafr%' AND $colsc = '$datasc' ");
			$cekJumlah = mysqli_num_rows($cekData);
			
			return $cekJumlah;
        }

        public function cekDataScMY($tabel, $colfr, $datafr, $colsc, $datasc){
            $cekData = mysqli_query($this->koneksi,"SELECT * FROM $tabel WHERE MONTH($colfr) = '$datafr' AND YEAR($colsc) = '$datasc' ");
			$cekJumlah = mysqli_num_rows($cekData);
			
			return $cekJumlah;
        }



        


    }