<footer class="site__footer">
    <h2 class="footer__titre">The funny footer</h2>
    <p class="footer__presentation"> Un site web fait par un élève du TIM qui aime bien le Tim hortons :). Aussi, wordpress oui, oui</p>
    <h3 class="footer__author">Fait par l'humble Randy Rehel</h3>
<?php 

$icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
wp_nav_menu(array(
                    "menu"=>"simple",
                    "container"=>"nav",
                    "container_class"=>"site__footer__menu",
                    "menu_class"=>"site__footer__menu__ul",

                    "link_before"=>$icone)); ?>
                    
                    <div class="footer__searchform">
                    <?php get_search_form();?>
                    </div>
                    <section class="footer__divers">
                    <section class="footer__vid"> 
                    <video width="90%" height="90%"  controls>
                        <source src="http://127.0.0.1:8080/edsa-school/2022-4w4-3/wp-content/uploads/2022/03/Get_Rich_Quick_Meme.mp4" type="video/mp4"> 
                    </video> 
                    </section>
                    <section class="footer__img">
                        <img src="http://127.0.0.1:8080/edsa-school/2022-4w4-3/wp-content/uploads/2022/03/Rehel_Randy_Remise_Exercice1_VoirLeLienEnCommentaire-scaled.jpg" width="90%" height="90%" alt="Jeff Bezos"> 
                    </section>

                    <section class="footer__rickroll"> <a href="https://www.latlmes.com/breaking/your-sensational-news-headline-here-1">Cliquez-ici pour gagner des millions!!</a>  </section>
                    </section>
</footer>

</body>
<?php wp_footer(); ?>
</html>