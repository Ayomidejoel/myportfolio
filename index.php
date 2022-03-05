<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      .authority {
        background-color:white;
      }
      .authority .authority1 ul {
        list-style-type:none;
       
      }
      .authority .authority1 li {
        float:left;
        padding:20px;
      }
      .authority .authority1 li a {
        text-decoration:none;
        color:black;
        margin:70px;

      }
      .authority .authority1 li a:hover{
        color:red;
      }
      .authority2 {
        margin-top:80px;
        background-color:rgb(31, 29, 29);
        color:white;
        /* height:650px; */
      }
      .authority2 .myimage img{
        border:1px 1px solid white;
        margin-top:40px;
        margin-left:80px;
        box-shadow:transparent;
        border-radius:80%;
        width:60%;
        height:400px;
      }
      .authority2 .myself {
        margin-top:180px;
      }
      .authority2 .myself h3, p {
        font-size:20px;
        text-align: center;
        text-transform: initial;
      }
      .authority3 {
        margin-top:30px;
      }
      .authority3 h2{
        text-align:center;

      }
      .service {
        margin-top:40px;
        padding: 20px;
        width:100%;
        /* height: 400px; */
        background-color: rgb(30, 30, 30);
        justify-content: center;
        align-content: center;
      }
      .service .service1 {
        background-color:white;
        color:black;
        /* width: 85%; */
        margin-top:20px;
        align-items:center;
        justify-content:center;
        height: fit-content;
        text-align: center;
        padding: 15px;
        margin: 0px 50px 0px 50px;
        border-radius:30px;
        /* width:100%; */
    
      }
      .service .service1:hover {
        background-color:blue;
        color:white;
      }
      .service .service2:hover {
        background-color:blue;
        color:white;
      }
      .service .service3:hover {
        background-color:blue;
        color:white;
      }
      .service .service4:hover {
        background-color:blue;
        color:white;
      }
      .service .service1 i {
        font-size: 30px;
        border: 1px solid black;
        padding: 20px;
        border-radius: 100px;
      
      }
       .service .service2 {
        background-color:white;
        color:black;
        /* width: 85%; */
        margin-top:20px;
        align-items:center;
        justify-content:center;
        height: fit-content;
        text-align: center;
        padding: 15px;
        margin: 0px 50px 0px 50px;
        border-radius:30px;
        /* width:100%; */
      }
      .service .service2 i {
        font-size: 30px;
        border: 1px solid black;
        padding: 20px;
        border-radius: 100px;

      } 
      .service .service3 {
        background-color:white;
        color:black;
        /* width: 85%; */
        margin-top:20px;
        align-items:center;
        justify-content:center;
        height: fit-content;
        text-align: center;
        padding: 15px;
        margin: 0px 50px 0px 50px;
        border-radius:30px;
        /* width:100%; */
      }
      .service .service3 i {
        font-size: 30px;
        border: 1px solid black;
        padding: 20px;
        border-radius: 100px;

      } 
      .service .service4 {
        background-color:white;
        color:black;
        /* width: 50%; */
        margin-top:20px;
        align-items:center;
        justify-content:center;
        height: fit-content;
        text-align: center;
        padding: 15px;
        margin: 0px 50px 0px 50px;
        border-radius:30px;
        /* width:10%; */
      }
      .service .service4 i {
        font-size: 30px;
        border: 1px solid black;
        padding: 20px;
        border-radius: 100px;

      } 
      .pro {
        margin-top:60px;
        background-color:white;
      }
      .pro h2 {
        text-align:center;
      }
      .project {
        background-color: rgb(30, 30, 30);
        margin-top:40px;
      }
      .project p {
        color:white;
      }
      .project img {
        width:100%;
        height:500px;
      }
      .project .project1{
        margin-top:40px;
        position: relative;
        -webkit-animation: mymove 5s infinite;
        animation: mymove 5s infinite;
      }
      .project .project2{
        margin-top:40px;
        position: relative;
        -webkit-animation: mymove 5s infinite;
        animation: mymove 5s infinite;
      }
      .project .project3{
        margin-top:40px;
        position: relative;
        -webkit-animation: mymove 5s infinite;
        animation: mymove 5s infinite;
      }
      .project .project4{
        margin-top:40px;
        position: relative;
        -webkit-animation: mymove 5s infinite;
        animation: mymove 5s infinite;
      }
      .project1 {-webkit-animation-timing-function: linear;}
      .project2 {-webkit-animation-timing-function: ease;}
      .project3 {-webkit-animation-timing-function: ease-in;}
      .project4 {-webkit-animation-timing-function: ease-out;} 
       #div5 {-webkit-animation-timing-function: ease-in-out;}

@-webkit-keyframes mymove {
    from {left: 400px;}
    to {left: 0px;}
}
.ab {
  margin-top:60px;
}
.about {
  margin-top:50px;
  background-color:rgb(30, 30, 30);
  color:white;
}
.about .about5 img {
  margin-top:40px;
  width:100%;
  height:400px;
  border-radius:100%;
}

