<?php

$title = "Connect-toi";
include_once '../view/include/header.php';

?>


<div class="container">
    <form method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="connect_login" name="connect_login" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" id="connect_pwd" name="connect_pwd">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
include_once '../view/include/footer.php';

