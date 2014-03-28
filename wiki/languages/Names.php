<?php
/**
 * Language names.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Language
 */

/**
 * These determine things like interwikis, language selectors, and so on.
 * Safe to change without running scripts on the respective sites.
 *
 * \xE2\x80\x8E is the left-to-right marker and
 * \xE2\x80\x8F is the right-to-left marker.
 * They are required for ensuring the correct display of brackets in
 * mixed rtl/ltr environment.
 *
 * Some writing systems require some line-height fixes. This includes
 * most Indic scripts, like Devanagari.
 * If you are adding support for such a language, add it also to
 * the relevant section in skins/common/shared.css.
 *
 * @ingroup Language
 */
/* private */ $coreLanguageNames = array(
	'aa' => 'Qafár af',	# Afar
	'ab' => 'Аҧсшәа',	# Abkhaz
	'ace' => 'Acèh',	# Aceh
	'af' => 'Afrikaans',	# Afrikaans
	'ak' => 'Akan',		# Akan
	'aln' => 'Gegë',	# Gheg Albanian
	'als' => 'Alemannisch',	# Alemannic -- not a valid code, for compatibility. See gsw.
	'am' => 'አማርኛ',	# Amharic
	'an' => 'aragonés',	# Aragonese
	'ang' => 'Ænglisc',	# Old English (Bug 23283)
	'anp' => 'अङ्गिका',	# Angika
	'ar' => 'العربية',	# Arabic
	'arc' => 'ܐܪܡܝܐ',	# Aramaic
	'arn' => 'mapudungun',	# Mapuche, Mapudungu, Araucanian (Araucano)
	'ary' => 'Maġribi',	# Moroccan Spoken Arabic
	'arz' => 'مصرى',	# Egyptian Spoken Arabic
	'as' => 'অসমীয়া',	# Assamese
	'ast' => 'asturianu',	# Asturian
	'av' => 'авар',	# Avar
	'avk' => 'Kotava', # Kotava
	'ay' => 'Aymar aru',	# Aymara
	'az' => 'azərbaycanca',	# Azerbaijani
	'azb' => 'تورکجه',	# South Azerbaijani
	'ba' => 'башҡортса',	# Bashkir
	'bar' => 'Boarisch',	# Bavarian (Austro-Bavarian and South Tyrolean)
	'bat-smg' => 'žemaitėška', # Samogitian (deprecated code, 'sgs' in ISO 693-3 since 2010-06-30 )
	'bbc' => 'Batak Toba', # Batak Toba (falls back to bbc-latn)
	'bbc-latn' => 'Batak Toba', # Batak Toba
	'bcc' => 'بلوچی مکرانی', # Southern Balochi
	'bcl' => 'Bikol Central', # Bikol: Central Bicolano language
	'be' => 'беларуская',	#  Belarusian normative
	'be-tarask' => "беларуская (тарашкевіца)\xE2\x80\x8E",	# Belarusian in Taraskievica orthography
	'be-x-old' => "беларуская (тарашкевіца)\xE2\x80\x8E",	# Belarusian in Taraskievica orthography; compat link
	'bg' => 'български',	# Bulgarian
	'bh' => 'भोजपुरी',	# Bihari macro language. Falls back to Bhojpuri (bho). The name actually says "Bhojpuri".
	'bho' => 'भोजपुरी',	# Bhojpuri
	'bi' => 'Bislama',		# Bislama
	'bjn' => 'Bahasa Banjar',	# Banjarese
	'bm' => 'bamanankan',	# Bambara
	'bn' => 'বাংলা',	# Bengali
	'bo' => 'བོད་ཡིག',	# Tibetan
	'bpy' => 'বিষ্ণুপ্রিয়া মণিপুরী',	# Bishnupriya Manipuri
	'bqi' => 'بختياري',	# Bakthiari
	'br' => 'brezhoneg',	# Breton
	'brh' => 'Bráhuí',	# Brahui
	'bs' => 'bosanski',		# Bosnian
	'bug' => 'ᨅᨔ ᨕᨘᨁᨗ',	# Buginese
	'bxr' => 'буряад',	# Buryat (Russia)
	'ca' => 'català',	# Catalan
	'cbk-zam' => 'Chavacano de Zamboanga',	# Zamboanga Chavacano
	'cdo' => 'Mìng-dĕ̤ng-ngṳ̄',	# Min Dong
	'ce' => 'нохчийн',	# Chechen
	'ceb' => 'Cebuano',     # Cebuano
	'ch' => 'Chamoru',		# Chamorro
	'cho' => 'Choctaw',		# Choctaw
	'chr' => 'ᏣᎳᎩ', # Cherokee
	'chy' => 'Tsetsêhestâhese',	# Cheyenne
	'ckb' => 'کوردی',	# Sorani. The name actually says "Kurdi" (Kurdish).
	'co' => 'corsu',		# Corsican
	'cps' => 'Capiceño', # Capiznon
	'cr' => 'Nēhiyawēwin / ᓀᐦᐃᔭᐍᐏᐣ',		# Cree
	'crh' => 'qırımtatarca',   # Crimean Tatar (multiple scripts - defaults to Latin)
	'crh-latn' => "qırımtatarca (Latin)\xE2\x80\x8E",       # Crimean Tatar (Latin)
	'crh-cyrl' => "къырымтатарджа (Кирилл)\xE2\x80\x8E",       # Crimean Tatar (Cyrillic)
	'cs' => 'česky',	# Czech
	'csb' => 'kaszëbsczi',	# Cassubian
	'cu' => 'словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ',	# Old Church Slavonic (ancient language)
	'cv' => 'Чӑвашла',	# Chuvash
	'cy' => 'Cymraeg',		# Welsh
	'da' => 'dansk',		# Danish
	'de' => 'Deutsch',		# German ("Du")
	'de-at' => 'Österreichisches Deutsch',		# Austrian German
	'de-ch' => 'Schweizer Hochdeutsch',		# Swiss Standard German
	'de-formal' => "Deutsch (Sie-Form)\xE2\x80\x8E",		# German - formal address ("Sie")
	'diq' => 'Zazaki',		# Zazaki
	'dsb' => 'dolnoserbski', # Lower Sorbian
	'dtp' => 'Dusun Bundu-liwan', # Central Dusun
	'dv' => 'ދިވެހިބަސް',		# Dhivehi
	'dz' => 'ཇོང་ཁ',		# Dzongkha (Bhutan)
	'ee' => 'eʋegbe',	# Éwé
	'egl' => 'Emiliàn',	# Emilian
	'el' => 'Ελληνικά',	# Greek
	'eml' => 'emiliàn e rumagnòl',	# Emiliano-Romagnolo / Sammarinese
	'en' => 'English',		# English
	'en-ca' => 'Canadian English',	# Canadian English
	'en-gb' => 'British English',	# British English
	'eo' => 'Esperanto',	# Esperanto
	'es' => 'español',	# Spanish
	'et' => 'eesti',		# Estonian
	'eu' => 'euskara',		# Basque
	'ext' => 'estremeñu', # Extremaduran
	'fa' => 'فارسی',	# Persian
	'ff' => 'Fulfulde',		# Fulfulde, Maasina
	'fi' => 'suomi',		# Finnish
	'fit' => 'meänkieli', # Tornedalen Finnish
	'fiu-vro' => 'Võro',    # Võro (deprecated code, 'vro' in ISO 639-3 since 2009-01-16)
	'fj' => 'Na Vosa Vakaviti',	# Fijian
	'fo' => 'føroyskt',	# Faroese
	'fr' => 'français',	# French
	'frc' => 'français cadien', # Cajun French
	'frp' => 'arpetan',	# Franco-Provençal/Arpitan
	'frr' => 'Nordfriisk',	# North Frisian
	'fur' => 'furlan',		# Friulian
	'fy' => 'Frysk',		# Frisian
	'ga' => 'Gaeilge',		# Irish
	'gag' => 'Gagauz',		# Gagauz
	'gan' => '贛語',		# Gan (multiple scripts - defaults to Traditional)
	'gan-hans' => "赣语（简体）\xE2\x80\x8E",	# Gan (Simplified Han)
	'gan-hant' => "贛語（繁體）\xE2\x80\x8E",	# Gan (Traditional Han)
	'gd' => 'Gàidhlig',	# Scots Gaelic
	'gl' => 'galego',		# Galician
	'glk' => 'گیلکی',	# Gilaki
	'gn' => 'Avañe\'ẽ',	# Guaraní, Paraguayan
	'got' => '𐌲𐌿𐍄𐌹𐍃𐌺',	# Gothic
	'grc' => 'Ἀρχαία ἑλληνικὴ', # Ancient Greek
	'gsw' => 'Alemannisch',	# Alemannic
	'gu' => 'ગુજરાતી',	# Gujarati
	'gv' => 'Gaelg',		# Manx
	'ha' => 'Hausa',	# Hausa
	'hak' => '客家語/Hak-kâ-ngî',	# Hakka
	'haw' => 'Hawai`i',		# Hawaiian
	'he' => 'עברית',	# Hebrew
	'hi' => 'हिन्दी',	# Hindi
	'hif' => 'Fiji Hindi',	# Fijian Hindi (multiple scripts - defaults to Latin)
	'hif-latn' => 'Fiji Hindi',	# Fiji Hindi (latin)
	'hil' => 'Ilonggo',	# Hiligaynon
	'ho' => 'Hiri Motu',	# Hiri Motu
	'hr' => 'hrvatski',		# Croatian
	'hsb' => 'hornjoserbsce',	# Upper Sorbian
	'ht' => 'Kreyòl ayisyen',		# Haitian Creole French
	'hu' => 'magyar',		# Hungarian
	'hy' => 'Հայերեն',	# Armenian
	'hz' => 'Otsiherero',	# Herero
	'ia' => 'interlingua',	# Interlingua (IALA)
	'id' => 'Bahasa Indonesia',	# Indonesian
	'ie' => 'Interlingue',	# Interlingue (Occidental)
	'ig' => 'Igbo',			# Igbo
	'ii' => 'ꆇꉙ',	# Sichuan Yi
	'ik' => 'Iñupiak',	# Inupiak (Inupiatun, Northwest Alaska / Inupiatun, North Alaskan)
	'ike-cans' => 'ᐃᓄᒃᑎᑐᑦ',	# Inuktitut, Eastern Canadian/Eastern Canadian "Eskimo"/"Eastern Arctic Eskimo"/Inuit (Unified Canadian Aboriginal Syllabics)
	'ike-latn' => 'inuktitut',	# Inuktitut, Eastern Canadian (Latin script)
	'ilo' => 'Ilokano',	# Ilokano
	'inh' => 'ГӀалгӀай',    # Ingush
	'io' => 'Ido',			# Ido
	'is' => 'íslenska',	# Icelandic
	'it' => 'italiano',		# Italian
	'iu' => 'ᐃᓄᒃᑎᑐᑦ/inuktitut',	# Inuktitut (macro language - do no localise, see ike/ikt - falls back to ike-cans)
	'ja' => '日本語',	# Japanese
	'jam' => 'Patois',	# Jamaican Creole English
	'jbo' => 'Lojban',		# Lojban
	'jut' => 'jysk',	# Jutish / Jutlandic
	'jv' => 'Basa Jawa',	# Javanese
	'ka' => 'ქართული',	# Georgian
	'kaa' => 'Qaraqalpaqsha',	# Karakalpak
	'kab' => 'Taqbaylit',	# Kabyle
	'kbd' => 'Адыгэбзэ',	# Kabardian
	'kbd-cyrl' => 'Адыгэбзэ',	# Kabardian (Cyrillic)
	'kg' => 'Kongo',	# Kongo, (FIXME!) should probaly be KiKongo or KiKoongo
	'khw' => 'کھوار',	# Khowar
	'ki' => 'Gĩkũyũ',	# Gikuyu
	'kiu' => 'Kırmancki',	# Kirmanjki
	'kj' => 'Kwanyama',	# Kwanyama
	'kk' => 'қазақша',	# Kazakh (multiple scripts - defaults to Cyrillic)
	'kk-arab' => "قازاقشا (تٴوتە)\xE2\x80\x8F",	# Kazakh Arabic
	'kk-cyrl' => "қазақша (кирил)\xE2\x80\x8E",	# Kazakh Cyrillic
	'kk-latn' => "qazaqşa (latın)\xE2\x80\x8E",	# Kazakh Latin
	'kk-cn' => "قازاقشا (جۇنگو)\xE2\x80\x8F",	# Kazakh (China)
	'kk-kz' => "қазақша (Қазақстан)\xE2\x80\x8E",	# Kazakh (Kazakhstan)
	'kk-tr' => "qazaqşa (Türkïya)\xE2\x80\x8E",	# Kazakh (Turkey)
	'kl' => 'kalaallisut',	# Inuktitut, Greenlandic/Greenlandic/Kalaallisut (kal)
	'km' => 'ភាសាខ្មែរ',	# Khmer, Central
	'kn' => 'ಕನ್ನಡ',	# Kannada
	'ko' => '한국어',	# Korean
	'ko-kp' => '한국어 (조선)',	# Korean (DPRK)
	'koi' => 'Перем Коми', # Komi-Permyak
	'kr' => 'Kanuri',		# Kanuri, Central
	'krc' => 'къарачай-малкъар', # Karachay-Balkar
	'kri' => 'Krio', # Krio
	'krj' => 'Kinaray-a', # Kinaray-a
	'ks' => 'कॉशुर / کٲشُر',	# Kashmiri (multiple scripts - defaults to Perso-Arabic)
	'ks-arab' => 'کٲشُر',	# Kashmiri (Perso-Arabic script)
	'ks-deva' => 'कॉशुर',	# Kashmiri (Devanagari script)
	'ksh' => 'Ripoarisch',	# Ripuarian
	'ku' => 'Kurdî',	# Kurdish (multiple scripts - defaults to Latin)
	'ku-latn' => "Kurdî (latînî)\xE2\x80\x8E",	# Northern Kurdish (Latin script)
	'ku-arab' => "كوردي (عەرەبی)\xE2\x80\x8F",	# Northern Kurdish (Arabic script) (falls back to ckb)
	'kv' => 'коми',	# Komi-Zyrian (Cyrillic is common script but also written in Latin script)
	'kw' => 'kernowek',		# Cornish
	'ky' => 'Кыргызча',	# Kirghiz
	'la' => 'Latina',		# Latin
	'lad' => 'Ladino',	# Ladino
	'lb' => 'Lëtzebuergesch',	# Luxemburguish
	'lbe' => 'лакку',	# Lak
	'lez' => 'лезги',	# Lezgi
	'lfn' => 'Lingua Franca Nova',	# Lingua Franca Nova
	'lg' => 'Luganda',		# Ganda
	'li' => 'Limburgs',	# Limburgian
	'lij' => 'Ligure',	# Ligurian
	'liv' => 'Līvõ kēļ',	# Livonian
	'lmo' => 'lumbaart',	# Lombard
	'ln' => 'lingála',		# Lingala
	'lo' => 'ລາວ',	# Laotian
	'loz' => 'Silozi', # Lozi
	'lt' => 'lietuvių',	# Lithuanian
	'ltg' => 'latgaļu', 	# Latgalian
	'lus' => 'Mizo ţawng', # Mizo/Lushai
	'lv' => 'latviešu',	# Latvian
	'lzh' => '文言',	# Literary Chinese -- (bug 8217) lzh instead of zh-classical, http://www.sil.org/iso639-3/codes.asp?order=639_3&letter=l
	'lzz' => 'Lazuri',	# Laz
	'mai' => 'मैथिली', # Maithili
	'map-bms' => 'Basa Banyumasan', # Banyumasan
	'mdf' => 'мокшень',		# Moksha
	'mg' => 'Malagasy',		# Malagasy
	'mh' => 'Ebon',			# Marshallese
	'mhr' => 'олык марий',	# Eastern Mari
	'mi' => 'Māori',	# Maori
	'min' => 'Baso Minangkabau',	# Minangkabau
	'mk' => 'македонски',	# Macedonian
	'ml' => 'മലയാളം',	# Malayalam
	'mn' => 'монгол',	# Halh Mongolian (Cyrillic) (ISO 639-3: khk)
	'mo' => 'молдовеняскэ',	# Moldovan, deprecated
	'mr' => 'मराठी',	# Marathi
	'mrj' => 'кырык мары',	# Hill Mari
	'ms' => 'Bahasa Melayu',	# Malay
	'mt' => 'Malti',	# Maltese
	'mus' => 'Mvskoke',	# Muskogee/Creek
	'mwl' => 'Mirandés',	# Mirandese
	'my' => 'မြန်မာဘာသာ',		# Burmese
	'myv' => 'эрзянь',	# Erzya
	'mzn' => 'مازِرونی',		# Mazanderani
	'na' => 'Dorerin Naoero',		# Nauruan
	'nah' => 'Nāhuatl',		# Nahuatl, en:Wikipedia writes Nahuatlahtolli, while another form is Náhuatl
	'nan' => 'Bân-lâm-gú', # Min-nan -- (bug 8217) nan instead of zh-min-nan, http://www.sil.org/iso639-3/codes.asp?order=639_3&letter=n
	'nap' => 'Napulitano',	# Neapolitan, bug 43793
	'nb' => "norsk bokmål",		# Norwegian (Bokmal)
	'nds' => 'Plattdüütsch',	# Low German ''or'' Low Saxon
	'nds-nl' => 'Nedersaksies',	# aka Nedersaksisch: Dutch Low Saxon
	'ne' => 'नेपाली',	# Nepali
	'new' => 'नेपाल भाषा',		# Newar / Nepal Bhasha
	'ng' => 'Oshiwambo',		# Ndonga
	'niu' => 'Niuē',	# Niuean
	'nl' => 'Nederlands',	# Dutch
	'nl-informal' => "Nederlands (informeel)\xE2\x80\x8E",	# Dutch (informal address ("je"))
	'nn' => "norsk nynorsk",	# Norwegian (Nynorsk)
	'no' => "norsk bokmål",		# Norwegian (falls back to nb).
	'nov' => 'Novial',		# Novial
	'nrm' => 'Nouormand',	# Norman
	'nso' => 'Sesotho sa Leboa',	# Northern Sotho
	'nv' => 'Diné bizaad',	# Navajo
	'ny' => 'Chi-Chewa',	# Chichewa
	'oc' => 'occitan',		# Occitan
	'om' => 'Oromoo',		# Oromo
	'or' => 'ଓଡ଼ିଆ',		# Oriya
	'os' => 'Ирон', # Ossetic -- fixed per bug 29091
	'pa' => 'ਪੰਜਾਬੀ', # Eastern Punjabi (Gurmukhi script) (pan)
	'pag' => 'Pangasinan',	# Pangasinan
	'pam' => 'Kapampangan',   # Pampanga
	'pap' => 'Papiamentu',	# Papiamentu
	'pcd' => 'Picard',	# Picard
	'pdc' => 'Deitsch',	# Pennsylvania German
	'pdt' => 'Plautdietsch',	# Plautdietsch/Mennonite Low German
	'pfl' => 'Pälzisch',	# Palatinate German
	'pi' => 'पालि',	# Pali
	'pih' => 'Norfuk / Pitkern', # Norfuk/Pitcairn/Norfolk
	'pl' => 'polski',		# Polish
	'pms' => 'Piemontèis',	# Piedmontese
	'pnb' => 'پنجابی',	# Western Punjabi
	'pnt' => 'Ποντιακά',	# Pontic/Pontic Greek
	'prg' => 'Prūsiskan',	# Prussian
	'ps' => 'پښتو',	# Pashto, Northern/Paktu/Pakhtu/Pakhtoo/Afghan/Pakhto/Pashtu/Pushto/Yusufzai Pashto
	'pt' => 'português',	# Portuguese
	'pt-br' => 'português do Brasil',	# Brazilian Portuguese
	'qu' => 'Runa Simi',	# Southern Quechua
	'qug' => 'Runa shimi',	# Kichwa/Northern Quechua (one of the codes it covers; temporarily used until Kichwa has its own)
	'rgn' => 'Rumagnôl',	# Romagnol
	'rif' => 'Tarifit',	# Tarifit
	'rm' => 'rumantsch',	# Raeto-Romance
	'rmy' => 'Romani',	# Vlax Romany
	'rn' => 'Kirundi',		# Rundi/Kirundi/Urundi
	'ro' => 'română',	# Romanian
	'roa-rup' => 'Armãneashce', # Aromanian (deprecated code, 'rup' exists in ISO 693-3)
	'roa-tara' => 'tarandíne',	# Tarantino
	'ru' => 'русский',	# Russian
	'rue' => 'русиньскый',	# Rusyn
	'rup' => 'Armãneashce', # Aromanian
	'ruq' => 'Vlăheşte',	# Megleno-Romanian (multiple scripts - defaults to Latin)
	'ruq-cyrl' => 'Влахесте',	# Megleno-Romanian (Cyrillic script)
	# 'ruq-grek' => 'Βλαεστε',	# Megleno-Romanian (Greek script)
	'ruq-latn' => 'Vlăheşte',	# Megleno-Romanian (Latin script)
	'rw' => 'Kinyarwanda',	# Kinyarwanda, should possibly be Kinyarwandi
	'sa' => 'संस्कृतम्',	# Sanskrit
	'sah' => 'саха тыла', # Sakha
	'sat' => 'Santali',	# Santali
	'sc' => 'sardu',		# Sardinian
	'scn' => 'sicilianu',	# Sicilian
	'sco' => 'Scots',       # Scots
	'sd' => 'سنڌي',	# Sindhi
	'sdc' => 'Sassaresu',	# Sassarese
	'se' => 'sámegiella',	# Northern Sami
	'sei' => 'Cmique Itom',	# Seri
	'sg' => 'Sängö',		# Sango/Sangho
	'sgs' => 'žemaitėška', # Samogitian
	'sh' => 'srpskohrvatski / српскохрватски', # Serbocroatian
	'shi' => 'Tašlḥiyt/ⵜⴰⵛⵍⵃⵉⵜ',    # Tachelhit (multiple scripts - defaults to Latin)
	'shi-tfng' => 'ⵜⴰⵛⵍⵃⵉⵜ',    # Tachelhit (Tifinagh script)
	'shi-latn' => 'Tašlḥiyt',    # Tachelhit (Latin script)
	'si' => 'සිංහල',	# Sinhalese
	'simple' => 'Simple English',	# Simple English
	'sk' => 'slovenčina',	# Slovak
	'sl' => 'slovenščina',	# Slovenian
	'sli' => 'Schläsch',	# Lower Selisian
	'sm' => 'Gagana Samoa',	# Samoan
	'sma' => 'Åarjelsaemien',	# Southern Sami
	'sn' => 'chiShona',		# Shona
	'so' => 'Soomaaliga',	# Somali
	'sq' => 'shqip',		# Albanian
	'sr' => 'српски / srpski',	# Serbian (multiple scripts - defaults to Cyrillic)
	'sr-ec' => "српски (ћирилица)\xE2\x80\x8E",	# Serbian Cyrillic ekavian
	'sr-el' => "srpski (latinica)\xE2\x80\x8E",	# Serbian Latin ekavian
	'srn' => 'Sranantongo',		# Sranan Tongo
	'ss' => 'SiSwati',		# Swati
	'st' => 'Sesotho',		# Southern Sotho
	'stq' => 'Seeltersk',		# Saterland Frisian
	'su' => 'Basa Sunda',	# Sundanese
	'sv' => 'svenska',		# Swedish
	'sw' => 'Kiswahili',	# Swahili
	'szl' => 'ślůnski',	# Silesian
	'ta' => 'தமிழ்',	# Tamil
	'tcy' => 'ತುಳು', # Tulu
	'te' => 'తెలుగు',	# Telugu
	'tet' => 'tetun',	# Tetun
	'tg' => 'тоҷикӣ',	# Tajiki (falls back to tg-cyrl)
	'tg-cyrl' => 'тоҷикӣ',	# Tajiki (Cyrllic script) (default)
	'tg-latn' => 'tojikī',	# Tajiki (Latin script)
	'th' => 'ไทย',	# Thai
	'ti' => 'ትግርኛ',		# Tigrinya
	'tk' => 'Türkmençe',	# Turkmen
	'tl' => 'Tagalog',		# Tagalog
	'tly' => 'толышә зывон',	# Talysh
	'tn' => 'Setswana',		# Setswana
	'to' => 'lea faka-Tonga',		# Tonga (Tonga Islands)
	'tokipona' => 'Toki Pona',      # Toki Pona
	'tpi' => 'Tok Pisin',	# Tok Pisin
	'tr' => 'Türkçe',	# Turkish
	'tru' => 'Ṫuroyo', # Turoyo
	'ts' => 'Xitsonga',		# Tsonga
	'tt' => 'татарча/tatarça',	# Tatar (multiple scripts - defaults to Cyrillic)
	'tt-cyrl' => 'татарча',	# Tatar (Cyrillic script) (default)
	'tt-latn' => 'tatarça',	# Tatar (Latin script)
	'tum' => 'chiTumbuka',  # Tumbuka
	'tw' => 'Twi',			# Twi, (FIXME!)
	'ty' => 'Reo Mā`ohi',	# Tahitian
	'tyv' => 'тыва дыл',	# Tyvan
	'udm' => 'удмурт',	# Udmurt
	'ug' => 'ئۇيغۇرچە / Uyghurche',	# Uyghur (multiple scripts - defaults to Arabic)
	'ug-arab' => 'ئۇيغۇرچە', # Uyghur (Arabic script) (default)
	'ug-latn' => 'Uyghurche', # Uyghur (Latin script)
	'uk' => 'українська',	# Ukrainian
	'ur' => 'اردو',	# Urdu
	'uz' => 'oʻzbekcha',	# Uzbek
	've' => 'Tshivenda',		# Venda
	'vec' => 'vèneto',	# Venetian
	'vep' => 'vepsän kel’',	# Veps
	'vi' => 'Tiếng Việt',	# Vietnamese
	'vls' => 'West-Vlams', # West Flemish
	'vmf' => 'Mainfränkisch', # Upper Franconian, Main-Franconian
	'vo' => 'Volapük',	# Volapük
	'vot' => 'Vaďďa',	# Vod/Votian
	'vro' => 'Võro',    # Võro
	'wa' => 'walon',		# Walloon
	'war' => 'Winaray', # Waray-Waray
	'wo' => 'Wolof',		# Wolof
	'wuu' => '吴语',		# Wu Chinese
	'xal' => 'хальмг',		# Kalmyk-Oirat (Kalmuk, Kalmuck, Kalmack, Qalmaq, Kalmytskii Jazyk, Khal:mag, Oirat, Volga Oirat, European Oirat, Western Mongolian)
	'xh' => 'isiXhosa',		# Xhosan
	'xmf' => 'მარგალური',	# Mingrelian
	'yi' => 'ייִדיש',	# Yiddish
	'yo' => 'Yorùbá',	# Yoruba
	'yue' => '粵語',	# Cantonese -- (bug 8217) yue instead of zh-yue, http://www.sil.org/iso639-3/codes.asp?order=639_3&letter=y
	'za' => 'Vahcuengh',	# Zhuang
	'zea' => 'Zeêuws',	# Zeeuws/Zeaws
	'zh' => '中文',						# (Zhōng Wén) - Chinese
	'zh-classical' => '文言',			# Classical Chinese/Literary Chinese -- (see bug 8217)
	'zh-cn' => "中文（中国大陆）\xE2\x80\x8E",	# Chinese (PRC)
	'zh-hans' => "中文（简体）\xE2\x80\x8E",	# Mandarin Chinese (Simplified Chinese script) (cmn-hans)
	'zh-hant' => "中文（繁體）\xE2\x80\x8E",	# Mandarin Chinese (Traditional Chinese script) (cmn-hant)
	'zh-hk' => "中文（香港）\xE2\x80\x8E",	# Chinese (Hong Kong)
	'zh-min-nan' => 'Bân-lâm-gú',				# Min-nan -- (see bug 8217)
	'zh-mo' => "中文（澳門）\xE2\x80\x8E",	# Chinese (Macau)
	'zh-my' => "中文（马来西亚）\xE2\x80\x8E",	# Chinese (Malaysia)
	'zh-sg' => "中文（新加坡）\xE2\x80\x8E",	# Chinese (Singapore)
	'zh-tw' => "中文（台灣）\xE2\x80\x8E",	# Chinese (Taiwan)
	'zh-yue' => '粵語',					# Cantonese -- (see bug 8217)
	'zu' => 'isiZulu'		# Zulu
);