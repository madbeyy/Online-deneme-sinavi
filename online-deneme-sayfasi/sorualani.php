<?php include 'inc/db.php'; // Configuration DataBase php file ?>
<?php include 'inc/config.php'; // Configuration php file ?>

<?php 

date_default_timezone_set('Europe/Istanbul');

try {

$db = new PDO("mysql:host=localhost;dbname=soru", "root", "");//soldaki

} catch ( PDOException $e ){

print $e->getMessage();
}

$ders = "turkce";
$kacinci = 0;
$sondeneme = 1;
$asd = "#q1";
$sayac = 0;
$sorusayac = 0;
$resim = "resim";

?>


                                
                                


<html>

	<head>
	
		<title>soru alanı</title>
		<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                
		
		
		
		<style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                }

.modal-body {
    background-color: #fff;
    border-color: #fff;

}


.close {
    color: #000;
    cursor: pointer;
}

.close:hover {
    color: #000;
}




</style>
          
		
		
		
		
		
		
		<style>
		
			::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } #
			
			h2{
				background-color:#bdcbd6;
				padding:10px 20px 10px 20px;
				border-radius:5px;
				width:75%;
				
			}
			.fsSubmitButton
{
padding: 20px 40px ;
font-size: 21px !important;
background-color: #6b6868;
font-weight: bold;
text-shadow: 1px 1px #6b6868;
color: #ffffff;
border-radius: 100px;
-moz-border-radius: 100px;
-webkit-border-radius: 100px;
border: 1px solid #6b6868;
cursor: pointer;
}
.fsPrevNextButton
{
padding: 12px 25px;
font-size: 20px !important;
background-color: #1f2029;
text-shadow: 1px 1px #000000;
color: #ffffff;
border-radius: 10px;
border: 1px solid #000000;
cursor: pointer;
}
.fsNextPrevButton
{
padding: 12px 25px;
font-size: 20px !important;
background-color: #1f2029;
text-shadow: 1px 1px #000000;
color: #ffffff;
border-radius: 10px;
border: 1px solid #000000;
cursor: pointer;
}
.fsReviewButton
{
padding: 12px 25px;
font-size: 20px !important;
background-color: #1f2029;
text-shadow: 1px 1px #000000;
color: #ffffff;
border-radius: 10px;
border: 1px solid #000000;
cursor: pointer;
}
input[type=text] {
    width: 78%;
    padding: 15px;
	font-size:15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
	border-radius:5px;
    background: #bdcbd6;;
}
input[type=text]:focus{
    background-color: #ddd;
    outline: none;
}

			body{
					padding: 0px;
					background-color:#FFFFFF;
					background-repeat: no-repeat;
					background-size: cover;
					background-attachment:fixed;
					overflow:hidden;
			}
			button {
				  border-style:groove;
				  margin:5px;
				  border: 5px;
				  outline: auto;
				  border-radius:5px;
				  border-color:red;
				  width:5%;
				  background-color:#FFFFFF;
				  box-shadow: 3px 6px 3px #1f2029;
				  color: #505050;
				  cursor: pointer;
				  font: inherit;
				  padding:10px 20px 10px 20px;
				  transition: all .1s linear;
				  position : fixed;
				}
			button:focus
				{
				box-shadow: 0 3px 0 #FFFFFF;
				transform: translateY(5px);
				background-color:#1f2029;
				color:#FFFFFF;
				position : fixed;
				}
			 h1   {
				    color:#FFFFFF; 
					background-color:#1f2029;
					text-align:center;
					margin:0px;
					width:100%;
					font-size:30px;
					position:fixed;
					}
			  a {
     text-decoration: none;
    }
		</style>

	</head>
	<body onload=s()>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	
