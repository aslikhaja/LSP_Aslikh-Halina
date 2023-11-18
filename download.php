<!-- <?php
    include('koneksi.php');
    if(isset($_GET['nomor_surat'])){ //memeriksa parameter surat yang dikirimkan melalui metode GET
        $nomor_surat = $_GET['nomor_surat'];
        $stat = $koneksi->prepare("select * from arsip where nomor_surat=?");
        $stat->bindParam(1, $nomor_surat);
        $stat->execute();
        $data = $stat->fetch(); // mendapatkan informasi file dari database berdasarkan nomor surat yang diberikan

        $file = 'berkas/'.$data['file'];

        if(file_exists($file)){
            header('Content-Description: '. $data['description']);
            header('Content-Type: '.$data['type']);
            header('Content-Disposition: '.$data['disposition'].'; NamaFile="'.basename($file).'"');
            header('Expires'.$data['expires']);
            header('Cache-Control: '.$data['cache']);
            header('Pragma: '.$data['pragma']);
            header('Content-Length: '.filesize($file));
            readfile($file);
            exit;
        }
    }
?> -->