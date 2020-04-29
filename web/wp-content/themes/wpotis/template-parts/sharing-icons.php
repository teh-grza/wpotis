<?php
/**
 * Display social sharing icons.
 *
 * @package wpotis
 */

?>

<div class="social-share">
	<h5 class="social-share-title"><?php esc_html_e( 'Share This', 'wpotis' ); ?></h5>
	<ul class="social-icons menu menu-horizontal">
		<li class="social-icon">
			<a href="<?php echo esc_url( wpotis_get_twitter_share_url() ); ?>" onclick="window.open(this.href, 'targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, top=150, left=0, width=600, height=300' ); return false;">
				<?php
				wpotis_display_svg(
					array(
						'icon'  => 'twitter-square',
						'title' => __( 'Twitter', 'wpotis' ),
						'desc'  => esc_html__( 'Share on Twitter', 'wpotis' ),
					)
				);
				?>
				<span class="screen-reader-text"><?php esc_html_e( 'Share on Twitter', 'wpotis' ); ?></span>
			</a>
		</li>
		<li class="social-icon">
			<a href="<?php echo esc_url( wpotis_get_facebook_share_url() ); ?>" onclick="window.open(this.href, 'targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, top=150, left=0, width=600, height=300' ); return false;">
				<?php
				wpotis_display_svg(
					array(
						'icon'  => 'facebook-square',
						'title' => __( 'Facebook', 'wpotis' ),
						'desc'  => esc_html__( 'Share on Facebook', 'wpotis' ),
					)
				);
				?>
				<span class="screen-reader-text"><?php esc_html_e( 'Share on Facebook', 'wpotis' ); ?></span>
			</a>
		</li>
		<li class="social-icon">
			<a href="<?php echo esc_url( wpotis_get_linkedin_share_url() ); ?>" onclick="window.open(this.href, 'targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, top=150, left=0, width=475, height=505' ); return false;">
				<?php
				wpotis_display_svg(
					array(
						'icon'  => 'linkedin-square',
						'title' => __( 'LinkedIn', 'wpotis' ),
						'desc'  => esc_html__( 'Share on LinkedIn', 'wpotis' ),
					)
				);
				?>
				<span class="screen-reader-text"><?php esc_html_e( 'Share on LinkedIn', 'wpotis' ); ?></span>
			</a>
		</li>
	</ul>
</div><!-- .social-share -->
