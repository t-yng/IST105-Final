<?php
$PYTHON_SCRIPT = "party_planner.py";

$party_items = $_GET['party-items'];
$host = $_SERVER['SERVER_ADDR'];

$party_items_input = implode(',', $party_items);

$output = [];
$result = 0;
exec("python3 $PYTHON_SCRIPT '$party_items_input'", $output, $result);

if($result !== 0) {
  echo "<h1 style='color: red'>$output[0]</h1>";
  echo "<a href='/form.php'>Back to form</a>";
  exit;
}

$output = json_decode($output[0], true);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment#7 Process | IST105</title>
  </head>
  <body>
    <h1>Webserver <?= $host ?>: </h1>
    <section>
      <h2>Available Party Items:</h2>
      <ul>
        <?php foreach($output['party_items'] as $item): ?>
          <li><?= $item["id"] ?>: <?= $item["name"] ?></li>
        <?php endforeach; ?>
      </ul>
    </section>
    <section>
      <h2>Input:</h2>
      <p><b>Selected item indices: <?= $output['indices'] ?></b></p>
    </section>
    <section>
      <h2>Output: </h2>
      <p><b>Selected Items: </b><?= $output['picked_items'] ?></p>
      <p><b>Base Party Code: </b><?= $output['base_party_code'] ?></p>
      <p><b>Adjusted Party Code: </b><?= $output['adjusted_party_code'] ?></p>
      <p><b>Final Party Code: </b><?= $output['final_party_code'] ?></p>
      <p><b>Message: <?= $output['message'] ?></b></p>
    </section>
    <a href='/form.php'>Back to form</a>
  </body>
</html>
