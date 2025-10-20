<?php 
    $errors = [];
    $name = '';
    $favMovie = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $favMovie = trim($_POST['favorite_movie'] ?? '');

    if ($name === '') {
        $errors[] = 'Name is required.';
    }
    if ($favMovie === '') {
        $errors[] = 'Favorite movie is required.';
    }

    if (empty($errors)) {
        $qs = http_build_query([
            'ok'   => 1,
            'name' => $name,
            'movie'=> $favMovie,
        ]);

        header("Location: signup.php?{$qs}");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
    <title>Home Page</title>
</head>
<body class = p-3>
    <?php require __DIR__ . '/includes/navigation.php'; ?>\

    <?php if (isset($_GET['ok']) && $_GET['ok'] === '1'): ?>
      <div class="alert alert-success" role="alert">
        Thanks <?= ($_GET['name'] ?? '') ?>, we’ve added your favorite movie
        <strong><?= ($_GET['movie'] ?? '') ?></strong> to our club list.
      </div>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger" role="alert">
            <ul class="mb-0">
                <?php foreach ($errors as $err): ?>
                    <li><?= ($err) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="signup.php">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= ($name) ?>">
        </div>
        <div class="mb-3">
            <label for="favMovie" class="form-label">Favorite Movie</label>
            <input type="text" class="form-control" id="favMovie" name="favorite_movie" value="<?= ($favMovie) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="card mt-4">
        <div class="card-body">
            <h2 class="h5">Raw POST Data</h2>
            <pre><?php 
                if (!empty($_POST)) {
                    var_dump($_POST);
                } else {
                    echo "No data submitted yet.";
                }
            ?></pre>
        </div>
    </div>

</body>
</html>