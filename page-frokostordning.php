<?php 
/*
Template Name: Frokostordning startside
 */

get_header(); ?>


<div class="frokoster_customer_container">

<?php
// Start the loop.
while ( have_posts() ) : the_post(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        
        <?php the_content( );?><br>

            <?php if ( have_rows('menu_sections') ):

                while ( have_rows('menu_sections') ): the_row(); ?>

                    <h1 style="text-align: center;"><?php the_sub_field('sections_title'); ?></h1> 

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
                                            <div id="myDescrip" class="dropdown">
                                            <span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" color="#4aad52" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                </svg></span>
                                            <div class="dropdown-info">
                                                <?php the_sub_field('dish_description'); ?>
                                            </div>
                                        </td>

                                        <td ><?php the_sub_field('dish_name'); ?> <div class="ekstra_pris"><?php the_sub_field('dish_price_');?> </div></td>

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
                                        <td style="text-align:left;">Total</td>
                                        <td><span id="sum">0</span></td>
                                        <td><span id="sum1">0</span></td>
                                        <td><span id="sum2">0</span></td>
                                        <td><span id="sum3">0</span></td>
                                        <td><span id="sum4">0</span></td>
                                    </tr>
                    
                                </table>  

                                <?php endif; ?>

                        </div> <!-- ENDS WEEKDAY -->
       
                        <?php endwhile;

                        endif; ?>
            
                        

                        <!--LOGIN BUTTON-->
                        <div class="button_frokost">
                        <input type="text" text="Login" class="submit" value="Opdater">
                        </div>

                    </div> <!-- END ORDNINGEN -->
    
</article><!-- #post-## -->

 <?php endwhile; // End the loop. ?>

</div><!-- END FROKOSTER_CUSTOMER_CONTAINER -->

</div>  <!-- END WHITE_CONTAINER -->


<div class="ekstra_billed_container">
  <div class="ekstra_opacity"></div>
</div> <!-- END EKSTRA_BILLED_CONTAINER -->

<div class="white_container_ekstra">


<div class="frokoster_customer_container">

<?php
// Start the loop.
while ( have_posts() ) : the_post(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php if ( have_rows('section_page_extra') ):

                while ( have_rows('section_page_extra') ): the_row(); ?>

                    <h1 style="text-align: center;"><?php the_sub_field('section_title_extra'); ?></h1> 

                   <p class="text_exstra"><?php the_field('text_ekstra'); ?></p>

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
                                            <div class="dropdown">
                                            <span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle-fill" color="#4aad52" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                </svg></span>
                                            <div id="myDescrip" class="dropdown-info">
                                                <div><?php the_sub_field('dish_description_extra'); ?></div>
                                            </div>
                                        </td>

                                        <td >
                                            <div class="price-flex">
                                                <?php the_sub_field('dish_subname'); the_sub_field('dish_name_extra');?>
                                                <div id="myDIV" class="ekstra_pris_extra"><?php the_sub_field('dish_price_extra');?> </div>
                                            </div>
                                        </td>

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
                                        <td style="text-align:left;">Total</td>
                                        <td><span id="sum">0</span></td>
                                        <td><span id="sum1">0</span></td>
                                        <td><span id="sum2">0</span></td>
                                        <td><span id="sum3">0</span></td>
                                        <td><span id="sum4">0</span></td>
                                    </tr>
                    
                                </table>  

                                <?php endif; ?>

                        </div> <!-- ENDS WEEKDAY -->
       
                        <?php endwhile;

                        endif; ?>
            

                        <!--LOGIN BUTTON-->
                    
                        <div class="button_frokost">
                            <input type="text" text="Login" class="submit" value="Opdater">
                            <button class="kuvert_acco date">Se oversigt over kuverter</button>
                            <div class="oversigt_acco">
                            <div class="oversigt_flex">
                            <div class="week">

                            <h2>Mandag</h2>
                            <h5>02/09-2020 </h5>
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
                                <h2>Tirsdag</h2>
                                <h5>02/09-2020 </h5>
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
                                <h5>02/09-2020 </h5>
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
                                <h5>02/09-2020 </h5>
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
                                <h5>02/09-2020 </h5>
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
                        </div> <!-- END BUTTON_FROKOST

                    </div> <!-- END ORDNINGEN -->
    
</article><!-- #post-## -->

 <?php endwhile; // End the loop. ?>

</div><!-- END FROKOSTER_CUSTOMER_CONTAINER -->

<?php get_footer(); ?>


<!-- SCRIPT TIL SE OVERSIGT OVER KUVERTER -->

<script>
  var acc = document.getElementsByClassName("kuvert_acco");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
</script>