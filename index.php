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
            <h1><a href="#home">Book<span class="f-letter">F</span>inder</a></h1>
        </header>
        <nav>
            <ul>
                <li><a href="#home"> Home page </a></li>
                <li> <a href="#bookfinder"> Book finder </a></li>
                <li> <a href="#book-creation"> Creator</a></li>
                <li> <a href="#commentSection">Feedback </a></li>
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

    <section class="create-book" id="book-creation">
        <img src="./images/peoplewithbooks.jpg" alt="">
        <div class="bookcreator">

            <div class="bookcreator-text">
                <h3>Do u wanna add your favourite book?</h3>
                <span>Do it now!</span>
            </div>


            <div class="bookcreator-form">
                <form enctype="multipart/form-data" action="index.php" method="POST">
                    <input type="text" placeholder="Book name" name="book-name"><br>
                    <input type="text" placeholder="Author" name="author"><br>
                    <input type="text" placeholder="Genre" name="genre"><br>
                    <textarea name="short-desc" placeholder="Short description" id="" rows="5"
                        style="resize: none;"></textarea><br>
                    <input type="hidden" name="MAX_FILE_SIZE" value="512000">
                    <input type="file" class="fileinput" name="obrazek" value="Choose a file">
                    <input type="submit" name="wyslijmnie" value="Send me">

                </form>
            </div>
        </div>
    </section>



    <!-- W zmiennej $_FILES jest tablica z informacjami o przeslanym pliku -->
    <?php


// // wy??wietlanie typu pliku
// echo $_FILES['nazwa_pliku']['type'];

// // wy??wietlanie rozmiaru
// echo $_FILES['nazwa_pliku']['size'];

// // wy??wietlanie nazwy pliku
// echo $_FILES['nazwa_pliku']['name'];

// // wy??wietlanie nazwy tymczasowej
// echo $_FILES['nazwa_pliku']['tmp_name'];

// // wy??wietlanie ewentualnych b????d??w
// echo $_FILES['nazwa_pliku']['error'];

?>




    <?php  // Input z obrazkiem, wrzuca do bazy danych i zapisuje zdjecie na lokalnym dysku.

function form_obrazek()
    {
        $con = mysqli_connect("localhost","root","","book-find") or die("Sth went wrong");
        $book_name = $_POST['book-name'];
        $author = $_POST['author'];
        $short_desc = $_POST['short-desc'];
        $image_name = $_FILES['obrazek']['name'];
        $genre = $_POST['genre'];
        $kw_image_with_form = mysqli_query($con, "INSERT INTO books VALUES ('', '$book_name', '$author', '$short_desc', '$genre', '$image_name')" );
        header('Location: index.php#book-creation');
    }

    
    function sprawdz_bledy(){
        if($_FILES['obrazek']['error'] > 0){
            echo 'problem: ';
            switch ($_FILES['obrazek']['error'])
            {
                case 1:
                    {
                        echo ' Rozmiar pliku jest zbyt du??y';
                        break;
                        // Rozmiar pliku jest wiekszy niz domyslny maksymalny rozmiar
                    }
                case 2:
                    {
                        echo 'Rozmiar pliku jest za duzy';
                        break;
                        // Rozmiar pliku jest wiekszy niz podany przez nas w max file size
                    }
                case 3:
                    {
                        echo ' Plik wyslany tylko czesciowo';
                        break;
                        //plik nie zostal wyslany w calosci
                    }
                case 4:
                    {
                        echo ' Nie wyslano zadnego pliku';
                        break;
                        //plik nie zostal wyslany
                    }
                default:
                {
                    echo'Wystapil blad podczas wysylania';
                    break;
                    // pozostale bledy
                }
            }
            return false;
        }
        return true;
    }

    function sprawdz_typ()
    {
        if($_FILES['obrazek']['type'] != 'image/jpeg')
            return false;
        return true;
    }

    function zapisz_plik()
    {
        $nazwa_pliku = $_FILES['obrazek']['name'];
        $lokalizacja ="./images/$nazwa_pliku";
        if(is_uploaded_file($_FILES['obrazek']['tmp_name']))
        {
            if(!move_uploaded_file($_FILES['obrazek']['tmp_name'], $lokalizacja))
            {
                echo 'problem: Nie udalo sie skopiowac pliku do katalogu';
                    return false;
            }
        }
        else{
            echo" problem, mozliwy atak, nie zostal wyslany plik";
            return false;
        }
    return true;

    }
    
    if(isset($_POST['book-name']) AND isset($_POST['author']) AND isset($_POST['genre']) AND isset($_POST['short-desc']) AND isset($_FILES['obrazek']['name']))
    {

        sprawdz_bledy();
        sprawdz_typ();
        zapisz_plik();
        form_obrazek();

    } 

?>

    <section class="feedback" id="commentSection">

        <div class="rate">
            <div class="input-form">
                <p class="text-rate">Rate us!</p>
                <form action="index.php#commentSection" method="POST">
                    <label for="name">Name</label><br>
                    <input type="text" autocomplete="OFF" name="name"><br>
                    <label for="com">Write something</label><br>
                    <textarea rows="4" name="com" style=" resize: none;"></textarea>
                    <input type="submit" value="Send">
                </form>
                <?php // Skrypt odpowiedzialny za wrzucanie do bazy Imienia oraz komentarza uzytkownika. Rowniez wwyswietla to na stronie

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

    $kw_show_com = mysqli_query($con, "SELECT DISTINCT user_com, user_name FROM users_com order by user_id DESC LIMIT 15");
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
            </div>
        </div>


    </section>


    <footer id="contact">
        <div class="footer-info">
            <p class="about-me">About me</p>
            <p class="footer desc">It is a small project to improve my skills in PHP and MySQL. If you want to see more,
                you can reach me in my social media. Links below! </p>
            <div class="socials">
                <a href="https://github.com/ogrod0707" target=???_blank???> <i class="fab fa-github icon"></i> </a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target=???_blank???> <i
                        class="fab fa-instagram icon"></i> </a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target=???_blank???> <i
                        class="fab fa-facebook icon"></i> </a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target=???_blank???> <i
                        class="fas fa-envelope-open-text icon"></i> </a>
            </div>

        </div>


    </footer>

</body>

</html>