<?php 
/*
Template Name: Frokostordning Template single
 */

get_header(); ?>


    <div class="frokoster_customer_container">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>

		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		
				
		

            <div class="week-container">

                <div class="inner">

                    <!-- ARROW LEFT-->
                    
                    <?php previous_post_link('<span class="left">&larr; %link</span>');?>

                    <!-- WEEK DATE -->
                    <div class="date">
                    <a href="">Dags dato</a> <!-- Denne skal gå tilbage til dags dato i kalenderen -->
                    <?php the_title( '<h2 style="text-align: center">', '</h2>' ); ?>
                    <p>2020</p>
                    </div> <!-- END DATE -->

                    <!-- ARROW RIGHT -->
                    <?php next_post_link('<span class="right">%link &rarr;</span>'); ?> 

                    

                </div> <!-- END INNER -->
            </div> <!-- END WEEK-CONTAINER -->


            <div class="ordning">
                   <!-- TABLE WEEK DAYS -->
                <div class="weekday">

                    <?php if ( have_rows('menu_sections') ):

                        while ( have_rows('menu_sections') ): the_row(); ?>

                            <h2><?php the_sub_field('section_title'); ?></h2>
                            
                            <?php if ( have_rows('section_items') ): ?>
                                
                                <table>

                                    <thead>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <th>Mandag</th>
                                            <th>Tirsdag</th>
                                            <th>Onsdag</th>
                                            <th>Torsdag</th>
                                            <th>Fredag</th>
                                        </tr>
                                    </thead>

                                <?php while ( have_rows('section_items') ): the_row(); ?>

                                <tr>
                                        <td>
                                            <div class="dropdown">
                                            <span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" color="#4aad52" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                </svg></span>
                                            <div class="dropdown-info">
                                                <?php the_sub_field('dish_description'); ?>
                                            </div>
                                        </td>

                                        <td><?php the_sub_field('dish_name'); ?></td>

                                        <td>
                                            <div class="plus-minus-container">
                                                <input type="button" class="minusbutton plus-minus" value="" id="minus1" onclick="minus1()">
                                                <input type="text" class="counter-input plus-minus valueMon" size="25" value="0" id="count1">
                                                <input type="button" class="plusbutton plus-minus" value="" id="plus1" onclick="plus1()">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="plus-minus-container">
                                                <input type="button" class="minusbutton plus-minus" value="" id="minus2" onclick="minus2()">
                                                <input type="text" class="counter-input plus-minus valueTue" size="25" value="0" id="count2">
                                                <input type="button" class="plusbutton plus-minus" value="" id="plus2" onclick="plus2()">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="plus-minus-container">
                                                <input type="button" class="minusbutton plus-minus" value="" id="minus3" onclick="minus3()">
                                                <input type="text" class="counter-input plus-minus valueWed" size="25" value="0" id="count3">
                                                <input type="button" class="plusbutton plus-minus" value="" id="plus3" onclick="plus3()">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="plus-minus-container">
                                                <input type="button" class="minusbutton plus-minus" value="" id="minus4" onclick="minus4()">
                                                <input type="text" class="counter-input plus-minus valueThu" size="25" value="0" id="count4">
                                                <input type="button" class="plusbutton plus-minus" value="" id="plus4" onclick="plus4()">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="plus-minus-container">
                                                <input type="button" class="minusbutton plus-minus" value="" id="minus5" onclick="minus5()">
                                                <input type="text" class="counter-input plus-minus valueFri" size="25" value="0" id="count5">
                                                <input type="button" class="plusbutton plus-minus" value="" id="plus5" onclick="plus5()">
                                            </div>
                                        </td>
                        
                                    </tr>

                                <?php endwhile; ?>
                                    <tr class="bold" id="summation">
                                        <td></td>
                                        <td>Total</td>
                                        <td><span id="sum">0</span></td>
                                        <td><span id="sum1">0</span></td>
                                        <td><span id="sum2">0</span></td>
                                        <td><span id="sum3">0</span></td>
                                        <td><span id="sum4">0</span></td>
                                    </tr>
                            
                                </table>

                            <?php endif; ?>

                        <?php endwhile;

                    endif; ?>
                </div> <!-- ENDS WEEKDAY -->

                 <!--LOGIN BUTTON-->
                <div class="button_frokost">
                <input type="text" text="Login" class="submit" value="Opdater">
                </div>

				
			</div><!-- .entry-content -->

		</article><!-- #post-## -->



 		<?php endwhile; // End the loop. ?>

		</main><!-- .site-main -->
		
	</div>.content-area

<?php get_footer(); ?>