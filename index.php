<html>
  <head>
    <script src="https://aframe.io/releases/1.1.0/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-environment-component@1.1.0/dist/aframe-environment-component.min.js"></script>
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


    
            <img id="placabancoimg" src="img/money.png" crossorigin="anonymous" />
            <img id="placabarimg" src="img/placabar.png" crossorigin="anonymous" />
            
            <img id="madeiraimg" src="img/madeira.jpeg" crossorigin="anonymous" />

            <img id="maoimg" src="img/mao.png" crossorigin="anonymous" />
            <img id="maobracoimg" src="img/maobraco.png" crossorigin="anonymous" />
            <img id="maobracocafeimg" src="img/maobracocafe.png" crossorigin="anonymous" />

            
            <img id="japaoimg" src="img/japao.png" crossorigin="anonymous" />
            <img id="kazuimg" src="img/kazu.png" crossorigin="anonymous" />

            <img id="talaoimg" src="img/talao.png" crossorigin="anonymous" />
            <img id="dogsimg" src="img/dogs.png" crossorigin="anonymous" />
            <img id="canelaimg" src="img/canela.png" crossorigin="anonymous" />
            <img id="vidroimg" src="img/vidro.png" crossorigin="anonymous" />

            <img id="wcfimg" src="img/wcf.png" crossorigin="anonymous" />
            <img id="wcmimg" src="img/wcm.png" crossorigin="anonymous" />
            <img id="akimg" src="img/ak.png" crossorigin="anonymous" />


            <img id="roupaloiraimg" src="img/roupaloira.jpg" crossorigin="anonymous" />

            <a-asset-item id="moto-obj" src="model/moto_simple_1.obj"></a-asset-item>
            <a-asset-item id="moto-mtl" src="model/moto_simple_1.mtl"></a-asset-item>

            <a-asset-item id="moto2-obj" src="model/Ducati/x-bikerduc.obj"></a-asset-item>
            <a-asset-item id="ak-obj" src="model/ak/ak.obj"></a-asset-item>
            
            <a-asset-item id="golf-obj" src="model/golf/scene.gltf"></a-asset-item>

            <a-asset-item id="bus-obj" src="model/bus.obj"></a-asset-item>
            <a-asset-item id="car-obj" src="model/car.obj"></a-asset-item>
            <a-asset-item id="caminhao-obj" src="model/caminhao.obj"></a-asset-item>

            <img id="gramaimg" src="img/grama.jpg" crossorigin="anonymous" />
            <img id="tijoloimg" src="img/tijolo.jpeg" crossorigin="anonymous" />
            <img id="tijolo2img" src="img/tijolo.jpeg" crossorigin="anonymous" />
            <img id="obrasimg" src="img/obras.jpg" crossorigin="anonymous" />
            <img id="trabimg" src="img/trab.png" crossorigin="anonymous" />
            <img id="roseimg" src="img/rose.jpeg" crossorigin="anonymous" />
            <img id="lightimg" src="img/light.png" crossorigin="anonymous" />
            <img id="horaimg" src="img/hora.png" crossorigin="anonymous" />
            
            <img id="cartazimg" src="img/cartaz.jpg" crossorigin="anonymous" />
            

        </a-assets> 
       
      
        <a-entity environment="preset: default; ground: none;"></a-entity>


        <a-entity id="cam" camera look-controls wasd-controls position="8.25 2 -0.67"> 
        </a-entity>

       
        <!-- caminhao da light -->
        <a-obj-model id="light" position="19.35166 -0.03441 12.16452" rotation="270 270 0" scale="" src="#caminhao-obj" material="" obj-model="">
            <a-plane width="2" height="1"
                position="-1.2 -0.87 2.137" rotation="90 0 0"
                material="opacity: 1; src: #lightimg; side: double; transparent:true"
            ></a-plane>
        </a-obj-model>

        <!-- relogio  "32 4 -6.36" -->
        <a-box position="31 4 -6.5" width="2" depth="0.2" height="3" rotation="0 -45 0">
            <a-plane width="1.8" height="1.9" position="0 0.4 0.11" color="#007399" material="opacity: 1; src: #cartazimg; side: double; transparent:true"></a-plane>
            <a-plane width="1.8" height="0.6" position="0 -1 0.12" color="#002233"></a-plane>
            <a-plane width="1.8" height="0.6" position="0 -1 0.12" 
            material="opacity: 1; src: #horaimg; side: double; transparent:true"></a-plane>
            <a-cylinder color="#002233" position="0 -2.50 0" height="5" radius="0.1"></a-cylinder>
        </a-box>




        <!--praca-->
        <a-box position="25 0 -30" width="0.1" height="0.1" depth="0.1" >
            <a-torus position="0 0 0" rotation="270 0 0"  material="opacity: 1; src: #tijoloimg; repeat: 10 1;" geometry="radius: 7"></a-torus>
            <a-circle position="0 0.05 0" rotation="270 0 0" material="opacity: 1; src: #gramaimg; repeat: 1 1;" geometry="radius: 7"></a-circle>
            <a-ring position="0 0.1 0" rotation="270 0 0"  material="opacity: 1; src: #asfaltoimg; repeat: 10 1;" radius-inner="7.5" radius-outer="11.5"></a-ring>
            <a-box width="1" depth="1" height="25" material="opacity: 1; src: #cimento3img; repeat: 5 30;" ></a-box>
            <!-- 
                <a-torus-knot material="opacity: 1; src: #cimento1img; repeat: 10 1;"  arc="180" p="2" q="7" radius="5" radius-tubular="0.1" material="" geometry="q: 7.06; radius: 2.79; radiusTubular: 0.12; segmentsTubular: 60" position="0 -1.5 0"></a-torus-knot>
