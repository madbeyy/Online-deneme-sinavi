<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/db.php'; // Configuration DataBase php file ?>
<?php include 'zaman.php'; // Configuration DataBase php file ?>

<?php

$email = $_SESSION['email'];

$query = $db->query("SELECT id FROM kullanici WHERE eposta = '$email'", PDO::FETCH_ASSOC);//içindeki
if ( $query->rowCount() ){

  foreach( $query as $row ){
  
	$kullaniciNO = $row["id"];	
	}
	}

$baglanti = new mysqli("localhost", "root", "", "soru");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");
$n=0;
$p=0;
$c=0;
$b=0;
$h=0;
$j=0;
$s=0;
$ss=0;
$no=$kullaniciNO;

//türkçe
while($s <= 39){
	$s++;
	

$sorgub = $baglanti->query("SELECT cevap FROM cevap WHERE kullaniciNo=$no AND kacinci=$s AND ders='turkce'");



$ciktib = $sorgub->fetch_array();
if ($ciktib["cevap"] != NULL)
{
	
	$b++;
	
}




}


//matematik
while($ss <= 39){
	$ss++;
	

$sorguc = $baglanti->query("SELECT cevap FROM cevap WHERE kullaniciNo=$no AND kacinci=$ss AND ders='matematik'");



$ciktic = $sorguc->fetch_array();
if ($ciktic["cevap"] != NULL)
{
	
	$c++;
	
}




}

//sosyal
while($h <= 19){
	$h++;
	

$sorgud = $baglanti->query("SELECT cevap FROM cevap WHERE kullaniciNo=$no AND kacinci=$h AND ders='sosyal'");



$ciktid = $sorgud->fetch_array();
if ($ciktid["cevap"] != NULL)
{
	
	$j++;
	
}




}
//fen

while($p <= 19){
	$p++;
	

$sorguj = $baglanti->query("SELECT cevap FROM cevap WHERE kullaniciNo=$no AND kacinci=$p AND ders='fen'");



$ciktin = $sorguj->fetch_array();
if ($ciktin["cevap"] != NULL)
{
	
	$n++;
	
}



}




$baglanti->close();

?>
<?php 

$turkcesayac = 0;
$matsayac = 0;
$sosyalsayac = 0;
$fensayac = 0;


$query = $db->query("SELECT ders FROM cevap WHERE cevap != 'NULL' AND ders = 'turkce' AND kullaniciNO = $kullaniciNO", PDO::FETCH_ASSOC);//içindeki
if ( $query->rowCount() ){

  foreach( $query as $row ){
  
	$turkcesayac++;
	}
	}

$query = $db->query("SELECT ders FROM cevap WHERE cevap != 'NULL' AND ders = 'matematik' AND kullaniciNO = $kullaniciNO", PDO::FETCH_ASSOC);//içindeki
if ( $query->rowCount() ){

  foreach( $query as $row ){
  
	$matsayac++;
	}
	}
	
$query = $db->query("SELECT ders FROM cevap WHERE cevap != 'NULL' AND ders = 'sosyal' AND kullaniciNO = $kullaniciNO", PDO::FETCH_ASSOC);//içindeki
if ( $query->rowCount() ){

  foreach( $query as $row ){
  
	$sosyalsayac++;
	}
	}
	
$query = $db->query("SELECT ders FROM cevap WHERE cevap != 'NULL' AND ders = 'fen' AND kullaniciNO = $kullaniciNO", PDO::FETCH_ASSOC);//içindeki
if ( $query->rowCount() ){

  foreach( $query as $row ){
  
	$fensayac++;
	}
	}

$denemegiris = 9999;
$sondeneme=1;


