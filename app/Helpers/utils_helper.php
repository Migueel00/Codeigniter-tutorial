
<?php

if(!function_exists('generateToken')){

  function generateToken() : string{
    return md5(uniqid(mt_rand(), true)); // generate a random token
  }
}