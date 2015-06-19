<?php

$themename = "Horizon Theme";
$shortname = "horizon-theme";
$version = "1.0";

#Horizon Theme Options
global $options;

$options = array (

	array( "name" => "Estilização", "type" => "section"),
	array( "type" => "open"),

	array(
		"name"    => "Cor Primária",
		"desc"    => "Informe a Cor Primária do Site",
		"id"      => $shortname."_cor_primaria",
		"type"    => "text",
		"options" => $alt_stylesheets,
		"std"     => '#FFFFFF'
	),
	array(
		"name"    => "Cor Secundária",
		"desc"    => "Informe a Cor Secundária do Site",
		"id"      => $shortname."_cor_secundaria",
		"type"    => "text",
		"options" => $alt_stylesheets,
		"std"     => '#FFFFFF'
	),

	array(
		"name"    => "Dark Color",
		"desc"    => "Informe a Dark Color do Site",
		"id"      => $shortname."_cor_darkcolor",
		"type"    => "text",
		"options" => $alt_stylesheets,
		"std"     => '#000000'
	),

	array(
		"name"    => "Light Gray",
		"desc"    => "Informe a cor Light Gray do Site",
		"id"      => $shortname."_cor_lightgray",
		"type"    => "text",
		"options" => $alt_stylesheets,
		"std"     => '#d3d3d3'
	),

	array(
		"name"    => "Latitude",
		"desc"    => "Informe a Latitude da Localização",
		"id"      => $shortname."_latitude",
		"type"    => "text",
		"options" => $alt_stylesheets,
		"std"     => '35.199119' //Walter White House
	),

	array(
		"name"    => "Longitude",
		"desc"    => "Informe a Longitude da Localização",
		"id"      => $shortname."_longitude",
		"type"    => "text",
		"options" => $alt_stylesheets,
		"std"     => '-106.664868' //Walter White House
	),

	array(
		"name" => "Logo",
		"desc" => "Cole o caminho da imagem a ser usada como logo do site.  <br>
		Formato de imagem PNG<br>
		Largura: 148 pixels <br>
		Altura:  63 pixels.",
		"id" => $shortname."_logo",
		"type" => "text",
		"options" => $alt_stylesheets,
		"std" => ""
	 ),

	array(
		"name" => "Cabeçalho",
		"desc" => "Cole o caminho da imagem a ser usada como cabeçalho do site. <br>
		Largura: 1472 pixels <br>
		Altura: 127 pixels.",
		"id" => $shortname."_cabecalho",
		"type" => "text",
		"options" => $alt_stylesheets,
		"std" => ""
	 ),

	array( "type" => "close"),

	array( "name" => "Redes sociais e Contato","type" => "section"),
	array( "type" => "open"),

	array(
		"name" => "Telefone para Contato",
		"desc" => "Telefone fixo para Contato",
		"id" => $shortname."_telefone_contato",
		"type" => "text",
		"std" => ""
	 ),

	array(
		"name" => "Celular para Contato",
		"desc" => "Celular para Contato",
		"id" => $shortname."_celular_contato",
		"type" => "text",
		"std" => ""
	 ),

	array(
		"name" => "Endereço",
		"desc" => "Endereço",
		"id" => $shortname."_endereco",
		"type" => "textarea",
		"std" => ""
	 ),


	array(
		"name" => "Twitter",
		"desc" => "Perfil do Twitter",
		"id" => $shortname."_twitterid",
		"type" => "text",
		"std" => ""
	 ),

	array(
		"name" => "Página Facebook",
		"desc" => "Nome da página",
		"id" => $shortname."_facebookid",
		"type" => "text",
		"std" => ""
	 ),

	array(
		"name" => "Perfil do Google Plus",
		"desc" => "Nome do perfil na URL",
		"id" => $shortname."_googleplusid",
		"type" => "text",
		"std" => ""
	 ),

	array(
		"name" => "Instagram",
		"desc" => "URL do Instagran",
		"id" => $shortname."_instagram",
		"type" => "text",
		"std" => ""
	 ),

	array( "type" => "close"),

	array( "name" => "Habilitar Compartilhamento","type" => "section"),
	array( "type" => "open"),

	array(
		"name"    => "Facebook",
		"desc"    => "Habilita compartilhamento Facebook.",
		"id"      => $shortname."_compartilha_facebook",
		"type"    => "checkbox"
	),

	array(
		"name"    => "Twitter",
		"desc"    => "Habilita compartilhamento no Twitter.",
		"id"      => $shortname."_compartilha_twitter",
		"type"    => "checkbox"
	),

	array(
		"name"    => "Linkedin",
		"desc"    => "Habilita compartilhamento no Linkedin.",
		"id"      => $shortname."_compartilha_linkedin",
		"type"    => "checkbox"
	),

	array(
		"name"    => "Google +",
		"desc"    => "Habilita compartilhamento no Google Plus.",
		"id"      => $shortname."_compartilha_google_plus",
		"type"    => "checkbox"
	),

	array( "type" => "close"),
);


