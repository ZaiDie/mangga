<?php
error_reporting(E_ALL ^ E_NOTICE); 
include 'header.php';
include 'admin/config/koneksi.php';
?>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                        <div class="panel-body">
                            <ul class="nav"> 
                                <li class="active"><a href="#home" data-toggle="tab">
                                <center><h2>Hasil Diagnosa</h2></center></a>
                                <br>
                                </li>
                            </ul>
 							
                            
                             <div class="tab-content">
								
                                <div class="tab-pane fade active in" id="home">	
<?php
#--fakta aturan--------------------
	$query_fakta_aturan = mysqli_query($koneksi,"select id_fakta, id_aturan from fakta_aturan");
	$data=array();
	while($row_fakta_aturan=mysqli_fetch_assoc($query_fakta_aturan)) {
       $data[]=array(
       		"id_fakta" => array($row_fakta_aturan['id_fakta']),
			"id_aturan" => $row_fakta_aturan['id_aturan']
		);
    }
    #-----------------------------

#--join fakta-aturan id_fakta=id_aturan-------------------------
$ref_fakta = array();
$query_fakta=mysqli_query($koneksi,"SELECT a.id_aturan, f.* FROM aturan a JOIN fakta f ON a.id_fakta=f.id_fakta WHERE 1");
while ($row_fakta=mysqli_fetch_assoc($query_fakta)) 
{
	$row_fakta['tipe'] = 'penyakit';//tipe
	$ref_fakta[$row_fakta['id_aturan']] = (object)$row_fakta;//
}
$query_fakta=mysqli_query($koneksi,"select * from fakta");
		$fakta2=array();
		while ($row_fakta=mysqli_fetch_assoc($query_fakta)) {
		$fakta2[$row_fakta['id_fakta']]=0;
		$row_fakta['tipe'] = 'gejala';//tipe
		$ref_fakta[$row_fakta['id_fakta']] = (object)$row_fakta;
		
	}
#---------------------------

//Start
$group = array();
foreach($data as $row)
{
	if(!isset($group[$row['id_aturan']]))
	{

		$group[$row['id_aturan']] = array(
			'syarat' => array($row['id_fakta'][0]),//w
			'fakta_baru' => $row['id_aturan'],
		);
	} 
	else
	{
		$group[$row['id_aturan']]['syarat'][] = $row['id_fakta'][0];
	}

}
#gejala pilih
$fakta = array();
$gejala = $_POST['gejala'];
foreach($gejala as $row) $fakta[$row] = 1;
//echo '<pre>'; print_r($fakta); echo '</pre>';die;

do{
	$changed=FALSE;
foreach($group as $aturan){
	$fakta_baru=$aturan["fakta_baru"];
	$syarat_list=$aturan["syarat"];
	$jumlah_syarat=count($syarat_list);//menghitung jumlah fakta aturan
	$peluang_fakta_baru=0;
	foreach ($syarat_list as $syarat) {
		$peluang_fakta_baru+= isset($fakta[$syarat]) ? $fakta[$syarat] : 0;//jika ada fakta yang sesuai
		# code...
	}
	$peluang_fakta_baru=$peluang_fakta_baru/$jumlah_syarat;//menghitung peluang
	if($peluang_fakta_baru>$fakta[$fakta_baru]){
		$fakta[$fakta_baru]=$peluang_fakta_baru;//tambahkan fakta baru
		$changed=TRUE;
	}
	}
}
while ($changed);

#--tampil-----
$result = array();
foreach ($fakta as $key => $val) {
	$result[$key] = array(
		'fakta' => $ref_fakta[$key]->fakta,
		'jenis' => $ref_fakta[$key]->jenis,
		'info' => $ref_fakta[$key]->info,
		'solusi' => $ref_fakta[$key]->solusi,
		'gambar' => $ref_fakta[$key]->gambar,
		'tipe' => $ref_fakta[$key]->tipe,
		'hasil' => $val,
	);
}

//var_dump($syarat[$value]);
//echo '<pre>'; print_r($result); echo '</pre>';
//echo '<pre>'; print_r($result); echo '</pre>';die;

foreach ($result as $key => $row) 
{
	//echo $row['jenis'].' '.$row['fakta'].' hasilnya adalah '.$row['hasil'].'<br>';
	#echo $row['info'].' '.$row['fakta'].' Cara Pengendalian : '.$row['gambar'].'Gambar : ';
	#echo "<li>".$row_fakta['fakta']."</li>";

//echo "<li>".$row['jenis']."</li>";
if($row['tipe'] == 'penyakit')
{
	//echo"<ol>";
	echo "<li>kemungkinan terserang <strong>".$row['jenis']."  '</strong>";
	echo "<strong>".$row['fakta']."'</strong> dengan nilai ";
	if ($row['hasil']) echo "<strong>".round($row['hasil']*100,2)."%</strong> dari gejala terpilih</li>";
	if ($row['info']) echo "<p><strong>info penyakit : </strong> <br>".$row['info']."</p>";
	if ($row['solusi']) echo "<p><strong>Cara Pengendalian : </strong> <br>".$row['solusi']."</p>";
	if ($row['gambar']) echo '<b>Gambar : </b><br><td><img src="admin/assets/img//'.$row['gambar'].'" class="img-responsive img-thumbnall"/></td>';

echo"<hr>";
//echo"</ol>";

} 
else
{
	echo "<p>Gejala <strong>' ".$row['fakta']."  '</strong>";
	
}

}
?>
											<ul class="pager">
							                    <li class="next">
							                    <a href="#" onClick="window.print()" >Print</a>
 							                    </li>
							                </ul>
										<hr>
										<div class="alert alert-info"><center> Hasil Diagnosa Sistem Pakar Tanaman Mangga Menggunakan Inferensi Forward Chaining 
										</center>

			 							</div>						
                            </div>
                        </div>
			</div>
   		</div>
	</div>
<?php
include'footer.php';
?>