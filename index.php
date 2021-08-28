<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Book recommendation</title>
</head>
<body>
    
    <section class="menu">
        <header><h1>Book<span class="f-letter">F</span>inder</h1> </header>
        <nav>
            <ul>
                <li>Home page</li>
                <li>Book finder</li>
                <li>Feedback</li>
                <li>Contact me</li>
            </ul>
        </nav>
    </section>
    <section class="welcome-section">
        
        <div class="welcome-text">
            <h2>Find a book for yourself </h2>
            <a href="#bookfinder" class="btn-bookfinder">Let's try!&nbsp; <i class="fas fa-book-open book"></i></a> 
            <p>Choose a genre and website will generate books which you definitely should read</p>
        
        </div>
        </section>

    <article id="bookfinder">
        
       <h3>What kind of book do you want to read?</h3> 
        <p class="text-bookfinder">Just choose a genre :)</p>
        
        <form action="index.php" method="POST">

            <select name="genre_id" >
                <option value="" disabled selected>Select one</option>
                <option value="fantasy">Fantasy</option>
                <option value="thriller">Thriller</option>


            </select>
            <input type="submit" value="Search">
        </form>
        <div class="books">

       
        <div class="proper-book">
            <p class="book-name">Pani Jeziora</p>
            <p class="book-author">Andrzej Sapkowski</p>
            <p class="short-desc">Lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum dolor id nisi gravida vehicula. Maecenas quis justo eget leo tempus condimentum. Suspendisse egestas maximus mi</p>
        </div>
        <div class="proper-book">
            <p class="book-name">Pani Jeziora</p>
            <p class="book-author">Andrzej Sapkowski</p>
            <p class="short-desc">Lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum dolor id nisi gravida vehicula. Maecenas quis justo eget leo tempus condimentum. Suspendisse egestas maximus mi</p>
        </div>
        <div class="proper-book">
            <p class="book-name">Pani Jeziora</p>
            <p class="book-author">Andrzej Sapkowski</p>
            <p class="short-desc">Lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum dolor id nisi gravida vehicula. Maecenas quis justo eget leo tempus condimentum. Suspendisse egestas maximus mi</p>
        </div>
    </div>
    </article>

    <section class="feedback">

        <!-- opinie jakichs ludzi, to na koncu? -->

    </section>


    <footer>
        <div class="footer-info">
        <p class="about-me">About me</p>
        <p class="footer desc">It is a small project to improve my skills in PHP and MySQL. If you want to see more, you can reach me in my social media. Links below! </p>
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