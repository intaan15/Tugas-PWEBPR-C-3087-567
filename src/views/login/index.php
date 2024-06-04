<?php
$data = Message::getData();
$username = "";
$password = "";
if($data) {
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
                    <form id="sin" action="<?= BASEURL . '/loginproccess' ?>" method="POST">    
                        <p class="regis">LOGIN</p>
                        <div class="formregis">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" placeholder="Username" autocomplete="off" value="<?= $username ?>">
                            <i class="icon"></i>
                        </div>
                        <div class="formregis">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" autocomplete="off" value="<?= $password ?>">
                            <i class="icon"></i>
                        </div>
                        <div class="tanya">
                            <p class="tanya1">Don't have an account?</p>
                            <a class="tanya2" href="<?= BASEURL . '/register' ?>">Sign Up</a>
                        </div>
                        <button class="btnsi" type="submit">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>   
    </div>