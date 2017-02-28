<?php
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html; charset=UTF-8');
?>

				<div id="p_foto" style="position:absolute; top:8%; width:100%; height:40%; background:url(img/sin_foto.png) no-repeat; background-position:center; background-size:cover">
                	<div id="ir_mascota" style="position:absolute; width:100%; height:30%; background-color:rgba(0,0,0,.5); bottom:0px; cursor:pointer">
                    	<img src="img/foto.png" class="centrar_v" style="right:5%; height:55%;"/>
                        <div class="centrar_v" style="right:20%; text-align:right; font-size:13px; color:#FFFFFF">
                        	<div style="font-size:15px" class="texto18"><b>Cambiar</b></div>
                            <div class="texto15">mi foto</div>
                        </div>
                    </div>
                </div>

                
                <div style="position:absolute; top:48%; background-color:rgba(240,240,240,1.00); width:100%; height:10%">
                	<img src="img/nombre.png" class="centrar_v" style="left:8%; height:25%;"/>
                    <img id="bt_edita_perfil" src="img/settings.png" class="centrar_v" style="right:8%; height:25%;"/>
                    <div id="p_nombre" class="centrar_v texto16" style="left:20%; font-size:14px; color:#313131; font-weight:bold">Ximena Salazar Mora</div>
                </div>


                 <div style="position:absolute; top:60%; background-color:rgba(240,240,240,1.00); width:100%; height:25%">
                	<img src="img/telefono.png" class="centrar_v" style="left:8%; height:11%; margin-top:-10%"/>
                    <div id="p_telefono" class="centrar_v texto14" style="left:20%; font-size:12px; color:#313131; font-weight:bold; margin-top:-10%">(044) 55 4912 1015</div>
                    <img src="img/mail.png" class="centrar_v" style="left:8%; height:11%;"/>
                    <div  id="p_email" class="centrar_v texto14" style="left:20%; font-size:12px; color:#313131; font-weight:bold;">ximena_sm@gmail.com</div>

                    <img src="img/direccion.png" class="centrar_v" style="left:8%; height:11%; margin-top:10%"/>
                    <div  id="p_direccion" class="centrar_v texto14" style="left:20%; font-size:12px; color:#313131; font-weight:bold; margin-top:10%">calle chabacano # 7 Col Higuera<br>Atizapan de Zaragoza</div>
                </div>

                

                <div style="position:absolute; top:87%; background-color:rgba(240,240,240,1.00); width:100%; height:13%">
                	<img src="img/calendar.png" class="centrar_v" style="left:8%; height:30%;"/>
                    <img src="img/scroll.png" class="centrar_v" style="right:8%; height:50%;"/>
                    <div class="centrar_v texto14" style="left:20%; font-size:12px; color:#313131; font-weight:bold;"><b>21 - ene - 2017</b><br>No tienes registro de paseos</div> 
                </div>
                
                <script>
				$('#ir_mascota').click(function(){
					window.location.href = '#mascota'
				})
				
				$('#bt_edita_perfil').click(function(){
					$('#perfil').css('z-index', '2')
					$('#editar_perfil').css('z-index', '10')
					$('#editar_perfil').css('margin-left', '100%')		
					$('#editar_perfil').animate({marginLeft:'0%'}, 1000)
					$('#titulo').html('Editar Perfil')
				})
				</script>