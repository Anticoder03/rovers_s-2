
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-color: rgb(0,0,33);
}
.list{
    display: flex;
    align-items: center ;
    justify-content: space-around;
    height: 10vh;
    background-color: rgb(233, 233, 233);
}
.item{
    list-style: none;
}
.item a{
    text-decoration: none;
    font-size: 1.5rem;
    padding: 10px 30px ;
    color: #000;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-radius:5px;
}
.item a:hover{
    box-shadow: 5px 3px 10px #fff,5px 5px 10px #fff inset;
}
.img{
    height: 150px;
    width: 150px;
    padding: 2px;
    border-radius: 10px;
    position: relative;
    overflow: hidden;
}
.capten{
    display: flex;
    justify-content: space-around;
    margin-bottom: 5vh;
    padding: 3vh 0;
}
.capten:nth-child(even){
    flex-direction: row-reverse;
}
.img div{
    height: 100%;
    width: 100%;
    background-color: #111;
    position: relative;
    z-index: 10;
}
.img::after{
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%) rotate(45deg);
    height: 200px;
    width: 70px;
    background-color: #fff;
    animation: rotate 1.5s infinite;
}

@keyframes rotate {
    100%{
        transform: translate(-50%,-50%) rotate(225deg);        
    }
}

.team_info{
    width: 60%;
    color: #fff;
}
    </style>

</head>
<body>
    <?php include 'nav.php'; ?>
    <div class="capten">
        <div class="img">
            <div></div>
        </div>
        <div class="team_info">
            <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, sapiente temporibus! Et, nisi fuga? Deserunt dolorum ullam atque explicabo suscipit itaque vero, libero consequatur, exercitationem molestiae quisquam voluptates tempore? Assumenda!</p>
        </div>
    </div>
   
    <div class="capten">
        <div class="img">
            <div></div>
        </div>
        <div class="team_info">
            <p>2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, sapiente temporibus! Et, nisi fuga? Deserunt dolorum ullam atque explicabo suscipit itaque vero, libero consequatur, exercitationem molestiae quisquam voluptates tempore? Assumenda!</p>
        </div>
    </div>
   
    <div class="capten">
        <div class="img">
            <div></div>
        </div>
        <div class="team_info">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto omnis voluptate doloremque qui autem laboriosam harum quam a ipsum, fugit dignissimos ea saepe placeat similique ad dolores! Fugiat, vel sequi?
            </p>
        </div>
    </div>
   
    <div class="capten">
        <div class="img">
            <div></div>
        </div>
        <div class="team_info">
            <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, sapiente temporibus! Et, nisi fuga? Deserunt dolorum ullam atque explicabo suscipit itaque vero, libero consequatur, exercitationem molestiae quisquam voluptates tempore? Assumenda!</p>
        </div>
    </div>
   
    <div class="capten">
        <div class="img">
            <div></div>
        </div>
        <div class="team_info">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, sapiente temporibus! Et, nisi fuga? Deserunt dolorum ullam atque explicabo suscipit itaque vero, libero consequatur, exercitationem molestiae quisquam voluptates tempore? Assumenda!</p>
        </div>
    </div>
   
    <div class="capten">
        <div class="img">
            <div></div>
        </div>
        <div class="team_info">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, sapiente temporibus! Et, nisi fuga? Deserunt dolorum ullam atque explicabo suscipit itaque vero, libero consequatur, exercitationem molestiae quisquam voluptates tempore? Assumenda!</p>
        </div>
    </div>
   
    <div class="capten">
        <div class="img">
            <div></div>
        </div>
        <div class="team_info">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, sapiente temporibus! Et, nisi fuga? Deserunt dolorum ullam atque explicabo suscipit itaque vero, libero consequatur, exercitationem molestiae quisquam voluptates tempore? Assumenda!</p>
        </div>
    </div>
   
    <div class="capten">
        <div class="img">
            <div></div>
        </div>
        <div class="team_info">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, sapiente temporibus! Et, nisi fuga? Deserunt dolorum ullam atque explicabo suscipit itaque vero, libero consequatur, exercitationem molestiae quisquam voluptates tempore? Assumenda!</p>
        </div>
    </div>
   <footer></footer>
</body>
</html>