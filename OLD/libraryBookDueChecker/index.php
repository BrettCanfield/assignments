<!-- 
Library Book Due Checker 
Brett Canfield
-->

<!doctype html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Book Due Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  </head>
  <body class="bg-light">
    <div class="container py-5">
        <h1 class="mb-4 text-center">Library Due Date Checker</h1>

        <?php
        // Brings in the functions.php file so it can call functions from there
        require 'functions.php';

        //Sets $results to null
        $result = null;

        //If both dates are in the URL then run the check_due function and store the result
        if (isset($_GET['return_date'], $_GET['due_date'])) {
            $result = check_due($_GET['return_date'], $_GET['due_date']);
        }
        ?>

        <!-- If there is a $result then display the results card-->
        <?php if ($result): ?>
            <div class="card mb-4">
                <div class="card-body">
                    <!-- If the status is euqal then display this -->
                    <?php if ($result['status'] === 'equal'): ?>
                        <h5 class="card-title mb-2">Book is due today.</h5>
                    <!-- If the status is overdue then display this-->
                    <?php elseif ($result['status'] === 'overdue'): ?>
                        <h5 class="card-title mb-2">
                            Book is overdue by:
                            <?= $result['years']; ?> years,
                            <?= $result['months']; ?> months,
                            <?= $result['days']; ?> days
                        </h5>
                    <!-- If the status is anything else then display this-->
                    <?php else: ?>
                        <h5 class="card-title mb-2">
                            Time remaining until due:
                            <?= $result['years']; ?> years,
                            <?= $result['months']; ?> months,
                            <?= $result['days']; ?> days
                        </h5>
                    <!-- End the if statment-->
                    <?php endif; ?>

                    <hr>
                    <!-- Displays the reutrn and due dates-->
                    <p class="mb-1"><strong>Return Date:</strong> <?= $_GET['return_date']; ?></p>
                    <p class="mb-0"><strong>Due Date:</strong> <?= $_GET['due_date']; ?></p>
                </div>
            </div>
        <!-- End the if statment-->
        <?php endif; ?>
        <!-- Displays the form from form.php and puts it into a bootstrap card-->
        <div class="card">
            <div class="card-header">Check a book</div>
            <div class="card-body">
                <?php include 'form.php'; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>