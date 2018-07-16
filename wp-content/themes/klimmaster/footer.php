
    <!--Contact-->
    <div id="contact">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-12 row wow fadeInDown">
                    <!--Header-->
                    <h2>Наші контакти</h2>
                    <p>Ви можете зв`язатися з нами по одному з телефонів, написавши нам на електронну пошту, або скориставшись формою нижче.</p>
                    <div class="line"></div>
                </div>
            </div>   
        </div>        <!--Contact Detail-->
        <div class="container">
            <div class="row">
                <div class="contact-detail">    
                    <div class="row col-lg-3">
                        <!--Address-->
                        <div class="address wow fadeInLeft">
                            <h3 class="title">Email</h3>
                            <p>klimmaster.ua@gmail.com</p>
                        </div>
                        <!--Telephone-->
                        <div class="telephone wow fadeInLeft">
                            <h3 class="title">Телефон</h3>
                            <p class="tel">Тел: 0686008324</p>
                            <p class="fax">Тел: 0668941050</p>
                            <p class="fax">Тел: 0979085857</p>
                            <p class="fax">Тел: 0661020145</p>
                        </div>
                    </div>

                    <!--Form-->
                    <div class="row col-lg-9 wow fadeInRight">
                        <h3>Відправити повідомлення</h3>
                        <p>Звяжіться з нами</p>
                        <!--Name-->
                        <div>
                            <input type="text" name="name" id="name" placeholder="Ваше ім`я" required data-valitation-required-message="Please Enter Your Name" />                     
                        </div>
                        <!--Email-->
                        <div>
                            <input type="email" name="email" id="email" placeholder="Email" required data-validation-required-message="Please Enter Your Email" />              
                        </div>
                        <!--Message-->
                        <div>
                            <textarea rows="1" name="message" id="message" placeholder="Ваше повідомлення" required data-validation-required-message="Please Enter Your Message"></textarea>
                        </div>
                        <!--Button-->
                        <div class="col-lg-12">
                            <button class="button pull-right" onclick="contact_send();">Відправити</button>
                        </div>
                    </div><!--End Form-->
      
                </div><!--End Contact Detail-->
            </div><!--End Row-->
        </div><!--End Container-->
    </div>
    <!--End Contact-->

    <!--Footer-->
    <footer id="footers">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">
                    <div class="col-lg-4">
                        <h3>КлімМастер - 2018</h3>
                    </div>
                    <div class="col-lg-6 hidden-xs hidden-sm">
                        <ul class="footer-menu">
                            <li><a href="index.html">Головна</a></li>
                            <li><a href="projects.html">Проекти</a></li>
                            <li class="links dropdown">
                              <ul class="dropdown-menu sub-menu">
                                  <li><a href="cond1.html">Спліт системи</a></li>
                                  <li><a href="cond2.html">Касетні</a></li>
                              </ul>
                              <a href="cond1.html" data-toggle="dropdown" class="dropdown-toggle">Кондиціонери</a>
                          </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 hidden-xs hidden-sm">
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
<?php wp_footer(); ?>
</body>

</html>