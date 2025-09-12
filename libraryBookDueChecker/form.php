<!-- 
Library Book Due Checker 
Brett Canfield
-->

<!-- Simple bootstrap get form for two dates submit button -->
<form method="get">
  <div class="row g-3">
    <div class="col-md-6">
      <label for="return_date" class="form-label">Return Date</label>
      <input type="date" class="form-control" id="return_date" name="return_date" required>
    </div>
    <div class="col-md-6">
      <label for="due_date" class="form-label">Due Date</label>
      <input type="date" class="form-control" id="due_date" name="due_date" required>
    </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3">Check</button>
</form>
