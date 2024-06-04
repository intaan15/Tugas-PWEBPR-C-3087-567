<?php
$data = Message::getData();
if($data) {
    $staff['name'] = $data['name'];
    $staff['phone'] = $data['phone'];
    $staff['salary'] = $data['salary'];
}
Message::flash();
?> 
<div class="tngah">
    <div class="container">
        <div class="kedua">
            <div class="atas"><p>Update Clothing Warehouse</p></div>
            <img class="bawah" src="<?= BASEURL . '/public/img/bg1.png' ?>" alt="">
        </div>
        <form class="pertama" id="form" action="<?= BASEURL . '/staff/updateproccess'?>" method="post"> 
            <input type="hidden" name="id" value="<?= $staff['id'] ?>">
            <input type="hidden" name="mode" id="mode" value="update">
            <div class="formregis">
                <label for="name">Staff Name</label>
                <input type="text" id="name" name="name" placeholder="Input Staff" autocomplete="off" value="<?= $staff['name'] ?>">
            </div>
            <div class="formregis">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" placeholder="Input Phone Number" autocomplete="off" value="<?= $staff['phone'] ?>">
            </div>
            <div class="formregis">
                <label for="salary">Salary</label>
                <input type="text" id="salary" name="salary" placeholder="Input Salary" autocomplete="off" value="<?= $staff['salary'] ?>">
            </div>
            <div class="btnflek">
                <button type="button" onclick="location.href='<?= BASEURL . '/staff' ?>'" class="btnsend">BACK</button>
                <button type="button" onclick="edit('delete')" class="btnsend">DELETE</button>
                <button type="button" onclick="edit('update')" class="btnsend">SEND</button>
            </div>
        </form>
    </div>   
</div>