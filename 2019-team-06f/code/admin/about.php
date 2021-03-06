
<?php 
  include('../server.php'); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  }
?>
<!DOCTYPE html>
<html lang="en" class="nojs">
<head>
    <title>TruHawk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="../css/cssreset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/THLogo.ico" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body>
    <header>
        <a id="logo" href="index.php">
        <img src="../img/THLogo.png" alt="THLogo">
        <span>TruHawk</span>
        </a>
			

        <nav>
            <ul>
		<li>
		   <form id="search" action="" value="<?php echo $search; ?>" method="POST">
		     <div class="search-box" id="search-box"> 
		     <input type="text" id="searchbar" name="searchtext" class="search-txt" placeholder="Search for hashtag..."/> 
		     <button type="submit" class="search_btn" name="search_btn"> 
		     <i class="fas fa-search"></i> 
		     </button>
		     </div>
		   </form>
		</li> 
                <li><a href="index.php">Home</a></li>
                <li><a href="admin.php">Admin</a></li>
                <li><a href="#">About</a></li>
                <li><a href="gallery.php">Photo Gallery</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
                  <div class="section-about">
                            <h2>TruHawk</h2>
                    <p> TruHawk is a photosharing free platform for students and faculty to share their hawk life. This website provides a space for students and staff to get engaged with the IIT community.  </p>
                    <p> Truhawk is inspired by Flickr and Instagram.</p>
            </section>
            <section id = "Why?">
                <h2> Our Mission</h2>
                    <p> Our goal as up and coming IT professionals is to provide Illinois Tech with a storage solution for IIT photos while at the same time building our educational skills as students with the university. </p>
            </section>
        

        
            <section id = "How?">
                <h2> How to Get Started?</h2>
                    <ol type = "1">
                            <p>All you need is an email address and once you set up your account, you are free to search photos, find your friends, comment, and start engaging! </p>
                        
                            <p> Start uploading your own photos to share your interesting findings of the day. </p>
                    </ol>
            </section>
        
            <section id = "Who?">
                    <h2> The Team </h2>

                <hr/>

                            <div class="imgContainer">
                                <img class="middle-img" src="../img/hasan.png" height="200" width="200"/>
                                <div class="text-block"> 
                                <h4>Hasan Rizwan</h4>
                                </div>
                            </div>

                            <div class="imgContainer">
                                <img class="middle-img" src="../img/daniel.png" height="200" width="200"/>
                                <div class="text-block"> 
                                <h4>Daniel Kolov</h4>
                                </div>
                            </div>

                            <div class="imgContainer">
                                <img class="middle-img" src="../img/shan.png" height="200" width="200"/>
                                <div class="text-block"> 
                                <h4>Shan Shazad</h4>
                                </div>
                            </div>

                            <div class="imgContainer">
                                <img class="middle-img" src="../img/bhumi.png" height="200" width="200"/>
                                <div class="text-block"> 
                                <h4>Bhumi Patel</h4>
                                </div>
                            </div>

                            <div class="imgContainer">
                                <img class="middle-img" src="../img/jason.jpg" height="200" width="200"/>
                                <div class="text-block"> 
                                <h4> Jason DSouza </h4>
                                </div>
                            </div>


                             <div class="imgContainer">
                                <img class="middle-img" src="../img/sarina.png" height="200" width="200"/>
                                <div class="text-block"> 
                                <h4>Sarina Stoker</h4>
                                </div>
                            </div>


                    
            </section>
        
    </main>

    <footer>
        <img src="../img/THLogo.png" alt="THLogo">
        <span>&copy; 2019 TruHawk </span>
    </footer>

</body>
</html>
