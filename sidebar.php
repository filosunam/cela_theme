<?php
/**
 * Barra lateral 
 * @subpackage CELA_UNAM
 * @package WordPress
 */

?>

<div id="sidebar" role="complementary">
      <?php if(function_exists('dynamic_sidebar')){
      dynamic_sidebar('sidebar');
}
?>
</div>