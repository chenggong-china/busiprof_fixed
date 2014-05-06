<?php
/***Theme Name	: BusiProf
	
 * @file           search.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webriti
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/search.php
 * 
 */
?>
<?php  get_template_part('banner','header');
		$image_uri=get_template_directory_uri(). '/images' ;
?>

<div class="container">	
 <!-- Main --> 
	<div class="row-fluid">
          <div class="span8 blog_left">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
			<div class="blog_section" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
				<?php $defalt_arg =array('class' => "blog_section_img" )?>
				<?php if(has_post_thumbnail()):?>				
				<a href="<?php the_permalink(); ?>"title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('', $defalt_arg); ?></a>
				<?php endif;?>
				<div class="blog_link">
					<span><img  src="<?php echo $image_uri. '/blog_ic3.png'?>"><?php the_category(','); ?></span>
				</div>
				<h2 class="blog_section_title"><a href="<?php the_permalink(); ?>"title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            </div>
			<?php endwhile; ?>
			<?php else : ?>
					<div class="">
						<h2><?php _e( "木有找到呀", 'busi_prof' ); ?></h2>
						<p><?php _e( "对不起，没有找到您要的关键词！", 'busi_prof' ); ?></p>
					</div><!-- .blog_con_mn -->
			<?php endif; ?>
		</div>
		<?php get_sidebar();?>
	</div>
</div>	
<?php  get_footer() ?>
