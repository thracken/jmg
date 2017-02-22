<?php

/**/
function date_or_modified_date(){
  if ( the_date() == the_modified_date() ){
    return the_date();
  } else {
    return the_modified_date();
  }
}

?>
