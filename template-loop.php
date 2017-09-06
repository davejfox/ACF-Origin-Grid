<?php
function columnClasses() {

	$breakpoints = array("large", "medium", "small", "xsmall");

	foreach ($breakpoints as &$breakpoint) {
		
		$columnNumber = get_sub_field("breakpoint_" . $breakpoint);

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