

<?php get_header();?>

    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                
?>
    


                

    <div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</div>
<?php if(!is_page('contato')){ ?>

<div class="row">
    <div class="col-md-12">
        <?php the_content(); ?>
    </div>
</div>
<?php } ?>

<?php if(is_page('contato')){ ?>
<div class="row">
    <div class="col-md-4">
        <?php the_content(); ?>
    </div>
    <div class="col-md-1"> </div>
    <div class="col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d24515.834223901227!2d-46.48313177834161!3d-24.020464063960162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1setec+sede+praia+grande!5e0!3m2!1spt-BR!2sbr!4v1540295225619" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    
</div>
</div>

<?php } ?>

    
    
 <?php  
            }
        }
        
    ?>

<?php get_footer();?>
