
@extends('layouts.app')


@section('content')


    <div class="container width-fix col-sm-12">
        <div class="jumbotron welcome-texture">
            <div class="row">

                <div class="row">

                    <div class="col-md-6">
                        {{ Form::open(array('action' => 'userController@updateInfo', 'id' => 'account-form'))}}
                        <div class="col-md-12">
                            <h3>Account Info <span class="{{@$account_form_color}}">{{@$account_form_result}}</span></h3>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">* Username:</label>
                                <input id="name" type="text" name="name" class="form-control" value="{{Auth::user()->name}}" required="required">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">* Email:</label>
                                <input id="email" type="email" name="email" class="form-control" value="{{Auth::user()->email}}" required="required">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">First Name:</label>
                                <input id="first_name" type="text" name="first_name" class="form-control" value="{{Auth::user()->first_name}}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Last Name:</label>
                                <input id="last_name" type="text" name="last_name" class="form-control" value="{{Auth::user()->last_name}}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Address Line 1:</label>
                                <input id="address1" type="text" name="address1" class="form-control" value="{{Auth::user()->address1}}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Address Line 2:</label>
                                <input id="address2" type="text" name="address2" class="form-control" value="{{Auth::user()->address2}}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Zip Code:</label>
                                <input id="zip" type="text" name="zip" class="form-control" value="{{Auth::user()->zip}}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">City:</label>
                                <input id="city" type="text" name="city" class="form-control" value="{{Auth::user()->city}}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Country:</label>
                                {{Form::select('country', array('' => '', 'AF' => 'Afghanistan','AX' => 'Åland Islands','AL' => 'Albania','DZ' => 'Algeria','AS' => 'American Samoa','AD' => 'Andorra','AO' => 'Angola','AI' => 'Anguilla','AQ' => 'Antarctica','AG' => 'Antigua and Barbuda','AR' => 'Argentina','AM' => 'Armenia','AW' => 'Aruba','AU' => 'Australia','AT' => 'Austria','AZ' => 'Azerbaijan','BS' => 'Bahamas','BH' => 'Bahrain','BD' => 'Bangladesh','BB' => 'Barbados','BY' => 'Belarus','BE' => 'Belgium','BZ' => 'Belize','BJ' => 'Benin','BM' => 'Bermuda','BT' => 'Bhutan','BO' => 'Bolivia, Plurinational State of','BQ' => 'Bonaire, Sint Eustatius and Saba','BA' => 'Bosnia and Herzegovina','BW' => 'Botswana','BV' => 'Bouvet Island','BR' => 'Brazil','IO' => 'British Indian Ocean Territory','BN' => 'Brunei Darussalam','BG' => 'Bulgaria','BF' => 'Burkina Faso','BI' => 'Burundi','KH' => 'Cambodia','CM' => 'Cameroon','CA' => 'Canada','CV' => 'Cape Verde','KY' => 'Cayman Islands','CF' => 'Central African Republic','TD' => 'Chad','CL' => 'Chile','CN' => 'China','CX' => 'Christmas Island','CC' => 'Cocos (Keeling) Islands','CO' => 'Colombia','KM' => 'Comoros','CG' => 'Congo','CD' => 'Congo, the Democratic Republic of the','CK' => 'Cook Islands','CR' => 'Costa Rica','CI' => 'Côte d\'Ivoire','HR' => 'Croatia','CU' => 'Cuba','CW' => 'Curaçao','CY' => 'Cyprus','CZ' => 'Czech Republic','DK' => 'Denmark','DJ' => 'Djibouti','DM' => 'Dominica','DO' => 'Dominican Republic','EC' => 'Ecuador','EG' => 'Egypt','SV' => 'El Salvador','GQ' => 'Equatorial Guinea','ER' => 'Eritrea','EE' => 'Estonia','ET' => 'Ethiopia','FK' => 'Falkland Islands (Malvinas)','FO' => 'Faroe Islands','FJ' => 'Fiji','FI' => 'Finland','FR' => 'France','GF' => 'French Guiana','PF' => 'French Polynesia','TF' => 'French Southern Territories','GA' => 'Gabon','GM' => 'Gambia','GE' => 'Georgia','DE' => 'Germany','GH' => 'Ghana','GI' => 'Gibraltar','GR' => 'Greece','GL' => 'Greenland','GD' => 'Grenada','GP' => 'Guadeloupe','GU' => 'Guam','GT' => 'Guatemala','GG' => 'Guernsey','GN' => 'Guinea','GW' => 'Guinea-Bissau','GY' => 'Guyana','HT' => 'Haiti','HM' => 'Heard Island and McDonald Islands','VA' => 'Holy See (Vatican City State)','HN' => 'Honduras','HK' => 'Hong Kong','HU' => 'Hungary','IS' => 'Iceland','IN' => 'India','ID' => 'Indonesia','IR' => 'Iran, Islamic Republic of','IQ' => 'Iraq','IE' => 'Ireland','IM' => 'Isle of Man','IL' => 'Israel','IT' => 'Italy','JM' => 'Jamaica','JP' => 'Japan','JE' => 'Jersey','JO' => 'Jordan','KZ' => 'Kazakhstan','KE' => 'Kenya','KI' => 'Kiribati','KP' => 'Korea, Democratic People\'s Republic of','KR' => 'Korea, Republic of','KW' => 'Kuwait','KG' => 'Kyrgyzstan','LA' => 'Lao People\'s Democratic Republic','LV' => 'Latvia','LB' => 'Lebanon','LS' => 'Lesotho','LR' => 'Liberia','LY' => 'Libya','LI' => 'Liechtenstein','LT' => 'Lithuania','LU' => 'Luxembourg','MO' => 'Macao','MK' => 'Macedonia, the former Yugoslav Republic of','MG' => 'Madagascar','MW' => 'Malawi','MY' => 'Malaysia','MV' => 'Maldives','ML' => 'Mali','MT' => 'Malta','MH' => 'Marshall Islands','MQ' => 'Martinique','MR' => 'Mauritania','MU' => 'Mauritius','YT' => 'Mayotte','MX' => 'Mexico','FM' => 'Micronesia, Federated States of','MD' => 'Moldova, Republic of','MC' => 'Monaco','MN' => 'Mongolia','ME' => 'Montenegro','MS' => 'Montserrat','MA' => 'Morocco','MZ' => 'Mozambique','MM' => 'Myanmar','NA' => 'Namibia','NR' => 'Nauru','NP' => 'Nepal','NL' => 'Netherlands','NC' => 'New Caledonia','NZ' => 'New Zealand','NI' => 'Nicaragua','NE' => 'Niger','NG' => 'Nigeria','NU' => 'Niue','NF' => 'Norfolk Island','MP' => 'Northern Mariana Islands','NO' => 'Norway','OM' => 'Oman','PK' => 'Pakistan','PW' => 'Palau','PS' => 'Palestinian Territory, Occupied','PA' => 'Panama','PG' => 'Papua New Guinea','PY' => 'Paraguay','PE' => 'Peru','PH' => 'Philippines','PN' => 'Pitcairn','PL' => 'Poland','PT' => 'Portugal','PR' => 'Puerto Rico','QA' => 'Qatar','RE' => 'Réunion','RO' => 'Romania','RU' => 'Russian Federation','RW' => 'Rwanda','BL' => 'Saint Barthélemy','SH' => 'Saint Helena, Ascension and Tristan da Cunha','KN' => 'Saint Kitts and Nevis','LC' => 'Saint Lucia','MF' => 'Saint Martin (French part)','PM' => 'Saint Pierre and Miquelon','VC' => 'Saint Vincent and the Grenadines','WS' => 'Samoa','SM' => 'San Marino','ST' => 'Sao Tome and Principe','SA' => 'Saudi Arabia','SN' => 'Senegal','RS' => 'Serbia','SC' => 'Seychelles','SL' => 'Sierra Leone','SG' => 'Singapore','SX' => 'Sint Maarten (Dutch part)','SK' => 'Slovakia','SI' => 'Slovenia','SB' => 'Solomon Islands','SO' => 'Somalia','ZA' => 'South Africa','GS' => 'South Georgia and the South Sandwich Islands','SS' => 'South Sudan','ES' => 'Spain','LK' => 'Sri Lanka','SD' => 'Sudan','SR' => 'Suriname','SJ' => 'Svalbard and Jan Mayen','SZ' => 'Swaziland','SE' => 'Sweden','CH' => 'Switzerland','SY' => 'Syrian Arab Republic','TW' => 'Taiwan, Province of China','TJ' => 'Tajikistan','TZ' => 'Tanzania, United Republic of','TH' => 'Thailand','TL' => 'Timor-Leste','TG' => 'Togo','TK' => 'Tokelau','TO' => 'Tonga','TT' => 'Trinidad and Tobago','TN' => 'Tunisia','TR' => 'Turkey','TM' => 'Turkmenistan','TC' => 'Turks and Caicos Islands','TV' => 'Tuvalu','UG' => 'Uganda','UA' => 'Ukraine','AE' => 'United Arab Emirates','GB' => 'United Kingdom','US' => 'United States','UM' => 'United States Minor Outlying Islands','UY' => 'Uruguay','UZ' => 'Uzbekistan','VU' => 'Vanuatu','VE' => 'Venezuela, Bolivarian Republic of','VN' => 'Viet Nam','VG' => 'Virgin Islands, British','VI' => 'Virgin Islands, U.S.','WF' => 'Wallis and Futuna','EH' => 'Western Sahara','YE' => 'Yemen','ZM' => 'Zambia','ZW' => 'Zimbabwe'), auth::user()->country,array('class' => 'form-control'))}}
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>


                        <div class="col-md-12 text-center">
                            <input type="submit" class="btn btn-primary btn-send" value="Update">
                        </div>
                        <div class="col-md-12">
                            <div id="accountmessages"></div>
                        </div>

                        {{ Form::close() }}


                    </div>

                    <div class="col-md-6">
                        {{ Form::open(array('action' => 'userController@updateInfo', 'id' => 'password-form'))}}
                        <div class="col-md-12">

                            <h3>Change Password  <span class="{{@$password_form_color}}">{{@$password_form_result}}</span></h3>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="current_password">Current Password:</label>
                                <input id="current_password" type="password" name="current_password" class="form-control" placeholder="Your Current Password" required="required">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="new_password">New Password:</label>
                                <input id="new_password" type="password" name="new_password" class="form-control" placeholder="Your New Password" required="required">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="repeat_password">Confirm Password:</label>
                                <input id="repeat_password" type="password" name="repeat_password" class="form-control" placeholder="Type Your New Password again" required="required">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>


                        <div class="col-md-12 text-center">
                            <input type="submit" class="btn btn-primary btn-send" value="Change">
                        </div>
                        <div class="col-md-12">
                            <div id="passwordmessages"></div>
                        </div>
                        {{ Form::close() }}
                    </div>



                    <div class="col-xs-12" style="height:30px;"></div>

                </div>



            </div>

        </div>

    </div>



@stop



@section('bottom')

    <script src="../js/account.validator.js"></script>


    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"> </script>

@stop
