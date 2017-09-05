<?php
function columnClasses() {

	if( get_sub_field("centering_uncentering") ):

		if( have_rows("center_uncenter") ): 

			while( have_rows("center_uncenter") ): the_row();
	
				$largeCenterUncenter = get_sub_field("cu_large");
				$mediumCenterUncenter = get_sub_field("cu_medium");
				$smallCenterUncenter = get_sub_field("cu_small");
				$xsmallCenterUncenter = get_sub_field("cu_xsmall");

				if ($largeCenterUncenter != "Regular Position") {
					echo " large-" . $largeCenterUncenter;
				}

				if ($mediumCenterUncenter != "Regular Position") {
					echo " medium-" . $mediumCenterUncenter;
				}

				if ($smallCenterUncenter != "Regular Position") {
					echo " small-" . $smallCenterUncenter;
				}

				if ($xsmallCenterUncenter != "Regular Position") {
					echo " xsmall-" . $xsmallCenterUncenter;
				}

			endwhile;
		endif;
	endif;

	if( get_sub_field("column_push_pull") ):

		if( have_rows("push_pull") ): 

			while( have_rows("push_pull") ): the_row();
	
				$largePushPull = get_sub_field("pp_large");
				$mediumPushPull = get_sub_field("pp_medium");
				$smallPushPull = get_sub_field("pp_small");
				$xsmallPushPull = get_sub_field("pp_xsmall");

				if ($largePushPull != "Regular Position") {
					echo " large-" . $largePushPull;
				}

				if ($mediumPushPull != "Regular Position") {
					echo " medium-" . $mediumPushPull;
				}

				if ($smallPushPull != "Regular Position") {
					echo " small-" . $smallPushPull;
				}

				if ($xsmallPushPull != "Regular Position") {
					echo " xsmall-" . $xsmallPushPull;
				}

			endwhile;
		endif;
	endif;

	$large = get_sub_field("size_large");
	$medium = get_sub_field("size_medium");
	$small = get_sub_field("size_small");
	$xsmall = get_sub_field("size_xsmall");

	echo " large-" . $large;
	echo " medium-" . $medium;
	echo " small-" . $small;
	echo " xsmall-" . $xsmall;
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