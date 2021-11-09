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
                <li> <a href="#creator"> Creator</a></li>
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


    <section class="create-book">

        <div class="creation-box">

            <div class="creation-form">
                <div class="creation-headers">
                    <h3>Do u wanna add your favourite book?</h3>
                    <span>Do it now!</span>
                </div>

                <div class="creation-formdata">
                <form action="index.php" method="POST">
                    <input type="text" placeholder="Book name" name="book-name"><br>
                    <input type="text" placeholder="Author" name="author"><br>
                    <textarea name="short-desc" placeholder="Short description" id="" rows="5"
                        style="resize: none;"></textarea><br>


                </form>
                </div>
             
            </div>
        </div>
    </section>






    <section class="feedback" id="commentSection">

        <div class="rate">
            <div class="input-form">
                <p class="text-rate">Rate us!</p>
                <form action="index.php#commentSection" method="POST">
                    <label for="name">Name</label><br>
                    <input type="text" autocomplete="OFF" name="name"><br>
                    <label for="comment">Write something</label><br>
                    <textarea rows="4" name="comment" style=" resize: none;"></textarea>
                    <input type="submit" value="Send">
                </form>
                <?php

if(isset($_POST['name'] ) AND isset( $_POST['com']) )
{
    $name = $_POST['name'];
    $com = $_POST['com'];
    $kw_comment = mysqli_query($con, "INSERT INTO users_com VALUES ('', '$name', '$com')");
    header('Location: index.php#commentSection');
}
?>
            </div>
            <div class="comments">
                <?php

    $kw_show_com = mysqli_query($con, "SELECT DISTINCT user_com, user_name FROM users_com order by user_id DESC LIMIT 7");
    while($result2 = mysqli_fetch_assoc($kw_show_com)){

        echo ' <div class="single-com">';
        echo ' <i class="fas fa-user-alt fa-3x"></i> ';
       echo ' <div class="details"> ';
      echo '<span class="user-name">', $result2['user_name'], '</span><br>';
          echo'   <p class="user-com">',$result2['user_com'], '</p>';
      echo ' </div>';

   echo ' </div>';



    }



?>
                <!-- <div class="single-com">
                    <i class="fas fa-user-alt fa-3x"></i>
                    <div class="details">
                        <span class="user-name">Name Of User 28.10.2021</span><br>
                        <p class="user-com"> Your website is great! Your website is great! Your website is great!  </p>
                    </div>

                </div> -->
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