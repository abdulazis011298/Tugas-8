<center><h2>Sistem Poli Klinik</center></h2>
<pre><h3>
Nama		: ABDUL AZIS
NIM		: 311910144
Kelas		: TI.19.D3
</pre></h2>
<h3> Data Pasien </h3>
<table border='1'>
<tr>
<th>No</th>
<th>ID</th>
<th>Nama</th>
<th>No HP</th>
<th>Diagnosa</th>
<th>Alamat</th>
</tr>
<?php
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from pasien");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_pasien]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[no_hp]</td>
			<td>$tampil[diagnosa]</td>
			<td>$tampil[alamat]</td>
          
        <tr>";
        $no++;
    }
    ?>
<table border='1'>
<tr>
<th>No</th>
<th>ID</th>
<th>Nama</th>
<th>No HP</th>
</tr>
<br>
<h3> Data Dokter </h3>
	<?php
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from dokter");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_dokter]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[no_hp]</td>
			
        <tr>";
        $no++;
    }
    ?>
	</br>
	
<table border='1'>
<tr>
<th>No</th>
<th>ID Klinik</th>
<th>Nama Klinik</th>
<th>ID Dokter</th>
<th>ID Pasien </th>
<th>Alamat Klinik</th>
</tr
<br><h3> Data Poli Klinik </h3>
	<?php
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from poli_klinik");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_poli_klinik]</td>
            <td>$tampil[nama_klinik]</td>
            <td>$tampil[id_dokter]</td>
			<td>$tampil[id_pasien]</td>
			<td>$tampil[alamat_klinik]</td>
			
        <tr>";
        $no++;
    }
    ?>
	</br>
