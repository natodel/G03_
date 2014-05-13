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