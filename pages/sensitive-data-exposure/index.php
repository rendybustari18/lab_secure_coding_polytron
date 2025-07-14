<?php
$page_title = "Sensitive Data Exposure Labs";
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
                            <h1 class="h2">📊 Sensitive Data Exposure Labs</h1>
                            <span class="vulnerability-badge">High Risk</span>
                        </div>
                        
                        <div class="alert alert-warning" role="alert">
                            <h4 class="alert-heading">About Sensitive Data Exposure</h4>
                            <p>Sensitive data exposure occurs when applications fail to adequately protect sensitive information such as personal data, system logs, and other confidential details.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 1: Sensitive File Exposure</h5>
                                    <span class="lab-difficulty difficulty-easy">Easy</span>
                                </div>
                                <p class="card-text">Discover sensitive files stored on the server that are publicly accessible.</p>
                                <ul class="list-unstyled">
                                    <li>• Exposed .env files containing credentials and secrets</li>
                                    <li>• Configuration files with sensitive information</li>
                                </ul>
                                <a href="lab-1/" class="btn btn-primary">Start Lab 1</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 2: Information Disclosure</h5>
                                    <span class="lab-difficulty difficulty-easy">Easy</span>
                                </div>
                                <p class="card-text">Exploit information disclosure vulnerabilities.</p>
                                <ul class="list-unstyled">
                                    <li>• Extract sensitive information from a hidden or insecure API endpoint</li>
                                    <li>• Discover private data in the frontend response</li>
                                </ul>
                                <a href="lab-2/" class="btn btn-primary">Start Lab 2</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../template/footer.php'; ?>