if(isset($_POST['tytsoruolustur'])){
    	
	$query = $db->query("SELECT deneme FROM cevap WHERE kullaniciNO = '$kullaniciNO'", PDO::FETCH_ASSOC);//içindeki
		if ( $query->rowCount() ){

		foreach( $query as $row ){
  
		$denemegiris = $row["deneme"];	
		}
		}
		
		$denemetarihi = $sondeneme;
		$dersekle = "turkce";
		$derseklesayac = 40;
		
		if($denemegiris != $denemetarihi && $denemegiris != $denemetarihi - 1){
					
		for($a = 1; $a <= $derseklesayac; $a++){

		if($dersekle == "turkce"){	
			
			$query = $db->prepare("INSERT INTO cevap SET
			ders = :ders,
			kacinci = :kacinci,
			kullaniciNO = :kullaniciNO,
			deneme = :deneme	
			");
			
			$update = $query->execute(array(
			 "ders" => $dersekle,
			 "kacinci" => $a,
			 "kullaniciNO" => $kullaniciNO,
			 "deneme" => $sondeneme
			));
				
		} if($a == 40 && $dersekle == "turkce"){
			
			$dersekle = "matematik";
			$a = 1;
			
		} if($dersekle == "matematik"){
			
			$query = $db->prepare("INSERT INTO cevap SET
			ders = :ders,
			kacinci = :kacinci,
			kullaniciNO = :kullaniciNO,
			deneme = :deneme	
			");
			
			$update = $query->execute(array(
			 "ders" => $dersekle,
			 "kacinci" => $a,
			 "kullaniciNO" => $kullaniciNO,
			 "deneme" => $sondeneme
			));
			
		} if($a == 40 && $dersekle == "matematik"){
			
			$dersekle = "sosyal";
			$a = 1;
			
		} if($dersekle == "sosyal"){
			
			$query = $db->prepare("INSERT INTO cevap SET
			ders = :ders,
			kacinci = :kacinci,
			kullaniciNO = :kullaniciNO,
			deneme = :deneme	
			");
			
			$update = $query->execute(array(
			 "ders" => $dersekle,
			 "kacinci" => $a,
			 "kullaniciNO" => $kullaniciNO,
			 "deneme" => $sondeneme
			));
		
		} if($a == 20 && $dersekle == "sosyal"){
			
			$dersekle = "fen";
			$a = 1;
			
		} if($dersekle == "fen"){
			
			$derseklesayac = 20;
			
			$query = $db->prepare("INSERT INTO cevap SET
			ders = :ders,
			kacinci = :kacinci,
			kullaniciNO = :kullaniciNO,
			deneme = :deneme	
			");
			
			$update = $query->execute(array(
			 "ders" => $dersekle,
			 "kacinci" => $a,
			 "kullaniciNO" => $kullaniciNO,
			 "deneme" => $sondeneme
			));		
		} 
	}}}

?>






<!doctype html>
                        <html>
                            <head>
							
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Soru Arayüzü</title>
                               <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
							   <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>body {
     background-image: url('resim/index.png');
    font-size: 10px;
    font-weight: 300
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            
			<?phpecho date('H:i:s', 1375057836);?>
			
            <div class="d-flex flex-row skin-1 mt-2">
                <button  onclick="window.location.href='./sorualani.php#q1'" class="btn d-flex flex-column align-items-center p-4 bg-success text-white text-center mr-2"><i class="fab fa-etsy fa-5x"></i>
                    <h2 class="mt-3">Türkçe</h2>
                </button>
				
				<button  onclick="window.location.href='./sorualani2.php#q1'" class="btn d-flex flex-column align-items-center p-4 bg-danger text-white text-center mr-2"><i class="fas fa-infinity fa-5x"></i>
                    <h2 class="mt-3">Matematik</h2>
                </button>
                
                <button  onclick="window.location.href='./sorualani3.php#q1'" class="btn d-flex flex-column align-items-center p-4 bg-info text-white text-center mr-2"><i class="fab fa-envira fa-5x"></i>
                    <h2 class="mt-3">Sosyal Bilgiler</h2>
                </button>
                 <button  onclick="window.location.href='./sorualani4.php#q1'" class="btn d-flex flex-column align-items-center p-4 bg-warning text-white text-center mr-2"><i class="fas fa-flask fa-5x"></i>
                    <h2 class="mt-3">Fen Bilimleri</h2>
                </button>
			
        </div>
		  <div class="d-flex flex-row skin-1 mt-2">
                <button class="btn d-flex flex-column align-items-center p-4 bg-success text-white text-center mr-2">
                    <h2 class="mt-3">&nbsp;&nbsp;<?php echo $b ?>/40&nbsp;</h2>
                </button>
				
				<button class="btn d-flex flex-column align-items-center p-4 bg-danger text-white text-center mr-2">
                    <h2 class="mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $c ?>/40&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                </button>
                <button class="btn d-flex flex-column align-items-center p-4 bg-info text-white text-center mr-2">
                    <h2 class="mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $j ?>/20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                </button>
				
                 <button class="btn d-flex flex-column align-items-center p-4 bg-warning text-white text-center mr-2">
                    <h2 class="mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $n ?>/20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                </button>
			
        </div>
		<div class="d-flex flex-row skin-1 mt-2">
                <button onclick="window.location.href='./index.php'" class="btn d-flex flex-column flex-grow-1 align-items-center p-4 bg-secondary text-white text-center" style="font-family: 'Allerta Stencil', sans-serif;"><i class="fa-solid fa-flag-checkered fa-5x"></i>
                    <h2 class="mt-3">Sınavı Bitir</h2>
                </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button   class="btn d-flex flex-column flex-grow-1 align-items-center p-4 bg-primary text-white text-center" style="font-family: 'Allerta Stencil', sans-serif;"><i class="fa-solid fa-clock fa-5x"></i>
                   <h2 id="zamanbasla" class="mt-3"></h2> 
					 
					
                </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				
			
        </div>
				
    </div>
</div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
                              
                                <script type='text/javascript' src='js/zaman.js'></script>
                                <script type='text/Javascript'></script>
													
				
								
								
								
                                </body>
                            </html>