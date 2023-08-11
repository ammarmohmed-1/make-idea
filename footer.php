    <!-- footer -->
    <footer>
        <div class="up-footer">
            <div class="logo" >
                <img src="images/logo/main_logo.png" alt="logo" >
            </div>
            <div class="article" >
                <h1>MAKE IDEA</h1>
                <p>في شركة MAKE IDEA  ، نلزم أنفسنا بمعايير عالية من الجودة والحرفية في تصميم الويب ، مما يؤدي إلى حلول لها صدى لدى الجماهير. ولكن نجاحنا ببساطة عن طريق اتقان عملنا وتحقيق أهداف العملاء, أيضا من خلال الخبرة والعمل الجماعي، وتطوير ذاتي على طول الطريق . نحن دائما نسأل أنفسنا كيف يمكننا أن نجعل شبكة الانترنت مكان أفضل</p>
            </div>
            <div class="menu ">
                <ul>
                    <li><a href="index.php">الصفحة الرئسية</a></li>
                    <li><a href="who-are-we.php">من نحن</a></li>
                    <li><a href="our_service.php">خدماتنا</a></li>
                    <li><a href="contact_with_us.php">تواصل معنا</a></li>
                </ul>
            </div>
        </div>
            
    </footer>
    
    <!-- numbers to contact -->
    <div class="numbers_to_contact">
        <a href="https://wa.me/message/4TE6ZJZ54AW6J1" class="whatsapp">
            <img src="images/icon/whatsapp.png" alt="whatsapp">
        </a>
    </div>
    
    <!-- liberys -->
    <!--  this is vanilla tilt.js -->
    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelector(".tiled-libery"), {
            max: 25,
            speed: 400
        });
	
        //It also supports NodeList
        VanillaTilt.init(document.querySelectorAll(".tiled-libery"));
    </script>

<!-- AOS liberys -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration:800,
    })
</script>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</body>
</html>