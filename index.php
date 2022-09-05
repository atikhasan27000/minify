<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML Minifier - Cavrely</title>
<link rel="shortcut icon" href="favicon.svg">
<!-- Bootstrap V5.0.2 Cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Bootstrap V5.0.2 Cdn End -->
<!-- Google Font JetBrains Mono -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- Google Font JetBrains Mono End -->
<!-- Css -->
<style>body{display: flex;min-height: 100vh;align-items: center;flex-direction: column;justify-content: center;font-family: 'JetBrains Mono', monospace}</style>
<!-- Css End -->
</head>
<body class="bg-light">
<main class="container bg-white my-2 p-4 shadow text-primary"><?php if (isset($_POST['submit'])) {$code = $_POST['code'];echo htmlentities($code);}?></main>
<div class="container p-4 bg-white shadow">
<h1 class="title mb-4 text-center text-primary">HTML Minifier</h1>
<form method="POST" class="form">
<div class="mb-3">
<label for="code" class="form-label">Enter Code</label>
<textarea id="code" name="code" rows="10" class="form-control" placeholder="Enter your HTML Code" required></textarea>
</div>
<button type="submit" name="submit" class="w-100 btn btn-primary">Minify</button>
</form>
</div>
</body>
</html>
