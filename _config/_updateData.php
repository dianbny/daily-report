<?php
    require_once "_dataBase.php";
    
    class _updateData extends _dataBase {

        //Update Data Club/Team
        public function updateDataClub($id, $club_team, $tgl_berdiri, $no_akta, $owner, $manager, $pelatih, $homabase, $user, $updated_at){
            mysqli_query($this->koneksi,"UPDATE _tb_club_team SET _nama_club = '$club_team', _tgl_berdiri = '$tgl_berdiri', _no_akta_pendirian = '$no_akta', _owner = '$owner', _manager = '$manager', _id_pelatih = '$pelatih', _homebase = '$homabase', _id_user = '$user', _updated_at = '$updated_at' WHERE _id = '$id'");
        }

        //Update Logo Club/Team
        public function updateGambar($col, $tbl, $dtTbl, $id, $user, $updated_at){
            mysqli_query($this->koneksi,"UPDATE $col SET $tbl = '$dtTbl', _id_user = '$user', _updated_at = '$updated_at' WHERE _id = '$id'");
        }
    
        //Update Data Pemain
        public function updateDataPemain($id, $nama, $tempat_lahir, $tgl_lahir, $no_hp, $no_punggung, $posisi, $user, $updated_at){
            mysqli_query($this->koneksi,"UPDATE _tb_pemain SET _nama = '$nama', _tempat_lahir = '$tempat_lahir', _tgl_lahir = '$tgl_lahir', _no_hp_wa = '$no_hp', _no_punggung = '$no_punggung', _posisi = '$posisi', _id_user = '$user', _updated_at = '$updated_at' WHERE _id = '$id'");
        }
        
    
        //Update Data Sekolah Sepak Bola
        public function updateDataSSB($id, $club_team, $tgl_berdiri, $no_akta, $owner, $manager, $pelatih, $homabase, $user, $updated_at){
            mysqli_query($this->koneksi,"UPDATE _tb_sekolah_sepak_bola SET _nama_ssb = '$club_team', _tgl_berdiri = '$tgl_berdiri', _no_akta_pendirian = '$no_akta', _owner = '$owner', _manager = '$manager', _pelatih = '$pelatih', _homebase = '$homabase', _id_user = '$user', _updated_at = '$updated_at' WHERE _id = '$id'");
        }

        //Update Data Siswa SSB
        public function updateDataSiswa($id, $nama, $tempat_lahir, $tgl_lahir, $no_hp, $user, $updated_at){
            mysqli_query($this->koneksi,"UPDATE _tb_siswa SET _nama = '$nama', _tempat_lahir = '$tempat_lahir', _tgl_lahir = '$tgl_lahir', _no_hp_wa = '$no_hp', _id_user = '$user', _updated_at = '$updated_at' WHERE _id = '$id'");
        }

        //Update Data Pelatih
        public function updateDataPelatih($id, $nama, $tempat_lahir, $tgl_lahir, $no_hp, $email, $user, $updated_at){
            mysqli_query($this->koneksi,"UPDATE _tb_pelatih SET _nama = '$nama', _tempat_lahir = '$tempat_lahir', _tgl_lahir = '$tgl_lahir', _no_hp_wa = '$no_hp', _email = '$email', _id_user = '$user', _updated_at = '$updated_at' WHERE _id = '$id'");
        }

        //Update Data Wasit
        public function updateDataWasit($id, $nama, $tempat_lahir, $tgl_lahir, $no_hp, $email, $user, $updated_at){
            mysqli_query($this->koneksi,"UPDATE _tb_wasit SET _nama = '$nama', _tempat_lahir = '$tempat_lahir', _tgl_lahir = '$tgl_lahir', _no_hp_wa = '$no_hp', _email = '$email', _id_user = '$user', _updated_at = '$updated_at' WHERE _id = '$id'");
        }

        //Update Data Event
        public function updateDataEvent($id, $nama, $deskripsi, $tgl_pendaftaran, $tgl_akhir_pendaftaran, $tgl_pelaksanaan, $tgl_selesai, $peserta, $tempat, $status, $user, $updated_at){
            mysqli_query($this->koneksi,"UPDATE _tb_event SET _nama_event = '$nama', _deskripsi_event = '$deskripsi', _tgl_pendaftaran = '$tgl_pendaftaran', _tgl_berakhir_pendaftaran = '$tgl_akhir_pendaftaran', _tgl_pelaksanaan = '$tgl_pelaksanaan', _tgl_berakhir = '$tgl_selesai', _tgl_berakhir = '$tgl_selesai', _peserta = '$peserta', _tempat_pelaksanaan = '$tempat', _status = '$status', _id_user = '$user', _updated_at = '$updated_at' WHERE _id = '$id'"); 

        }

        //Update Status Pendaftar
        public function updateStatusPendaftar($col, $id, $status, $user, $updated_at){
            mysqli_query($this->koneksi,"UPDATE $col SET _status = '$status', _id_user = '$user', _updated_at = '$updated_at' WHERE _id = '$id'");
        }
    
    
    }