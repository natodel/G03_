<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang chủ | Góc tâm sự - Lắng nghe những sẻ chia</title>
        <link rel="stylesheet" type="text/css" href="css/imgCapsFor4rum.css" />
        <link rel="stylesheet" media="all" href="css/homeStyle.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/signupStyle.css" /> 
        <link rel="shortcut icon" href="images/logo.png" />	
        <link rel="stylesheet" type="text/css" media="all" href="css/containtSliders.css" />    
        <script language="javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script language="javascript" src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
        <script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script language="javascript" src="javascripts/containtSliders.js"></script>
        <script language="javascript" src="javascripts/jquery-ui-1.7.2.custom.min.js"></script>
    </head>

    <body>
        <!--===========START HEADER============-->
        <header>
            <a href="index.php"><img class="logo" src="images/logo.png" alt="logo" title="Trang chủ Góc sẻ chia" /></a>	
            <?php
            if (isset($_SESSION['current_user'])) {
                if ($_SESSION['level'] == 1)
                    $maneger = "</br><a href='Managment.php' id='managerPage'>Quản lý diễn đàn</a>";
                else $maneger = "";
                print<<<EOP
                <div class="loginOk">
                    <a href="logOut.php" id="logoutLink">Đăng xuất</a><inline id="nameDisplay">&Lt;{$_SESSION['name']}&Gt;</inline></br>
                    <a href="changeAccPage.php" id="changeAccLink">Sửa tài khoản</a>
                    {$maneger}
                </div>
EOP;
            } else {
                print<<<EOP
                <form class="loginForm" method="post" action="loginChecking.php">
                    <input type="type" class="styleBox" name="userLogin" placeholder="Tên đăng nhập" required/>
                    <input type="password" class="styleBox" name="passLogin" placeholder="Mật khẩu" required/>
                    <input type="submit" class="submitButton" name="loginButton" value="Đăng nhập"/>
                    <br />
                    <a href="#signupAcc" id="signUpLink">Đăng ký</a>
                </form>
EOP;
            }
            ?>
        </header>

        <hr id="middleLine" noshade />
        <!--===========END HEADER============-->

        <!--===========START MAIN DIV============-->
        <div id="main">
            <div id="featured" >
                <!--==========THUMBNAIL SHOWCASE==========-->
                <div id="thumb">
                    <ul>
                        <li class="ui-tabs-selected" id="nav-fragment-1">
                            <a href="#fragment-1">
                                <img src="images/containtSlider/thumb/1.jpg" alt="" />
                                <p>Gia đình:
                                    <span>Tôi sinh ra trong một gia đình nghèo...</span></p>
                            </a>
                        </li>
                        <li  id="nav-fragment-2">
                            <a href="#fragment-2">
                                <img src="images/containtSlider/thumb/2.jpg" alt="" />
                                <p>Tình yêu:
                                    <span>Tôi và cô ấy yêu nhau đã được 2 năm...</span></p>
                            </a>
                        </li>
                        <li  id="nav-fragment-3">
                            <a href="#fragment-3">
                                <img src="images/containtSlider/thumb/3.jpg" alt="" />
                                <p>Tình bạn:
                                    <span>Đố ai định nghĩa được tình bạn....</span></p>
                            </a>
                        </li>
                        <li  id="nav-fragment-4">
                            <a href="#fragment-4">
                                <img src="images/containtSlider/thumb/4.jpg" alt="" />
                                <p>Học tập:
                                    <span>Trượt ĐH, tôi như lâm vào bước đường cùng...</span></p>
                            </a>
                        </li>
                        <li  id="nav-fragment-5">
                            <a href="#fragment-5">
                                <img src="images/containtSlider/thumb/5.jpg" alt="" />
                                <p>Xã hội:
                                    <span>Đạo đức của thanh niên ngày càng xuống cấp...</span></p>
                            </a>
                        </li>
                        <li  id="nav-fragment-6">
                            <a href="#fragment-6">
                                <img src="images/containtSlider/thumb/6.jpg" alt="" />
                                <p>Thầm kín:
                                    <span>Tôi và anh ấy đã chót....</span></p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="leftArrow"><img src="images/containtSlider/left-arrow.gif" alt="PREV" /></div>
                <div id="rightArrow"><img src="images/containtSlider/right-arrow.gif" alt="NEXT" /></div>
                <!--==========END THUMBNAIL SHOWCASE==========-->

                <!--==========TRUE SIZE IMAGES SHOWCASE==========-->        
                <div id="fragment-1" class="ui-tabs-panel" style="">
                    <img src="images/containtSlider/large/1.jpg" alt="" />
                </div>
                <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
                    <img src="images/containtSlider/large/2.jpg" alt="" />
                </div>
                <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
                    <img src="images/containtSlider/large/3.jpg" alt="" />
                </div>
                <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
                    <img src="images/containtSlider/large/4.jpg" alt="" />
                </div>
                <div id="fragment-5" class="ui-tabs-panel ui-tabs-hide" style="">
                    <img src="images/containtSlider/large/5.jpg" alt="" />
                </div>
                <div id="fragment-6" class="ui-tabs-panel ui-tabs-hide" style="">
                    <img src="images/containtSlider/large/6.jpg" alt="" />
                </div>
                <!--==========TRUE SIZE IMAGES SHOWCASE==========-->        
            </div>
        </div>
        <!--===========START MAIN DIV============-->

        <!--===========START UNDER DIV============-->
        <div class="underDiv">
            <p><a href="#yourSpace" name="yourSpace" id="yourSpaceCaption" ><p>Góc của bạn</p></a>
            <div id="mainwrapper">
                <!-- Image Caption 2 -->
                <a href="forum.php?category=giadinh">
                    <div id="box-2" class="box">
                        <img id="image-2" src="images/2.jpg"/>
                        <span class="caption full-caption">
                            <h3>Gia đình</h3>
                            <p>Lắng nghe những sẻ chia sẻ những mâu thuẫn trong hôn nhân,gia đình, những bận tâm về con cái.v.v.
                                để cùng nhau vượt qua và xây dựng cuộc sống gia đình hạnh phúc.</p>
                        </span>
                    </div>
                </a>
                <!-- Image Caption 3 -->
                <a href="forum.php?category=tinhyeu">
                    <div id="box-3" class="box">
                        <img id="image-3" src="images/3.jpg"/>
                        <span class="caption fade-caption">
                            <h3>Tình yêu</h3>
                            <p>Bạn chưa yêu? Đang yêu? Hay đã từng thất bại trong chuyện tình cảm?
                                Hãy cùng sẻ chia những kinh nghiệm để có một tình yêu đẹp đẽ hơn.</p>
                        </span>
                    </div>
                </a>
                <!-- Image Caption 4 -->
                <a href="forum.php?category=tinhban">
                    <div id="box-4" class="box">
                        <img id="image-4" src="images/4.jpg"/>
                        <span class="caption slide-caption">
                            <h3>Tình bạn</h3>
                            <p>Bạn đang cô đơn? Đang cần có 1 người bạn để chia sẻ? Hay có những vướng mắc, xung đột trong tình cảm bạn bè?
                                Hãy cùng kết bạn và sẻ chia những kinh nghiệm quý báu để luôn có một tình bạn đẹp trong cuộc sống.</p>
                        </span>
                    </div>
                </a>
                <!-- Image Caption 5 -->
                <a href="forum.php?category=hoctapcongviec">
                    <div id="box-5" class="box">
                        <div class="rotate">
                            <img id="image-5" src="images/5.jpg"/>
                            <span class="caption rotate-caption">
                                <h3>Học tập - Công việc</h3>
                                <p>Bạn đang thất vọng khi kết quả học tập, hay việc thi cử không được như mong muốn? 
                                    Bạn cần được sẻ chia về kinh nghiệm học tập. Cùng giúp đỡ nhau để không còn phải đau đầu về những vướng bận đó nữa nhé.  .</p>
                            </span>
                        </div>
                    </div>
                </a>
                <!-- Image Caption 6 -->
                <a href="forum.php?category=thamkin">
                    <div id="box-6" class="box">
                        <img id="image-6" src="images/6.jpg"/>
                        <span class="caption scale-caption">
                            <h3>Thầm kín</h3>
                            <p>Bạn có những tâm sự khó nói không thể bày tỏ cùng ai? Bạn mong muốn được lắng nghe những sẻ chia của mọi người. 
                                Hãy đến chuyên mục &quot;Thầm kín&quot; của Gocsechia để giải tỏa hết những điều muốn nói! </p>
                        </span>
                    </div>
                </a>
                <!-- Image Caption 1 -->
                <a href="giaitri.php">
                    <div id="box-1" class="box">
                        <img id="image-1" src="images/1.jpg"/>
                        <span class="caption simple-caption">
                            <p>Giải trí - thư giãn</p>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <!--===========END UNDER DIV============-->
        <br />

        <?php
        if (!isset($_SESSION['current_user'])) {
            print<<<EOP
        <div id="signupDiv" align="center" style="padding-bottom:400px;">
            <a name="signupAcc"></a>
            <form method="post" action="registerPage.php" id="msform">
                <ul id="progressbar">
                    <li class="active" style="font-size:17px;font-weight:700">THÔNG TIN</li>
                    <li style="font-size:17px;font-weight:700">LIÊN HỆ</li>
                    <li style="font-size:17px;font-weight:700">TÀI KHOẢN</li>
                </ul>

                <fieldset>
                    <h2 class="fs-title">Thông tin cá nhân</h2>
                    <input type="text" name="name" placeholder="Họ tên"/>
                    <input type="date" name="birthday" placeholder="Ngày sinh"/>
                    <input type="text" name="phone" placeholder="Số điện thoại"  />
                    <input type="button" name="next" class="next action-button" value="Tiếp theo" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Địa chỉ liên hệ</h2>
                    <input type="email" name="email" placeholder="Email" />
                    <input type="text" name="facebook" placeholder="Facebook"  />
                    <input type="text" name="gplus" placeholder="Google Plus"  />
                    <input type="button" name="previous" class="previous action-button" value="Quay lại" />
                    <input type="button" name="next" class="next action-button" value="Tiếp theo" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Thiết lập tài khoản</h2>
                    <input type="text" name="username" placeholder="Tài khoản" required />
                    <input type="password" name="password" placeholder="Mật khẩu" required />
                    <input type="password" name="rePassword" placeholder="Nhập lại mật khẩu" required />
                    <input type="button" name="previous" class="previous action-button" value="Quay lại" />
                    <input type="submit" name="next" class="submit action-button" value="Hoàn tất" />
                </fieldset>
            </form>
        </div>
EOP;
        }
        ?>

        <script type="text/javascript" src="javascripts/multiSignupScript.js"></script>
    </body>
</html>
