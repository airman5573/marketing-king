<?php
function get_current_file_url($Protocol='http://') {
   return $Protocol.$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(__DIR__)); 
}

function include_with_variable($path, $variables = array(), $print = true) {
  $output = NULL;
  if ($path[0] == '/') {
    $path = substr($path, 1);
  }
  if(file_exists($path)){
    // Extract the variables to a local namespace
    extract($variables);

    // Start output buffering
    ob_start();

    // Include the template file
    include $path;

    // End buffering and return its contents
    $output = ob_get_clean();
  }
  if ($print) {
    print $output;
    return;
  }
  return $output;
}