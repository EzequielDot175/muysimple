
<section class="EmpresasAsociadas clearfix"> 
<header class="cabeza-revista"></header>
     <div class="row AlinearMobile">
     <div class="ContenedorLogos">
      
     <h1>Trabajamos junto a :</h1>


      <?php require_once "admin/class/class.empresas.php";
       $c=0;?>

      <?php
        $collection_logos      = Empresa::fetch(true);
        $collection_logos_text = Empresa::fetchtwo(true);
       ?>
      <?php foreach( $collection_logos->collection as $k => $v):   ?>

      <div class="content-row-logo pb50 content-row-columns-<?php echo($collection_logos->columns[$k])  ?>">

        <?php foreach($v as $kcomuns => $vcolumns): ?>
       
                 <div class="content_logos" >
                      <div class="HoverLogosEmpresas" >
                        <img src="resources/images/<?php echo($vcolumns["img"]) ?>"  >
                      </div> 
                  </div> 
       
        <?php endforeach; ?>
      
      </div>
      
      <div style="clear:both;"></div>


      <?php endforeach; ?>
    
    </div>
    <div class="pb50"></div>
  


    <?php foreach($collection_logos_text->collection as $kcol_logos => $vcol_logos): ?>
    <ul class="content-row-logo-text content-row-text-columns-<?php echo($collection_logos_text->columns[$kcol_logos])  ?>">
        
        
        <?php foreach($vcol_logos as $kcol => $vcol): ?>
            
          <li class="pointer"></li>
          <li class="logo-text">
            <?php echo $vcol['nombre'] ?>
          </li>


        <?php endforeach; ?>


    </ul>
    <div style="clear:both;"></div>

    <?php endforeach; ?>
    <div class="pb100"></div>

    
   </div>
</section>

