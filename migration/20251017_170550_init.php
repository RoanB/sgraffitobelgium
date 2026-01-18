<?php

declare(strict_types=1);

/**
 * Database migration class
 *
 */


use \Skeleton\Database\Database;

class Migration_20251017_170550_Init extends \Skeleton\Database\Migration {

	/**
	 * Migrate up
	 *
	 * @access public
	 */
	public function up(): void {
		$db = Database::get();

		$countries = [
			[ "Afghanistan", "AF", "AFG", "004"],
			[ "Albania", "AL", "ALB", "008", "1" ],
			[ "Algeria", "DZ", "DZA", "012" ],
			[ "American Samoa", "AS", "ASM", "016" ],
			[ "Andorra", "AD", "AND", "020", "1" ],
			[ "Angola", "AO", "AGO", "024" ],
			[ "Anguilla", "AI", "AIA", "660" ],
			[ "Antarctica", "AQ", "ATA", "010" ],
			[ "Antigua and Barbuda", "AG", "ATG", "028" ],
			[ "Argentina", "AR", "ARG", "032" ],
			[ "Armenia", "AM", "ARM", "051" ],
			[ "Aruba", "AW", "ABW", "533" ],
			[ "Australia", "AU", "AUS", "036" ],
			[ "Austria", "AT", "AUT", "040", "1" ],
			[ "Azerbaijan", "AZ", "AZE", "031" ],
			[ "Bahamas (the)", "BS", "BHS", "044" ],
			[ "Bahrain", "BH", "BHR", "048" ],
			[ "Bangladesh", "BD", "BGD", "050" ],
			[ "Barbados", "BB", "BRB", "052" ],
			[ "Belarus", "BY", "BLR", "112", "1" ],
			[ "Belgium", "BE", "BEL", "056", "1" ],
			[ "Belize", "BZ", "BLZ", "084" ],
			[ "Benin", "BJ", "BEN", "204" ],
			[ "Bermuda", "BM", "BMU", "060" ],
			[ "Bhutan", "BT", "BTN", "064" ],
			[ "Bolivia (Plurinational State of)", "BO", "BOL", "068" ],
			[ "Bonaire, Sint Eustatius and Saba", "BQ", "BES", "535" ],
			[ "Bosnia and Herzegovina", "BA", "BIH", "070", "1" ],
			[ "Botswana", "BW", "BWA", "072" ],
			[ "Bouvet Island", "BV", "BVT", "074" ],
			[ "Brazil", "BR", "BRA", "076" ],
			[ "British Indian Ocean Territory (the)", "IO", "IOT", "086" ],
			[ "Brunei Darussalam", "BN", "BRN", "096" ],
			[ "Bulgaria", "BG", "BGR", "100", "1" ],
			[ "Burkina Faso", "BF", "BFA", "854" ],
			[ "Burundi", "BI", "BDI", "108" ],
			[ "Cabo Verde", "CV", "CPV", "132" ],
			[ "Cambodia", "KH", "KHM", "116" ],
			[ "Cameroon", "CM", "CMR", "120" ],
			[ "Canada", "CA", "CAN", "124" ],
			[ "Cayman Islands (the)", "KY", "CYM", "136" ],
			[ "Central African Republic (the)", "CF", "CAF", "140" ],
			[ "Chad", "TD", "TCD", "148" ],
			[ "Chile", "CL", "CHL", "152" ],
			[ "China", "CN", "CHN", "156" ],
			[ "Christmas Island", "CX", "CXR", "162" ],
			[ "Cocos (Keeling) Islands (the)", "CC", "CCK", "166" ],
			[ "Colombia", "CO", "COL", "170" ],
			[ "Comoros (the)", "KM", "COM", "174" ],
			[ "Congo (the Democratic Republic of the)", "CD", "COD", "180" ],
			[ "Congo (the)", "CG", "COG", "178" ],
			[ "Cook Islands (the)", "CK", "COK", "184" ],
			[ "Costa Rica", "CR", "CRI", "188" ],
			[ "Croatia", "HR", "HRV", "191", "1" ],
			[ "Cuba", "CU", "CUB", "192" ],
			[ "Curaçao", "CW", "CUW", "531" ],
			[ "Cyprus", "CY", "CYP", "196", "1" ],
			[ "Czechia", "CZ", "CZE", "203", "1" ],
			[ "Côte d'Ivoire", "CI", "CIV", "384" ],
			[ "Denmark", "DK", "DNK", "208", "1" ],
			[ "Djibouti", "DJ", "DJI", "262" ],
			[ "Dominica", "DM", "DMA", "212" ],
			[ "Dominican Republic (the)", "DO", "DOM", "214" ],
			[ "Ecuador", "EC", "ECU", "218" ],
			[ "Egypt", "EG", "EGY", "818" ],
			[ "El Salvador", "SV", "SLV", "222" ],
			[ "Equatorial Guinea", "GQ", "GNQ", "226" ],
			[ "Eritrea", "ER", "ERI", "232" ],
			[ "Estonia", "EE", "EST", "233", "1" ],
			[ "Eswatini", "SZ", "SWZ", "748" ],
			[ "Ethiopia", "ET", "ETH", "231" ],
			[ "Falkland Islands (the) [Malvinas]", "FK", "FLK", "238" ],
			[ "Faroe Islands (the)", "FO", "FRO", "234" ],
			[ "Fiji", "FJ", "FJI", "242" ],
			[ "Finland", "FI", "FIN", "246", "1" ],
			[ "France", "FR", "FRA", "250", "1" ],
			[ "French Guiana", "GF", "GUF", "254" ],
			[ "French Polynesia", "PF", "PYF", "258" ],
			[ "French Southern Territories (the)", "TF", "ATF", "260" ],
			[ "Gabon", "GA", "GAB", "266" ],
			[ "Gambia (the)", "GM", "GMB", "270" ],
			[ "Georgia", "GE", "GEO", "268" ],
			[ "Germany", "DE", "DEU", "276", "1" ],
			[ "Ghana", "GH", "GHA", "288" ],
			[ "Gibraltar", "GI", "GIB", "292" ],
			[ "Greece", "GR", "GRC", "300", "1" ],
			[ "Greenland", "GL", "GRL", "304" ],
			[ "Grenada", "GD", "GRD", "308" ],
			[ "Guadeloupe", "GP", "GLP", "312" ],
			[ "Guam", "GU", "GUM", "316" ],
			[ "Guatemala", "GT", "GTM", "320" ],
			[ "Guernsey", "GG", "GGY", "831" ],
			[ "Guinea", "GN", "GIN", "324" ],
			[ "Guinea-Bissau", "GW", "GNB", "624" ],
			[ "Guyana", "GY", "GUY", "328" ],
			[ "Haiti", "HT", "HTI", "332" ],
			[ "Heard Island and McDonald Islands", "HM", "HMD", "334" ],
			[ "Holy See (the)", "VA", "VAT", "336" ],
			[ "Honduras", "HN", "HND", "340" ],
			[ "Hong Kong", "HK", "HKG", "344" ],
			[ "Hungary", "HU", "HUN", "348", "1" ],
			[ "Iceland", "IS", "ISL", "352" ],
			[ "India", "IN", "IND", "356" ],
			[ "Indonesia", "ID", "IDN", "360" ],
			[ "Iran (Islamic Republic of)", "IR", "IRN", "364" ],
			[ "Iraq", "IQ", "IRQ", "368" ],
			[ "Ireland", "IE", "IRL", "372", "1" ],
			[ "Isle of Man", "IM", "IMN", "833" ],
			[ "Israel", "IL", "ISR", "376" ],
			[ "Italy", "IT", "ITA", "380", "1" ],
			[ "Jamaica", "JM", "JAM", "388" ],
			[ "Japan", "JP", "JPN", "392" ],
			[ "Jersey", "JE", "JEY", "832" ],
			[ "Jordan", "JO", "JOR", "400" ],
			[ "Kazakhstan", "KZ", "KAZ", "398" ],
			[ "Kenya", "KE", "KEN", "404" ],
			[ "Kiribati", "KI", "KIR", "296" ],
			[ "Korea (the Democratic People's Republic of)", "KP", "PRK", "408" ],
			[ "Korea (the Republic of)", "KR", "KOR", "410" ],
			[ "Kuwait", "KW", "KWT", "414" ],
			[ "Kyrgyzstan", "KG", "KGZ", "417" ],
			[ "Lao People's Democratic Republic (the)", "LA", "LAO", "418" ],
			[ "Latvia", "LV", "LVA", "428", "1" ],
			[ "Lebanon", "LB", "LBN", "422" ],
			[ "Lesotho", "LS", "LSO", "426" ],
			[ "Liberia", "LR", "LBR", "430" ],
			[ "Libya", "LY", "LBY", "434" ],
			[ "Liechtenstein", "LI", "LIE", "438", "1" ],
			[ "Lithuania", "LT", "LTU", "440", "1" ],
			[ "Luxembourg", "LU", "LUX", "442", "1" ],
			[ "Macao", "MO", "MAC", "446" ],
			[ "Madagascar", "MG", "MDG", "450" ],
			[ "Malawi", "MW", "MWI", "454" ],
			[ "Malaysia", "MY", "MYS", "458" ],
			[ "Maldives", "MV", "MDV", "462" ],
			[ "Mali", "ML", "MLI", "466" ],
			[ "Malta", "MT", "MLT", "470", "1" ],
			[ "Marshall Islands (the)", "MH", "MHL", "584" ],
			[ "Martinique", "MQ", "MTQ", "474" ],
			[ "Mauritania", "MR", "MRT", "478" ],
			[ "Mauritius", "MU", "MUS", "480" ],
			[ "Mayotte", "YT", "MYT", "175" ],
			[ "Mexico", "MX", "MEX", "484" ],
			[ "Micronesia (Federated States of)", "FM", "FSM", "583" ],
			[ "Moldova (the Republic of)", "MD", "MDA", "498" ],
			[ "Monaco", "MC", "MCO", "492" ],
			[ "Mongolia", "MN", "MNG", "496" ],
			[ "Montenegro", "ME", "MNE", "499",  "1" ],
			[ "Montserrat", "MS", "MSR", "500" ],
			[ "Morocco", "MA", "MAR", "504" ],
			[ "Mozambique", "MZ", "MOZ", "508" ],
			[ "Myanmar", "MM", "MMR", "104" ],
			[ "Namibia", "NA", "NAM", "516" ],
			[ "Nauru", "NR", "NRU", "520" ],
			[ "Nepal", "NP", "NPL", "524" ],
			[ "Netherlands (the)", "NL", "NLD", "528", "1" ],
			[ "New Caledonia", "NC", "NCL", "540" ],
			[ "New Zealand", "NZ", "NZL", "554" ],
			[ "Nicaragua", "NI", "NIC", "558" ],
			[ "Niger (the)", "NE", "NER", "562" ],
			[ "Nigeria", "NG", "NGA", "566" ],
			[ "Niue", "NU", "NIU", "570" ],
			[ "Norfolk Island", "NF", "NFK", "574" ],
			[ "Northern Mariana Islands (the)", "MP", "MNP", "580" ],
			[ "Norway", "NO", "NOR", "578", "1" ],
			[ "Oman", "OM", "OMN", "512" ],
			[ "Pakistan", "PK", "PAK", "586" ],
			[ "Palau", "PW", "PLW", "585" ],
			[ "Palestine, State of", "PS", "PSE", "275" ],
			[ "Panama", "PA", "PAN", "591" ],
			[ "Papua New Guinea", "PG", "PNG", "598" ],
			[ "Paraguay", "PY", "PRY", "600" ],
			[ "Peru", "PE", "PER", "604" ],
			[ "Philippines (the)", "PH", "PHL", "608" ],
			[ "Pitcairn", "PN", "PCN", "612" ],
			[ "Poland", "PL", "POL", "616", "1" ],
			[ "Portugal", "PT", "PRT", "620", "1" ],
			[ "Puerto Rico", "PR", "PRI", "630" ],
			[ "Qatar", "QA", "QAT", "634" ],
			[ "Republic of North Macedonia", "MK", "MKD", "807" ],
			[ "Romania", "RO", "ROU", "642", "1" ],
			[ "Russian Federation (the)", "RU", "RUS", "643" ],
			[ "Rwanda", "RW", "RWA", "646" ],
			[ "Réunion", "RE", "REU", "638" ],
			[ "Saint Barthélemy", "BL", "BLM", "652" ],
			[ "Saint Helena, Ascension and Tristan da Cunha", "SH", "SHN", "654" ],
			[ "Saint Kitts and Nevis", "KN", "KNA", "659" ],
			[ "Saint Lucia", "LC", "LCA", "662" ],
			[ "Saint Martin (French part)", "MF", "MAF", "663" ],
			[ "Saint Pierre and Miquelon", "PM", "SPM", "666" ],
			[ "Saint Vincent and the Grenadines", "VC", "VCT", "670" ],
			[ "Samoa", "WS", "WSM", "882" ],
			[ "San Marino", "SM", "SMR", "674", "1" ],
			[ "Sao Tome and Principe", "ST", "STP", "678" ],
			[ "Saudi Arabia", "SA", "SAU", "682" ],
			[ "Senegal", "SN", "SEN", "686" ],
			[ "Serbia", "RS", "SRB", "688" ],
			[ "Seychelles", "SC", "SYC", "690" ],
			[ "Sierra Leone", "SL", "SLE", "694" ],
			[ "Singapore", "SG", "SGP", "702" ],
			[ "Sint Maarten (Dutch part)", "SX", "SXM", "534" ],
			[ "Slovakia", "SK", "SVK", "703", "1" ],
			[ "Slovenia", "SI", "SVN", "705", "1" ],
			[ "Solomon Islands", "SB", "SLB", "090" ],
			[ "Somalia", "SO", "SOM", "706" ],
			[ "South Africa", "ZA", "ZAF", "710" ],
			[ "South Georgia and the South Sandwich Islands", "GS", "SGS", "239" ],
			[ "South Sudan", "SS", "SSD", "728" ],
			[ "Spain", "ES", "ESP", "724", "1" ],
			[ "Sri Lanka", "LK", "LKA", "144" ],
			[ "Sudan (the)", "SD", "SDN", "729" ],
			[ "Suriname", "SR", "SUR", "740" ],
			[ "Svalbard and Jan Mayen", "SJ", "SJM", "744" ],
			[ "Sweden", "SE", "SWE", "752", "1" ],
			[ "Switzerland", "CH", "CHE", "756" ],
			[ "Syrian Arab Republic", "SY", "SYR", "760" ],
			[ "Taiwan (Province of China)", "TW", "TWN", "158" ],
			[ "Tajikistan", "TJ", "TJK", "762" ],
			[ "Tanzania, United Republic of", "TZ", "TZA", "834" ],
			[ "Thailand", "TH", "THA", "764" ],
			[ "Timor-Leste", "TL", "TLS", "626" ],
			[ "Togo", "TG", "TGO", "768" ],
			[ "Tokelau", "TK", "TKL", "772" ],
			[ "Tonga", "TO", "TON", "776" ],
			[ "Trinidad and Tobago", "TT", "TTO", "780" ],
			[ "Tunisia", "TN", "TUN", "788" ],
			[ "Turkey", "TR", "TUR", "792" ],
			[ "Turkmenistan", "TM", "TKM", "795" ],
			[ "Turks and Caicos Islands (the)", "TC", "TCA", "796" ],
			[ "Tuvalu", "TV", "TUV", "798" ],
			[ "Uganda", "UG", "UGA", "800" ],
			[ "Ukraine", "UA", "UKR", "804", "1" ],
			[ "United Arab Emirates (the)", "AE", "ARE", "784" ],
			[ "United Kingdom of Great Britain and Northern Ireland (the)", "GB", "GBR", "826" ],
			[ "United States Minor Outlying Islands (the)", "UM", "UMI", "581" ],
			[ "United States of America (the)", "US", "USA", "840" ],
			[ "Uruguay", "UY", "URY", "858" ],
			[ "Uzbekistan", "UZ", "UZB", "860" ],
			[ "Vanuatu", "VU", "VUT", "548" ],
			[ "Venezuela (Bolivarian Republic of)", "VE", "VEN", "862" ],
			[ "Viet Nam", "VN", "VNM", "704" ],
			[ "Virgin Islands (British)", "VG", "VGB", "092" ],
			[ "Virgin Islands (U.S.)", "VI", "VIR", "850" ],
			[ "Wallis and Futuna", "WF", "WLF", "876" ],
			[ "Western Sahara", "EH", "ESH", "732" ],
			[ "Yemen", "YE", "YEM", "887" ],
			[ "Zambia", "ZM", "ZMB", "894" ],
			[ "Zimbabwe", "ZW", "ZWE", "716" ],
			[ "Åland Islands", "AX", "ALA", "248" ],
		];

		$db->query("
			CREATE TABLE `country` (
			`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`name` varchar(64) NOT NULL,
			`code` varchar(2) NOT NULL,
			`code3` varchar(3) NOT NULL,
			`numeric` int NOT NULL,
			`european` tinyint(4) DEFAULT '0',
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			`archived` datetime NULL
			);
		");
		foreach ($countries as $data) {
			$country = new Country();
			$country->name = $data[0];
			$country->code = $data[1];
			$country->code3 = $data[2];
			$country->numeric = $data[3];
			if (isset($data[4]) === true) {
				$country->european = true;
			}
			$country->save();
		}

		$db->query("
			CREATE TABLE `user` (
			`id` int NOT NULL AUTO_INCREMENT,
			`uuid` varchar(36) DEFAULT NULL,
			`language_id` int DEFAULT NULL,
			`country_id` int DEFAULT NULL,
			`email` varchar(128) NOT NULL,
			`password` varchar(64) DEFAULT NULL,
			`firstname` varchar(64) DEFAULT NULL,
			`lastname` varchar(64) DEFAULT NULL,
			`zipcode` varchar(12) DEFAULT NULL,
			`city` varchar(64) DEFAULT NULL,
			`admin` tinyint NOT NULL DEFAULT '0',
			`created` datetime NOT NULL,
			`updated` datetime DEFAULT NULL,
			`archived` datetime DEFAULT NULL,
			PRIMARY KEY (`id`),
			UNIQUE KEY `email` (`email`),
			KEY `language_id` (`language_id`),
			KEY `country_id` (`country_id`),
			CONSTRAINT `user_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`),
			CONSTRAINT `user_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`)
			)
		");


		$db->query("
			ALTER TABLE `file`
			ADD `updated` datetime NULL;
		");

		$db->query("
			CREATE TABLE `province` (
			`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`country_id` int NOT NULL,
			`identifier` varchar(128) NOT NULL,
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			`archived` timestamp NULL,
			FOREIGN KEY (`country_id`) REFERENCES `country` (`id`)
			);
		");

		$province = new \Province();
		$province->identifier = 'east_flanders';
		$province->country_id = (Country::get_by_code('BE'))->id;
		$province->text_nl_name = 'Oost Vlaanderen';
		$province->text_en_name = 'East Flanders';
		$province->save();


		$db->query("
			CREATE TABLE `actor_role` (
			`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`identifier` varchar(128) NOT NULL,
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			`archived` timestamp NULL
			);
		");

		$actor_role = new \Actor_Role();
		$actor_role->identifier = 'pioneer';
		$actor_role->text_en_name = 'Pioneer';
		$actor_role->text_nl_name = 'Pionier';
		$actor_role->text_fr_name = 'Pionnier';
		$actor_role->save();

		$actor_role = new \Actor_Role();
		$actor_role->identifier = 'masters';
		$actor_role->text_en_name = 'Masters';
		$actor_role->text_nl_name = 'Meesters';
		$actor_role->text_fr_name = 'Maîtres';
		$actor_role->save();

		$actor_role = new \Actor_Role();
		$actor_role->identifier = 'followers';
		$actor_role->text_en_name = 'Followes';
		$actor_role->text_nl_name = 'Volgers';
		$actor_role->text_fr_name = 'Suiveurs';
		$actor_role->save();

		$actor_role = new \Actor_Role();
		$actor_role->identifier = 'heirs';
		$actor_role->text_en_name = 'Heirs';
		$actor_role->text_nl_name = 'Erfgenamen';
		$actor_role->text_fr_name = 'Héritiers';
		$actor_role->save();

		$db->query("
			CREATE TABLE `style` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`identifier` varchar(128) NOT NULL,
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			`archived` datetime NULL
			);
		");

		$style = new \Style();
		$style->identifier = 'neo_renaissance';
		$style->text_en_name = 'Neo-Renaissance';
		$style->text_nl_name = 'Neo-Renaissance';
		$style->text_fr_name = 'Neo-Renaissance';
		$style->save();

		$style = new \Style();
		$style->identifier = 'art_nouveau';
		$style->text_en_name = 'Art Nouveau';
		$style->text_nl_name = 'Art Nouveau';
		$style->text_fr_name = 'Art Nouveau';
		$style->save();

		$style = new \Style();
		$style->identifier = 'neo_renaissance';
		$style->text_en_name = 'Neo Renaissance';
		$style->text_nl_name = 'Neo Renaissance';
		$style->save();

		$db->query("
			CREATE TABLE `actor_functionality` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`identifier` varchar(128) NOT NULL,
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			`archived` datetime NULL
			);
		");

		$function = new \Actor_Functionality();
		$function->identifier = 'contractor';
		$function->text_en_name = 'Contractor';
		$function->text_nl_name = 'Aannemer';
		$function->text_fr_name = 'Entrepreneur';
		$function->save();

		$function = new \Actor_Functionality();
		$function->identifier = 'arhitect';
		$function->text_en_name = 'Architect';
		$function->text_nl_name = 'Architect';
		$function->text_fr_name = 'Architect';
		$function->save();

		$function = new \Actor_Functionality();
		$function->identifier = 'decorator';
		$function->text_en_name = 'Decorator';
		$function->text_nl_name = 'Aannemer';
		$function->text_fr_name = 'Decorateur';
		$function->save();

		// $function = new \Function();
		// $function->identifier = 'contractor';
		// $function->text_en_name = 'Contractor';
		// $function->text_nl_name = 'Aannemer';
		// $function->save();

		$function = new \Actor_Functionality();
		$function->identifier = 'client';
		$function->text_en_name = 'Client';
		$function->text_nl_name = 'Opdrachtgever';
		$function->text_fr_name = 'Client';
		$function->save();

		$db->query("
			CREATE TABLE `application_method` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`identifier` varchar(128) NOT NULL,
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			`archived` datetime NULL
			);
		");

		$ap_method = new \Application_Method();
		$ap_method->identifier = 'standard';
		$ap_method->text_en_name = 'Standard';
		$ap_method->text_nl_name = 'Standaard';
		$ap_method->text_fr_name = 'Standard';
		$ap_method->save();

		$ap_method = new \Application_Method();
		$ap_method->identifier = 'separated';
		$ap_method->text_en_name = 'Separated';
		$ap_method->text_nl_name = 'Opgedeeld';
		$ap_method->text_fr_name = 'Séparé';
		$ap_method->save();

		$ap_method = new \Application_Method();
		$ap_method->identifier = 'placed_later';
		$ap_method->text_en_name = 'Placed Later';
		$ap_method->text_nl_name = 'Later in geplaatst';
		$ap_method->text_fr_name = 'Ajouté ultérieurement';
		$ap_method->save();

		$db->query("
			CREATE TABLE `sgraffito_condition` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`identifier` varchar(128) NOT NULL,
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			`archived` datetime NULL
			);
		");

		$condition = new \Sgraffito_Condition();
		$condition->identifier = 'good';
		$condition->text_en_name = 'Good state';
		$condition->text_nl_name = 'Goeie staat';
		$condition->text_fr_name = 'Bonne état';
		$condition->save();

		$condition = new \Sgraffito_Condition();
		$condition->identifier = 'overpainted';
		$condition->text_en_name = 'Overpainted';
		$condition->text_nl_name = 'Overschilderd';
		$condition->text_fr_name = 'Recouvert';
		$condition->save();

		$condition = new \Sgraffito_Condition();
		$condition->identifier = 'polluted';
		$condition->text_en_name = 'Polluted';
		$condition->text_nl_name = 'Vervuild';
		$condition->text_fr_name = 'Pollué';
		$condition->save();

		$condition = new \Sgraffito_Condition();
		$condition->identifier = 'demolished';
		$condition->text_en_name = 'Demolished';
		$condition->text_nl_name = 'Gesloopt';
		$condition->text_fr_name = 'Démoli';
		$condition->save();

		$db->query("
			CREATE TABLE `sgraffito_placement` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`identifier` varchar(128) NOT NULL,
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			`archived` datetime NULL
			);
		");

		$placement = new \Sgraffito_Placement();
		$placement->identifier = 'parapet';
		$placement->text_en_name = 'Parapet';
		$placement->text_nl_name = 'Borstwering';
		$placement->text_fr_name = 'Garde-corps';
		$placement->save();

		$placement = new \Sgraffito_Placement();
		$placement->identifier = 'arc_field';
		$placement->text_en_name = 'Arc Field';
		$placement->text_nl_name = 'Boogveld';
		$placement->text_fr_name = 'Champ de courbure';
		$placement->save();

		$db->query("
			CREATE TABLE `theme` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`identifier` varchar(128) NOT NULL,
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			`archived` datetime NULL
			);
		");

		$theme = new \Theme();
		$theme->identifier = 'art';
		$theme->text_en_name = 'Arts';
		$theme->text_nl_name = 'Kunst';
		$theme->text_fr_name = 'Arts';
		$theme->save();

		$theme = new \Theme();
		$theme->identifier = 'floral';
		$theme->text_en_name = 'Floral';
		$theme->text_nl_name = 'Floraal';
		$theme->text_fr_name = 'Floral';
		$theme->save();

		$db->query("
			CREATE TABLE `building_type` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`identifier` varchar(128) NOT NULL,
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			`archived` datetime NULL
			);
		");

		$building_type = new \Building_Type();
		$building_type->identifier = 'townhouse';
		$building_type->text_en_name = 'Townhouse';
		$building_type->text_nl_name = 'Burgerhuis';
		$building_type->text_fr_name = 'Manoir';

		$building_type = new \Building_Type();
		$building_type->identifier = 'school';
		$building_type->text_en_name = 'School';
		$building_type->text_nl_name = 'School';
		$building_type->text_fr_name = 'École';
		$building_type->save();

		$building_type = new \Building_Type();
		$building_type->identifier = 'church';
		$building_type->text_en_name = 'Church';
		$building_type->text_nl_name = 'Kerk';
		$building_type->text_fr_name = 'Église';
		$building_type->save();

		$building_type = new \Building_Type();
		$building_type->identifier = 'warehouse';
		$building_type->text_en_name = 'Warehouse';
		$building_type->text_nl_name = 'Magazijn';
		$building_type->text_fr_name = 'Entrepot';
		$building_type->save();

		$db->query("
			CREATE TABLE `actor` (
				`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				`picture_id` int NULL,
				`style_id` int NULL,
				`actor_functionality_id` int NULL,
				`actor_role_id` int NULL,
				`firstname` varchar(128) NOT NULL,
				`lastname` varchar(128) NOT NULL,
				`birth_date` date NULL,
				`death_date` date NULL,
				`created` datetime NOT NULL,
				`updated` datetime NULL,
				`archived` datetime NULL,
				FOREIGN KEY (`picture_id`) REFERENCES `picture` (`id`),
				FOREIGN KEY (`style_id`) REFERENCES `style` (`id`),
				FOREIGN KEY (`actor_functionality_id`) REFERENCES `actor_functionality` (`id`),
				FOREIGN KEY (`actor_role_id`) REFERENCES `actor_role` (`id`)
			);
		");

		$db->query("
			CREATE TABLE `building` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`picture_id` int NULL,
			`building_type_id` int NULL,
			`country_id` int NOT NULL,
			`province_id` int NULL,
			`name` varchar(128) NULL,
			`build_year` varchar(128) NULL,
			`street` varchar(128) NULL,
			`house_number` varchar(64) NULL,
			`zip` varchar(64) NULL,
			`city` varchar(64) NULL,
			`longitude` varchar(128) NULL,
			`lattitude` varchar(128) NULL,
			`notes` text NULL,
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			`archived` datetime NULL,
			FOREIGN KEY (`picture_id`) REFERENCES `picture` (`id`),
			FOREIGN KEY (`building_type_id`) REFERENCES `building_type` (`id`),
			FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
			FOREIGN KEY (`province_id`) REFERENCES `province` (`id`)
			);
		");

		$db->query("
			CREATE TABLE `sgraffito` (
			`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`picture_id` int NOT NULL,
			`style_id` int NOT NULL,
			`theme_id` int NOT NULL,
			`application_method_id` int NOT NULL,
			`sgraffito_placement_id` int NOT NULL,
			`sgraffito_condition_id` int NOT NULL,
			`figurative_decorative` enum('figurative','decoractive') NOT NULL,
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			`archived` datetime NULL,
			FOREIGN KEY (`picture_id`) REFERENCES `picture` (`id`),
			FOREIGN KEY (`style_id`) REFERENCES `style` (`id`),
			FOREIGN KEY (`theme_id`) REFERENCES `theme` (`id`),
			FOREIGN KEY (`application_method_id`) REFERENCES `application_method` (`id`),
			FOREIGN KEY (`sgraffito_placement_id`) REFERENCES `sgraffito_placement` (`id`),
			FOREIGN KEY (`sgraffito_condition_id`) REFERENCES `sgraffito_condition` (`id`)
			);
		");

		$db->query("
			CREATE TABLE `sgraffito_actor` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`sgraffito_id` int NOT NULL,
			`actor_id` int NOT NULL,
			`created` datetime NOT NULL,
			FOREIGN KEY (`sgraffito_id`) REFERENCES `sgraffito` (`id`),
			FOREIGN KEY (`actor_id`) REFERENCES `actor` (`id`)
			);
		");

		$db->query("
			CREATE TABLE `sgraffito_building` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`sgraffito_id` int NOT NULL,
			`building_id` int NOT NULL,
			`created` datetime NOT NULL,
			FOREIGN KEY (`sgraffito_id`) REFERENCES `sgraffito` (`id`),
			FOREIGN KEY (`building_id`) REFERENCES `building` (`id`)
			);
		");

		$db->query("
			CREATE TABLE `object_picture` (
			`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`classname` varchar(64) NOT NULL,
			`object_id` int(11) NOT NULL,
			`picture_id` int NOT NULL,
			`created` datetime NOT NULL,
			`updated` datetime NULL,
			FOREIGN KEY (`picture_id`) REFERENCES `picture` (`id`)
			);
		");
	}

	/**
	 * Migrate down
	 *
	 * @access public
	 */
	public function down(): void {
	}
}
