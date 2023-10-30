<?php
            session_start(); // Start the session
?>
<!DOCTYPE html>
<html>
<head>
    <title>Food Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Reset some default styles for the page */
body, h1, h2, ul, li, p {
    margin: 0;
    padding: 0;
}

/* Basic styling for the page */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

header {
    background-color:rgb(243, 243, 250);
    color:rgb(136, 42, 4);
    padding: 10px 0;
    text-align: center;
    
}


header h1 {
    font-size: 50px;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

nav ul {
    list-style: none;
}

nav ul li {
    display: inline;
    margin: 0 10px;
}

nav ul li a {
    text-decoration: none;
    color:rgb(4, 70, 72);
    font-style:normal;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

main {
    max-width: 100%;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.featured-recipe {
    margin-bottom: 30px;
}

.featured-recipe img {
    max-width: 100%;
}

.recent-recipes ul {
    list-style: none;
    display: flex;
    flex-wrap: wrap;
}

.recent-recipes li {
    width: 45%;
    margin: 2.5%;
    background-color: #f9f9f9;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    padding: 10px;
}



footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

.example{
   position:relative;
  height: 500px;
    width: 100%;
    color: white;
    background: linear-gradient(rgba(18, 17, 18, 0.8), rgba(43, 36, 38, 0.8)), url("https://c.ndtvimg.com/2023-07/rmjkg64_indian-food_625x300_25_July_23.jpg?im=FaceCrop,algorithm=dnn,width=1200,height=675"); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background-size: cover;
    background-repeat: no-repeat;
}


.overlay-text{
  text-align:center;
  position: absolute;
  top:50%;
  right:50%;
  transform:translate(50%, -50%);
}
#h1{
    font-family:'Times New Roman', Times, serif;
}
#h2{
    font-family:'Times New Roman', Times, serif;
    font-size: 50px;
}
#s{
    border-radius: 100%;
    width:10%;
}
#s:hover{
  transition: transform 0.3s;
  transform: scale(1.2); 
}
#h3{
    font-family:'Times New Roman', Times, serif;
    font-size: 50px;
}
.html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 30%;
  margin-bottom: 16px;
  padding: 0 20px;
  
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
}

.card:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.1); 
}
.container {
  padding: 0 14px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #e67070;
  text-align: center;
  cursor: pointer;
  width: 100%;
  margin: 0 auto;
}

.button:hover {
  background-color: #555;
}
.c{
    display: none;
}

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

.container2{
            display: flex;
            align-items: center;
        }

        .image {
            flex: 1;
        }

        .text {
            flex: 2;
            padding: 20px;
        }
        #body {
            font-family: 'Brush Script MT', cursive;
            font-size: 50px;
        }
        @font-face {
    font-family: 'CalligraphyFont';
    src: url('path-to-your-font-file.woff2') format('woff2'); /* Replace with the actual font file path */
}

        #body2 {
          font-family: 'CalligraphyFont', cursive, sans-serif;
            font-size: 20px;
        }

  .fa {
  padding: 10px;
  font-size: 10px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;float:right;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
#r{
  float: right;
}
@font-face {
    font-family: 'Lucida Handwriting';
    src: url('path-to-your-font-file.woff2') format('woff2');
}

#bod {
    font-family: 'Lucida Handwriting', sans-serif;
}

.hidden {
            display: none;
        }

 #action-selection {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
        }

