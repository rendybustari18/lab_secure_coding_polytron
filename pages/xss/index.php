<?php
$page_title = "XSS (Cross-Site Scripting) Labs";
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
                            <h1 class="h2">🔗 Cross-Site Scripting (XSS) Labs</h1>
                            <span class="vulnerability-badge">High Risk</span>
                        </div>
                        
                        <div class="alert alert-warning" role="alert">
                            <h4 class="alert-heading">About Cross-Site Scripting (XSS)</h4>
                            <p>XSS attacks enable attackers to inject client-side scripts into web pages viewed by other users. These vulnerabilities can lead to session hijacking, defacement, and malicious redirects.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 1: Stored XSS</h5>
                                    <span class="lab-difficulty difficulty-medium">Medium</span>
                                </div>
                                <p class="card-text">Learn about stored XSS through profile update functionality.</p>
                                <ul class="list-unstyled">
                                    <li>• Persistent XSS attacks</li>
                                    <li>• Database-stored payloads</li>
                                    <li>• Profile injection</li>
                                </ul>
                                <a href="lab-1/" class="btn btn-primary">Start Lab 1</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 2: Reflected XSS</h5>
                                    <span class="lab-difficulty difficulty-easy">Easy</span>
                                </div>
                                <p class="card-text">Discover reflected XSS vulnerabilities in login forms.</p>
                                <ul class="list-unstyled">
                                    <li>• Non-persistent XSS</li>
                                    <li>• URL parameter injection</li>
                                    <li>• Form input reflection</li>
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