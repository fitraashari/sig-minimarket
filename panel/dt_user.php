        
    <?php
    error_reporting(0);
            include "koneksi.php";
        $id = $_GET['id'];
            $minta="SELECT * FROM user where id_user = '$id'";
            $eksekusi=mysql_query($minta);
            $hasil=mysql_fetch_array($eksekusi);

    ?><div class="form-group">
<form action='u_user.php' method='POST' >
<table class="table">
        <input type="hidden" name="id_user" value='<?php echo "$hasil[id_user]"; ?>'>
            <tr>
        	<td>Nama Lengkap</td>
        	<td>:</td>
        	<td><?php echo "$hasil[nm_user]"; ?></td>
        </tr>

    	<tr>
        	<td>Username</td>
        	<td>:</td>
        	<td><?php echo "$hasil[username]"; ?></td>
        </tr>
    	<tr>
        	<td>Password</td>
        	<td>:</td>
        	<td>********</td>
        </tr>
        	<tr>
        	<td>Email</td>
        	<td>:</td>
        	<td><?php echo "$hasil[email]"; ?></td>
        </tr>
        	<tr>
        	<td>Level</td>
        	<td>:</td>
        	<td><?php echo "$hasil[lvl]"; ?>

        	</td>
        </tr>
                </tr>
        	<tr>
        	<td colspan='3'><center><a href='index.php?page=edituser&id=<?php echo $hasil[id_user];?>'><button type='button' class='btn btn-warning'>Edit</button></a></center></td>
        </tr>
</table>
</form></div>