<?php get_header('kitchen');
$week_start = new DateTime('W');
$week_start->setISODate($year);
$loop = new WP_Query( array( 'post_type' => 'kitchen', 'posts_per_page' => -1, 'category' => 'current' ) ); 

while ( $loop->have_posts() ) : $loop->the_post(); 

$week = preg_replace('/[^0-9]/', '', get_the_title());
?>

<article id="week<?= $week ?>" <?php if (date('W') !== $week) { echo 'style="display:none;"'; } ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <!-- FROKOSTORDNING CONTAINER-->
      <div class="ordning">

        <h1>Frokostordning</h1>

        <!-- WEEK CONTAINER -->
        <div class="week-container">

    <div class="inner-container">

        <!-- ARROW LEFT-->

        <div id="prev-arrow"><?php previous_post_link('%link', '<div><svg width="3rem" height="3rem" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.854 4.646a.5.5 0 0 1 0 .708L5.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
            <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h6.5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
            </svg></div>'); ?>
        </div> 

        <!-- WEEK DATE -->
        <div class="date">
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

    </div> <!-- END INNER -->
</div> <!-- END WEEK-CONTAINER -->

        <div class="table-container">

          <!-- TABLE DAYS DATE -->
          <div class="today-container">


            <div class="todays-day-container">
              <h2>Idag</h2>
              <h5>Dags dato</h5>
            </div> <!-- END DAYSHEAD-->

            <table>

              <tr>
                <td style="text-align: left;">Alm. frokost</td>
                <td class="number valueToday" value="1">1</td>
              </tr>
              <tr>
                <td style="text-align: left;">Glutenfri</td>
                <td class="number valueToday">0</td>
              </tr>
              <tr>
                <td style="text-align: left;">Laktosefri</td>
                <td class="number valueToday">0</td>
              </tr>
              <tr>
                <td style="text-align: left;">Vegetar</td>
                <td class="number valueToday">0</td>
              </tr>
              <tr>
                <td style="text-align: left;">Vegansk</td>
                <td class="number valueToday">0</td>
              </tr>
              <tr class="bold" id="summation">
                <td style="font-weight: bold; text-align: left;">TOTAL</td>
                <td class="number" style="font-weight: bold;"><span id="todaysum">0</span></td>
              </tr>
            </table>

          </div> <!-- END TODAY -->

          <!-- TABLE WEEK DAYS -->
          <div class="weekday">

            <table>
                <tr>
           <td></td>
           <td></td>
              <td>
                <h2>Mandag</h2>
                <h5>02/09-2020 </h5>
              </td>

              <td>
                <h2>Tirsdag</h2>
                <h5>02/09-2020 </h5>
              </td>

              <td>
                <h2>Onsdag</h2>
                <h5>02/09-2020 </h5>
              </td>

              <td>
                <h2>Torsdag</h2>
                <h5>02/09-2020 </h5>
              </td>

              <td>
                <h2>Fredag</h2>
                <h5>02/09-2020 </h5>
              </td>

</tr>

              <tr>
              <td></td>  
              <td style="text-align: left;">Alm. frokost</td>
                
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
              <td></td>  
              <td style="text-align: left;">Glutenfri</td>
                
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
              <td></td>  
              <td style="text-align: left;">Laktosefri</td>
                
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
              <td></td>  
              <td style="text-align: left;">Vegetar</td>
                
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
              <td></td>  
              <td style="text-align: left;">Vegansk</td>
                
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
              <td></td>  
              <td style="text-align: left;"><b>TOTAL</b></td>
                
                <td><b>0</b></td>
                <td><b>0</b></td>
                <td><b>0</b></td>
                <td><b>0</b></td>
                <td><b>0</b></td>
              </tr>
            </table>

          </div> <!-- END WEEKDAY -->

        </div> <!-- END TABLE-CONTAINER -->

      </div> <!-- END ORDNING -->


      <div class="ordning">
        <h1>Ekstraforplejning</h1>

        <!-- ENKELT BESTILLING -->

        <!-- DAG CONTAINER -->
        <div class="week-container">

          <div class="inner">
            <!-- WEEK DATE / CHANGE WEEK -->
            <div class="date">
             <h2>DATO</h2>
          
            </div> <!-- END DATE -->
          </div> <!-- END INNER -->

        </div> <!-- END WEEK-CONTAINER -->


        <div class="table-container">

          <!-- TABLE WEEK DAYS -->
          <div class="tableOrder">

            <table>
              <tr>
                <th>Virksomhed</th>

                <th>Antal</th>

                <th>Vare</th>

                <th>Status</th>
              </tr>

              <tr>
                <td>Navn på Virksomhed</td>
                <td>2<br>1</td>
                <td>- Smør<br>
                  - Kage</td>
                  <td>
                  <button class="status-button">
                  <p>Venter</p>
                  </button>
                </td>
               
              </tr>

              <tr>
                <td>Navn på Virksomhed</td>
                <td>0</td>
                <td>- Mælk <br>
                  - Marmelade</td>
                <td><button class="status-button">
<p>Venter</p>
</button></td>
              </tr>

              <tr>
                <td>Navn på Virksomhed</td>
                <td>0</td>
                <td>0</td>
                <td><button class="status-button">
<p>Venter</p>
</button></td>
              </tr>

              <tr>
                <td>Navn på Virksomhed</td>
                <td>0</td>
                <td>0</td>
                <td>
                <button class="status-button">
<p>Venter</p>
</button>
                </td>
              </tr>

              <tr>
                <td>Navn på Virksomhed</td>
                <td>0</td>
                <td>0</td>
                <td>
                <button class="status-button">
<p>Venter</p>
</button>
                </td>
              </tr>

            </table>

          </div> <!-- END TABLEORDER -->

        </div> <!-- END TABLE-CONTAINER -->

        <!-- UGE OVERSIKT AF EKSTRA-->
        <!-- WEEK CONTAINER -->
       


        <div class="table-container">

          <!-- TABLE WEEK DAYS EKSTRAFORPLEJNING -->
          <div class="weekday">

            <table>
            <td></td>

              <td style="width: 20%;"></td>

              <td>
                <h2>Mandag</h2>
                <h5>02/09-2020 </h5>
              </td>

              <td>
                <h2>Tirsdag</h2>
                <h5>02/09-2020 </h5>
              </td>

              <td>
                <h2>Onsdag</h2>
                <h5>02/09-2020 </h5>
              </td>

              <td>
                <h2>Torsdag</h2>
                <h5>02/09-2020 </h5>
              </td>

              <td>
                <h2>Fredag</h2>
                <h5>02/09-2020 </h5>
              </td>

              <tr>
                  <td></td>
                <td style="text-align: left;">Smør</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
                  <td></td>
                <td style="text-align: left;">Mælk</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
                  <td></td>
                <td style="text-align: left;">Marmelade</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
                  <td></td>
                <td style="text-align: left;">Ost</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
                  <td></td>
                <td style="text-align: left;">Kage</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
                  <td></td>
                <td style="text-align: left;">Wrap</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>

              <tr>
                  <td></td>
                <td style="text-align: left;">- Køkkenets wrap</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
                  <td></td>
                <td style="text-align: left;">- Vegetar wrap</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
                  <td></td>
                <td style="text-align: left;">Sandwich</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>

              <tr>
                  <td></td>
                <td style="text-align: left;">- Køkkenets sandwich</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
                  <td></td>
                <td style="text-align: left;">Vegetar sandwich</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>

              <tr>
                  <td></td>
                <td style="text-align: left;"><b>TOTAL</b></td>
                <td><b>0</b></td>
                <td><b>0</b></td>
                <td><b>0</b></td>
                <td><b>0</b></td>
                <td><b>0</b></td>
              </tr>

            </table>

          </div> <!-- END WEEKDAY -->

        </div> <!-- END TABLE-CONTAINER -->

      </div> <!-- END ORDNING -->

</article>


<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?> 