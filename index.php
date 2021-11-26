<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to VietNam</title>
        <link rel="icon" href="./upload/logodulichht.png">
        <link rel="stylesheet" href="./include/fontawesome/css/all.css">
        <link rel="stylesheet" href="./include/style/bootstrap.css">
        <link rel="stylesheet" href="include/mystyle45646.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        
        <?php session_start(); ?>
        <style>

        </style>
    </head>
    <body>
        
    <?php require_once "./view/header.html" ?>
<div class="greeting">
 

    <div id="mycarousel" class="carousel slide" data-ride="carousel">

<!--Cho hiện thị chỉ số nếu muốn-->
<ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1" class=""></li>
    <li data-target="#mycarousel" data-slide-to="2" class=""></li>
</ol>
<!--Hết tạo chỉ số-->

<!--Các slide bên trong carousel-inner-->
<div class="carousel-inner">

    <!--Slide 1 thiết lập hiện thị đầu tiên .active-->
    <div class="carousel-item active">
        <img class="d-block w-10" style="width: 100%; height:500px; min-width:1000px;"  src="./upload/image/slider1.jpg">
        <!--Cho thêm hiện thị thông tin-->
       
    </div>

    <!--Slide 2-->
    <div class="carousel-item"> 
        <img  style="width: 100%; height:500px;" class="d-block w-10" src="./upload/image/slider2.jpg">
    </div>
    <!--Slide 3-->
    <div class="carousel-item">
        <img  style="width: 100%; height:500px;" class="d-block w-10" src="./upload/image/slider3.jpg">
    </div>
    
</div>



<!--Cho thêm khiển chuyển slide trước, sau nếu muốn-->
    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Trước</span></a>
    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Sau</span> </a>
<!--Hết tạo điều khiển chuyển Slide--> 

</div>
        
<!--Het-->


</div>

   <div class="introduce-Vietnam">
        <div class="container">
        <br>
            <p style="color: #f2f2f2; font-size:70px; font-weight:500 ;font-family: 'ZCOOL QingKe HuangYou', cursive;" >Việt Nam</p>
            <p style="color: #f2f2f2; font-size:20px; font-weight:300 ; font-family: 'ZCOOL QingKe HuangYou', cursive;" >Nằm ở Đông Nam Á, Việt Nam là một đất nước nhỏ bé xinh đẹp với lịch sử hào hùng, lòng yêu nước sâu sắc và những danh lam thắng cảnh tuyệt vời.

Việt Nam không phải là một cái tên xa lạ với toàn thế giới. Mặc dù đất nước từng bị tàn phá bởi hàng loạt cuộc chiến tranh gây ra những thiệt hại nghiêm trọng, nhưng Việt Nam trong mắt thế giới là một đất nước tốt đẹp và hòa bình. Việt Nam nằm ở phía đông bán đảo Đông Dương ở Đông Nam Á, với thủ đô là Hà Nội. Với diện tích 331.690 km vuông, phía Bắc giáp Trung Quốc, phía Tây giáp Lào và Campuchia, phía Đông giáp Vịnh Bắc Bộ và Biển Đông, phía Nam giáp Vịnh Thái Lan. Vùng đất này là trung tâm buôn bán, giao lưu văn hóa, thậm chí là xung đột trong nhiều thế kỷ. Điều đó chứng tỏ Việt Nam có vị trí thuận lợi trong khu vực với đường bờ biển dài và nhiều điểm tham quan hấp dẫn. Có khí hậu nhiệt đới, Việt Nam nổi tiếng với phong cảnh tuyệt đẹp và những đồi núi đầy màu sắc đến những thửa ruộng bậc thang rộng lớn ở Đồng bằng sông Hồng và Đồng bằng sông Cửu Long, đến những ngọn núi hùng vĩ và những bãi biển cát trắng. Việt Nam, ngày nay, là một trong những điểm đến không thể bỏ qua ở Châu Á ........</p>
       <br> 
    </div>
   </div>


    <div class="article-composition">
        <div class="container">

        </div>
    </div>

<!--
   <div class="article-composition">
        <div class="container">

            <table style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="width: 50%;">
                    <p style="color:#111;font-family: 'ZCOOL QingKe HuangYou', cursive; font-weight:500; font-size:35px; ">ALL POSTS</p>
                </td>
                   
                </tr>
            </table>
            

           <?php
            require_once "./module/ClassPosts-hide.php";
             $getlistpost  = new ClassPosts();
             $getlistpost  = $getlistpost ->getlistTitleAndAvatar();
             $sumcount = sizeof( $getlistpost);
             $count = 0;
             while($count < $sumcount){
                    echo '<a href="./post.php?id='.$getlistpost[$count][0].'">
                    <table class="box-posts">
                           <tr style="width: 100%;">
                               <td style="width: 35%;">
                                 <img style="width: 100%; height:350px" src="'.$getlistpost[$count][2].'">
                               </td>
                               <td style="width: 5%;"></td>
                               <td style="width: 60%;">
                                   <div style="height: 70%;  line-height:80% ; ">
                                       <h1 style="margin-top: 55px;">
                                       '.$getlistpost[$count][1].'
                                       </h1>
                                   </div>
                                   <hr>
                                   <div style="height: 30%; color:#000">
                                      posted by <b style="margin-left:4px;">Admin</b>
                                   </div>
                               </td>
                           </tr>
                       </table>
                   </a>';
                   $count++;
             }
           ?>

            

            </div>
        </div>
        -->

   </div>


    <?php include"./view/footer.php"; ?>
</body>
</html>

