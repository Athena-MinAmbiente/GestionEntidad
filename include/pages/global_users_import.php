<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'Username',
'usr_email',
'usr_name',
'usr_lname',
'usr_personalid',
'global_rol_almacen',
'global_rol_contratos',
'sys_user',
'sys_date',
'sys_time',
'usr_dep',
'usr_cargo',
'usr_extension',
'active',
'groupid',
'id_fk',
'phone' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Username' => array( 'import_field2' ),
'usr_email' => array( 'import_field4' ),
'usr_name' => array( 'import_field5' ),
'usr_lname' => array( 'import_field6' ),
'usr_personalid' => array( 'import_field8' ),
'global_rol_almacen' => array( 'import_field28' ),
'global_rol_contratos' => array( 'import_field30' ),
'sys_user' => array( 'import_field50' ),
'sys_date' => array( 'import_field51' ),
'sys_time' => array( 'import_field52' ),
'usr_dep' => array( 'import_field65' ),
'usr_cargo' => array( 'import_field66' ),
'usr_extension' => array( 'import_field68' ),
'active' => array( 'import_field75' ),
'groupid' => array( 'import_field76' ),
'id_fk' => array( 'import_field' ),
'phone' => array( 'import_field1' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field2',
'import_field4',
'import_field5',
'import_field6',
'import_field8',
'import_field28',
'import_field30',
'import_field50',
'import_field51',
'import_field52',
'import_field65',
'import_field66',
'import_field68',
'import_field75',
'import_field76',
'import_field',
'import_field1' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field2' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field8' => 'grid',
'import_field28' => 'grid',
'import_field30' => 'grid',
'import_field50' => 'grid',
'import_field51' => 'grid',
'import_field52' => 'grid',
'import_field65' => 'grid',
'import_field66' => 'grid',
'import_field68' => 'grid',
'import_field75' => 'grid',
'import_field76' => 'grid',
'import_field' => 'grid',
'import_field1' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field2',
'import_field4',
'import_field5',
'import_field6',
'import_field8',
'import_field28',
'import_field30',
'import_field50',
'import_field51',
'import_field52',
'import_field65',
'import_field66',
'import_field68',
'import_field75',
'import_field76',
'import_field',
'import_field1' ) ),
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
'items' => array( 'import_field2',
'import_field4',
'import_field5',
'import_field6',
'import_field8',
'import_field28',
'import_field30',
'import_field50',
'import_field51',
'import_field52',
'import_field65',
'import_field66',
'import_field68',
'import_field75',
'import_field76',
'import_field',
'import_field1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field2' => array( 'field' => 'Username',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'usr_email',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'usr_name',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'usr_lname',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'usr_personalid',
'type' => 'import_field' ),
'import_field28' => array( 'field' => 'global_rol_almacen',
'type' => 'import_field' ),
'import_field30' => array( 'field' => 'global_rol_contratos',
'type' => 'import_field' ),
'import_field50' => array( 'field' => 'sys_user',
'type' => 'import_field' ),
'import_field51' => array( 'field' => 'sys_date',
'type' => 'import_field' ),
'import_field52' => array( 'field' => 'sys_time',
'type' => 'import_field' ),
'import_field65' => array( 'field' => 'usr_dep',
'type' => 'import_field' ),
'import_field66' => array( 'field' => 'usr_cargo',
'type' => 'import_field' ),
'import_field68' => array( 'field' => 'usr_extension',
'type' => 'import_field' ),
'import_field75' => array( 'field' => 'active',
'type' => 'import_field' ),
'import_field76' => array( 'field' => 'groupid',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'id_fk',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'phone',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>