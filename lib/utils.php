<?php 

date_default_timezone_set('UTC');
error_reporting (E_ALL ^ E_NOTICE);

function getnocache($filename) {
	$m = filemtime($filename);
	return $filename . "?ts=". $m;
}

function to_str($string) {
	if ( is_null($string) )
		return "";
	return $string;	
}
function to_num($val, $default) {
	if ( is_null($val) )
		return $default;
	return intval($val);	
}
function to_simple_date($timestamp) {
	$pos = strpos($timestamp, " ");
	if ( $pos >= 2 )
		return (substr($timestamp, 0, $pos));
	return $timestamp;
}
	
function camelize($string)
{
	$buf = ucwords(strtolower($string));
	return $buf;
}

function to_dateline($dt) {
	
	$m = get_month($dt);
	$y = get_year($dt);
	$d = intval(get_day($dt));
	return $m . " ". $d . ", ". $y;
}

function getDateStr($dt) {
	$year = get_year($dt);
	$month = substr($dt, 5, 2);
	$day = get_day($dt);
	return $month . "/". $day . "/". $year;
}

function getDatePath($dt) {
	$year = get_year($dt);
	$month = substr($dt, 5, 2);
	$day = get_day($dt);
	return $year . "/". $month . "/". $day;
}
	
function get_year($date) {
	if ( strlen($date) >= 4 )
		return substr($date, 0, 4);
	return "";
}
function get_month($date) {
	if ( strlen($date) >= 7 )
		return get_month_text(substr($date, 5, 2));
	return "";
}
function get_day($date) {
	if ( strlen($date) >= 10 )
		return substr($date, 8, 2);
	return "";
}
function convert_comment($string) {
	$string = str_replace("\r\n", "<br>", $string);
	$string = str_replace("\n", "<br>", $string);
	$string = preg_replace( '/[^[:print:]]/', '', $string);
    return $string;
}
function condense_comment($string) {
	$string = str_replace("<br>", " &para; ", $string);
    return $string;
}

function getTagContent( $tag, $xml ) {
	preg_match ("#\<body.*?\>(.+?)\<\/body\>#is", $xml, $matches);
  return $matches[1];
}

function getTagContent2( $tag, $id, $xml ) {
	preg_match ("#\<". $tag . ".*id=\"". $id . "\".*?\>(.+?)\<\/". $tag . "\>#is", $xml, $matches);
  return $matches[1];
}

function getTagByClass( $tag, $id, $xml ) {
	preg_match ("#\<". $tag . ".*class=\"". $id . "\".*?\>(.+?)\<\/". $tag . "\>#is", $xml, $matches, PREG_SET_ORDER);
  return $matches[1];
}

function getMetaTag($tag, $xml) {
	$expr = "#\<meta name=\"". $tag . "\".*?content=\"(.+?)\".*?\>#is";
	preg_match ($expr, $xml, $matches);
	return $matches[1];	
}

function toUpper($str) {
	$haystack = strtoupper($str);
	$needles = explode("|", "&MDASH;|&NDASH;|&NBSP;|&AACUTE;|&EACUTE;|&AGRAVE;|&EGRAVE;|&#233;|&#246;");
	$replacements = explode("|", "&mdash;|&ndash;|&nbsp;|&Aacute;|&Eacute;|&Agrave;|&Egrave;|&Eacute;|&#214;");
	
	for ( $i = 0; $i < sizeof($needles); $i++ ) {
		$haystack = str_replace($needles[$i], $replacements[$i], $haystack);
	}
	
	return $haystack;
}

function toMultiLine($str) {

	// used for byline display
	// convert all spaces to <BR/> tags, except in the case of an initial
	// keep single initials on the same line with previous name token
	// e.g., "Michael J. Fox" becomes "Michael J. <BR/>Fox", 
	// while "Paul Thomas Anderson" becomes "Paul <BR/>Thomas <BR/>Anderson"
	

	$pattern = "/(\s{1})([a-zA-Z]{1})([\.])/";
	$replace = "&nbsp;\\2\\3";
	 
	$buf = preg_replace($pattern, $replace, $str);
	return str_replace(" ", " <br/>", $buf);
	
}

function appendSession($url) {	
	$str = $url;
	$appendStr = session_name() . "=". session_id();
	
	if ( strpos($url, "?") > 0 ) {
		$str = $str . "&";
	} else {
		$str = $str . "?";
	}
	
	$str = $str . $appendStr;
	return $str;
}

