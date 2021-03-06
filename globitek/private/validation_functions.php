<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value) == '';
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $length = strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  // MY CUSTOM VALIDATION
  function has_valid_email_format($value) {
    // Function can be improved later to check for
    // more than just '@'.
    return preg_match('/\A[A-Za-z0-9_\-@\.]+\Z/', $value);
  }
  function has_valid_phone_format($value) {
    return preg_match('/\A[0-9\-\(\)]+\Z/', $value);
  }
  function has_valid_username_format($value) {
    return preg_match('/\A[A-Za-z0-9_]+\Z/', $value);
  }

?>
