<header>
    <a href="index.php"><img class="logo" src="images/logo.png" alt="logo" title="Trang chủ Góc sẻ chia" /></a>	
        <?php
        if (isset($_SESSION['current_user'])) {
            print<<<EOP
                <div class="loginOk">
                    <p id="nameDisplay">{$_SESSION['name']}</p>
                    <a href="logOut.php" id="logoutLink">Đăng xuất</a><br/>
                    <a href="changeAccPage.php" id="changeAccLink">Thay đổi thông tin tài khoản</a>
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
    <br/>
</header>
<hr id="middleLine" noshade />