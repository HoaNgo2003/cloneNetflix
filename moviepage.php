<?php
@include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        body{
            padding-top: 80px;
            padding-left: 50px;
            padding-right: 50px;
        }
        .video{
            padding-top: 100px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            column-gap: 10px;
            row-gap: 40px;
        }
        

        .video-preview .image-video img {
            width: 100%;
             
        }
        .video-preview .xemphim{
          padding: 10px;
          background: red;
          color: white;
          font-size: 16px;
          border: none;
          border-radius: 5px;
          margin-top: 10px;
        }
        .video-preview .xemphim:hover{
          background: black;
          cursor: pointer;
        }
       

        .channel-picture img {
            width: 100%;
            border-radius: 50%;
        }

        .video-info {

            width: 200px;

        }

        .video-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .image-content {
            margin-top: 10px;
            display: grid;
            grid-template-columns: 50px 1fr;
            column-gap: 10px;
        }

        .video-author,
        .video-view {
            opacity: 0.8;
        }
        .header{
            height: 60px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: white;
        }
        .search-btn{
            height: 40px;
            width: 60px;
            background-color: rbg(240,240,240);
            border: 1px solid rba(192,192,192);
            margin-left: -1px;
            margin-right: 10px;
        }
        .left-section{
              
            display: flex;
            align-items: center;
             
        }
        .center-section{
           
             max-width: 500px;
            flex: 1;
            margin-left: 35px;
            margin-right: 45px;
             display: flex;
             align-items: center;
             
        }
        .right-section{
           flex-shrink: 0;
            width: 200px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-right: 24px;
        }
        .right-section img{
            height: 35px;
        }

        .hamburger-icon{
            height: 20px;
            margin-left: 20px;
            margin-right: 20px;

        }
        .search-icon{
            height: 25px;
            margin-top: 4px;
            
        }
        .youtube-logo{
            height: 20px;
        }
        .search-bar{
            flex: 1;
            height: 40px;
            font-size: 16px;
            border: 1px solid gray;
            box-shadow: inset 1px 1px 1px rgba(0, 0, 0, 0.15);
            outline-color: rgb(34, 34, 129);
        }
        .search-bar::placeholder{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            padding-left: 12px;
        }
        .voice-doi{
            height: 40px;
            width: 40px;
            border-radius: 50%;
            border: none;
            
        }
        .voice-icon{
            height: 30px;
            margin-top: 4px;
        }
        
       </style>

<link rel="stylesheet" href="style.css">
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
               <a href="homepage.php">

               <button>
                    HomePage
                </button>
               </a> 
            </div>
        </div>
        
    </div>
    <h1 style='padding-top:100px'>Danh sách phim mới nhất</h1>

    <div class="video">
       <?php
       $query = "SELECT * FROM movie";
       $run = mysqli_query($conn, $query);
       if($run){
        while($row = mysqli_fetch_array($run)){
          $image = $row['images'];
           
          ?>
          <div class="video-preview">
                            <div class="image-video">
                                <img src="<?php echo $image;?>"  alt="">
                            </div>
                            <div class="image-content">
                                
                                <div class="video-info">
                                    <p class="video-title">
                                        <?php echo $row["title"];?>
                                    </p>
                                    <p class="video-author">Diễn viên: <?php
                                    echo $row["actor"];
                                    ?> </p>
                                    <p class="video-view"> <?php echo $row["time"];?></p>

                                </div>
                            </div>
                            <a href="watchmovie.php?id=<?php echo $row['id'];?>"><button class='xemphim'>Xem phim</button></a>

       </div>
      <?php
        };
       };
       ?>

                        
                 
    </div>
   

</body>

</html>