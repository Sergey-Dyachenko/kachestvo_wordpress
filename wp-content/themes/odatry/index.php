<?php
get_header();
?>
<div class="main_content">
				<div class="rotator_section">
					<div class="container">
						
						<div class="row">
							
							<div class="col-xs-12">
							
								
								<div class="rotator">
										<div class="carusel">
											
											<div class="item" index="1"><img src="/wp-content/themes/odatry/img/rotator/students.jpg">	</div>
											<div class="item" index="2"><img src="/wp-content/themes/odatry/img/rotator/einstein.jpg"> </div>
										<!--	<div class="item" index="3"><img src="img/rotator/scientist.jpg"> </div>-->
											<div class="item" index="4"><img src="/wp-content/themes/odatry/img/rotator/noutbuk_i_knigi.jpg"></div>								
										</div>	
										
								</div>	
								
							</div>
						</div>
					</div>
				</div>	



				<div class="container">
					<div class="row" class="sidebar_section">
						<?php get_sidebar();?>
						
						<!-- Начало Случайный вывод цитат-->
								<?php

								query_posts(array('orderby' => 'date', 'showposts' => 3,  'category_name' => 'Новини'));

								if (have_posts()) :

								while (have_posts()) : the_post(); ?>

									<div class="col-xs-3">
										<div class="img_preview"><a href="<?php the_permalink();?>"> <?php the_post_thumbnail();?></a></div> 
										<p><?php the_time('F jS, Y') ;?></p>
										<p><?php the_title();?></p>
										<a href="<?php the_permalink();?>">Переглянути новину>></a>
									</div>	
									

								<?php endwhile;

								endif; ?>
								<!-- Конец Случайный вывод цитат-->
						
						
						<!--<div class="col-xs-3">
							<div class="img_preview"> 210 X 140 px</div> 
							<p>Cursuspe natis accum ut cura bitur nulla tellus tor ames.</p>
							<a href="#">View project>></a>
						</div>
						<div class="col-xs-3">
							<div class="img_preview"> 210 X 140 px</div> 
							<p>Cursuspe natis accum ut cura bitur nulla tellus tor ames.</p>
							<a href="#">View project>></a>
						</div>-->
						
					</div>	
				</div>
				<div class="think_wrap">
					<div class="container">
						<div class="row think_section">
							<div class="col-xs-12">
								<!-- Начало Случайный вывод цитат-->
								<?php

								query_posts(array('orderby' => 'rand', 'showposts' => 1,  'category_name' => 'Цитаты'));

								if (have_posts()) :

								while (have_posts()) : the_post(); ?>

										
									<div class="citati"><?php the_content(); ?></div>

								<?php endwhile;

								endif; ?>
								<!-- Конец Случайный вывод цитат-->
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row text_section">
						<div class="col-xs-3">
							<h3> Lorem ipsum dolor</h3> 
							<p>Justoid nonummy laoreet phasellen penatoque in antesque pellus elis eget tincidunt.</p>
						</div>
						<div class="col-xs-3">
							<div class="img_preview"> 210 X 140 px</div> 
							<p>Cursuspe natis accum ut cura bitur nulla tellus tor ames.</p>
							<a href="#">View project>></a>
						</div>
						<div class="col-xs-3">
							<div class="img_preview"> 210 X 140 px</div> 
							<p>Cursuspe natis accum ut cura bitur nulla tellus tor ames.</p>
							<a href="#">View project>></a>
						</div>
						<div class="col-xs-3">
							<div class="img_preview"> 210 X 140 px</div> 
							<p>Cursuspe natis accum ut cura bitur nulla tellus tor ames.</p>
							<a href="#">View project>></a>
						</div>
					</div>
				</div>
<?php
get_footer(); 
?>