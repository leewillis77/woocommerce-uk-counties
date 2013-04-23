<?php

/*
Plugin Name: WooCommerce UK Counties
Plugin URI: http://plugins.leewillis.co.uk/donate/
Description: A short plugin that adds UK postal counties to WooCommerce's list of states.
Version: 1.0
Author: Lee Willis
Author URI: http://plugins.leewillis.co.uk/
*/

/**
 * Copyright (c) 2012 Lee Willis. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */


function  wc_uk_counties_add_counties( $states ) {

    $states['GB'] = array(
                            'AV' => 'Avon',
                            'BE' => 'Bedfordshire',
                            'BK' => 'Berkshire',
                            'BU' => 'Buckinghamshire',
                            'CA' => 'Cambridgeshire',
                            'CH' => 'Cheshire',
                            'CL' => 'Cleveland',
                            'CO' => 'Cornwall',
                            'CD' => 'County Durham',
                            'CU' => 'Cumbria',
                            'DE' => 'Derbyshire',
                            'DV' => 'Devon',
                            'DO' => 'Dorset',
                            'ES' => 'East Sussex',
                            'EX' => 'Essex',
                            'GL' => 'Gloucestershire',
                            'HA' => 'Hampshire',
                            'HE' => 'Herefordshire',
                            'HT' => 'Hertfordshire',
                            'IW' => 'Isle of Wight',
                            'KE' => 'Kent',
                            'LA' => 'Lancashire',
                            'LE' => 'Leicestershire',
                            'LI' => 'Lincolnshire',
                            'LO' => 'London',
                            'ME' => 'Merseyside',
                            'MI' => 'Middlesex',
                            'NO' => 'Norfolk',
                            'NH' => 'North Humberside',
                            'NY' => 'North Yorkshire',
                            'NS' => 'Northamptonshire',
                            'NL' => 'Northumberland',
                            'NT' => 'Nottinghamshire',
                            'OX' => 'Oxfordshire',
                            'SH' => 'Shropshire',
                            'SO' => 'Somerset',
                            'SM' => 'South Humberside',
                            'SY' => 'South Yorkshire',
                            'SF' => 'Staffordshire',
                            'SU' => 'Suffolk',
                            'SR' => 'Surrey',
                            'TW' => 'Tyne and Wear',
                            'WA' => 'Warwickshire',
                            'WM' => 'West Midlands',
                            'WS' => 'West Sussex',
                            'WY' => 'West Yorkshire',
                            'WI' => 'Wiltshire',
                            'WO' => 'Worcestershire',
                            'ABD' => 'Scotland / Aberdeenshire',
                            'ANS' => 'Scotland / Angus',
                            'ARL' => 'Scotland / Argyle & Bute',
                            'AYR' => 'Scotland / Ayrshire',
                            'CLK' => 'Scotland / Clackmannanshire',
                            'DGY' => 'Scotland / Dumfries & Galloway',
                            'DNB' => 'Scotland / Dunbartonshire',
    						'DDE' => 'Scotland / Dundee',
							'ELN' => 'Scotland / East Lothian',
							'EDB' => 'Scotland / Edinburgh',
							'FIF' => 'Scotland / Fife',
							'GGW' => 'Scotland / Glasgow',
							'HLD' => 'Scotland / Highland',
							'LKS' => 'Scotland / Lanarkshire',
							'MLN' => 'Scotland / Midlothian',
							'MOR' => 'Scotland / Moray',
							'OKI' => 'Scotland / Orkney',
							'PER' => 'Scotland / Perth and Kinross',
							'RFW' => 'Scotland / Renfrewshire',
							'SB' => 'Scotland / Scottish Borders',
							'SHI' => 'Scotland / Shetland Isles',
							'STI' => 'Scotland / Stirling',
							'WLN' => 'Scotland / West Lothian',
							'WI' => 'Scotland / Western Isles',
							'AGY' => 'Wales / Anglesey',
							'GNT' => 'Wales / Blaenau Gwent',
							'CP' => 'Wales / Caerphilly',
							'CF' => 'Wales / Cardiff',
							'CAE' => 'Wales / Carmarthenshire',
							'CR' => 'Wales / Ceredigion',
							'CW' => 'Wales / Conwy',
							'DEN' => 'Wales / Denbighshire',
							'FLN' => 'Wales / Flintshire',
							'GLA' => 'Wales / Glamorgan',
							'GWN' => 'Wales / Gwynedd',
							'HAM' => 'Wales / Hampshire',
							'MT' => 'Wales / Merthyr Tydfil',
							'MON' => 'Wales / Monmouthshire',
							'PT' => 'Wales / Neath Port Talbot',
							'NP' => 'Wales / Newport',
							'PEM' => 'Wales / Pembrokeshire',
							'POW' => 'Wales / Powys',
							'RT' => 'Wales / Rhondda Cynon Taff',
							'SS' => 'Wales / Swansea',
							'TF' => 'Wales / Torfaen',
							'WX' => 'Wales / Wrexham',
							'ANT' => 'Northen Ireland / County Antrim',
                            'ARM' => 'Northen Ireland / County Armagh',
                            'DOW' => 'Northen Ireland / County Down',
                            'FER' => 'Northen Ireland / County Fermanagh',
                            'LDY' => 'Northen Ireland / County Londonderry',
                            'TYR' => 'Northen Ireland / County Tyron',
                           );
    return $states;

}

add_filter( 'woocommerce_states', 'wc_uk_counties_add_counties' );
