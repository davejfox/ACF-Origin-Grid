<?php
//----------------------------------------------------------------
//  ACF ORIGIN ROWS & COLUMNS
//  For use with the excellent ACF plugin by Elliot Condon.
//  For information on ACF see www.advancedcustomfields.com 
// 
//  https://github.com/davejfox/ACF-Origin-Grid
//
//  By Dave J. Fox - twitter.com/davejfox || github.com/davejfox
//----------------------------------------------------------------

// Place this function in your functions.php file.
function columnClasses() {

	$breakpoints = array("large", "medium", "small", "xsmall");

	foreach ($breakpoints as &$breakpoint) {
		
		$columnNumber = get_sub_field("size_" . $breakpoint);

		echo " " . $breakpoint . "-" . $columnNumber;

		if( get_sub_field("centering_uncentering") ):

			if( have_rows("center_uncenter") ): 

				while( have_rows("center_uncenter") ): the_row();
		
					$breakpointCenterUncenter = get_sub_field("cu_" . $breakpoint);

					if ($breakpointCenterUncenter != "Regular Position") {
						echo " " . $breakpoint . "-" . $breakpointCenterUncenter;
					}

				endwhile;
			endif;
		endif;

		if( get_sub_field("column_push_pull") ):

			if( have_rows("push_pull") ): 

				while( have_rows("push_pull") ): the_row();
		
					$breakpointPushPull = get_sub_field("pp_" . $breakpoint);

					if ($breakpointPushPull != "Regular Position") {
						echo " " . $breakpoint . "-" . $breakpointPushPull;
					}

				endwhile;
			endif;
		endif;
	}
}

// End of function.
?>

<?php 
// Below is an example of how this can be used. You can place the loops of your own flexible content where indicated.
?>
<section>
	<?php 
		if( have_rows("row") ):
			while ( have_rows("row") ) : the_row(); ?>
			<div class="row">
				<?php if( have_rows("column") ): ?>
					<?php while( have_rows("column") ): the_row(); ?>
						<div class="column<?php columnClasses(); ?>">
							<p>The loop for your flexible content for each column can go here.</p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
 	<?php       
			endwhile;
		endif;
	?>
</section>