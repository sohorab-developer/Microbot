<?php include_once "header.php"; ?>
<body>
<div class="wrapper">
    <section class="form login">
        <header>MicroBot Chat | Login</header>
        <form action="#">
        <div class="error-txt"></div>
        <div class="field input">
        <label>Email Address</label>
        <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>
        <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
            <input type="submit" value="Continue to Chat">
            </div>
        </form>
        <div class="link">
            Not Yet Signed Up? <a href="index.php">Sign Up</a>
        </div>
    </section>
</div>
<script src="javascript/script.js"></script>
<script src="javascript/login.js"></script>
</body>

</html>