<?php
$data = Message::getData();
$email = "";
$username = "";
$password = "";
if($data) {
    $email = $data['email'];
    $username = $data['username'];
    $password = $data['password'];
}
Message::flash();
?>
<div class="tngah">
    <div class="container">
        <div class="kiri"><p>Clothing Warehouse</p></div>
        <div class="kanan">
            <div class="isikanan">
                <form id="sup" action="<?= BASEURL . '/registerproccess' ?>" method="POST">
                    <p class="regis">SIGN UP</p>
                    <div class="formregis">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Input email" autocomplete="off" value="<?= $email ?>">
                    </div>    
                    <div class="formregis">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" autocomplete="off" value="<?= $username ?>">
                    </div>
                    <div class="formregis">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" autocomplete="off" value="<?= $password ?>">
                    </div>
                    <div class="tanya">
                        <p class="tanya1">Have an account?</p>
                        <a class="tanya2" href="<?= BASEURL . '/login' ?>">Login</a>
                    </div>
                    <button class="btnsi" type="submit"">SIGN UP</button>
                </form>             
            </div>
        </div>
    </div>  
</div>  