<!-- header section-->
<?php
require_once "pages/header.php"; ?>
<!-- end of header section-->
<!--.
    .
    .
    .-->

 
<!-- body advert element ////////////////////////////////////////////////////////////////-->
<div class="ads_slider_div">
    <!-- 1 -->
<div class="slides a"> 
    <!--  -->
    <img src="pages\files_asorec\bg1.png"/>
    <div class="ads_desc">
        <div class="ads_text1">
            <h2>DUMMY TEXT</h2>
            <div class="underline"></div>
        </div>
        <div class="ads_text2">
            <h4>Dummy description about dummy text goes here and more other dummy description.</h4>
        </div>
        <button class="a_btn">MEET OUR CONSULTANT</button>
    </div>
    <!--  -->
</div>

<!-- 2 -->
<div class="slides b">
    <!--  -->
    <img src="pages\files_asorec\bg1.png"/> 

    <div class="ads_desc">
        <div class="ads_text1">
            <h2>ANOTHER TEXT</h2>
            <div class="underline"></div>
        </div>
        <div class="ads_text2">
            <h4>Dummy description about dummy text goes here and more other dummy description.</h4>
        </div>
        <button class="a_btn">MEET OUR CONSULTANT</button>
    </div>
    <!--  -->
</div>

<!-- 3 -->
<div class="slides c">
    <!--  -->
    <img src="pages\files_asorec\bg1.png"/>
    <div class="ads_desc">
        <div class="ads_text1">
            <h2>NEW TEXT</h2>
            <div class="underline"></div>
        </div>
        <div class="ads_text2">
            <h4>Dummy description about dummy text goes here and more other dummy description.</h4>
        </div>
        <button class="a_btn">MEET OUR CONSULTANT</button>
    </div>
<!--  -->
 </div>

<!-- end body advert element //////////////////////////////////////////////////////////-->
</div>

<!--.
    .
    .
    .-->


    <!-- body services element////////////////////////////////////////////////////// -->
    <div class="b_service_div">
        <!-- <article class="service_item"> 
            <div class="s_title">
                <span class="s_icon"><img src ="pages\files_asorec\icon1.png"/></span>
                <span> building</span>
             </div>
            <div class="s_desc"> 
                <p>mubbx cnjbs n hsb ns sbhhjys hsbhbbhs bbhshbhs jsbhvhvs hbshhvhs </P>
            </div>
        </article> -->

        <!-- elements are displayed dynamically from app.js file ref:page106 -->

    </div>
    <!-- end of body services element ////////////////////////////////////////////////-->


<!-- psuedo about element//////////////////////////////////////////////////////////////-->

<div class="pseudo_about">
    <!-- 1 -->
<article class="pseudo_about_item"> 
<div class="pseudo_about_title_div">
    <h3>WHO WE ARE</h3>
    <div class="ud_line"></div>
</div>

<div class="about_desc">
    <p>We are a civil engineering firm that want to build your dream architecture. Our
     project may be diverse but the result are one and the same. we work on schedule
     withe your budget, with superior quality, it is a certainty you will count on.</p>
</div>
<div class="about_btn"> <button>MEET OUR CONSULTANT</button></div>
</article>
<!-- 2 -->
<article class="pseudo_about_item"> 
    <div class="goal_img"> </div>

    <div class="pseudo_about_title_div">
    <h3>OUR GOALS</h3>
    <div class="ud_line"></div>
    </div>
<div class="about_desc">
    <p>Our goal as a construction company is build community value into every project
         while delivering professional expertise, exceptional customer service and quality construction.</p>
</div>
</article>
</div>
<!-- end of pseudo about element///////////////////////////////////////////////////////-->


<!-- quote element /////////////////////////////////////////////////////////////////////-->
<div class="quote_parent_div">

<div class="quote_form_element">
    <!-- t -->
 <div class="quote_title_div">
    <h3>GET A QUOTE</h3>
    <div class="ud_line"></div>
</div> 
        <!-- t -->

        <!--  form item-->
        <form method="post" action="get_quote.php" class="q_form">
            <!--  -->
        <div class="form_div">
            <label for="project">Type of project</label><br><br>
            <input type="text" id="project" name="project" class="project" value=""/> 
            <span class="project" >&#9660;</span>
            <!-- drop down -->
            <article class="quote_item" data-id="project">
                <!-- <ul>
                    <li>man</li>
            </ul> -->
            </article>
            <!-- end of drop down -->
        </div>

            <!--  -->
<div class="form_div">
            <label for="room">Number of rooms</label><br><br>
            <input type="text" id="room" name="room" class="room" value=""/> 
            <span class="room">&#9660;</span>
<!-- drop down -->
            <article class="quote_item" data-id="room">
                <!-- <ul>
                    <li>man</li>
            </ul> -->
            </article>
            <!-- end of drop down -->
        </div>
            <!--  -->
 <!--  -->
