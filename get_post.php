<html lang="en">
    <head>
        <title> Formulir </title>
        <style>
            body {background-color: lightblue; margin-left: 100; margin-right: 100;}  
            table, th, td {border: 1px solid black; border-collapse: collapse; }
            textarea {width:1000px}
        </style>
    </head>
    <body>
            <form name=""action="form_post.php" methode="post">
            <center>
                    <font face="tahoma">
                    <h3>KUSIONER PENDATAAN PRODUKSI PERIKANAN TANGKAP</h3>
                    <h5>Kementerian Kelautan dan Perikanan</h5>
                    <img src="KKP.png" width="100" height="100">
                    </font>
                </center>
                Bulan &ensp;&ensp;&nbsp;: &ensp;<input type="text" name="bulan"></td><br>
                Tanggal &ensp;: &ensp;<input type="text" name="tanggal"></td>
                <center>
                    <h4 style="background-color:cadetblue;">BLOK I: KETERANGAN TEMPAT USAHA</h4>
                </center>
                101 Provinsi &nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;:&ensp; <input type="text" name="provinsi"></td>
                <hr>
                102 Kabupaten/Kota *) &ensp;&ensp;: &ensp;<input type="text" name="kabupatenkota"></td> 
                <hr>
                103 Kelurahan &nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;:&ensp;<input type="text" name="kelurahan"></td> 
                <hr>
                104 Desa/Kelurahan *) &ensp;&ensp;:&ensp; <input type="text" name="desa"></td>
                <hr>

                <center>
                    <h4 style="background-color:cadetblue;">BLOK II: IDENTITAS USAHA</h4>
                </center>
                201 Nama RTP/Perusahaan Perikanan &ensp;&ensp;&ensp;:&ensp; <input type="text" name="rtp"></td>
                <br><br>
                202 Nomor Induk Kependudukan/SIUP &ensp;&ensp;&ensp;:&ensp;   <input type="text" name="niksiup"></td> 
                <br><br>
                203 Jenis Usaha &ensp;&ensp;:&ensp; <input type="radio" name="jenisusaha" value="Penangkapan Ikan di laut">Penangkapan Ikan di laut (Langsung ke 205) 
                                                    <input type="radio" name="jenisusaha" value="Penangkapan Ikan di Perairan Umum">Penangkapan Ikan di Perairan Umum
                <br><br>
                204 a. Jenis Perairan<sup>a)</sup> &ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;: &ensp; <input type="radio" name="jenisperairan" value="Sungai">Sungai
                                                                                                <input type="radio" name="jenisperairan" value="Danau">Danau  
                                                                                                <input type="radio" name="jenisperairan" value="Waduk">Waduk 
                                                                                                <input type="radio" name="jenisperairan" value="Rawa">Rawa 
                                                                                                <input type="radio" name="jenisperairan" value="lainnya">Genangan Air Lainnya
                <br><br>
                205 Sarana Penangkapan &ensp;&ensp;&ensp;:&ensp;<input type="radio" name="sarana" value="Tanpa perahu">Tanpa Perahu
                                                                <input type="radio" name="sarana" value="Perahu tanpa motor">Perahu tanpa motor 
                                                                <input type="radio" name="sarana" value="Perahu motor tempel">Perahu motor tempel 
                                                                <input type="radio" name="sarana" value="Kapal motor">Kapal motor
                <br><br>
                206 Ukuran Perahu/Kapal 
                <br>
                &ensp;&ensp;&ensp; a. Perahu Motor Tempel &ensp;&ensp;:&ensp; <input type="text" name="ukuranperahu"> GT
                <br>
                &ensp;&ensp;&ensp; b. Kapal Motor &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;:&ensp; <input type="text" name="ukurankapal"> GT
                <br><br>
                207 Jumlah ABK &ensp;&ensp;:&ensp;    <input type="text" name="jumlahabk"> Orang
                <br><br>
                208 Jenis Alat Tangkap 
                <br>
                &ensp;&ensp;&ensp; a. Alat Tangkap Utama &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;:&ensp; .<input type="text" name="alattangkaputama"></td> Jumlah &ensp;<input type="text" name="unit"></td> Unit
                <br>
                &ensp;&ensp;&ensp; b. Alat Tangkap Tambahan &ensp;&ensp;&ensp;:&ensp;    <input type="text" name="alattangkaptambahan"></td> Jumlah &ensp;<input type="text" name="unit"></td>Unit
                <br><br>
                209 Wilayah Penangkapan Ikan<sup>c)</sup> &ensp;&nbsp;: &ensp; WPP- <input type="text" name="wpp">
                <br><br>
                210 Daerah Operasi Penangkapan (Perairan): <input type="text" name="daerahpenangkapan">
                <br><br>
                211 Daerah Asal Unit Penangkapan Ikan &ensp;&ensp;&ensp;:&ensp; <input type="radio" name="asalunit" value="Dari Kabupaten Asal"> Dari Kabupaten Asal 
                                                                                <input type="radio" name="asalunit" value="Dari Kabupaten Lain">Dari Kabupaten Lain 
                <hr>
                <h6>keterangan: <br>
                &ensp;&ensp;&ensp; a)&ensp;Jenis Perairan diisi apabila melakukan usaha penangkapan ikan di Perairan Umum &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; c) WPP diisi apabila melakukan usaha penangkapan ikan di laut,<br>
                &ensp;&ensp;&ensp; b)&ensp;Hanya untuk Jenis Perairan Umum /PUD, khusus untuk Sungai, Danau dan Waduk, &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; jika melakukan penangkapan lebih dari satu WPP,<br>
                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Nama Ekosistem mengikuti kode yang sesuai &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp; data produksi dicatat di kuesioner baru</h6>
                
            <center>
                <h4 style="background-color:cadetblue;">BLOK III: PRODUKSI PERIKANAN TANGKAP</h4>
            </center>
            301 Jumlah Trip Penangkapan Bulan Lalu &ensp;&ensp;: &ensp; <input type="text" name="jumlahtrip">
            <br><br>
            302 Jenis Alat Tangkap Utama <br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; a. Rata-rata volume hasil tangkapan yang dijual per trip (Kg) &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;: &ensp; <input type="text" name="meanterjualutama"><br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; b. Rata-rata volume hasil tangkapan yang tidak dijual per trip (Kg) <sup>d)</sup> &ensp;&ensp;: &ensp; <input type="text" name="meantidakterjualutama">
            <br><br>
            303 Jenis Alat Tangkap Tambahan <br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; a. Rata-rata volume hasil tangkapan yang dijual per trip (Kg) &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;: &ensp; <input type="text" name="meanterjualtambahan"><br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; b. Rata-rata volume hasil tangkapan yang tidak dijual per trip (Kg) <sup>d)</sup> &ensp;&ensp;: &ensp; <input type="text" name="meantidakterjualtambahan">
            <br><br>
            <hr>
            <h6>keterangan: <br>
                &ensp;&ensp;&ensp; d)&ensp; Volume hasil tangkapan yang tidak dijual diantaranya seperti dimakan sendiri di rumah, diberikan kepada orang lain, dimakan di kapal, dll </h6>

            <center>
                <h4 style="background-color:cadetblue;">BLOK VI: PENGESAHAN</h4>
            </center>
            401 Nama Responden &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;:&ensp; <input type="text" name="responden">
            <br><br>
            402 No. Telepon/HP &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;:&ensp; <input type="text" name="notelepon">
            <br><br>
            403 Nama Pengolah Data &ensp;&ensp;&ensp;&ensp;&nbsp;:&ensp; <input type="text" name="pengelola">
            <br><br>
            404 Kode Pengolah Data/NIK &ensp;:&ensp; <input type="text" name="kodepengelola">
            <br><br>
            405 Tanggal Pencatatan &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;:&ensp; <input type="text" name="tanggalpencatatan">

            <br>
            <br>
            <tr>
                <td colspan="3"><input type="submit" value="simpan" name="tombol"></td>
            </tr>
            </form>
    </body>
</html>