function horizon_add_admin() {

 global $themename, $shortname, $options;

 if ( isset ( $_GET['page'] ) && ( $_GET['page'] == basename(__FILE__) ) ) {

	 if ( isset ($_REQUEST['action']) && ( 'save' == $_REQUEST['action'] ) ){

		 foreach ( $options as $value ) {
			 if ( array_key_exists('id', $value) ) {
				 if ( isset( $_REQUEST[ $value['id'] ] ) ) {
				 	update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
				 }
				 else {
				 	delete_option( $value['id'] );
				 }
			 }
		}

		header("Location: admin.php?page=".basename(__FILE__)."&saved=true");
	}
	else if ( isset ($_REQUEST['action']) &&
			( 'reset' == $_REQUEST['action'] ) ) {
		 foreach ($options as $value) {
		 	if ( array_key_exists('id', $value) ){
		 		delete_option( $value['id'] );
		 	}
		 }

	 	header("Location: admin.php?page=".basename(__FILE__)."&reset=true");
	 }
 }

add_menu_page(

	$themename,
	$themename,
	'administrator',
	basename(__FILE__),
	'horizon_admin'
);

add_submenu_page(

	basename(__FILE__), $themename . ' Options',
	'Theme Options',
	'administrator',
	basename(__FILE__),
	'horizon_admin');

}

function horizon_admin() {

	global $themename, $shortname, $version, $options;
	$i=0;

	if ( isset ($_REQUEST['saved']) && ($_REQUEST['saved'] ) )

		echo '<div id="message" class="updated fade"><p><strong>As configurações foram salvas.</strong></p></div>';

	if ( isset ($_REQUEST['reset']) && ($_REQUEST['reset'] ) )


		echo '<div id="message" class="updated fade"><p><strong>As configurações originais do site '.$themename.' foram restauradas.</strong></p></div>';

?>

<div class="wrap ">
<div class="options_wrap">
<h2 class="settings-title">Configurações do Horizon Theme</h2>
<form method="post">

<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "section":
?>
	<div class="section_wrap">
	<h3 class="section_title"><?php echo $value['name']; ?></h3>
 	<div class="section_body">

<?php
	break;
	case 'text':
?>

	<div class="options_input options_text">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" />
	</div>

<?php
break;
case 'textarea':
?>
	<div class="options_input options_textarea">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id']) ); } else { echo $value['std']; } ?></textarea>
	</div>

<?php
break;
case 'select':
?>
	<div class="options_input options_select">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
		<?php foreach ($value['options'] as $option) { ?>
				<option <?php if (get_option( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
		</select>
	</div>

<?php
break;
case "radio":
?>
	<div class="options_input options_select">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		  <?php 
		  foreach ($value['options'] as $key=>$option) {
			$radio_setting = get_option($value['id']);
			if($radio_setting != ''){
				if ($option == get_option($value['id']) ) {
					$checked = "checked=checked";
					} else {
						$checked = "";
					}
			}else{
				if($option == $value['std']){
					$checked = "checked=checked";
				}else{
					$checked = "";
				}
			}?>
			<input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $option; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
			<?php } ?>
	</div>

<?php
	break;

	case "checkbox":

?>
	<div class="options_input options_checkbox">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<?php
			if(get_option($value['id'])) {
				$checked = "checked=checked";
			}else{
				$checked = "";
			}
	   	 ?>

		<input type="checkbox"
		name="<?php echo $value['id']; ?>"
		id="<?php echo $value['id']; ?>"
		value='true' <?php echo $checked; ?> />
		<label for="<?php echo $value['id']; ?>">
			<?php echo $value['name']; ?>
		</label>
	 </div>

<?php
	break;

	case "file":
?>
	<div class="options_input options_checkbox">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<?php
			if(get_option($value['id'])) {
				$checked = "checked=checked";
			}else{
				$checked = "";
			}
	    	?>

		<input type="file"
		name="<?php echo $value['id']; ?>"
		id="<?php echo $value['id']; ?>"
		value='true' <?php echo $checked; ?> />
		<label for="<?php echo $value['id']; ?>"
			<?php echo $value['name']; ?>
		</label>
	 </div>

<?php
break;

case "close":
$i++;
?>
<span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Salvar configurações" /></span>
</div><!--#section_body-->
</div><!--#section_wrap-->

<?php break;
}
}
?>

<input type="hidden" name="action" value="save"  />
<span class="submit" style="padding-right: 81px;">
<input name="save" type="submit" value="Salvar todas as configurações"  />
</span>
</form>

<form method="post">
<span class="submit">
<input name="reset" type="submit" value="Restaurar todas as configurações" />
<input type="hidden" name="action" value="reset" />
</span>
</form>
<br/>


</div><!--#options-wrap-->


</div> <!--#wrap-->
<?php
}
add_action('admin_init', 'horizon_add_init');
add_action('admin_menu' , 'horizon_add_admin');

function horizon_add_init() {

	$file_dir=get_bloginfo('template_directory');
	wp_enqueue_style("horizon_theme_option_Css", $file_dir."/theme-options.css", false, "1.0", "all");
	wp_enqueue_script("horizon_theme_option_Script", $file_dir."/theme-options.js", false, "1.0");
}