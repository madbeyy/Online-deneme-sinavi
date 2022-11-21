<?php include 'inc/db.php'; // Configuration DataBase php file ?>
<?php include 'inc/config.php'; // Configuration php file ?>

<?php

 if(isset($_POST['submit']))
 {
	$c=0;
	
	$email = $_SESSION['email'];

	$query = $db->query("SELECT id FROM kullanici WHERE eposta = '$email'", PDO::FETCH_ASSOC);//içindeki
	if ( $query->rowCount() ){

	foreach( $query as $row ){
  
	$kullaniciNO = $row["id"];	
	}
	}
	
	$sondeneme=1;
	$ders="turkce";
	
	for ($i=0; $i<40; $i++){
		
		switch ($i){
			case 0: $siralama ="first"; break;
			case 1: $siralama ="second"; break;
			case 2: $siralama ="third"; break;
			case 3: $siralama ="fourth"; break;
			case 4: $siralama ="fifth"; break;
			case 5:	$siralama ="sixth"; break;
			case 6:	$siralama ="seventh"; break;
			case 7:	$siralama ="eighth"; break;
			case 8:	$siralama ="ninth"; break;
			case 9: $siralama ="tenth"; break;
			case 10:$siralama ="Eleventh"; break;
			case 11:$siralama ="Twelfth"; break; 
			case 12:$siralama ="Thirteenth"; break;
			case 13:$siralama ="Fourteenth"; break;
			case 14:$siralama ="Fifteenth"; break;
			case 15:$siralama ="Sixteenth"; break;
			case 16:$siralama ="Seventeenth"; break;
			case 17:$siralama ="Eighteenth"; break;
			case 18:$siralama ="Nineteenth"; break;
			case 19:$siralama ="Twentieth"; break;
			case 20:$siralama ="Twenty-First"; break;
			case 21:$siralama ="Twenty-Second"; break; 
			case 22:$siralama ="Twenty-Third"; break;
			case 23:$siralama ="Twenty-Fourth"; break;
			case 24:$siralama ="Twenty-Fifth"; break;
			case 25:$siralama ="Twenty-Sixth"; break;
			case 26:$siralama ="Twenty-Seventh"; break;
			case 27:$siralama ="Twenty-Eighth"; break;
			case 28:$siralama ="Twenty-Ninth"; break;
			case 29:$siralama ="Thirtieth"; break;
			case 30:$siralama ="Thirty-First"; break;
			case 31:$siralama ="Thirty-Second"; break; 
			case 32:$siralama ="Thirty-Third"; break;
			case 33:$siralama ="Thirty-Fourth"; break;
			case 34:$siralama ="Thirty-Fifth"; break;
			case 35:$siralama ="Thirty-Sixth"; break;
			case 36:$siralama ="Thirty-Seventh"; break;
			case 37:$siralama ="Thirty-Eighth"; break;
			case 38:$siralama ="Thirty-Ninth"; break;
			case 39:$siralama ="Fortieth"; break;
		}
		
		if(!empty($_POST[$siralama])) {
		$ans[$i]=$_POST[$siralama];		
		}else{
		$ans[$i]=null;
		}
		
		
		if($ans[$i]=="1"){
			
			$ans[$i]="A";
		}
		else if($ans[$i]=="2"){
			
			$ans[$i]="B";
		}
		else if($ans[$i]=="3"){
			
			$ans[$i]="C";
		}
		else if($ans[$i]=="4"){
			
			$ans[$i]="D";
		}
		else if($ans[$i]=="5"){
			
			$ans[$i]="E";
		}
		else{
			
			$ans[$i]=null;
			
		}
		
		$query = $db->prepare("UPDATE cevap SET
		cevap = :cevap
		WHERE kullaniciNO = $kullaniciNO AND deneme = $sondeneme AND ders = '$ders' AND kacinci = $i+1");
	
		$update = $query->execute(array(
		"cevap" => $ans[$i]
		));
		
		
	}
	
	
	
	
	
	

	}
?>
<html>
<head>
<style>
body {
				background-image: url('resim/index.png');
			}
		
			</style>
</head>
<?php

header("Refresh: 1; url=bolumsec.php"); 

?> 
</body>
</html>