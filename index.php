<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Calculator</title>
</head>

<body>
  <div class="container">
    <form method="POST">
      <h1>Calculator</h1>
      <input type="number" name="input1" id="input" required>
      <input type="number" name="input2" id="input" required>
      <select name="option" class="select">
        <option name="option" value="+">add (+)</option>
        <option name="option" value="-">subtract (-)</option>
        <option name="option" value="*">multiply (*)</option>
        <option name="option" value="/">devide (/)</option>
      </select>
      <button type="submit" name="save" id="input-submit">Calculate</button>

      <div id="result">
        <!-- tamplikan hasil dari process.php  -->
        <p><?php include("process.php") ?></p>
      </div>
    </form>
  </div>
</body>
</html>