<?php
/**
 * The template for displaying 404 pages (not found)
 **/
get_header();
?>

  <div class="error-page">
    <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'exampletheme' ); ?></h1>
	<p><?php _e( 'It looks like nothing was found at this location. Are you an Employer here to view my coding examples?', 'exampletheme' ); ?></p>
	<p><a href="https://eleadworks.com/backend-example/"><span style="font-size:24px;color:#fff;text-declaration:none;">Click here to view my code examples!</span></a></p> 
  </div>
  
<?php
get_footer();
?>
