<?php
$page_title = "Broken Access Control Labs";
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
                            <h1 class="h2">🚫 Broken Access Control Labs</h1>
                            <span class="vulnerability-badge">High Risk</span>
                        </div>
                        
                        <div class="alert alert-warning" role="alert">
                            <h4 class="alert-heading">About Broken Access Control</h4>
                            <p>Broken access control vulnerabilities allow attackers to bypass authorization and access unauthorized functionality or data, often leading to privilege escalation.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 1: Vertical Privilege Escalation</h5>
                                    <span class="lab-difficulty difficulty-medium">Medium</span>
                                </div>
                                <p class="card-text">Exploit vertical privilege escalation to gain admin access.</p>
                                <ul class="list-unstyled">
                                    <li>• Role-based bypass</li>
                                    <li>• Admin panel access</li>
                                    <li>• Parameter manipulation</li>
                                </ul>
                                <a href="lab-1/" class="btn btn-primary">Start Lab 1</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 2: Horizontal Privilege Escalation </h5>
                                    <span class="lab-difficulty difficulty-easy">Easy</span>
                                </div>
                                <p class="card-text">Access other users' data through horizontal privilege escalation.</p>
                                <ul class="list-unstyled">
                                    <li>• User ID manipulation</li>
                                    <li>• Data access bypass</li>
                                    <li>• Profile enumeration</li>
                                </ul>
                                <a href="lab-2/" class="btn btn-primary">Start Lab 2</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card lab-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title">Lab 3: Price Manipulation</h5>
                                    <span class="lab-difficulty difficulty-easy">Easy</span>
                                </div>
                                <p class="card-text">Exploit business logic flaws in e-commerce pricing.</p>
                                <ul class="list-unstyled">
                                    <li>• Price tampering</li>
                                    <li>• Negative quantities</li>
                                    <li>• Discount abuse</li>
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