<?php
$page_title = "SQL Injection Labs";
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
                            <h1 class="h2">💉 SQL Injection Labs</h1>
                            <span class="vulnerability-badge">High Risk</span>
                        </div>
                        
                        <div class="alert alert-info" role="alert">
                            <h4 class="alert-heading">About SQL Injection</h4>
                            <p>SQL injection is a code injection technique that exploits security vulnerabilities in database layer of applications. It allows attackers to manipulate SQL queries by injecting malicious SQL code.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 1: Admin Login Bypass</h5>
                                    <span class="lab-difficulty difficulty-easy">Easy</span>
                                </div>
                                <p class="card-text">Learn how to bypass admin authentication using SQL injection in login forms.</p>
                                <ul class="list-unstyled">
                                    <li>• Union-based SQL injection</li>
                                    <li>• Authentication bypass</li>
                                    <li>• Admin panel access</li>
                                </ul>
                                <a href="lab-1/" class="btn btn-primary">Start Lab 1</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 2: Blind SQL Injection</h5>
                                    <span class="lab-difficulty difficulty-medium">Medium</span>
                                </div>
                                <p class="card-text">Discover how to exploit blind SQL injection vulnerabilities in login forms.</p>
                                <ul class="list-unstyled">
                                    <li>• Boolean-based blind injection</li>
                                    <li>• Time-based blind injection</li>
                                    <li>• Information extraction</li>
                                </ul>
                                <a href="lab-2/" class="btn btn-primary">Start Lab 2</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 3: URL Parameter Injection</h5>
                                    <span class="lab-difficulty difficulty-easy">Easy</span>
                                </div>
                                <p class="card-text">Exploit SQL injection through URL parameters and GET requests.</p>
                                <ul class="list-unstyled">
                                    <li>• GET parameter injection</li>
                                    <li>• Error-based injection</li>
                                    <li>• Database enumeration</li>
                                </ul>
                                <a href="lab-3/" class="btn btn-primary">Start Lab 3</a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../template/footer.php'; ?>