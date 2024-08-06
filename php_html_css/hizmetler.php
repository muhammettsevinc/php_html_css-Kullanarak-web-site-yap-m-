<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    
    <title>Hizmetler</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
          *{
    margin: 0;
    padding: 0;
}

*{
    margin: 0;
    padding: 0;
}





.navbar{
    width: 100%;
    height: 86px;
    background-color: rgb(145, 145, 241);
 
          
  
          
       

            

   
  
}

.navbar.logo{
    display: inline-block;
    margin-left: 50px;
    margin-top: 20px;
   
    


  


    
   
   
}
.logo a img{
    text-decoration: none;
    font-size: 30px;
    font-family: sans-serif;
    color: aliceblue;
    
    
}
.navbar ul{
    float:right;
    margin-right: 20px;

}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin:0 8px;
    line-height: 80px;
 
}

.navbar ul li a{
    color: white;
    text-decoration: none;
    font-size: 20px;
    padding: 6px 13px;
    font-family:Roboto;
    
    
}
.navbar ul li a.active,
.navbar ul li a:hover{
    background:#ff6e00;
    border-radius: 5px;
}

    
.center{
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%,-50%);
    user-select: none;
}
.center h1{
    color: black;
    font-size: 70px;
    font-weight: bold;
    width: 900px;
    text-align: center;
}



.center h2{
    color: white;
    font-size: 50px;
    font-weight: bold;
    width: 885px;
    text-align: center;
}
.buttons{
    margin: 35px, 280px;
    font-weight: bold;
    position: absolute;
    top: 150%;
    left: 50%;
    transform: translate(-50%,-50%);
    user-select: none;

}
   

.buttons button{
    height: 50px;
    width: 150px;
    font-size: 18px;
    font-weight: bold;
    color: #ffb3b3;
    background:rgba(245, 53, 5, 0.823);
    border: solid 1px red;
    cursor: pointer;
    outline: none;
    border-radius: 25px;
    transition: 3s;

    
   

}
.buttons button:hover{
    background:#fff;
}
.service{
    background-color: #01101d;
}
.top3{
    margin-block-start: 40px;
    gap: 30px;
}
.top8{
    background-color: #04191f;
    border: 1px solidn #1b3034;
    padding: 40px 30px 40px 40px;
    border-radius: 12px;
    transition: all.5s ease;
}
.top8:hover{
    background-color: #004d41;
}
.icon i{
    color: white;
    font-size: 60px;
    padding: 15px 10px 0px 0px;

}
.top10{
    margin-block-start: 20px;
    display: block;
    flex-direction: column;
    gap: 10px;
}
.top5{
    text-transform:uppercase;
    color: white;
    font-size: 20px;

}
.top11{
    color: white;
    margin-block-end: 20px;
}
.grup{
    background-color: #01101d;
}
.top20{
    text-align: center;
    color: white;
    font-size: 20px;
    text-transform: uppercase;
}


    
    </style>
