<?php

/**/
function date_or_modified_date(){
  if ( get_the_date() == get_the_modified_date() ){
    $date = get_the_date();
    echo("Published " . $date);
  } else {
    $date = get_the_modified_date();
    echo("Modified " . $date);
  }
}

?>
