<?php
    $bulan = $_POST['bulan'];
    $tanggal = $_POST['tanggal'];
    $provinsi = $_POST['provinsi'];
    $kabupatenkota = $_POST['kabupatenkota'];
    $kelurahan = $_POST['kelurahan'];
    $desa = $_POST['desa'];
    $rtp = $_POST['rtp'];
    $niksiup = $_POST['niksiup'];
    $jenisusaha = $_POST['jenisusaha'];
    $jenisperairan = $_POST['jenisperairan'];
    $sarana = $_POST['sarana'];
    $ukuranperahu = $_POST['ukuranperahu'];
    $ukurankapal = $_POST['ukurankapal'];
    $jumlahabk = $_POST['jumlahabk'];
    $alattangkaputama = $_POST['alattangkaputama'];
    $alattangkaptambahan = $_POST['alattangkaptambahan'];
    $wpp = $_POST['wpp'];
    $daerahpenangkapan = $_POST['daerahpenangkapan'];
    $asalunit = $_POST['asalunit'];
    $jumlahtrip = $_POST['jumlahtrip'];
    $meanterjualutama = $_POST['meanterjualutama'];
    $meantidakterjualutama = $_POST['meantidakterjualutama'];
    $meanterjualtambahan = $_POST['meanterjualtambahan'];
    $meantidakterjualtambahan = $_POST['meantidakterjualtambahan'];
    $responden = $_POST['responden'];
    $notelepon = $_POST['notelepon'];
    $pengelola = $_POST['pengelola'];
    $kodepengelola = $_POST['kodepengelola'];
    $tanggalpencatatan = $_POST['tanggalpencatatan'];

    echo "<h1> KUSIONER PENDATAAN PRODUKSI PERIKANAN TANGKAP </h1>";
    echo "Bulan: ".$bulan."<br>";
    echo "Tanggal: ".$tanggal."<br>";

    echo "<h3> BLOK I: KETERANGAN TEMPAT USAHA </h3>";
    echo "Provinsi: ".$provinsi."<br>";
    echo "Kabupaten/kota: ".$kabupatenkota."<br>";
    echo "Kelurahan: ".$kelurahan."<br>";
    echo "Desa/kelurahan: ".$desa."<br>";

    echo "<h3> BLOK II: IDENTITAS USAHA </h3>";
    echo "Nama RTP/Perusahaan Perikanan: ".$rtp."<br>";
    echo "Nomor Induk Kependudukan/SIUP: ".$niksiup."<br>";
    echo "Jenis Usaha: ".$jenisusaha."<br>";
    echo "Jenis Perairan: ".$jenisperairan."<br>";
    echo "Sarana Penangkapan: ".$sarana."<br>";
    echo "Ukuran Perahu/Kapal";
    echo "<br>";
    echo "a. Ukuran Perahu (GT): ".$ukuranperahu."<br>";
    echo "b. Ukuran Kapal (GT): ".$ukurankapal."<br>";
    echo "Jumlah ABK: ".$sarana."<br>";
    echo "Jenis Alat Tangkap ";
    echo "<br>";
    echo "a. Alat Tangkap Utama: ".$alattangkaputama."<br>";
    echo "b. Alat Tangkap Tambahan: ".$alattangkaptambahan."<br>";
    echo "Wilayah Penangkapan Ikan: WPP-".$wpp."<br>";
    echo "Daerah Operasi Penangkapan (Perairan): ".$daerahpenangkapan."<br>";
    echo "Daerah Asal Unit Penangkapan Ikan: ".$asalunit."<br>";

    echo "<h3> BLOK III: PRODUKSI PERIKANAN TANGKAP </h3>";
    echo "Jumlah Trip Penangkapan Bulan Lalu: ".$jumlahtrip."<br>";
    echo "Jenis Tangkapan Utama";
    echo "<br>";
    echo "a. Rata-rata volume hasil tangkapan yang dijual per trip (Kg): ".$meanterjualutama."<br>";
    echo "b. Rata-rata volume hasil tangkapan yang tidak dijual per trip (Kg): ".$meantidakterjualutama."<br>";
    echo "Jenis Tangkapan Tambahan";
    echo "<br>";
    echo "a. Rata-rata volume hasil tangkapan yang dijual per trip (Kg): ".$meanterjualtambahan."<br>";
    echo "b. Rata-rata volume hasil tangkapan yang tidak dijual per trip (Kg): ".$meantidakterjualtambahan."<br>";

    echo "<h3> BLOK VI: PENGESAHAN </h3>";
    echo "Nama Responden: ".$responden."<br>";
    echo "No. Telepon/HP: ".$notelepon."<br>";
    echo "Nama Pengolah Data: ".$pengelola."<br>";
    echo "Kode Pengolah Data/NIK: ".$kodepengelola."<br>";
    echo "Tanggal Pencatatan: ".$tanggalpencatatan."<br>";


?>