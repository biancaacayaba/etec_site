<?php get_header();?>
<style type="text/css">
    h2{
    color: #B22222;
}
</style>
 <br><br>
 
 
        
  <div class="row">
        <div class="col-md-12">
            
        <?php 
        
        masterslider(7); ?>
       </div>
    </div>
    
    <br>
    <br>
 <div class="row">
    <div class="col-md-4">
        <div class="jumbotron">
               <p style="font-size:20px;  text-transform: uppercase;color: #B22222;text-align:center;" id="til"><b>Missão</b></p>
                <p>Formar profissionais éticos, competentes para exercer a sua cidadania e atuar no mundo do trabalho, preparados para atender as constantes mudanças e inovações.</p>
        </div>
    </div>


    <div class="col-md-4">
        <div class="jumbotron">
                 <p class="ba" style="font-size:20px;  text-transform: uppercase;color: #B22222;text-align:center;"><b>Visão</b></p>
                <p>Ser a Escola Técnica reconhecida pela organização, inclusão e competência na educação profissional de jovens e adultos do município de Praia Grande e adjacências.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="jumbotron">
                 <p style="font-size:20px;  text-transform: uppercase;color: #B22222;text-align:center;" id="til"><b>Valores</b></p>
                <p>Busca a formação de jovens que sejam capazes de mudar a sua realidade econômico e social e da região que residem, além de criar profissionais éticos e competentes.</p>
        </div>
    </div>
</div>


<div class="row">
    <?php
    $cont = 0;
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                $cont++;
            if ($cont <= 6){
     ?>
           <div class="col-md-4" style="width:400px;text-align:justify;">
               <hr>
               <h4 style="text-align:center;text-transform: uppercase;color: #B22222;"><?php the_title(); ?></h4>
             <br>
             <div class="img-responsive img-thumbnail foto"><?php the_post_thumbnail(); ?></div>
               <p style="overflow:ellipses; width:300px; "><?php the_excerpt(); ?></p>  
            
               <a class="btn btn-danger" href="<?php the_permalink();?>">Leia mais </a>
            </div>   
            
<?php
}}}
?>
</div>

<br>
<br>


<?php get_footer();?>