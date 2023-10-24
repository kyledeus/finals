<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="styles.css">
    <title>Profile</title>
</head>

<body>
    <header>
        <main class="group">
            <nav>
                <ul>
                    <a href="login.php"></a>
                    <a href="index.php"><li>Kyle's Profile</li></a>
                    <a href="index2.php"><li>Miles's Profile</li></a>                   
                </ul>
            </nav>
            <main class="nav-bottom">
                <main class="nav-bot-con"></main>
            </main>
        </main>
    </header>

    <section>
        <?php 
            session_start(); 

            if (!isset($_SESSION['username'])) {
                $_SESSION['msg'] = "You must log in first";
                header('location: login.php');
            }
            if (isset($_GET['logout'])) {
                session_destroy();
                unset($_SESSION['username']);
                header("location: login.php");
            }
        ?>

        

        <div class="image">
            <img src="https://scontent.fcrk2-2.fna.fbcdn.net/v/t39.30808-6/296806652_5491005924290408_2244989131898335795_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFgj1CRPpEmhcDDFKq6acJSUtsEFhNvhPdS2wQWE2-E95mGCp_4yG461NTx4NJLmd3drU2eW7eRuwwIl2J3ce4f&_nc_ohc=NSjRUjuuNUoAX96aWBQ&_nc_ht=scontent.fcrk2-2.fna&oh=00_AfA_qDjzySBjGiPOgE2ere92_b5D1SYp43vCKoOY9xixVQ&oe=65340492" alt="Image">
        </div>

        <div class="content">
            <h2>Profile</h2>
            <span><!-- line here --></span>
            <a style="font-size: large;">Miles D Felician<a><br>
            <a style="font-size: large;">Bio Data<a><br>
            <a style="font-size: small;">He's 22 y/o born in November 16 2000<a><br>
            <a style="font-size: small;">My pronouns are he/him<a><br>
            <a style="font-size: small;">From Purok 1, Pakul, Jaen, Nueva Ecija<a><br>
            <a style="font-size: small;">3rd year South 2 BSIT student at<a><br>
            <a style="font-size: small;">PHINMA Araullo University South Campus Cabanatuan<a><br>
            <br>
            <a style="font-size: large;">About Miles Feliciano<a><br>
            <a style="font-size: small;">Let me take you on a little journey into my life. In the days of yore, I was a basketball maestro, effortlessly sinking three-pointers, and known for my cheerful and approachable nature. Life was a breeze, and I had this 'que sera, sera' attitude – whatever will be, will be.<a><br>
            <br>
            <a style="font-size: small;">But then, the dreaded COVID-19 pandemic stormed into our world like an uninvited guest at a party. Suddenly, everyone found themselves trapped in their homes, playing the hide-and-seek game with the virus. As for me, I was trying to attend online classes, but the internet connection was more capricious than the weather. Learning was as impossible as trying to squeeze water from a stone, so I took a break.<a><br>
            <br>
            <a style="font-size: small;">I didn't know how long this hiatus would last, but remember, my motto was 'whatever happens, happens.' I didn't dwell on the future's what-ifs.<a><br>
            <br>
            <a style="font-size: small;">Fast forward a year into the pandemic, and life had become a never-ending cycle of sameness. Boredom became my constant companion, and I couldn't help but wonder, 'Is this how it's going to be forever?' The future loomed in my thoughts like a dark cloud.<a><br>
            <br>
            <a style="font-size: small;">Fast forward a year into the pandemic, and life had become a never-ending cycle of sameness. Boredom became my constant companion, and I couldn't help but wonder, 'Is this how it's going to be forever?' The future loomed in my thoughts like a dark cloud.<a><br>
            <br>
            <a style="font-size: small;">But here we are, in the present, and life has regained its thrilling pace. The stress and occasional bouts of nausea remind me that I might stumble, but the thrill of the journey keeps me going. I have new friends who refuse to be stuck in one place, and together, we're racing toward the future. Most importantly, I'm here, alive, and thriving.<a><br>
            <ul class="links">
                <li><a href="gallery.html">Gallery</a></li>
                <div class="vertical-line"></div>
                <li><a href="diary_entry.html">Diary</a></li>
                <div class="vertical-line"></div>
                <li><a href="diary_listing.php">Diary Listing</a></li>
            </ul>

            <iframe width="300" height="200" src="https://www.youtube.com/embed/QVDAWDDMabA?si=uDuJe7Z8aFG_5Zha" frameborder="0"
                allowfullscreen></iframe>

                <audio autopla volume="0.1">
                <source src="mp3\Chocolate.mp3" type="audio/mpeg">
                </audio>

            <ul class="icons">
            </ul>
        </div>
        
    </section>
</body>

</html>
