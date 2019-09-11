<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

?>

<?php astra_entry_before(); ?>

<article 

	<?php
		Astra_Schema_Markup::ast_creativework_schema();
		?>
>

	<?php astra_entry_top(); ?>

	<?php astra_entry_content_single(); ?>

	<?php astra_entry_bottom(); ?>

</article><!-- #post-## -->

<?php astra_entry_after(); ?>
