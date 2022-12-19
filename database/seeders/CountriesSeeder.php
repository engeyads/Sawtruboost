<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Areas;
use App\Models\userProfiles;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        Areas::create([
            'char' => "DZ",
            'code' => "213",
            'name' => "Algeria"
        ]);

        Areas::create([
            'char' => "AD",
            'code' => "376",
            'name' => "Andorra"
        ]);

        Areas::create([
            'char' => "AO",
            'code' => "244",
            'name' => "Angola"
        ]);

        Areas::create([
            'char' => "AI",
            'code' => "1264",
            'name' => "Anguilla"
        ]);

        Areas::create([
            'char' => "AG",
            'code' => "1268",
            'name' => "Antigua & Barbuda"
        ]);

        Areas::create([
            'char' => "AR",
            'code' => "54",
            'name' => "Argentina"
        ]);

        Areas::create([
            'char' => "AM",
            'code' => "374",
            'name' => "Armenia"
        ]);

        Areas::create([
            'char' => "AW",
            'code' => "297",
            'name' => "Aruba"
        ]);

        Areas::create([
            'char' => "AU",
            'code' => "61",
            'name' => "Australia"
        ]);

        Areas::create([
            'char' => "AT",
            'code' => "43",
            'name' => "Austria"
        ]);

        Areas::create([
            'char' => "AZ",
            'code' => "994",
            'name' => "Azerbaijan"
        ]);

        Areas::create([
            'char' => "BS",
            'code' => "1242",
            'name' => "Bahamas"
        ]);

        Areas::create([
            'char' => "BH",
            'code' => "973",
            'name' => "Bahrain"
        ]);

        Areas::create([
            'char' => "BD",
            'code' => "880",
            'name' => "Bangladesh"
        ]);

        Areas::create([
            'char' => "BB",
            'code' => "1246",
            'name' => "Barbados"
        ]);

        Areas::create([
            'char' => "BY",
            'code' => "375",
            'name' => "Belarus"
        ]);

        Areas::create([
            'char' => "BE",
            'code' => "32",
            'name' => "Belgium"
        ]);

        Areas::create([
            'char' => "BZ",
            'code' => "501",
            'name' => "Belize"
        ]);

        Areas::create([
            'char' => "BJ",
            'code' => "229",
            'name' => "Benin"
        ]);

        Areas::create([
            'char' => "BM",
            'code' => "1441",
            'name' => "Bermuda"
        ]);

        Areas::create([
            'char' => "BT",
            'code' => "975",
            'name' => "Bhutan"
        ]);

        Areas::create([
            'char' => "BO",
            'code' => "591",
            'name' => "Bolivia"
        ]);

        Areas::create([
            'char' => "BA",
            'code' => "387",
            'name' => "Bosnia Herzegovina"
        ]);

        Areas::create([
            'char' => "BW",
            'code' => "267",
            'name' => "Botswana"
        ]);

        Areas::create([
            'char' => "BR",
            'code' => "55",
            'name' => "Brazil"
        ]);

        Areas::create([
            'char' => "BN",
            'code' => "673",
            'name' => "Brunei"
        ]);

        Areas::create([
            'char' => "BG",
            'code' => "359",
            'name' => "Bulgaria"
        ]);

        Areas::create([
            'char' => "BF",
            'code' => "226",
            'name' => "Burkina Faso"
        ]);

        Areas::create([
            'char' => "BI",
            'code' => "257",
            'name' => "Burundi"
        ]);

        Areas::create([
            'char' => "KH",
            'code' => "855",
            'name' => "Cambodia"
        ]);

        Areas::create([
            'char' => "CM",
            'code' => "237",
            'name' => "Cameroon"
        ]);

        Areas::create([
            'char' => "CA",
            'code' => "1",
            'name' => "Canada"
        ]);

        Areas::create([
            'char' => "CV",
            'code' => "238",
            'name' => "Cape Verde Islands"
        ]);

        Areas::create([
            'char' => "KY",
            'code' => "1345",
            'name' => "Cayman Islands"
        ]);

        Areas::create([
            'char' => "CF",
            'code' => "236",
            'name' => "Central African Republic"
        ]);

        Areas::create([
            'char' => "CL",
            'code' => "56",
            'name' => "Chile"
        ]);

        Areas::create([
            'char' => "CN",
            'code' => "86",
            'name' => "China"
        ]);

        Areas::create([
            'char' => "CO",
            'code' => "57",
            'name' => "Colombia"
        ]);

        Areas::create([
            'char' => "KM",
            'code' => "269",
            'name' => "Comoros"
        ]);

        Areas::create([
            'char' => "CG",
            'code' => "242",
            'name' => "Congo"
        ]);

        Areas::create([
            'char' => "CK",
            'code' => "682",
            'name' => "Cook Islands"
        ]);

        Areas::create([
            'char' => "CR",
            'code' => "506",
            'name' => "Costa Rica"
        ]);

        Areas::create([
            'char' => "HR",
            'code' => "385",
            'name' => "Croatia"
        ]);

        Areas::create([
            'char' => "CU",
            'code' => "53",
            'name' => "Cuba"
        ]);

        Areas::create([
            'char' => "CY",
            'code' => "90392",
            'name' => "Cyprus North"
        ]);

        Areas::create([
            'char' => "CY",
            'code' => "357",
            'name' => "Cyprus South"
        ]);

        Areas::create([
            'char' => "CZ",
            'code' => "42",
            'name' => "Czech Republic"
        ]);

        Areas::create([
            'char' => "DK",
            'code' => "45",
            'name' => "Denmark"
        ]);

        Areas::create([
            'char' => "DJ",
            'code' => "253",
            'name' => "Djibouti"
        ]);

        Areas::create([
            'char' => "DM",
            'code' => "1809",
            'name' => "Dominica"
        ]);

        Areas::create([
            'char' => "DO",
            'code' => "1809",
            'name' => "Dominican Republic"
        ]);

        Areas::create([
            'char' => "EC",
            'code' => "593",
            'name' => "Ecuador"
        ]);

        Areas::create([
            'char' => "EG",
            'code' => "20",
            'name' => "Egypt"
        ]);

        Areas::create([
            'char' => "SV",
            'code' => "503",
            'name' => "El Salvador"
        ]);

        Areas::create([
            'char' => "GQ",
            'code' => "240",
            'name' => "Equatorial Guinea"
        ]);

        Areas::create([
            'char' => "ER",
            'code' => "291",
            'name' => "Eritrea"
        ]);

        Areas::create([
            'char' => "EE",
            'code' => "372",
            'name' => "Estonia"
        ]);

        Areas::create([
            'char' => "ET",
            'code' => "251",
            'name' => "Ethiopia"
        ]);

        Areas::create([
            'char' => "FK",
            'code' => "500",
            'name' => "Falkland Islands"
        ]);

        Areas::create([
            'char' => "FO",
            'code' => "298",
            'name' => "Faroe Islands"
        ]);

        Areas::create([
            'char' => "FJ",
            'code' => "679",
            'name' => "Fiji"
        ]);

        Areas::create([
            'char' => "FI",
            'code' => "358",
            'name' => "Finland"
        ]);

        Areas::create([
            'char' => "FR",
            'code' => "33",
            'name' => "France"
        ]);

        Areas::create([
            'char' => "GF",
            'code' => "594",
            'name' => "French Guiana"
        ]);

        Areas::create([
            'char' => "PF",
            'code' => "689",
            'name' => "French Polynesia"
        ]);

        Areas::create([
            'char' => "GA",
            'code' => "241",
            'name' => "Gabon"
        ]);

        Areas::create([
            'char' => "GM",
            'code' => "220",
            'name' => "Gambia"
        ]);

        Areas::create([
            'char' => "GE",
            'code' => "7880",
            'name' => "Georgia"
        ]);

        Areas::create([
            'char' => "DE",
            'code' => "49",
            'name' => "Germany"
        ]);

        Areas::create([
            'char' => "GH",
            'code' => "233",
            'name' => "Ghana"
        ]);

        Areas::create([
            'char' => "GI",
            'code' => "350",
            'name' => "Gibraltar"
        ]);

        Areas::create([
            'char' => "GR",
            'code' => "30",
            'name' => "Greece"
        ]);

        Areas::create([
            'char' => "GL",
            'code' => "299",
            'name' => "Greenland"
        ]);

        Areas::create([
            'char' => "GD",
            'code' => "1473",
            'name' => "Grenada"
        ]);

        Areas::create([
            'char' => "GP",
            'code' => "590",
            'name' => "Guadeloupe"
        ]);

        Areas::create([
            'char' => "GU",
            'code' => "671",
            'name' => "Guam"
        ]);

        Areas::create([
            'char' => "GT",
            'code' => "502",
            'name' => "Guatemala"
        ]);

        Areas::create([
            'char' => "GN",
            'code' => "224",
            'name' => "Guinea"
        ]);

        Areas::create([
            'char' => "GW",
            'code' => "245",
            'name' => "Guinea - Bissau"
        ]);

        Areas::create([
            'char' => "GY",
            'code' => "592",
            'name' => "Guyana"
        ]);

        Areas::create([
            'char' => "HT",
            'code' => "509",
            'name' => "Haiti"
        ]);

        Areas::create([
            'char' => "HN",
            'code' => "504",
            'name' => "Honduras"
        ]);

        Areas::create([
            'char' => "HK",
            'code' => "852",
            'name' => "Hong Kong"
        ]);

        Areas::create([
            'char' => "HU",
            'code' => "36",
            'name' => "Hungary"
        ]);

        Areas::create([
            'char' => "IS",
            'code' => "354",
            'name' => "Iceland"
        ]);

        Areas::create([
            'char' => "IN",
            'code' => "91",
            'name' => "India"
        ]);

        Areas::create([
            'char' => "ID",
            'code' => "62",
            'name' => "Indonesia"
        ]);

        Areas::create([
            'char' => "IR",
            'code' => "98",
            'name' => "Iran"
        ]);

        Areas::create([
            'char' => "IQ",
            'code' => "964",
            'name' => "Iraq"
        ]);

        Areas::create([
            'char' => "IE",
            'code' => "353",
            'name' => "Ireland"
        ]);

        Areas::create([
            'char' => "IL",
            'code' => "972",
            'name' => "Israel"
        ]);

        Areas::create([
            'char' => "IT",
            'code' => "39",
            'name' => "Italy"
        ]);

        Areas::create([
            'char' => "JM",
            'code' => "1876",
            'name' => "Jamaica"
        ]);

        Areas::create([
            'char' => "JP",
            'code' => "81",
            'name' => "Japan"
        ]);

        Areas::create([
            'char' => "JO",
            'code' => "962",
            'name' => "Jordan"
        ]);

        Areas::create([
            'char' => "KZ",
            'code' => "7",
            'name' => "Kazakhstan"
        ]);

        Areas::create([
            'char' => "KE",
            'code' => "254",
            'name' => "Kenya"
        ]);

        Areas::create([
            'char' => "KI",
            'code' => "686",
            'name' => "Kiribati"
        ]);

        Areas::create([
            'char' => "KP",
            'code' => "850",
            'name' => "Korea North"
        ]);

        Areas::create([
            'char' => "KR",
            'code' => "82",
            'name' => "Korea South"
        ]);

        Areas::create([
            'char' => "KW",
            'code' => "965",
            'name' => "Kuwait"
        ]);

        Areas::create([
            'char' => "KG",
            'code' => "996",
            'name' => "Kyrgyzstan"
        ]);

        Areas::create([
            'char' => "LA",
            'code' => "856",
            'name' => "Laos"
        ]);

        Areas::create([
            'char' => "LV",
            'code' => "371",
            'name' => "Latvia"
        ]);

        Areas::create([
            'char' => "LB",
            'code' => "961",
            'name' => "Lebanon"
        ]);

        Areas::create([
            'char' => "LS",
            'code' => "266",
            'name' => "Lesotho"
        ]);

        Areas::create([
            'char' => "LR",
            'code' => "231",
            'name' => "Liberia"
        ]);

        Areas::create([
            'char' => "LY",
            'code' => "218",
            'name' => "Libya"
        ]);

        Areas::create([
            'char' => "LI",
            'code' => "417",
            'name' => "Liechtenstein"
        ]);

        Areas::create([
            'char' => "LT",
            'code' => "370",
            'name' => "Lithuania"
        ]);

        Areas::create([
            'char' => "LU",
            'code' => "352",
            'name' => "Luxembourg"
        ]);

        Areas::create([
            'char' => "MO",
            'code' => "853",
            'name' => "Macao"
        ]);

        Areas::create([
            'char' => "MK",
            'code' => "389",
            'name' => "Macedonia"
        ]);

        Areas::create([
            'char' => "MG",
            'code' => "261",
            'name' => "Madagascar"
        ]);

        Areas::create([
            'char' => "MW",
            'code' => "265",
            'name' => "Malawi"
        ]);

        Areas::create([
            'char' => "MY",
            'code' => "60",
            'name' => "Malaysia"
        ]);

        Areas::create([
            'char' => "MV",
            'code' => "960",
            'name' => "Maldives"
        ]);

        Areas::create([
            'char' => "ML",
            'code' => "223",
            'name' => "Mali"
        ]);

        Areas::create([
            'char' => "MT",
            'code' => "356",
            'name' => "Malta"
        ]);

        Areas::create([
            'char' => "MH",
            'code' => "692",
            'name' => "Marshall Islands"
        ]);

        Areas::create([
            'char' => "MQ",
            'code' => "596",
            'name' => "Martinique"
        ]);

        Areas::create([
            'char' => "MR",
            'code' => "222",
            'name' => "Mauritania"
        ]);

        Areas::create([
            'char' => "YT",
            'code' => "269",
            'name' => "Mayotte"
        ]);

        Areas::create([
            'char' => "MX",
            'code' => "52",
            'name' => "Mexico"
        ]);

        Areas::create([
            'char' => "FM",
            'code' => "691",
            'name' => "Micronesia"
        ]);

        Areas::create([
            'char' => "MD",
            'code' => "373",
            'name' => "Moldova"
        ]);

        Areas::create([
            'char' => "MC",
            'code' => "377",
            'name' => "Monaco"
        ]);

        Areas::create([
            'char' => "MN",
            'code' => "976",
            'name' => "Mongolia"
        ]);

        Areas::create([
            'char' => "MS",
            'code' => "1664",
            'name' => "Montserrat"
        ]);

        Areas::create([
            'char' => "MA",
            'code' => "212",
            'name' => "Morocco"
        ]);

        Areas::create([
            'char' => "MZ",
            'code' => "258",
            'name' => "Mozambique"
        ]);

        Areas::create([
            'char' => "MN",
            'code' => "95",
            'name' => "Myanmar"
        ]);

        Areas::create([
            'char' => "NA",
            'code' => "264",
            'name' => "Namibia"
        ]);

        Areas::create([
            'char' => "NR",
            'code' => "674",
            'name' => "Nauru"
        ]);

        Areas::create([
            'char' => "NP",
            'code' => "977",
            'name' => "Nepal"
        ]);

        Areas::create([
            'char' => "NL",
            'code' => "31",
            'name' => "Netherlands"
        ]);

        Areas::create([
            'char' => "NC",
            'code' => "687",
            'name' => "New Caledonia"
        ]);

        Areas::create([
            'char' => "NZ",
            'code' => "64",
            'name' => "New Zealand"
        ]);

        Areas::create([
            'char' => "NI",
            'code' => "505",
            'name' => "Nicaragua"
        ]);

        Areas::create([
            'char' => "NE",
            'code' => "227",
            'name' => "Niger"
        ]);

        Areas::create([
            'char' => "NG",
            'code' => "234",
            'name' => "Nigeria"
        ]);

        Areas::create([
            'char' => "NU",
            'code' => "683",
            'name' => "Niue"
        ]);

        Areas::create([
            'char' => "NF",
            'code' => "672",
            'name' => "Norfolk Islands"
        ]);

        Areas::create([
            'char' => "NP",
            'code' => "670",
            'name' => "Northern Marianas"
        ]);

        Areas::create([
            'char' => "NO",
            'code' => "47",
            'name' => "Norway"
        ]);

        Areas::create([
            'char' => "OM",
            'code' => "968",
            'name' => "Oman"
        ]);

        Areas::create([
            'char' => "PW",
            'code' => "680",
            'name' => "Palau"
        ]);

        Areas::create([
            'char' => "PS",
            'code' => "970",
            'name' => "Palestine"
        ]);

        Areas::create([
            'char' => "PA",
            'code' => "507",
            'name' => "Panama"
        ]);

        Areas::create([
            'char' => "PG",
            'code' => "675",
            'name' => "Papua New Guinea"
        ]);

        Areas::create([
            'char' => "PY",
            'code' => "595",
            'name' => "Paraguay"
        ]);

        Areas::create([
            'char' => "PE",
            'code' => "51",
            'name' => "Peru"
        ]);

        Areas::create([
            'char' => "PH",
            'code' => "63",
            'name' => "Philippines"
        ]);

        Areas::create([
            'char' => "PL",
            'code' => "48",
            'name' => "Poland"
        ]);

        Areas::create([
            'char' => "PT",
            'code' => "351",
            'name' => "Portugal"
        ]);

        Areas::create([
            'char' => "PR",
            'code' => "1787",
            'name' => "Puerto Rico"
        ]);

        Areas::create([
            'char' => "QA",
            'code' => "974",
            'name' => "Qatar"
        ]);

        Areas::create([
            'char' => "RE",
            'code' => "262",
            'name' => "Reunion"
        ]);

        Areas::create([
            'char' => "RO",
            'code' => "40",
            'name' => "Romania"
        ]);

        Areas::create([
            'char' => "RU",
            'code' => "7",
            'name' => "Russia"
        ]);

        Areas::create([
            'char' => "RW",
            'code' => "250",
            'name' => "Rwanda"
        ]);

        Areas::create([
            'char' => "SM",
            'code' => "378",
            'name' => "San Marino"
        ]);

        Areas::create([
            'char' => "ST",
            'code' => "239",
            'name' => "Sao Tome &amp; Principe"
        ]);

        Areas::create([
            'char' => "SA",
            'code' => "966",
            'name' => "Saudi Arabia"
        ]);

        Areas::create([
            'char' => "SN",
            'code' => "221",
            'name' => "Senegal"
        ]);

        Areas::create([
            'char' => "CS",
            'code' => "381",
            'name' => "Serbia"
        ]);

        Areas::create([
            'char' => "SC",
            'code' => "248",
            'name' => "Seychelles"
        ]);

        Areas::create([
            'char' => "SL",
            'code' => "232",
            'name' => "Sierra Leone"
        ]);

        Areas::create([
            'char' => "SG",
            'code' => "65",
            'name' => "Singapore"
        ]);

        Areas::create([
            'char' => "SK",
            'code' => "421",
            'name' => "Slovak Republic"
        ]);

        Areas::create([
            'char' => "SI",
            'code' => "386",
            'name' => "Slovenia"
        ]);

        Areas::create([
            'char' => "SB",
            'code' => "677",
            'name' => "Solomon Islands"
        ]);

        Areas::create([
            'char' => "SO",
            'code' => "252",
            'name' => "Somalia"
        ]);

        Areas::create([
            'char' => "ZA",
            'code' => "27",
            'name' => "South Africa"
        ]);

        Areas::create([
            'char' => "ES",
            'code' => "34",
            'name' => "Spain"
        ]);

        Areas::create([
            'char' => "LK",
            'code' => "94",
            'name' => "Sri Lanka"
        ]);

        Areas::create([
            'char' => "SH",
            'code' => "290",
            'name' => "St. Helena"
        ]);

        Areas::create([
            'char' => "KN",
            'code' => "1869",
            'name' => "St. Kitts"
        ]);

        Areas::create([
            'char' => "SC",
            'code' => "1758",
            'name' => "St. Lucia"
        ]);

        Areas::create([
            'char' => "SD",
            'code' => "249",
            'name' => "Sudan"
        ]);

        Areas::create([
            'char' => "SR",
            'code' => "597",
            'name' => "Suriname"
        ]);

        Areas::create([
            'char' => "SZ",
            'code' => "268",
            'name' => "Swaziland"
        ]);

        Areas::create([
            'char' => "SE",
            'code' => "46",
            'name' => "Sweden"
        ]);

        Areas::create([
            'char' => "CH",
            'code' => "41",
            'name' => "Switzerland"
        ]);

        Areas::create([
            'char' => "SI",
            'code' => "963",
            'name' => "Syria"
        ]);

        Areas::create([
            'char' => "TW",
            'code' => "886",
            'name' => "Taiwan"
        ]);

        Areas::create([
            'char' => "TJ",
            'code' => "7",
            'name' => "Tajikstan"
        ]);

        Areas::create([
            'char' => "TH",
            'code' => "66",
            'name' => "Thailand"
        ]);

        Areas::create([
            'char' => "TG",
            'code' => "228",
            'name' => "Togo"
        ]);

        Areas::create([
            'char' => "TO",
            'code' => "676",
            'name' => "Tonga"
        ]);

        Areas::create([
            'char' => "TT",
            'code' => "1868",
            'name' => "Trinidad &amp; Tobago"
        ]);

        Areas::create([
            'char' => "TN",
            'code' => "216",
            'name' => "Tunisia"
        ]);

        Areas::create([
            'char' => "TR",
            'code' => "90",
            'name' => "Turkey"
        ]);

        Areas::create([
            'char' => "TM",
            'code' => "7",
            'name' => "Turkmenistan"
        ]);

        Areas::create([
            'char' => "TM",
            'code' => "993",
            'name' => "Turkmenistan"
        ]);

        Areas::create([
            'char' => "TC",
            'code' => "1649",
            'name' => "Turks &amp; Caicos Islands"
        ]);

        Areas::create([
            'char' => "TV",
            'code' => "688",
            'name' => "Tuvalu"
        ]);

        Areas::create([
            'char' => "UG",
            'code' => "256",
            'name' => "Uganda"
        ]);

        Areas::create([
            'char' => "UA",
            'code' => "380",
            'name' => "Ukraine"
        ]);

        Areas::create([
            'char' => "AE",
            'code' => "971",
            'name' => "United Arab Emirates"
        ]);

        Areas::create([
            'char' => "UY",
            'code' => "598",
            'name' => "Uruguay"
        ]);

        Areas::create([
            'char' => "UZ",
            'code' => "7",
            'name' => "Uzbekistan"
        ]);

        Areas::create([
            'char' => "VU",
            'code' => "678",
            'name' => "Vanuatu"
        ]);

        Areas::create([
            'char' => "VA",
            'code' => "379",
            'name' => "Vatican City"
        ]);

        Areas::create([
            'char' => "VE",
            'code' => "58",
            'name' => "Venezuela"
        ]);

        Areas::create([
            'char' => "VN",
            'code' => "84",
            'name' => "Vietnam"
        ]);

        Areas::create([
            'char' => "VG",
            'code' => "84",
            'name' => "Virgin Islands - British"
        ]);

        Areas::create([
            'char' => "VI",
            'code' => "84",
            'name' => "Virgin Islands - US"
        ]);

        Areas::create([
            'char' => "WF",
            'code' => "681",
            'name' => "Wallis &amp; Futuna"
        ]);

        Areas::create([
            'char' => "YE",
            'code' => "969",
            'name' => "Yemen (North)"
        ]);

        Areas::create([
            'char' => "YE",
            'code' => "967",
            'name' => "Yemen (South)"
        ]);

        Areas::create([
            'char' => "ZM",
            'code' => "260",
            'name' => "Zambia"
        ]);

        Areas::create([
            'char' => "ZW",
            'code' => "263",
            'name' => "Zimbabwe"
        ]);

    }
}