<div class="form_div">
            <label for="project">Type of roof</label><br><br>
            <input type="text" id="roof" name="roof" class="roof" value="" focus="hidden"/> 
            <span class="roof">&#9660;</span>
            <!-- drop down -->
            <article class="quote_item" data-id="roof">
                <!-- <ul>
                    <li>man</li>
            </ul> -->
            </article>
            <!-- end of drop down -->
        </div>
            <!--  -->
            <button type="submit" class="form_btn">REQUEST FOR A QUOTE</button>

       </form> 
        <!-- end of form item -->
</div>
<!--  -->
</div>
<!-- end of quote element -->


<!-- Purchase div element -->

<div class="purchase_div">  
   <!-- t -->
      <div class="project_title_div">
    <h3>PURCHASE DRAWING</h3>
    <div class="ud_line"></div>
        </div> 
        <!-- t -->
    <!-- purchase item div -->
<div class="purchase_item_div"> 
<div class="purchase_container">
    <!-- item -->
<article class="single_drawing"> 
<div class="drawing_img"> <img src="pages/files_asorec/drawing1.png" alt=""/> </div>
<div class="price"><span>$12.30<span></div>
    <div class="drawing_desc"><h4>Dummy description goes here...<h4></div>
    <form method="get" action="purchase architecture.php">
        <input type="hidden" id="">
    <button>Buy</button>
</form>
</article>
<!-- end of item -->

 <!-- item -->
<article class="single_drawing"> 
<div class="drawing_img"><img src="pages/files_asorec/drawing1.png" alt=""/>  </div>
<div class="price"><span>$12.30<span></div>
    <div class="drawing_desc"><h4>Dummy description goes here...<h4></div>
    <form method="get" action="purchase architecture.php">
        <input type="hidden" id="">
    <button>Buy</button>
</form>
</article>
<!-- end of item -->

<!-- item -->
<article class="single_drawing"> 
<div class="drawing_img"><img src="pages/files_asorec/drawing1.png" alt=""/> </div>
<div class="price"><span>$12.30<span></div>
    <div class="drawing_desc"><h4>Dummy description goes here...<h4></div>
    <form method="get" action="purchase architecture.php">
        <input type="hidden" id="">
    <button>Buy</button>
</form>
</article>
<!-- end of item -->

<!-- item -->
<article class="single_drawing"> 
<div class="drawing_img"><img src="pages/files_asorec/drawing1.png" alt=""/> </div>
<div class="price"><span>$12.30<span></div>
    <div class="drawing_desc"><h4>Dummy description goes here...<h4></div>
    <form method="get" action="purchase architecture.php">
        <input type="hidden" id="">
    <button>Buy</button>
</form>
</article>
<!-- end of item -->
</div>
<!--  -->
<div class="more_btn">
    <form method="get" action="architectural drawing.php" >
      <input type="hidden">  
    <button class="more_button">More</button>
</form>
</div>
<!--  -->
</div>
<!-- //////////// -->
<div class="purchase_request">
<form method="get" action="drawing request.php" >
    <input type="hidden">
<button class="request_btn">Request for drawing</button>
</form>
</div>
<!-- ///////////// -->
</div>
<!-- end of purchase div element -->



<!-- project element //////////////////////////////////////////////////////////////////-->
<div class="project_div">
    
    <!-- <div class="projeect_title">  -->

        <!-- t -->
      <div class="project_title_div">
    <h3>LATEST PROJECT</h3>
    <div class="ud_line"></div>
        </div> 
        <!-- t -->
    <!-- project nav //////////////////////////////////////-->
    <div class="p_nav">
<!-- <div class="p_nav_item"> building</div> -->
<!-- dynamic display from app.js  page 233-->
    </div>
    <!-- end of project nav ////////////////////////////////-->

    <!-- </div> -->
    
    <!-- project display div ////////////////////////////-->
    <div class="project_display_div">
<!-- <article class="project_item"> <img src="" alt=""/></article> -->
<!-- dynamic display from app.js  page 273-->
    </div>
    <!-- end of project display div////////////////////////// -->

</div>
<!-- end of project element/////////////////////////////////////////////////////////////// -->


<!-- testimonials element////////////////////////////////////////////////////////////////////////////-->
<div class="testimonial_div">
 <!-- t -->
 <div class="testimonial_title_div">
    <h3>TESTIMONIALS</h3>
    <div class="ud_line"></div>
        </div> 
        <!-- t -->
        <!--////////////  -->
    <div class="testimonial_element">
        <!-- items are displayed dynamically from app.js page 281 -->

    <!-- <article class="testimonial_item">
    <div class="testimonial_item_child avatar" 
    style="background:url('pages/files_asorec/bg1.png');
     background-repeat:no-repeat; background-size: 100% 100%"></div> -->
<!--  -->
    <!-- <div class="testimonial_item_child">
        <h5><quote>Dummy text about the client’s satisfaction in asorec resources. and more other 
            dummy lorem ipsum.</quote></h5>
        <p> Mr Marcus Huang</p>
    </div>
    </article> -->
    <!--  -->

    </div>
    <!-- ///////////////////// -->

</div>
<!-- end of testimonials element/////////////////////////////////////////////////////////////////// -->




<!-- footer section -->
<?php
require_once "pages/footer.php"; ?>
<!-- end of footer section -->