<?php
$page_title = "Insufficient Logging and Monitoring Labs";
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
                            <h1 class="h2">📝 Insufficient Logging and Monitoring Labs</h1>
                            <span class="vulnerability-badge">Medium Risk</span>
                        </div>
                        
                        <div class="alert alert-info" role="alert">
                            <h4 class="alert-heading">About Insufficient Logging and Monitoring</h4>
                            <p>Insufficient logging and monitoring vulnerabilities allow attackers to maintain persistence, pivot to more systems, and tamper, extract, or destroy data without detection.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 1: Missing Security Logs</h5>
                                    <span class="lab-difficulty difficulty-easy">Easy</span>
                                </div>
                                <p class="card-text">Discover systems with inadequate security logging.</p>
                                <ul class="list-unstyled">
                                    <li>• Failed login attempts</li>
                                    <li>• No audit trails</li>
                                    <li>• Silent failures</li>
                                </ul>
                                <a href="lab-1/" class="btn btn-primary">Start Lab 1</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 2: Poor Monitoring</h5>
                                    <span class="lab-difficulty difficulty-medium">Medium</span>
                                </div>
                                <p class="card-text">Exploit systems with poor security monitoring.</p>
                                <ul class="list-unstyled">
                                    <li>• No alerting systems</li>
                                    <li>• Unmonitored activities</li>
                                    <li>• Log tampering</li>
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