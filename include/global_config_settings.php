<?php
$tdataglobal_config = array();
$tdataglobal_config[".searchableFields"] = array();
$tdataglobal_config[".ShortName"] = "global_config";
$tdataglobal_config[".OwnerID"] = "";
$tdataglobal_config[".OriginalTable"] = "global_config";


$tdataglobal_config[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataglobal_config[".originalPagesByType"] = $tdataglobal_config[".pagesByType"];
$tdataglobal_config[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataglobal_config[".originalPages"] = $tdataglobal_config[".pages"];
$tdataglobal_config[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataglobal_config[".originalDefaultPages"] = $tdataglobal_config[".defaultPages"];

//	field labels
$fieldLabelsglobal_config = array();
$fieldToolTipsglobal_config = array();
$pageTitlesglobal_config = array();
$placeHoldersglobal_config = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_config["Spanish"] = array();
	$fieldToolTipsglobal_config["Spanish"] = array();
	$placeHoldersglobal_config["Spanish"] = array();
	$pageTitlesglobal_config["Spanish"] = array();
	$fieldLabelsglobal_config["Spanish"]["cid"] = "ID";
	$fieldToolTipsglobal_config["Spanish"]["cid"] = "";
	$placeHoldersglobal_config["Spanish"]["cid"] = "";
	$fieldLabelsglobal_config["Spanish"]["Modulo"] = "Módulo";
	$fieldToolTipsglobal_config["Spanish"]["Modulo"] = "";
	$placeHoldersglobal_config["Spanish"]["Modulo"] = "";
	$fieldLabelsglobal_config["Spanish"]["GEntidad"] = "Entidad";
	$fieldToolTipsglobal_config["Spanish"]["GEntidad"] = "";
	$placeHoldersglobal_config["Spanish"]["GEntidad"] = "";
	$fieldLabelsglobal_config["Spanish"]["GURL"] = "URL";
	$fieldToolTipsglobal_config["Spanish"]["GURL"] = "";
	$placeHoldersglobal_config["Spanish"]["GURL"] = "";
	$fieldLabelsglobal_config["Spanish"]["GURLHOME"] = "URL 2";
	$fieldToolTipsglobal_config["Spanish"]["GURLHOME"] = "";
	$placeHoldersglobal_config["Spanish"]["GURLHOME"] = "";
	$fieldLabelsglobal_config["Spanish"]["EmailBCC"] = "Email BCC";
	$fieldToolTipsglobal_config["Spanish"]["EmailBCC"] = "";
	$placeHoldersglobal_config["Spanish"]["EmailBCC"] = "";
	$fieldLabelsglobal_config["Spanish"]["EmailAdmin"] = "Email Administrador";
	$fieldToolTipsglobal_config["Spanish"]["EmailAdmin"] = "";
	$placeHoldersglobal_config["Spanish"]["EmailAdmin"] = "";
	$fieldLabelsglobal_config["Spanish"]["logo"] = "Logo";
	$fieldToolTipsglobal_config["Spanish"]["logo"] = "";
	$placeHoldersglobal_config["Spanish"]["logo"] = "";
	$fieldLabelsglobal_config["Spanish"]["mailserver"] = "Mailserver";
	$fieldToolTipsglobal_config["Spanish"]["mailserver"] = "";
	$placeHoldersglobal_config["Spanish"]["mailserver"] = "";
	$fieldLabelsglobal_config["Spanish"]["correosmtp"] = "Correo SMTP";
	$fieldToolTipsglobal_config["Spanish"]["correosmtp"] = "";
	$placeHoldersglobal_config["Spanish"]["correosmtp"] = "";
	$fieldLabelsglobal_config["Spanish"]["GVersion"] = "GVersion";
	$fieldToolTipsglobal_config["Spanish"]["GVersion"] = "";
	$placeHoldersglobal_config["Spanish"]["GVersion"] = "";
	$pageTitlesglobal_config["Spanish"]["edit"] = "Gestión de módulos [{%cid}]";
	if (count($fieldToolTipsglobal_config["Spanish"]))
		$tdataglobal_config[".isUseToolTips"] = true;
}


	$tdataglobal_config[".NCSearch"] = true;



$tdataglobal_config[".shortTableName"] = "global_config";
$tdataglobal_config[".nSecOptions"] = 0;

$tdataglobal_config[".mainTableOwnerID"] = "";
$tdataglobal_config[".entityType"] = 0;
$tdataglobal_config[".connId"] = "dbusers_at_localhost";


$tdataglobal_config[".strOriginalTableName"] = "global_config";

	



$tdataglobal_config[".showAddInPopup"] = false;

$tdataglobal_config[".showEditInPopup"] = false;

$tdataglobal_config[".showViewInPopup"] = false;

$tdataglobal_config[".listAjax"] = false;
//	temporary
//$tdataglobal_config[".listAjax"] = false;

	$tdataglobal_config[".audit"] = false;

	$tdataglobal_config[".locking"] = false;


$pages = $tdataglobal_config[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_config[".edit"] = true;
	$tdataglobal_config[".afterEditAction"] = 0;
	$tdataglobal_config[".closePopupAfterEdit"] = 1;
	$tdataglobal_config[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_config[".add"] = true;
$tdataglobal_config[".afterAddAction"] = 1;
$tdataglobal_config[".closePopupAfterAdd"] = 1;
$tdataglobal_config[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_config[".list"] = true;
}



$tdataglobal_config[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_config[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_config[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_config[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_config[".printFriendly"] = true;
}



$tdataglobal_config[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_config[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_config[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_config[".isUseAjaxSuggest"] = true;



						

$tdataglobal_config[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_config[".buttonsAdded"] = false;

$tdataglobal_config[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_config[".isUseTimeForSearch"] = false;


$tdataglobal_config[".badgeColor"] = "2F4F4F";


$tdataglobal_config[".allSearchFields"] = array();
$tdataglobal_config[".filterFields"] = array();
$tdataglobal_config[".requiredSearchFields"] = array();

$tdataglobal_config[".googleLikeFields"] = array();
$tdataglobal_config[".googleLikeFields"][] = "cid";
$tdataglobal_config[".googleLikeFields"][] = "Modulo";
$tdataglobal_config[".googleLikeFields"][] = "GEntidad";
$tdataglobal_config[".googleLikeFields"][] = "GURL";
$tdataglobal_config[".googleLikeFields"][] = "GURLHOME";
$tdataglobal_config[".googleLikeFields"][] = "EmailBCC";
$tdataglobal_config[".googleLikeFields"][] = "EmailAdmin";
$tdataglobal_config[".googleLikeFields"][] = "logo";
$tdataglobal_config[".googleLikeFields"][] = "mailserver";
$tdataglobal_config[".googleLikeFields"][] = "correosmtp";
$tdataglobal_config[".googleLikeFields"][] = "GVersion";



$tdataglobal_config[".tableType"] = "list";

$tdataglobal_config[".printerPageOrientation"] = 0;
$tdataglobal_config[".nPrinterPageScale"] = 100;

$tdataglobal_config[".nPrinterSplitRecords"] = 40;

$tdataglobal_config[".geocodingEnabled"] = false;










$tdataglobal_config[".pageSize"] = 20;

$tdataglobal_config[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_config[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_config[".orderindexes"] = array();


$tdataglobal_config[".sqlHead"] = "SELECT cid,  	Modulo,  	GEntidad,  	GURL,  	GURLHOME,  	EmailBCC,  	EmailAdmin,  	logo,  	mailserver,  	correosmtp,  	GVersion";
$tdataglobal_config[".sqlFrom"] = "FROM global_config";
$tdataglobal_config[".sqlWhereExpr"] = "";
$tdataglobal_config[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_config[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_config[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_config[".highlightSearchResults"] = true;

$tableKeysglobal_config = array();
$tableKeysglobal_config[] = "cid";
$tdataglobal_config[".Keys"] = $tableKeysglobal_config;


$tdataglobal_config[".hideMobileList"] = array();




//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "global_config";
	$fdata["Label"] = GetFieldLabel("global_config","cid");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cid";

		$fdata["sourceSingle"] = "cid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cid";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
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


	$tdataglobal_config["cid"] = $fdata;
		$tdataglobal_config[".searchableFields"][] = "cid";
//	Modulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Modulo";
	$fdata["GoodName"] = "Modulo";
	$fdata["ownerTable"] = "global_config";
	$fdata["Label"] = GetFieldLabel("global_config","Modulo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Modulo";

		$fdata["sourceSingle"] = "Modulo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Modulo";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataglobal_config["Modulo"] = $fdata;
		$tdataglobal_config[".searchableFields"][] = "Modulo";
//	GEntidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "GEntidad";
	$fdata["GoodName"] = "GEntidad";
	$fdata["ownerTable"] = "global_config";
	$fdata["Label"] = GetFieldLabel("global_config","GEntidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "GEntidad";

		$fdata["sourceSingle"] = "GEntidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GEntidad";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdataglobal_config["GEntidad"] = $fdata;
		$tdataglobal_config[".searchableFields"][] = "GEntidad";
//	GURL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "GURL";
	$fdata["GoodName"] = "GURL";
	$fdata["ownerTable"] = "global_config";
	$fdata["Label"] = GetFieldLabel("global_config","GURL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "GURL";

		$fdata["sourceSingle"] = "GURL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GURL";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataglobal_config["GURL"] = $fdata;
		$tdataglobal_config[".searchableFields"][] = "GURL";
//	GURLHOME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "GURLHOME";
	$fdata["GoodName"] = "GURLHOME";
	$fdata["ownerTable"] = "global_config";
	$fdata["Label"] = GetFieldLabel("global_config","GURLHOME");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "GURLHOME";

		$fdata["sourceSingle"] = "GURLHOME";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GURLHOME";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataglobal_config["GURLHOME"] = $fdata;
		$tdataglobal_config[".searchableFields"][] = "GURLHOME";
//	EmailBCC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EmailBCC";
	$fdata["GoodName"] = "EmailBCC";
	$fdata["ownerTable"] = "global_config";
	$fdata["Label"] = GetFieldLabel("global_config","EmailBCC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EmailBCC";

		$fdata["sourceSingle"] = "EmailBCC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailBCC";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdataglobal_config["EmailBCC"] = $fdata;
		$tdataglobal_config[".searchableFields"][] = "EmailBCC";
//	EmailAdmin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EmailAdmin";
	$fdata["GoodName"] = "EmailAdmin";
	$fdata["ownerTable"] = "global_config";
	$fdata["Label"] = GetFieldLabel("global_config","EmailAdmin");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EmailAdmin";

		$fdata["sourceSingle"] = "EmailAdmin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailAdmin";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdataglobal_config["EmailAdmin"] = $fdata;
		$tdataglobal_config[".searchableFields"][] = "EmailAdmin";
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "global_config";
	$fdata["Label"] = GetFieldLabel("global_config","logo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "logo";

		$fdata["sourceSingle"] = "logo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "logo";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataglobal_config["logo"] = $fdata;
		$tdataglobal_config[".searchableFields"][] = "logo";
//	mailserver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "mailserver";
	$fdata["GoodName"] = "mailserver";
	$fdata["ownerTable"] = "global_config";
	$fdata["Label"] = GetFieldLabel("global_config","mailserver");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mailserver";

		$fdata["sourceSingle"] = "mailserver";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mailserver";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataglobal_config["mailserver"] = $fdata;
		$tdataglobal_config[".searchableFields"][] = "mailserver";
//	correosmtp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "correosmtp";
	$fdata["GoodName"] = "correosmtp";
	$fdata["ownerTable"] = "global_config";
	$fdata["Label"] = GetFieldLabel("global_config","correosmtp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "correosmtp";

		$fdata["sourceSingle"] = "correosmtp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "correosmtp";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataglobal_config["correosmtp"] = $fdata;
		$tdataglobal_config[".searchableFields"][] = "correosmtp";
//	GVersion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "GVersion";
	$fdata["GoodName"] = "GVersion";
	$fdata["ownerTable"] = "global_config";
	$fdata["Label"] = GetFieldLabel("global_config","GVersion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "GVersion";

		$fdata["sourceSingle"] = "GVersion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GVersion";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataglobal_config["GVersion"] = $fdata;
		$tdataglobal_config[".searchableFields"][] = "GVersion";


$tables_data["global_config"]=&$tdataglobal_config;
$field_labels["global_config"] = &$fieldLabelsglobal_config;
$fieldToolTips["global_config"] = &$fieldToolTipsglobal_config;
$placeHolders["global_config"] = &$placeHoldersglobal_config;
$page_titles["global_config"] = &$pageTitlesglobal_config;


changeTextControlsToDate( "global_config" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_config"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_config"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_config()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cid,  	Modulo,  	GEntidad,  	GURL,  	GURLHOME,  	EmailBCC,  	EmailAdmin,  	logo,  	mailserver,  	correosmtp,  	GVersion";
$proto0["m_strFrom"] = "FROM global_config";
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
	"m_strName" => "cid",
	"m_strTable" => "global_config",
	"m_srcTableName" => "global_config"
));

$proto6["m_sql"] = "cid";
$proto6["m_srcTableName"] = "global_config";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Modulo",
	"m_strTable" => "global_config",
	"m_srcTableName" => "global_config"
));

$proto8["m_sql"] = "Modulo";
$proto8["m_srcTableName"] = "global_config";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "GEntidad",
	"m_strTable" => "global_config",
	"m_srcTableName" => "global_config"
));

$proto10["m_sql"] = "GEntidad";
$proto10["m_srcTableName"] = "global_config";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "GURL",
	"m_strTable" => "global_config",
	"m_srcTableName" => "global_config"
));

$proto12["m_sql"] = "GURL";
$proto12["m_srcTableName"] = "global_config";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "GURLHOME",
	"m_strTable" => "global_config",
	"m_srcTableName" => "global_config"
));

$proto14["m_sql"] = "GURLHOME";
$proto14["m_srcTableName"] = "global_config";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailBCC",
	"m_strTable" => "global_config",
	"m_srcTableName" => "global_config"
));

$proto16["m_sql"] = "EmailBCC";
$proto16["m_srcTableName"] = "global_config";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAdmin",
	"m_strTable" => "global_config",
	"m_srcTableName" => "global_config"
));

$proto18["m_sql"] = "EmailAdmin";
$proto18["m_srcTableName"] = "global_config";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "global_config",
	"m_srcTableName" => "global_config"
));

$proto20["m_sql"] = "logo";
$proto20["m_srcTableName"] = "global_config";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "mailserver",
	"m_strTable" => "global_config",
	"m_srcTableName" => "global_config"
));

$proto22["m_sql"] = "mailserver";
$proto22["m_srcTableName"] = "global_config";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "correosmtp",
	"m_strTable" => "global_config",
	"m_srcTableName" => "global_config"
));

$proto24["m_sql"] = "correosmtp";
$proto24["m_srcTableName"] = "global_config";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "GVersion",
	"m_strTable" => "global_config",
	"m_srcTableName" => "global_config"
));

$proto26["m_sql"] = "GVersion";
$proto26["m_srcTableName"] = "global_config";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "global_config";
$proto29["m_srcTableName"] = "global_config";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "cid";
$proto29["m_columns"][] = "Modulo";
$proto29["m_columns"][] = "GEntidad";
$proto29["m_columns"][] = "GURL";
$proto29["m_columns"][] = "GURLHOME";
$proto29["m_columns"][] = "EmailBCC";
$proto29["m_columns"][] = "EmailAdmin";
$proto29["m_columns"][] = "logo";
$proto29["m_columns"][] = "mailserver";
$proto29["m_columns"][] = "correosmtp";
$proto29["m_columns"][] = "GVersion";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "global_config";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "global_config";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_config";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_config = createSqlQuery_global_config();


	
								;

											

$tdataglobal_config[".sqlquery"] = $queryData_global_config;



$tdataglobal_config[".hasEvents"] = false;

?>