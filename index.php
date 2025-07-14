<?php
require_once 'config/env.php';
require_once 'template/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 px-0">
            <?php include 'template/nav.php'; ?>
        </div>
        
        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 mt-60">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="jumbotron bg-primary text-white rounded p-5 mb-4">
                            <h1 class="display-4">🔐 Cybersecurity Learning Platform</h1>
                            <p class="lead">Master web application security through hands-on vulnerability labs</p>
                            <hr class="my-4">
                            <p>Practice ethical hacking and learn to identify and exploit common web vulnerabilities in a safe, controlled environment.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">🎯 Vulnerability Labs</h5>
                                <p class="card-text">Explore 10+ different vulnerability categories with practical labs</p>
                                <ul class="list-unstyled">
                                    <li>• SQL Injection</li>
                                    <li>• Cross-Site Scripting (XSS)</li>
                                    <li>• Command Injection</li>
                                    <li>• File Upload Vulnerabilities</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">🛡️ Security Concepts</h5>
                                <p class="card-text">Learn about authentication, authorization, and secure coding practices</p>
                                <ul class="list-unstyled">
                                    <li>• Broken Authentication</li>
                                    <li>• Access Control</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">📊 Practice & Learn</h5>
                                <p class="card-text">Each lab includes detailed explanations and real-world scenarios</p>
                                <ul class="list-unstyled">
                                    <li>• Step-by-step tutorials</li>
                                    <li>• Vulnerable code examples</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="alert alert-warning" role="alert">
                            <h4 class="alert-heading">⚠️ Important Security Notice</h4>
                            <p>This platform contains intentionally vulnerable code for educational purposes. <strong>Never use these techniques on systems you don't own or have explicit permission to test.</strong></p>
                            <hr>
                            <p class="mb-0">Always practice ethical hacking and follow responsible disclosure principles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'template/footer.php'; ?>