function makeFirstCharBig( $string ) {

	/* Note: the function below does not work on GoDaddy's server */
	return $string;
	/*
	$pattern = '/firstPara">(\r\n)/';
	$replacement = 'firstPara">';
	$string = preg_replace($pattern, $replacement, $string);
	
	$pattern = '/firstPara">(.{1})/';
	$replacement = 'firstPara"><span class="firstLetter">$1</span>';
	$newstr = preg_replace($pattern, $replacement, $string);
	*/
	return $newstr;
}

function get_suffix($day) {
	$lastNum = substr(to_str($day), -1);
	if ( $lastNum == "1" && $day != 11 )
		return "st";
	else if ( $lastNum == "2" && $day != 12 )
		return "nd";
	else if ( $lastNum == "3" && $day != 13 )
		return "rd";
	else
		return "th";
}
function get_month_text($mon) {
	$mons = explode("|", "None|January|February|March|April|May|June|July|August|September|October|November|December");
	return $mons[intval($mon)];
}

function removeScripts($text) {
    
    $tag = "script";
    $content = '(.+</'.$tag.'[^>]*>|)';
    $str = preg_replace('#</?'.$tag.'[^>]*>'.$content.'#is', '', $text);        
    return $str;
    
} 
	
function stripTags($text) {		
	
	$search = array('/<\?((?!\?>).)*\?>/s');	
	$buf = removeScripts($text);       
	$new = strip_tags(preg_replace($search, '', $buf));

	return $new;
}


