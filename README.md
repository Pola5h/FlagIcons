
# Pola5h/FlagIcons

A Laravel package for country and language flag icons using the Twitter Emoji Twemoji Set.

## Installation

You can install the package via Composer. Run the following command:

```bash
composer require pola5h/laravel-flags
```

### Service Provider
If you are using Laravel 5.5 or later, the package will automatically register the service provider. For earlier versions, add the service provider to your `config/app.php` file:

```php
'providers' => [
    // Other service providers...
    FlagIcons\FlagIconsServiceProvider::class,
];
```

### Blade Component Usage
You can use the Blade component to display flag icons. The component supports displaying both country and language flags.

#### Syntax
```blade
<x-flag-icon type="country" code="bd" width="10px" height="10px" />
<x-flag-icon type="language" code="bn" width="10px" height="10px" />
```

#### Parameters
- **type**: The type of flag. Use "country" for country flags and "language" for language flags.
- **code**: The ISO 2 code for the flag (e.g., "bd" for Bangladesh, "bn" for Bengali language).
- **width** (optional): The width of the flag icon. Defaults to "auto".
- **height** (optional): The height of the flag icon. Defaults to "auto".

### Example

To display the flag of Bangladesh with a width of 10px and height of 10px:

```blade
<x-flag-icon type="country" code="bd" width="10px" height="10px" />
```

To display the Bengali language flag with a width of 10px and height of 10px:

```blade
<x-flag-icon type="language" code="bn" width="10px" height="10px" />
```
#### Dynamic Examples
You can also use dynamic values to render icons:

To display the country flag:

```blade
<x-flag-icon type="country" code="{{$code}}" width="10px" height="10px" />
```
or 

```blade
<x-flag-icon type="country" code="{{$country->code}}" width="10px" height="10px" />
```
To display the language flag:

```blade
<x-flag-icon type="language" code="{{$code}}" width="10px" height="10px" />
```
or

```blade
<x-flag-icon type="language" code="{{$language->code}}" width="10px" height="10px" />
```

