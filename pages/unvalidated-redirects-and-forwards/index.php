<?php
$page_title = "Unvalidated Redirects and Forwards Labs";
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
                            <h1 class="h2">🔄 Unvalidated Redirects and Forwards Labs</h1>
                            <span class="vulnerability-badge">Medium Risk</span>
                        </div>
                        
                        <div class="alert alert-warning" role="alert">
                            <h4 class="alert-heading">About Unvalidated Redirects and Forwards</h4>
                            <p>Unvalidated redirects and forwards occur when applications redirect users to other pages using untrusted data, potentially leading to phishing attacks and malicious redirects.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 1: Open Redirect</h5>
                                    <span class="lab-difficulty difficulty-easy">Easy</span>
                                </div>
                                <p class="card-text">Exploit open redirect vulnerabilities in login systems.</p>
                                <ul class="list-unstyled">
                                    <li>• URL parameter manipulation</li>
                                    <li>• Phishing attack vectors</li>
                                    <li>• Redirect validation bypass</li>
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