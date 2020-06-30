<div class="form-group">
<form action='in_user.php' method='POST' >
<table class="table">
        
            <tr>
        	<td>Nama Lengkap</td>
        	<td>:</td>
        	<td><input type="text" class="form-control" name="nama_l" maxlength="30" required="required" placeholder="Nama Lengkap" size="30"/></td>
        </tr>

    	<tr>
        	<td>Username</td>
        	<td>:</td>
        	<td><input type="text" class="form-control" name="username" maxlength="10" required="required" placeholder="Username"/></td>
        </tr>
    	<tr>
        	<td>Password</td>
        	<td>:</td>
        	<td><input type="password" class="form-control" name="password" maxlength="8" required="required" placeholder="Masukkan 8 digit password" size="22"/></td>
        </tr>
        	<tr>
        	<td>Email</td>
        	<td>:</td>
        	<td><input type="email" class="form-control" name="email" required="required" placeholder="Email" /></td>
        </tr>
        	<tr>
        	<td>Level</td>
        	<td>:</td>
        	<td>
        		<select name="lvl" class="form-control">
        		<option value="admin">Admin</option>
        		<option value="member">Member</option>
        		</select>

        	</td>
        </tr>
                </tr>
        	<tr>
        	<td colspan='3'><center><input type=submit class="btn btn-info" value=Simpan> <input type=button class="btn btn-warning" value=Batal onclick=self.history.back()></center></td>
        </tr>
</table>
</form>
</div>