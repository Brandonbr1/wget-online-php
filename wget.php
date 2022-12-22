<?php
if (isset($_POST['url'])) {
  // Get the URL from the form data
  $url = $_POST['url'];

  // Create the wget command
  $command = "wget -p -k $url";

  // Execute the command using the exec function
  exec($command, $output, $return_var);

  // Check the return value to see if the command was successful
  if ($return_var == 0) {
    $result = "Success";
  } else {
    $result = "Error";
  }
}
?>

<!-- Display the result in the "result" div -->
<div id="result"><?php echo $result; ?></div>
