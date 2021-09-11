<?php
        if (isset($_POST['proses'])) {
            $uangpembayaran = $_POST['uangpembayaran'];
            $totalpembayaran = $_POST['totalpembayaran'];

        }
        echo "Keterangan : " ;
        function rupiah($angka){
	
            $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
            return $hasil_rupiah;
        }
  
  if ($uangpembayaran <= $totalpembayaran){
    echo "Nama anda kami blacklist dari rental kami,";
    $uangkurang=$uangpembayaran - $totalpembayaran;
    echo " uang anda kurang";
    echo rupiah($uangkurang);

}else if($uangpembayaran >= $totalpembayaran){
    $uangkembalian =$uangpembayaran - $totalpembayaran;
    
    echo "Uang kembalian anda ";
    echo rupiah($uangkembalian);
    echo ", Terimakasih telah menggunakan rental kami";
    
    

}
?>