-->
            
            <a-box material="opacity: 1; src: #cimento2img; repeat: 5 5;" position="-4 0.7 4" height="0.5" width="2" depth="0.1" material="" geometry="" rotation="20 -45 0">
                <a-box material="opacity: 1; src: #cimento2img; repeat: 5 5;" position="0 -0.35 -0.3" height="0.5" width="2" depth="0.1" material="" geometry="" rotation="70 0 0"></a-box>
            </a-box>
            <a-box material="opacity: 1; src: #cimento2img; repeat: 5 5;" position="-4 0.7 -4" 
            height="0.5" width="2" depth="0.1" material="" geometry="" rotation="20 -135 0">
                <a-box material="opacity: 1; src: #cimento2img; repeat: 5 5;" position="0 -0.35 -0.3" height="0.5" width="2" depth="0.1" material="" geometry="" rotation="70 0 0"></a-box>
            </a-box>
            <a-box material="opacity: 1; src: #cimento2img; repeat: 5 5;" position="4 0.7 -4" 
            height="0.5" width="2" depth="0.1" material="" geometry="" rotation="20 135 0">
                <a-box material="opacity: 1; src: #cimento2img; repeat: 5 5;" position="0 -0.35 -0.3" height="0.5" width="2" depth="0.1" material="" geometry="" rotation="70 0 0"></a-box>
            </a-box>
            <a-box material="opacity: 1; src: #cimento2img; repeat: 5 5;" position="4 0.7 4" 
            height="0.5" width="2" depth="0.1" material="" geometry="" rotation="20 45 0">
                <a-box material="opacity: 1; src: #cimento2img; repeat: 5 5;" position="0 -0.35 -0.3" height="0.5" width="2" depth="0.1" material="" geometry="" rotation="70 0 0"></a-box>
            </a-box>
           
            

            <?php 
                $minX = -8;
                $maxX = 8;
                $minZ = 7.8;
                $maxZ = 13;
                
                for ($i = 1; $i <= 40; $i = $i + 1 ) {
                    echo ' <a-box material="opacity: 1; src: #tijolo2img; repeat: 1 1;" rotation="0 '. rand(0, 90) .' 0" position="'. rand($minX, $maxX) .' 0.2 '. rand($minZ, $maxZ) .'" height="0.2" width="0.4" depth="0.2"></a-box>';
                }
                ?>