.con {
  margin-top:60px;
}
.contact {
  margin-top:30px;
  background-color:white;
  color:black;
}
.contact .contact2 {
  justify-content:center;
  text-align:center;
}
.contact .media {
  text-align:center;
  justify-content:center;
}
.contact .media i {
  color:black;
  margin:50px;
  width:30px;
  font-size:40px;
  /* padding:30px; */
  
}
.footer {
  background-color:black;
  color:white;
}
/* .contact .media i:hover {
  /* background-color:blue; */
  /* color:;
} */



      @media screen and (max-width:750px){
        /* .authority1 li a {
          max-width:100px;
          /* display:inline; */
          /* background-color:black; */
          /* color:white; */
        /* } */
        /* body {
          background-color:blue;
        }
        .service {
          display:block;
        }
        .authority2 {
          display:block;
          width:100%;
        } */
        /* .authority1 a {
          padding:none;
          /* display:block; */
          /* max-width:30px;
          height:30px; 
        }*/
        .authority .myself {
          text:wrap;
        }
      } 
       
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <!-- ============= This is where i start my navigation bar========================= -->

    <div class="container-fluid authority fixed-top">
      <div class="row">
        <div class="col-md-12">
          <div class="authority1">
            <ul>
              <li><a href="#"><b>Home</b></a></li>
              <li><a href="#about"><b>About</b></a></li>
              <li><a href="#project"><b>Project</b></a></li>
              <li><a href="#service"><b>Service</b></a></li>
              <li><a href="#contact"><b>Contact</b></a></li>
            </ul>

          </div>

        </div>

      </div>

    </div>

    <!-- ====================== This is my display div ========================== -->

    <div class="container-fluid authority2">
      <div class="row">
        <div class="col-md-6">
          <div class="myimage">
            <img src="img/remove.png" alt="">

          </div>
        </div>
        <div class="col-md-6">
          <div class="myself">
            <h3 class="wow bounceIn">Hey, I'm Ayomide Joel, A K A Dev_Authority.</h3>
            <p class="wow wobble">I am a web developer. A man who love creativity and innovation in Tech.</p>
            <p class="wow fadeIn">I am passionate in building a responsive website and user friendly web pages.</p>
            <p>I love solving problems and errors debugging and optimizing web apps</p>
            <p><button type="submit" class="btn btn-success"><a class="text-white" style="text-decoration:none;" href="#project">Projects</a></button></p>
          </div>

        </div>

      </div>

    </div>

    <!-- ======================================================== -->
    <div class="container authority3" id="service">
      <div clas="row">
        <div class="col-md-12 wow rollIn">
          <h2>My Services</h2>

        </div>

      </div>

    </div>
    <!-- ==========================My Services============================ -->

   <div class="container-fluid service">
     <div class="row">
       <div class="col-md-3">
         <div class="service1 wow heartBeat">
           <i class="fas fa-laptop-code"></i>
           <h3>Web design and Development</h3>
           <p>Our custom web development services include both front-end and back-end development.
                    whether it is enhancing an existing application or fresh application.</p>

         </div>

       </div>
       <div class="col-md-3">
        <div class="service2 wow flip">
         <i class="fas fa-users"></i>
           <h3>Hire Web developer/Team</h3>
                <p>Hire industry's best website developers to solve your complex 
                    business problems. No matter if you custom website developers or want
                to hire web developer </p>
         </div>

       </div>
       <div class="col-md-3">
         <div class="service3 wow flipOutY">
         <i class="fas fa-bezier-curve"></i>
                <h3>Graphic Design</h3>
                <p>We give out the best and attractive design to our customer. 
                    A good business need a flourishing graphic advert.
                </p>
         </div>

       </div>
       <div class="col-md-3">
         <div class="service4 wow hinge">
           <i class="fas fa-laptop-code"></i>
           <h3>E-book Creation</h3>
           <p>Our custom web development services include both front-end and back-end development.
                    whether it is enhancing an existing application or fresh application.</p>

         </div>

       </div>

     </div>
    </div>
      <!-- -========================= -->
      <div class="container pro" id="project">
        <div class="row">
          <div class="col-md-12">
            <h2>Projects</h2>

          </div>

        </div>

      </div>

      <!-- ==============================My Projects===================== -->

      <div class="container-fluid project">
        <div class="row">
          <div class="col-sm-3">
            <div class="project1">
              <img src="img/hotel.png" alt="">
              <p>Hotel Booking</p>

            </div>
            

          </div>
          <div class="col-sm-3">
            <div class="project2">
              <img src="img/weather.png" alt="">
              <p>Weather App</p>

            </div>
            

          </div>
          <div class="col-sm-3">
            <div class="project3">
              <img src="img/blog.png" alt="">
              <p>A blogsite</p>

            </div>
            

          </div>
          <div class="col-sm-3">
            <div class="project4">
              <img src="img/cal.png" alt="">
              <p>A numeric calculator</p>

            </div>
            
          </div>

        </div>

      </div>

      <!-- ========================== -->

      <div class="container-fluid ab" id="about">
        <div class="row">
          <div class="col-sm-12">
            <h2><b> About Me </b></h2>
          </div>
        </div>
      </div>

      <!-- ============================ This About me==================== -->

      <div class="container-fluid about">
        <div class="row">
          <div class="col-sm-3">
            <div class="about2">
              <h4>Know more about me ?</h4>
              <p><b> Name:</b> Ayomide Joel</p>
              <p><b> DOB:</b> 29/05</p>
              <p><b> Qualification:</b> National Diploma in Computer science</p>
              <p><b> Gender:</b> Male</p>
              <p><b> Location:</b> Nigeria</p>

            </div>
          </div>
          <div class="col-sm-3">
            <div class="about3">
              <h4>Skills</h4>
              <p>HTML: &nbsp;&nbsp;<i class="fab fa-html5" style="font-size: 30px; color: orange;"></i> &nbsp;&nbsp; <input type="range" value="90" disabled></p>
                <p>CSS: &nbsp;&nbsp;<i class="fab fa-css3" style="font-size: 30px; color: purple;"></i>&nbsp;&nbsp;<input type="range" value="85" disabled></p>
                <p>Javascript: &nbsp;&nbsp;<i class="fab fa-js-square" style="font-size: 30px; color: orange;"></i>&nbsp;&nbsp;<input type="range" value="50" disabled></p>
                <p>PHP: &nbsp;&nbsp;<i class="fab fa-php" style="font-size: 30px; color: purple;"></i>&nbsp;&nbsp;<input type="range" value="50" disabled></p>
                <p>Node js:&nbsp;&nbsp;<i class="fab fa-node" style="font-size: 30px; color: orange;"></i>&nbsp;&nbsp;<input type="range" value="60" disabled></p>
            

            </div>
          </div>
          <div class="col-sm-3">
            <div class="about4">
              <h4>Language</h4>
              <p>English</p>
              <p>Yoruba: Mothertongue</p>

            </div>
          </div>
          <div class="col-sm-3">
            <div class="about5">
              <img src="img/lap.jpg" alt="">

            </div>
          </div>

        </div>

      </div>

      <!-- =======================con=========== -->

      <div class="container-fluid con" id="contact">
        <div class="row">
          <div class="col-sm-12">
            <h2><b> Contact </b></h2>
          </div>
        </div>
      </div>

      <!-- ===================My Contact ====================== -->

      <div class="container-fluid contact">
        <div class="row">
          <div class="col-md-6">
            <div class="contact1">
            <form action="index.php" method="POST" class="form"
             enctype="multipart/form-data">
             <div class="form">
              <div class="input-group mb-3">
                  <span class="input-group-text">Firstname</span>
                  <input type="text" class="form-control" required>
              </div>
             </div>

             <div class="form">
              <div class="input-group mb-3">
                  <span class="input-group-text">Email</span>
                  <input type="email" class="form-control" required>
              </div>
             </div>

             <div class="form">
              <div class="input-group mb-3">
                  <span class="input-group-text">Phone Number</span>
                  <input type="number" class="form-control" required>
              </div>
             </div>
             <div class="form">
              <div class="input-group mb-3">
                  <span class="input-group-text">Message</span>
                  <textarea name="message" id="" cols="30" rows="10" required></textarea>
              </div>
             </div>
             <div class="form">
              <div class="input-group mb-3">
                  <input type="submit" class="btn btn-success">
              </div>
             </div>
             

            </form>
             
            </div>

          </div>
          <div class="col-md-6">
            <div class="contact2">
              <h5><b> Love to solve your problems </b></h5>
              <p> I love dealing with fun, open-minded people. Feel free to say hello !!!</p>
              <p><i class="fas fa-map-marker-alt"></i> Zone 8, Iludun Area, Osogbo Osun State, Nigeria.</p>
              <p><i class="fas fa-phone-alt"></i>  +2348143439163</p>
              <p><i class="far fa-envelope"></i> <a href="https://ayomidejoel22@gmail.com"> ayomidejoel22@gmail.com</a> </p>
              <p><button type="submit" class="btn btn-success"><a style="color:white; text-decoration:none;" href="https://wa.me/qr/BTDW5QJF7GDML1"><i style="color:white;" class="fab fa-whatsapp"></i> Message Now</a></button></p>
              
            </div><hr>
            <div class="media">
                    <a href="https://www.facebook.com/harderibigbe.haryomide" ><i class="fab fa-facebook-square"></i></a>
                    <a href="https://twitter.com/@authority2905"><i class="fab fa-twitter-square"></i></a>
                    <a href="https://www.linkedin.com/in/ayomide-joel-827327230"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/hardejoy"><i class="fab fa-github-square"></i></a>
                    <a href="https://www.instagram.com/authority2905"><i class="fab fa-instagram"></i></a>


            </div>

          </div>

        </div>

      </div>

      <!-- ===================== Footer=================== -->

      <div class="container-fluid footer">
        <div class="row">
          <div class="col-md-12">
            <div class="footer2">
              <p>&copy Dev_Authority 2022. All Right Reserve</p>

            </div>
          </div>

        </div>

      </div>



<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script> 
<script src="js/wow.min.js"></script>
<script>
      new WOW().init();
    </script> 
    
</body>
</html>
