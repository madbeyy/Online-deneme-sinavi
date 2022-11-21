
//Eğer depolamadaki element değeri var ise.
if (localStorage.getItem('paramElem')) {

//Değeri olan elementin kalan zamanını değişkene ata
var getStorageTime = localStorage.getItem('paramTimer');

  
//Butona tıklama yapmadan depolamada olan değerlerle fonksiyonu çalıştır.
set (getStorageTime, localStorage.getItem('paramElem'))
}

//Buton tıklamasıyla çalışacak fonksiyonu başlat ve butondan parametleri al.
function set (timer, elem) {
  
//Fonksiyon parametresinden istenilen sayac değerini alıyoruz.
var paramTimer    = timer;
  
//Fonksiyon parametresinden elementin idsini alıyoruz.
var paramElem     = document.getElementById(elem);

//Depolamaya paramTimer adıyla istenilen sayac degerini kaydediyoruz.
localStorage.setItem('paramTimer', paramTimer);

//Depolamaya idName adıyla elementin ismini kaydediyoruz.
localStorage.setItem('paramElem', elem);

//Depolamadaki sayac degerini değişkene ata.
var getStorageTime     = localStorage.getItem('paramTimer');

//Depolamadaki Id degerini değişkene ata.
var getStorageIdName   = localStorage.getItem('paramElem');

//Zamanlayıcıyı Başlat.
var setTimer = setInterval(function() {
  
//Her 1 saniyede kontrol et eğer getStorageTime'daki zaman 0'dan küçük veya eşitse
if(getStorageTime <= 0) {

//Zamanlayıcıyı yoket.
clearInterval(setTimer);

//Elementin alınan id ismini düzelt.
paramElem.innerHTML = localStorage.getItem('paramElem');
  
//Elementin idsini tarayıcının depolamasından sil.
localStorage.removeItem('paramElem');
  
//Zamanlayıcının zamanını tarayıcının depolamasından sil.
localStorage.removeItem('paramTimer');
// iyisinden sınavı bitir ustam 
window.location = "timeup.php"; 
//getStorageTime'daki zaman 0'dan büyükse.
} else {

//Depolamadaki sayıyı 1 eksilt.
getStorageTime --;

//Eksilen sayıyı geri tarayıcı depolamasına kaydet.
localStorage.setItem('paramTimer', getStorageTime);

//Geri sayım yapılırken elementin üstünde göster.
paramElem.innerHTML = localStorage.getItem('paramTimer');

  
//getStorageTime'daki zaman 0 olana kadar her saniye devam et.  
}}, 1000);}

