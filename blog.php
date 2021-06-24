<?php
$con=mysqli_connect("localhost","root","","education");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Education Site</title>
</head>
<body>
   
   <section class="sub-header">
       <nav>
        <a href="index.html">  <img src="images/logo.png" style="width:50px;height:50px;margin-left: 100px;"> </a>
        <div class="nav-links" id="navlinks">
            <i class="fa fa-times" onclick="hidemenu()"></i>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="course.html">COURSE</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showmenu()"></i>
    </nav>

    <h1>Our Certificate & online Programs For 2021</h1>
   </section> 
  

   <section class="blog-content">
       <div class="row">
           <div class="blog-left"><img src="images/Certificate.jpg">
            <h2>Our Certificate & online Programs For 2021</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et labore rerum rem debitis, sit quod provident iusto eos quis voluptates iste omnis quae ipsam amet est neque illo. Incidunt, reprehenderit!</p>
       <br>
       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus dolor minus obcaecati! Repellat totam, quae aliquid reprehenderit exercitationem, officiis rerum esse sequi illo assumenda culpa veniam! At magni repellendus aspernatur!</p>
  <br>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, nemo quam dolorem possimus exercitationem debitis nostrum laudantium ab autem ea asperiores dolorum! Nobis modi alias reiciendis quae eveniet repudiandae consectetur.</p>
   <br>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, nihil? Quibusdam maxime blanditiis doloribus doloremque, unde tempora ea odio accusantium ratione reprehenderit. Architecto nesciunt provident facere, harum repudiandae animi numquam.</p>

<div class="comment-box">
<h3>Leave a comment</h3>
<form class="comment-form" method="post" action="blog.php">
<input type="text" placeholder="Enter your Name" name="name">
<input type="email" placeholder="Enter your Email"  name="email">
<textarea row="5" placeholder="your comment" name="comment"></textarea>
<button type="submit" class="hero-btn red-btn" name="submit">POST COMMENT</button>
</form>
<?php
  
    if(isset($_POST['submit'])){
        $sender_name = $_POST['name'];
        $sender_email = $_POST['email'];
        $sender_comment = $_POST['comment'];
        
        $insert_message = "insert into blog (name,email,comment,date)
        values('$sender_name','$sender_email','$sender_comment',NOW())";
      
        $run_message = mysqli_query($con,$insert_message);
        if($run_message){
            echo "<script>alert('Message Sent successfully')</script>";
            echo "<script>window.open('blog.php','_self')</script>";
        }
       }
    
?>

</div>
</div>

    <div class="blog-right">
        <h3>Post Categories</h3>
        <div><span>Business Analytics</span>
        <span>21</span>
        </div>
        <div><span>Data Science</span>
            <span>28</span>
            </div>
            <div><span>Machine Learning</span>
                <span>15</span>
                </div>
                <div><span>Computer Science</span>
                    <span>34</span>
                    </div>
  
    <div><span>AutoCAD</span>
        <span>42</span>
        </div>
        <div><span>Journalism</span>
            <span>18</span>
            </div>
       </div>
   </section>

<!--Footer-->
<section class="footer">
<h4>About Us</h4>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quos eum sit harum,<br> laudantium exercitationem iste nisi saepe sunt repellat vitae ut fuga, pariatur provident, quaerat qui voluptates quis reprehenderit.</p>
<div class="icons">
<i class="fa fa-facebook"></i>
<i class="fa fa-twitter"></i>
<i class="fa fa-instagram"></i>
<i class="fa fa-linkedin"></i>
</div>
<p>Made with <i class="fa fa-heart-o"></i> by Easy Toturials</p>
</section>




<script>
var navlinks=document.getElementById("navlinks");
function showmenu(){
    navlinks.style.right="0";
    navlinks.style.display="block";
}
function hidemenu(){
    navlinks.style.right="-200px";
    navlinks.style.display="none";
}
</script>
</body>
</html>