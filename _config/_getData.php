<?php
    require_once "_dataBase.php";
    
    class _getData extends _dataBase {

		//Get Data 1 Clause
		function getDataFr($tabel, $colfr, $datafr){
			$data = mysqli_query($this->koneksi,"SELECT * FROM $tabel WHERE $colfr = '$datafr' AND _deleted_at IS NULL");
			$getData = mysqli_fetch_assoc($data);
			
			return $getData;
		}

		//Get Data by Limit Desc
		function getDataByLimit($tabel){
			$data = mysqli_query($this->koneksi,"SELECT * FROM $tabel WHERE _deleted_at IS NULL ORDER BY _id DESC LIMIT 1");
			$getData = mysqli_fetch_assoc($data);
			
			return $getData;
		}

		//Get Data by Limit Desc
		function getDataByLimitFr($tabel, $colFr, $dtFr){
			$data = mysqli_query($this->koneksi,"SELECT * FROM $tabel WHERE $colFr = '$dtFr' AND _deleted_at IS NULL ORDER BY _id DESC LIMIT 1");
			$getData = mysqli_fetch_assoc($data);
			
			return $getData;
		}

        //Get Data All 0 Clause
        function getDataAll($table, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE _deleted_at IS NULL ORDER BY $col ASC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data All 3 Clause Between
        function getDataAllFrBW($table, $colFr, $dtFr, $dtSc, $dtTh, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE $colFr = '$dtFr' AND DATE(_updated_at) BETWEEN '$dtSc' AND '$dtTh' AND _deleted_at IS NULL ORDER BY $col ASC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data All 3 Clause Between
        function getDataAllScBW($table, $colFr, $dtFr, $colSc, $dtSc, $dtTh, $dtFo, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE $colFr = '$dtFr' AND $colSc = '$dtSc' AND DATE(_updated_at) BETWEEN '$dtTh' AND '$dtFo' AND _deleted_at IS NULL ORDER BY $col ASC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data Between
        function getDataAllBW($table, $colFr, $dtFr, $dtSc, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE DATE($colFr) BETWEEN '$dtFr' AND '$dtSc' ORDER BY $col DESC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data All 0 Clause Desc
        function getDataAllDesc($table, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE _deleted_at IS NULL ORDER BY $col DESC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data All 0 Clause Desc Limit
        function getDataAllNDDesc($table, $col, $limit){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table ORDER BY $col DESC LIMIT $limit");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data All 0 Clause Desc Limit
        function getDataAllByLimitDesc($table, $col, $limit){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE _deleted_at IS NULL ORDER BY $col DESC LIMIT $limit");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}


		//Get Data All 2 Clause Month Year Desc
        function getDataAllDescMY($table, $colFr, $dtFr, $colSc, $dtSc, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE MONTH($colFr) = '$dtFr' AND YEAR($colSc) = '$dtSc' AND _deleted_at IS NULL ORDER BY $col DESC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data All 2 Clause Month Year Desc
        function getDataAllDescMYUsr($table, $colFr, $dtFr, $dtSc, $dtTh, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE $colFr = '$dtFr' AND MONTH(_updated_at) = '$dtSc' AND YEAR(_updated_at) = '$dtTh' AND _deleted_at IS NULL ORDER BY $col DESC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data All 2 Clause Month Year Desc No Deleted
        function getDataAllDescMYND($table, $colMY, $dtFr, $dtSc, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE MONTH($colMY) = '$dtFr' AND YEAR($colMY) = '$dtSc' ORDER BY $col DESC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data All 1 Clause Not Equals
        function getDataAllNE($table, $colfr, $datafr, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE $colfr != '$datafr' AND _deleted_at IS NULL ORDER BY $col ASC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data All 1 Clause Not Equals
        function getDataAllDescNE($table, $colfr, $datafr, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE $colfr != '$datafr' AND _deleted_at IS NULL ORDER BY $col DESC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data All 1 Clause
        function getDataAllFr($table, $colfr, $datafr, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE $colfr = '$datafr' AND _deleted_at IS NULL ORDER BY $col ASC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data All 1 Clause
        function getDataAllLikeFr($table, $colfr, $datafr, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE $colfr LIKE '%$datafr%' AND _deleted_at IS NULL ORDER BY $col ASC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Data All 2 Clause
        function getDataAllLikeSc($table, $colfr, $datafr, $colsc, $datasc, $col){
			$dataAll = mysqli_query($this->koneksi,"SELECT * FROM $table WHERE $colfr LIKE '%$datafr%' AND $colsc = '$datasc' AND _deleted_at IS NULL ORDER BY $col ASC");
			while($listDataAll = mysqli_fetch_assoc($dataAll)){
				$result[] = $listDataAll;
			}

			return $result;
		}

		//Get Sum Table
		function getSumData($table){
			$sumData = mysqli_query($this->koneksi,"SELECT SUM(_stok) AS stok FROM $table WHERE _deleted_at IS NULL");
			$getData = mysqli_fetch_assoc($sumData);
			
			return $getData;
		}

		//Get Sum Table 1 Clauses
		function getSumDataFr($table, $colFr, $dtFr){
			$sumData = mysqli_query($this->koneksi,"SELECT SUM(_jumlah) AS jumlah FROM $table WHERE $colFr = '$dtFr' AND  _deleted_at IS NULL");
			$getData = mysqli_fetch_assoc($sumData);
			
			return $getData;
		}

		//Get Sum Table 2 Clauses By Year
		function getSumDataByYears($table, $colFr, $dtFr, $year){
			$sumData = mysqli_query($this->koneksi,"SELECT SUM(_jumlah) AS jumlah FROM $table WHERE $colFr = '$dtFr' AND YEAR(_created_at) = '$year' AND  _deleted_at IS NULL");
			$getData = mysqli_fetch_assoc($sumData);
			
			return $getData;
		}

		//Get Sum Table 2 Clauses By Year
		function getSumDataByMY($table, $colFr, $dtFr, $month, $year){
			$sumData = mysqli_query($this->koneksi,"SELECT SUM(_jumlah) AS jumlah FROM $table WHERE $colFr = '$dtFr' AND MONTH(_created_at) = '$month' AND YEAR(_created_at) = '$year' AND  _deleted_at IS NULL");
			$getData = mysqli_fetch_assoc($sumData);
			
			return $getData;
		}


    }