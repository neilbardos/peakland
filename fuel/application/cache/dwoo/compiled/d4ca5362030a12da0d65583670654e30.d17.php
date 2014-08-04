<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!--__FUEL_MARKER__0--><?php echo $this->getSecurityPolicy()->callMethod($this, $this->scope["load"], 'view', array('_blocks/header'));?>

this is the home page<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>