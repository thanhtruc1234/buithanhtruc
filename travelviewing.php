<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to VietNam</title>
        <script src="include/script/ckeditorbasic/ckeditor.js"></script>
        <link rel="icon" href="./upload/logodulichht.png">
        <link rel="stylesheet" href="./include/fontawesome/css/all.css">
        <link rel="stylesheet" href="./include/style/bootstrap.css">
        <link rel="stylesheet" href="include/mystyle45646.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Font Awesome Icon Library -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <?php session_start(); ?>
        <style>
            body{
                background: #f8f8f8;
            }
            .box-posts{
                background: #EEE5DE;
                border:none;
                border-radius: 15px;
                box-shadow: 0px 0px 5px 5px #aaa;
            }
            .box-posts:hover{
                box-shadow: 0px 0px 5px 5px #789;
            }
            td, tr{
                padding-top: 15px;
            }
            input.danhgia{
                width: 400px;
                height: 50px;
                padding: 10px;
            }
.guidanhgia{
    left: 200px;
}
div.stars {
  width: 270px;
  display: inline-block;

}
input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;

}
input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}
input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
input.star-1:checked ~ label.star:before { color: #F62; } 
label.star:hover { transform: rotate(-15deg) scale(1.3); }
label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
.textdanhgia{
    padding-left: 200px;
}

        </style>
    }

    </head>
    
        
    <?php require_once "./view/header.html" ?>

    <div class="container" >
    <br>
    <h1 style="color: #DAA520;">	

    <?php
    require_once './module/travelPost.php';
         $getClass = new travelPost();
         $getidtravle = $_GET['id'];
         $getdata = $getClass->getTravelviewingByID($getidtravle);
         $getListcmt =  $getClass->getListcomment($getidtravle);
        $id = $_GET['id'];
         if(isset($_POST['cmt'])){
            $email = $_SESSION['email'];
            $post=$_GET['id'];
            $cmt = $_POST['cmt'];
            $access = $getClass->addcomment($email,$post,$cmt);
            unset($_POST['cmt']);
            echo '<script>window.location="./travelviewing.php?id='.$id.'";</script>';
        }

        if ($getListcmt!=false) $getCount = sizeof($getListcmt);
        else $getCount=0;

        $getClass->dieconnect();

       

    ?>

<?php echo $getdata[4]; ?></h1>
<br><br>
<div class="row">
            <div class="col-8">

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
        <img class="d-block w-100" style="width: 100%; height:400px; "  src="<?php echo $getdata[1]; ?>">

    </div>

    <!--Slide 2-->
    <div class="carousel-item">
        <img  style="width: 100%; height:400px;" class="d-block w-100" src="<?php echo $getdata[2]; ?>">
    </div>
    <!--Slide 3-->
    <div class="carousel-item">
        <img  style="width: 100%; height:400px;" class="d-block w-100" src="<?php echo $getdata[3]; ?>">
    </div>

</div>



<!--Cho thêm khiển chuyển slide trước, sau nếu muốn-->
    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Trước</span></a>
    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Sau</span> </a>
<!--Hết tạo điều khiển chuyển Slide-->

</div>

<!--Het-->
            </div>
            <div class="col-4"  style="background: #eee;">
                <h3 style="color: #CD5555;">Thông tin chuyến đi</h3>
                <table>
                <tr>
                <tr>
                                                        <td><i class="fas fa-barcode"></i></td>
                                                        <td style="padding-left: 10px;"><b>Mã chuyến đi:  </b><span style="color:  #ff9900;"><?php echo $getdata[6]; ?></span></td>
                                                    </tr>
                                                    <tr>
                                                            <td><i class="fas fa-calendar-alt"></i></td>
                                                            <td style="padding-left: 10px;"><b>Ngày khởi hành: </b><span style="color:  #ff9900;"><?php echo $getdata[7]; ?></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="far fa-clock"></i></td>
                                                            <td style="padding-left: 10px;"><b>Thời gian: </b><span style="color:  #ff9900;"> <?php echo $getdata[8]; ?> day</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td> <i class="fas fa-plane-departure"></i></td>
                                                            <td style="padding-left: 10px;"><b>Nơi khởi hành: </b> <span style="color:  #ff9900;"><?php echo $getdata[9]; ?></span></td>
                                                        </tr>
                                                        <tr>
                                                                <td> <i class="fas fa-plane-arrival"></i></td>
                                                                <td style="padding-left: 10px;"><b>Địa điểm đến: </b><span style="color:  #ff9900;"><?php echo $getdata[10]; ?></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td> <i class="fas fa-chair"></i></td>
                                                                <td style="padding-left: 10px;"><b>Số lượng chỗ ngồi: </b><span style="color: #ff9900;"> <?php echo $getdata[11]; ?></span></td>
                                                            </tr>
                </table>
                <div style=" font-weight: 500;background: #f57d00; text-align:center; position:absolute; bottom:20px; width:92%; height:40px; color:#eee; line-height:40px;">
                    <span>Số điện thoại liên hệ: <?php echo $getdata[12]; ?></span>
                </div>
            </div>
        </div>
        <br>

        <!--talk about-->
        <div style="background: #eee; padding:15px">
            <h3>Talk about</h3>
            <p>
             <?php echo $getdata[5]; ?>
            </p>
        </div>
            <br>
        <div style="background: #eee; padding:15px">
                    <h2>Bình luận</h2>
                    <div style="width: 100%; border-radius: 3px; padding: 10px">
                       <?php if(isset($_SESSION['email'])) echo ' <form method="post">
                            <textarea name="cmt" id="cmt" style=" "></textarea>
                            <div style="text-align: right; margin-top: 15px">
                            <button class="btn btn-secondary">Bình luận</button> </div>
                        </form>
                        <script> CKEDITOR.replace(\'cmt\');</script>';
                        else {
                            echo '<span>Xin vui lòng <a href="./login.php">login</a> bình luận!!</span>';
                        }
                       ?>

                        <hr>
                        <span style="font-size: 13px; margin-left:10px; position:relative; top:-20px;">Have all <?php echo $getCount ?> Bình Luận</span>

                     <?php

                            $dem=0;
                         while($dem++ < $getCount)  echo ' <div class="row" style="margin-top:10px">
                           <div class="col-1" style="text-align: center;">
                               <img class="imgicon-avatar-cmt" style="float:left; width:60px; border-radius:60px;"  src="./upload/unnamed.png">
                           </div>
                           <div class="col-11">
                               <span style="font-weight: 500">'.$getListcmt[$dem-1][1].'</span><br>
                               <span style="font-family: none;">'.$getListcmt[$dem-1][0].'</span>
                           </div>
                         </div>';
                        ?>
                    </div>

        </div>
    </div>
    <h2 class="textdanhgia">Đánh giá của bạn</h2>
<div class="stars" >
  <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
</div>
    <div class="danhgia">
    <input class="danhgia" type="text" placeholder="Cảm nhận về Tour?"></input>
    <br><br>
    <input class="danhgia" type="text" placeholder="Bạn đi cùng với ai?" />
    <br><br>
    <input class="danhgia" type="text" placeholder="Có kỷ niệm nào đáng nhớ không?" />
    </div>
    <br><br>
    <div>
        <button class="guidanhgia" type="submit">Gửi đánh giá</button>
    </div>
    <br><br>
    <?php require_once"./view/footer.php"; ?>
   
   </body>
   </html>