</head>
<body>
    <div class="grup">
        <div class="navbar">
       <ul>
       
            <li><a href="index.php" >Ana sayfa</a></li>
           <li><a href="hakkımızda.php" >Hakkımızda</a></li>
           <li><a href="hizmetler.php" class="active">Hizmetler</a></li>
           
           <li><a href="iletişim.php">İletişim</a></li> 
       </ul>
       </div>
       <section class="section service" id="service">
        <div class="top3">
            <div class="top4">
                <h3 class="top20">HİZMETLERİMİZ</h3>
            </div>
            <ul class="top6">
                <li class="top7">
                    <div class="top8">
                    <div class="icon">
                        <i class="fa-solid fa-brush"></i>


                    </div>
                    <div class="top10">
                        <h3 class="top5">İÇ BOYA</h3>
                        <p class="top11">Sevinç Yapı dekorasyon hizmetinden yapılan uygulamalarda kullanılan Sevinç Yapı Dekorasyon iç cephe ürünleri ve yapılan iç cephe boya uygulamaları 2 yıl Sevinç Yapı Dekorasyon garantisi altındadır.</p>
                    </div>
                 </div>
                  
                </li>
                <li class="top7">
                    <div class="top8">
                    <div class="icon">
                        <i class="fa-solid fa-paint-roller"></i>


                    </div>
                    <div class="top10">
                        <h3 class="top5">DIŞ BOYA</h3>
                        <p class="top11">Sevinç Yapı Dekorasyon hizmetinden yapılan uygulamalarda kullanılan Sevinç Yapı Dekorasyon dış cephe ürünleri ve yapılan dış cephe boya uygulamaları 2 yıl Sevinç Yapı Dekorasyon garantisi altındadır.</p>
                    </div>
                 </div>
                  
                </li>
                <li class="top7">
                    
                   
                    <div class="top8">
                    <div class="icon">
                        <i class="fa-solid fa-building-shield"></i>
                    

                    </div>
                    <div class="top10">
                        <h3 class="top5">ISI YALITIM</h3>
                        <p class="top11">Farklı sıcaklıktaki iki ortam (dış ortam havası – konut iç havası) arasındaki ısı geçişini azaltmak için yapılan işlemlere ısı yalıtımı denir. Isı yalıtımı binanın tamamında uygulanabileceği gibi, bölgesel olarak duvar, çatı, pencere, tavan, döşeme ve çatı gibi yüzeylerde uygulanabilir.</p>
                    </div>
                 </div>
                  
                </li>
                <li class="top7">
                    <div class="top8">
                    <div class="icon">
                        <i class="fa-solid fa-screwdriver-wrench"></i>


                    </div>
                    <div class="top10">
                        <h3 class="top5">TAMİRAT</h3>
                        <p class="top11"> Tamirat  ve dekorasyon işlemleri geciktirilmeden yapılması gereken işlerden olmaktadır. Yapıdaki sorunlar ve deforme olan alanlar en acil şekilde onarılmazsa sorunlar giderek büyüyecek ve içinden çıkılmaz bir hal alacaktır. Yapıya uygulanacak olan bakımlar ve tamirat işlemleri hem yaşamsal kaliteyi arttıracak hem de yapının değerini oldukça yükseğe çıkartacaktır.</p>
                    </div>
                 </div>
                  
                </li>
                <li class="top7">
                    <div class="top8">
                    <div class="icon">
                        <i class="fa-solid fa-rug"></i>

                    </div>
                    
                    <div class="top10">
                        <h3 class="top5">DUVAR KAĞIDI</h3>
                        <p class="top11">Duvar kağıtlarının yapılacağı mekanda duvarlara ve tavana ait tadilat işlemlerinin ve ayrıca tavan boyası, yağlı boya ve kartonpiyer uygulamalarının bitirilmiş olmasına dikkat edilmelidir. Masif parke uygulaması öncelikle yapılmalıdır</p>
                    </div>
                 
                  </div>
                </li>
                <li class="top7">
                    <div class="top8">
                    <div class="icon">
                        <i class="fa-solid fa-house"></i>
                    </div>

                    
                    <div class="top10">
                        <h3 class="top5">İZOLASYON</h3>
                        <p class="top11">Binaları belli başlı olumsuz şartlardan korumaya yardımcı olan yapım tekniklerine izolasyon denir. İzolasyonun bir diğer adı ise tecrit olarak bilinir. Yapıların özellikle içlerinden dışarıya veya dışlarından içeriye doğru gerçekleşen kayıpları engellemek için yaygın olarak kullanılan bir bariyer işlemidir.  İzolasyon sayesinde ses, ısı, yangın, tesisat ve su sorunları artık bir sorun olmaktan çıkar.</p>
                    </div>
                 </div>
                  
                </li>
            </ul>
        </div>
       </section>
       </div>
</body>
</html>