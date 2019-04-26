<?php
/**
 * The template for displaying the footer
 */
global $wp;
$current_slug = add_query_arg(array(), $wp->request);
?>
			<?php if ( apply_filters( 'show_flat_credits', true ) ) : ?>
				<?php flat_hook_footer_before(); ?>
				<footer class="site-info" itemscope itemtype="http://schema.org/WPFooter">
                    <?php flat_hook_footer_top(); ?>
                    <img src="/wp-content/uploads/2019/04/logo_cofilmo_footer.png" alt="logo_cofilmo_footer">
				</footer>
				<?php flat_hook_footer_after(); ?>
			<?php endif; ?>
				<?php flat_hook_content_bottom(); ?>
			</div>
			<?php flat_hook_content_after(); ?>
		</div>
	</div>
</div>
<?php flat_hook_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>
