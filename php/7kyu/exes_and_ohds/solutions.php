function XO($s) {
  $strX = substr_count(strtolower($s), 'x');
  $strO = substr_count(strtolower($s), 'o');
  
  if ($strX === $strO) {
    return true;
  } else if ($strX !== $strO) {
    return false;
  }
  return true;
  
}