<script>
	function myFunction() {
	var rates = document.getElementsByName(arguments[0]);
	var rate_value;
	for(var i = 0; i < rates.length; i++){
		if(rates[i].checked){
		if(arguments[0]=="first"){
			document.getElementById('b1').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="second"){
			document.getElementById('b2').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="third"){
			document.getElementById('b3').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="fourth"){
			document.getElementById('b4').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="fifth"){
			document.getElementById('b5').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="sixth"){
			document.getElementById('b6').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="seventh"){
			document.getElementById('b7').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="eighth"){
			document.getElementById('b8').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="ninth"){
			document.getElementById('b9').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="tenth"){
			document.getElementById('b10').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Eleventh"){
			document.getElementById('b11').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Twelfth"){
			document.getElementById('b12').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Thirteenth"){
			document.getElementById('b13').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Fourteenth"){
			document.getElementById('b14').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Fifteenth"){
			document.getElementById('b15').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Sixteenth"){
			document.getElementById('b16').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Seventeenth"){
			document.getElementById('b17').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Eighteenth"){
			document.getElementById('b18').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Nineteenth"){
			document.getElementById('b19').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Twentieth"){
			document.getElementById('b20').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Twenty-First"){
			document.getElementById('b21').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Twenty-Second"){
			document.getElementById('b22').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Twenty-Third"){
			document.getElementById('b23').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Twenty-Fourth"){
			document.getElementById('b24').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Twenty-Fifth"){
			document.getElementById('b25').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Twenty-Sixth"){
			document.getElementById('b26').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Twenty-Seventh"){
			document.getElementById('b27').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Twenty-Eighth"){
			document.getElementById('b28').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Twenty-Ninth"){
			document.getElementById('b29').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Thirtieth"){
			document.getElementById('b30').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Thirty-First"){
			document.getElementById('b31').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Thirty-Second"){
			document.getElementById('b32').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Thirty-Third"){
			document.getElementById('b33').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Thirty-Fourth"){
			document.getElementById('b34').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Thirty-Fifth"){
			document.getElementById('b35').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Thirty-Sixth"){
			document.getElementById('b36').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Thirty-Seventh"){
			document.getElementById('b37').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Thirty-Eighth"){
			document.getElementById('b38').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Thirty-Ninth"){
			document.getElementById('b39').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="Fortieth"){
			document.getElementById('b40').style.backgroundColor="#22B11B";
		}
		break;
    }
}
	}
	function myfun(){
		var c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,c11,c12,c13,c14,c15,c16,c17,c18,c19,c20,c21,c22,c23,c24,c25,c26,c27,c28,c29,c30,c31,c32,c33,c34,c35,c36,c37,c38,c39,c40;
		c1=0;c2=0;c3=0;c4=0;c5=0;c6=0;c7=0;c8=0;c9=0;c10=0;c11=0;c12=0;c13=0;c14=0;c15=0;c16=0;c17=0;c18=0;c19=0;c20=0;c21=0;c22=0;c23=0;c24=0;c25=0;c26=0;c27=0;c28=0;c29=0;c30=0;c31=0;c32=0;c33=0;c34=0;c35=0;c36=0;c37=0;c38=0;c39=0;c40=0;
		var rates1 = document.getElementsByName('first');
		var rates2 = document.getElementsByName('second');
		var rates3 = document.getElementsByName('third');
		var rates4 = document.getElementsByName('fourth');
		var rates5 = document.getElementsByName('fifth');
		var rates6 = document.getElementsByName('sixth');
		var rates7 = document.getElementsByName('seventh');
		var rates8 = document.getElementsByName('eighth');
		var rates9 = document.getElementsByName('ninth');
		var rates10 = document.getElementsByName('tenth');
		var rates11 = document.getElementsByName('Eleventh');
		var rates12 = document.getElementsByName('Twelfth');
		var rates13 = document.getElementsByName('Thirteenth');
		var rates14 = document.getElementsByName('Fourteenth');
		var rates15 = document.getElementsByName('Fifteenth');
		var rates16 = document.getElementsByName('Sixteenth');
		var rates17 = document.getElementsByName('Seventeenth');
		var rates18 = document.getElementsByName('Eighteenth');
		var rates19 = document.getElementsByName('Nineteenth');
		var rates20 = document.getElementsByName('Twentieth');
		var rates21 = document.getElementsByName('Twenty-First');
		var rates22 = document.getElementsByName('Twenty-Second');
		var rates23 = document.getElementsByName('Twenty-Third');
		var rates24 = document.getElementsByName('Twenty-Fourth');
		var rates25 = document.getElementsByName('Twenty-Fifth');
		var rates26 = document.getElementsByName('Twenty-Sixth');
		var rates27 = document.getElementsByName('Twenty-Seventh');
		var rates28 = document.getElementsByName('Twenty-Eighth');
		var rates29 = document.getElementsByName('Twenty-Ninth');
		var rates30 = document.getElementsByName('Thirtieth');
		var rates31 = document.getElementsByName('Thirty-First');
		var rates32 = document.getElementsByName('Thirty-Second');
		var rates33 = document.getElementsByName('Thirty-Third');
		var rates34 = document.getElementsByName('Thirty-Fourth');
		var rates35 = document.getElementsByName('Thirty-Fifth');
		var rates36 = document.getElementsByName('Thirty-Sixth');
		var rates37 = document.getElementsByName('Thirty-Seventh');
		var rates38 = document.getElementsByName('Thirty-Eighth');
		var rates39 = document.getElementsByName('Thirty-Ninth');
		var rates40 = document.getElementsByName('Fortieth');
		for(var i = 0; i < rates1.length; i++){
		if(rates1[i].checked){
				if(c1==0)
					c1=1;
				break;
			}
		}
		for(var i = 0; i < rates2.length; i++){
		if(rates2[i].checked){
				if(c2==0)
					c2=1;
				break;
			}
		}
		for(var i = 0; i < rates3.length; i++){
		if(rates3[i].checked){
				if(c3==0)
					c3=1;
				break;
			}
		}
		for(var i = 0; i < rates4.length; i++){
		if(rates4[i].checked){
				if(c4==0)
					c4=1;
				break;
			}
		}
		for(var i = 0; i < rates5.length; i++){
		if(rates5[i].checked){
				if(c5==0)
					c5=1;
				break;
			}
		}
		for(var i = 0; i < rates6.length; i++){
		if(rates6[i].checked){
				if(c6==0)
					c6=1;
				break;
			}
		}
		for(var i = 0; i < rates7.length; i++){
		if(rates7[i].checked){
				if(c7==0)
					c7=1;
				break;
			}
		}
		for(var i = 0; i < rates8.length; i++){
		if(rates8[i].checked){
				if(c8==0)
					c8=1;
				break;
			}
		}
		for(var i = 0; i < rates9.length; i++){
		if(rates9[i].checked){
				if(c9==0)
					c9=1;
				break;
			}
		}
		for(var i = 0; i < rates10.length; i++){
		if(rates10[i].checked){
				if(c10==0)
					c10=1;
				break;
			}
		}
		for(var i = 0; i < rates11.length; i++){
		if(rates11[i].checked){
				if(c11==0)
					c11=1;
				break;
			}
		}
		for(var i = 0; i < rates12.length; i++){
		if(rates12[i].checked){
				if(c12==0)
					c12=1;
				break;
			}
		}
		for(var i = 0; i < rates13.length; i++){
		if(rates13[i].checked){
				if(c13==0)
					c13=1;
				break;
			}
		}
		for(var i = 0; i < rates14.length; i++){
		if(rates14[i].checked){
				if(c14==0)
					c14=1;
				break;
			}
		}
		for(var i = 0; i < rates15.length; i++){
		if(rates15[i].checked){
				if(c15==0)
					c15=1;
				break;
			}
		}
		for(var i = 0; i < rates16.length; i++){
		if(rates16[i].checked){
				if(c16==0)
					c16=1;
				break;
			}
		}
		for(var i = 0; i < rates17.length; i++){
		if(rates17[i].checked){
				if(c17==0)
					c17=1;
				break;
			}
		}
		for(var i = 0; i < rates18.length; i++){
		if(rates18[i].checked){
				if(c18==0)
					c18=1;
				break;
			}
		}
		for(var i = 0; i < rates19.length; i++){
		if(rates19[i].checked){
				if(c19==0)
					c19=1;
				break;
			}
		}
		for(var i = 0; i < rates20.length; i++){
		if(rates20[i].checked){
				if(c20==0)
					c20=1;
				break;
			}
		}
		for(var i = 0; i < rates21.length; i++){
		if(rates21[i].checked){
				if(c21==0)
					c21=1;
				break;
			}
		}
		for(var i = 0; i < rates22.length; i++){
		if(rates22[i].checked){
				if(c22==0)
					c22=1;
				break;
			}
		}
		for(var i = 0; i < rates23.length; i++){
		if(rates23[i].checked){
				if(c23==0)
					c23=1;
				break;
			}
		}
		for(var i = 0; i < rates24.length; i++){
		if(rates24[i].checked){
				if(c24==0)
					c24=1;
				break;
			}
		}
		for(var i = 0; i < rates25.length; i++){
		if(rates25[i].checked){
				if(c25==0)
					c25=1;
				break;
			}
		}
		for(var i = 0; i < rates26.length; i++){
		if(rates26[i].checked){
				if(c26==0)
					c26=1;
				break;
			}
		}
		for(var i = 0; i < rates27.length; i++){
		if(rates27[i].checked){
				if(c27==0)
					c27=1;
				break;
			}
		}
		for(var i = 0; i < rates28.length; i++){
		if(rates28[i].checked){
				if(c28==0)
					c28=1;
				break;
			}
		}
		for(var i = 0; i < rates29.length; i++){
		if(rates29[i].checked){
				if(c29==0)
					c29=1;
				break;
			}
		}
		for(var i = 0; i < rates30.length; i++){
		if(rates30[i].checked){
				if(c30==0)
					c30=1;
				break;
			}
		}
		for(var i = 0; i < rates31.length; i++){
		if(rates31[i].checked){
				if(c31==0)
					c31=1;
				break;
			}
		}
		for(var i = 0; i < rates32.length; i++){
		if(rates32[i].checked){
				if(c32==0)
					c32=1;
				break;
			}
		}
		for(var i = 0; i < rates33.length; i++){
		if(rates33[i].checked){
				if(c33==0)
					c33=1;
				break;
			}
		}
		for(var i = 0; i < rates34.length; i++){
		if(rates34[i].checked){
				if(c34==0)
					c34=1;
				break;
			}
		}
		for(var i = 0; i < rates35.length; i++){
		if(rates35[i].checked){
				if(c35==0)
					c35=1;
				break;
			}
		}
		for(var i = 0; i < rates36.length; i++){
		if(rates36[i].checked){
				if(c36==0)
					c36=1;
				break;
			}
		}
		for(var i = 0; i < rates37.length; i++){
		if(rates37[i].checked){
				if(c37==0)
					c37=1;
				break;
			}
		}
		for(var i = 0; i < rates38.length; i++){
		if(rates38[i].checked){
				if(c38==0)
					c38=1;
				break;
			}
		}
		for(var i = 0; i < rates39.length; i++){
		if(rates39[i].checked){
				if(c39==0)
					c39=1;
				break;
			}
		}
		for(var i = 0; i < rates40.length; i++){
		if(rates40[i].checked){
				if(c40==0)
					c40=1;
				break;
			}
		}
		var c = c1+c2+c3+c4+c5+c6+c7+c8+c9+c10+c11+c12+c13+c14+c15+c16+c17+c18+c19+c20+c21+c22+c23+c24+c25+c26+c27+c28+c29+c30+c31+c32+c33+c34+c35+c36+c37+c38+c39+c40;
		document.getElementById('count').innerHTML="İşaretli : "+ c +"&emsp;"+"Boş : "+(40-c);
	}
	function myFunction1() {
	var rates = document.getElementsByName(arguments[0]);
	var rate_value;
	for(var i = 0; i < rates.length; i++){
		if(rates[i].checked){
		if(arguments[0]=="first"){
			document.getElementById('b1').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="second"){
			document.getElementById('b2').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="third"){
			document.getElementById('b3').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="fourth"){
			document.getElementById('b4').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="fifth"){
			document.getElementById('b5').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="sixth"){
			document.getElementById('b6').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="seventh"){
			document.getElementById('b7').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="eighth"){
			document.getElementById('b8').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="ninth"){
			document.getElementById('b9').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="tenth"){
			document.getElementById('b10').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Eleventh"){
			document.getElementById('b11').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Twelfth"){
			document.getElementById('b12').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Thirteenth"){
			document.getElementById('b13').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Fourteenth"){
			document.getElementById('b14').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Fifteenth"){
			document.getElementById('b15').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Sixteenth"){
			document.getElementById('b16').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Seventeenth"){
			document.getElementById('b17').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Eighteenth"){
			document.getElementById('b18').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Nineteenth"){
			document.getElementById('b19').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Twentieth"){
			document.getElementById('b20').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Twenty-First"){
			document.getElementById('b21').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Twenty-Second"){
			document.getElementById('b22').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Twenty-Third"){
			document.getElementById('b23').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Twenty-Fourth"){
			document.getElementById('b24').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Twenty-Fifth"){
			document.getElementById('b25').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Twenty-Sixth"){
			document.getElementById('b26').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Twenty-Seventh"){
			document.getElementById('b27').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Twenty-Eighth"){
			document.getElementById('b28').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Twenty-Ninth"){
			document.getElementById('b29').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Thirtieth"){
			document.getElementById('b30').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Thirty-First	"){
			document.getElementById('b31').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Thirty-Second"){
			document.getElementById('b32').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Thirty-Third"){
			document.getElementById('b33').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Thirty-Fourth"){
			document.getElementById('b34').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Thirty-Fifth"){
			document.getElementById('b35').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Thirty-Sixth"){
			document.getElementById('b36').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Thirty-Seventh"){
			document.getElementById('b37').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Thirty-Eighth"){
			document.getElementById('b38').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Thirty-Ninth"){
			document.getElementById('b39').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="Fortieth"){
			document.getElementById('b40').style.backgroundColor="#ff9600";
		}
		break;
		}
	}
}
</script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />



	<h1><center>
	<h1><div style="margin-left:3%;position:fixed;color:#fffff;font-size:30px" >Türkçe Dersi</div></h1>
	<h1><div style=" margin-left:65%;position:fixed;font-size:29px;"id="count"></div></h1>
	<h1><div style="text:center;margin-left:87%;position:fixed;color:#fffff;font-size:30px"  id="zamanbasla"></div></h1>
	
	<i onclick="window.location.href='./bolumsec.php'" style="color:white;" class=" btn fas fa-arrow-circle-left fa-1x"></i>
