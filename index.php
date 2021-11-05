<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Book recommendation</title>
</head>

<body>

    <section class="menu">
        <header>
            <h1>Book<span class="f-letter">F</span>inder</h1>
        </header>
        <nav>
            <ul>
                <li><a href="#home"> Home page </a></li>
                <li> <a href="#bookfinder"> Book finder </a></li>
                <li> <a href="#feedback">Feedback </a></li>
                <li> <a href="#contact"> Contact me </a></li>
            </ul>
        </nav>
    </section>
    <section id="home" class="welcome-section">

        <div class="welcome-text">
            <h2>Find a book for yourself </h2>
            <a href="#bookfinder" class="btn-bookfinder">Let's try!&nbsp; <i class="fas fa-book-open book"></i></a>
            <p>Choose a genre and website will generate books which you definitely should read</p>

        </div>
    </section>


    <article id="bookfinder">

        <h3>What kind of book do you want to read?</h3>
        <p class="text-bookfinder">Just choose a genre :)</p>

        <form action="index.php#bookfinder" method="POST">

            <select name="genre_id">
                <option value="" disabled selected>Select one</option>
                <option value="fantasy">Fantasy</option>
                <option value="thriller">Thriller</option>


            </select>
            <input type="submit" value="Search" class="submit_input">
        </form>
        <div class="books">

            <?php
 
 function printBooks($select_option,$con){
     
     $kw = mysqli_query($con,"SELECT * FROM books WHERE genre = '$select_option' ");
    
     while( $result = mysqli_fetch_assoc($kw)){
        
        $book_img = "./images/".$result["image"];
         echo  '<div class="proper-book">';
         
         echo '   <p class="book-name">',$result["book_name"],'</p>';
         echo '   <p class="book-author">', $result["author"],'</p>';
         echo  ' <img src=',$book_img, '>';
         echo '   <p class="short-desc">',$result["short_desc"],'</p>';
         echo '   </div>';
     }
 }
 
 
     $con = mysqli_connect("localhost","root","","book-find") or die("Sth went wrong");
     
 
     if(isset($_POST["genre_id"])){
 
         $select_option = $_POST["genre_id"];
         switch($select_option){
             case "fantasy":
                 printBooks($select_option,$con);
             
    
               break;
             case "thriller":
                 printBooks($select_option,$con);
                 break;
             default:
                 echo"DEFAULT";
             break;
         }
 
 
     }
     
     
     ?>
        </div>

    </article>


    <section class="feedback">

        <div class="rate">
            <div class="input-form">
                <p class="text-rate">Rate us!</p>
                <form action="index.php" method="GET">
                    <input type="text" placeholder="Name"><br>
                    <input class="biggertext" type="text" placeholder="Write sth"><br>
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="comments">
                <div class="single-com">
                    <i class="fas fa-user-alt fa-3x"></i>
                    <div class="details">
                        <span class="user-name">Name Of User 28.10.2021</span><br>
                        <p class="user-com"> Your website is great! Your website is great! Your website is great! Your
                            website is great! Your website is great! </p>
                    </div>

                </div>
            </div>
        </div>


    </section>


    <footer id="feedback">
        <div class="footer-info">
            <p class="about-me">About me</p>
            <p class="footer desc">It is a small project to improve my skills in PHP and MySQL. If you want to see more,
                you can reach me in my social media. Links below! </p>
            <div class="socials">
                <i class="fab fa-github icon"></i>
                <i class="fab fa-instagram icon"></i>
                <i class="fab fa-facebook icon"></i>
                <i class="fas fa-envelope-open-text icon"></i>
            </div>

        </div>


    </footer>

</body>

</html>