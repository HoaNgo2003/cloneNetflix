<?php
@include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Việt Nam - Xem chương trình truyền hình trực tuyến</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/home.style.css">
</head>

<body>
    <div class="header header-play">
        <div class="header-menu">
            <div class="left-section">
                <img src="images/Logos-Readability-Netflix-logo.png" alt="">
            </div>
            <div class="right-section">
                <div class="language">
                    <i class="fa fa-solid fa-language"></i>
                    <select name="" id="">
                        <option value="">Tiếng Việt</option>
                        <option value="">English</option>
                    </select>
                </div>
                <button  onclick='window.location.href = "homepage.html"'>
                    HomePage
                </button>
            </div>
        </div>
        <div class="header-content">
             
        </div>
    </div>
    <div class="play-container">
        <img src="images/play-background.jpg" class="play-img">
        <div class="play-text">
            <h2>Jumanji: Welcome to the Jungle</h2>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <div class="tags">
                <span>Action</span>
                <span>Adventure</span>
                <span>4K</span>
            </div>
            
        </div>
        <i class="fa-solid fa-arrow-right play-movie play-movie-1"> Xem ngay</i>
        <div class="video-container">
            <div class="video-box">
                 
                <iframe id="video-film" width="560" height="315" src="https://www.youtube.com/embed/TBjKcuGI0kI?si=FTd4TKW6Pi5vnEy7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                
                <i class="fa-solid fa-x close-video"></i>
            </div>
        </div>
    </div>
    <div class="about-movie">
        <h2>Jumanji: Welcome to the Jungle</h2>
        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente doloremque, sequi et minus autem molestias voluptas, libero quae aliquam ipsum ad iure. Doloremque optio necessitatibus est cumque animi! Velit, rem?</p>
        <h2 class="cast-heading">Diễn viên trong phim</h2>
        <div class="cast">
            <div class="cast-box">
                <img src="images/cast1.jpg" alt="" class="cast-img">
                <span class="title">Dwayne Johnson</span>
            </div>
            <div class="cast-box">
                <img src="images/cast2.jpg" alt="" class="cast-img">
                <span class="title">Karen Gillan</span>
            </div>
            <div class="cast-box">
                <img src="images/cast3.jpg" alt="" class="cast-img">
                <span class="title">Dwayne Johnson</span>
            </div>
            <div class="cast-box">
                <img src="images/cast4.jpg" alt="" class="cast-img">
                <span class="title">Dwayne Johnson</span>
            </div>
        </div>
    </div>
    <script>
         
        let playbutton = document.querySelector('.play-movie-1');
        let videobutton = document.querySelector('.video-container');
        let close = document.querySelector('.close-video');
        let video = document.querySelector('#video-film');
        playbutton.onclick = ()=>{
            videobutton.classList.add('show-video');
            video.play();
        }
       
        close.onclick = ()=>{
            videobutton.classList.remove('show-video');
            video.pause();
        }
    </script>
</body>

</html>