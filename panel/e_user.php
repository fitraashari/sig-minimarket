        
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
        	<td><input type="text" class="form-control" name="nama_l" maxlength="30" required="required" placeholder="Nama Lengkap" size="30" value='<?php echo "$hasil[nm_user]"; ?>'/></td>
        </tr>

    	<tr>
        	<td>Username</td>
        	<td>:</td>
        	<td><input type="text" class="form-control" name="username" value='<?php echo "$hasil[username]"; ?>' maxlength="10" required="required" placeholder="Username"/></td>
        </tr>
    	<tr>
        	<td>Password</td>
        	<td>:</td>
        	<td><input type="password" class="form-control" name="password"  maxlength="8" placeholder="" size="22"/>*Kosongkan jika tidak ingin merubah password</td>
        </tr>
        	<tr>
        	<td>Email</td>
        	<td>:</td>
        	<td><input type="email" class="form-control" name="email" value='<?php echo "$hasil[email]"; ?>' maxlength="20" required="required" placeholder="Email" size="25"/></td>
        </tr>
        	<tr>
        	<td>Level</td>
        	<td>:</td>
        	<td>
            <?php
            if ($_SESSION['lvl'] == "admin"){
            ?>
        		<select name="lvl" class="form-control" >
                <?php 
echo "<option value=admin"; 
                if ($hasil['lvl'] == "admin"){
                echo " selected"; 
                }
                echo">Admin</option>";
?>
        		

        		<option value="member" <?php 
                if ($hasil['lvl'] == "member"){
                echo " selected"; 
                }?>>
                Member</option>
        		</select>
<?php
}else
{
    echo $hasil['lvl'];
    echo"<input type='hidden' name='lvl' value='$hasil[lvl]'>";
}
?>
        	</td>
        </tr>
                </tr>
        	<tr>
        	<td colspan='3'><center><input type=submit class="btn btn-info" value=Simpan> <input type=button class="btn btn-warning" value=Batal onclick=self.history.back()></center></td>
        </tr>
</table>
</form></div>