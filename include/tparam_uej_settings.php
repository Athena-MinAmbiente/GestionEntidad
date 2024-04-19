<?php
$tdatatparam_uej = array();
$tdatatparam_uej[".searchableFields"] = array();
$tdatatparam_uej[".ShortName"] = "tparam_uej";
$tdatatparam_uej[".OwnerID"] = "";
$tdatatparam_uej[".OriginalTable"] = "tparam_uej";


$tdatatparam_uej[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatparam_uej[".originalPagesByType"] = $tdatatparam_uej[".pagesByType"];
$tdatatparam_uej[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatparam_uej[".originalPages"] = $tdatatparam_uej[".pages"];
$tdatatparam_uej[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatparam_uej[".originalDefaultPages"] = $tdatatparam_uej[".defaultPages"];

//	field labels
$fieldLabelstparam_uej = array();
$fieldToolTipstparam_uej = array();
$pageTitlestparam_uej = array();
$placeHolderstparam_uej = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_uej["Spanish"] = array();
	$fieldToolTipstparam_uej["Spanish"] = array();
	$placeHolderstparam_uej["Spanish"] = array();
	$pageTitlestparam_uej["Spanish"] = array();
	$fieldLabelstparam_uej["Spanish"]["sector_id"] = "UEJ";
	$fieldToolTipstparam_uej["Spanish"]["sector_id"] = "";
	$placeHolderstparam_uej["Spanish"]["sector_id"] = "";
	$fieldLabelstparam_uej["Spanish"]["sector_name"] = "Nombre UEJ";
	$fieldToolTipstparam_uej["Spanish"]["sector_name"] = "";
	$placeHolderstparam_uej["Spanish"]["sector_name"] = "";
	$fieldLabelstparam_uej["Spanish"]["common_name"] = "Nombre co´m";
	$fieldToolTipstparam_uej["Spanish"]["common_name"] = "";
	$placeHolderstparam_uej["Spanish"]["common_name"] = "";
	$fieldLabelstparam_uej["Spanish"]["short_name"] = "Nombre corto";
	$fieldToolTipstparam_uej["Spanish"]["short_name"] = "";
	$placeHolderstparam_uej["Spanish"]["short_name"] = "";
	$fieldLabelstparam_uej["Spanish"]["ctrl"] = "Estado";
	$fieldToolTipstparam_uej["Spanish"]["ctrl"] = "";
	$placeHolderstparam_uej["Spanish"]["ctrl"] = "";
	$pageTitlestparam_uej["Spanish"]["add"] = "Unidad Ejecutora | UEJ";
	$pageTitlestparam_uej["Spanish"]["edit"] = "Unidad Ejecutora | UEJ: [{%sector_id}]";
	$pageTitlestparam_uej["Spanish"]["view"] = "Unidad Ejecutora | UEJ: {%sector_id}";
	if (count($fieldToolTipstparam_uej["Spanish"]))
		$tdatatparam_uej[".isUseToolTips"] = true;
}


	$tdatatparam_uej[".NCSearch"] = true;



$tdatatparam_uej[".shortTableName"] = "tparam_uej";
$tdatatparam_uej[".nSecOptions"] = 0;

$tdatatparam_uej[".mainTableOwnerID"] = "";
$tdatatparam_uej[".entityType"] = 0;
$tdatatparam_uej[".connId"] = "dbsep_at_127_0_0_1";


$tdatatparam_uej[".strOriginalTableName"] = "tparam_uej";

	



$tdatatparam_uej[".showAddInPopup"] = false;

$tdatatparam_uej[".showEditInPopup"] = false;

$tdatatparam_uej[".showViewInPopup"] = false;

$tdatatparam_uej[".listAjax"] = false;
//	temporary
//$tdatatparam_uej[".listAjax"] = false;

	$tdatatparam_uej[".audit"] = true;

	$tdatatparam_uej[".locking"] = false;


$pages = $tdatatparam_uej[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_uej[".edit"] = true;
	$tdatatparam_uej[".afterEditAction"] = 0;
	$tdatatparam_uej[".closePopupAfterEdit"] = 1;
	$tdatatparam_uej[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_uej[".add"] = true;
$tdatatparam_uej[".afterAddAction"] = 0;
$tdatatparam_uej[".closePopupAfterAdd"] = 1;
$tdatatparam_uej[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_uej[".list"] = true;
}



$tdatatparam_uej[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_uej[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_uej[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_uej[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_uej[".printFriendly"] = true;
}



$tdatatparam_uej[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_uej[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_uej[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_uej[".isUseAjaxSuggest"] = true;



						

$tdatatparam_uej[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_uej[".buttonsAdded"] = false;

$tdatatparam_uej[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_uej[".isUseTimeForSearch"] = false;


$tdatatparam_uej[".badgeColor"] = "E67349";


$tdatatparam_uej[".allSearchFields"] = array();
$tdatatparam_uej[".filterFields"] = array();
$tdatatparam_uej[".requiredSearchFields"] = array();

$tdatatparam_uej[".googleLikeFields"] = array();
$tdatatparam_uej[".googleLikeFields"][] = "sector_id";
$tdatatparam_uej[".googleLikeFields"][] = "sector_name";
$tdatatparam_uej[".googleLikeFields"][] = "common_name";
$tdatatparam_uej[".googleLikeFields"][] = "short_name";
$tdatatparam_uej[".googleLikeFields"][] = "ctrl";



$tdatatparam_uej[".tableType"] = "list";

$tdatatparam_uej[".printerPageOrientation"] = 0;
$tdatatparam_uej[".nPrinterPageScale"] = 100;

$tdatatparam_uej[".nPrinterSplitRecords"] = 40;

$tdatatparam_uej[".geocodingEnabled"] = false;




$tdatatparam_uej[".isDisplayLoading"] = true;






$tdatatparam_uej[".pageSize"] = 20;

$tdatatparam_uej[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_uej[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_uej[".orderindexes"] = array();


$tdatatparam_uej[".sqlHead"] = "SELECT sector_id,  sector_name,  common_name,  short_name,  ctrl";
$tdatatparam_uej[".sqlFrom"] = "FROM tparam_uej";
$tdatatparam_uej[".sqlWhereExpr"] = "";
$tdatatparam_uej[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_uej[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_uej[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_uej[".highlightSearchResults"] = true;

$tableKeystparam_uej = array();
$tableKeystparam_uej[] = "sector_id";
$tdatatparam_uej[".Keys"] = $tableKeystparam_uej;


$tdatatparam_uej[".hideMobileList"] = array();




//	sector_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sector_id";
	$fdata["GoodName"] = "sector_id";
	$fdata["ownerTable"] = "tparam_uej";
	$fdata["Label"] = GetFieldLabel("tparam_uej","sector_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sector_id";

		$fdata["sourceSingle"] = "sector_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


		$edata["strEditMask"] = "99-99-99";

	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "UEJ %value% ya existe!", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatparam_uej["sector_id"] = $fdata;
		$tdatatparam_uej[".searchableFields"][] = "sector_id";
//	sector_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector_name";
	$fdata["GoodName"] = "sector_name";
	$fdata["ownerTable"] = "tparam_uej";
	$fdata["Label"] = GetFieldLabel("tparam_uej","sector_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sector_name";

		$fdata["sourceSingle"] = "sector_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatparam_uej["sector_name"] = $fdata;
		$tdatatparam_uej[".searchableFields"][] = "sector_name";
//	common_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "common_name";
	$fdata["GoodName"] = "common_name";
	$fdata["ownerTable"] = "tparam_uej";
	$fdata["Label"] = GetFieldLabel("tparam_uej","common_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "common_name";

		$fdata["sourceSingle"] = "common_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "common_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatparam_uej["common_name"] = $fdata;
		$tdatatparam_uej[".searchableFields"][] = "common_name";
//	short_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "short_name";
	$fdata["GoodName"] = "short_name";
	$fdata["ownerTable"] = "tparam_uej";
	$fdata["Label"] = GetFieldLabel("tparam_uej","short_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "short_name";

		$fdata["sourceSingle"] = "short_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "short_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatparam_uej["short_name"] = $fdata;
		$tdatatparam_uej[".searchableFields"][] = "short_name";
//	ctrl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ctrl";
	$fdata["GoodName"] = "ctrl";
	$fdata["ownerTable"] = "tparam_uej";
	$fdata["Label"] = GetFieldLabel("tparam_uej","ctrl");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ctrl";

		$fdata["sourceSingle"] = "ctrl";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrl";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "estado";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatparam_uej["ctrl"] = $fdata;
		$tdatatparam_uej[".searchableFields"][] = "ctrl";


$tables_data["tparam_uej"]=&$tdatatparam_uej;
$field_labels["tparam_uej"] = &$fieldLabelstparam_uej;
$fieldToolTips["tparam_uej"] = &$fieldToolTipstparam_uej;
$placeHolders["tparam_uej"] = &$placeHolderstparam_uej;
$page_titles["tparam_uej"] = &$pageTitlestparam_uej;


changeTextControlsToDate( "tparam_uej" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_uej"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_uej"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_uej()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sector_id,  sector_name,  common_name,  short_name,  ctrl";
$proto0["m_strFrom"] = "FROM tparam_uej";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_id",
	"m_strTable" => "tparam_uej",
	"m_srcTableName" => "tparam_uej"
));

$proto6["m_sql"] = "sector_id";
$proto6["m_srcTableName"] = "tparam_uej";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_name",
	"m_strTable" => "tparam_uej",
	"m_srcTableName" => "tparam_uej"
));

$proto8["m_sql"] = "sector_name";
$proto8["m_srcTableName"] = "tparam_uej";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "common_name",
	"m_strTable" => "tparam_uej",
	"m_srcTableName" => "tparam_uej"
));

$proto10["m_sql"] = "common_name";
$proto10["m_srcTableName"] = "tparam_uej";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "short_name",
	"m_strTable" => "tparam_uej",
	"m_srcTableName" => "tparam_uej"
));

$proto12["m_sql"] = "short_name";
$proto12["m_srcTableName"] = "tparam_uej";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl",
	"m_strTable" => "tparam_uej",
	"m_srcTableName" => "tparam_uej"
));

$proto14["m_sql"] = "ctrl";
$proto14["m_srcTableName"] = "tparam_uej";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tparam_uej";
$proto17["m_srcTableName"] = "tparam_uej";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "sector_id";
$proto17["m_columns"][] = "sector_name";
$proto17["m_columns"][] = "common_name";
$proto17["m_columns"][] = "short_name";
$proto17["m_columns"][] = "ctrl";
$proto17["m_columns"][] = "seguimiento";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tparam_uej";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tparam_uej";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_uej";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_uej = createSqlQuery_tparam_uej();


	
								;

					

$tdatatparam_uej[".sqlquery"] = $queryData_tparam_uej;



$tdatatparam_uej[".hasEvents"] = false;

?>