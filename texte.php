<?php get_header();?>
 <style type="text/css">
     #menu ul {
    padding:0px;
    margin:0px;
    background-color:#e6e6e6;
    list-style:none;
}
#menu ul li { display: inline; }
#menu ul li a {
    padding: 2px 10px;
    display: inline-block;

    /* visual do link */
    background-color:#e6e6e6;
    color: #333;
    text-decoration: none;
    border-bottom:3px solid #EDEDED;
}
#menu ul li a:hover {
    background-color:#D6D6D6;
    color: #B22222;
    border-bottom:3px solid #B22222;
}
#menu {
 font-size: 21px;
 text-align:center;
}
 </style>
 <div class="row">
     <div class="col-md-12">
  <nav id="menu">
      <br><br>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="page.php">Direção</a></li>
        <li><a href="texte.php">Cursos técnicos</a></li>
        <li><a href="#">ETIM</a></li>
        <li><a href="#">Planejamento</a></li>
        <li><a href="#">Concursos</a></li>
        <li><a href="#">Vestiulinho ETEC</a></li>
        <li><a href="#">Biblioteca</a></li>
        <li><a href="#">Contato</a></li>
    </ul>
</nav>
</div>
 </div>
 <br><br>
 
 
        
  <div class="row">
        <div class="col-md-12">
            
        <?php 
        
        masterslider(7); ?>
       </div>
    </div>
    