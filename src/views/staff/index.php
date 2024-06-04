<?php
Message::flash();
?>
<div class="tngah">
    <input type="checkbox" id="check">
    <label for="check">
        <i id="btn"><span class="material-symbols-outlined">menu</span></i>
        <i id="cancel"><span class="material-symbols-outlined">close</span></i>
    </label>
    <div class="sidebar">
        <header>Clothing Warehouse</header>
        <ul>
            <li><a href="#"><i></i>Dashboard</a></li>
            <li><a href="#"><i></i>Staff</a></li>
            <li><a href="#"><i></i>Stock</a></li>
            <li><a href="<?= BASEURL . '/logout' ?>"><i></i>Logout</a></li>
        </ul>
    </div>
    <div class="container1">
        <div class="bar">
            <p class="bar1">Clothing Warehouse</p>
        </div>
        <h1 class="hider">Staff Warehouse</h1>
        <div class="tambah">
            <a class="tadd" href="<?= BASEURL . '/staff/add' ?>">Add Staff<span class="material-symbols-outlined">library_add</span></a>
        </div>
        <div class="container2">
            <div class="tabel">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Staff Name</th>
                        <th>Phone Number</th>
                        <th>Salary</th>
                        <th>Customize</th>
                    </tr>               
                        <?php
                            $no=1;
                            foreach($AllStaff as $row):
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td class="nama1"><?= $row['name'] ?></td>
                                <td><?= $row['phone'] ?></td>
                                <td><?= $row['salary'] ?></td>
                                <td class="btncrud">
                                    <button class="tupd" onclick="location.href='<?= BASEURL . '/staff/update/' . $row['id'] ?>' ">Update<span class="material-symbols-outlined">cycle</span></button>
                                </td>
                            </tr>
                        <?php
                            endforeach;
                        ?>
                </table>
                <div class="bar2">
                </div>
                <div class="copy">
                    <p>&copy; 2024 IntaanLailatul. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>