<?php include '../pages/header.php'; ?>
<a href="../index.php">Back to home page</a>
<div class="container mt-4 p-4 shadow rounded-3 w-50">
    <h1 class="text-center">Register</h1>
    <form action="insert.php" method="post">
        <div class="mb-2">
            <label for="name" class="form-label">User Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your username..">
       </div>
        <div class="mb-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email..">
        </div>
        <div class="mb-2">
            <label for="pw" class="form-label">Password</label>
            <input type="password" name="pw" class="form-control" placeholder="Enter your password..">
        </div>
        <p class="text-center">Already have an account? <a href="login.php">Login here</a></p>
        <button name="register" class="btn btn-primary d-flex mx-auto">Register</button>
    </form>
</div>
<?php include '../pages/footer.php'; ?>