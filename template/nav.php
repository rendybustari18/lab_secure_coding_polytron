<nav class="sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' && !isset($_GET['page']) ? 'active' : ''; ?>" 
                   href="<?php echo BASE_URL; ?>">
                    🏠 Dashboard
                </a>
            </li>
            
            <li class="nav-item">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Injection Vulnerabilities</span>
                </h6>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/sql-injection/">
                    💉 SQL Injection
                </a>
            </li>
        
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/command-injection/">
                    ⚡ Command Injection
                </a>
            </li>
            
            <li class="nav-item">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Cross-Site Attacks</span>
                </h6>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/xss/">
                    🔗 Cross-Site Scripting (XSS)
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/csrf/">
                    🛡️ Cross-Site Request Forgery
                </a>
            </li>
            
            <li class="nav-item">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Authentication & Authorization</span>
                </h6>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/broken-authentication/">
                    🔑 Broken Authentication
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/broken-access-control/">
                    🚫 Broken Access Control
                </a>
            </li>
            
            <li class="nav-item">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Data Protection</span>
                </h6>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/sensitive-data-exposure/">
                    📊 Sensitive Data Exposure
                </a>
            </li>
                        
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/insecure-deserialization/">
                    📦 Insecure Deserialization
                </a>
            </li>
            
            <li class="nav-item">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>File & Communication</span>
                </h6>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/file-upload/">
                    📁 File Upload Vulnerabilities
                </a>
            </li>
                        
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/unvalidated-redirects-and-forwards/">
                    🔄 Unvalidated Redirects
                </a>
            </li>      
            
            <li class="nav-item">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Monitoring & Logic</span>
                </h6>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/pages/insufficient-logging-and-monitoring/">
                    📝 Insufficient Logging
                </a>
            </li>
        </ul>
    </div>
</nav>