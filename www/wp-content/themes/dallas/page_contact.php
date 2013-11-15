<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Contact
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="content" class="contact">
		<h2><?php the_title(); ?></h2>
		<div class="columnx2">
			<?php echo get_post_media_html($post->ID, "medium")?>
			<?php the_content(); ?>
			<span class="articleend"></span>
		</div><!-- column -->
		
		<div id="contactwrapper">
			
			<div class="column left">
				<div class="flag lubalin">CONTACT DALLAS</div>
					<p><strong>HQ</strong><br/>
					Riddargatan 17c, SE - 114 57 Stockholm
					<br/>
					Phone: +46 (0)8 670 96 00
					<br/>
					E-mail:
					<a class="mail" href="">info@dallas.se</a>
					<br/>
					Map: <a href="http://kartor.eniro.se/m/MAElE" target="_blank">Click here</a>
					<br/><br/>
					<strong>Arctic Office</strong><br/>
					Årevägen 70, SE - 830 13 Åre
					<br/>
					Phone: +46 (0)70 770 72 22<br/>
					E-mail:
					<a class="mail" href="">info@dallas.se</a><br/>
					Map: <a href="http://kartor.eniro.se/m/MAELC" target="_blank">Click here</a>
					
			
			</div><!-- column -->
			
			<div class="column midcolumn">
				<div class="flag lubalin">MEET OUR SALES PEOPLE</div>
	                <p>For sales inquires please contact<br/>
	                <br/>
	                CEO <br/>
	                Pelle Håkansson, f.lastname@dallas.se<br/>
	                <br/>
	                Executive Producer, Interactive <br/>
	                Joakim Kempff, f.lastname@dallas.se<br/>
	                <br/>
	                Executive Producer, Motion <br/>
	                Francois Bonis, f.lastname@dallas.se<br/>
					<br/>
	                Interactive Manager, Åre office <br/>
	                Andreas Adler, f.lastname@dallas.se<br/>
	                <br/>
	                <br/>
	             
	                </p>
			</div><!-- column -->
			
			<div class="column rightcolumn">
				<div class="flag lubalin">MEET OUR CREW</div>
	                <p>To email anyone in the Dallas Sthlm crew type:<br/>
	                f.lastname@dallas.se
	                <br/> <br/>
	                Andreas Adler<br/>
					Francois Bonis<br/>
					Magdalena Crona<br/>
					Camilla Du Puy<br/>
					Peter Granström<br/>
					Johan Gustafsson<br/>
					Anders Henke <br/>
					Klas Hjertberg <br/>	
					Pelle Håkansson<br/>
					Anders Johansson<br/>
					Joakim Kempff<br/>
					Tobias Kessler <br/>
					Daniel Law<br/>
					Joakim Löfberg<br/>
					Henrietta Nyvang<br/>
					Maria Sandström<br/>
					Mattias Oliveira e Silva<br/>
	                <br/>
	                <br/>
	                <br/>
	          
	                </p>
			</div><!-- column -->
			
		</div> <!-- contactwrapper -->
	</div><!-- content -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>