<?php
    require_once "_dataBase.php";
    
    class _deleteData extends _dataBase {

        public function softDeleteData($table, $col, $dtcol, $deleteAt){
            mysqli_query($this->koneksi, "UPDATE $table SET _deleted_at = '$deleteAt' WHERE $col = '$dtcol' ");
        }

    }