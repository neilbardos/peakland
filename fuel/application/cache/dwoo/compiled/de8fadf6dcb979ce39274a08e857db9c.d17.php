<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><p>this is the home page</p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>