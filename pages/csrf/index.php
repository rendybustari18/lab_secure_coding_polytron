<?php
$page_title = "CSRF (Cross-Site Request Forgery) Labs";
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
                            <h1 class="h2">🛡️ Cross-Site Request Forgery (CSRF) Labs</h1>
                            <span class="vulnerability-badge">Medium Risk</span>
                        </div>
                        
                        <div class="alert alert-info" role="alert">
                            <h4 class="alert-heading">About CSRF</h4>
                            <p>Cross-Site Request Forgery (CSRF) is an attack that forces an end user to execute unwanted actions on a web application in which they're currently authenticated.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 1: CSRF via Login Form</h5>
                                    <span class="lab-difficulty difficulty-easy">Easy</span>
                                </div>
                                <p class="card-text">Learn about CSRF attacks through vulnerable login forms.</p>
                                <ul class="list-unstyled">
                                    <li>• Form-based CSRF</li>
                                    <li>• Token absence</li>
                                    <li>• Session hijacking</li>
                                </ul>
                                <a href="lab-1/" class="btn btn-primary">Start Lab 1</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 2: CSRF via Profile Update</h5>
                                    <span class="lab-difficulty difficulty-medium">Medium</span>
                                </div>
                                <p class="card-text">Exploit CSRF vulnerabilities in profile update functionality.</p>
                                <ul class="list-unstyled">
                                    <li>• Profile manipulation</li>
                                    <li>• Social engineering</li>
                                    <li>• Data modification</li>
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