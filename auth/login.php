​<?php include '../pages/header.php'; ?>
<a href="../index.php">Back to home page</a>
<div class="container mt-4 p-4 shadow-rounded-3 w-50">
    <h1 class="text-center">Login</h1>
    <form action="checkLogin.php" method="post">
    <div class="mb-2">
        <label for="" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter your email..">
    </div>
    <div class="mb-2">
        <label for="" class="form-label">Password</label>
        <input type="password" name="pw" class="form-control" placeholder="Enter your password..">
    </div>
    <p class="text-center">Don't have an account? <a href="register.php">Register here</a></p>
    <button name="login" class="btn btn-outline-primary d-flex mx-auto">Login</button>
    </form>
</div>
<?php include '../pages/footer.php'; ?>