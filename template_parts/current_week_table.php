<?php get_header();
$week_start = new DateTime('W');
$week_start->setISODate($year);

$loop = new WP_Query( array( 'post_type' => 'uger', 'posts_per_page' => -1, 'category' => 'current' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); 

$week = preg_replace('/[^0-9]/', '', get_the_title());
?>
        
<article id="week<?= $week ?>" <?php if (date('W') !== $week) { echo 'style="display:none;"'; } ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
		

<div class="week-container">

    <div class="inner-container">

        <!-- ARROW LEFT-->

        <div id="prev-arrow"><?php previous_post_link('%link', '<div><svg width="3rem" height="3rem" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.854 4.646a.5.5 0 0 1 0 .708L5.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
            <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h6.5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
            </svg></div>'); ?>
        </div> 

        <!-- WEEK DATE -->
        <div class="date center">
        <a href="">Dags dato</a> <!-- Denne skal gå tilbage til dags dato i kalenderen -->
        <?php the_title( '<h2 style="text-align: center">', '</h2>' ); ?>
        <?php 
        
        ?>
        <!-- <p>2020</p> -->
        </div> <!-- END DATE -->

        <!-- ARROW RIGHT -->
        <div id="next-arrow"><?php next_post_link('%link', '<div><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.793 8 8.146 5.354a.5.5 0 0 1 0-.708z"/>
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5H11a.5.5 0 0 1 0 1H4.5A.5.5 0 0 1 4 8z"/>
            </svg></div>'); ?>
        </div>  

        

    </div> <!-- END INNER-container -->
</div> <!-- END WEEK-CONTAINER -->


<div class="ordning">
       <!-- TABLE WEEK DAYS -->
    <div class="weekday">

        <?php if ( have_rows('menu_sections', 'option') ):

            while ( have_rows('menu_sections','option') ): the_row(); ?>

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
                                <th>Fredag </th>
                            </tr>
                        </thead>

                    <?php while ( have_rows('section_items') ): the_row(); ?>

                    <tr>
                            <td>
                            <?php if(get_sub_field('dish_description')):?>
                                <div class="dropdown">
                                <span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" color="#4aad52" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg></span>
                                <div class="dropdown-info">
                                    <?php the_sub_field('dish_description'); ?>
                                </div>
                            </td>
                            <?php endif;?>
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
                        <tr id="summation">
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
    
</div><!--content-area-->

</div>  <!-- END WHITE_CONTAINER -->

<!-- START MIDDLE IMAGE -->
<div class="ekstra_billed_container">
    <?php while (have_posts() ) : the_post(); ?>
        <div  class="header-image" style="background-image: url('<?php echo get_field('middle_image', 'option'); ?>')"></div>
        <div class="ekstra_opacity"></div>
   <?php endwhile; ?> 
</div> <!-- END EKSTRA_BILLED_CONTAINER -->

<!-- END MIDDLE IMAGE -->



<!-- START EXTRA TABLE CONTAIONER  -->
<div class="white_container_ekstra">

<div class="frokoster_customer_container">

    <?php
    // Start the loop.
    while ( $loop->have_posts() ) : $loop->the_post(); 
    $week = preg_replace('/[^0-9]/', '', get_the_title());
    ?>

<article <?php if (date('W') !== $week) { echo 'style="display:none;"'; } ?>  <?php post_class(); ?>>
    

        <?php if ( have_rows('section_page_extra', 'option') ):

            while ( have_rows('section_page_extra' ,'option') ): the_row(); ?>

                <h1 style="text-align: center;"><?php the_sub_field('section_title_extra'); ?></h1> 

                <div class="ordning">
                    <!-- TABLE WEEK DAYS -->
                    <div class="weekday">

                        <?php if ( have_rows('section_item_extra') ): ?>
                    
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

                                <?php while ( have_rows('section_item_extra') ): the_row(); ?>

                                <tr>
                                    <td>
                                    <?php if(get_sub_field('dish_description_extra')):?>
                                        <div class="dropdown">
                                        <span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" color="#4aad52" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg></span>
                                        <div id="myDescrip" class="dropdown-info">
                                            <div><?php the_sub_field('dish_description_extra'); ?></div>
                                        </div>
                                    </td>
                                    <?php endif;?>

                                    <td>
                                    
                                        <div class="flexbox">
                                            <?php the_sub_field('dish_subname'); ?> 
                                            <?php if(get_sub_field('dish_name_extra')):?> <b><?php the_sub_field('dish_name_extra');?></b>
                                            <?php endif; ?>
                                            <?php if(get_sub_field('dish_price_extra')):?>
                                            <div id="myDIV" class="price-paragraph"><?php the_sub_field('dish_price_extra');?> kr. </div>
                                        </div>
                                    </td>
                                    <?php endif; ?>
                                    

                                    <td>
                                    <?php if(get_sub_field('dish_subname')):?>
                                        <div class="plus-minus-container">
                                            <input type="button" class="minusbutton plus-minus" value="" id="minus6" onclick="minus6()">
                                            <input type="text" class="counter-input plus-minus valueMonEx" size="25" value="0" id="count6">
                                            <input type="button" class="plusbutton plus-minus" value="" id="plus6" onclick="plus6()">
                                        </div>
                                    </td>
                                    <?php endif; ?>


                                    <td>
                                    <?php if(get_sub_field('dish_subname')):?>
                                        <div class="plus-minus-container">
                                            <input type="button" class="minusbutton plus-minus" value="" id="minus7" onclick="minus7()">
                                            <input type="text" class="counter-input plus-minus valueTueEx" size="25" value="0" id="count7">
                                            <input type="button" class="plusbutton plus-minus" value="" id="plus7" onclick="plus7()">
                                        </div>
                                    </td>
                                    <?php endif; ?>

                                    <td>
                                    <?php if(get_sub_field('dish_subname')):?>
                                        <div class="plus-minus-container">
                                            <input type="button" class="minusbutton plus-minus" value="" id="minus3" onclick="minus3()">
                                            <input type="text" class="counter-input plus-minus valueWedEx" size="25" value="0" id="count3">
                                            <input type="button" class="plusbutton plus-minus" value="" id="plus3" onclick="plus3()">
                                        </div>
                                    </td>
                                    <?php endif; ?>

                                    <td>
                                    <?php if(get_sub_field('dish_subname')):?>
                                        <div class="plus-minus-container">
                                            <input type="button" class="minusbutton plus-minus" value="" id="minus4" onclick="minus4()">
                                            <input type="text" class="counter-input plus-minus valueThuEx" size="25" value="0" id="count4">
                                            <input type="button" class="plusbutton plus-minus" value="" id="plus4" onclick="plus4()">
                                        </div>
                                    </td>
                                    <?php endif; ?>

                                    <td>
                                    <?php if(get_sub_field('dish_subname')):?>
                                        <div class="plus-minus-container">
                                            <input type="button" class="minusbutton plus-minus" value="" id="minus5" onclick="minus5()">
                                            <input type="text" class="counter-input plus-minus valueFriEx" size="25" value="0" id="count5">
                                            <input type="button" class="plusbutton plus-minus" value="" id="plus5" onclick="plus5()">
                                        </div>
                                    </td>
                                    <?php endif; ?>
                    
                                </tr>
                     

                                <?php endwhile; ?>
                                <!-- <tr id="summationExtra">
                                    <td></td>
                                    <td style="text-align:left;">Total</td>
                                    <td><span id="sum6">0</span></td>
                                    <td><span id="sum7">0</span></td>
                                    <td><span id="sum8">0</span></td>
                                    <td><span id="sum9">0</span></td>
                                    <td><span id="sum10">0</span></td>
                                </tr> -->
                
                            </table>  

                            <?php endif; ?>

                    </div> <!-- ENDS WEEKDAY -->
   
                    <?php endwhile;

                    endif; ?>
        

     

                    <!--LOGIN BUTTON-->
                    <div class="button_frokost">
                    <input type="text" text="Login" class="submit" value="Opdater">
                   

                <button class="kuvert_acco date"><a href="#.html">Se oversigt over kuverter</a></button>
                <div class="oversigt_container">
                    <div class="flex-space-between">
                        <div class="week">

                        <h2>Mandag</h2>
                        <table>

                        <tr>
                            <th class="left">Produkt</th>
                            <th class="left">Antal</th>
                        </tr>

                        <tr>
                            <td>Produkt</td>
                            <td>Antal</td>
                        </tr>
                        <tr>
                            <td>Produkt</td>
                            <td>Antal</td>
                        </tr>
                        <tr>
                            <td>Produkt</td>
                            <td>Antal</td>
                        </tr>

                        <tr>
                            <td>Produkt</td>
                            <td>Antal</td>
                        </tr>
                        </table>
                    </div>

                    <div class="week">
                        <table>
                        <h2>Tirsdag</h2>
                        <table>

                            <tr>
                            <th class="left">Produkt</th>
                            <th class="left">Antal</th>
                            </tr>

                            <tr>
                            <td>Smør </td>
                            <td>1</td>
                            </tr>
                            <tr>
                            <td>Kage </td>
                            <td>1</td>
                            </tr>
                            <tr>
                            <td>Marmelade </td>
                            <td>1</td>
                            </tr>

                            <tr>
                            <td>Mælk</td>
                            <td>4</td>
                            </tr>
                        </table>
                    </div>

                    <div class="week">
                        <table>
                        <h2>Onsdag</h2>
                        <table>

                            <tr>
                            <th class="left">Produkt</th>
                            <th class="left">Antal</th>
                            </tr>

                            <tr>
                            <td>Smør </td>
                            <td>1</td>
                            </tr>
                            <tr>
                            <td>Kage </td>
                            <td>1</td>
                            </tr>
                            <tr>
                            <td>Marmelade </td>
                            <td>1</td>
                            </tr>

                            <tr>
                            <td>Mælk</td>
                            <td>4</td>
                            </tr>
                        </table>
                        </table>
                    </div>

                    <div class="week">
                        <table>
                        <h2>Torsdag</h2>
                        <table>

                            <tr>
                            <th class="left">Produkt</th>
                            <th class="left">Antal</th>
                            </tr>

                            <tr>
                            <td>Smør </td>
                            <td>1</td>
                            </tr>
                            <tr>
                            <td>Kage </td>
                            <td>1</td>
                            </tr>
                            <tr>
                            <td>Marmelade </td>
                            <td>1</td>
                            </tr>

                            <tr>
                            <td>Mælk</td>
                            <td>4</td>
                            </tr>
                        </table>
                    </div>

                    <div class="week">
                        <table>
                        <h2>Fredag</h2>
                        <table>

                            <tr>
                            <th class="left">Produkt</th>
                            <th class="left">Antal</th>
                            </tr>

                            <tr>
                            <td>Smør </td>
                            <td>1</td>
                            </tr>
                            <tr>
                            <td>Kage </td>
                            <td>1</td>
                            </tr>
                            <tr>
                            <td>Marmelade </td>
                            <td>1</td>
                            </tr>

                            <tr>
                            <td>Mælk</td>
                            <td>4</td>
                            </tr>
                        </table>




                        </div> <!-- END WEEK -->
                    </div> <!-- END flex-space-between -->
                </div> <!-- END OVERSIGT_ACCO -->
            </div>

        </div> <!-- END ORDNINGEN -->

</article><!-- #post-## -->

        
        
<?php endwhile; wp_reset_query(); ?>


<?php get_footer(); ?>