#### County List With Code
[If you can't see the table, visit GitHub repo]

|    Country Name    |    Country Code    |
|--------------------|--------------------|
|       Afghanistan        |           af           |
|         Albania          |           al           |
|         Algeria          |           dz           |
|      American Samoa      |           as           |
|         Andorra          |           ad           |
|          Angola          |           ao           |
|         Anguilla         |           ai           |
|        Antarctica        |           aq           |
|    Antigua and Barbuda    |           ag           |
|        Argentina         |           ar           |
|         Armenia          |           am           |
|          Aruba           |           aw           |
|     Ascension Island     |           ac           |
|        Australia         |           au           |
|         Austria          |           at           |
|        Azerbaijan        |           az           |
|         Bahamas          |           bs           |
|         Bahrain          |           bh           |
|        Bangladesh        |           bd           |
|         Barbados         |           bb           |
|         Belarus          |           by           |
|         Belgium          |           be           |
|          Belize          |           bz           |
|          Benin           |           bj           |
|         Bermuda          |           bm           |
|          Bhutan          |           bt           |
|    Bolivia, Plurinational State of    |           bo           |
|    Bonaire, Sint Eustatius and Saba    |           bq           |
|    Bosnia and Herzegovina    |           ba           |
|         Botswana         |           bw           |
|      Bouvet Island       |           bv           |
|          Brazil          |           br           |
|    British Indian Ocean Territory    |           io           |
|    Brunei Darussalam     |           bn           |
|         Bulgaria         |           bg           |
|       Burkina Faso       |           bf           |
|         Burundi          |           bi           |
|        Cabo Verde        |           cv           |
|         Cambodia         |           kh           |
|         Cameroon         |           cm           |
|          Canada          |           ca           |
|    Central African Republic    |           cf           |
|          Chile           |           cl           |
|          China           |           cn           |
|     Christmas Island     |           cx           |
|    Cocos (Keeling) Islands    |           cc           |
|         Colombia         |           co           |
|         Comoros          |           km           |
|          Congo           |           cg           |
|    Congo, The Democratic Republic of the    |           cd           |
|       Cook Islands       |           ck           |
|        Costa Rica        |           cr           |
|         Croatia          |           hr           |
|           Cuba           |           cu           |
|         Curaçao          |           cw           |
|          Cyprus          |           cy           |
|         Czechia          |           cz           |
|      Côte d'Ivoire       |           ci           |
|         Denmark          |           dk           |
|         Djibouti         |           dj           |
|         Dominica         |           dm           |
|    Dominican Republic    |           do           |
|         Ecuador          |           ec           |
|          Egypt           |           eg           |
|       El Salvador        |           sv           |
|    Equatorial Guinea     |           gq           |
|         Eritrea          |           er           |
|         Estonia          |           ee           |
|         Eswatini         |           sz           |
|         Ethiopia         |           et           |
|    Falkland Islands (Malvinas)    |           fk           |
|      Faroe Islands       |           fo           |
|           Fiji           |           fj           |
|         Finland          |           fi           |
|          France          |           fr           |
|      French Guiana       |           gf           |
|     French Polynesia     |           pf           |
|    French Southern Territories    |           tf           |
|          Gabon           |           ga           |
|          Gambia          |           gm           |
|         Georgia          |           ge           |
|         Germany          |           de           |
|          Ghana           |           gh           |
|        Gibraltar         |           gi           |
|          Greece          |           gr           |
|        Greenland         |           gl           |
|         Grenada          |           gd           |
|        Guadeloupe        |           gp           |
|           Guam           |           gu           |
|        Guatemala         |           gt           |
|         Guernsey         |           gg           |
|          Guinea          |           gn           |
|      Guinea-Bissau       |           gw           |
|          Guyana          |           gy           |
|          Haiti           |           ht           |
|    Heard Island and McDonald Islands    |           hm           |
|    Holy See (Vatican City State)    |           va           |
|         Honduras         |           hn           |
|        Hong Kong         |           hk           |
|         Hungary          |           hu           |
|         Iceland          |           is           |
|          India           |           in           |
|        Indonesia         |           id           |
|    Iran, Islamic Republic of    |           ir           |
|           Iraq           |           iq           |
|         Ireland          |           ie           |
|       Isle of Man        |           im           |
|          Italy           |           it           |
|         Jamaica          |           jm           |
|          Japan           |           jp           |
|          Jersey          |           je           |
|          Jordan          |           jo           |
|        Kazakhstan        |           kz           |
|          Kenya           |           ke           |
|         Kiribati         |           ki           |
|    Korea, Democratic People's Republic of    |           kp           |
|    Korea, Republic of    |           kr           |
|          Kosovo          |           xk           |
|          Kuwait          |           kw           |
|        Kyrgyzstan        |           kg           |
|    Lao People's Democratic Republic    |           la           |
|          Latvia          |           lv           |
|         Lebanon          |           lb           |
|         Lesotho          |           ls           |
|         Liberia          |           lr           |
|          Libya           |           ly           |
|      Liechtenstein       |           li           |
|        Lithuania         |           lt           |
|        Luxembourg        |           lu           |
|          Macao           |           mo           |
|        Madagascar        |           mg           |
|          Malawi          |           mw           |
|         Malaysia         |           my           |
|         Maldives         |           mv           |
|           Mali           |           ml           |
|          Malta           |           mt           |
|     Marshall Islands     |           mh           |
|        Mauritania        |           mr           |
|        Mauritius         |           mu           |
|         Mayotte          |           yt           |
|          Mexico          |           mx           |
|    Micronesia, Federated States of    |           fm           |
|    Moldova, Republic of    |           md           |
|          Monaco          |           mc           |
|         Mongolia         |           mn           |
|        Montenegro        |           me           |
|        Montserrat        |           ms           |
|         Morocco          |           ma           |
|        Mozambique        |           mz           |
|         Myanmar          |           mm           |
|         Namibia          |           na           |
|          Nauru           |           nr           |
|          Nepal           |           np           |
|       Netherlands        |           nl           |
|      New Caledonia       |           nc           |
|       New Zealand        |           nz           |
|        Nicaragua         |           ni           |
|          Niger           |           ne           |
|         Nigeria          |           ng           |
|           Niue           |           nu           |
|      Norfolk Island      |           nf           |
|     North Macedonia      |           mk           |
|          Norway          |           no           |
|           Oman           |           om           |
|         Pakistan         |           pk           |
|          Palau           |           pw           |
|    Palestine, State of    |           ps           |
|          Panama          |           pa           |
|     Papua New Guinea     |           pg           |
|         Paraguay         |           py           |
|           Peru           |           pe           |
|       Philippines        |           ph           |
|          Poland          |           pl           |
|         Portugal         |           pt           |
|       Puerto Rico        |           pr           |
|          Qatar           |           qa           |
|         Romania          |           ro           |
|    Russian Federation    |           ru           |
|          Rwanda          |           rw           |
|         Réunion          |           re           |
|     Saint Barthélemy     |           bl           |
|    Saint Kitts and Nevis    |           kn           |
|       Saint Lucia        |           lc           |
|    Saint Martin (French part)    |           mf           |
|    Saint Pierre and Miquelon    |           pm           |
|    Saint Vincent and the Grenadines    |           vc           |
|          Samoa           |           ws           |
|        San Marino        |           sm           |
|    Sao Tome and Principe    |           st           |
|       Saudi Arabia       |           sa           |
|         Senegal          |           sn           |
|          Serbia          |           rs           |
|        Seychelles        |           sc           |
|       Sierra Leone       |           sl           |
|        Singapore         |           sg           |
|    Sint Maarten (Dutch part)    |           sx           |
|         Slovakia         |           sk           |
|         Slovenia         |           si           |
|     Solomon Islands      |           sb           |
|         Somalia          |           so           |
|       South Africa       |           za           |
|    South Georgia and the South Sandwich Islands    |           gs           |
|       South Sudan        |           ss           |
|          Spain           |           es           |
|        Sri Lanka         |           lk           |
|          Sudan           |           sd           |
|         Suriname         |           sr           |
|          Sweden          |           se           |
|       Switzerland        |           ch           |
|    Syrian Arab Republic    |           sy           |
|    Taiwan, Province of China    |           tw           |
|        Tajikistan        |           tj           |
|    Tanzania, United Republic of    |           tz           |
|         Thailand         |           th           |
|       Timor-Leste        |           tl           |
|           Togo           |           tg           |
|         Tokelau          |           tk           |
|          Tonga           |           to           |
|    Trinidad and Tobago    |           tt           |
|         Tunisia          |           tn           |
|       Turkmenistan       |           tm           |
|    Turks and Caicos Islands    |           tc           |
|          Tuvalu          |           tv           |
|         Türkiye          |           tr           |
|          Uganda          |           ug           |
|         Ukraine          |           ua           |
|    United Arab Emirates    |           ae           |
|      United Kingdom      |           gb           |
|      United States       |           us           |
|    United States Minor Outlying Islands    |           um           |
|         Uruguay          |           uy           |
|        Uzbekistan        |           uz           |
|         Vanuatu          |           vu           |
|    Venezuela, Bolivarian Republic of    |           ve           |
|         Viet Nam         |           vn           |
|    Virgin Islands, British    |           vg           |
|    Virgin Islands, U.S.    |           vi           |
|    Wallis and Futuna     |           wf           |
|      Western Sahara      |           eh           |
|          Yemen           |           ye           |
|          Zambia          |           zm           |
|         Zimbabwe         |           zw           |
|      Åland Islands       |           ax           |

#### Language List With Code
The language flags are selected based on the country with the highest number of speakers of that language. For example, while Bangla is spoken in both Bangladesh and India, the flag of Bangladesh is used for Bangla because it has more speakers there.

[If you can't see the table, visit GitHub repo]


|    Language Name    |    Language Code    |    Country Name    |    Country Code    |
|---------------------|---------------------|--------------------|--------------------|
|        Afrikaans        |            af           |      South Africa      |           za           |
|         Amharic         |            am           |        Ethiopia        |           et           |
|          Arabic         |            ar           |      Saudi Arabia      |           sa           |
|       Azerbaijani       |            az           |       Azerbaijan       |           az           |
|        Belarusian       |            be           |        Belarus         |           by           |
|        Bulgarian        |            bg           |        Bulgaria        |           bg           |
|         Bengali         |            bn           |       Bangladesh       |           bd           |
|         Bosnian         |            bs           |    Bosnia and Herzegovina    |           ba           |
|         Catalan         |            ca           |         Spain          |           es           |
|          Czech          |            cs           |        Czechia         |           cz           |
|          Welsh          |            cy           |     United Kingdom     |           gb           |
|          Danish         |            da           |        Denmark         |           dk           |
|          German         |            de           |        Germany         |           de           |
|    Modern Greek (1453-)    |            el           |         Greece         |           gr           |
|         English         |            en           |     United States      |           us           |
|         Spanish         |            es           |         Spain          |           es           |
|         Estonian        |            et           |        Estonia         |           ee           |
|         Persian         |            fa           |    Iran, Islamic Republic of    |           ir           |
|         Finnish         |            fi           |        Finland         |           fi           |
|         Filipino        |           fil           |      Philippines       |           ph           |
|          French         |            fr           |         France         |           fr           |
|         Galician        |            gl           |         Spain          |           es           |
|         Gujarati        |            gu           |         India          |           in           |
|          Hindi          |            hi           |         India          |           in           |
|         Croatian        |            hr           |        Croatia         |           hr           |
|        Hungarian        |            hu           |        Hungary         |           hu           |
|         Armenian        |            hy           |        Armenia         |           am           |
|        Indonesian       |            id           |       Indonesia        |           id           |
|           Igbo          |            ig           |        Nigeria         |           ng           |
|        Icelandic        |            is           |        Iceland         |           is           |
|         Italian         |            it           |         Italy          |           it           |
|         Japanese        |            ja           |         Japan          |           jp           |
|         Georgian        |            ka           |        Georgia         |           ge           |
|          Kazakh         |            kk           |       Kazakhstan       |           kz           |
|          Khmer          |            km           |        Cambodia        |           kh           |
|         Kannada         |            kn           |         India          |           in           |
|          Korean         |            ko           |    Korea, Republic of    |           kr           |
|         Kurdish         |            ku           |        Türkiye         |           tr           |
|         Kirghiz         |            ky           |       Kyrgyzstan       |           kg           |
|           Lao           |            lo           |    Lao People's Democratic Republic    |           la           |
|        Lithuanian       |            lt           |       Lithuania        |           lt           |
|         Latvian         |            lv           |         Latvia         |           lv           |
|         Malagasy        |            mg           |       Madagascar       |           mg           |
|          Maori          |            mi           |      New Zealand       |           nz           |
|        Macedonian       |            mk           |    North Macedonia     |           mk           |
|        Malayalam        |            ml           |         India          |           in           |
|        Mongolian        |            mn           |        Mongolia        |           mn           |
|         Marathi         |            mr           |         India          |           in           |
|    Malay (macrolanguage)    |            ms           |        Malaysia        |           my           |
|         Maltese         |            mt           |         Malta          |           mt           |
|         Burmese         |            my           |        Myanmar         |           mm           |
|    Nepali (macrolanguage)    |            ne           |         Nepal          |           np           |
|          Dutch          |            nl           |      Netherlands       |           nl           |
|        Norwegian        |            no           |         Norway         |           no           |
|    Oriya (macrolanguage)    |            or           |         India          |           in           |
|         Panjabi         |            pa           |         India          |           in           |
|          Polish         |            pl           |         Poland         |           pl           |
|          Pushto         |            ps           |      Afghanistan       |           af           |
|        Portuguese       |            pt           |        Portugal        |           pt           |
|         Romanian        |            ro           |        Romania         |           ro           |
|         Russian         |            ru           |    Russian Federation    |           ru           |
|          Sindhi         |            sd           |        Pakistan        |           pk           |
|         Sinhala         |            si           |       Sri Lanka        |           lk           |
|          Slovak         |            sk           |        Slovakia        |           sk           |
|        Slovenian        |            sl           |        Slovenia        |           si           |
|          Somali         |            so           |        Somalia         |           so           |
|         Albanian        |            sq           |        Albania         |           al           |
|         Serbian         |            sr           |         Serbia         |           rs           |
|         Swedish         |            sv           |         Sweden         |           se           |
|    Swahili (macrolanguage)    |            sw           |         Kenya          |           ke           |
|          Tamil          |            ta           |         India          |           in           |
|          Telugu         |            te           |         India          |           in           |
|           Thai          |            th           |        Thailand        |           th           |
|         Tigrinya        |            ti           |        Eritrea         |           er           |
|         Turkmen         |            tk           |      Turkmenistan      |           tm           |
|         Turkish         |            tr           |        Türkiye         |           tr           |
|        Ukrainian        |            uk           |        Ukraine         |           ua           |
|           Urdu          |            ur           |        Pakistan        |           pk           |
|          Uzbek          |            uz           |       Uzbekistan       |           uz           |
|        Vietnamese       |            vi           |        Viet Nam        |           vn           |
|          Xhosa          |            xh           |      South Africa      |           za           |
|         Yiddish         |            yi           |     United States      |           us           |
|          Yoruba         |            yo           |        Nigeria         |           ng           |
|         Chinese         |            zh           |         China          |           cn           |
|           Zulu          |            zu           |      South Africa      |           za           |
|        Abkhazian        |            ab           |        Georgia         |           ge           |
|           Afar          |            aa           |        Ethiopia        |           et           |
|           Akan          |            ak           |         Ghana          |           gh           |
|        Aragonese        |            an           |         Spain          |           es           |
|         Assamese        |            as           |         India          |           in           |
|          Avaric         |            av           |    Russian Federation    |           ru           |
|         Avestan         |            ae           |    Iran, Islamic Republic of    |           ir           |
|          Aymara         |            ay           |    Bolivia, Plurinational State of    |           bo           |
|         Bambara         |            bm           |          Mali          |           ml           |
|         Bashkir         |            ba           |    Russian Federation    |           ru           |
|          Bihari         |            bh           |         India          |           in           |
|         Bislama         |            bi           |        Vanuatu         |           vu           |
|          Breton         |            br           |         France         |           fr           |
|         Chamorro        |            ch           |          Guam          |           gu           |
|         Chechen         |            ce           |    Russian Federation    |           ru           |
|          Nyanja         |            ny           |         Malawi         |           mw           |
|    Simplified Chinese    |           hans          |         China          |           cn           |
|    Traditional Chinese    |           hant          |    Taiwan, Province of China    |           tw           |
|         Chuvash         |            cv           |    Russian Federation    |           ru           |
|         Cornish         |            kw           |     United Kingdom     |           gb           |
|         Corsican        |            co           |         France         |           fr           |
|           Cree          |            cr           |         Canada         |           ca           |
|         Dhivehi         |            dv           |        Maldives        |           mv           |
|         Dzongkha        |            dz           |         Bhutan         |           bt           |
|           Ewe           |            ee           |          Togo          |           tg           |
|         Faroese         |            fo           |     Faroe Islands      |           fo           |
|          Fijian         |            fj           |          Fiji          |           fj           |
|          Fulah          |            ff           |        Nigeria         |           ng           |
|     Scottish Gaelic     |            gd           |     United Kingdom     |           gb           |
|           Manx          |            gv           |      Isle of Man       |           im           |
|       Kalaallisut       |            kl           |       Greenland        |           gl           |
|         Guarani         |            gn           |        Paraguay        |           py           |
|         Haitian         |            ht           |         Haiti          |           ht           |
|          Hausa          |            ha           |        Nigeria         |           ng           |
|          Herero         |            hz           |        Namibia         |           na           |
|        Hiri Motu        |            ho           |    Papua New Guinea    |           pg           |
|           Ido           |            io           |    British Indian Ocean Territory    |           io           |
|       Interlingue       |            ie           |        Ireland         |           ie           |
|        Inuktitut        |            iu           |         Canada         |           ca           |
|         Inupiaq         |            ik           |     United States      |           us           |
|          Irish          |            ga           |        Ireland         |           ie           |
|         Javanese        |            jv           |       Indonesia        |           id           |
|          Kanuri         |            kr           |        Nigeria         |           ng           |
|         Kashmiri        |            ks           |         India          |           in           |
|          Kikuyu         |            ki           |         Kenya          |           ke           |
|       Kinyarwanda       |            rw           |         Rwanda         |           rw           |
|          Rundi          |            rn           |        Burundi         |           bi           |
|           Komi          |            kv           |    Russian Federation    |           ru           |
|          Kongo          |            kg           |    Congo, The Democratic Republic of the    |           cd           |
|         Kuanyama        |            kj           |         Angola         |           ao           |
|          Latin          |            la           |    Holy See (Vatican City State)    |           va           |
|        Limburgan        |            li           |      Netherlands       |           nl           |
|         Lingala         |            ln           |    Congo, The Democratic Republic of the    |           cd           |
|       Luba-Katanga      |            lu           |    Congo, The Democratic Republic of the    |           cd           |
|          Ganda          |            lg           |         Uganda         |           ug           |
|      Luxembourgish      |            lb           |       Luxembourg       |           lu           |
|       Marshallese       |            mh           |    Marshall Islands    |           mh           |
|         Moldovan        |            mo           |    Moldova, Republic of    |           md           |
|          Nauru          |            na           |         Nauru          |           nr           |
|          Navajo         |            nv           |     United States      |           us           |
|          Ndonga         |            ng           |         Angola         |           ao           |
|      North Ndebele      |            nd           |        Zimbabwe        |           zw           |
|     Norwegian Bokmål    |            nb           |         Norway         |           no           |
|    Norwegian Nynorsk    |            nn           |         Norway         |           no           |
|        Sichuan Yi       |            ii           |         China          |           cn           |
|    Occitan (post 1500)    |            oc           |         France         |           fr           |
|          Ojibwa         |            oj           |         Canada         |           ca           |
|      Church Slavic      |            cu           |        Bulgaria        |           bg           |
|          Oromo          |            om           |        Ethiopia        |           et           |
|         Ossetian        |            os           |    Russian Federation    |           ru           |
|           Pali          |            pi           |         India          |           in           |
|         Quechua         |            qu           |          Peru          |           pe           |
|         Romansh         |            rm           |      Switzerland       |           ch           |
|      Northern Sami      |            se           |         Norway         |           no           |
|          Samoan         |            sm           |     American Samoa     |           as           |
|          Sango          |            sg           |    Central African Republic    |           cf           |
|         Sanskrit        |            sa           |         India          |           in           |
|      Serbo-Croatian     |            sh           |         Serbia         |           rs           |
|      Southern Sotho     |            st           |      South Africa      |           za           |
|          Tswana         |            tn           |      South Africa      |           za           |
|          Shona          |            sn           |        Zimbabwe        |           zw           |
|          Swati          |            ss           |        Eswatini        |           sz           |
|      South Ndebele      |            nr           |      South Africa      |           za           |
|        Sundanese        |            su           |       Indonesia        |           id           |
|         Tagalog         |            tl           |      Philippines       |           ph           |
|         Tahitian        |            ty           |    French Polynesia    |           pf           |
|          Tajik          |            tg           |       Tajikistan       |           tj           |
|          Tatar          |            tt           |    Russian Federation    |           ru           |
|    Tonga (Tonga Islands)    |            to           |         Tonga          |           to           |
|          Tsonga         |            ts           |      South Africa      |           za           |
|           Twi           |            tw           |         Ghana          |           gh           |
|          Uighur         |            ug           |         China          |           cn           |
|          Venda          |            ve           |      South Africa      |           za           |
|         Walloon         |            wa           |        Belgium         |           be           |
|          Wolof          |            wo           |        Senegal         |           sn           |
|     Western Frisian     |            fy           |      Netherlands       |           nl           |
|          Zhuang         |            za           |         China          |           cn           |

## License
This package is licensed under the MIT License. See the LICENSE file for more details.

## Author
Kamruzzaman Polash (GitHub: @pola5h)

## Acknowledgements
This package uses the Twitter Emoji Twemoji Set for flag icons.
