<?php

/**/
function date_or_modified_date(){
  if ( get_the_date() == get_the_modified_date() ){
    return the_date();
  } else {
    return the_modified_date();
  }
}

?>
