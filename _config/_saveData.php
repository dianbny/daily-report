<?php
    require_once "_dataBase.php";
    
    class _saveData extends _dataBase {

        //Save Data Club/Team
        public function saveDataClub($club_team, $tgl_berdiri, $no_akta, $owner, $manager, $pelatih, $homabase, $logo_club, $file_sk, $user, $created_at, $updated_at){
            mysqli_query($this->koneksi,"INSERT INTO _tb_club_team (_nama_club, _tgl_berdiri, _no_akta_pendirian, _owner, _manager, _id_pelatih, _homebase, _logo_club, _sk_club, _id_user, _created_at, _updated_at) VALUES ('$club_team','$tgl_berdiri','$no_akta','$owner','$manager','$pelatih','$homabase','$logo_club','$file_sk','$user','$created_at', '$updated_at')");
        }
    
        //Save Data Pemain
        public function saveDataPemain($nama, $tempat_lahir, $tgl_lahir, $no_hp, $no_punggung, $club, $posisi, $foto, $user, $created_at, $updated_at){
            mysqli_query($this->koneksi,"INSERT INTO _tb_pemain (_nama, _tempat_lahir, _tgl_lahir, _no_hp_wa, _no_punggung, _id_club_team, _posisi, _foto, _id_user, _created_at, _updated_at) VALUES ('$nama','$tempat_lahir','$tgl_lahir','$no_hp','$no_punggung','$club','$posisi','$foto','$user','$created_at', '$updated_at')");
        }
    
        //Save Data Sekolah Sepak Bola
        public function saveDataSSB($ssb, $tgl_berdiri, $no_akta, $owner, $manager, $pelatih, $homabase, $logo_ssb, $file_sk, $user, $created_at, $updated_at){
            mysqli_query($this->koneksi,"INSERT INTO _tb_sekolah_sepak_bola (_nama_ssb, _tgl_berdiri, _no_akta_pendirian, _owner, _manager, _pelatih, _homebase, _logo_ssb, _sk_ssb, _id_user, _created_at, _updated_at) VALUES ('$ssb','$tgl_berdiri','$no_akta','$owner','$manager','$pelatih','$homabase','$logo_ssb','$file_sk','$user','$created_at', '$updated_at')");
        }
    
        //Save Data Siswa
        public function saveDataSiswa($nama, $tempat_lahir, $tgl_lahir, $no_hp, $ssb, $foto, $user, $created_at, $updated_at){
            mysqli_query($this->koneksi,"INSERT INTO _tb_siswa (_nama, _tempat_lahir, _tgl_lahir, _no_hp_wa, _id_sekolah_sepak_bola, _foto, _id_user, _created_at, _updated_at) VALUES ('$nama','$tempat_lahir','$tgl_lahir','$no_hp','$ssb','$foto','$user','$created_at', '$updated_at')");
        }

        //Save Data Pelatih
        public function saveDataPelatih($nama, $tempat_lahir, $tgl_lahir, $no_hp, $email, $foto, $sertifikat, $user, $created_at, $updated_at){
            mysqli_query($this->koneksi,"INSERT INTO _tb_pelatih (_nama, _tempat_lahir, _tgl_lahir, _no_hp_wa, _email, _foto, _sertifikat, _id_user, _created_at, _updated_at) VALUES ('$nama','$tempat_lahir','$tgl_lahir','$no_hp','$email','$foto','$sertifikat','$user','$created_at', '$updated_at')");
        }

        //Save Data Wasit
        public function saveDataWasit($nama, $tempat_lahir, $tgl_lahir, $no_hp, $email, $foto, $sertifikat, $user, $created_at, $updated_at){
            mysqli_query($this->koneksi,"INSERT INTO _tb_wasit (_nama, _tempat_lahir, _tgl_lahir, _no_hp_wa, _email, _foto, _sertifikat, _id_user, _created_at, _updated_at) VALUES ('$nama','$tempat_lahir','$tgl_lahir','$no_hp','$email','$foto','$sertifikat','$user','$created_at', '$updated_at')");
        }

        //Save Data Event
        public function saveDataEvent($nama, $deskripri, $tgl_buka, $tgl_tutup, $tgl_mulai, $tgl_selesai, $peserta, $tempat, $status, $banner, $user, $created_at, $updated_at){
            mysqli_query($this->koneksi,"INSERT INTO _tb_event (_nama_event, _deskripsi_event, _tgl_pendaftaran, _tgl_berakhir_pendaftaran, _tgl_pelaksanaan, _tgl_berakhir, _peserta, _tempat_pelaksanaan, _status, _banner, _id_user, _created_at, _updated_at) VALUES ('$nama','$deskripri','$tgl_buka','$tgl_tutup','$tgl_mulai','$tgl_selesai','$peserta','$tempat','$status','$banner','$user','$created_at', '$updated_at')");
        }

        //Save Data Informasi Event
        public function saveDataInformasiEvent($tabel, $id_event, $tgl_berlangsung, $informasi, $user, $created_at, $updated_at){
            mysqli_query($this->koneksi, "INSERT INTO $tabel (_id_event, _tgl_berlangsung, _informasi_event, _id_user, _created_at, _updated_at) VALUES ('$id_event','$tgl_berlangsung','$informasi','$user','$created_at','$updated_at')");
        }

        //Save Data Pengguna
        public function saveDataUser($nama, $email, $username, $password, $level, $created_at, $updated_at){
            mysqli_query($this->koneksi, "INSERT INTO _tb_user_login (_nama, _email, _username, _password, _level, _created_at, _updated_at) VALUES ('$nama','$email','$username','$password','$level','$created_at','$updated_at')");
        }
    
    }