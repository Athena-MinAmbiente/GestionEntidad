<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'id',
'idEvaluador',
'cedula',
'lugarExpedicion',
'fechaIngreso',
'nombre',
'ubicacionFisica',
'idCargo',
'idDependencia',
'idNombramiento',
'apellidos',
'sueldo' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'import_field' ),
'idEvaluador' => array( 'import_field1' ),
'apellidos' => array( 'import_field2' ),
'cedula' => array( 'import_field3' ),
'lugarExpedicion' => array( 'import_field4' ),
'fechaIngreso' => array( 'import_field6' ),
'nombre' => array( 'import_field7' ),
'ubicacionFisica' => array( 'import_field8' ),
'idCargo' => array( 'import_field9' ),
'idDependencia' => array( 'import_field10' ),
'idNombramiento' => array( 'import_field12' ),
'sueldo' => array( 'import_field11' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field3',
'import_field4',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field12',
'import_field2',
'import_field11' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field12' => 'grid',
'import_field2' => 'grid',
'import_field11' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field12',
'import_field11' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
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
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field3',
'import_field4',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field12',
'import_field2',
'import_field11' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'idEvaluador',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'apellidos',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'cedula',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'lugarExpedicion',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'fechaIngreso',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'nombre',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'ubicacionFisica',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'idCargo',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'idDependencia',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'idNombramiento',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'sueldo',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image',
'image' => array( 'image' => 'thumbnail_135.jpg',
'source' => 2 ) ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>