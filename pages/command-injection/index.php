<?php
$page_title = "Command Injection Labs";
require_once '../../config/env.php';
require_once '../../template/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 px-0">
            <?php include '../../template/nav.php'; ?>
        </div>
        
        <div class="col-md-9 col-lg-10 mt-60">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="h2">⚡ Command Injection Labs</h1>
                            <span class="vulnerability-badge">Critical Risk</span>
                        </div>
                        
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">About Command Injection</h4>
                            <p>Command injection vulnerabilities allow attackers to execute arbitrary system commands on the host operating system, potentially leading to complete system compromise.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 mb-8">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 1: Domain Name Injection</h5>
                                    <span class="lab-difficulty difficulty-easy">Easy</span>
                                </div>
                                <p class="card-text">Learn about command injection through domain lookup functionality.</p>
                                <ul class="list-unstyled">
                                    <li>• Basic command injection</li>
                                    <li>• Command chaining</li>
                                    <li>• System command execution</li>
                                </ul>
                                <a href="lab-1/" class="btn btn-primary">Start Lab 1</a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../template/footer.php'; ?>