.action-text {
            margin: 0 10px;
            cursor: pointer;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
  <header>
    <h1 id="bod"><i>Indian Food</i></h1>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#recipes">Recipes</a></li>
            <li><a href="#about">About</a></li>
            <?php
           
            if (isset($_SESSION['username'])) {
                echo '<li class="dropdown">';
                echo '    <a href="javascript:void(0)">' . $_SESSION['username'] . '</a>';
                echo '    <div class="dropdown-content">';
                echo '        <a href="logout.php">Logout</a>';
                echo '    </div>';
                echo '</li>';
            } else {
                echo '<li><a href="sigin.php">Register</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>


    
    <section id="home">
        <div class="example">
  <div class="overlay-text">
    <h4 id="h1">"Indian cuisine is a symphony of flavors, a burst of colors, and a celebration of spices that dance on your taste buds."</h4>
    <h1 id="h2">Welcome to Indian Tradition Food</h1>
  </div>
</div></section>
<br>
<section id="recipes">
    &emsp;&emsp;&emsp;&emsp;
    <img id="s" src="https://s3-ap-south-1.amazonaws.com/betterbutterbucket-silver/divya-jain1120181209215834493.jpeg" onclick="toggleInformation('category1')"/>&emsp;&emsp;
    <img id="s" src="https://thumbs.dreamstime.com/b/indian-curry-dishes-17901001.jpg" onclick="toggleInformation('category2')"/>&emsp;&emsp;
    <img id="s" src="https://i0.wp.com/theyellowdaal.com/wp-content/uploads/2020/11/photoart.collagemaker.picgrid.edit_.photoframe_2020118232437766-1.png?fit=1024%2C1024&ssl=1" onclick="toggleInformation('category3')"/>&emsp;&emsp;
    <img id="s" src="https://www.licious.in/blog/wp-content/uploads/2020/12/Hyderabadi-chicken-Biryani.jpg" onclick="toggleInformation('category4')"/>&emsp;&emsp;
    <img id="s" src="https://summeryule.com/wp-content/uploads/2021/11/air-fryer-indian-recipes.jpeg" onclick="toggleInformation('category5')"/>&emsp;&emsp;
    <img id="s" src="https://i.ytimg.com/vi/9Y1nlsZ-4UA/hqdefault.jpg" height="130px" onclick="toggleInformation('category6')"/>&emsp;&emsp;
    <img id="s" src="https://www.sharmispassions.com/wp-content/uploads/2021/10/DIWALISNACKSFINAL1-500x500.jpg" onclick="toggleInformation('category7')"/>&emsp;&emsp;
    
    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Tiffins&emsp;&emsp;&emsp;&emsp;&emsp;Non-Veg curries&emsp;&emsp;&emsp;&emsp;Veg-Curries
        &emsp;&emsp;&emsp;&emsp;&emsp;Biryani&emsp;&emsp;&emsp;&emsp;&emsp;Non-Veg Starters&emsp;&emsp;&emsp;&emsp;Veg-Starters
        &emsp;&emsp;&emsp;&emsp;South Indian Snacks 
        
    </p>
    <br>
    <div class="c" id="category1">
        <h2>Tiffins</h2>
        <br>
        <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="https://curlytales.com/wp-content/uploads/2019/09/8-1.jpg">
                <img src="https://curlytales.com/wp-content/uploads/2019/09/8-1.jpg" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">Dosa</div>
            </div>
          </div>
          
          
          <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="https://5.imimg.com/data5/SELLER/Default/2022/9/TL/TU/BY/153205756/idli-500x500.png">
                <img src="https://5.imimg.com/data5/SELLER/Default/2022/9/TL/TU/BY/153205756/idli-500x500.png" alt="Forest" width="600" height="400">
              </a>
              <div class="desc">Idli</div><br>
            </div>
          </div>
          
          <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="https://as1.ftcdn.net/v2/jpg/04/23/21/56/1000_F_423215670_BeoTGC0pg0bI1z1OOViVZWidFDCNj16k.jpg">
                <img src="https://as1.ftcdn.net/v2/jpg/04/23/21/56/1000_F_423215670_BeoTGC0pg0bI1z1OOViVZWidFDCNj16k.jpg" alt="Northern Lights" width="600" height="400">
              </a>
              <div class="desc">Vada</div>
            </div>
          </div>
          
          <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="https://www.indianhealthyrecipes.com/wp-content/uploads/2020/12/poori-puri-recipe-500x375.jpg">
                <img src="https://www.indianhealthyrecipes.com/wp-content/uploads/2020/12/poori-puri-recipe-500x375.jpg" alt="Mountains" width="600" height="400">
              </a>
              <div class="desc">Poori</div>
            </div>
          </div>
          
          <div class="clearfix"></div>
    </div>
    <div class="c" id="category2">
        <h2>Non-veg Curries</h2><br>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://paattiskitchen.com/wp-content/uploads/2023/01/kmc_20230111_194214-1024x576.jpg">
              <img src="https://paattiskitchen.com/wp-content/uploads/2023/01/kmc_20230111_194214-1024x576.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Chicken Curry</div>
          </div>
        </div>
        
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://www.cubesnjuliennes.com/wp-content/uploads/2019/11/Mutton-Curry-500x500.jpg">
              <img src="https://recipesplaza.com/wp-content/uploads/2022/08/Mutton-Masala-min-750x500.jpg?ezimgfmt=rs:379x253/rscb1/ngcb1/notWebP" alt="Forest" width="500" height="500">
            </a>
            <div class="desc">Mutton Curry</div>
          </div>
        </div>
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://www.nestleprofessional.in/sites/default/files/2022-08/Alleppey-Fish-Curry-756x471.jpg">
              <img src="https://www.nestleprofessional.in/sites/default/files/2022-08/Alleppey-Fish-Curry-756x471.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Fish Curry</div>
          </div>
        </div>
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://vismaifood.com/storage/app/uploads/public/8c6/190/485/thumb__700_0_0_0_auto.jpg">
              <img src="https://vismaifood.com/storage/app/uploads/public/8c6/190/485/thumb__700_0_0_0_auto.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Prawn Curry</div>
          </div>
        </div>
        
        <div class="clearfix"></div>
    </div>
    <div class="c" id="category3">
        <h2>Veg Curries</h2>
        <br>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://images.immediate.co.uk/production/volatile/sites/30/2018/04/Roasted_aloo_gobi-a6671e9-scaled.jpg?quality=90&resize=556,505">
              <img src="https://www.spiceupthecurry.com/wp-content/uploads/2013/12/chana-palak-1.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Chana palak Curry</div>
          </div>
        </div>
        
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://www.indianhealthyrecipes.com/wp-content/uploads/2014/11/paneer-butter-masala-recipe-2.jpg">
              <img src="https://www.spiceupthecurry.com/wp-content/uploads/2021/08/methi-matar-malai-1.jpg" alt="Forest" width="500" height="500">
            </a>
            <div class="desc">Methi-matar-malai</div>
          </div>
        </div>
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://www.archanaskitchen.com/images/archanaskitchen/1-Author/KarthikaKrishnan/Udupi_Style_Bende_Kayi_palya_Ladies_finger_Dry_With_Coconut_400.jpg">
              <img src="https://www.spiceupthecurry.com/wp-content/uploads/2022/03/dahi-bhindi-1.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Dahi-bhindi</div>
          </div>
        </div>
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://images.tv9telugu.com/wp-content/uploads/2021/04/curry.jpg">
              <img src="https://www.spiceupthecurry.com/wp-content/uploads/2021/07/aloo-puri-1.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc"> Aloo puri </div>
          </div>
        </div>
        
        <div class="clearfix"></div>
    </div>
    <div class="c" id="category4">
        <h2>Biryani's</h2>
        <br>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://www.licious.in/blog/wp-content/uploads/2022/06/chicken-hyderabadi-biryani-01.jpg">
              <img src="https://hungryforever.net/wp-content/uploads/2017/11/chicken-biryani.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Chicken Biryani</div>
          </div>
        </div>
        
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://t2p.fra1.digitaloceanspaces.com/1675419325823q3m6a.jpeg">
              <img src="https://t2p.fra1.digitaloceanspaces.com/1675419325823q3m6a.jpeg" alt="Forest" width="500" height="500">
            </a>
            <div class="desc">Chicken Fry-Piece Biryani</div>
          </div>
        </div>
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://i.ytimg.com/vi/s4YsKuoYTe8/maxresdefault.jpg">
              <img src="https://hungryforever.net/wp-content/uploads/2017/11/mutton-biryani.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Mutton Biryani</div>
          </div>
        </div>
        
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://desertfoodfeed.com/wp-content/uploads/2020/07/fish-biryani3-1-e1594796197483.jpg">
              <img src="https://hungryforever.net/wp-content/uploads/2017/11/Fish-Biryani.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Fish Biryani</div>
          </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="c" id="category5">
        <h2>Non-Veg Starters</h2><br>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://sulthansbiriyani.in/wp-content/uploads/2021/04/Chicken-Majestic-Delicious-Indian-Non-Veg-Starters.jpg">
              <img src="https://sulthansbiriyani.in/wp-content/uploads/2021/04/Chicken-Majestic-Delicious-Indian-Non-Veg-Starters.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Chicken Majestic</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://sulthansbiriyani.in/wp-content/uploads/2021/04/Chicken-Patties-Delicious-Indian-Non-Veg-Starters.jpg">
              <img src="https://sulthansbiriyani.in/wp-content/uploads/2021/04/Chicken-Patties-Delicious-Indian-Non-Veg-Starters.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Chicken Patties</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://sulthansbiriyani.in/wp-content/uploads/2021/04/chicken-spring-rolls-Delicious-Indian-Non-Veg-Starters.jpg">
              <img src="https://sulthansbiriyani.in/wp-content/uploads/2021/04/chicken-spring-rolls-Delicious-Indian-Non-Veg-Starters.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Chicken Spring Rolls</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://sulthansbiriyani.in/wp-content/uploads/2021/04/Chilli-Prawns-Delicious-Indian-Non-Veg-Starters.jpg">
              <img src="https://sulthansbiriyani.in/wp-content/uploads/2021/04/Chilli-Prawns-Delicious-Indian-Non-Veg-Starters.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Chilli Prawns</div>
          </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="c" id="category6">
        <h2>Veg-Starters</h2>
        <br>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://www.sanjanafeasts.co.uk/wp-content/uploads/2023/07/Paneer-Tikka-Kebabs-on-a-platter-with-fresh-naan-bread-720x720.jpg">
              <img src="https://www.vegrecipesofindia.com/wp-content/uploads/2016/08/aloo-tikki-recipe-3a.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Aloo Tikka</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://www.vegrecipesofindia.com/wp-content/uploads/2013/11/dahi-vada-recipe-90.jpg">
              <img src="https://www.vegrecipesofindia.com/wp-content/uploads/2013/11/dahi-vada-recipe-90.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Dahi Ke Kabab</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://www.vegrecipesofindia.com/wp-content/uploads/2009/08/veg-cutlet-recipe-2.jpg">
              <img src="https://www.vegrecipesofindia.com/wp-content/uploads/2009/08/veg-cutlet-recipe-2.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Veg Cutlet</div>
          </div>
        </div>
        <div class="responsive">
          <div class="gallery">
            <a target="_blank" href="https://www.vegrecipesofindia.com/wp-content/uploads/2017/03/hara-bhara-kabab-2a.jpg">
              <img src="https://www.vegrecipesofindia.com/wp-content/uploads/2017/03/hara-bhara-kabab-2a.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Hara Bhara Kabab</div>
          </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="c" id="category7">
      <h2>South Indian Snacks</h2>
      <br>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="https://www.godavarivantillu.com/cdn/shop/products/product-500x500-removebg-preview_305x.png?v=1594670301">
            <img src="https://www.godavarivantillu.com/cdn/shop/products/product-500x500-removebg-preview_305x.png?v=1594670301" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Janthukalu</div>
        </div>
      </div>
      
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="https://www.godavarivantillu.com/cdn/shop/products/dry-fruit-pootharekulu-839_720x.jpg?v=1638883323">
            <img src="https://www.godavarivantillu.com/cdn/shop/products/dry-fruit-pootharekulu-839_720x.jpg?v=1638883323" alt="Forest" width="500" height="500">
          </a>
          <div class="desc">Dry fruit pootharekulu</div>
        </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="https://www.godavarivantillu.com/cdn/shop/products/bellam-gavvalu-original-godavari-recipe-445_720x.png?v=1638882730">
            <img src="https://www.godavarivantillu.com/cdn/shop/products/bellam-gavvalu-original-godavari-recipe-445_720x.png?v=1638882730" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Bellam Gavvalu</div>
        </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="https://www.godavarivantillu.com/cdn/shop/products/KaramGavvalu_HotGavvalu_305x.png?v=1604850541">
            <img src="https://www.godavarivantillu.com/cdn/shop/products/KaramGavvalu_HotGavvalu_305x.png?v=1604850541" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc">Karam Gavvalu</div>
        </div>
      </div>
      <div class="clearfix"></div>
  </div>
    </div>
    <br><br>
<center>
    <h1 id="h1">OUR POPULAR DISHES</h1></center>
    <br>
    
    <div class="html">
        <div class="row">
            
          <div class="column">
            <div class="card">
              <img src="https://res.cloudinary.com/rainforest-cruises/images/c_fill,g_auto/f_auto,q_auto/w_1120,h_732,c_fill,g_auto/v1661347434/india-food-chicken-pakora/india-food-chicken-pakora-1120x732.jpg" alt="Jane" style="width:100%">
              <div class="container">
                <h2>Pakora</h2>
                <p class="title">#1 Popular Food</p>
                <p>Pakora is a savory, deep-fried Indian snack made with chunks of vegetables such as potato, cauliflower and eggplant, or meat of choice, which is then dipped in chickpea flour, seasoned with turmeric, salt, chili, or other spices, and deep-fried in ghee.</p>
                <br><br>
                <p><button class="button">Read More</button></p>
              </div>
            </div>
          </div>
        
          <div class="column">
            <div class="card">
              <img src="https://res.cloudinary.com/rainforest-cruises/images/c_fill,g_auto/f_auto,q_auto/w_1120,h_732,c_fill,g_auto/v1661347465/india-food-aloo-chaat/india-food-aloo-chaat-1120x732.jpg" alt="Mike" style="width:100%">
              <div class="container">
                <h2>Chat</h2>
                <p class="title">#2 Popular Food</p>
                <p>The name chaat encompasses a wide variety of Indian street foods, snacks, or small meals which usually combine salty, spicy, sweet, and sour flavors. They are usually small, consumed on their own as a snack, or combined with other dishes to form a big meal.</p>
                <br>
                <p><button class="button">Read More</button></p>
              </div>
            </div>
          </div>
          
          <div class="column">
            <div class="card">
              <img src="https://res.cloudinary.com/rainforest-cruises/images/c_fill,g_auto/f_auto,q_auto/w_1120,h_732,c_fill,g_auto/v1661347356/india-food-vada-pav/india-food-vada-pav-1120x732.jpg" alt="John" style="width:100%">
              <div class="container">
                <h2>Vada Pav</h2>
                <p class="title">#3 Popular Food</p>
                <p>Vada Pav is a favorite sandwich-style snack from Mumbai, named after its ingredients: vada, or spicy mashed potatoes, which are deep-fried in chickpea batter; and pav, or white bread rolls.</p>
                <br><br><br>
                <p><button class="button">Read More</button></p>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
            <div class="column">
              <div class="card">
                <img src="https://res.cloudinary.com/rainforest-cruises/images/c_fill,g_auto/f_auto,q_auto/w_1120,h_732,c_fill,g_auto/v1661347416/india-food-idli/india-food-idli-1120x732.jpg" alt="Jane" style="width:100%">
                <div class="container">
                  <h2>Idli</h2>
                  <p class="title">#4 Popular Food</p>
                  <p>Idli is a traditional, savory Indian cake that is a popular breakfast item in many South Indian households, although it can be found throughout the country. 
                    It is made with a batter consisting of fermented lentils and rice, which is then steamed. </p>
                  <br><br>
                  <p><button class="button">Read More</button></p>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="https://res.cloudinary.com/rainforest-cruises/images/c_fill,g_auto/f_auto,q_auto/w_1120,h_732,c_fill,g_auto/v1661347392/india-food-paratha/india-food-paratha-1120x732.jpg" alt="Mike" style="width:100%">
                <div class="container">
                  <h2>Parotta</h2>
                  <p class="title">#5 Popular Food</p>
                  <p>Paratha is a flaky, layered, golden-brown Indian bread, which is typically consumed for breakfast. It consists of whole wheat flour that’s baked in ghee, Indian clarified butter, and comes in round, triangular, square, or hexagonal shapes.</p>
                  <br><br>
                  <p><button class="button">Read More</button></p>
                </div>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="https://res.cloudinary.com/rainforest-cruises/images/c_fill,g_auto/f_auto,q_auto/w_1120,h_732,c_fill,g_auto/v1661347396/india-food-naan/india-food-naan-1120x732.jpg" alt="John" style="width:100%">
                <div class="container">
                  <h2>Naan</h2>
                  <p class="title">#6 Popular Food</p>
                  <p>Naan is a well-liked flatbread with a chewy texture. It consists of white flour, yeast, eggs, milk, salt, and sugar, baked in a tandoor oven. Its characteristic tear-drop shape is achieved due to the way that the dough droops as it cooks on the tandoor walls.</p>
                  <br>
                  <p><button class="button">Read More</button></p>
                </div>
              </div>
            </div>
          </div>
        <div>
</section>
<section id="about">
  
    <h2 id="body"><center>About us</center></h2><br>
    <div class="container2">
      <div class="image">
          <img src="https://st2.depositphotos.com/3591429/10464/i/450/depositphotos_104648666-stock-photo-group-of-people-brainstorming-on.jpg" width="600" height="400" alt="Image">
      </div>
      <div class="text">
         <p id="body2" >"Indian food is a testament to the greatness of culinary diversity, a rich tapestry of flavors, and a fusion of traditions that have delighted taste buds for centuries. It's a celebration of the country's vibrant culture, a reflection of its history, and a treasure trove of unique regional delicacies. With immense pride, I, Sowndaryavathi Cherukuri, welcome you to my blog, where I'm thrilled to share the magical world of Indian cuisine. Join me on this gastronomic journey as we explore the incredible dishes, timeless recipes, and the culinary artistry that make Indian food an unparalleled experience."</p> 
         <h3  id="r">Follow us on</h3><br><br>
         <a href="#" class="fa fa-facebook"></a>
         <a href="#" class="fa fa-linkedin"></a>
         <a href="#" class="fa fa-youtube"></a>
         <a href="#" class="fa fa-instagram"></a>
      </div>
  </div>
</section>
<script>
  var currentInfoId = null;

  function toggleInformation(infoId) {
      var information = document.getElementById(infoId);
      if (currentInfoId !== null) {
          var currentInformation = document.getElementById(currentInfoId);
          currentInformation.style.display = "none";
          if (currentInfoId === infoId) {
              currentInfoId = null;
              return;
          }
      }
      information.style.display = "block";
      currentInfoId = infoId;
  }
</script>
    <footer>
        <p>&copy; 2023 Food Blog. All rights reserved.</p>
    </footer>
    <script>
      const registerForm = document.getElementById("register-form");
      const loginForm = document.getElementById("login-form");
      const actionText = document.querySelectorAll(".action-text");

      actionText.forEach((text) => {
          text.addEventListener("click", function() {
              const selectedAction = this.getAttribute("data-action");

              if (selectedAction === "register") {
                  registerForm.classList.remove("hidden");
                  loginForm.classList.add("hidden");
              } else if (selectedAction === "login") {
                  loginForm.classList.remove("hidden");
                  registerForm.classList.add("hidden");
              }
          });
      });
  </script>
    

</body>
</html>
