<html>
  <head>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
  </head>
  <body>
    <a-scene>
        <a-assets>
            <img id="asfaltoimg" src="img/asfalto.jpg" crossorigin="anonymous" />
            <img id="calcadaimg" src="img/calcada.jpeg" crossorigin="anonymous" />
            <img id="pisoimg" src="img/piso.jpeg" crossorigin="anonymous" />
            <img id="cimento1img" src="img/cimento1.jpeg" crossorigin="anonymous" />
            <img id="cimento2img" src="img/cimento2.jpeg" crossorigin="anonymous" />
            <img id="cimento3img" src="img/cimento3.jpeg" crossorigin="anonymous" />
            <img id="cimento4img" src="img/cimento4.jpeg" crossorigin="anonymous" />
            <img id="cimento5img" src="img/cimento5.jpeg" crossorigin="anonymous" />
            <img id="cimento6img" src="img/cimento6.jpeg" crossorigin="anonymous" />
            <img id="cimento7img" src="img/cimento7.jpeg" crossorigin="anonymous" />

            <img id="placabarimg" src="img/placabar.png" crossorigin="anonymous" />
            <img id="madeiraimg" src="img/madeira.jpeg" crossorigin="anonymous" />


        </a-assets> 
        <a-box position="-1 0.5 -3" rotation="0 45 0" color="#4CC3D9"></a-box>


        


        <?php
            $heightasfalto = 15;
            $widthasfalto = 150;
            
            $heightpredio = 6;
            $widthpredio = 12;
            $depthpredio = 25;

            $heightpredioespecial = 6;
        ?>
        
        <a-plane position="0 -0.1 0" 
            rotation="-90 0 0" 
            width="2000" height="2000"
            material="opacity: 1; src: #pisoimg; repeat: 500 500;">
        </a-plane>

        <a-plane position="0 0 0" 
            rotation="-90 0 0" 
            width="<?php echo $widthasfalto ?>" height="<?php echo $heightasfalto ?>"
            material="opacity: 1; src: #asfaltoimg; repeat: 8 1;">
        </a-plane>
        <a-plane id="calcadaesq"
            position="0 0 <?php echo 0 - (($heightasfalto/2) + ($heightasfalto/6)) ?>"  
            rotation="-90 0 0" 
            width="<?php echo $widthasfalto ?>" height="<?php echo $heightasfalto/3 ?>"
            material="opacity: 1; src: #calcadaimg; repeat: 30 1;">
        </a-plane> <!-- Position = height da rua/2 + height/2 -->
        <a-plane id="calcadadir"
            position="0 0 <?php echo (($heightasfalto/2) + ($heightasfalto/6)) ?>"  
            rotation="-90 0 0" 
            width="<?php echo $widthasfalto ?>" height="<?php echo $heightasfalto/3 ?>"
            material="opacity: 1; src: #calcadaimg; repeat: 30 1;">
        </a-plane> <!-- Position = height da rua/2 + height/2 -->        


        <?php

            $npredios = $widthasfalto / $widthpredio;

            for ($i = 1; $i < $npredios; $i = $i + 1) {
                
                $rnd = rand(2, 6);
                $thisheight = ($heightpredio * $rnd);

                $thisY = $thisheight/2;
                if(($npredios/2) - $i <= 0 && ($npredios/2) - $i >= -1){
                    $thisY = ($thisheight/2) + $heightpredioespecial;
                    $PredioEspecialX = (($widthpredio * $i)-(($widthpredio * $npredios)/2));
                }

                ?>
                <!--esquerda -->
                <a-box 
                    position="<?php echo (($widthpredio * $i)-(($widthpredio * $npredios)/2)) ?> <?php echo $thisY ?> <?php echo ($heightasfalto/2 + $heightasfalto/3 + $depthpredio/2) ?>" 
                    rotation="0 0 0" 
                    width="<?php echo $widthpredio ?>" height="<?php echo $thisheight ?>" depth="<?php echo $depthpredio ?>"
                    material="opacity: 1; src: #cimento<?php echo ($i % 7) + 1 ?>img; repeat: 3 <?php echo 3 * $rnd ?>;">
                </a-box><!-- position = Y: height/2     Z:height da rua/2 + height da calcada + depth/2-->
                
                <!--direita -->
                <a-box 
                    position="<?php echo (($widthpredio * $i)-(($widthpredio * $npredios)/2)) ?> <?php echo $thisY ?> <?php echo 0 - ($heightasfalto/2 + $heightasfalto/3 + $depthpredio/2) ?>" 
                    rotation="0 0 0" 
                    width="<?php echo $widthpredio ?>" height="<?php echo $thisheight ?>" depth="<?php echo $depthpredio ?>"
                    material="opacity: 1; src: #cimento<?php echo ($i % 7) + 1 ?>img; repeat: 3 <?php echo 3 * $rnd ?>;">
                </a-box><!-- position = Y: height/2     Z:height da rua/2 + height da calcada + depth/2-->
                
        <?php }; ?>


        <!-- inicio bar enfrente -->
        <?php
            $mesaX = $PredioEspecialX - 4;
            $mesaY = 1;
            $mesaZ = 0 - ($heightasfalto/2 + $heightasfalto/3 + 1) ;
            $deslocamento = 1.2;
            
            for ($i = 0; $i <= 4; $i = $i + 1) {
                $mesaX = $mesaX + ($i % 2);
                $thismesaZ  = $mesaZ - ($i * 4);

            
        ?>
        <a-cylinder id="mesa" position="<?php echo $mesaX?> <?php echo $mesaY?> <?php echo $thismesaZ?>" radius="1.5" height="0.1" color="#FFC65D"></a-cylinder>
        <a-cylinder position="<?php echo $mesaX + ((rand(0,2) - 1) * (mt_rand() / mt_getrandmax()))?> <?php echo $mesaY + 0.15?> <?php echo $thismesaZ + ((rand(0,2) - 1) * (mt_rand() / mt_getrandmax()))?>" radius="0.08" height="0.3" color="#FFC65D"></a-cylinder>
        <a-cylinder position="<?php echo $mesaX + ((rand(0,2) - 1) * (mt_rand() / mt_getrandmax()))?> <?php echo $mesaY + 0.15?> <?php echo $thismesaZ + ((rand(0,2) - 1) * (mt_rand() / mt_getrandmax()))?>" radius="0.08" height="0.3" color="#FFC65D"></a-cylinder>
        <a-cylinder position="<?php echo $mesaX + ((rand(0,2) - 1) * (mt_rand() / mt_getrandmax()))?> <?php echo $mesaY + 0.15?> <?php echo $thismesaZ + ((rand(0,2) - 1) * (mt_rand() / mt_getrandmax()))?>" radius="0.08" height="0.3" color="#FFC65D"></a-cylinder>
        
        <a-cylinder position="<?php echo $mesaX + $deslocamento ?> 0.25 <?php echo $thismesaZ?>" radius="0.4" height="0.5" color="#FFC65D"></a-cylinder>
        <a-cylinder position="<?php echo $mesaX - $deslocamento ?> 0.25 <?php echo $thismesaZ?>" radius="0.4" height="0.5" color="#FFC65D"></a-cylinder>
        <a-cylinder position="<?php echo $mesaX ?> 0.25 <?php echo $thismesaZ + $deslocamento?>" radius="0.4" height="0.5" color="#FFC65D"></a-cylinder>
        <a-cylinder position="<?php echo $mesaX ?> 0.25 <?php echo $thismesaZ - $deslocamento?>" radius="0.4" height="0.5" color="#FFC65D"></a-cylinder>
        
        
        <?php }?>

        <?php
         $placabarZ = 0 - ($heightasfalto/2 + $heightasfalto/3) ;
         $placabarX = $PredioEspecialX;
         $placabarY = 4.8;
        ?>
        <a-plane position="<?php echo $placabarX ?> <?php echo $placabarY ?> <?php echo $placabarZ ?>" 
            rotation="0 0 0" 
            width="<?php echo $widthpredio ?>" height="2"
            material="opacity: 1; src: #placabarimg; repeat: 1 1;">
        </a-plane>



        <?php
            $balcao1Z = 0 - ($heightasfalto/2 + $heightasfalto/3) ;
            $balcao1X = $PredioEspecialX + 4.5;
            $balcao1Y = 0.50;
        ?>        

        <a-box position="<?php echo $balcao1X; ?> <?php echo $balcao1Y; ?> <?php echo $balcao1Z; ?>" 
        width="3"
        height="1.5"
        depth="0.5"
        material="opacity: 0.7; src: #cimento3img; repeat: 1 1;"></a-box>
        <a-box position="<?php echo $balcao1X; ?> <?php echo $balcao1Y + 0.75; ?> <?php echo $balcao1Z; ?>" 
        width="3.2"
        height="0.1"
        depth="0.7"
        material="opacity: 1; src: #madeiraimg; repeat: 1 1;"></a-box>

        <a-box position="<?php echo $balcao1X - 1.5; ?> <?php echo $balcao1Y; ?> <?php echo $balcao1Z  - ($depthpredio/2) + 0.25; ?>" 
        width="<?php echo $depthpredio ?>"
        height="1.5"
        depth="0.5"
        rotation="0 -90 0"
        material="opacity: 0.7; src: #cimento3img; repeat: 1 1;"></a-box>
        <a-box position="<?php echo $balcao1X - 1.5; ?> <?php echo $balcao1Y + 0.75; ?> <?php echo $balcao1Z  - ($depthpredio/2) + 0.25; ?>" 
        width="<?php echo $depthpredio + 0.2 ?>"
        height="0.1"
        depth="0.7"
        rotation="0 -90 0"
        material="opacity: 1; src: #madeiraimg; repeat: 1 1;"></a-box>

        <!-- balconista -->
        <a-box position="13 1 -14" material="opacity:0">
            <a-sphere radius="0.5" position="0 1 0"></a-sphere>
            <a-box width="0.4" height="1" depth="0.4"></a-box>
            <a-box rotation="0 0 0" position="0.2 0 0" width="0.2" height="0.9" depth="0.2"></a-box>
            <a-box rotation="0 0 -90" position="-0.45 0.3 0" width="0.2" height="0.9" depth="0.2"></a-box>
            <a-box position="0.1 -0.5 0" width="0.19" height="0.9" depth="0.19"></a-box>
            <a-box position="-0.1 -0.5 0" width="0.19" height="0.9" depth="0.19"></a-box>
            
        </a-box>    

        <!-- fim bar enfrente -->


        <?php ?>

        <a-sky color="#ECECEC"></a-sky>
    </a-scene>
  </body>
</html>-