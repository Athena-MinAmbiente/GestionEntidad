<?php
			$optionsArray = array( 'totals' => array( 'CODDPTO' => array( 'totalsType' => '' ),
'CODMUN' => array( 'totalsType' => '' ),
'CODCENTPOBLADO' => array( 'totalsType' => '' ),
'NOMDPTO' => array( 'totalsType' => '' ),
'NOMMUNICIPIO' => array( 'totalsType' => '' ),
'NOMCENTPOBLADO' => array( 'totalsType' => '' ),
'TIPOCENTPOBLADO' => array( 'totalsType' => '' ),
'LON' => array( 'totalsType' => '' ),
'F9' => array( 'totalsType' => '' ),
'LAT' => array( 'totalsType' => '' ),
'DISTRITO' => array( 'totalsType' => '' ),
'TIPOMUN' => array( 'totalsType' => '' ),
'AREAMETRO' => array( 'totalsType' => '' ),
'CENSO' => array( 'totalsType' => '' ),
'ID' => array( 'totalsType' => '' ),
'order' => array( 'totalsType' => '' ),
'FECHA' => array( 'totalsType' => '' ),
'PRECIO' => array( 'totalsType' => '' ),
'HORA' => array( 'totalsType' => '' ),
'BOL' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'CODDPTO',
'CODMUN',
'CODCENTPOBLADO',
'NOMDPTO',
'NOMMUNICIPIO',
'NOMCENTPOBLADO',
'TIPOCENTPOBLADO',
'LON',
'LAT' ),
'exportFields' => array( 'CODDPTO',
'CODMUN',
'CODCENTPOBLADO',
'NOMDPTO',
'NOMMUNICIPIO',
'NOMCENTPOBLADO',
'TIPOCENTPOBLADO',
'LON',
'LAT' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'CODDPTO' => array( 'export_field' ),
'CODMUN' => array( 'export_field1' ),
'CODCENTPOBLADO' => array( 'export_field2' ),
'NOMDPTO' => array( 'export_field3' ),
'NOMMUNICIPIO' => array( 'export_field4' ),
'NOMCENTPOBLADO' => array( 'export_field5' ),
'TIPOCENTPOBLADO' => array( 'export_field6' ),
'LON' => array( 'export_field7' ),
'LAT' => array( 'export_field9' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field9' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field9' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field9' ) ),
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
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
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
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field9' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'CODDPTO',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'CODMUN',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'CODCENTPOBLADO',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'NOMDPTO',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'NOMMUNICIPIO',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'NOMCENTPOBLADO',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'TIPOCENTPOBLADO',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'LON',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'LAT',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>