&nbsp;&nbsp;
<i onclick="gizleGoster('count');" style="color:white;" class=" btn fa-solid fa-file-circle-question fa-1x"></i>
&nbsp;&nbsp;
<i onclick="gizleGoster('zamanbasla');" style="color:white;" class=" btn fas fa-solid fa-clock fa-1x"></i>
&nbsp;&nbsp;
<i data-toggle="modal" data-target="#staticBackdrop"  style="color:white;" class=" btn fas fa-solid fa-triangle-exclamation fa-1x"></i></center></h1>
	
		
	
	
	
	
	
	
	<div style="margin-left:87%;position:fixed;font-size:40px;">
	</div>
	<br><br><br><br>


	
	<div  style="margin-left:73%;margin-top:-14%;">
			<br><br><br><br><br><br><br><br><br>
		    <a href="#q1" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b1">1</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q2" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b2">2</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q3" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b3">3</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q4" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b4">4</button><br><br></a>
			<a href="#q5" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b5">5</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q6" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b6">6</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q7" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b7">7</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q8" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b8">8</button><br><br></a>	
			<a href="#q9" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b9">9</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q10" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b10">10</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q11" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b11">11</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q12" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b12">12</button><br><br></a>
			<a href="#q13" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b13">13</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q14" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b14">14</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q15" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b15">15</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q16" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b16">16</button><br><br></a>	
			<a href="#q17" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b17">17</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q18" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b18">18</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;	
			<a href="#q19" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b19">19</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q20" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b20">20</button><br><br></a>	
			<a href="#q21" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b21">21</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q22" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b22">22</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q23" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b23">23</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q24" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b24">24</button><br><br></a>
			<a href="#q25" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b25">25</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q26" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b26">26</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q27" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b27">27</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;		
			<a href="#q28" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b28">28</button><br><br></a>	
			<a href="#q29" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b29">29</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q30" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b30">30</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q31" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b31">31</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;	
			<a href="#q32" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b32">32</button><br><br></a>
			<a href="#q33" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b33">33</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q34" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b34">34</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q35" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b35">35</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q36" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b36">36</button><br><br></a>
			<a href="#q37" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b37">37</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q38" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b38">38</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q39" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b39">39</button>&emsp;&emsp;&emsp;&emsp;</a>&emsp;&emsp;
			<a href="#q40" style="font-size:15px;font-family: 'Delius Unicase', cursive;"><button id="b40">40</button><br><br></a>
			
		</div>
			<form action="student.php" method="post">
		
		
		<?php
					$query = $db->query("SELECT * FROM tyt WHERE ders='$ders' and deneme = '$sondeneme'", PDO::FETCH_ASSOC);
					if ( $query->rowCount() ){
						foreach( $query as $row){ $sorusayac++; $sayac++;
					?>
		
		<div id='q<?php echo $sorusayac; ?>'style="margin-left:5%;color:#424242;">
			
		<br><br><br>
        
		<p style='font-family:Berlin Sans FB;font-size:35px'>Soru <?php echo $sorusayac; ?></p>
		<?php echo $row['resim']; ?>
		<h2></h2>
		<div style="width:30%;">
		<font size="3"><?php echo $sorusayac; ?>) <?php echo $row['soru'] ?> ?<br></font>
		
		<h3 style='font-family:Candara'>
		</div>
		<input type="radio" name="<?php switch ($sorusayac){

						case 1: echo "first"; break;
						case 2: echo "second"; break; 
						case 3: echo "third"; break;
						case 4: echo "fourth"; break;
						case 5:	echo "fifth"; break;
						case 6:	echo "sixth"; break;
						case 7:	echo "seventh"; break;
						case 8:	echo "eighth"; break;
						case 9:	echo "ninth"; break;
						case 10:echo "tenth"; break;
						case 11:echo "Eleventh"; break;
						case 12:echo "Twelfth"; break; 
						case 13:echo "Thirteenth"; break;
						case 14:echo "Fourteenth"; break;
						case 15:echo "Fifteenth"; break;
						case 16:echo "Sixteenth"; break;
						case 17:echo "Seventeenth"; break;
						case 18:echo "Eighteenth"; break;
						case 19:echo "Nineteenth"; break;
						case 20:echo "Twentieth"; break;
						case 21:echo "Twenty-First"; break;
						case 22:echo "Twenty-Second"; break; 
						case 23:echo "Twenty-Third"; break;
						case 24:echo "Twenty-Fourth"; break;
						case 25:echo "Twenty-Fifth"; break;
						case 26:echo "Twenty-Sixth"; break;
						case 27:echo "Twenty-Seventh"; break;
						case 28:echo "Twenty-Eighth"; break;
						case 29:echo "Twenty-Ninth"; break;
						case 30:echo "Thirtieth"; break;
						case 31:echo "Thirty-First"; break;
						case 32:echo "Thirty-Second"; break; 
						case 33:echo "Thirty-Third"; break;
						case 34:echo "Thirty-Fourth"; break;
						case 35:echo "Thirty-Fifth"; break;
						case 36:echo "Thirty-Sixth"; break;
						case 37:echo "Thirty-Seventh"; break;
						case 38:echo "Thirty-Eighth"; break;
						case 39:echo "Thirty-Ninth"; break;
						case 40:echo "Fortieth"; break;
			
		} ?>" value="1"> <?php echo $row['A']; ?><br><br>
		
		<input type="radio" name="<?php switch ($sorusayac){

						case 1: echo "first"; break;
						case 2: echo "second"; break; 
						case 3: echo "third"; break;
						case 4: echo "fourth"; break;
						case 5:	echo "fifth"; break;
						case 6:	echo "sixth"; break;
						case 7:	echo "seventh"; break;
						case 8:	echo "eighth"; break;
						case 9:	echo "ninth"; break;
						case 10:echo "tenth"; break;
						case 11:echo "Eleventh"; break;
						case 12:echo "Twelfth"; break; 
						case 13:echo "Thirteenth"; break;
						case 14:echo "Fourteenth"; break;
						case 15:echo "Fifteenth"; break;
						case 16:echo "Sixteenth"; break;
						case 17:echo "Seventeenth"; break;
						case 18:echo "Eighteenth"; break;
						case 19:echo "Nineteenth"; break;
						case 20:echo "Twentieth"; break;
						case 21:echo "Twenty-First"; break;
						case 22:echo "Twenty-Second"; break; 
						case 23:echo "Twenty-Third"; break;
						case 24:echo "Twenty-Fourth"; break;
						case 25:echo "Twenty-Fifth"; break;
						case 26:echo "Twenty-Sixth"; break;
						case 27:echo "Twenty-Seventh"; break;
						case 28:echo "Twenty-Eighth"; break;
						case 29:echo "Twenty-Ninth"; break;
						case 30:echo "Thirtieth"; break;
						case 31:echo "Thirty-First"; break;
						case 32:echo "Thirty-Second"; break; 
						case 33:echo "Thirty-Third"; break;
						case 34:echo "Thirty-Fourth"; break;
						case 35:echo "Thirty-Fifth"; break;
						case 36:echo "Thirty-Sixth"; break;
						case 37:echo "Thirty-Seventh"; break;
						case 38:echo "Thirty-Eighth"; break;
						case 39:echo "Thirty-Ninth"; break;
						case 40:echo "Fortieth"; break;	
			
		} ?>" value="2"> <?php echo $row['B']; ?><br><br>
		
		<input type="radio" name="<?php switch ($sorusayac){

						case 1: echo "first"; break;
						case 2: echo "second"; break; 
						case 3: echo "third"; break;
						case 4: echo "fourth"; break;
						case 5:	echo "fifth"; break;
						case 6:	echo "sixth"; break;
						case 7:	echo "seventh"; break;
						case 8:	echo "eighth"; break;
						case 9:	echo "ninth"; break;
						case 10:echo "tenth"; break;
						case 11:echo "Eleventh"; break;
						case 12:echo "Twelfth"; break; 
						case 13:echo "Thirteenth"; break;
						case 14:echo "Fourteenth"; break;
						case 15:echo "Fifteenth"; break;
						case 16:echo "Sixteenth"; break;
						case 17:echo "Seventeenth"; break;
						case 18:echo "Eighteenth"; break;
						case 19:echo "Nineteenth"; break;
						case 20:echo "Twentieth"; break;
						case 21:echo "Twenty-First"; break;
						case 22:echo "Twenty-Second"; break; 
						case 23:echo "Twenty-Third"; break;
						case 24:echo "Twenty-Fourth"; break;
						case 25:echo "Twenty-Fifth"; break;
						case 26:echo "Twenty-Sixth"; break;
						case 27:echo "Twenty-Seventh"; break;
						case 28:echo "Twenty-Eighth"; break;
						case 29:echo "Twenty-Ninth"; break;
						case 30:echo "Thirtieth"; break;
						case 31:echo "Thirty-First"; break;
						case 32:echo "Thirty-Second"; break; 
						case 33:echo "Thirty-Third"; break;
						case 34:echo "Thirty-Fourth"; break;
						case 35:echo "Thirty-Fifth"; break;
						case 36:echo "Thirty-Sixth"; break;
						case 37:echo "Thirty-Seventh"; break;
						case 38:echo "Thirty-Eighth"; break;
						case 39:echo "Thirty-Ninth"; break;
						case 40:echo "Fortieth"; break;		
			
		} ?>" value="3"> <?php echo $row['C']; ?><br><br>
		
		<input type="radio" name="<?php switch ($sorusayac){

						case 1: echo "first"; break;
						case 2: echo "second"; break; 
						case 3: echo "third"; break;
						case 4: echo "fourth"; break;
						case 5:	echo "fifth"; break;
						case 6:	echo "sixth"; break;
						case 7:	echo "seventh"; break;
						case 8:	echo "eighth"; break;
						case 9:	echo "ninth"; break;
						case 10:echo "tenth"; break;
						case 11:echo "Eleventh"; break;
						case 12:echo "Twelfth"; break; 
						case 13:echo "Thirteenth"; break;
						case 14:echo "Fourteenth"; break;
						case 15:echo "Fifteenth"; break;
						case 16:echo "Sixteenth"; break;
						case 17:echo "Seventeenth"; break;
						case 18:echo "Eighteenth"; break;
						case 19:echo "Nineteenth"; break;
						case 20:echo "Twentieth"; break;
						case 21:echo "Twenty-First"; break;
						case 22:echo "Twenty-Second"; break; 
						case 23:echo "Twenty-Third"; break;
						case 24:echo "Twenty-Fourth"; break;
						case 25:echo "Twenty-Fifth"; break;
						case 26:echo "Twenty-Sixth"; break;
						case 27:echo "Twenty-Seventh"; break;
						case 28:echo "Twenty-Eighth"; break;
						case 29:echo "Twenty-Ninth"; break;
						case 30:echo "Thirtieth"; break;
						case 31:echo "Thirty-First"; break;
						case 32:echo "Thirty-Second"; break; 
						case 33:echo "Thirty-Third"; break;
						case 34:echo "Thirty-Fourth"; break;
						case 35:echo "Thirty-Fifth"; break;
						case 36:echo "Thirty-Sixth"; break;
						case 37:echo "Thirty-Seventh"; break;
						case 38:echo "Thirty-Eighth"; break;
						case 39:echo "Thirty-Ninth"; break;
						case 40:echo "Fortieth"; break;	
			
		} ?>" value="4"> <?php echo $row['D']; ?><br><br>
		
		<input type="radio" name="<?php switch ($sorusayac){

						case 1: echo "first"; break;
						case 2: echo "second"; break; 
						case 3: echo "third"; break;
						case 4: echo "fourth"; break;
						case 5:	echo "fifth"; break;
						case 6:	echo "sixth"; break;
						case 7:	echo "seventh"; break;
						case 8:	echo "eighth"; break;
						case 9:	echo "ninth"; break;
						case 10:echo "tenth"; break;
						case 11:echo "Eleventh"; break;
						case 12:echo "Twelfth"; break; 
						case 13:echo "Thirteenth"; break;
						case 14:echo "Fourteenth"; break;
						case 15:echo "Fifteenth"; break;
						case 16:echo "Sixteenth"; break;
						case 17:echo "Seventeenth"; break;
						case 18:echo "Eighteenth"; break;
						case 19:echo "Nineteenth"; break;
						case 20:echo "Twentieth"; break;
						case 21:echo "Twenty-First"; break;
						case 22:echo "Twenty-Second"; break; 
						case 23:echo "Twenty-Third"; break;
						case 24:echo "Twenty-Fourth"; break;
						case 25:echo "Twenty-Fifth"; break;
						case 26:echo "Twenty-Sixth"; break;
						case 27:echo "Twenty-Seventh"; break;
						case 28:echo "Twenty-Eighth"; break;
						case 29:echo "Twenty-Ninth"; break;
						case 30:echo "Thirtieth"; break;
						case 31:echo "Thirty-First"; break;
						case 32:echo "Thirty-Second"; break; 
						case 33:echo "Thirty-Third"; break;
						case 34:echo "Thirty-Fourth"; break;
						case 35:echo "Thirty-Fifth"; break;
						case 36:echo "Thirty-Sixth"; break;
						case 37:echo "Thirty-Seventh"; break;
						case 38:echo "Thirty-Eighth"; break;
						case 39:echo "Thirty-Ninth"; break;
						case 40:echo "Fortieth"; break;	
			
		} ?>" value="5"> <?php echo $row['E']; ?><br><br><br>
		
		<?php if($sayac != 1 ){ ?><a style="color:white;"href="#q<?php echo $sayac - 1; ?>" class="fsNextPrevButton">Geri</a> <?php } ?>
		 <a style="margin-left:17%; color:white;" href="#q<?php echo $sayac + 1; ?>" style="margin-left:<?php if($sayac == 1){ echo "33%"; } else { echo "23%"; } ?>" class="fsReviewButton" 
		onclick="myFunction1('<?php switch ($sorusayac){

						case 1: echo "first"; break;
						case 2: echo "second"; break; 
						case 3: echo "third"; break;
						case 4: echo "fourth"; break;
						case 5:	echo "fifth"; break;
						case 6:	echo "sixth"; break;
						case 7:	echo "seventh"; break;
						case 8:	echo "eighth"; break;
						case 9:	echo "ninth"; break;
						case 10:echo "tenth"; break;
						case 11:echo "Eleventh"; break;
						case 12:echo "Twelfth"; break; 
						case 13:echo "Thirteenth"; break;
						case 14:echo "Fourteenth"; break;
						case 15:echo "Fifteenth"; break;
						case 16:echo "Sixteenth"; break;
						case 17:echo "Seventeenth"; break;
						case 18:echo "Eighteenth"; break;
						case 19:echo "Nineteenth"; break;
						case 20:echo "Twentieth"; break;
						case 21:echo "Twenty-First"; break;
						case 22:echo "Twenty-Second"; break; 
						case 23:echo "Twenty-Third"; break;
						case 24:echo "Twenty-Fourth"; break;
						case 25:echo "Twenty-Fifth"; break;
						case 26:echo "Twenty-Sixth"; break;
						case 27:echo "Twenty-Seventh"; break;
						case 28:echo "Twenty-Eighth"; break;
						case 29:echo "Twenty-Ninth"; break;
						case 30:echo "Thirtieth"; break;
						case 31:echo "Thirty-First"; break;
						case 32:echo "Thirty-Second"; break; 
						case 33:echo "Thirty-Third"; break;
						case 34:echo "Thirty-Fourth"; break;
						case 35:echo "Thirty-Fifth"; break;
						case 36:echo "Thirty-Sixth"; break;
						case 37:echo "Thirty-Seventh"; break;
						case 38:echo "Thirty-Eighth"; break;
						case 39:echo "Thirty-Ninth"; break;
						case 40:echo "Fortieth"; break;	
			
		} ?>');myfun();">İşaretle & İlerle</a>
		
		 <a style="margin-left:20%;color:white;" href="#q<?php echo $sayac + 1; ?>" style="margin-left:<?php if($sayac == 1){ echo "18%"; } else { echo "21%"; } ?>" class="fsPrevNextButton" 
		onclick="myFunction('<?php switch ($sorusayac){

						case 1: echo "first"; break;
						case 2: echo "second"; break; 
						case 3: echo "third"; break;
						case 4: echo "fourth"; break;
						case 5:	echo "fifth"; break;
						case 6:	echo "sixth"; break;
						case 7:	echo "seventh"; break;
						case 8:	echo "eighth"; break;
						case 9:	echo "ninth"; break;
						case 10:echo "tenth"; break;
						case 11:echo "Eleventh"; break;
						case 12:echo "Twelfth"; break; 
						case 13:echo "Thirteenth"; break;
						case 14:echo "Fourteenth"; break;
						case 15:echo "Fifteenth"; break;
						case 16:echo "Sixteenth"; break;
						case 17:echo "Seventeenth"; break;
						case 18:echo "Eighteenth"; break;
						case 19:echo "Nineteenth"; break;
						case 20:echo "Twentieth"; break;
						case 21:echo "Twenty-First"; break;
						case 22:echo "Twenty-Second"; break; 
						case 23:echo "Twenty-Third"; break;
						case 24:echo "Twenty-Fourth"; break;
						case 25:echo "Twenty-Fifth"; break;
						case 26:echo "Twenty-Sixth"; break;
						case 27:echo "Twenty-Seventh"; break;
						case 28:echo "Twenty-Eighth"; break;
						case 29:echo "Twenty-Ninth"; break;
						case 30:echo "Thirtieth"; break;
						case 31:echo "Thirty-First"; break;
						case 32:echo "Thirty-Second"; break; 
						case 33:echo "Thirty-Third"; break;
						case 34:echo "Thirty-Fourth"; break;
						case 35:echo "Thirty-Fifth"; break;
						case 36:echo "Thirty-Sixth"; break;
						case 37:echo "Thirty-Seventh"; break;
						case 38:echo "Thirty-Eighth"; break;
						case 39:echo "Thirty-Ninth"; break;
						case 40: echo '<div style="margin-left:37%"><input type="submit" name="submit" value="Kaydet"class="fsPrevNextButton ></div>'; break;
			
		} ?>');myfun()"><?php if($sorusayac !=40){ echo "İleri"; } ?></a><br><br><br><br><br><br><br><br><br></h3>
		 </div>
		
		<?php }} ?>
		
		
		
		
		
		
		
	
		 </form>
		 
		 
		  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body ">
                <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                
                <div class="px-4 py-5">

                    <h5 class="text-uppercase">Sayın Kullanıcı</h5>



                <h4 class="mt-5 theme-color mb-5">Soru Raporu İçin Teşekkürler</h4>

                <span class="theme-color">İOOLES.COM EKİBİ</span>
                <div class="mb-3">
                    <hr class="new1">
                </div>

                



                                  

                </div>


            </div>
        </div>
    </div>
</div>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  

		 
		 <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		 <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
		    <script type='text/javascript' src='js/zaman.js'></script>
<script>
function gizleGoster(ID) {
  var secilenID = document.getElementById(ID);
  if (secilenID.style.display == "none") {
    secilenID.style.display = "";
  } else {
    secilenID.style.display = "none";
  }
}
</script>
		 
		 
	</body>
</html>
