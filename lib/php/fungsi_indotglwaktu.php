<?php
	function tgl_indo2($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan2(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			$jam = substr($tgl,11,5);
			return $tanggal.' '.$bulan.' '.$tahun.', '.$jam;		 
	}	

	function getBulan2($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
			} 
?>
