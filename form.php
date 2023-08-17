<?php
if (isset($_POST["send"])) {
    $first_name = filter_var($_POST["first_name"], FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST["last_name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $massage = filter_var($_POST["massage"], FILTER_SANITIZE_STRING);
    $errors = [];


    if(isset($_POST['send'])){
        # the condition in data base
        if(empty($first_name) || empty($last_name) || empty($email) || empty($massage)){
            $errors[] = "<div class=\"massage massage_filed\"> <h3>يجب ملء البيانات</h3></div>";
            
        }
        elseif(strlen($massage) < 50){
            $errors[] = "<div class=\"massage massage_filed\"><h3>هذه الرساله قصيرة للغاية</h3></div>";;
        }

            # if user make everything right
            if(empty($errors)){
                $errors[] = "<div class=\"massage massage_sucss\"> <h3>لقد تم ارسال رسالتك بنجاح</h3></div>";
                # if every thing is very right send the telegram massage
                $the_text = "Name: $first_name $last_name \n Email: $email \n Message: $massage";
                $chatBot_id = "chat_id=6032778299";
                $token = "bot6614379420:AAHIq9CNPbqHXuprjd6udGP18fZ1pcqXXGc";
                $url = "https://api.telegram.org/$token/sendMessage?parse_mode=HTML&text=" . urlencode($the_text) . "&$chatBot_id";
                $go_url = curl_init($url);
                curl_setopt($go_url, CURLOPT_POST, true);
                curl_setopt($go_url, CURLOPT_POSTFIELDS, $url);
                curl_setopt($go_url, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($go_url);
                curl_close($go_url);

                
            
        }
    }
}
?>

<!-- contact with us -->
<section class="contact-us" >
    <?php echo @$errors[0]; ?>
    <div class="content">
        <div class="main-img tiled-libery" >
            <img src="images/contact-us2.png" alt="" data-aos="zoom-in">
        </div>
            <div class="text-content">
                <h1>ارسل لنا رسالة من هنا</h1>
                <h3>الآن وبكل سهولة فقط اكتب الايميل و رقم الجوال و ارسل لنا استفسارك او طلبك , و سوف يتم الرد عليكم في اقل من 60 دقيقة او تواصل معنا مباشره عبر موقع التواصل الاجتماعي لدينا</h3>
                <button class="btn start_now"> start now </button>
            </div>
            <!-- FROM -->
            <form class="form form_close" method="post">
                <img class="icon_form" src="images/icon/close.png" alt="">
                <div class="main-form">
                    <div>
                        <h3>أدخل اسمك الأول</h3>
                        <input type="text" name="first_name" placeholder="أدخل اسمك الأول" required>
                    </div>
                    <div>
                        <h3>أدخل اسمك الأخير</h3>
                        <input type="text" name="last_name" placeholder="أدخل اسمك الأخير" required>
                    </div>
                </div>
                <div>
                    <h1>أدخل عنوان بريدك الإلكتروني</h1>
                    <input type="email" name="email" placeholder="أدخل عنوان بريدك الإلكتروني" required>
                </div>
                <div>
                    <textarea name="massage" placeholder="اشرح الموقع الذي تريد عمله بالتفصيل وارسل نماذج مشابهه له" rows="5" required></textarea>
                    <button class="btn btn_form" name="send" type="submit">send</button>
                </div>
            </form>
        </div>
</section>