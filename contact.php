<?php require_once "pages/header.php" ?>
<!-- head -->

<div class="header_div"> 
    <div class="head_title"><span>CONTACT US</span></div>
</div>

<!-- end -->

<div class="contact_body">
<!--  -->
<div class="contact_element">

<article class="contact_text"> Reach out to our customer 
    service representative and we will get back to you as soon as possible.</article>

    <!--  form item-->
    <form method="post" action="" class="c_form">
            <!--  -->
        <div class="c_form_div">
            <label for="fullname">Full Name</label><br><br>
            <input type="text" id="fullname" name="fullname"> 
            
        </div>
            <!--  -->
<div class="c_form_div">
            <label for="room">Email</label><br><br>
            <input type="text" id="email" name="email"> 
            
        </div>
            <!--  -->
 <!--  -->
<div class="c_form_div">
            <label for="message">Message</label><br><br>
            <textarea type="text" id="message" name="message" max-length="30"> </textarea>
        
        </div>
            <!--  -->
            <button type="submit" class="c_form_btn">SEND</button>

       </form> 
        <!-- end of form item -->
</div>
<!--  -->
</div>









<?php require_once "pages\about_contact_footer.php" ?>