<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<form action="<?php echo base_url();?>register" method="POST" class="text-white">

    <fieldset class="form-group">
        <legend class="text-white px-3 pt-4">
			Register student information here
			<hr class="bg-danger">
        </legend>
    </fieldset>

    <div class="px-5">
        <fieldset class="form-group">
            <label for="fullname" class="form-control-label">fullname**</label><small class="text-white"> ( Surname, Firstname Middlename )</small>
            <input type="text" name="fullname" id="fullname" class="form-control form-control-lg" required>
        </fieldset>

        <fieldset class="form-group">
            <label for="age" class="form-control-label">age**</label>
            <input type="number" name="age" id="age" class="form-control form-control-lg" required minlength="3">
        </fieldset>

        <fieldset class="form-group">
            <label for="birthday" class="form-control-label">birthday**</label><small class="text-white"> ( yyyy-mm-dd )</small>
            <input type="date" name="birthday" id="birthday" class="form-control form-control-lg" required>
        </fieldset>

        <fieldset class="form-group">
            <label for="address" class="form-control-label">address**</label>
            <input type="text" name="address" id="address" class="form-control form-control-lg" required>
        </fieldset>

        <fieldset class="form-group">
            <label for="student_number" class="form-control-label">student number**</label>
            <input type="number" name="student_number" id="student_number" class="form-control form-control-lg" required>
        </fieldset>

        <fieldset class="form-group">
            <label for="campus" class="form-control-label">campus**</label>
            <input type="text" name="campus" id="campus" class="form-control form-control-lg" required>
        </fieldset>

        <fieldset class="form-group">
            <label for="username" class="form-control-label">username**</label>
            <input type="email" name="username" id="username" class="form-control form-control-lg" required>
        </fieldset>

        <fieldset class="form-group">
            <label for="password" class="form-control-label">password**</label><small class="text-white"> ( minimum of 8 characters )</small>
            <input type="password" name="password" id="password" class="form-control form-control-lg" required minlength="8">
        </fieldset>

        <fieldset class="form-group">
            <label for="confirm_password" class="form-control-label">confirmpassword**</label><small class="text-white"> ( minimum of 8 characters )</small>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-lg" required minlength="8">
        </fieldset>

        <fieldset class="form-group">
            <button type="submit" name="register" class="btn btn-outline-success float-right my-2">Register</button>
        </fieldset>
    </div>
</form>