<a-plane rotation="-20 0 0" position="3 0.55 15" height="1" width="2" color="yellow" side="double" material="opacity: 1; src: #trabimg; repeat: 1 1;"></a-plane>
<a-plane rotation="-20 0 0" position="-3 0.55 20" height="1" width="2" color="yellow" side="double" material="opacity: 1; src: #obrasimg; repeat: 1 1;"></a-plane>
                
                
        </a-box>
        <!-- fim praca-->



        <!-- carrinho -->
         <a-box position="9 0.8 6.5" rotation="0 225 0"
              height="0.8" width="2" depth="1"
            material="opacity: 1; src: #kazuimg; repeat: 1 1;"
            >
       
            <a-sphere id="senado"  
            material="opacity: 1; side: double;" 
            rotation="0 0 180" 
            geometry="primitive:  sphere;  radius:  0.3;  thetaLength:  100" 
            position="-1.1 0.1 0" color="gray"></a-sphere>
           
            <a-plane
            position="-1.1 0 0" 
            height="0.2" width="0.4" depth="0.005"
            rotation="0 45 0"
            color="gray"
            material="opacity: 1; src: #canelaimg; side: double; transparent:true"
            ></a-plane> 

            <a-box material="opacity: 1; src: #talaoimg; repeat: 1 1;"
            rotation="10 0 80" position="-0.3 0.5 0" height="0.4" width="0.01" depth="0.2"></a-box>
            <a-box material="opacity: 1; src: #talaoimg; repeat: 1 1;"
            rotation="10 0 80" position="-0.28 0.48 0" height="0.4" width="0.01" depth="0.2"></a-box>
            <a-box material="opacity: 1; src: #talaoimg; repeat: 1 1;"
            rotation="10 0 80" position="-0.32 0.46 0" height="0.4" width="0.01" depth="0.2"></a-box>
            <a-box material="opacity: 1; src: #talaoimg; repeat: 1 1;"
            rotation="10 0 80" position="-0.26 0.44 0" height="0.4" width="0.01" depth="0.2"></a-box>
            

            <!-- DOSG-->
            <a-cylinder color="yellow" rotation="0 90 90" position="0.25 0.455 0.2" height="0.25" radius="0.06">
                <a-cylinder color="red" position="0.04 0 0" height="0.28" radius="0.035"></a-cylinder>
            </a-cylinder>
            <a-cylinder color="yellow" rotation="0 90 90" position="0.2 0.455 -0.2" height="0.25" radius="0.06">
                <a-cylinder color="red" position="0.04 0 0" height="0.28" radius="0.035"></a-cylinder>
            </a-cylinder>
            <a-cylinder color="yellow" rotation="0 90 90" position="0.55 0.455 0.2" height="0.25" radius="0.06">
                <a-cylinder color="red" position="0.04 0 0" height="0.28" radius="0.035"></a-cylinder>
            </a-cylinder>
            <a-cylinder color="yellow" rotation="0 90 90" position="0.5 0.455 -0.2" height="0.25" radius="0.06">
                <a-cylinder color="red" position="0.04 0 0" height="0.28" radius="0.035"></a-cylinder>
            </a-cylinder>
            <a-cylinder color="yellow" rotation="0 90 90" position="0.85 0.455 0.2" height="0.25" radius="0.06">
                <a-cylinder color="red" position="0.04 0 0" height="0.28" radius="0.035"></a-cylinder>
            </a-cylinder>
            <a-cylinder color="yellow" rotation="0 90 90" position="0.8 0.455 -0.2" height="0.25" radius="0.06">
                <a-cylinder color="red" position="0.04 0 0" height="0.28" radius="0.035"></a-cylinder>
            </a-cylinder>
            
            
            
            <a-cone position="-0.6 1.7 0" rotation="0 0 0" height="0.3" radius-bottom="1" radius-top="0.5"></a-cone>
            <a-cylinder position="-0.6 1 0" rotation="0 0 0" height="1.5" radius="0.05"></a-cylinder>
            
            <a-cylinder position="0.4 -0.5 0.5" rotation="90 0 0" height="0.2" radius="0.3"></a-cylinder>
            <a-cylinder position="0.4 -0.5 -0.5" rotation="90 0 0" height="0.2" radius="0.3"></a-cylinder>


            <!-- kazu -->
            <a-box position="0.7 0.3 -1" material="opacity:0" rotation="0 0 0">
                <a-sphere radius="0.5" position="0 1 0"></a-sphere>
                <a-box width="0.4" height="1" depth="0.4" material="opacity: 1; src: #japaoimg; repeat: 1 1;"></a-box>
                <a-box rotation="0 0 0" position="0.2 0 0" width="0.2" height="0.9" depth="0.2"
                material="opacity: 1; src: #maobracoimg; repeat: 1 1;"></a-box>
                <a-torus material="opacity: 1; src: #maobracocafeimg; repeat: 1 1;"
                    position="-0.20 0.3 0.2" radius-inner="0.5" radius-outer="2" 
                    material="" geometry="arc: 180; radius: 0.38; radiusTubular: 0.05; segmentsRadial: 4; segmentsTubular: 6" 
                    rotation="90 0 90"
                ></a-torus>
                <a-box color="#86592d" position="0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                <a-box color="#86592d" position="-0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
            </a-box> 
        </a-box>
        

        <a-plane id="piso" position="0 -0.1 0" 
            rotation="-90 0 0" 
            width="2000" height="2000"
            material="opacity: 1; src: #pisoimg; repeat: 500 500;">
        </a-plane>
        
        
        <?php
            $heightasfalto = 10;
            $widthasfalto = 50;
            
            $heightpredio = 6;
            $widthpredio = 12;
            $depthpredio = 10;

            $heightpredioespecial = 6;

            

            function criaRua($ruaX, $ruaZ, $ruaYrot, $pred){
                $predios = '';
                if($pred) {
                    $px = -11;
                    for ($i = 1; $i <= 4; $i = $i + 1 ) {

                        
                        $rnd = rand(18, 38);
                        
                        $thisY = $rnd / 2;
                        
                        if (
                            ($ruaX == 0 && $ruaZ == 0 && $i == 2) || 
                            ($ruaX == 0 && $ruaZ == 0 && $i == 3) || 
                            ($ruaX == 0 && $ruaZ == -30 && $i == 2) 
                           )
                        { //CENTRO e predio central
                            $thisY = $thisY + 6;
                        }
        

                        $predios = $predios . '<a-box id="predioauto" 
                            position="'. $px .' -15 '. $thisY .'" 
                            rotation="0 0 0" 
                            width="7" height="13" depth="'. $rnd .'"
                            material="opacity: 1; src: #cimento'. rand(1, 7) .'img; repeat: 3repeat: 3 '. (3 * $rnd) .'">
                        </a-box>';

                        $px = $px + 7;
                    }
    
                }
                

                $pedestres = '';
                for($j = 1; $j <= 3; $j = $j+1){ 
                    $pedestres = $pedestres . '
                    <a-box position="0 0 1" material="opacity:0" rotation="0 90 90"
                        animation="property: position; to: -20 0 1; from: 20 0 1; dur: 15000; easing: linear; loop: true; dir:alternate"
                        >
                        <a-sphere radius="0.5" position="0 1 0"></a-sphere>
                        <a-box width="0.5" height="1" depth="0.5" color="#'. rand(1,999999).'"></a-box>
                        <a-box 
                        animation="property: rotation; to: -20 0 0; from: 20 0 0; dur: 600; easing: linear; loop: true; dir:alternate"
                        color="#86592d" position="0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                        <a-box 
                        animation="property: rotation; to: 20 0 0; from: -20 0 0; dur: 600; easing: linear; loop: true; dir:alternate"
                        color="#86592d" position="-0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                    </a-box>';   
                }


                echo '<a-plane position="'. $ruaX . ' 0 ' .$ruaZ .'" 
                        rotation="-90 '. $ruaYrot . ' 0" 
                        width="50" height="10"
                        material="opacity: 1; src: #asfaltoimg; repeat: 8 1;">
                        <a-plane id="calcadaesq"
                            position="0 6.7 -0.05"  
                            rotation="0 0 0" 
                            width="50" height="3.5"
                            material="opacity: 1; src: #calcadaimg; repeat: 30 1;">
                            '.$pedestres.'
                        </a-plane> <!-- Position = height da rua/2 + height/2 -->
                        <a-plane id="calcadadir"
                            position="0 -6.7 -0.05"  
                            rotation="0 0 0" 
                            width="50" height="3.5"
                            material="opacity: 1; src: #calcadaimg; repeat: 30 1;">
                        </a-plane> <!-- Position = height da rua/2 + height/2 -->
                        '. $predios . '
                    </a-plane>
                ';
            }


            $quarteirao = 30;
            $quadras = 6;

            $ruaX = 0 - (($quadras/2) * $widthasfalto);
            $ruaXini = $ruaX;
            
            $ruaZ = 0- (3 * $quarteirao);// - (($quadras) * $quarteirao);

            $ruaYrot = 0;

            for ($i = 1; $i < $quadras; $i = $i + 1) {
                for ($j = 1; $j < $quadras; $j = $j + 1) {
                    criaRua($ruaX, $ruaZ, $ruaYrot, true);    
                    criaRua($ruaX + ($widthasfalto/2), $ruaZ+ ($widthasfalto/2), 90, false);    
                    $ruaZ = $ruaZ + $quarteirao;

                    if($i == $quadras-1){
                        if($j == 2){
                            echo '
                            <a-obj-model id="bus" color="red" position="'.$ruaX.' 0 '.$ruaZ.'" rotation="0 180 0" scale="1.5 1.5 1.5" src="#bus-obj"
                                animation="property: position; to: '.$ruaXini.' 0 '.$ruaZ.'; from: 5 0 '.$ruaZ.'; dur: 7000; easing: linear; loop: true; dir: alternate;"
                                ></a-obj-model>
                            ';
                        } else {
                            echo '
                            <a-obj-model id="bus" color="gray" position="'.$ruaX.' 0 '.$ruaZ.'" rotation="0 180 0" scale="1.5 1.5 1.5" src="#bus-obj"
                                animation="property: position; to: '.$ruaXini.' 0 '.($ruaZ -2).'; from: '.$ruaX.' 0 '.($ruaZ -2).'; dur: 10000; easing: linear; loop: true;"
                                ></a-obj-model> 
                                <a-obj-model id="car" color="gray" position="'.$ruaX.' 0 '.$ruaZ.'" rotation="0 270 0" scale="1 1 1" src="#car-obj"
                                animation="property: position; to: '.$ruaXini.' 0 '.($ruaZ+2).'; from: '.$ruaX.' 0 '.($ruaZ+2).'; dur: 6000; easing: linear; loop: true;"
                                ></a-obj-model>
                            ';
                        }
                        
                    }
                }
                
                $ruaX = $ruaX + $widthasfalto;

                
                $ruaZ = 0- (3 * $quarteirao);// - (($quadras) * $quarteirao);
                
                
            } ?>







        <?php

            $npredios = $widthasfalto / $widthpredio;

            $PredioEspecialX = 10.5; 

            for ($i = 1000; $i < $npredios; $i = $i + 1) {
                
                $rnd = rand(2, 6);
                $thisheight = ($heightpredio * $rnd);

                $thisY = $thisheight/2;
                if(($npredios/2) - $i <= 0 && ($npredios/2) - $i >= -1){
                    $thisY = ($thisheight/2) + $heightpredioespecial;
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
            $PredioEspecialX = 10.5; 
            $mesaX = -6.3;
            $mesaY = 1;
            $mesaZ = 0 - ($heightasfalto/2 + $heightasfalto/3 + 1) ;
            $deslocamento = 0.8;
            
            for ($i = 0; $i <= 2; $i = $i + 1) {
                $thismesaZ  = $mesaZ - ($i * 4);

            
        ?>
        <a-cylinder id="mesa" position="<?php echo $mesaX?> <?php echo $mesaY?> <?php echo $thismesaZ?>" radius="1.0" height="0.1" color="#FFC65D"></a-cylinder>
        <a-cylinder position="<?php echo $mesaX + ((rand(0,2) - 1) * (mt_rand() / mt_getrandmax()))?> <?php echo $mesaY + 0.15?> <?php echo $thismesaZ + ((rand(0,2) - 1) * (mt_rand() / mt_getrandmax()))?>" radius="0.08" height="0.3" color="#FFC65D"></a-cylinder>
        <a-cylinder position="<?php echo $mesaX + ((rand(0,2) - 1) * (mt_rand() / mt_getrandmax()))?> <?php echo $mesaY + 0.15?> <?php echo $thismesaZ + ((rand(0,2) - 1) * (mt_rand() / mt_getrandmax()))?>" radius="0.08" height="0.3" color="#FFC65D"></a-cylinder>
        <a-cylinder position="<?php echo $mesaX + ((rand(0,2) - 1) * (mt_rand() / mt_getrandmax()))?> <?php echo $mesaY + 0.15?> <?php echo $thismesaZ + ((rand(0,2) - 1) * (mt_rand() / mt_getrandmax()))?>" radius="0.08" height="0.3" color="#FFC65D"></a-cylinder>
        
        <a-cylinder position="<?php echo $mesaX + $deslocamento ?> 0.25 <?php echo $thismesaZ?>" radius="0.4" height="0.5" color="#FFC65D"></a-cylinder>
        <a-cylinder position="<?php echo $mesaX - $deslocamento ?> 0.25 <?php echo $thismesaZ?>" radius="0.4" height="0.5" color="#FFC65D"></a-cylinder>
        <a-cylinder position="<?php echo $mesaX ?> 0.25 <?php echo $thismesaZ + $deslocamento?>" radius="0.4" height="0.5" color="#FFC65D"></a-cylinder>
        <a-cylinder position="<?php echo $mesaX ?> 0.25 <?php echo $thismesaZ - $deslocamento?>" radius="0.4" height="0.5" color="#FFC65D"></a-cylinder>
        
        
        <?php }?>

        <a-plane position="-4 4.8 -8.33" 
            rotation="0 0 0" 
            width="7" height="2"
            material="opacity: 1; src: #placabarimg; repeat: 1 1;">
        </a-plane>



        <?php
            $balcao1Z = -8.7 ;
            $balcao1X = -2;
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
        <a-box position="-2.3 1 -10" material="opacity:0">
            <a-sphere radius="0.5" position="0 1 0"></a-sphere>
            <a-box width="0.4" height="1" depth="0.4"></a-box>
            <a-box rotation="0 0 0" position="0.2 0 0" width="0.2" height="0.9" depth="0.2"></a-box>
            <a-box rotation="0 0 -90" position="-0.45 0.3 0" width="0.2" height="0.9" depth="0.2"></a-box>
            <a-box position="0.1 -0.5 0" width="0.19" height="0.9" depth="0.19"></a-box>
            <a-box position="-0.1 -0.5 0" width="0.19" height="0.9" depth="0.19"></a-box>
        </a-box>    

        <!-- mao branca -->

        <?php
        function criaMao($positionstr, $cafe){

            $braco = '<a-box rotation="0 0 0" position="-0.2 0 0" width="0.2" height="0.9" depth="0.2"
            material="opacity: 1; src: #maobracoimg; repeat: 1 1;"></a-box>';
            if($cafe){
                $anim = 'animation__1="property: rotation; to: 50 0 90; dir: alternate; dur: 2000; easing: linear; loop: true"
                animation__2="property: position; to: -0.20 0.4 0.25; dir: alternate; dur: 2000; easing: linear; loop: true"';

                $braco = '<a-torus material="opacity: 1; src: #maobracocafeimg; repeat: 1 1;"
                position="-0.20 0.3 0.2" radius-inner="0.5" radius-outer="2" 
                material="" geometry="arc: 180; radius: 0.38; radiusTubular: 0.05; segmentsRadial: 4; segmentsTubular: 6" 
                rotation="90 0 90"'.$anim.'></a-torus>';
            }

            echo '
            <a-box position="'.$positionstr.'" material="opacity:0" rotation="0 270 0">
                <a-sphere radius="0.5" position="0 1 0"></a-sphere>
                <a-box width="0.4" height="1" depth="0.4" material="opacity: 1; src: #maoimg; repeat: 1 1;"></a-box>
                <a-box rotation="0 0 0" position="0.2 0 0" width="0.2" height="0.9" depth="0.2"
                material="opacity: 1; src: #maobracoimg; repeat: 1 1;"></a-box>
                '.$braco.'
                <a-box color="#86592d" position="0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                <a-box color="#86592d" position="-0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
            </a-box>';     
            return '';       
        }
        criaMao("-1.5 1.1 -8", true);
                
        ?>
        <!-- fim bar enfrente -->


        <!-- inicio banco-->


        <!-- loira -->
        <a-box  position="2 1.1 12"
            rotation="0 90 0"
            material="opacity:0">
            <a-sphere color="yellow" radius="0.5" position="0 0.9 0"></a-sphere>
            <a-cone width="0.4" height="1" depth="0.4" radius-bottom="0.4" radius-top="0.1"
            material="src:#roupaloiraimg"
               animation__1="property: rotation; to: 0 0 7; from: 0 0 -7; dir: alternate; dur: 1000; easing: linear; loop: true"
            ></a-cone>
            <a-torus
                position="-0.2 0 0" radius-inner="0.5" radius-outer="2" 
                material="" geometry="arc: 180; radius: 0.38; radiusTubular: 0.05; segmentsRadial: 3; segmentsTubular: 3" 
                rotation="0 0 70"'.$anim.'></a-torus>
            <a-torus
                position="0.2 0.5 0" radius-inner="0.5" radius-outer="2" 
                material="" geometry="arc: 180; radius: 0.38; radiusTubular: 0.05; segmentsRadial: 3; segmentsTubular: 3" 
                rotation="0 0 250"'.$anim.'></a-torus>
            
                <a-box position="0.1 -0.5 0" width="0.19" height="0.9" depth="0.19"></a-box>
            <a-box position="-0.1 -0.5 0" width="0.19" height="0.9" depth="0.19"></a-box>
        </a-box>

        <?php

            criaMao("3 1.1 11", false);
            criaMao("3.5 1.1 13", false);
          

         $placabancoZ = 8.33 ;
         $placabancoX = -0.5;
         $placabancoY = 4.8;
        ?>
        <a-plane id="placabanco" position="<?php echo $placabancoX ?> <?php echo $placabancoY ?> <?php echo $placabancoZ ?>" 
            rotation="0 180 0" 
            width="14" height="2"
            material="opacity: 1; src: #placabancoimg; repeat: 1 1; side: double">
        </a-plane>

        <!-- fundo -->
        <a-box id="fundo" material="opacity:1" 
            width="14" 
            height="6"  
            depth="0.1"position="-0.5 3 21.5" rotation="0 180 0">
        
            <a-box material="opacity:1" 
            width="14" 
            height="0.9"  
            depth="0.1" position="0 -2.2 1.5">
            </a-box>
            <a-box position="0 -2 0.75" material="opacity:0" rotation="0 0 0">
                <a-sphere radius="0.5" position="0 1 0"></a-sphere>
                <a-box width="0.5" height="1" depth="0.5" color="#FFD300"></a-box>
                <a-box 
                color="#86592d" position="0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                <a-box 
                color="#86592d" position="-0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
            </a-box>
            <a-box position="3 -2 0.75" material="opacity:0" rotation="0 0 0">
                <a-sphere radius="0.5" position="0 1 0"></a-sphere>
                <a-box width="0.5" height="1" depth="0.5" color="#FFD300"></a-box>
                <a-box 
                color="#86592d" position="0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                <a-box 
                color="#86592d" position="-0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
            </a-box>
            <a-box position="-3 -2 0.75" material="opacity:0" rotation="0 0 0">
                <a-sphere radius="0.5" position="0 1 0"></a-sphere>
                <a-box width="0.5" height="1" depth="0.5" color="#FFD300"></a-box>
                <a-box 
                color="#86592d" position="0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                <a-box 
                color="#86592d" position="-0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
            </a-box>
            <a-box position="0 -2 2.75" material="opacity:0" rotation="0 0 0">
                <a-sphere radius="0.5" position="0 1 0"></a-sphere>
                <a-box width="0.5" height="1" depth="0.5" color="#<?php echo rand(1,999999) ?>"></a-box>
                <a-box 
                color="#86592d" position="0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                <a-box 
                color="#86592d" position="-0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
            </a-box>
            <a-box position="3 -2 2.75" material="opacity:0" rotation="0 0 0">
                <a-sphere radius="0.5" position="0 1 0"></a-sphere>
                <a-box width="0.5" height="1" depth="0.5" color="#<?php echo rand(1,999999) ?>"></a-box>
                <a-box 
                color="#86592d" position="0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                <a-box 
                color="#86592d" position="-0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
            </a-box>
            <a-box position="-3 -2 2.75" material="opacity:0" rotation="0 0 0">
                <a-sphere radius="0.5" position="0 1 0"></a-sphere>
                <a-box width="0.5" height="1" depth="0.5" color="#<?php echo rand(1,999999) ?>"></a-box>
                <a-box 
                color="#86592d" position="0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                <a-box 
                color="#86592d" position="-0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
            </a-box> 
            
            <?php 
            $difX = -1.2;
            $difZ = 0.3;
            $X = 3;
            $Z = 4.75;
            for($i = 0; $i < 2; $i = $i+1){
                for($j = 0; $j < 6; $j = $j+1){
                    $X = $X + $difX; 
                    $Z = $Z + $difZ;
                    echo '
                        <a-box position="'.$X.' -2 '. $Z.'" material="opacity:0" rotation="0 0 0">
                        <a-sphere radius="0.5" position="0 1 0"></a-sphere>
                        <a-box width="0.5" height="1" depth="0.5" color="#'.rand(1,999999) .'"></a-box>
                        <a-box 
                        color="#86592d" position="0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                        <a-box 
                        color="#86592d" position="-0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                        </a-box> 
                    ';
                }
                $difX = 0 - $difX;
            }
            ?>
            
            
            
        
        
        </a-box>
        <a-box position="0 -2 0.75" material="opacity:0" rotation="0 0 0">
                <a-sphere radius="0.5" position="0 1 0"></a-sphere>
                <a-box width="0.5" height="1" depth="0.5" color="#<?php echo rand(1,999999) ?>"></a-box>
                <a-box 
                color="#86592d" position="0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
                <a-box 
                color="#86592d" position="-0.1 -0.5 0" width="0.19" height="1" depth="0.19"></a-box>
            </a-box>

        <a-plane id="vidro" position="<?php echo $placabancoX ?> <?php echo $heightpredioespecial/4 ?> <?php echo $placabancoZ + 0.5 ?>" 
            rotation="0 180 0" 
            width="14" height="<?php echo $heightpredioespecial ?>"
            material="opacity: 0.6; src:#vidroimg">
            
            <!-- giratoria -->
            <a-box material="opacity:0" width="0.1" height="0.1" depth="0.1"
                position="0 0 0.3"
             animation="property: rotation; from:0 359.9 0;  dur: 10000; easing: easeInOutQuad; loop: true;">
                <a-box width="5.5" height="<?php echo $heightpredioespecial/2 ?>" 
                depth="0.2" 
                color="gray" material="opacity:0.5">
                <a-box width="5.5" height="<?php echo $heightpredioespecial/2 ?>" 
                depth="0.2" 
                color="gray" material="opacity:0.5"
                rotation="0 90 0">
                </a-box>
            </a-box>
            
        </a-plane>
        <!-- banheiro -->
        <a-box id="banheiro" material="opacity:0" width="0.1" height="0.1" depth="0.1"
                position="-7 0 9"
                rotation="0 180 0">
                <a-box 
                position="0 0 -2"
                width="1" depth="0.1" height="<?php echo $heightpredioespecial?>"
                material="opacity: 1; src: #cimento1img; repeat: 1 1;"
                ></a-box>
                <a-box 
                position="0 0 -5"
                width="1" depth="0.1" height="<?php echo $heightpredioespecial?>"
                material="opacity: 1; src: #cimento1img; repeat: 1 1;"
                ></a-box>
                <a-box 
                position="-0.5 0 -3.5"
                width="2.5" depth="0.1" height="<?php echo $heightpredioespecial?>"
                material="opacity: 1; src: #cimento1img; repeat: 1 1;"
                ></a-box>
                <a-box 
                position="-1.7 0 -3.5"
                rotation="0 90 0"
                width="3" depth="0.1" height="<?php echo $heightpredioespecial?>"
                material="opacity: 1; src: #cimento1img; repeat: 1 1;">
                    <a-plane 
                    position="0.9 1.6 -0.06"
                    rotation="0 180 0"
                    width="0.5" height="0.5"
                    material="opacity: 1; src: #wcfimg; repeat: 1 1; side:double;"></a-plane>
                    <a-plane 
                    position="-1.15 1.6 -0.06"
                    rotation="0 180 0"
                    width="0.5" height="0.5"
                    material="opacity: 1; src: #wcmimg; repeat: 1 1; side:double;"></a-plane>
                </a-box>
                <a-box 
                position="0.4 0 -3.5"
                rotation="0 90 0"
                width="3" depth="0.1" height="<?php echo $heightpredioespecial?>"
                material="opacity: 1; src: #cimento1img; repeat: 1 1;"
                color="black">
                </a-box>

                <?php
                criaMao("0 1 -3", false);
                ?>
                <a-obj-model id="ak" 
                position="-0.47 0.82 -2.64" 
                rotation="0 70 -45" 
                scale="0.005 0.005 0.005" src="#ak-obj"></a-obj-model>
               
        </a-box>
        <a-obj-model position="4.7 -0.76 4.2" scale="0.3 0.3 0.3" src="#moto-obj" mtl="#moto-mtl"></a-obj-model>
        <a-obj-model position="2.0 0 4.3" rotation="0 90 0" scale="0.15 0.15 0.15" src="#moto2-obj"></a-obj-model>

        <!-- fim banco -->


        <!-- rose -->

        <a-entity id="golf" gltf-model="model/golf/scene.gltf" position="37 0 -32" scale="1.2 1.2 1.2">
        </a-entity>
            <!-- loira -->
            <a-box  position="35 1.1 -32"
            rotation="0 90 0"
            material="opacity:0">
            <a-sphere color="yellow" radius="0.5" position="0 0.9 0"></a-sphere>
            <a-cone width="0.4" height="1" depth="0.4" radius-bottom="0.4" radius-top="0.1" material="src:#roseimg"></a-cone>
            <a-torus
                position="-0.2 0 0" radius-inner="0.5" radius-outer="2" 
                material="" geometry="arc: 180; radius: 0.38; radiusTubular: 0.05; segmentsRadial: 3; segmentsTubular: 3" 
                rotation="0 0 70"'.$anim.'></a-torus>
            <a-torus
                position="0.2 0 0" radius-inner="0.5" radius-outer="2" 
                material="" geometry="arc: 180; radius: 0.38; radiusTubular: 0.05; segmentsRadial: 3; segmentsTubular: 3" 
                rotation="0 0 300"'.$anim.'></a-torus>
            
                <a-box position="0.1 -0.5 0" width="0.19" height="0.9" depth="0.19"></a-box>
            <a-box position="-0.1 -0.5 0" width="0.19" height="0.9" depth="0.19"></a-box>
        </a-box>
        
        <!-- fim rose -->




        <?php ?>

        <a-sky color="#ECECEC"></a-sky>
    </a-scene>
  </body>
</html>-