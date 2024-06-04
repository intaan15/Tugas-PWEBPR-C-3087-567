<?php
$data = Message::getData();
$name = "";
$phone = "";
$salary = "";
if($data) {
    $name = $data['name'];
    $phone = $data['phone'];
    $salary = $data['salary'];
}
Message::flash();
?> 
<div class="tngah">
    <div class="container">
        <div class="kedua">
            <div class="atas"><p>Clothing Warehouse</p></div>
            <img class="bawah" src="<?= BASEURL . '/public/img/bg1.png' ?>" alt="">
        </div>
        <form class="pertama" id="ins" action="<?= BASEURL . '/staff/addproccess'?>" method="post"> 
            <div class="formregis">
                <label for="name">Staff Name</label>
                <input type="text" id="name" name="name" placeholder="Input Staff" autocomplete="off" value="<?= $name ?>">
            </div>
            <div class="formregis">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" placeholder="Input Phone Number" autocomplete="off" value="<?= $phone ?>">
            </div>
            <div class="formregis">
                <label for="salary">Salary</label>
                <input type="text" id="salary" name="salary" placeholder="Input Salary" autocomplete="off" value="<?= $salary ?>">
            </div>
            <div class="btnflek">
                <button type="button" onclick="location.href='<?= BASEURL . '/staff' ?>'" class="btnsend">BACK</button>
                <button type="submit" class="btnsend">SEND</button>
            </div>
        </form>
    </div>    
</div>