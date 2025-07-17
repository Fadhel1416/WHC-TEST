<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WHC Command App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1038/1038181.png" type="image/png">
    <style>
        body {
            background: linear-gradient(120deg, #f8f9fa, #e9ecef);
            min-height: 100vh;
        }

        .logo {
            width: 60px;
            height: 60px;
        }

        .header-title {
            font-weight: bold;
            font-size: 2rem;
        }

        .card {
            border: none;
            border-radius: 1rem;
        }

        .form-control {
            border-radius: 0.5rem;
        }

        #submitBtn {
            width: 100%;
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="text-center mb-4">
        <img src="https://cdn-icons-png.flaticon.com/512/1038/1038181.png" alt="Logo" class="logo mb-2">
        <h2 class="header-title">WHC Command App</h2>
        <p class="text-muted">Enter your command and see the result instantly.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm p-4 bg-white">
                <div class="mb-3">
                    <label for="commandInput" class="form-label">Enter Command</label>
                    <input type="text" id="commandInput" class="form-control" placeholder="e.g. add 5 10 15">
                </div>
                <button id="submitBtn" class="btn btn-primary">Submit</button>
                <div id="resultCard" class="card mt-4 d-none shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-success">Result</h5>
                        <p id="resultContent" class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script/script.js"></script>
</body>
</html>
