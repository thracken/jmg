<?php

/**/
function date_or_modified_date(){
  if ( get_the_date() == get_the_modified_date() ){
    $date = the_date();
    return "Published on: {$date}";
  } else {
    $date = the_modified_date();
    return "Last modified on: {$date}";
  }
}

?>