function getCountries() {
	$country_list = array(
		"Afghanistan",
		"Albania",
		"Algeria",
		"Andorra",
		"Angola",
		"Antigua and Barbuda",
		"Argentina",
		"Armenia",
		"Australia",
		"Austria",
		"Azerbaijan",
		"Bahamas",
		"Bahrain",
		"Bangladesh",
		"Barbados",
		"Belarus",
		"Belgium",
		"Belize",
		"Benin",
		"Bhutan",
		"Bolivia",
		"Bosnia and Herzegovina",
		"Botswana",
		"Brazil",
		"Brunei",
		"Bulgaria",
		"Burkina Faso",
		"Burundi",
		"Cambodia",
		"Cameroon",
		"Canada",
		"Cape Verde",
		"Central African Republic",
		"Chad",
		"Chile",
		"China",
		"Colombi",
		"Comoros",
		"Congo (Brazzaville)",
		"Congo",
		"Costa Rica",
		"Cote d'Ivoire",
		"Croatia",
		"Cuba",
		"Cyprus",
		"Czech Republic",
		"Denmark",
		"Djibouti",
		"Dominica",
		"Dominican Republic",
		"East Timor (Timor Timur)",
		"Ecuador",
		"Egypt",
		"El Salvador",
		"Equatorial Guinea",
		"Eritrea",
		"Estonia",
		"Ethiopia",
		"Fiji",
		"Finland",
		"France",
		"Gabon",
		"Gambia, The",
		"Georgia",
		"Germany",
		"Ghana",
		"Greece",
		"Grenada",
		"Guatemala",
		"Guinea",
		"Guinea-Bissau",
		"Guyana",
		"Haiti",
		"Honduras",
		"Hungary",
		"Iceland",
		"India",
		"Indonesia",
		"Iran",
		"Iraq",
		"Ireland",
		"Israel",
		"Italy",
		"Jamaica",
		"Japan",
		"Jordan",
		"Kazakhstan",
		"Kenya",
		"Kiribati",
		"Korea, North",
		"Korea, South",
		"Kuwait",
		"Kyrgyzstan",
		"Laos",
		"Latvia",
		"Lebanon",
		"Lesotho",
		"Liberia",
		"Libya",
		"Liechtenstein",
		"Lithuania",
		"Luxembourg",
		"Macedonia",
		"Madagascar",
		"Malawi",
		"Malaysia",
		"Maldives",
		"Mali",
		"Malta",
		"Marshall Islands",
		"Mauritania",
		"Mauritius",
		"Mexico",
		"Micronesia",
		"Moldova",
		"Monaco",
		"Mongolia",
		"Morocco",
		"Mozambique",
		"Myanmar",
		"Namibia",
		"Nauru",
		"Nepa",
		"Netherlands",
		"New Zealand",
		"Nicaragua",
		"Niger",
		"Nigeria",
		"Norway",
		"Oman",
		"Pakistan",
		"Palau",
		"Panama",
		"Papua New Guinea",
		"Paraguay",
		"Peru",
		"Philippines",
		"Poland",
		"Portugal",
		"Qatar",
		"Romania",
		"Russia",
		"Rwanda",
		"Saint Kitts and Nevis",
		"Saint Lucia",
		"Saint Vincent",
		"Samoa",
		"San Marino",
		"Sao Tome and Principe",
		"Saudi Arabia",
		"Senegal",
		"Serbia and Montenegro",
		"Seychelles",
		"Sierra Leone",
		"Singapore",
		"Slovakia",
		"Slovenia",
		"Solomon Islands",
		"Somalia",
		"South Africa",
		"Spain",
		"Sri Lanka",
		"Sudan",
		"Suriname",
		"Swaziland",
		"Sweden",
		"Switzerland",
		"Syria",
		"Taiwan",
		"Tajikistan",
		"Tanzania",
		"Thailand",
		"Togo",
		"Tonga",
		"Trinidad and Tobago",
		"Tunisia",
		"Turkey",
		"Turkmenistan",
		"Tuvalu",
		"Uganda",
		"Ukraine",
		"United Arab Emirates",
		"United Kingdom",
		"United States",
		"Uruguay",
		"Uzbekistan",
		"Vanuatu",
		"Vatican City",
		"Venezuela",
		"Vietnam",
		"Yemen",
		"Zambia",
		"Zimbabwe"
	);
	return $country_list;
}
function getStates() {
   $states = array(
     'AL' => 'Alabama',
     'AK' => 'Alaska',
     'AZ' => 'Arizona',
     'AR' => 'Arkansas',
     'CA' => 'California',
     'CO' => 'Colorado',
     'CT' => 'Connecticut',
     'DE' => 'Delaware',
     'DC' => 'Dist of Columbia',
     'FL' => 'Florida',
     'GA' => 'Georgia',
     'HI' => 'Hawaii',
     'ID' => 'Idaho',
     'IL' => 'Illinois',
     'IN' => 'Indiana',
     'IA' => 'Iowa',
     'KS' => 'Kansas',
     'KY' => 'Kentucky',
     'LA' => 'Louisiana',
     'ME' => 'Maine',
     'MD' => 'Maryland',
     'MA' => 'Massachusetts',
     'MI' => 'Michigan',
     'MN' => 'Minnesota',
     'MS' => 'Mississippi',
     'MO' => 'Missouri',
     'MT' => 'Montana',
     'NE' => 'Nebraska',
     'NV' => 'Nevada',
     'NH' => 'New Hampshire',
     'NJ' => 'New Jersey',
     'NM' => 'New Mexico',
     'NY' => 'New York',
     'NC' => 'North Carolina',
     'ND' => 'North Dakota',
     'OH' => 'Ohio',
     'OK' => 'Oklahoma',
     'OR' => 'Oregon',
     'PA' => 'Pennsylvania',
     'RI' => 'Rhode Island',
     'SC' => 'South Carolina',
     'SD' => 'South Dakota',
     'TN' => 'Tennessee',
     'TX' => 'Texas',
     'UT' => 'Utah',
     'VT' => 'Vermont',
     'VA' => 'Virginia',
     'WA' => 'Washington',
     'WV' => 'West Virginia',
     'WI' => 'Wisconsin',
     'WY' => 'Wyoming');
     
     return $states;
}

$server = $_SERVER['SERVER_NAME'];
$local = ($server == "localhost");
if ( $server == "localhost" )
	$server = $server . "/healthivibe";

$rootpath = "http://". $server . "/";
$sslrootpath = $local == TRUE ? $rootpath : "https://". $server . "/";
$is_ssl = !empty($_SERVER['HTTPS']) && $local == FALSE;
$extrapath = $is_ssl ? $sslrootpath : $rootpath;

$mypage = strtolower($_SERVER['REQUEST_URI']);
$uagent = to_str($_SERVER['HTTP_USER_AGENT']);
$currentURL = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$bot = FALSE;
$localURL = to_str($_SERVER['REQUEST_URI']);
$isHome = strlen($localURL) == 0 || $localURL == "/" || strcmp($localURL, "/healthivibe/") === 0 || stristr($localURL, "index.") !== FALSE;

if ( $isHome ) {
	$socialURL = "http://www.healthivibe.com";	
}  else {
	$socialURL = $currentURL;
}

if ( stripos($uagent, "googlebot") !== FALSE || stripos($uagent, "msnbot") !== FALSE || stripos($uagent, "slurp") !== FALSE ) {
	$bot = TRUE;
}

?>
