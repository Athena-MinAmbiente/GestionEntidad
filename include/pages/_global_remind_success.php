<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'text1' ),
'top' => array( 'remind_header' ),
'grid' => array( 'remind_success_message',
'text' ),
'footer' => array( 'remind_success_submit' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'text1' => 'supertop',
'remind_header' => 'top',
'remind_success_message' => 'grid',
'text' => 'grid',
'remind_success_submit' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'remind_success_submit' => array( 'remind_success_submit' ),
'remind_header' => array( 'remind_header' ),
'remind_success_message' => array( 'remind_success_message' ),
'text' => array( 'text',
'text1' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'remind_success',
'type' => 'remind_success',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'text1' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'remind-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'remind_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'remind_success-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'remind_success_message' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'text' ),
'align' => 'left' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'remind_success-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'remind_success_submit' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'remind_success_submit' => array( 'type' => 'remind_success_submit' ),
'remind_header' => array( 'type' => 'remind_header' ),
'remind_success_message' => array( 'type' => 'remind_success_message',
'label' => array( 'label' => 'WERE_SENT',
'type' => 1 ) ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => '<p>Se ha gestionado el envío de contraseña, revise su correo electrónico, en este recibirá un enlace para realizar el cambio,&nbsp;con estas credenciales usted puede acceder a los siguientes módulos:</p><p><br></p><ul><li><em style="color: rgb(161, 0, 0);">Contratos</em></li><li><em style="color: rgb(161, 0, 0);">Hoja ruta :: Gestión Financiera</em></li><li><em style="color: rgb(161, 0, 0);">Informes de Supervisión</em></li><li><em style="color: rgb(161, 0, 0);">Plan Anual de Adquisiciones (Ejecución presupuestal)</em></li><li><em style="color: rgb(161, 0, 0);">Gestión entidad</em></li></ul><p><br></p><p><br></p><h4>** Tenga en cuenta que debe contar con los privilegios para acceder a cualquiera de los módulos mecionados.</h4>',
'type' => 0 ),
'editedByRte' => true ),
'text1' => array( 'type' => 'text',
'label' => array( 'text' => '<div class="logo-container">
  <img class="logo-img" src="../_img/logos/logo35.png" alt="Logo Entidad">
</div>',
'type' => 0 ),
'editedByRte' => false ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image',
'image' => array( 'source' => 3,
'image' => 'pexels-palo-cech-286763.jpg' ),
'shadow' => false,
'fullSize' => true ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>