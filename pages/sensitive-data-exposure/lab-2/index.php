<?php
$page_title = "Sensitive Data Exposure Lab 2 - Information Disclosure";
require_once '../../../config/env.php';
require_once '../../../template/header.php';

?>

<script>
    const userId = 33;

    fetch('profile.php')
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('profile');
            if (data.name) {
                container.innerText = "Name: " + data.name + "\n";
                container.innerText += "Bio: " + data.bio;
            } else if (data.error) {
                container.innerText = "Error: " + data.error;
            } else {
                container.innerText = "No name found.";
            }
        })
        .catch(error => {
            document.getElementById('profile').innerText = "Fetch error: " + error;
        });
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 px-0">
            <?php include '../../../template/nav.php'; ?>
        </div>

        <div class="col-md-9 col-lg-10 mt-60">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="../">Sensitive Data Exposure</a></li>
                                <li class="breadcrumb-item active">Lab 2</li>
                            </ol>
                        </nav>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="h2">Lab 2: Information Disclosure</h1>
                            <span class="lab-difficulty difficulty-medium">Medium</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Profile</h5>
                            </div>
                            <div class="card-body">
                                <div id="profile" class="mt-4"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">💡 Lab Objectives</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li>✅ Extract sensitive information from a hidden or insecure API endpoint</li>
                                    <li>✅ Discover private data in the frontend response</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="mb-0">🛠️ Hints</h5>
                            </div>


                            <div class="card-body">
                                <div class="accordion" id="credentialsAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#creds">
                                                File Sensitives
                                            </button>
                                        </h2>
                                        <div id="creds" class="accordion-collapse collapse" data-bs-parent="#credentialsAccordion">
                                            <div class="accordion-body">
                                                - Open Developer Tools (Inspect Element) <br>
                                                - Look for suspicious network activity (XHR, fetch) <br>
                                                - Find endpoints like /api/profile, /debug, or /user/info
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../../template/footer.php'; ?>