<?php
$page_title = "Broken Authentication Lab 1 - Weak Password Policy";
require_once '../../../config/env.php';
require_once '../../../template/header.php';

$message = '';
$attempts = $_SESSION['login_attempts'] ?? 0;
$alert_class = "alert-danger";
$is_login = false;
$ttl = 5*60;
$limit = 5;

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if(empty($_SESSION['login_attempts_lock'])){
    $_SESSION['login_attempts_lock'] = 0;
}

if(empty($_SESSION['login_attempts_time_lock'])){
    $_SESSION['login_attempts_time_lock'] = 0;
}

$attempts_lock = $_SESSION['login_attempts_lock'];

function validateCSRFToken() {
    if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) ||
        !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        return false;
    }
    return true;
}

function validate_password(string $password): array {
    $errors = [];

    if (strlen($password) < 8) {
        $errors[] = 'Password must be at least 8 characters long.';
    }
    if (!preg_match('/[a-z]/', $password)) {
        $errors[] = 'Password must include at least one lowercase letter.';
    }
    if (!preg_match('/[A-Z]/', $password)) {
        $errors[] = 'Password must include at least one uppercase letter.';
    }
    if (!preg_match('/\d/', $password)) {
        $errors[] = 'Password must include at least one number.';
    }
    if (!preg_match('/[\W_]/', $password)) {
        $errors[] = 'Password must include at least one special character.';
    }

    return $errors;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(time() - $_SESSION['login_attempts_time_lock'] > $ttl){
        $_SESSION['login_attempts_time_lock'] = 0;
    }

    if(!validateCSRFToken()){
        $message = "Invalid CSRF token. Access denied.";
    }else if(time() - $_SESSION['login_attempts_time_lock'] < $ttl){
        $message = "Your account is locked. Please try again later in 5 minutes.";
    }else{
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        
        $_SESSION['login_attempts'] = $attempts + 1;
        $_SESSION['login_attempts_lock'] = $_SESSION['login_attempts_lock'] + 1;

        $query = "SELECT * FROM users WHERE email = ? AND password = ?";

        try {
            $result = $pdo->prepare($query);
            $result->execute([$email,sha1($password)]);
            if ($result && $result->rowCount() > 0) {
                $user = $result->fetch(PDO::FETCH_ASSOC);
                $password_testing = htmlspecialchars($password);
                $errors   = validate_password($password_testing);
                if (count($errors) > 0) {
                    $message = "Login successful! Weak password detected: " . htmlspecialchars($password);
                }else{
                    $message = "Login successful!";
                }
                $alert_class = "alert-info";
                $is_login = true;
            } else {
                $message = "Invalid credentials. Attempt #" . $_SESSION['login_attempts'];
                if($_SESSION['login_attempts_lock'] >= $limit){
                    $_SESSION['login_attempts_time_lock'] = time();
                    $_SESSION['login_attempts_lock'] = 0;
                }
            }
        } catch (PDOException $e) {
            $error_message = "Database error: " . $e->getMessage();
        }
    }
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 px-0">
            <?php include '../../../template/nav.php'; ?>
        </div>
        
        <div class="col-md-9 col-lg-10 mt-60">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="../">Broken Authentication</a></li>
                                <li class="breadcrumb-item active">Lab 1</li>
                            </ol>
                        </nav>
                        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="h2">Lab 1: Weak Password Policy</h1>
                            <span class="lab-difficulty difficulty-easy">Easy</span>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Login System</h5>
                            </div>
                            <div class="card-body">
                                <?php if ($message): ?>
                                    <div class="alert <?php echo $alert_class;?>" role="alert">
                                        <?php echo $message; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if(!$is_login): ?>
                                <form method="post">

                                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">email:</label>
                                        <input type="text" class="form-control" id="email" name="email" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password:</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                                <?php endif; ?>
                                <div class="mt-3">
                                    <small class="text-muted">Login attempts: <?php echo $attempts; ?></small>
                                    <br>
                                    <small class="text-muted">Lock Login attempts: <?php echo $attempts_lock; ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">💡 Lab Objectives</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li>✅ Exploit weak passwords</li>
                                    <li>✅ Perform brute force attack</li>
                                    <li>✅ No rate limiting bypass</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="mb-0">🛠️ Common Passwords</h5>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="passwordsAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#weak">
                                                Weak Passwords
                                            </button>
                                        </h2>
                                        <div id="weak" class="accordion-collapse collapse" data-bs-parent="#passwordsAccordion">
                                            <div class="accordion-body">
                                                Try: 123456, password, admin, test, 12345
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../../template/footer.php'; ?>