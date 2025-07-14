<?php
$page_title = "File Upload Vulnerability Labs";
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
                            <h1 class="h2">📁 File Upload Vulnerability Labs</h1>
                            <span class="vulnerability-badge">High Risk</span>
                        </div>
                        
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">About File Upload Vulnerabilities</h4>
                            <p>File upload vulnerabilities allow attackers to upload malicious files to the server, potentially leading to remote code execution, defacement, or data theft.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 1: Unrestricted File Upload</h5>
                                    <span class="lab-difficulty difficulty-easy">Easy</span>
                                </div>
                                <p class="card-text">Learn about basic file upload vulnerabilities without restrictions.</p>
                                <ul class="list-unstyled">
                                    <li>• No file type validation</li>
                                    <li>• PHP shell upload</li>
                                    <li>• Remote code execution</li>
                                </ul>
                                <a href="lab-1/" class="btn btn-primary">Start Lab 1</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 2: Bypass File Upload Restrictions</h5>
                                    <span class="lab-difficulty difficulty-medium">Medium</span>
                                </div>
                                <p class="card-text">Discover techniques to bypass file upload restrictions.</p>
                                <ul class="list-unstyled">
                                    <li>• MIME type bypass</li>
                                    <li>• Extension manipulation</li>
                                    <li>• Double extension</li>
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