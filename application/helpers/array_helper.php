<?php
    /*
    @Description : get endicia supported country name wise
    @Author      : Shantanu
    @Output      : return country name
    @Date        : 25-09-2018
    */
    function get_endicia_supported_country($country_name)
    {  
        $response = '';

        $country_list = array(
                            'Russian Federation' => 'Russia'
                        );

        if($country_name != '')
        { 
            if(isset($country_list[$country_name]))
            {
                $response = $country_list[$country_name];
            } 
            else
            {
                $response = $country_name;
            }    
        }
        
        return $response;        
    }

    function get_fedex_package_type()
    {
        $fedex_package_type = array(
            'FEDEX_ENVELOPE'        => 'FEDEX ENVELOPE',
            'FEDEX_MEDIUM_BOX'      => 'FEDEX MEDIUM BOX',
            'FEDEX_PAK'             => 'FEDEX PAK',
            'FEDEX_SMALL_BOX'       => 'FEDEX SMALL BOX',
        );

        return $fedex_package_type;
    }

    /*
    @Description : get osm blacklist zipcodes prefix
    @Author      : Shantanu
    @Output      : return array
    @Date        : 07-09-2018
    */
    function get_osm_blacklist_zipcodes()
    {  
        $zipcodes = array('006','007','008','009','055','090','091','092','093','094','095','096','097','098','099','771','962','963','964','965','966','967','968','969','974','975','976','988','989','995','996','997','998','999');
        
        return $zipcodes;
    }

    /*
    @Description : get warehouse location type
    @Author      : Drishtant Leuva
    @Output      : return array
    @Date        : 6-6-2019
    */
    function get_warehouse_location_type()
    {   
        $warehouse_location_type = array(
            'Tray'   => 'Tray',
            'Box'    => 'Box',
            'Bin'    => 'Bin',
            'Pallet' => 'Pallet',
            'Shelf'  => 'Shelf',
            'Rack'   => 'Rack',
        );

        return $warehouse_location_type;
    }

    /*
    @Description : get warehouse location size
    @Author      : Drishtant Leuva
    @Output      : return array
    @Date        : 6-6-2019
    */
    function get_warehouse_location_size()
    {   
        $warehouse_location_type = array(
            '18x18x8'   => '18x18x8',
            '38x18x8'    => '38x18x8',
            '9x18x6'    => '9x18x6',
            '40x48x60' => '40x48x60',
        );

        return $warehouse_location_type;
    }

    /*
    @Description : get pickup shipping carrier
    @Author      : Shantanu
    @Output      : return array
    @Date        : 17-07-2018
    */
    function get_pickup_shipping_carrier()
    {  
        $freight_shipping_carrier = array(
                        'Pickup' => 'Pickup',
                        'FedEx' => 'FedEx',
                        'USPS' => 'USPS'
                );
        return $freight_shipping_carrier;
    }

    /*
    @Description : get pickup shipping method
    @Author      : Shantanu
    @Output      : return array
    @Date        : 17-07-2018
    */
    function get_fedex_pickup_ship_method()
    {  
        $freight_ship_method = array(
                                'Pickup' => array('Pickup' => 'Pickup'),
                                'FedEx' => array('FedEx International Priority' => 'FedEx International Priority'),
                                'USPS' => array('USPS First Class International' => 'USPS First Class International')
            );
        return $freight_ship_method;
    }

    /*
    @Description : get freight shipping carrier
    @Author      : Shantanu
    @Output      : return array
    @Date        : 17-07-2018
    */
    function get_freight_shipping_carrier()
    {  
        $freight_shipping_carrier = array(
            'Central Transport'                 => 'Central Transport',
            'Estes Express Lines'               => 'Estes Express Lines',
            'Old Dominion Freight Line'         => 'Old Dominion Freight Line',
            'FedEx Freight'                     => 'FedEx Freight',
            'UPS Freight'                       => 'UPS Freight',
            'Con-Way Central Express'           => 'Con-Way Central Express',
            'XPO Logistics'                     => 'XPO Logistics',
            'USF Holland'                       => 'USF Holland',
            'New England Motor Freight'         => 'New England Motor Freight',
            'Roadrunner Transportation Systems' => 'Roadrunner Transportation Systems',
            'Central Freight Lines'             => 'Central Freight Lines',
            'Unyson'                            => 'Unyson',
            'Other'                             => 'Other'
            );
        return $freight_shipping_carrier;
    }

    /*
    @Description : get freight_shipping_carrier
    @Author      : Shantanu
    @Output      : return array
    @Date        : 17-07-2018
    */
    function get_freight_ship_method()
    {  
        $freight_ship_method = array(
                                'LTL' => 'LTL'
            );
        return $freight_ship_method;
    }

    /*
    @Description : get amazon_shipping_carrier
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_amazon_shipping_carrier()
    {  
        $amazon_shipping_carrier = array(
            'USPS'                   => 'USPS',
            'UPS'                    => 'UPS',
            'UPSMI'                  => 'UPSMI',
            'FedEx'                  => 'FedEx',
            'DHL'                    => 'DHL',
            'DHL Global Mail'        => 'DHL Global Mail',
            'Fastway'                => 'Fastway',
            'UPS Mail Innovations'   => 'UPS Mail Innovations',
            'Lasership'              => 'Lasership',
            'Royal Mail'             => 'Royal Mail',
            'FedEx SmartPost'        => 'FedEx SmartPost',
            'OSM'                    => 'OSM',
            'OnTrac'                 => 'OnTrac',
            'Streamlite'             => 'Streamlite',
            'Newgistics'             => 'Newgistics',
            'Canada Post'            => 'Canada Post',
            'City Link'              => 'City Link',
            'GLS'                    => 'GLS',
            'GO!'                    => 'GO!',
            'Blue Package'           => 'Blue Package',
            'Hermes Logistik Gruppe' => 'Hermes Logistik Gruppe',
            'Parcelforce'            => 'Parcelforce',
            'TNT'                    => 'TNT',
            'Target'                 => 'Target',
            'SagawaExpress'          => 'SagawaExpress',
            'NipponExpress'          => 'NipponExpress',
            'YamatoTransport'        => 'YamatoTransport',
            'Other'                  => 'Other'
            );
        return $amazon_shipping_carrier;
    }
    /*
    @Description : get get amazon ship method
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_amazon_ship_method()
    {  
        $amazon_ship_method = array(
            'First Class'               => 'First Class',
            'First Class International' => 'First Class International',
            'Priority'                  => 'Priority',
            'PriorityMailInternational' => 'Priority Mail International',
            'MediaMail'                 => 'MediaMail',
            'Two-Day'                   => 'Two-Day',
            'Ground'                    => 'Ground',
            'Fedex Overnight'           => 'Fedex Overnight',
            'SMART_POST'                => 'Smart Post',
            'GROUND_HOME_DELIVERY'      => 'Fedex Home Delivery',
            'IPA'                       => 'International Priority Airmail',
            'DDDP'                      => 'Postal Consolidator',
            'UPS_MAIL_INNOVATIONS'      => 'UPS Mail Innovations',
            'UPS_GROUND'                => 'UPS Ground',
            'Next_Day_Air'              => 'Next Day Air',
            "PARCEL_SELECT"             => "Parcel Select",
            "LIGHTWEIGHT_PARCEL"        => "Lightweight Parcel"
            );
        return $amazon_ship_method;
    }
    /*
    @Description : get get ebay shipping carrier
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_ebay_shipping_carrier()
    { 
        $ebay_shipping_carrier = array(
            'A1CourierServices'           => 'A1CourierServices',
            'ABF'                         => 'ABF',
            'AeroPost'                    => 'AeroPost',
            'ALLIEDEXPRESS'               => 'ALLIEDEXPRESS',
            'AMWST'                       => 'AMWST',
            'AnPost'                      => 'AnPost',
            'APC'                         => 'APC',
            'ARAMEX'                      => 'ARAMEX',
            'ARVATO'                      => 'ARVATO',
            'ASM'                         => 'ASM',
            'AustralianAirExpress'        => 'AustralianAirExpress',
            'AustraliaPost'               => 'AustraliaPost',
            'AVRT'                        => 'AVRT',
            'Bartolini'                   => 'Bartolini',
            'BELGIANPOST'                 => 'BELGIANPOST',
            'BKNS'                        => 'BKNS',
            'BluePackage'                 => 'BluePackage',
            'BPost'                       => 'BPost',
            'BusinessPost'                => 'BusinessPost',
            'CanPar'                      => 'CanPar',
            'CENF'                        => 'CENF',
            'CEVA'                        => 'CEVA',
            'ChinaPost'                   => 'ChinaPost',
            'Chronoexpres'                => 'Chronoexpres',
            'Chronopost'                  => 'Chronopost',
            'CHUKOU1'                     => 'CHUKOU1',
            'ChunghwaPost'                => 'ChunghwaPost',
            'CitiPost'                    => 'CitiPost',
            'CityLink'                    => 'CityLink',
            'ClickandQuick'               => 'ClickandQuick',
            'CNWY'                        => 'CNWY',
            'ColiposteDomestic'           => 'ColiposteDomestic',
            'ColiposteInternational'      => 'ColiposteInternational',
            'Colissimo'                   => 'Colissimo',
            'CollectPlus'                 => 'CollectPlus',
            'Correos'                     => 'Correos',
            'CPC'                         => 'CPC',
            'CustomCode'                  => 'CustomCode',
            'DAIPost'                     => 'DAIPost',
            'DayandRoss'                  => 'DayandRoss',
            'DBSchenker'                  => 'DBSchenker',
            'DeutschePost'                => 'DeutschePost',
            'DHL'                         => 'DHL',
            'DHLEKB'                      => 'DHLEKB',
            'DHLEXPRESS'                  => 'DHLEXPRESS',
            'DHLG'                        => 'DHLG',
            'DHLGlobalMail'               => 'DHLGlobalMail',
            'DieSchweizerischePost'       => 'DieSchweizerischePost',
            'DPD'                         => 'DPD',
            'DPXThailand'                 => 'DPXThailand',
            'Ducros'                      => 'Ducros',
            'EGO'                         => 'EGO',
            'EMF'                         => 'EMF',
            'Exapaq'                      => 'Exapaq',
            'Fastway'                     => 'Fastway',
            'FASTWAYCOURIERS'             => 'FASTWAYCOURIERS',
            'FedEx'                       => 'FedEx',
            'FedExSmartPost'              => 'FedExSmartPost',
            'FLYT'                        => 'FLYT',
            'FLYTExpress'                 => 'FLYTExpress',
            'FlytExpressUSDirectline'     => 'FlytExpressUSDirectline',
            'FourPX'                      => 'FourPX',
            'FourPXCHINA'                 => 'FourPXCHINA',
            'FourPXExpress'               => 'FourPXExpress',
            'FourPXLTD'                   => 'FourPXLTD',
            'FTFT'                        => 'FTFT',
            'FulfilExpressAccStation'     => 'FulfilExpressAccStation',
            'FulfilExpresseForCity'       => 'FulfilExpresseForCity',
            'FulfilExpressEverydaySource' => 'FulfilExpressEverydaySource',
            'FulfilExpressiTrimming'      => 'FulfilExpressiTrimming',
            'GLS'                         => 'GLS',
            'HDUSA'                       => 'HDUSA',
            'Hermes'                      => 'Hermes',
            'HomeDeliveryNetwork'         => 'HomeDeliveryNetwork',
            'HongKongPost'                => 'HongKongPost',
            'HUNTEREXPRESS'               => 'HUNTEREXPRESS',
            'iLoxx'                       => 'iLoxx',
            'IndiaPost'                   => 'IndiaPost',
            'IndonesiaPost'               => 'IndonesiaPost',
            'Interlink'                   => 'Interlink',
            'InterPost'                   => 'InterPost',
            'IoInvio'                     => 'IoInvio',
            'Iparcel'                     => 'Iparcel',
            'IsraelPost'                  => 'IsraelPost',
            'JapanPost'                   => 'JapanPost',
            'KIALA'                       => 'KIALA',
            'KoreaPost'                   => 'KoreaPost',
            'Landmark'                    => 'Landmark',
            'LAPOSTE'                     => 'LAPOSTE',
            'LDSO'                        => 'LDSO',
            'LTL'                         => 'LTL',
            'MALAYSIAPOST'                => 'MALAYSIAPOST',
            'MannaFreight'                => 'MannaFreight',
            'Metapack'                    => 'Metapack',
            'MNGTurkey'                   => 'MNGTurkey',
            'MondialRelay'                => 'MondialRelay',
            'MRW'                         => 'MRW',
            'MSI'                         => 'MSI',
            'Nacex'                       => 'Nacex',
            'NEMF'                        => 'NEMF',
            'ODFL'                        => 'ODFL',
            'OFFD'                        => 'OFFD',
            'ONTRACK'                     => 'ONTRACK',
            'OsterreichischePostAG'       => 'OsterreichischePostAG',
            'OVNT'                        => 'OVNT',
            'Parcelforce'                 => 'Parcelforce',
            'ParcelPool'                  => 'ParcelPool',
            'Philpost'                    => 'Philpost',
            'Pilot'                       => 'Pilot',
            'PITD'                        => 'PITD',
            'PocztaPolska'                => 'PocztaPolska',
            'Pocztex'                     => 'Pocztex',
            'PosteItaliane'               => 'PosteItaliane',
            'POSTITALIANO'                => 'POSTITALIANO',
            'PostNL'                      => 'PostNL',
            'PostNordNorway'              => 'PostNordNorway',
            'Prestige'                    => 'Prestige',
            'Quantium'                    => 'Quantium',
            'RETL'                        => 'RETL',
            'RoyalMail'                   => 'RoyalMail',
            'RRUN'                        => 'RRUN',
            'SAIA'                        => 'SAIA',
            'SDA'                         => 'SDA',
            'Seur'                        => 'Seur',
            'SevenLSP'                    => 'SevenLSP',
            'SFC'                         => 'SFC',
            'SFCExpress'                  => 'SFCExpress',
            'SINGAPOREPOST'               => 'SINGAPOREPOST',
            'Siodemka'                    => 'Siodemka',
            'SioliandFontana'             => 'SioliandFontana',
            'SkynetMalaysia'              => 'SkynetMalaysia',
            'SMARTSEND'                   => 'SMARTSEND',
            'Sogetras'                    => 'Sogetras',
            'Spediamo'                    => 'Spediamo',
            'SpeeDee'                     => 'SpeeDee',
            'StarTrack'                   => 'StarTrack',
            'SuntekExpressLTD'            => 'SuntekExpressLTD',
            'SwissPost'                   => 'SwissPost',
            'TELE'                        => 'TELE',
            'TEMANDO'                     => 'TEMANDO',
            'THAILANDPOST'                => 'THAILANDPOST',
            'TNT'                         => 'TNT',
            'TNTEXPRESS'                  => 'TNTEXPRESS',
            'TNTPost'                     => 'TNTPost',
            'Toll'                        => 'Toll',
            'TPG'                         => 'TPG',
            'TWW'                         => 'TWW',
            'UBI'                         => 'UBI',
            'UKMail'                      => 'UKMail',
            'UPS'                         => 'UPS',
            'UPSC'                        => 'UPSC',
            'UPSMailInnovations'          => 'UPSMailInnovations',
            'USFG'                        => 'USFG',
            'USPS'                        => 'USPS',
            'USPSCeP'                     => 'USPSCeP',
            'USPSPMI'                     => 'USPSPMI',
            'VietnamPost'                 => 'VietnamPost',
            'VITR'                        => 'VITR',
            'WATKINS'                     => 'WATKINS',
            'Winit'                       => 'Winit',
            'Wise'                        => 'Wise',
            'WNdirect'                    => 'WNdirect',
            'WPX'                         => 'WPX',
            'YANWEN'                      => 'YANWEN',
            'Yodel'                       => 'Yodel',
            'YRC'                         => 'YRC',
            'Other'                       => 'Other'
            );
return $ebay_shipping_carrier;
}   

    /*
    @Description : get get rakuten shipping carrier
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_system_rakuten_shipping_carrier( $carrier_key =NULL)
    { 
        $rakuten_shipping_carrier = array(
            'ups'             => '1',
            'fedex'           => '2',
            'usps'            => '3',
            'osm'             => '3',
            'other'           => '5',
            'ups-mi'          => '6',
            'fedex smartpost' => '7'
        );
        
        $carrier_key = strtolower($carrier_key);

        return isset($rakuten_shipping_carrier[$carrier_key]) ? $rakuten_shipping_carrier[$carrier_key] : '5';
    }   

    /*
    @Description : get get rakuten shipping carrier
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_rakuten_shipping_carrier( $reason_key ='')
    { 
        $rakuten_shipping_carrier = array(
            '1' => 'UPS',
            '2' => 'FedEx',
            '3' => 'USPS',
            '4' => 'DHL',
            '5' => 'Other',
            '6' => 'UPS-MI',
            '7' => 'FedEx SmartPost',
            '8' => 'DHL Global Mail',
            '9' => 'LTL_A. Duie Pyle',
            '10'  => 'LTL_ABF',
            '11'  => 'LTL_AIM Trans',
            '12'  => 'LTL_AIT',
            '13'  => 'LTL_CEVA Logistics',
            '14'  => 'LTL_Conway',
            '15'  => 'LTL_Ensenda',
            '16'  => 'LTL_Estes',
            '17'  => 'LTL_FedEx Freight',
            '18'  => 'LTL_FedEx LTL Freight East',
            '19'  => 'LTL_Fox Brother',
            '20'  => 'LTL_Home Direct',
            '21'  => 'LTL_Lakeville Motor',
            '22'  => 'LTL_Manna',
            '23'  => 'LTL_New England Motor Freight',
            '24'  => 'LTL_Old Dominion',
            '25'  => 'LTL_Pilot',
            '26'  => 'LTL_Pitt Ohio',
            '27'  => 'LTL_R&L Global',
            '28'  => 'LTL_S&J Transportation',
            '29'  => 'LTL_SAIA',
            '30'  => 'LTL_UPS Freight',
            '31'  => 'LTL_USF Holland',
            '32'  => 'LTL_USF Reddaway',
            '33'  => 'LTL_Vitran Express',
            '34'  => 'LTL_Watkins Motor Line Freight Standard',
            '35'  => 'LTL_Wilson Trucking',
            '36'  => 'LTL_Yellow Freight',
            '37'  => 'LTL_Team Worldwide',
            '38'  => 'LTL_AM Home Delivery',
            '39'  => 'LTL_Blue Package Delivery LLC',
            '40'  => 'LTL_Hollywood Delivery Service',
            '41'  => 'LTL_Dependable Highway Express',
            /*'42'  => 'LTL_All States World Cargo',
            '43'  => 'LTL_OnTrac',
            '44'  => 'JP Post(EMS) Used for CBSJ (Shipping from JP)'*/
            );
        if($reason_key != '')
        {
         return isset($rakuten_shipping_carrier[$reason_key]) ? $rakuten_shipping_carrier[$reason_key] : '' ;
     }
     else
     {
        return $rakuten_shipping_carrier;
    }
}
function get_jet_shipping_carrier()
{
    return array
    (
        "FedEx"                => "FedEx",
        "FedEx SmartPost"      => "FedEx SmartPost",
        "FedEx Freight"        => "FedEx Freight",
        "UPS"                  => "UPS",
        "UPS Freight"          => "UPS Freight",
        "UPS Mail Innovations" => "UPS Mail Innovations",
        "UPS SurePost"         => "UPS SurePost",
        "OnTrac"               => "OnTrac",
        "OnTrac Direct Post"   => "OnTrac Direct Post",
        "DHL"                  => "DHL",
        "DHL Global Mail"      => "DHL Global Mail",
        "USPS"                 => "USPS",
        "CEVA"                 => "CEVA",
        "Laser Ship"           => "Laser Ship",
        "Spee Dee"             => "Spee Dee",
        "A Duie Pyle"          => "A Duie Pyle",
        "A1"                   => "A1",
        "ABF"                  => "ABF",
        "APEX"                 => "APEX",
        "Averitt"              => "Averitt",
        "Dynamex"              => "Dynamex",
        "Eastern Connection"   => "Eastern Connection",
        "Ensenda"              => "Ensenda",
        "Estes"                => "Estes",
        "Land Air Express"     => "Land Air Express",
        "Lone Star"            => "Lone Star",
        "Meyer"                => "Meyer",
        "New Penn"             => "New Penn",
        "Pilot"                => "Pilot",
        "Prestige"             => "Prestige",
        "RBF"                  => "RBF",
        "Reddaway"             => "Reddaway",
        "RL Carriers"          => "RL Carriers",
        "Roadrunner"           => "Roadrunner",
        "Southeastern Freight" => "Southeastern Freight",
        "UDS"                  => "UDS",
        "UES"                  => "UES",
        "YRC"                  => "YRC",
        "GSO"                  => "GSO",
        "A&M Trucking"         => "A&M Trucking",
        "SAIA Freight"         => "SAIA Freight",
        "Old Dominion"         => "Old Dominion",
        "Parcel"               => "Parcel",
        "Bekins / Home Direct" => "Bekins / Home Direct",
        "Seko Worldwide"       => "Seko Worldwide",
        "Mail Express"         => "Mail Express",
        "Newgistics"           => "Newgistics",
        "Delivered by Walmart" => "Delivered by Walmart",
        "NonstopDelivery"      => "NonstopDelivery",
        "MPX"                  => "MPX",
        "Cagney Global"        => "Cagney Global",
        "Simmons Carrier"      => "Simmons Carrier",
        "Other"                => "Other",
        ); 
}
function get_jet_shipping_method()
{
    return array
    (
        "A1"                              => "A1",
        "ABF"                             => "ABF",
        "ADuiePyle"                       => "ADuiePyle",
        "APEX"                            => "APEX",
        "Averitt"                         => "Averitt",
        "A&MTrucking"                     => "A&MTrucking",
        "CEVA"                            => "CEVA",
        "DHLEasyReturnPlus"               => "DHLEasyReturnPlus",
        "DHLExpress12"                    => "DHLExpress12",
        "DHLExpress9"                     => "DHLExpress9",
        "DHLExpressEnvelope"              => "DHLExpressEnvelope",
        "DHLExpressWorldwide"             => "DHLExpressWorldwide",
        "DHLeCommerce"                    => "DHLeCommerce",
        "DHLSmartmailFlatsGround"         => "DHLSmartmailFlatsGround",
        "DHLSmartmailParcelGround"        => "DHLSmartmailParcelGround",
        "DHLSmartmailParcelPlusGround"    => "DHLSmartmailParcelPlusGround",
        "DynamexSameDay"                  => "DynamexSameDay",
        "EasternConnectionExpeditedMail"  => "EasternConnectionExpeditedMail",
        "EasternConnectionGround"         => "EasternConnectionGround",
        "EasternConnectionPriority"       => "EasternConnectionPriority",
        "EasternConnectionSameDay"        => "EasternConnectionSameDay",
        "EnsendaHome"                     => "EnsendaHome",
        "EnsendaNextDay"                  => "EnsendaNextDay",
        "EnsendaSameDay"                  => "EnsendaSameDay",
        "EnsendaTwoMan"                   => "EnsendaTwoMan",
        "Estes"                           => "Estes",
        "Fedex2Day"                       => "Fedex2Day",
        "FedExExpeditedFreight"           => "FedExExpeditedFreight",
        "FedexExpressSaver"               => "FedexExpressSaver",
        "FedexFirstOvernight"             => "FedexFirstOvernight",
        "FedexFreight"                    => "FedexFreight",
        "FedExGround"                     => "FedExGround",
        "FedExHome"                       => "FedExHome",
        "FedexPriorityOvernight"          => "FedexPriorityOvernight",
        "FedexSameDay"                    => "FedexSameDay",
        "FedExSmartPost"                  => "FedExSmartPost",
        "FedExSmartPostReturns"           => "FedExSmartPostReturns",
        "FedexStandardOvernight"          => "FedexStandardOvernight",
        "GSOGround"                       => "GSOGround",
        "LandAirExpress"                  => "LandAirExpress",
        "LasershipSameDay"                => "LasershipSameDay",
        "LaserShipNextDay"                => "LaserShipNextDay",
        "LaserShipGlobalPriority"         => "LaserShipGlobalPriority",
        "Prestige"                        => "Prestige",
        "LSO2ndDay"                       => "LSO2ndDay",
        "LSOEarlyNexyDay"                 => "LSOEarlyNexyDay",
        "LSOEconomyNextDay"               => "LSOEconomyNextDay",
        "LSOGround"                       => "LSOGround",
        "LSOPriorityNextDay"              => "LSOPriorityNextDay",
        "LSOSaturday"                     => "LSOSaturday",
        "Meyer"                           => "Meyer",
        "NewPenn"                         => "NewPenn",
        "OnTracDirectPost"                => "OnTracDirectPost",
        "OnTracGround"                    => "OnTracGround",
        "OnTracPalletizedFreight"         => "OnTracPalletizedFreight",
        "OnTracSaturdayDelivery"          => "OnTracSaturdayDelivery",
        "OnTracSunrise"                   => "OnTracSunrise",
        "OnTracSunriseGold"               => "OnTracSunriseGold",
        "Other"                           => "Other",
        "Pilot"                           => "Pilot",
        "RBF"                             => "RBF",
        "Reddaway"                        => "Reddaway",
        "RLCarriers"                      => "RLCarriers",
        "RoadRunner"                      => "RoadRunner",
        "SAIAFreight"                     => "SAIAFreight",
        "SoutheasternFreight"             => "SoutheasternFreight",
        "SpeeDee"                         => "SpeeDee",
        "UDSNextDay"                      => "UDSNextDay",
        "UDSSameDay"                      => "UDSSameDay",
        "UES"                             => "UES",
        "UPSSurepost"                     => "UPSSurepost",
        "UPS2ndDayAir"                    => "UPS2ndDayAir",
        "UPS2ndDayAirAM"                  => "UPS2ndDayAirAM",
        "UPS2ndDayAirFreight"             => "UPS2ndDayAirFreight",
        "UPS2ndDayAirFreightNGS"          => "UPS2ndDayAirFreightNGS",
        "UPS3DayFreight"                  => "UPS3DayFreight",
        "UPS3DayFreightNGS"               => "UPS3DayFreightNGS",
        "UPS3DaySelect"                   => "UPS3DaySelect",
        "UPSExpressCritical"              => "UPSExpressCritical",
        "UPSFreight"                      => "UPSFreight",
        "UPSGround"                       => "UPSGround",
        "UPSGroundFreightPricing"         => "UPSGroundFreightPricing",
        "UPSHundredweightService"         => "UPSHundredweightService",
        "UPSMailInnovations"              => "UPSMailInnovations",
        "UPSNextDayAir"                   => "UPSNextDayAir",
        "UPSNextDayAirEarly"              => "UPSNextDayAirEarly",
        "UPSNextDayAirFreight"            => "UPSNextDayAirFreight",
        "UPSNextDayAirFreightNGS"         => "UPSNextDayAirFreightNGS",
        "UPSNextDayAirSaver"              => "UPSNextDayAirSaver",
        "UPSStandard"                     => "UPSStandard",
        "USPSFirstClassMail"              => "USPSFirstClassMail",
        "USPSMediaMail"                   => "USPSMediaMail",
        "USPSPriorityMail"                => "USPSPriorityMail",
        "USPSPriorityMailExpress"         => "USPSPriorityMailExpress",
        "USPSPriorityMailInternational"   => "USPSPriorityMailInternational",
        "USPSRetailGround"                => "USPSRetailGround",
        "YRC"                             => "YRC",
        "DHLEasyReturnLight"              => "DHLEasyReturnLight",
        "DHLEasyReturnGround"             => "DHLEasyReturnGround",
        "DHLSmartmailFlatsExpedited"      => "DHLSmartmailFlatsExpedited",
        "DHLSmartmailParcelExpedited"     => "DHLSmartmailParcelExpedited",
        "DHLSmartmailParcelPlusExpedited" => "DHLSmartmailParcelPlusExpedited",
        "GSOPriority"                     => "GSOPriority",
        "GSOFreight"                      => "GSOFreight",
        "IPA"                             => "International Priority Airmail",
        "DDDP"                            => "Postal Consolidator",
        "PARCEL_SELECT"                   => "Parcel Select",
        "LIGHTWEIGHT_PARCEL"              => "Lightweight Parcel"
        );
}
function get_jet_refund_reason()
{
    return array(
        'Product is defective / does not work'          => 'Product is defective / does not work',
        'Item is missing parts / accessories'           => 'Item is missing parts / accessories',
        'Item is refurbished'                           => 'Item is refurbished',
        'Item is expired'                               => 'Item is expired',
        'Website description is inaccurate'             => 'Website description is inaccurate',
        'Package arrived after estimated delivery date' => 'Package arrived after estimated delivery date',
        'Return to Sender - damaged'                    => 'Return to Sender - damaged',
        'undeliverable'                                 => 'undeliverable',
        'refused'                                       => 'refused',
        'Return to Sender - lost in transit only'       => 'Return to Sender - lost in transit only',
        'Item arrived damaged - box intact'             => 'Item arrived damaged - box intact',
        'Item arrived damaged - box damaged'            => 'Item arrived damaged - box damaged',
        'No longer want this item'                      => 'No longer want this item',
        'Received the wrong item'                       => 'Received the wrong item',
        'Package never arrived'                         => 'Package never arrived',
        'Package arrived late'                          => 'Package arrived late',
        'Wrong quantity received'                       => 'Wrong quantity received',
        'Unwanted gift'                                 => 'Unwanted gift',
        'Accidental order'                              => 'Accidental order',
        'Unauthorized purchase'                         => 'Unauthorized purchase',
        'Better price found elsewhere'                   => 'Better price found elsewhere',
    );
}
    /*
    @Description : get marketplace cancel order reason
    @Author      : Krutin shah
    @Output      : return array
    @Date        : 13-07-2017
    */
    function get_marketplace_cancel_order_reason($key=NULL)
    {
        $marketplace_cancel_order_reason = array(
            'out_of_stock'    => 'Out of Stock',
            'discontinued'    => 'Discontinued',
            'back_ordered'    => 'Back Ordered',
            'buyer_cancelled' => 'Buyer Cancelled',
            'listing_error'   => 'Listing Error'
            );
        if($key != NULL)
        {
            if(isset($marketplace_cancel_order_reason[$key]))
            {
                return $marketplace_cancel_order_reason[$key];
            }
            else
            {
                return '';
            }
        }
        else
        {
            return  $marketplace_cancel_order_reason;
        }
    }
    /*
    @Description : get marketplace refund order reason
    @Author      : Krutin shah
    @Output      : return array
    @Date        : 13-07-2017
    */
    function get_marketplace_refund_reason($key=NULL)
    {
        $marketplace_refund_reason = array(
            'discontinued'          => 'Discontinued',
            'never_received'        => 'Never Received',
            'defective'             => 'Defective',
            'discount'              => 'Discount',
            'customer_return'       => 'Customer Return',
            'shipping_discount'     => 'Shipping Discount',
            'tax_refund'            => 'Tax Refund',
            'incorrect_listing'     => 'Incorrect Listing',
            'item_not_as_described' => 'Item not as Described',
            'missed_delivery_date'  => 'Missed Delivery Date',
            'not_what_expected'     => 'Not what Expected',
            'damaged_in_transit'    => 'Damaged in Transit',
            'oversold_groupon'      => 'Oversold Groupon',
            'oversold'              => 'Oversold',
            'out_of_stock'          => 'Out of stock'
            );
        if($key != NULL)
        {
            if(isset($marketplace_refund_reason[$key]))
            {
                return $marketplace_refund_reason[$key];
            }
            else
            {
                return '';
            }
        }
        else
        {
            return  $marketplace_refund_reason;
        }
    }
    /*
    @Description : get amazon cancel order reason
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_amazon_cancel_order_reason()
    {
        $amazon_cancel_order_reason = array(
            'NoInventory'                  => 'No Inventory',
            'BuyerCanceled'                => 'Buyer Canceled',
            'GeneralAdjustment'            => 'General Adjustment',
            'PricingError'                 => 'Pricing Error',
            'ShippingAddressUndeliverable' => 'Shipping Address Undeliverable',
            'CustomerExchange'             => 'Customer Exchange'
            );
        return $amazon_cancel_order_reason;
    }
    /*
    @Description : get ebay cancel order reason
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_eaby_cancel_order_reason()
    {
        $eaby_cancel_order_reason = array(
            'ADDRESS_ISSUE'                => 'Address Issue',
            'OUT_OF_STOCK_OR_CANNOT_FULFILL'=>'Out Of stock',
            'BUYER_ASKED_CANCEL'           => 'Buyer Asked Cancel',
            'FOUND_CHEAPER_PRICE'          => 'Found Cheaper Price',
            'ORDER_MISTAKE'                => 'Order Mistake',
            'OTHER'                        => 'Other',
            'PRICE_TOO_HIGH'               => 'Price Too High',
            'WONT_ARRIVE_IN_TIME'          => 'Wll Not Arrived In Time'
        );
        
        return $eaby_cancel_order_reason;
    }
    /*
    @Description : get amazon  order refund reason
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_amazon_refund_order_reason()
    {
        $amazon_refund_order_reason =array(
            'NoInventory'       =>'No Inventory',
            'CustomerReturn'    =>'Customer Return',
            'GeneralAdjustment' => 'General Adjustment',
            'CouldNotShip'      =>'Could Not Ship',
            'DifferentItem'     =>'Different Item',
            'Abandoned'         =>'Abandoned',
            'CustomerCancel'    =>'Customer Cancel',
            'PriceError'        =>'Price Error'
            );
        return $amazon_refund_order_reason;
    }
     /*
    @Description : amazon refund order price option
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 28-12-2016
    */
    function get_amazon_refund_order_price_option()
    {
        $amazon_refund_order_price_option =array(
            'item-price-adj'    =>'Item Price',
            'item-tax-adj'      =>'Item Tax',
            'shipping-price-adj'=>'Shipping Price',
            'shipping-tax-adj'  =>'Shipping Tax',
            'gift-wrap-price-adj'=>'Gift Wrap'
            );
        return $amazon_refund_order_price_option;
    }
    /*
    @Description : get rakuten  order refund reason
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_rakuten_refund_order_reason($reason_key ='')
    {
        $rakuten_refund_order_reason = array(
            '1' => 'Unable to ship',
            '2' => 'Cancelled',
            '3' => 'LostItem',
            '4' => 'Wrong item',
            '6' => 'Shipment delay',
            '7' => 'Item damaged',
            '8' => 'Merchant goodwill',
            '9' => 'Item Returned'
            );
        if($reason_key !='')
        {
            return isset($rakuten_refund_order_reason[$reason_key]) ? $rakuten_refund_order_reason[$reason_key] : '';
        }
        else
        {
            return $rakuten_refund_order_reason;
        }
    }
     /*
    @Description : get Walmart Shipping Carrier
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_walmart_shipping_carrier()
    {
        $walmart_shipping_carrier = array(
            'UPS'             =>'UPS',
            'ups'             =>'ups',
            'SurePost'        =>'SurePost',
            'MailInnovations' =>'MailInnovations'
            );
        return $walmart_shipping_carrier;
    }
     /*
    @Description : get Walmart Shipping Carrier
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_walmart_ship_method()
    {
        $walmart_ship_method = array(
            'Standard'  =>'Standard',
            'Expedited' =>'Expedited',
            'OneDay'    =>'OneDay',
            );
        return $walmart_ship_method;
    }
    /*
    @Description : Get walmart cancel order reason
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_walmart_cancel_order_reason()
    {
        $walmart_ship_method = array(
            'CANCEL_BY_SELLER'  =>'Cancel by seller'
            );
        return $walmart_ship_method;
    }

    /*
    @Description : Get google cancel order reason
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 06-03-2020
    */

    function get_google_cancel_order_reason()
    {
        $google_ship_method = array(
            "customerInitiatedCancel"      => "Customer Initiated Cancel",
            "invalidCoupon"                => "Invalid Coupon",
            "malformedShippingAddress"     => "Malformed Shipping Address",
            "noInventory"                  => "No Inventory",
            "other"                        => "Other",
            "priceError"                   => "Price Error",
            "shippingPriceError"           => "Shipping Price Error",
            "taxError"                     => "Tax Error",
            "undeliverableShippingAddress" => "Undeliverable Shipping Address",
            "unsupportedPoBoxAddress"      => "Unsupported Po Box Address"
        );
        
        return $google_ship_method;
    }

    


    /*
    @Description : Get walmart refund order reason
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 27-12-2016
    */
    function get_walmart_refund_order_reason()
    {
        $walmart_ship_method = array(
            'BillingError'=>'BillingError', 
            'CancelledYetShipped'=>'CancelledYetShipped',   
            'CustomerChangedMind'=>'CustomerChangedMind',   
            'CustomerReceivedItemLate'=>'CustomerReceivedItemLate', 
            'DamagedItem'=>'DamagedItem',   
            'DefectiveItem'=>'DefectiveItem',   
            'IncorrectItemReceived'=>'IncorrectItemReceived',   
            'IncorrectShippingPrice'=>'IncorrectShippingPrice', 
            'ItemNotAsAdvertised'=>'ItemNotAsAdvertised',   
            'ItemNotReceivedByCustomer'=>'ItemNotReceivedByCustomer',   
            'TaxExemptCustomer'=>'TaxExemptCustomer'
        );

        return $walmart_ship_method;
    }

    /*
    @Description : Get google refund order reason
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 9-03-2019
    */
    function get_google_refund_order_reason()
    {
        $google_refund_order = array(
            'CustomerDiscretionaryReturn'     => 'Customer Discretionary Return',
            'customerInitiatedMerchantCancel' => 'Customer Initiated Merchant Cancel',
            'deliveredTooLate'                => 'Delivered Too Late',
            'expiredItem'                     => 'Expired Item',
            'invalidCoupon'                   => 'Invalid Coupon',
            'malformedShippingAddress'        => 'Malformed Shipping Address',
            'other'                           => 'Other',
            'productArrivedDamaged'           => 'Product Arrived Damaged',
            'productNotAsDescribed'           => 'Product Not As Described',
            'qualityNotAsExpected'            => 'Quality Not As Expected',
            'undeliverableShippingAddress'    => 'Undeliverable Shipping Address',
            'unsupportedPoBoxAddress'         => 'Unsupported Po Box Address',
            'wrongProductShipped'             => 'Wrong Product Shipped'
        );

        return $google_refund_order;
    }

    /*
    @Description : get newegg  order refund reason
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 23-03-2018
    */
    function get_newegg_refund_order_reason()
    {
        $newegg_refund_order_reason =array(

            '1' => 'Carrier damage', 
            '2' => 'Defective', 
            '3' => 'Incompatible', 
            '4' => 'No longer needed', 
            '5' => 'Not match what we show', 
            '6' => 'Ordered wrong item', 
            '7' => 'Sent wrong item', 
            '8' => 'Unsatisfied'
        );
        return $newegg_refund_order_reason;
    }
    /*
    @Description : get payment term array
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function get_payment_term()
    {   
        $CI = &get_instance();

        $CI->db->select('payment_terms.id,payment_terms.payment_term');

        $CI->db->from("payment_terms");

        $CI->db->where('payment_terms.is_deleted',"0");

        $CI->db->where('payment_terms.is_deleted',"0");

        $CI->db->order_by("payment_terms.id","ASC");
        
        $CI->db->order_by("FIELD(payment_terms.payment_term,'None')");

        $payment_term_list = $CI->db->get()->result_array();

        $key_value=array();
        
        foreach ($payment_term_list as $key => $terms) 
        {
            if($terms['payment_term']=="None")
            {
                $key_value[] = get_value($payment_term_list,$key);
                unset($payment_term_list[$key]);
            }
        }

        $payment_term_list = array_merge($key_value,$payment_term_list);

        $payment_term_list = helper_array_column($payment_term_list,'id','payment_term');
       
        return $payment_term_list;
    }

    /*
    @Description : get PO types array
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function get_po_types()
    {
        $po_types = array(
            'po'    =>  'Purchase Order',
            'cm'    =>  'Credit Memo',
            'vo'    =>  'Vendor Offer'
            );
        return $po_types;
    }
    /*
    @Description : get PO priority array
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function get_po_priorities()
    {
        $po_priorities = array('Normal'=>'Normal','Low'=>'Low','High'=>'High');
        return $po_priorities;
    }
    /*
    @Description : get PO status array
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function get_po_status()
    {
        $po_status = array( 
            'Draft'      => 'Draft',
            'Sent'       => 'Sent',
            'Dispatched' => 'Dispatched',
            'Arrived'    => 'Arrived',
            'Cancelled'    => 'Cancelled',
            'Closed'      => 'Closed'
            );
        return $po_status;
    }

    /*
    @Description : get fba receiving status
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 18-01-2017
    */
    
    function get_fba_receiving_status()
    {
        $receiving_status = array( 
            'Pending'            => 'Pending',
            'Arrived'            => 'Arrived',
            'Partially Received' => 'Partially Received',
            'Closed'             => 'Closed'
        );

        return $receiving_status;
    }

    /*
    @Description : get PO Payment status array
    @Author      : Harshad Hirapara
    @Output      : return array
    @Date        : 09-07-2019
    */

    function get_po_payment_status()
    {
        $po_payment_status = array( 
            'Paid'      => 'Paid',
            'Unpaid'      => 'Unpaid'
        );
        
        return $po_payment_status;
    }
    /*
    @Description : get PO status array for report
    @Author      : Shantanu
    @Output      : return array
    @Date        : 08-06-2018
    */
    function get_po_status_for_report()
    {
        $po_status = array( 
            'Sent'       => 'Sent',
            'Dispatched' => 'Dispatched',
            'Arrived'    => 'Arrived',
            'Cancelled'    => 'Cancelled',
            'Closed'      => 'Closed'
            );
        return $po_status;
    }
    /*
    @Description : get PO status array
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function get_po_verify_status()
    {
        $po_verify_status = array( 
            '0' => 'Not Verified',
            '1' => 'Partial Verified',
            '2' => 'Verified'
            );
        return $po_verify_status;
    }
    /*
    @Description : get PO status array
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function get_po_verify_status_class()
    {
        $po_verify_status_class = array( 
            '0' =>  'label-danger',
            '1' =>  'label-warning',
            '2' =>  'label-success'
            );
        return $po_verify_status_class;
    }
    /*
    @Description : get PO order type array
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function get_po_order_type()
    {
        $po_order_type = array( 
            'Warehouse' => 'Warehouse',
            'Wholesale' => 'Wholesale',
            'Dropship' => 'Dropship'
            );
        return $po_order_type;
    }
    /*
    @Description : get discount type array
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function get_discount_types()
    {
        $discount_types = array( 
            'fixed'         =>  '$',
            'percentage'    =>  '%',
            );
        return $discount_types;
    }
    /*
    @Description : get Sales history day range
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function warehouse_po_sales_history_day_range()
    {
        $day_range = array( 
            '2'     =>  '2 day sales',
            '7'     =>  '7 day sales',
            '30'    =>  '30 day sales',
            '60'    =>  '60 day sales',
            '90'    =>  '90 day sales',
            '180'   =>  '180 day sales',
            );
        return $day_range;
    }
    /*
    @Description : get Sales history day range
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function po_ship_to_address()
    {
        $CI =& get_instance();

        $CI->load->model('po_settings_model');

        $po_address = $CI->po_settings_model->get_po_address();

        $ship_to_address = json_decode(get_value($po_address, 'description', '[]'), true);

        if(!count($ship_to_address))
        {
            $ship_to_address = array( 
                'first_name'    =>  'Receiving',
                'last_name'     =>  'Department',
                'address_line_1'    =>  '7738 W 99th Street',
                'city'          =>  'Hickory Hills',
                'state'         =>  'IL',
                'country'       =>  '229',
                'zipcode'       =>  '60457',
                'phone'         =>  '7089495448'
            );
        }
        return $ship_to_address;
    }
    /*
    @Description : get Sales history day range
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function po_bill_to_address()
    {
        $ship_to_address = array( 
            'first_name'    =>  'Receiving',
            'last_name'     =>  'Department',
            'address_line_1'    =>  '7738 W 99th Street',
            'city'          =>  'Hickory Hills',
            'state'         =>  'IL',
            'country'       =>  '229',
            'zipcode'       =>  '60457',
            'phone'         =>  '7089495448'
            );
        return $ship_to_address;
    }
    function get_export_product_information_colums($key='')
    {
        $product_information_data  = array(
        'title'                      => array("value"=>"title","table"=>"product_master","column_db"=>array("product_master.title"),"text"=>'Title'),
        /*'parent_sku'                 => array("value"=>"parent_sku","table"=>"product_master","column_db"=>array("product_master.parent_sku"),"text"=>'Parent SKU'),*/
        'product_type'               => array("value"=>"product_type","table"=>"product_master","column_db"=>array("product_master.product_type"),"text"=>'Product Type'),
        'product_id'                 => array("value"=>"product_id","table"=>"product_master","column_db"=>array("product_master.product_id"),"text"=>'Product ID'),
        'product_id_type'            => array("value"=>"product_id_type","table"=>"product_master","column_db"=>array("product_master.product_id_type"),"text"=>'Product Id Type'),
        'alt_product_id'             => array("value"=>"alt_product_id","table"=>"product_master","column_db"=>array("product_master.alt_product_id"),"text"=>'Alt Product Id'),
        'manufacturer_sku'           => array("value"=>"manufacturer_sku","table"=>"product_master","column_db"=>array("product_master.manufacturer_sku"),"text"=>'Manufacturer SKU'),
        'fullfillment_type'          => array("value"=>"fullfillment_type","table"=>"product_master","column_db"=>array("product_master.fullfillment_type"),"text"=>'Fullfillment Type'),
        'manufacturer_name'          => array("value"=>"manufacturer_name","table"=>"product_master","column_db"=>array("product_master.manufacturer_name"),"text"=>'Manufacturer Name'),
        'short_name'                 => array("value"=>"short_name","table"=>"product_master","column_db"=>array("product_master.short_name"),"text"=>'Short Name'),
        'brand'                      => array("value"=>"brand","table"=>"product_master","column_db"=>array("product_master.brand"),"text"=>'Brand'),
        'main_image_url'             => array("value"=>"main_image_url","table"=>"product_master","column_db"=>array("product_master.main_image_url"),"text"=>'Main Image Url'),
        'buying_price'               => array("value"=>"buying_price","table"=>"product_master","column_db"=>array("product_master.buying_price"),"text"=>'Buying Price'),
        'manufacturer_part_number'   => array("value"=>"manufacturer_part_number","table"=>"product_master","column_db"=>array("product_master.manufacturer_part_number"),"text"=>'Manufacturer Part Number'),
        'is_hazmat'=>array("value"=>"is_hazmat","table"=>"product_master","column_db"=>array("case when product_master.is_hazmat = '1' then 'Yes' Else 'No' end is_hazmat"),"text"=>'Hazardeous'),
        'product_unspsc_id'          => array("value"=>"product_unspsc_id","table"=>"product_master","column_db"=>array("product_master.product_unspsc_id"),"text"=>'UNSPSC'),
        'threshold_quantity'         => array("value"=>"threshold_quantity","table"=>"product_master","column_db"=>array("product_master.threshold_quantity"),"text"=>'Threshold Quantity'),
        'location'                   => array("value"=>"location","table"=>"product_master","column_db"=>array("product_master.location"),"text"=>'Location Notes'),
        'default_vendor'             => array("value"=>"default_vendor","table"=>"product_master","column_db"=>array("vendor_master.name default_vendor"),"text"=>'Default Vendor'),
        'items_includes'             => array("value"=>"items_includes","table"=>"product_master","column_db"=>array("product_master.items_includes"),"text"=>'Items Includes'),
        'item_condition'             => array("value"=>"item_condition","table"=>"product_master","column_db"=>array("product_master.item_condition"),"text"=>'Item Condition'),
        'condition_notes'            => array("value"=>"condition_notes","table"=>"product_master","column_db"=>array("product_master.condition_notes"),"text"=>'Condition Notes'),
        'posting_availible_quantity' => array("value"=>"posting_availible_quantity","table"=>"product_master","column_db"=>array("product_master.posting_availible_quantity"),"text"=>'Availible Quantity'),
        'reserved_quantity'          => array("value"=>"reserved_quantity","table"=>"product_master","column_db"=>array("product_master.reserved_quantity"),"text"=>'Reserved Quantity'),
        'total_warehouses_total_quantity'             => array("value"=>"total_warehouses_total_quantity","table"=>"product_quantity","column_db"=>array("product_quantity.total_warehouses_total_quantity"),"text"=>'Physical Quantity'),
        'manual_reserve_quantity'    => array("value"=>"manual_reserve_quantity","table"=>"product_master","column_db"=>array("product_master.manual_reserve_quantity"),"text"=>'Manual Reserve'), 
        'selling_price'              => array("value"=>"selling_price","table"=>"product_master","column_db"=>array("product_master.selling_price"),"text"=>'Selling Price'),
        'inventory_low_stock_notice' => array("value"=>"inventory_low_stock_notice","table"=>"product_master","column_db"=>array("product_master.inventory_low_stock_notice"),"text"=>'Inventory Low Stock Notice'),
        'inserted_date'              => array("value"=>"inserted_date","table"=>"product_master","column_db"=>array("product_master.inserted_date"),"text"=>'Created Date'),
        'on_order'              => array("value"=>"on_order","table"=>"product_master","column_db"=>array("'0' on_order"),"text"=>'On Order'),
        'amazon_pricing_rule_id'   => array("value"=>"amazon_pricing_rule_id","table"=>"product_master","column_db"=>array("amazon_properties.amazon_pricing_rule_id"),"text"=>'Repricer Rule ID'),
        'stop_loss_price'   => array("value"=>"stop_loss_price","table"=>"product_master","column_db"=>array("amazon_properties.stop_loss_price"),"text"=>'Floor Price'),
        'amazon_price'   => array("value"=>"amazon_price","table"=>"product_master","column_db"=>array("amazon_properties.amazon_price"),"text"=>'Ceiling Price'),
        'price_date_change_amazon'   => array("value"=>"price_date_change_amazon","table"=>"product_master","column_db"=>array("amazon_properties.price_date_change_amazon"),"text"=>'Price Change Date Amazon'),
        'price_date_change_ebay'     => array("value"=>"price_date_change_ebay","table"=>"product_master","column_db"=>array("ebay_properties.price_date_change_ebay"),"text"=>'Price Change Date Ebay'),
        'msds_url'                   => array("value"=>"msds_url","table"=>"product_master","column_db"=>array("product_master.msds_url"),"text"=>'MSDS URL')
            );
        if($key != '')
        {
            isset($product_information_data[$key]) ? $product_information_data[$key] : '';
        }
        else
        {
            return $product_information_data; 
        }
    }
    function get_export_product_description_colums($key='')
    {
        $product_description_data  = array(
          'minimum_price'               => array("value"=>"minimum_price","table"=>"product_master",'column_db'=>array("product_master.minimum_price"),'text'=>'Minimum Price'),
          'is_minimum_advertised_price' => array("value"=>"is_minimum_advertised_price","table"=>"product_master",'column_db'=>array("case when product_master.is_minimum_advertised_price = '1' then 'Yes' Else 'No' end is_minimum_advertised_price"),'text'=>'MAP Active'),
          'minimum_advertised_price'    => array("value"=>"minimum_advertised_price","table"=>"product_master",'column_db'=>array("product_master.minimum_advertised_price"),'text'=>'Minimum Advertised Price'),
          'is_override_safety_quantity' => array("value"=>"is_override_safety_quantity","table"=>"product_master",'column_db'=>array("product_master.is_override_safety_quantity"),'text'=>'Enabled/Disbled Safety Quantity'),
          'safety_quantity'             => array("value"=>"safety_quantity","table"=>"product_master",'column_db'=>array("product_master.safety_quantity"),'text'=>'Safety Quantity'),
          'long_description'            => array("value"=>"long_description","table"=>"product_properties",'column_db'=>array("product_properties.long_description"),'text'=>'Long Description'),
          'short_description'           => array("value"=>"short_description","table"=>"product_properties",'column_db'=>array("product_properties.short_description"),'text'=>'Short Description'),
          'country_of_origin'           => array("value"=>"country_of_origin","table"=>"product_master",'column_db'=>array("product_master.country_of_origin"),'text'=>'Country Of Origin'),
          'feature1'                    => array("value"=>"feature1","table"=>"product_master",'column_db'=>array("product_master.feature1"),'text'=>'Feature1'),
          'feature2'                    => array("value"=>"feature2","table"=>"product_master",'column_db'=>array("product_master.feature2"),'text'=>'Feature2'),
          'feature3'                    => array("value"=>"feature3","table"=>"product_master",'column_db'=>array("product_master.feature3"),'text'=>'Feature3'),
          'feature4'                    => array("value"=>"feature4","table"=>"product_master",'column_db'=>array("product_master.feature4"),'text'=>'Feature4'),
          'feature5'                    => array("value"=>"feature5","table"=>"product_master",'column_db'=>array("product_master.feature5"),'text'=>'Feature5'),
          'feature1'                    => array("value"=>"feature1","table"=>"product_master",'column_db'=>array("product_master.feature1"),'text'=>'Feature1'),
          'search_term1'                => array("value"=>"search_term1","table"=>"product_master",'column_db'=>array("product_master.search_term1"),'text'=>'Search Term1'),
          'search_term2'                => array("value"=>"search_term2","table"=>"product_master",'column_db'=>array("product_master.search_term2"),'text'=>'Search Term2'),
          'search_term3'                => array("value"=>"search_term3","table"=>"product_master",'column_db'=>array("product_master.search_term3"),'text'=>'Search Term3'),
          'search_term4'                => array("value"=>"search_term4","table"=>"product_master",'column_db'=>array("product_master.search_term4"),'text'=>'Search Term4'),
          'search_term5'                => array("value"=>"search_term5","table"=>"product_master",'column_db'=>array("product_master.search_term5"),'text'=>'Search Term5'),
          'automatic_repricer'          => array("value"=>"automatic_repricer","table"=>"product_repricer_values",'column_db'=>array("'0' automatic_repricer"),'text'=>'Automatic Pricing'),
          'floor_margin_pc'             => array("value"=>"floor_margin_pc","table"=>"product_repricer_values",'column_db'=>array("'0' floor_margin_pc"),'text'=>'Min Floor Margin %'),
          'ceiling_margin_pc'           => array("value"=>"ceiling_margin_pc","table"=>"product_repricer_values",'column_db'=>array("'0' ceiling_margin_pc"),'text'=>'Max Ceiling Margin %'),
          'floor_margin_value'          => array("value"=>"floor_margin_value","table"=>"product_repricer_values",'column_db'=>array("'0' floor_margin_value"),'text'=>'Min Floor Margin Value'),
          'ceiling_margin_value'        => array("value"=>"ceiling_margin_value","table"=>"product_repricer_values",'column_db'=>array("'0' ceiling_margin_value"),'text'=>'Max Ceiling Margin Value'),
        );
        if($key != '')
        {
            isset($product_description_data[$key]) ? $product_description_data[$key] : '';
        }
        else
        {
            return $product_description_data; 
        }
    }
    function get_export_product_shipping_colums($key='')
    {
        $product_shipping_data  = array(
          'max_qty_shipped'                      => array("value"=>"max_qty_shipped","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.max_qty_shipped"),'text'=>'Max Qty Ship'),

          'product_width' => array("value"=>"product_width","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.product_width"),'text'=>'Product Width'),
          'product_height' => array("value"=>"product_height","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.product_height"),'text'=>'Product Height'),
          'product_length' => array("value"=>"product_length","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.product_length"),'text'=>'Product Length'),
          'product_weight_lbs' => array("value"=>"product_weight_lbs","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.product_weight_lbs"),'text'=>'Product Weight(lbs)'),
          'product_weight_oz' => array("value"=>"product_weight_oz","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.product_weight_oz"),'text'=>'Product Weight(oz)'),




          'qty_in_case'                          => array("value"=>"qty_in_case","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.qty_in_case"),'text'=>'Master Case Pack Quantity'),
          'inner_case_pack_qty'                  => array("value"=>"inner_case_pack_qty","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.inner_case_pack_qty"),'text'=>'Inner Case Pack Quantity'),
          'package_name'                         => array("value"=>"package_name","table"=>"shipping_packages",'column_db'=>array("shipping_packages.package_name"),'text'=>'Shipping Packages Name'),
          'shipping_weight_lbs'                  => array("value"=>"shipping_weight_lbs","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.shipping_weight_lbs"),'text'=>'Shipping Weight(lbs)'),
          'shipping_weight_oz'                   => array("value"=>"shipping_weight_oz","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.shipping_weight_oz"),'text'=>'Shipping Weight(oz)'),
          'fba_prep_info'                        => array("value"=>"fba_prep_info","table"=>"fba_prep_info",'column_db'=>array("fba_prep_info.fba_prep_info"),'text'=>'FBA Prep Information'),
          'pallet_qty'                           => array("value"=>"pallet_qty","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.pallet_qty"),'text'=>'Pallet Quantity'),
          'pallet_shipping_weight_lbs'           => array("value"=>"pallet_shipping_weight_lbs","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.pallet_shipping_weight_lbs"),'text'=>'Pallet Shipping Weight(lbs)'),
          'pallet_shipping_weight_oz'            => array("value"=>"pallet_shipping_weight_oz","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.pallet_shipping_weight_oz"),'text'=>'Pallet Shipping Weight(oz)'),
          'pallet_ship_width'                    => array("value"=>"pallet_ship_width","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.pallet_ship_width"),'text'=>'Pallet Dimensions Width'),
          'pallet_ship_height'                   => array("value"=>"pallet_ship_height","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.pallet_ship_height"),'text'=>'Pallet Dimensions Height'),
          'pallet_ship_length'                   => array("value"=>"pallet_ship_length","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.pallet_ship_length"),'text'=>'Pallet Dimensions Length'),
          'total_pallet_cubic_fit'               => array("value"=>"total_pallet_cubic_fit","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.total_pallet_cubic_fit"),'text'=>'Total Pallet Cubic(ft)'),
          'case_pack_shipping_weight_lbs'        => array("value"=>"case_pack_shipping_weight_lbs","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.case_pack_shipping_weight_lbs"),'text'=>'Case Pack Shipping Weight(lbs)'),
          'case_pack_shipping_weight_oz'         => array("value"=>"case_pack_shipping_weight_oz","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.case_pack_shipping_weight_oz"),'text'=>'Case Pack Shipping Weight(oz)'),
          'inner_case_pack_shipping_weight_lbs'  => array("value"=>"inner_case_pack_shipping_weight_lbs","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.inner_case_pack_shipping_weight_lbs"),'text'=>'Inner Case Pack Shipping Weight(lbs)'),
          'inner_case_pack_shipping_weight_oz'   => array("value"=>"inner_case_pack_shipping_weight_oz","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.inner_case_pack_shipping_weight_oz"),'text'=>'Inner Case Pack Shipping Weight(oz)'),
          'master_case_pack_shipping_weight_lbs' => array("value"=>"master_case_pack_shipping_weight_lbs","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.master_case_pack_shipping_weight_lbs"),'text'=>'Master Case Pack Shipping Weight(lbs)'),
          'master_case_pack_shipping_weight_oz'  => array("value"=>"master_case_pack_shipping_weight_oz","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.master_case_pack_shipping_weight_oz"),'text'=>'Master Case Pack Shipping Weight(oz)'),
          'ship_width'                           => array("value"=>"ship_width","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.ship_width"),'text'=>'Shipping Dimensions Width'),
          'ship_height'                          => array("value"=>"ship_height","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.ship_height"),'text'=>'Shipping Dimensions Height'),
          'ship_length'                          => array("value"=>"ship_length","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.ship_length"),'text'=>'Shipping Dimensions Length'),
          'total_case_pack_cubic_fit'            => array("value"=>"total_case_pack_cubic_fit","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.total_case_pack_cubic_fit"),'text'=>'Total Cubic Case Pack(ft)'),
          'case_pack_ship_width'                 => array("value"=>"case_pack_ship_width","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.case_pack_ship_width"),'text'=>'Case Pack Dimensions Width(In)'),
          'case_pack_ship_height'                => array("value"=>"case_pack_ship_height","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.case_pack_ship_height"),'text'=>'Case Pack Dimensions Height(In)'),
          'case_pack_ship_length'                => array("value"=>"case_pack_ship_length","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.case_pack_ship_length"),'text'=>'Case Pack Dimensions Length(In)'),
          'inner_case_pack_ship_width'           => array("value"=>"inner_case_pack_ship_width","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.inner_case_pack_ship_width"),'text'=>'Inner Case Pack Dimensions Width(In)'),
          'inner_case_pack_ship_height'          => array("value"=>"inner_case_pack_ship_height","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.inner_case_pack_ship_height"),'text'=>'Inner Case Pack Dimensions Height(In)'),
          'inner_case_pack_ship_length'          => array("value"=>"inner_case_pack_ship_length","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.inner_case_pack_ship_length"),'text'=>'Inner Case Pack Dimensions Length(In)'),
          'total_inner_case_pack_cubic_fit'      => array("value"=>"total_inner_case_pack_cubic_fit","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.total_inner_case_pack_cubic_fit"),'text'=>'Total Cubic Inner Case Pack(ft)'),
          'master_case_pack_ship_width'          => array("value"=>"master_case_pack_ship_width","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.master_case_pack_ship_width"),'text'=>'Master Case Pack Dimensions Width(In)'),
          'master_case_pack_ship_height'         => array("value"=>"master_case_pack_ship_height","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.master_case_pack_ship_height"),'text'=>'Master Case Pack Dimensions Height(In)'),
          'master_case_pack_ship_length'         => array("value"=>"master_case_pack_ship_length","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.master_case_pack_ship_length"),'text'=>'Master Case Pack Dimensions Length(In)'),
          'total_master_case_pack_cubic_fit'     => array("value"=>"total_master_case_pack_cubic_fit","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.total_master_case_pack_cubic_fit"),'text'=>'Total Cubic Master Case Pack(ft)'),
          'product_uom'                          => array("value"=>"product_uom","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.product_uom"),'text'=>'UOM'),
          'product_tarrif_number'                => array("value"=>"product_tarrif_number","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.product_tarrif_number"),'text'=>'Tarrif Number'),
          'lowest_shipping_method_cost'          => array("value"=>"lowest_shipping_method_cost","table"=>"product_shipping_details",'column_db'=>array("product_shipping_details.lowest_shipping_method_cost"),'text'=>'Lowest Shipping Cost'),
          'if_international_restricted' => array("value"=>"if_international_restricted","table"=>"product_shipping_details",'column_db'=>array("case when product_shipping_details.if_international_restricted = '1' then 'Yes' Else 'No' end if_international_restricted"),'text'=>'Is International Restricted'),
          );
        if($key != '')
        {
            isset($product_shipping_data[$key]) ? $product_shipping_data[$key] : '';
        }
        else
        {
            return $product_shipping_data; 
        }
    }
    function get_export_product_sales_history_column($key='')
    {
        $product_sales_history_data  = array(
            'sales_2d'   => array("value"=>"sales_2d","table"=>"marketplace_product_sales_log",'column_db'=>array("marketplace_product_sales_log.sales_2d"),'text'=>'Sales 2 Days'),
            'sales_7d'   => array("value"=>"sales_7d","table"=>"marketplace_product_sales_log",'column_db'=>array("marketplace_product_sales_log.sales_7d"),'text'=>'Sales 7 Days'),
            'sales_30d'  => array("value"=>"sales_30d","table"=>"marketplace_product_sales_log",'column_db'=>array("marketplace_product_sales_log.sales_30d"),'text'=>'Sales 30 Days'),
            'sales_60d'  => array("value"=>"sales_60d","table"=>"marketplace_product_sales_log",'column_db'=>array("marketplace_product_sales_log.sales_60d"),'text'=>'Sales 60 Days'),
            'sales_90d'  => array("value"=>"sales_90d","table"=>"marketplace_product_sales_log",'column_db'=>array("marketplace_product_sales_log.sales_90d"),'text'=>'Sales 90 Days'),
            'sales_180d'  => array("value"=>"sales_180d","table"=>"marketplace_product_sales_log",'column_db'=>array("marketplace_product_sales_log.sales_180d"),'text'=>'Sales 180 Days'),
            'orders_2d'  => array("value"=>"orders_2d","table"=>"marketplace_product_sales_log",'column_db'=>array("marketplace_product_sales_log.orders_2d"),'text'=>'Orders Last 2 Days'),
            'orders_7d'  => array("value"=>"orders_7d","table"=>"marketplace_product_sales_log",'column_db'=>array("marketplace_product_sales_log.orders_7d"),'text'=>'Orders Last 7 Days'),
            'orders_30d' => array("value"=>"orders_30d","table"=>"marketplace_product_sales_log",'column_db'=>array("marketplace_product_sales_log.orders_30d"),'text'=>'Orders Last 30 Days')
            );
        if($key != '')
        {
            isset($product_sales_history_data[$key]) ? $product_sales_history_data[$key] : '';
        }
        else
        {
            return $product_sales_history_data; 
        }
    }
    function get_product_information_colums($key='')
    {
        $product_information_data  = array(
            'title'                           => 'Title',
            'parent_sku'                      => 'Parent SKU',
            'product_type'                    => 'Product Type',
            'product_id'                      => 'Product ID',
            'product_id_type'                 => 'Product Id Type',
            'alt_product_id'                  => 'Alt Product Id',
            'manufacturer_sku'                => 'Manufacturer SKU',
            'fullfillment_type'               => 'Fullfillment Type',
            'manufacturer_name'               => 'Manufacturer Name',
            'short_name'                      => 'Short Name',
            'brand'                           => 'Brand',
            'main_image_url'                  => 'Main Image Url',
            'secondary_images'                => 'Secondary Images',
            'buying_price'                    => 'Buying Price',
            'manufacturer_part_number'        => 'Manufacturer Part Number',
            'is_hazmat'                       => 'Is Hazmat',
            'is_oversized'                    => 'Is Oversized',
            'is_restricted'                   => 'Is Restricted',
            'product_unspsc_id'               => 'UNSPSC',
            // 'threshold_quantity'              => 'Threshold Quantity', Akshit : Remove Threshold Quantity field from inventory from import/export - 22-1-2019
            'location'                        => 'Location Notes',
            'default_vendor'                  => 'Default Vendor',
            'items_includes'                  => 'Items Includes',
            'item_condition'                  => 'Item Condition',
            'condition_notes'                 => 'Condition Notes',
            'posting_availible_quantity'      => 'Availible Quantity',
            'reserved_quantity'               => 'Reserved Quantity',
            'total_warehouses_total_quantity' => 'Physical Quantity',
            'manual_reserve_quantity'         => 'Manual Reserve',            
            'selling_price'                   => 'Selling Price',
            'msrp_price'                      => 'MSRP Price',
            'inventory_low_stock_notice'      => 'Inventory Low Stock Notice',
            'inserted_date'                   => 'Created Date',
            'on_order'                        => 'On Order',
            'stop_loss_price'                 => 'Floor Price',
            'amazon_price'                    => 'Ceiling Price',
            'amazon_pricing_rule_id'          => 'Repricing Rule ID',
            'price_date_change_amazon'        => 'Price Change Date Amazon',
            'price_date_change_ebay'          => 'Price Change Date Ebay',
            'msds_url'                        => 'MSDS URL',
            'primary_location'                => 'Primary Location',
            'warehouse_name'                  => 'Warehouse Zone',
            'is_archived'                     => 'Is Archived',
            'is_showroom'                     => 'Showroom Item',
            'product_classification'          => 'Product Classification',
            'product_status'                  => 'Product Status',
            'if_each_component_non_sellable'  => 'Each Component-Nonsellable',
            'last_received_date'              => 'Last PO Received Date',
            'product_notes'                   => 'Product Notes',
            'fullfillment_type_change_date'   => 'Fullfillment Type Change Date',
            'po_last_sent_date'               => 'PO Last Sent Date',
            'default_vendor_sku'              => 'Default Vendors SKU',
            'default_vendor_min_order_qty'    => 'Defualt Vendors Min Order Qty',
            'default_vendor_cost'             => 'Defualt Vendors Cost',
            );
        if($key != '')
        {
            isset($product_information_data[$key]) ? $product_information_data[$key] : '';
        }
        else
        {
            return $product_information_data; 
        }
    }
    function get_product_description_colums($key='')
    {
        $product_description_data  = array(
        'minimum_price'               => 'Minimum Price',
        'is_minimum_advertised_price' => 'MAP',
        'minimum_advertised_price'    => 'Map Price',
        'is_override_safety_quantity' => 'Override Safety Quantity',
        'safety_quantity'             => 'Safety Quantity',
        'long_description'  => 'Long Description',
          'short_description' => 'Short Description',
          'country_of_origin' => 'Country Of Origin',
          'feature1'          => 'Feature1',
          'feature2'          => 'Feature2',
          'feature3'          => 'Feature3',
          'feature4'          => 'Feature4',
          'feature5'          => 'Feature5',
          'feature1'          => 'Feature1',
          'search_term1'      => 'Search Term1',
          'search_term2'      => 'Search Term2',
          'search_term3'      => 'Search Term3',
          'search_term4'      => 'Search Term4',
          'search_term5'      => 'Search Term5',
          'count_by'          => 'Cycle Count By',
          'count_date'        => 'Cycle Count Date',
          'is_liquidate'      =>  'Is Liquidate',
          'channel_country_specific_id'      =>  'Channel Country Specific ID',
          'is_california_proposition_65'    => 'Is California Propostion 65',
          'automatic_repricer'  => 'Automatic Pricing',
          'floor_margin_pc'     => 'Min Floor Margin %',
          'ceiling_margin_pc'   => 'Max Ceiling Margin %',
          'floor_margin_value'  => 'Min Floor Margin Value',
          'ceiling_margin_value'=> 'Max Ceiling Margin Value',
          'is_pesticide'        => 'Pesticide Product',
          'pesticide_marking'   => 'Pesticide Marking',
          'pesticide_registration_status'=> 'Pesticide Registration Status',
          'pesticide_certification_status'=> 'Pesticide Certificate Number',
        );

        if($key != '')
        {
            isset($product_description_data[$key]) ? $product_description_data[$key] : '';
        }
        else
        {
            return $product_description_data; 
        }
    }
    function get_product_shipping_colums($key='')
    {
        $product_shipping_data  = array(
          'is_free_shipping'  => 'Is Free Shipping',
          'is_auto_assign_package'  => 'Is Auto Assign Package',
          'is_non_machineable'      => 'Non Machinable',
          'is_fragile'              => 'Fragile',
          'is_manual_shipping'      => 'Is Manual Shipping',
          'bubble_mailer_or_box'    => 'Bubble Mailer or Box',
          'box_only'                => 'Box Only',
          'if_international_restricted' => 'Is International Restricted',
          'is_international_approved' => 'Is International Approved',
          'fedex_shipping_packages_type'  => 'FedEx One Rate Shipping Packages',

          'max_qty_shipped'                      => 'Max Qty Ship',

          'product_width' => 'Product Width' ,
          'product_height' => 'Product Height' ,
          'product_length' => 'Product Length' ,
          'product_weight_lbs' => 'Product Weight(lbs)',
          'product_weight_oz' => 'Product Weight(oz)',


          'qty_in_case'                          => 'Master Case Pack Quantity',
          'inner_case_pack_qty'                  => 'Inner Case Pack Quantity',
          'package_name'                         => 'Shipping Packages Name',
          'shipping_weight_lbs'                  => 'Shipping Weight(lbs)',
          'shipping_weight_oz'                   => 'Shipping Weight(oz)',
          'fba_prep_info'                        => 'FBA Prep Information',
          'pallet_qty'                           => 'Pallet Quantity',
          'pallet_shipping_weight_lbs'           => 'Pallet Shipping Weight(lbs)',
          'pallet_shipping_weight_oz'            => 'Pallet Shipping Weight(oz)',
          'pallet_ship_width'                    => 'Pallet Dimensions Width',
          'pallet_ship_height'                   => 'Pallet Dimensions Height',
          'pallet_ship_length'                   => 'Pallet Dimensions Length',
          'total_pallet_cubic_fit'               => 'Total Pallet Cubic(ft)',
          'case_pack_shipping_weight_lbs'        => 'Case Pack Shipping Weight(lbs)',
          'case_pack_shipping_weight_oz'         => 'Case Pack Shipping Weight(oz)',
          'inner_case_pack_shipping_weight_lbs'  => 'Inner Case Pack Shipping Weight(lbs)',
          'inner_case_pack_shipping_weight_oz'   => 'Inner Case Pack Shipping Weight(oz)',
          'master_case_pack_shipping_weight_lbs' => 'Master Case Pack Shipping Weight(lbs)',
          'master_case_pack_shipping_weight_oz'  => 'Master Case Pack Shipping Weight(oz)',
          'ship_width'                           => 'Shipping Dimensions Width',
          'ship_height'                          => 'Shipping Dimensions Height',
          'ship_length'                          => 'Shipping Dimensions Length',
          'case_pack_ship_width'                 => 'Case Pack Dimensions Width(In)',
          'case_pack_ship_height'                => 'Case Pack Dimensions Height(In)',
          'case_pack_ship_length'                => 'Case Pack Dimensions Length(In)',
          'total_case_pack_cubic_fit'        => 'Total Cubic Case Pack(ft)',
          'inner_case_pack_ship_width'       => 'Inner Case Pack Dimensions Width(In)',
          'inner_case_pack_ship_height'      => 'Inner Case Pack Dimensions Height(In)',
          'inner_case_pack_ship_length'      => 'Inner Case Pack Dimensions Length(In)',
          'total_inner_case_pack_cubic_fit'  => 'Total Cubic Inner Case Pack(ft)',
          'master_case_pack_ship_width'      => 'Master Case Pack Dimensions Width(In)',
          'master_case_pack_ship_height'     => 'Master Case Pack Dimensions Height(In)',
          'master_case_pack_ship_length'     => 'Master Case Pack Dimensions Length(In)',
          'total_master_case_pack_cubic_fit' => 'Total Cubic Master Case Pack(ft)',
          'product_uom'                      => 'UOM',
          'product_tarrif_number'            => 'Tarrif Number',
          'lowest_shipping_method_cost'      => 'Lowest Shipping Cost'
          );
        if($key != '')
        {
            isset($product_shipping_data[$key]) ? $product_shipping_data[$key] : '';
        }
        else
        {
            return $product_shipping_data; 
        }
    }
    function get_product_sales_history_data($key='')
    {
        $product_sales_history_data  = array(
            'sales_2d'   => 'Sales 2 Days',
            'sales_7d'   => 'Sales 7 Days',
            'sales_30d'  => 'Sales 30 Days',
            'sales_60d'  => 'Sales 60 Days',
            'sales_90d'  => 'Sales 90 Days',
            'sales_180d'  => 'Sales 180 Days',
            'sales_3600d'  => 'Sales of all Days',
            'orders_2d'  => 'Orders Last 2 Days',
            'orders_7d'  => 'Orders Last 7 Days',
            'orders_30d' => 'Orders Last 30 Days',
            'orders_60d' => 'Orders Last 60 Days',
            'orders_90d' => 'Orders Last 90 Days',
            'orders_180d' => 'Orders Last 180 Days',
            'orders_3600d' => 'Orders of all Days'
        );
        if($key != '')
        {
            isset($product_sales_history_data[$key]) ? $product_sales_history_data[$key] : '';
        }
        else
        {
            return $product_sales_history_data; 
        }
    }

    function get_product_group_name_data($key='')
    {
        $product_group_name_data  = array(
            'product_group_name'  => 'Group Name');
        if($key != '')
        {
            isset($product_group_name_data[$key]) ? $product_group_name_data[$key] : '';
        }
        else
        {
            return $product_group_name_data; 
        }
    }
    function get_product_vendor_name_data($key='')
    {
        $product_vendor_name_data  = array(
            'product_vendor_name'  => 'Vendor Name');
        if($key != '')
        {
            isset($product_vendor_name_data[$key]) ? $product_vendor_name_data[$key] : '';
        }
        else
        {
            return $product_vendor_name_data; 
        }
    }
    function get_product_item_condition_type()
    {
       return array(
        'new'         => 'New',
        'used'        => 'Used',
        'collectible' => 'Collectible',
        'refurbished' => 'Refurbished'
        );
   }
   function get_product_type()
   {
       return array(
        'normal'    => 'Normal',
        'parent' => 'Variation',
        'kit-parent' => 'Kit-Variation',
        'kit' => 'Kit',
        );
   }
   function get_searchable_product_type()
   {
       return array(
        'normal'    => 'normal',
        'variation' => 'variation',
        'kit' => 'kit',
        'kit-variation' => 'kit-variation',
        );
   }
   function get_product_fullfillment_type()
   {
    return array(
        'whole_sale' => 'WholeSale',
        'warehouse'  => 'WareHouse',
        'drop_ship'  => 'Drop Ship'
        );
}
function get_location_status_array()
{
    return array(
        '0'     => 'Available',
        '1' => 'Not Available'
    );
}

function get_preship_order_array()
{
    return array(
        '1' => 'Yes',
        '0' => 'No'
    );
}

function get_location_status()
{
    return array(
        'available'     => 'Available',
        'not_available' => 'Not Available'
    );
}

function get_location_status_reason()
{
    return array(
        '0' => '-',
        '1' => 'Primary With Inventory',
        '2' => 'Primary Without Inventory',
        '3' => 'Secondary With Inventory'
    );
}

function check_fba_product()
{
    return array(
        '0' => 'No',
        '1' => 'Yes'
        );
}
function get_product_kit_type()
{
    return array(
        'all-component' => 'All Component',
        'independent'    => 'Independent',
        );
}
function get_product_weight_calculation_type()
{
    return array(
        'auto'   => 'Auto',
        'manual' => 'Manual'
        );
}
function get_order_internal_status()
{
    return array(
        'InProcess'    => 'In Process',
        'OnHold'       => 'On Hold',
        'ProblemOrder' => 'Problem Order',
        'BackOrder'    => 'Back Order',
        'Completed'    => 'Completed',
        'Cancelled'    => 'Cancelled'
        );
}
function get_order_status()
{
    return  array(
        "Unshipped" => "Unshipped",
        "Shipped" => "Shipped",
        "Created" => "Created",
        "Pending" => "Pending",
        "Cancelled" => "Cancelled"
        );
}
function get_amazon_shipping_category()
{
    return array(
        'Expedited'=>'Expedited',
        'FreeEconomy'=>'FreeEconomy',
        'NextDay'=>'NextDay',
        'SameDay'=>'SameDay',
        'SecondDay'=>'SecondDay',
        'Scheduled'=>'Scheduled',
        'Standard'=>'Standard'
        );
}
function get_advance_search_date_range()
{
    return array(
        "Today"                     => "Today",
        "Yesterday"                 => "Yesterday",
        "This Week"                 => "This Week",
        "Last Week"                 => "Last Week",
        "Last 24 Hours"             => "Last 24 Hours",
        "Last 3 Days"               => "Last 3 Days",
        "Last 7 Days"               => "Last 7 Days",
        "Last 14 Days"              => "Last 14 Days",
        "Last 31 Days"              => "Last 31 Days",
        "Last 60 Days"              => "Last 60 Days",
        "Last 90 Days"              => "Last 90 Days",
        "Last 120 Days"             => "Last 120 Days",
        "Last Month"                => "Last Month",
        "Last Year"                 => "Last Year",
                        /*"Year To Date"            => "Year To Date",
                        "Older than 1 Business Day" => "Older than 1 Business Day",
                        "Older than 2 Business Day" => "Older than 2 Business Day",
                        "Older than 3 Business Day" => "Older than 3 Business Day",*/
    );
}
function get_advance_search_three_date_range()
{
    return array(
        "Today"                     => "Today",
        "Yesterday"                 => "Yesterday",
        "Tomorrow"                 => "Tomorrow"
                        );
}
function get_advance_search_time_range()
{
  $monday = strtotime("last monday");
  $monday = date('w', $monday)==date('w') ? $monday+7*86400 : $monday;
  $sunday = strtotime(date("Y-m-d",$monday)." +6 days");
  $this_week_sd = date("Y-m-d",$monday);
  $this_week_ed = date("Y-m-d",$sunday);
  $monday = strtotime("last monday");
  $monday = date('W', $monday)==date('W') ? $monday-7*86400 : $monday;
  $sunday = strtotime(date("Y-m-d",$monday)." +6 days");
  $last_week_sd = date("Y-m-d",$monday);
  $last_week_ed = date("Y-m-d",$sunday);
  $TodayDate = get_inserted_date_time();
  $format = "Y-m-d";
  $format_time = "Y-m-d H:i:s";
  $time_data =
  array(
      "TodayDate"                 => $TodayDate,
      "Yesterday"                 => date($format,strtotime("$TodayDate -1 Day")),
      "Tomorrow"                  => date($format,strtotime("$TodayDate +1 Day")),
      "This Week"                 => date($format,strtotime("$TodayDate -0 Week")),
      "Last Week"                 => date($format,strtotime("$TodayDate -1 Week")),
      "Last 24 Hours"             => date($format_time,strtotime("$TodayDate -24 Hour")),
      "Last 3 Days"               => date($format,strtotime("$TodayDate -3 Days")),
      "Last 7 Days"               => date($format,strtotime("$TodayDate -7 Days")),
      "Last 14 Days"              => date($format,strtotime("$TodayDate -14 Days")),
      "Last 30 Days"              => date($format,strtotime("$TodayDate -30 Days")),
      "Last 31 Days"              => date($format,strtotime("$TodayDate -31 Days")),
      "Last 60 Days"              => date($format,strtotime("$TodayDate -60 Days")),
      "Last 90 Days"              => date($format,strtotime("$TodayDate -90 Days")),
      "Last 120 Days"             => date($format,strtotime("$TodayDate -120 Days")),
      "Last Year"                 => date("Y",strtotime("$TodayDate -1 Year")),
      "Year To Date"              => "",
      "Older than 1 Business Day" => "",
      "Older than 2 Business Day" => "",
      "Older than 3 Business Day" => "",
      "Last Month"                => date($format,strtotime("$TodayDate -1 Month")),
      "This_Week_Sd"              => $this_week_sd,
      "This_Week_Ed"              => $this_week_sd,
      "Last_Week_Sd"              => $last_week_sd,
      "Last_Week_Ed"              => $last_week_ed,
      "Upcoming 3 Days"           => date($format,strtotime("$TodayDate +3 Days")),
      "Upcoming 10 Days"          => date($format,strtotime("$TodayDate +10 Days")),
      );
  return $time_data;
}
function get_unshipped_order_status_array()
{
    return array("Unshipped","Ready","Acknowledged");
}
function get_shipped_order_status_array()
{
    return array("Shipped");
}
function get_store_tables_array()
{
    return array(
        "amazon" => array(
                        "table" => "amazon_products" ,
                        "price_column" => "price",
                        "marketplace_sku" => "asin",
                        "marketplace_url_slug" => "asin",
                        "quantity_column" => "qty",
                        "sku_column" => "sku" ,
                        "price_log_table"=>"amazon_selling_price_log" ,
                        "price_id_column" => "amazon_id",
                        "quantity_log_table"=>"amazon_quantity_log" ,
                        "quantity_id_column" => "amazon_id",
                        "normal_product_condition"=>array("is_variation"=>array("0","1"))),

        "ebay" => array(
                        "table" => "ebay_products" ,
                        "price_column" => "selling_price" ,
                        "quantity_column" => "quantity",
                        "marketplace_sku" => "ebay_item_id",
                        "marketplace_url_slug" => "ebay_item_id",
                        "sku_column" => "sku" ,
                        "price_log_table"=>"ebay_selling_price_log" ,
                        "price_id_column" => "ebay_id",
                        "quantity_log_table"=>"ebay_quantity_log" ,
                        "quantity_id_column" => "ebay_id",
                        "normal_product_condition"=>array("item_type"=>array("normal","variation"))),

        "overstock" => array(
                        "table" => "overstock_product" ,
                        "price_column" => "cost" ,
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "url_id",
                        "price_log_table"=>"overstock_selling_price_log" ,
                        "marketplace_sku" => "overstock_sku",
                        "price_id_column" => "overstock_id",
                        "quantity_log_table"=>"overstock_quantity_log" ,
                        "quantity_id_column" => "overstock_id",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))),

        "jet" => array(
                        "table" => "jet_products" ,
                        "price_column" => "selling_price" ,
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "jet_sku" ,
                        "marketplace_sku" => "sku",
                        "price_log_table"=>"jet_selling_price_log" ,
                        "price_id_column" => "jet_id",
                        "quantity_log_table"=>"jet_quantity_log" ,
                        "quantity_id_column" => "jet_id",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))),

        //"rakuten"   =>   array("table" => "rakuten_product" , "price_column" => "price" ,"sku_column" => "sku" , "price_log_table"=>"rakuten_selling_price_log" , "price_id_column" => "rakuten_id"),
        "walmart" => array(
                        "table" => "walmart_products" ,
                        "price_column" => "selling_price",
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "wpid",
                        "marketplace_sku" => "wpid",
                        "price_log_table"=>"walmart_selling_price_log" ,
                        "price_id_column" => "walmart_id",
                        "quantity_log_table"=>"walmart_quantity_log" ,
                        "quantity_id_column" => "walmart_id",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))),

        "newegg_com" => array(
                        "store_id"=>"18",
                        "table" => "newegg_products" ,
                        "price_column" => "selling_price",
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "newegg_id",
                        "marketplace_sku" => "newegg_id",
                        "price_log_table"=>"newegg_selling_price_log" ,
                        "price_id_column" => "newegg_id",
                        "quantity_log_table"=>"newegg_quantity_log" ,
                        "quantity_id_column" => "newegg_product_id",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))),

        "newegg_biz" => array(
                        "store_id"=>"16",
                        "table" => "newegg_business_products" ,
                        "price_column" => "selling_price",
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "newegg_biz_id",
                        "marketplace_sku" => "newegg_biz_id",
                        "price_log_table"=>"newegg_business_selling_price_log" ,
                        "price_id_column" => "newegg_biz_id",
                        "quantity_log_table"=>"newegg_business_quantity_log" ,
                        "quantity_id_column" => "newegg_biz_id",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))),

        "bonanza" => array(
                        "store_id"=>"17",
                        "table" => "bonanza_products" ,
                        "price_column" => "current_price",
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "bonanza_product_id",
                        "marketplace_sku" => "bonanza_product_id",
                        "price_log_table"=>"bonanza_selling_price_log" ,
                        "price_id_column" => "bonanza_id",
                        "quantity_log_table"=>"bonanza_quantity_log" ,
                        "quantity_id_column" => "bonanza_id",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))),

        "tanga" => array(
                        "store_id"=>"24",
                        "table" => "tanga_products" ,
                        "price_column" => "current_price",
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "product_id",
                        "marketplace_sku" => "product_id",
                        "price_log_table"=>"tanga_selling_price_log" ,
                        "price_id_column" => "tanga_id",
                        "quantity_log_table"=>"tanga_quantity_log" ,
                        "quantity_id_column" => "tanga_id",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))),

        "etsy" => array(
                        "store_id"=>"28",
                        "table" => "etsy_products" ,
                        "price_column" => "price",
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "listing_id",
                        "marketplace_sku" => "listing_id",
                        "price_log_table"=>"etsy_selling_price_log" ,
                        "price_id_column" => "etsy_id",
                        "quantity_log_table"=>"etsy_quantity_log" ,
                        "quantity_id_column" => "etsy_id",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))),

        "sears" => array(
                        "store_id"=>"21",
                        "table" => "sears_products" ,
                        "price_column" => "standard_price",
                        "quantity_column" => "on_hand_quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "sku",
                        "marketplace_sku" => "sku",
                        "price_log_table"=>"sears_selling_price_log" ,
                        "price_id_column" => "sears_id",
                        "quantity_log_table"=>"sears_quantity_log" ,
                        "quantity_id_column" => "sears_id",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))),

        "shopify" => array(
                        "store_id"=>"3",
                        "table" => "shopify_products" ,
                        "price_column" => "price",
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "sku",
                        "marketplace_sku" => "sku",
                        "price_log_table"=>"shopify_selling_price_log" ,
                        "price_id_column" => "shopify_id",
                        "quantity_log_table"=>"shopify_quantity_log" ,
                        "quantity_id_column" => "shopify_id",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))),

        "wayfair" => array(
                        "store_id"=>"3",
                        "table" => "wayfair_products" ,
                        "price_column" => "selling_price",
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "wayfair_id",
                        "marketplace_sku" => "wayfair_id",
                        "price_log_table"=>"wayfair_selling_price_log" ,
                        "price_id_column" => "wayfair_id",
                        "quantity_log_table"=>"wayfair_quantity_log" ,
                        "quantity_id_column" => "wayfair_id",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation")))
      );
}
function get_store_table_array_id()
{
    return array(
       'ebay_us'   => array("store_type"=>"Ebay","store_id"=>"2"),
       'ebay_uk'   => array("store_type"=>"Ebay","store_id"=>"14"),
       'ebay_au'   => array("store_type"=>"Ebay","store_id"=>"13"),
       'amazon_us' => array("store_type"=>"Amazon","store_id"=>"1"),
       'amazon_uk' => array("store_type"=>"Amazon","store_id"=>"25"),
       'amazon_fr' => array("store_type"=>"Amazon","store_id"=>"30"),
       'amazon_de' => array("store_type"=>"Amazon","store_id"=>"31"),
       'amazon_it' => array("store_type"=>"Amazon","store_id"=>"32"),
       'amazon_es' => array("store_type"=>"Amazon","store_id"=>"33"),
       'amazon_au' => array("store_type"=>"Amazon","store_id"=>"34"),
       'amazon_se' => array("store_type"=>"Amazon","store_id"=>"42"),
       'amazon_mx' => array("store_type"=>"Amazon","store_id"=>"43"),
       'amazon_br' => array("store_type"=>"Amazon","store_id"=>"44"),
       'walmart'   => array("store_type"=>"Walmart","store_id"=>"9"),
       'jet'       => array("store_type"=>"Jet","store_id"=>"12"),
       'overstock' => array("store_type"=>"Overstock","store_id"=>"8"),
       'google_us' => array("store_type"=>"Google","store_id"=>"39"),
   );
}
function get_store_tables_array_store_wise()
{
    return array(
        "amazon_us" => array(
                            "store_marketplace"=>"amazon",
                            "country_convention"=>"US",
                            "store_id"=>"1",
                            "table" => "amazon_products" , 
                            "price_column" => "price",
                            "marketplace_sku" => "asin",
                            "marketplace_url_slug" => "asin", 
                            "quantity_column" => "qty",
                            "sku_column" => "sku" , 
                            "price_log_table"=>"amazon_selling_price_log" , 
                            "price_id_column" => "amazon_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"amazon_quantity_log", 
                            "quantity_id_column" => "amazon_id",
                            "posting_table"=>"amazon_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("is_variation"=>array("0","1")),
                            "fees_column"=>array("amazon_fee"=>"amazon_products.amazon_fee","amazon_fba_fee"=>"amazon_products.amazon_fba_fee"),
                            "shipping_price_column"=>array("shipping_price"=>"amazon_products.shipping_price"),
                            "store_currency"=>"USD"
                        ),

        "amazon_ca" => array(
                            "store_marketplace"=>"amazon",
                            "country_convention"=>"CA",
                            "store_id"=>"22",
                            "table" => "amazon_products" , 
                            "price_column" => "price",
                            "marketplace_sku" => "asin",
                            "marketplace_url_slug" => "asin",
                            "quantity_column" => "qty",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"amazon_selling_price_log" ,
                            "price_id_column" => "amazon_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"amazon_quantity_log" ,
                            "quantity_id_column" => "amazon_id",
                            "posting_table"=>"amazon_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("is_variation"=>array("0","1")),
                            "fees_column"=>array("amazon_fee"=>"amazon_products.amazon_fee","amazon_fba_fee"=>"amazon_products.amazon_fba_fee"),
                            "shipping_price_column"=>array("shipping_price"=>"amazon_products.shipping_price"),
                            "store_currency"=>"CAD"
                        ),

        "amazon_mx" => array(
                            "store_marketplace"=>"amazon",
                            "country_convention"=>"MX",
                            "store_id"=>"43",
                            "table" => "amazon_products" , 
                            "price_column" => "price",
                            "marketplace_sku" => "asin",
                            "marketplace_url_slug" => "asin", 
                            "quantity_column" => "qty",
                            "sku_column" => "sku" , 
                            "price_log_table"=>"amazon_selling_price_log" , 
                            "price_id_column" => "amazon_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"amazon_quantity_log", 
                            "quantity_id_column" => "amazon_id",
                            "posting_table"=>"amazon_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("is_variation"=>array("0","1")),
                            "fees_column"=>array("amazon_fee"=>"amazon_products.amazon_fee","amazon_fba_fee"=>"amazon_products.amazon_fba_fee"),
                            "shipping_price_column"=>array("shipping_price"=>"amazon_products.shipping_price"),
                            "store_currency"=>"MXN"
                        ),

        "amazon_br" => array(
                            "store_marketplace"=>"amazon",
                            "country_convention"=>"BR",
                            "store_id"=>"44",
                            "table" => "amazon_products" , 
                            "price_column" => "price",
                            "marketplace_sku" => "asin",
                            "marketplace_url_slug" => "asin", 
                            "quantity_column" => "qty",
                            "sku_column" => "sku" , 
                            "price_log_table"=>"amazon_selling_price_log" , 
                            "price_id_column" => "amazon_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"amazon_quantity_log", 
                            "quantity_id_column" => "amazon_id",
                            "posting_table"=>"amazon_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("is_variation"=>array("0","1")),
                            "fees_column"=>array("amazon_fee"=>"amazon_products.amazon_fee","amazon_fba_fee"=>"amazon_products.amazon_fba_fee"),
                            "shipping_price_column"=>array("shipping_price"=>"amazon_products.shipping_price"),
                            "store_currency"=>"BRL"
                        ),

        "amazon_uk" => array(
                            "store_marketplace"=>"amazon",
                            "country_convention"=>"UK",
                            "store_id"=>"25",
                            "table" => "amazon_products" ,
                            "price_column" => "price",
                            "marketplace_sku" => "asin",
                            "marketplace_url_slug" => "asin",
                            "quantity_column" => "qty",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"amazon_selling_price_log" ,
                            "price_id_column" => "amazon_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"amazon_quantity_log" ,
                            "quantity_id_column" => "amazon_id",
                            "posting_table"=>"amazon_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("is_variation"=>array("0","1")),
                            "fees_column"=>array("amazon_fee"=>"amazon_products.amazon_fee","amazon_fba_fee"=>"amazon_products.amazon_fba_fee"),
                            "shipping_price_column"=>array("shipping_price"=>"amazon_products.shipping_price"),
                            "store_currency"=>"GBP"
                        ),

        "amazon_fr" => array(
                            "store_marketplace"=>"amazon",
                            "country_convention"=>"FR",
                            "store_id"=>"30",
                            "table" => "amazon_products" ,
                            "price_column" => "price",
                            "marketplace_sku" => "asin",
                            "marketplace_url_slug" => "asin",
                            "quantity_column" => "qty",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"amazon_selling_price_log" ,
                            "price_id_column" => "amazon_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"amazon_quantity_log" ,
                            "quantity_id_column" => "amazon_id",
                            "posting_table"=>"amazon_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("is_variation"=>array("0","1")),
                            "fees_column"=>array("amazon_fee"=>"amazon_products.amazon_fee","amazon_fba_fee"=>"amazon_products.amazon_fba_fee"),
                            "shipping_price_column"=>array("shipping_price"=>"amazon_products.shipping_price"),
                            "store_currency"=>"EUR"
                        ),

         "amazon_de" => array(
                            "store_marketplace"=>"amazon",
                            "country_convention"=>"DE",
                            "store_id"=>"31",
                            "table" => "amazon_products" ,
                            "price_column" => "price",
                            "marketplace_sku" => "asin",
                            "marketplace_url_slug" => "asin",
                            "quantity_column" => "qty",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"amazon_selling_price_log" ,
                            "price_id_column" => "amazon_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"amazon_quantity_log" ,
                            "quantity_id_column" => "amazon_id",
                            "posting_table"=>"amazon_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("is_variation"=>array("0","1")),
                            "fees_column"=>array("amazon_fee"=>"amazon_products.amazon_fee","amazon_fba_fee"=>"amazon_products.amazon_fba_fee"),
                            "shipping_price_column"=>array("shipping_price"=>"amazon_products.shipping_price"),
                            "store_currency"=>"EUR"
                        ),

         "amazon_it" => array(
                            "store_marketplace"=>"amazon",
                            "country_convention"=>"IT",
                            "store_id"=>"32",
                            "table" => "amazon_products" ,
                            "price_column" => "price",
                            "marketplace_sku" => "asin",
                            "marketplace_url_slug" => "asin",
                            "quantity_column" => "qty",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"amazon_selling_price_log" ,
                            "price_id_column" => "amazon_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"amazon_quantity_log" ,
                            "quantity_id_column" => "amazon_id",
                            "posting_table"=>"amazon_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("is_variation"=>array("0","1")),
                            "fees_column"=>array("amazon_fee"=>"amazon_products.amazon_fee","amazon_fba_fee"=>"amazon_products.amazon_fba_fee"),
                            "shipping_price_column"=>array("shipping_price"=>"amazon_products.shipping_price"),
                            "store_currency"=>"EUR"
                        ),

            "amazon_es" => array(
                            "store_marketplace"=>"amazon",
                            "country_convention"=>"ES",
                            "store_id"=>"33",
                            "table" => "amazon_products" ,
                            "price_column" => "price",
                            "marketplace_sku" => "asin",
                            "marketplace_url_slug" => "asin",
                            "quantity_column" => "qty",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"amazon_selling_price_log" ,
                            "price_id_column" => "amazon_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"amazon_quantity_log" ,
                            "quantity_id_column" => "amazon_id",
                            "posting_table"=>"amazon_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("is_variation"=>array("0","1")),
                            "fees_column"=>array("amazon_fee"=>"amazon_products.amazon_fee","amazon_fba_fee"=>"amazon_products.amazon_fba_fee"),
                            "shipping_price_column"=>array("shipping_price"=>"amazon_products.shipping_price"),
                            "store_currency"=>"EUR"
                        ),

            "amazon_au" => array(
                            "store_marketplace"=>"amazon",
                            "country_convention"=>"AU",
                            "store_id"=>"34",
                            "table" => "amazon_products" ,
                            "price_column" => "price",
                            "marketplace_sku" => "asin",
                            "marketplace_url_slug" => "asin",
                            "quantity_column" => "qty",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"amazon_selling_price_log" ,
                            "price_id_column" => "amazon_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"amazon_quantity_log" ,
                            "quantity_id_column" => "amazon_id",
                            "posting_table"=>"amazon_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("is_variation"=>array("0","1")),
                            "fees_column"=>array("amazon_fee"=>"amazon_products.amazon_fee","amazon_fba_fee"=>"amazon_products.amazon_fba_fee"),
                            "shipping_price_column"=>array("shipping_price"=>"amazon_products.shipping_price"),
                            "store_currency"=>"AUD"
                        ),
            "amazon_nl" => array(
                            "store_marketplace"=>"amazon",
                            "country_convention"=>"NL",
                            "store_id"=>"40",
                            "table" => "amazon_products" ,
                            "price_column" => "price",
                            "marketplace_sku" => "asin",
                            "marketplace_url_slug" => "asin",
                            "quantity_column" => "qty",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"amazon_selling_price_log" ,
                            "price_id_column" => "amazon_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"amazon_quantity_log" ,
                            "quantity_id_column" => "amazon_id",
                            "posting_table"=>"amazon_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("is_variation"=>array("0","1")),
                            "fees_column"=>array("amazon_fee"=>"amazon_products.amazon_fee","amazon_fba_fee"=>"amazon_products.amazon_fba_fee"),
                            "shipping_price_column"=>array("shipping_price"=>"amazon_products.shipping_price"),
                            "store_currency"=>"EUR"
                        ),
            "amazon_se" => array(
                            "store_marketplace"=>"amazon",
                            "country_convention"=>"SE",
                            "store_id"=>"42",
                            "table" => "amazon_products" ,
                            "price_column" => "price",
                            "marketplace_sku" => "asin",
                            "marketplace_url_slug" => "asin",
                            "quantity_column" => "qty",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"amazon_selling_price_log" ,
                            "price_id_column" => "amazon_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"amazon_quantity_log" ,
                            "quantity_id_column" => "amazon_id",
                            "posting_table"=>"amazon_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("is_variation"=>array("0","1")),
                            "fees_column"=>array("amazon_fee"=>"amazon_products.amazon_fee","amazon_fba_fee"=>"amazon_products.amazon_fba_fee"),
                            "shipping_price_column"=>array("shipping_price"=>"amazon_products.shipping_price"),
                            "store_currency"=>"EUR"
                        ),
        "ebay_us" => array(
                            "store_marketplace"=>"ebay",
                            "country_convention"=>"US",
                            "store_id"=>"2",
                            "table" => "ebay_products" ,
                            "price_column" => "selling_price" ,
                            "quantity_column" => "quantity",
                            "marketplace_sku" => "ebay_item_id",
                            "marketplace_url_slug" => "ebay_item_id",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"ebay_selling_price_log" ,
                            "price_id_column" => "ebay_id",
                            "is_deleted_column" => "is_deleted_product",
                            "quantity_log_table"=>"ebay_quantity_log" ,
                            "quantity_id_column" => "ebay_id",
                            "posting_table"=>"ebay_product_posting",
                            "channel_upc"=>"ebay_product_id", 
                            "normal_product_condition"=>array("item_type"=>array("normal","variation")),
                            "store_currency"=>"USD",
                            "shipping_price_column"=>array("shipping_price"=>"ebay_products.shipping_price")
                        ),

        "ebay_uk" => array(
                            "store_marketplace"=>"ebay",
                            "country_convention"=>"UK",
                            "store_id"=>"14",
                            "table" => "ebay_products" ,
                            "price_column" => "selling_price" ,
                            "quantity_column" => "quantity",
                            "marketplace_sku" => "ebay_item_id",
                            "marketplace_url_slug" => "ebay_item_id",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"ebay_selling_price_log" ,
                            "price_id_column" => "ebay_id",
                            "is_deleted_column" => "is_deleted_product",
                            "quantity_log_table"=>"ebay_quantity_log" ,
                            "quantity_id_column" => "ebay_id",
                            "posting_table"=>"ebay_product_posting",
                            "channel_upc"=>"ebay_product_id", 
                            "normal_product_condition"=>array("item_type"=>array("normal","variation")),
                            "store_currency"=>"GBP",
                            "shipping_price_column"=>array("shipping_price"=>"ebay_products.shipping_price")
                        ),

        "ebay_au" => array(
                            "store_marketplace"=>"ebay",
                            "country_convention"=>"AU",
                            "store_id"=>"13",
                            "table" => "ebay_products" ,
                            "price_column" => "selling_price" ,
                            "quantity_column" => "quantity",
                            "marketplace_sku" => "ebay_item_id",
                            "marketplace_url_slug" => "ebay_item_id",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"ebay_selling_price_log" ,
                            "price_id_column" => "ebay_id",
                            "is_deleted_column" => "is_deleted_product",
                            "quantity_log_table"=>"ebay_quantity_log" ,
                            "quantity_id_column" => "ebay_id",
                            "posting_table"=>"ebay_product_posting",
                            "channel_upc"=>"ebay_product_id", 
                            "normal_product_condition"=>array("item_type"=>array("normal","variation")),
                            "store_currency"=>"AUD",
                            "shipping_price_column"=>array("shipping_price"=>"ebay_products.shipping_price")
                        ),

        "overstock" => array(
                            "store_marketplace"=>"overstock",
                            "store_id"=>"8",
                            "table" => "overstock_product" ,
                            "price_column" => "cost" ,
                            "quantity_column" => "quantity",
                            "sku_column" => "sku",
                            "marketplace_url_slug" => "sku",
                            "price_log_table"=>"overstock_selling_price_log" ,
                            "marketplace_sku" => "sku",
                            "price_id_column" => "overstock_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"overstock_quantity_log" ,
                            "quantity_id_column" => "overstock_id",
                            "posting_table"=>"overstock_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("product_type"=>array("normal","variation")),
                            "store_currency"=>"USD"
                        ),

        "jet" => array(
                            "store_marketplace"=>"jet",
                            "store_id"=>"12",
                            "table" => "jet_products" ,
                            "price_column" => "selling_price" ,
                            "quantity_column" => "quantity",
                            "sku_column" => "sku",
                            "marketplace_url_slug" => "jet_sku" ,
                            "marketplace_sku" => "jet_sku",
                            "price_log_table"=>"jet_selling_price_log" ,
                            "price_id_column" => "jet_id",
                            "is_deleted_column" => "is_deleted_product",
                            "quantity_log_table"=>"jet_quantity_log" ,
                            "quantity_id_column" => "jet_id",
                            "posting_table"=>"jet_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array("product_type"=>array("normal","variation")),
                            "store_currency"=>"USD"
                        ),

        //"rakuten"   =>   array("table" => "rakuten_product" , "price_column" => "price" ,"sku_column" => "sku" , "price_log_table"=>"rakuten_selling_price_log" , "price_id_column" => "rakuten_id"),

        "walmart_us" => array(
                            "store_marketplace"=>"walmart",
                            "store_id"=>"9",
                            "table" => "walmart_products" ,
                            "price_column" => "selling_price",
                            "quantity_column" => "quantity",
                            "sku_column" => "sku",
                            "marketplace_url_slug" => "wpid",
                            "marketplace_sku" => "wpid",
                            "price_log_table"=>"walmart_selling_price_log" ,
                            "price_id_column" => "walmart_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"walmart_quantity_log" ,
                            "quantity_id_column" => "walmart_id",
                            "posting_table"=>"walmart_product_posting",
                            "channel_upc"=>"upc",
                            "normal_product_condition"=>array("product_type"=>array("normal","variation")),
                            "store_currency"=>"USD"
                        ),

        "newegg" => array(
                            "store_marketplace"=>"newegg",
                            "store_id"=>"18",
                            "table" => "newegg_products" ,
                            "price_column" => "selling_price",
                            "quantity_column" => "quantity",
                            "sku_column" => "sku",
                            "marketplace_url_slug" => "newegg_id",
                            "marketplace_sku" => "newegg_id",
                            "price_log_table"=>"newegg_selling_price_log" ,
                            "price_id_column" => "newegg_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"newegg_quantity_log" ,
                            "quantity_id_column" => "newegg_product_id",
                            "posting_table"=>"newegg_product_posting",
                            "channel_upc"=>"upc",
                            "normal_product_condition"=>array("product_type"=>array("normal","variation")),
                            "store_currency"=>"USD"
                        ),

        "newegg_biz" => array(
                            "store_marketplace"=>"newegg_biz",
                            "store_id"=>"16",
                            "table" => "newegg_business_products" ,
                            "price_column" => "selling_price",
                            "quantity_column" => "quantity",
                            "sku_column" => "sku",
                            "marketplace_url_slug" => "newegg_biz_id",
                            "marketplace_sku" => "newegg_biz_id",
                            "price_log_table"=>"newegg_business_selling_price_log" ,
                            "price_id_column" => "newegg_biz_id",
                            "is_deleted_column" => "is_active",
                            "quantity_log_table"=>"newegg_business_quantity_log" ,
                            "quantity_id_column" => "newegg_biz_id",
                            "posting_table"=>"newegg_business_product_posting",
                            "channel_upc"=>"upc",
                            "normal_product_condition"=>array("product_type"=>array("normal","variation")),
                            "store_currency"=>"USD"
                        ),

        "bonanza" => array(
                        "store_marketplace"=>"bonanza",
                        "store_id"=>"17",
                        "table" => "bonanza_products" ,
                        "price_column" => "current_price",
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "bonanza_product_id",
                        "marketplace_sku" => "bonanza_product_id",
                        "price_log_table"=>"bonanza_selling_price_log" ,
                        "price_id_column" => "bonanza_id",
                        "is_deleted_column" => "is_active",
                        "quantity_log_table"=>"bonanza_quantity_log" ,
                        "quantity_id_column" => "bonanza_id",
                        "posting_table"=>"bonanza_product_posting",
                        "channel_upc"=>"upc",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation")),
                        "store_currency"=>"USD"
                    ),

        "tanga" => array(
                        "store_marketplace"=>"tanga",
                        "store_id"=>"24",
                        "table" => "tanga_products" ,
                        "price_column" => "current_price",
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "product_id",
                        "marketplace_sku" => "product_id",
                        "price_log_table"=>"tanga_selling_price_log" ,
                        "price_id_column" => "tanga_id",
                        "is_deleted_column" => "is_deleted",
                        "quantity_log_table"=>"tanga_quantity_log" ,
                        "quantity_id_column" => "tanga_id",
                        "posting_table"=>"tanga_product_posting",
                        "channel_upc"=>"upc",
                        "store_currency"=>"USD",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))
                    ),
         "rakuten_us" => array(
                        "store_marketplace"=>"rakuten",
                        "store_id"=>"4",
                        "table" => "rakuten_product" ,
                        "price_column" => "price",
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "sku",
                        "marketplace_sku" => "sku",
                        "price_log_table"=>"rakuten_quantity_log" ,
                        "price_id_column" => "rakuten_id",
                        "quantity_log_table"=>"rakuten_quantity_log" ,
                        "quantity_id_column" => "rakuten_id",
                        "posting_table"=>"rakuten_product_posting",
                        "channel_upc"=>"upc",
                        "store_currency"=>"USD",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))
                    ),
          "etsy_us" => array(
                        "store_marketplace"=>"etsy",
                        "store_id"=>"28",
                        "table" => "etsy_products" ,
                        "price_column" => "price",
                        "quantity_column" => "quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "listing_id",
                        "marketplace_sku" => "listing_id",
                        "price_log_table"=>"etsy_selling_price_log" ,
                        "price_id_column" => "etsy_id",
                        "quantity_log_table"=>"etsy_quantity_log" ,
                        "quantity_id_column" => "rakuten_id",
                        "posting_table"=>"etsy_product_posting",
                        "channel_upc"=>"upc",
                        "store_currency"=>"USD",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))
                    ),
          "sears" => array(
                        "store_marketplace"=>"sears",
                        "store_id"=>"21",
                        "table" => "sears_products" ,
                        "price_column" => "standard_price",
                        "quantity_column" => "on_hand_quantity",
                        "sku_column" => "sku",
                        "marketplace_url_slug" => "sku",
                        "marketplace_sku" => "sku",
                        "price_log_table"=>"sears_selling_price_log" ,
                        "price_id_column" => "sears_id",
                        "quantity_log_table"=>"sears_quantity_log" ,
                        "quantity_id_column" => "sears_id",
                        "posting_table"=>"sears_product_posting",
                        "channel_upc"=>"upc",
                        "store_currency"=>"USD",
                        "normal_product_condition"=>array("product_type"=>array("normal","variation"))
                    ),
          "shopify" => array(
                            "store_marketplace"=>"shopify",
                            "country_convention"=>"US",
                            "store_id"=>"3",
                            "table" => "shopify_products" ,
                            "price_column" => "price" ,
                            "quantity_column" => "quantity",
                            "marketplace_sku" => "sku",
                            "marketplace_url_slug" => "sku",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"shopify_selling_price_log" ,
                            "price_id_column" => "shopify_id",
                            "is_deleted_column" => "is_deleted_product",
                            "quantity_log_table"=>"shopify_quantity_log" ,
                            "quantity_id_column" => "shopify_id",
                            "posting_table"=>"shopify_product_posting",
                            "channel_upc"=>"sku", 
                            "normal_product_condition"=>array("is_variation"=>'0'),
                            "store_currency"=>"USD",
                            "shipping_price_column"=>array("shipping_price"=>"shopify_products.shipping_price")
                        ),
          "wayfair" => array(
                            "store_marketplace"=>"wayfair",
                            "country_convention"=>"US",
                            "store_id"=>"20",
                            "table" => "wayfair_products" ,
                            "price_column" => "selling_price" ,
                            "quantity_column" => "quantity",
                            "marketplace_sku" => "wayfair_id",
                            "marketplace_url_slug" => "wayfair_id",
                            "sku_column" => "sku" ,
                            "price_log_table"=>"wayfair_selling_price_log" ,
                            "price_id_column" => "wayfair_id",
                            "is_deleted_column" => "is_deleted_product",
                            "quantity_log_table"=>"wayfair_quantity_log" ,
                            "quantity_id_column" => "wayfair_id",
                            "posting_table"=>"wayfair_product_posting",
                            "channel_upc"=>"upc", 
                            "store_currency"=>"USD"
                        ),

        "google_us" =>  array(
                            "store_marketplace"=>"google",
                            "country_convention"=>"US",
                            "store_id"=>"39",
                            "table" => "google_products" , 
                            "price_column" => "selling_price",
                            "marketplace_sku" => "upc",
                            "marketplace_url_slug" => "upc", 
                            "quantity_column" => "quantity",
                            "sku_column" => "sku" , 
                            "price_log_table"=>"google_selling_price_log" , 
                            "price_id_column" => "google_id",
                            "is_deleted_column" => "is_deleted_product",
                            "quantity_log_table"=>"google_quantity_log", 
                            "quantity_id_column" => "google_id",
                            "posting_table"=>"google_product_posting",
                            "channel_upc"=>"upc", 
                            "normal_product_condition"=>array(),
                            "shipping_price_column"=>array("shipping_price"=>"google_products.shipping_price"),
                            "store_currency"=>"USD"
                        ),
    );
}

    /*
    @Description : get Sales history day range
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function fba_shipment_sales_history_day_range()
    {
        $day_range = array( 
            '2'     =>  '2 day sales',
            '7'     =>  '7 day sales',
            '30'    =>  '30 day sales',
            '60'    =>  '60 day sales',
            '90'    =>  '90 day sales',
            '180'   =>  '180 day sales',
            );
        return $day_range;
    }
    /*
    @Description : get Sales history day range
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function fba_shipment_cover_day_range()
    {
        $day_range = array( 
            '2'     =>  '2 day cover',
            '7'     =>  '7 day cover',
            '30'    =>  '30 day cover',
            '60'    =>  '60 day cover',
            '90'    =>  '90 day cover',
            '180'   =>  '180 day cover',
            );
        return $day_range;
    }

    /*
    @Description : get Sales history day range
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function marketplace_shipment_sales_history_day_range()
    {
        $day_range = array( 
            '2'     =>  '2 day sales',
            '7'     =>  '7 day sales',
            '30'    =>  '30 day sales',
            '60'    =>  '60 day sales',
            '90'    =>  '90 day sales',
            '180'   =>  '180 day sales',
        );
        return $day_range;
    }

    /*
    @Description : get Sales history day range
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function fba_prep_preference()
    {
        $fba_prep_preference = array( 
            'seller'     =>  'SELLER LABEL',
            'amazon'     =>  'AMAZON LABEL ONLY',
            );
        return $fba_prep_preference;
    }
    /*
    @Description : get Sales history day range
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function fba_prep_instruction()
    {
        $fba_prep_instruction = array( 
            'BlackShrinkWrapping'     =>  'BlackShrinkWrapping',
            'BubbleWrapping'    =>  'BubbleWrapping',
            'HangGarment'       =>  'HangGarment',
            'Labeling'          =>  'Labeling',
            'Polybagging'       =>  'Polybagging',
            'Taping'            =>  'Taping',
            );
        return $fba_prep_instruction;
    }
    /*
    @Description : get fba carriers
    @Author      : Mehul Modh
    @Output      : return carriers
    @Date        : 18-01-2017
    */
    function fba_carriers()
    {
        $fba_carriers = array( 
            'DHL_EXPRESS_USA_INC'       =>  'DHL EXPRESS USA INC',
            'FEDERAL_EXPRESS_CORP'      =>  'FEDERAL EXPRESS CORP',
            'UNITED_STATES_POSTAL_SERVICE'  =>  'UNITED STATES POSTAL SERVICE',
            'UNITED_PARCEL_SERVICE_INC'     =>  'UNITED PARCEL SERVICE INC',
            'OTHER'                     =>  'OTHER',
            );
        return $fba_carriers;
    }
    /*
    @Description : get fba carriers
    @Author      : Mehul Modh
    @Output      : return carriers
    @Date        : 18-01-2017
    */
    function fba_system_transport_status()
    {
        $system_transport_status = array( 
            '0' =>  'Pending transport info',
            '1' =>  'Transport info confirmed',
            '2' =>  'Transport info posted on Amazon',
            '3' =>  'Fetching estimate cost',
            '4' =>  'Pending confirm estimate cost',
            '5' =>  'Estimation cost confirmed',
            '6' =>  'Estimation cost confirmed',
            '7' =>  'Labels generated',
        );
        return $system_transport_status;
    }
    function get_ebay_gallery_type()
    {
        return array("None"=>"None","Featured"=>"Featured","Gallery"=>"Gallery","Plus"=>"Plus");
    }
    function get_ebay_product_hit_count_type()
    {
        return array(
            'BasicStyle' => 'BasicStyle',
            'CustomCode' => 'CustomCode',
            'GreenLED'   => 'GreenLED',
            'Hidden'     => 'Hidden',
            'HiddenStyle' => 'HiddenStyle',
            'HonestyStyle' => 'HonestyStyle',
            'NoHitCounter' => 'NoHitCounter',
            'RetroStyle' => 'RetroStyle'
            );
    }
    function get_ebay_listing_duration_type()
    {
        return array(
            'Days_3'  => 'Days_3',
            'Days_5'  => 'Days_5',
            'Days_7'  => 'Days_7',
            'Days_10' => 'Days_10',
            'Days_30' => 'Days_30',
            'GTC'     => 'GTC'
            );
    }

    function get_shipping_service_url_new($tracking_number,$carrier_name,$carrier_code,$ship_method)
    {
        $carrier_name = strtolower($carrier_name);
        $carrier_code = strtolower($carrier_code);
        $ship_method = strtolower($ship_method);

        $carrier_code = ($carrier_code == '' || strtolower($carrier_code) == 'other') ? trim($carrier_name) :  trim($carrier_code);
        
        $ship_method = ($ship_method == '' || $ship_method == NULL) ? 'default' : trim($ship_method);

        $service['USPS'] = array(
                            
                            'USPSFirstClass' => "https://tools.usps.com/go/TrackConfirmAction.action?tRef=fullpage&tLc=1&text28777=&tLabels=$tracking_number",

                            'FedEx SmartPost Standard Mail' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'UPS Mail Innovations Expedited' => "https://www.ups-mi.net/packageID/PackageID.aspx?PID=$tracking_number",

                            'IPA'   => "https://dm.mytracking.net/APC/Track/TrackDetails.aspx?t=$tracking_number",

                            'PC'    => "https://dm.mytracking.net/APC/Track/TrackDetails.aspx?t=$tracking_number",

                            'default' => "https://tools.usps.com/go/TrackConfirmAction.action?tRef=fullpage&tLc=1&text28777=&tLabels=$tracking_number",    
                        );

        $service['EndiciaAPI'] = array(

                            'USPS Priority' => "https://tools.usps.com/go/TrackConfirmAction.action?tRef=fullpage&tLc=1&text28777=&tLabels=$tracking_number",
                            'default' => "https://tools.usps.com/go/TrackConfirmAction.action?tRef=fullpage&tLc=1&text28777=&tLabels=$tracking_number"
                        );

        $service['APC'] = array(
                            
                            'IPA'   => "https://dm.mytracking.net/APC/Track/TrackDetails.aspx?t=$tracking_number",

                            'PC'    => "https://dm.mytracking.net/APC/Track/TrackDetails.aspx?t=$tracking_number",

                            'default'    => "https://dm.mytracking.net/APC/Track/TrackDetails.aspx?t=$tracking_number",

                        );

        $service['OSM'] = array(
                            
                            'PARCEL_SELECT'      => "https://osmart.osmworldwide.us/tracking/results?trackingNumbers=$tracking_number",
                            
                            'LIGHTWEIGHT_PARCEL' => "https://osmart.osmworldwide.us/tracking/results?trackingNumbers=$tracking_number",

                            'default'    => "https://osmart.osmworldwide.us/tracking/results?trackingNumbers=$tracking_number",

                        );
       
        $service['FedEx'] = array(
                            
                            'FedEx SmartPost Standard Mail' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'UPS Mail Innovations Expedited' => "https://www.ups-mi.net/packageID/PackageID.aspx?PID=$tracking_number",

                            
                            'Expedited' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'Standard' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'FedEx Home Delivery'=>"https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'FedExHomeDelivery' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'default' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",   

                        );
        
        $service['FedExAPI'] = array(
                            
                            'FedEx SmartPost Standard Mail' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'FedEx Home Delivery'=>"https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                             'FedExHomeDelivery' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'default' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                        );  

        $service['FedExShipManager'] = array(
                            
                            'FedEx SmartPost Standard Mail' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'FedEx Home Delivery'=>"https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                             'FedExHomeDelivery' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'default' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                        ); 

        $service['None'] = array(
                            
                            'FedEx SmartPost Standard Mail' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'FedEx Home Delivery'=>"https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                             'FedExHomeDelivery' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'default' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'USPSFirstClass' => "https://tools.usps.com/go/TrackConfirmAction.action?tRef=fullpage&tLc=1&text28777=&tLabels=$tracking_number",

                            'UPS Mail Innovations Expedited' => "https://www.ups-mi.net/packageID/PackageID.aspx?PID=$tracking_number",

                            'M4' => "https://www.ups-mi.net/packageID/PackageID.aspx?PID=$tracking_number",

                        ); 


        $service['UPS'] = array(

                            'FedEx SmartPost Standard Mail' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'UPS Mail Innovations Expedited' => "https://www.ups-mi.net/packageID/PackageID.aspx?PID=$tracking_number",

                            'M4' => "https://www.ups-mi.net/packageID/PackageID.aspx?PID=$tracking_number",

                            'UPS Ground' => "https://wwwapps.ups.com/WebTracking/processRequest?tracknums_displayed=1&TypeOfInquiryNumber=T&InquiryNumber1=$tracking_number",

                            'default' => "https://wwwapps.ups.com/WebTracking/processRequest?tracknums_displayed=1&TypeOfInquiryNumber=T&InquiryNumber1=$tracking_number",

                        );

        $service['UPSM'] = array(

                            'Standard' => "https://wwwapps.ups.com/WebTracking/processRequest?tracknums_displayed=1&TypeOfInquiryNumber=T&InquiryNumber1=$tracking_number",

                            'default' => "https://wwwapps.ups.com/WebTracking/processRequest?tracknums_displayed=1&TypeOfInquiryNumber=T&InquiryNumber1=$tracking_number",

                        );

          $service['UPSAPI'] = array(

                            'FedEx SmartPost Standard Mail' => "https://www.fedex.com/apps/fedextrack/?action=track&cntry_code=us&tracknumber_list=$tracking_number&language=english",

                            'UPS Mail Innovations Expedited' => "https://www.ups-mi.net/packageID/PackageID.aspx?PID=$tracking_number",

                            'UPS Mail Innovations Economy' => "https://www.ups-mi.net/packageID/PackageID.aspx?PID=$tracking_number",

                            'UPS Ground' => "https://wwwapps.ups.com/WebTracking/processRequest?tracknums_displayed=1&TypeOfInquiryNumber=T&InquiryNumber1=$tracking_number",  

                             'M4' => "https://www.ups-mi.net/packageID/PackageID.aspx?PID=$tracking_number",  

                            'default' => "https://wwwapps.ups.com/WebTracking/processRequest?tracknums_displayed=1&TypeOfInquiryNumber=T&InquiryNumber1=$tracking_number",

                        );

        $service = array_change_key_case($service, CASE_LOWER);

        if (isset($service[(string)$carrier_code]))
        {
            return (isset($service[(string)$carrier_code][(string)$ship_method])) ? $service[(string)$carrier_code][(string)$ship_method] : $service[(string)$carrier_code]['default'];     
        }

        return '';    
    }

    function get_shipping_service_url($tracking_number,$key)
    {   
        $servie = array(
            'FedEx'                  =>"https://www.fedex.com/apps/fedextrack/?action=track&trackingnumber=$tracking_number",
            'Fedex'                  =>"https://www.fedex.com/apps/fedextrack/?action=track&trackingnumber=$tracking_number",
            'FEDEX'                  =>"https://www.fedex.com/apps/fedextrack/?action=track&trackingnumber=$tracking_number",
            'fedex'                  =>"https://www.fedex.com/apps/fedextrack/?action=track&trackingnumber=$tracking_number",
            'FedExAPI'               =>"https://www.fedex.com/apps/fedextrack/?action=track&trackingnumber=$tracking_number",
            'FedExShipManager'        =>"https://www.fedex.com/apps/fedextrack/?action=track&trackingnumber=$tracking_number",
            'USPS'                   =>"https://tools.usps.com/go/TrackConfirmAction?tRef=fullpage&tLc=2&text28777=&tLabels=$tracking_number",
            'UPS'                    =>"https://www.ups-mi.net/packageID/PackageID.aspx?PID=$tracking_number",
            'UPSAPI'                    =>"https://wwwapps.ups.com/WebTracking/track",
            'UPSMI'                  =>"https://www.ups-mi.net/packageid/",
            'DHL Global Mail'        =>"https://webtrack.dhlglobalmail.com/?trackingnumber=$tracking_number",
            'Fastway'                =>"https://www.fastway.com.au/courier-services/track-your-parcel",
            'FASTWAYCOURIERS'        =>"https://www.fastway.com.au/courier-services/track-your-parcel",
            'UPS Mail Innovations'   =>"https://www.ups-mi.net/packageid/",
            'Lasership'              =>"https://track.aftership.com/lasership/$tracking_number",
            'Royal Mail'             =>"https://www.royalmail.com/track-your-item",
            'FedEx SmartPost'        =>"https://www.fedex.com/us/smart-post/outbound.html",
            'OSM'                    =>"https://osmart.osmworldwide.us/tracking/results?trackingNumbers=$tracking_number",
            'Newgistics'             =>"https://www.tracking.smartlabel.com/",
            'Canada Post'            =>"https://www.canadapost.ca/cpotools/apps/track/personal/findByTrackNumber?execution=e1s1",
            'City Link'              =>"https://www.citylinkexpress.com/MY/Tracking.aspx",
            'GLS'                    =>"https://gls-group.eu/EU/en/parcel-tracking",
            'Hermes Logistik Gruppe' =>"https://www.hermes-europe.co.uk/tracker.html",
            'Hermes'                 =>"https://www.hermes-europe.co.uk/tracker.html",
            'Parcelforce'            =>"https://www.parcelforce.com/track-trace",
            'SagawaExpress'          =>"https://k2k.sagawa-exp.co.jp/p/sagawa/web/okurijosearcheng.jsp",
            'NipponExpress'          =>"https://www52.nittsu.co.jp/AIRTRAIL/html/HOWTOE.html",
            'YamatoTransport'        =>"https://track.kuronekoyamato.co.jp/english/tracking",
            'A1CourierServices'      =>"https://www.a1express.com/courier/track.asp",
            'ABF'                    =>"https://arcb.com/tools/tracking.html#/$tracking_number",
            'AeroPost'               =>"https://aeropost.com/site/en/country-picker",
            'ALLIEDEXPRESS'          =>"https://www.alliedexpress.com.au/",
            'AMWST'                  =>"https://shipment.co/tracking/amway",
            'AnPost'                 =>"https://track.anpost.ie/",
            'APC'                    =>"https://www.trackingex.com/apc-tracking.html?search=$tracking_number",
            'ARAMEX'                 =>"https://www.aramex.com/track/shipments/",
            'ARVATO'                 =>"https://arvato-tracking.arvato-scm.net/arvato_Portal/index.jsp",
            'ASM'                    =>"https://www.asmred.com/en/",
            'AustralianAirExpress'   =>"https://www.expresstracking.org/aae/australian-air-express-tracking-result/?no=$tracking_number",
            'AustraliaPost'          =>"https://auspost.com.au/parcels-mail/track.html#/track",
            'AVRT'                   =>"https://www.averittexpress.com/public/help/track/trackByPickupNumber.jsp",
            'Bartolini'              =>"https://www.brt.it/en/index.do",
            'BELGIANPOST'            =>"https://track.bpost.be/btr/web/#/home?lang=en",
            'BluePackage'            =>"https://www.bluepackage.com/tracking/",
            'BPost'                  =>"https://track.bpost.be/btr/web/#/home?lang=en",
            'BusinessPost'           =>"https://www.business-post.com/scripts/wsisa.dll/ws_quickpod.html",
            'CanPar'                 =>"https://www.canpar.ca/en/track/tracking.jsp",
            'CENF'                   =>"https://www.centralfreight.com/website/mf/mfInquiry.aspx?inqmode=PRO",
            'CEVA'                   =>"https://www.cevalogistics.com/form/shipment-tracking",
            'ChinaPost'              =>"https://track-chinapost.com/startairmail.php?code=$tracking_number",
            'Chronoexpres'           =>"https://www.chronopost.fr/en/private/track-your-parcel",
            'CHUKOU1'                =>"https://track24.net/service/CHUK/tracking/$tracking_number",
            'ChunghwaPost'           =>"www.post.gov.tw/",
            'CitiPost'               =>"https://couriertrack.in/citiposttrack.php?cr=citiposttrack.php&tno=$tracking_number&track=+Track",
            'CityLink'               =>"https://www.citylinkexpress.com/MY/Tracking.aspx",
            'ClickandQuick'          =>"https://www.parcelcode.com/courier/ClickAndQuick",
            'CNWY'                   =>"https://ltl.xpo.com/webapp/manifestrpts_p_app/Tracking/Tracking.jsp",
            'ColiposteDomestic'      =>"https://www.laposte.fr/particulier/outils/en/track-a-parcel",
            'LAPOSTE'                =>"https://www.laposte.fr/particulier/outils/en/track-a-parcel",
            'ColiposteInternational' =>"https://www.laposte.fr/particulier/outils/en/track-a-parcel",
            'Colissimo'              =>"https://www.laposte.fr/particulier/colissimo",
            'CollectPlus'            =>"https://www.collectplus.co.uk/track/$tracking_number",
            'Correos'                =>"https://www.correos.es/ss/Satellite/site/pagina-localizador_envios/busqueda-sidioma=en_GB",
            'CPC'                    =>"https://www.canadapost.ca/cpotools/apps/track/personal/findByTrackNumber?execution=e1s1",
            'DAIPost'                =>"https://www.daipost.com/",
            'DayandRoss'             =>"https://dayross.com/track/shipment/",
            'DBSchenker'             =>"https://eschenker.dbschenker.com/nges-portal/public/en-US_US/#!/tracking/schenker-search?refNumber=$tracking_number",
            'DeutschePost'           =>"https://www.deutschepost.de/sendung/simpleQuery.html?locale=en_GB",
            'DHLEXPRESS'             =>"https://www.dhl.co.in/en/express/tracking.html?AWB=$tracking_number&brand=DHL",
            'DHL'                    =>"https://www.dhl.co.in/en/express/tracking.html?AWB=$tracking_number&brand=DHL",
            'DieSchweizerischePost'  =>"https://www.post.ch/de",
            'DPD'                    =>"https://www.dpd.com/tracking",
            'DPXThailand'            =>"https://www.dpex.com/Tools-And-Applications/Track-And-Trace?cn=$tracking_number",
            'Ducros'                 =>"https://www.henriducros.fr/fr/",
            'EGO'                    =>"https://ego.co.uk/delivery",
            'EMF'                    =>"https://www.ems.post/tracking",
            'FedExSmartPost'         =>"https://www.fedex.com/us/smart-post/outbound.html",
            'FLYT'                   =>"https://www.flytexpress.com/",
            'FLYTExpress'            =>"https://www.flytexpress.com/",
            'FourPX'                 =>"https://express.4px.com/",
            'FourPXCHINA'            =>"https://express.4px.com/",
            'FourPXExpress'          =>"https://express.4px.com/",
            'FourPXLTD'              =>"https://express.4px.com/",
            'FTFT'                   =>"https://www.ftd.nz/",
            'HDUSA'                  =>"https://www.homedirectusa.com/hdusaoms/home.html",
            'HomeDeliveryNetwork'    =>"https://www.yodel.co.uk/",
            'HongKongPost'           =>"https://www.hongkongpost.hk/en/mail_tracking/",
            'HUNTEREXPRESS'          =>"https://www.hunterexpress.com.au/home",
            'iLoxx'                  =>"https://www.iloxx.de/net/einzelversand/tracking.aspx",
            'IndiaPost'              =>"https://www.indiapost.gov.in/VAS/Pages/trackconsignment.aspx",
            'IndonesiaPost'          =>"https://ems.posindonesia.co.id/",
            'Interlink'              =>"https://www.dpdlocal.co.uk/apps/tracking/?reference=$tracking_number#results",
            'InterPost'              =>"https://www.trackyourparcel.eu/",
            'IoInvio'                =>"https://www.ioinvio.it/",
            'Iparcel'                =>"https://tracking.i-parcel.com/?TrackingNumber=$tracking_number/",
            'IsraelPost'             =>"https://www.israelpost.co.il/itemtrace.nsf/mainsearchNOHE?OpenForm&L=EN",
            'JapanPost'              =>"https://www.post.japanpost.jp/int/ems/index_en.html",
            'KIALA'                  =>"https://www.kiala.com/tnt",
            'KoreaPost'              =>"https://www.koreapost.go.kr/kpost/index.do",
            'Landmark'               =>"https://landmarkglobal.com/welcome",
            'LDSO'                   =>"https://arcb.com/tools/tracking.html#/$tracking_number",
            'LTL'                    =>"https://ltl.upsfreight.com/shipping/tracking/index.aspx",
            'MALAYSIAPOST'           =>"https://www.pos.com.my/",
            'MannaFreight'           =>"https://schedulemydelivery.com/",
            'Metapack'               =>"https://dm.metapack.com/metatrack/",
            'MNGTurkey'              =>"https://www.mngkargo.com.tr/en/",
            'MondialRelay'           =>"https://www.mondialrelay.fr/suivi-de-colis/",
            'MRW'                    =>"https://www.mrw.es/",
            'MSI'                    =>"https://msi.4myrebate.com/Claim/TrackaRebate",
            'Nacex'                  =>"https://www.nacex.es/irHome.do",
            'NEMF'                   =>"https://nemfweb.nemf.com/shptrack.nsf/request?openagent=1&pro=$tracking_number&submit=Track",
            'ODFL'                   =>"https://www.odfl.com/Trace/standard.faces",
            'ONTRACK'                =>"https://www.ontrac.com/tracking.asp",
            'OnTrac'                 =>"https://www.ontrac.com/tracking.asp",
            'OsterreichischePostAG'  =>"https://www.post.at/en/track_trace.php",
            'OVNT'                   =>"https://www.findeen.co.uk/ovnt_courier_tracking.html",
            'ParcelPool'             =>"https://www.expresstracking.org/parcelpool/parcelpool-tracking-result/?no=$tracking_number",
            'Philpost'               =>"https://tnt.phlpost.gov.ph/index/",
            'Pilot'                  =>"https://www.pilotdelivers.com/tracking/",
            'PITD'                   =>"https://works.pittohio.com/myPittOhio/",
            'PocztaPolska'           =>"https://emonitoring.poczta-polska.pl/?lang=en",
            'Pocztex'                =>"https://www.pocztex.pl/sledzenie-przesylek/",
            'PosteItaliane'          =>"https://www.poste.it/",
            'PostNL'                 =>"https://www.postnl.post/tracktrace",
            'PostNordNorway'         =>"https://www.postnord.no/en/tools/track-and-transport-tools/nordic-track-and-trace#dynamicloading=true&shipmentid=$tracking_number",
            'Prestige'               =>"https://www.prestigedelivery.com/trackpackage.aspx",
            'Quantium'               =>"https://track.quantiumsolutions.com/",
            'RETL'                   =>"https://www.reddawayregional.com/",
            'RoyalMail'              =>"https://www.royalmail.com/track-your-item",
            'RRUN'                   =>"https://www.rrts.com/Tools/Tracking/Pages/default.aspx",
            'SAIA'                   =>"https://www.saia.com/",
            'SDA'                    =>"https://www.sda.it",
            'Seur'                   =>"https://www.seur.com/es/index.html",
            'SFC'                    =>"https://www.sendfromchina.com/track/track/track",
            'SFCExpress'             =>"https://www.sendfromchina.com/track/track/track",
            'SINGAPOREPOST'          =>"https://www.singpost.com/track-items",
            'Siodemka'               =>"https://www.siodemka.com/monitoring-przesylek",
            'SkynetMalaysia'         =>"https://www.skynet.com.my/",
            'SMARTSEND'              =>"https://www.smartsend.com.au/customerService.cfm",
            'Sogetras'               =>"https://mybizportal.sogetras.it/Public/RicercaLdv.aspx?ldv=$tracking_number",
            'Spediamo'               =>"https://www.spediamo.it/ext/iframe-partner",
            'SpeeDee'                =>"https://packages.speedeedelivery.com/index.php?barcodes=$tracking_number",
            'StarTrack'              =>"https://sttrackandtrace.startrack.com.au/",
            'SwissPost'              =>"https://k2track.ch/swiss/$tracking_number",
            'TEMANDO'                =>"https://temando.com/en/track?token=$tracking_number&op=Track+Shipment&form_id=temando_tracking_form",
            'THAILANDPOST'           =>"https://www.thailandpost.com",
            'TNT'                    =>"https://www.tnt.com/express/en_in/site/shipping-tools/tracking.html?cons=$tracking_number&searchType=CON",
            'TNTEXPRESS'             =>"https://www.tnt.com/express/en_in/site/shipping-tools/tracking.html?cons=$tracking_number&searchType=CON",
            'TNTPost'                =>"https://www.tnt.com/express/en_in/site/home.html",
            'Toll'                   =>"https://online.toll.com.au/trackandtrace/traceConsignments.do?consignments=$tracking_number",
            'TPG'                    =>"https://tpg.ir/tracking.php?CNNO=$tracking_number",
            'UBI'                    =>"https://www.ubismartparcel.com/en",
            'UKMail'                 =>"https://www.ukmail.com/manage-my-delivery/manage-my-delivery",
            'USPS'                   =>"https://tools.usps.com/go/TrackConfirmAction?tRef=fullpage&tLc=2&text28777=&tLabels=$tracking_number",
            'USPSCeP'                =>"https://www.usps.com/manage/welcome.htm",
            'USPSPMI'                =>"https://www.usps.com/manage/welcome.htm",
            'VietnamPost'            =>"https://www.vnpost.vn/vi-vn/",
            'WATKINS'                =>"https://wksh.com/ExternalTracker.aspx",
            'Winit'                  =>"https://www.winitamerica.com/index.php/services/",
            'Wise'                   =>"https://www.shwise.cn/",
            'WNdirect'               =>"https://wndirect.com/tracking.php?type=TR&ref=$tracking_number&submit=#",
            'WPX'                    =>"https://www.wpx.com/tracking/",
            'YANWEN'                 =>"https://www.yw56.com.cn/",
            'Yodel'                  =>"https://www.yodel.co.uk/track/",
            'YRC'                    =>"https://yrc.com/",
            'GO!'                    =>"https://www.general-overnight.com/de-en/Online-Service/Shipment-tracking",
            'Blue Package'           =>"https://www.bluepackage.com/tracking/",
            'Target'                 =>"https://www.target.com/c/target-shipping/-/N-551st",
            'EndiciaAPI'             =>"https://www.endicia.com/status/",
            "amazon logistics"       =>"https://logistics.amazon.com/"
            );

        return (isset($servie[(string)$key])) ? $servie[$key] : '';
    }
    function get_days( $days ='')
    { 
        return array(
            '0' => 'Sunday',
            '1' => 'Monday',
            '2' => 'Tuesday',
            '3' => 'Wednesday',
            '4' => 'Thursday',
            '5' => 'Friday',
            '6' => 'Saturday'
        );
    }
function get_product_marketplace_pushed_to_be_posted_marketplace_array()
{
    return array(
                                                'Amazon'    => 'amazon',
                                                'Ebay'      => 'ebay',
                                                'Walmart'   => 'walmart',
                                                'Jet'       => 'jet',
                                                'Overstock' => 'overstock'
                );
}
function get_store_icon_url($store_type = '')
{   
    $CI = &get_instance();
    $store_type = strtolower($store_type);
    $images_url = $CI->config->item('images_path');
    $store_url = array(
        'amazon'    => 'icon-p-amazon.png',
        'ebay'      => 'icon-p-ebay.png',
        'walmart'   => 'icon-p-walmart.png',
        'rakuten'   => 'icon-p-rakuten.png',
        'overstock' => 'icon-p-overstock.png',
        'shopify'   => 'icon-p-shopify.png',
        'jet'       => 'jet-icon.png',
        'groupon'   => 'icon-groupon.png',
        'manual'    => 'icon-p-manual.png',
        'replace'   => 'icon-p-replace-manual-order.png',
        'newegg_com' => 'icon-p-newegg.png',
        'newegg_biz' => 'icon-p-newegg-business.jpg',
        'newegg' => 'icon-p-newegg.png',
        'newegg biz' => 'icon-p-newegg-business.jpg',
        'bonanza'   => 'icon-bonanza.png',
        'wayfair'   =>'icon-p-wayfair.png',
        'woot' => 'icon-woot.png',
        'tanga' => 'icon-tanga.png',
        'sears' => 'icon-p-sears.jpg',
        'etsy' => 'icon-p-etsy.png',
        'google'=> 'icon-p-google.png',
        );
   return (isset($store_url[$store_type])) ?  $images_url.$store_url[$store_type] : '';
}
function get_store_product_url($store_type = NULL,$marketplace_sku=NULL)
{   
    $CI = &get_instance();
    $store_type = strtolower($store_type);
    if($store_type != '' && $marketplace_sku != '')
    {
        $store_url = array(
            'amazon'     => 'https://www.amazon.com/dp/'.$marketplace_sku,
            'amazon_us'  => 'https://www.amazon.com/dp/'.$marketplace_sku,
            'amazon_ca'  => 'https://www.amazon.ca/dp/'.$marketplace_sku,
            'amazon_br'  => 'https://www.amazon.com.br/dp/'.$marketplace_sku,
            'amazon_uk'  => 'https://www.amazon.co.uk/dp/'.$marketplace_sku,
            'amazon_fr'  => 'https://www.amazon.fr/dp/'.$marketplace_sku,
            'amazon_de'  => 'https://www.amazon.de/dp/'.$marketplace_sku,
            'amazon_it'  => 'https://www.amazon.it/dp/'.$marketplace_sku,
            'amazon_es'  => 'https://www.amazon.es/dp/'.$marketplace_sku,
            'amazon_au'  => 'https://www.amazon.com.au/dp/'.$marketplace_sku,
            'ebay'       => 'https://www.ebay.com/itm/'.$marketplace_sku,
            'ebay_us'    => 'https://www.ebay.com/itm/'.$marketplace_sku,
            'ebay_uk'    => 'https://www.ebay.co.uk/itm/'.$marketplace_sku,
            'ebay_au'    => 'https://www.ebay.com.au/itm/'.$marketplace_sku,
            'walmart_us' => 'https://www.walmart.com/ip/'.$marketplace_sku,
            'rakuten_us' => 'https://www.rakuten.com/shop/tntdeals/product/'.$marketplace_sku,
            // 'overstock'  => 'https://www.overstock.com/'.$marketplace_sku.'/product.html',
            'jet'        => 'https://jet.com/search?term='.$marketplace_sku,
            'bonanza'    => 'https://www.bonanza.com/listings/'.$marketplace_sku,
            'newegg_com' => 'https://www.newegg.com/Product/Product.aspx?Item='.$marketplace_sku,
            'newegg_biz' => 'https://www.neweggbusiness.com/product/product.aspx?item='.$marketplace_sku,
            'etsy_us'    => 'https://www.etsy.com/listing/'.$marketplace_sku,
            'sears'      => 'https://www.sears.com/search='.$marketplace_sku,
            'groupon'    => 'icon-groupon.png',
            'manual'     => 'icon-p-manual.png',
            'replace'    => 'icon-p-replace-manual-order.png',
            'shopify(tlg)'=> 'https://www.thorntonsluxurygoods.com/products/',
            'shopify(tas)'=> 'https://thorntonsartsupply.com/products/',
            'shopify(pnm)'=> 'https://www.pensnmore.com/products/',
            'wayfair'     => 'https://www.wayfair.com/keyword.php?keyword='.$marketplace_sku,
            'google_us'   => 'https://www.google.com/search?psb=1&tbm=shop&q='.$marketplace_sku,
            );
        return (isset($store_url[$store_type])) ?  $store_url[$store_type] : '';
    }   
    else
    {
        return 'javascript:void(0)';
    }
}
function get_marketplace_invoice_url($data=array())
{
    extract($data);
    $url = "";
    if(isset($store_type))
    {
        switch (strtolower($store_type))
        {
            case 'ebay':
                $url = "https://k2b-bulk.ebay.com/ws/eBayISAPI.dll?EditSalesRecord&itemid={$ebay_item_id}&transid={$ebay_transaction_id}";
                break;
            case 'amazon':
                $url = "https://sellercentral.amazon.com/orders-v3/order/{$order_channel_id}";
                break;
        }
    }
    return $url;
}
    /*
        @Description : get UOM array
        @Author      : Krutin Shah
        @Output      : return array
        @Date        : 22-08-2017
    */
        function get_uom()
        {  
            $uom = array(
                    "ST - Set" =>  "ST - Set",
                    "EA - Each" =>  "EA - Each",
                    "PK - Pack" =>  "PK - Pack",
                    "DZ - Dozen" =>  "DZ - Dozen",
                    "CS - Case" =>  "CS - Case",
                    "DS - Display" =>  "DS - Display",
                    "BX - Box" =>  "BX - Box",
                    "KT - Kit" =>  "KT - Kit",
                    "RL - Roll" =>  "RL - Roll",
                    "BD - Bundle" =>  "BD - Bundle",
                    "CT - Carton" =>  "CT - Carton",
                    "PR - Pair" =>  "PR - Pair",
                    "PL - Pail" =>  "PL - Pail",
                    "BG - Bag" =>  "BG - Bag",
                    "PD - Pad" =>  "PD - Pad",
                    "RM - Ream" =>  "RM - Ream",
                    "DR - Drum" =>  "DR - Drum",
                    "GR - Gross" =>  "GR - Gross",
                    "YD - Yard" =>  "YD - Yard",
                    "FT - Feet" =>  "FT - Feet",
                    "CN - Can" =>  "CN - Can",
                    "TB - Tube" =>  "TB - Tube", 
                    "BT - Bottle" =>  "BT - Bottle",
                    "TR - Transaction" =>  "TR - Transaction",
                    "BK - Book" =>  "BK - Book",
                    "CD - Cords" =>  "CD - Cords",
                    "PA - Packet"=>"PA - Packet",
                    "RE - Reel"=>"RE - Reel",
                    "SO - Spool"=>"SO - Spool",
                    "LB - Pound"=>"LB - Pound",
                    "CX - Coil"=>"CX - Coil"
                    );
                return $uom;
            }
    function get_uom_mapping_array()
    {  
        $uom = array(
                "ST" =>  "ST - Set",
                "EA" =>  "EA - Each",
                "PK" =>  "PK - Pack",
                "PKG" =>  "PK - Pack",
                "DZ" =>  "DZ - Dozen",
                "CS" =>  "CS - Case",
                "CA" =>  "CS - Case",
                "DS" =>  "DS - Display",
                "BX" =>  "BX - Box",
                "KT" =>  "KT - Kit",
                "RL" =>  "RL - Roll",
                "ROL" =>  "RL - Roll",
                "BD" =>  "BD - Bundle",
                "CT" =>  "CT - Carton",
                "CTN" =>  "CT - Carton",
                "PR" =>  "PR - Pair",
                "PL" =>  "PL - Pail",
                "BG" =>  "BG - Bag",
                "PD" =>  "PD - Pad",
                "RM" =>  "RM - Ream",
                "DR" =>  "DR - Drum",
                "DRM" =>  "DR - Drum",
                "GR" =>  "GR - Gross",
                "YD" =>  "YD - Yard",
                "FT" =>  "FT - Feet",
                "CN" =>  "CN - Can",
                "TB" =>  "TB - Tube", 
                "BT" =>  "BT - Bottle",
                "TR" =>  "TR - Transaction",
                "BK" =>  "BK - Book",
                "CD" =>  "CD - Cords",
                "PA" =>"PA - Packet",
                "RE" =>"RE - Reel",
                "SO" =>"SO - Spool",
                "LB" =>"LB - Pound",
                "CX" =>"CX - Coil",

                "Set"         =>  "ST - Set",
                "Each"        =>  "EA - Each",
                "Pack"        =>  "PK - Pack",
                "Dozen"       =>  "DZ - Dozen",
                "Case"        =>  "CS - Case",
                "Display"     =>  "DS - Display",
                "Box"         =>  "BX - Box",
                "Kit"         =>  "KT - Kit",
                "Roll"        =>  "RL - Roll",
                "Bundle"      =>  "BD - Bundle",
                "Carton"      =>  "CT - Carton",
                "Pair"        =>  "PR - Pair",
                "Pail"        =>  "PL - Pail",
                "Bag"         =>  "BG - Bag",
                "Pad"         =>  "PD - Pad",
                "Ream"        =>  "RM - Ream",
                "Drum"        =>  "DR - Drum",
                "Gross"       =>  "GR - Gross",
                "Yard"        =>  "YD - Yard",
                "Feet"        =>  "FT - Feet",
                "Can"         =>  "CN - Can",
                "Tube"        =>  "TB - Tube", 
                "Bottle"      =>  "BT - Bottle",
                "Transaction" =>  "TR - Transaction",
                "Book"        =>  "BK - Book",
                "Cords"       =>  "CD - Cords",
                "Packet"      => "PA - Packet",
                "Reel"        => "RE - Reel",
                "Spool"       => "SO - Spool",
                "Pound"       => "LB - Pound",
                "Coil"        => "CX - Coil",

                );
            return $uom;
        }
    function get_order_return_reason()
    {
        $return_reason = array(
              'Customerfault' => 'Customer Fault',
              'Ourfault'      => 'Our Fault',
              'Shippingfault' => 'Shipping Fault',
              'Otherfault'    => 'Other Fault'
              );
        return $return_reason;
    }
    /*
    @Description : get PO status array
    @Author      : Mehul Modh
    @Output      : return array
    @Date        : 18-01-2017
    */
    function get_rma_status()
    {
        $po_status = array( 
            'Draft'     => 'Draft',
            'Open'      => 'Open',
            'OnHold'    => 'On Hold',
            'Processing'=> 'Processing',
            'Cancelled' => 'Cancelled',
            'Closed'    => 'Closed',
            );
        return $po_status;
    }
    function get_product_classfication_field_id()
    {
        return "1";
    }
    /*
    @Description : get Task Scheduler array
    @Author      : Yogesh Hotchandani
    @Output      : return array
    @Date        : 11-09-2017
    */
    function get_task_schedular_array()
    {   
        return array(
            array(
                "job_id"=> "97",
                "task_type" => "inventory_backup",
                "task_name" => "Daily Inventory Export Backup",
                "target_file_name"=>("dailyinventorybackup ".date("M-d-Y")),
                "ftp"=>
                array(
                            'ftp_user' => 'tntdealsinc',
                            'ftp_password' => 'Ya7h7chE',
                            'ftp_host' => '02aabcc.netsolhost.com',
                            'path_upload' => '/htdocs/ERP/Daily Inventory Back Up All/'
                     ),
                "run_time"  => array(
                "daily"     =>
                array(
                "week_days" =>
                    array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday")
                ),
                "time"      =>
                array
                (
                    "hour"      =>"01",
                    "minute"    => "05"
                )
                                    )
                ),
            array(
                "job_id"=> "109",
                "task_type" => "inventory_quantity_backup",
                "task_name" => "Hourly Inventory Quantity Backup",
                "target_file_name"=>("hourlyinventorybackup ".date("M-d-Y h:i")),
                "ftp"=>
                array(
                            'ftp_user' => 'tntdealsinc',
                            'ftp_password' => 'Ya7h7chE',
                            'ftp_host' => '02aabcc.netsolhost.com',
                            'path_upload' => '/htdocs/ERP/Hourly Quantity/'
                     ),
                "run_time"  => array(
                "daily"     =>
                array(
                "week_days" =>
                    array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday")
                ),
                "time"      =>
                array
                (
                    "hour"      =>"*",
                    "minute"    => "05"
                )
                                    )
                ),
                array(
                "job_id"=> "103",
                "task_type" => "unshipped_order_email",
                "task_name" => "Unshipped orders Daily",
                "email" => array(
                    "email_from"    => "purchasing@tntdealsinc.com",
                    "email_subject"=>("ERP Unshipped Orders Daily ".date("Y-m-d H:i:A")),
                    "to_email" => "brian@tntdealsinc.com"
                ),
                "run_time"  => array(
                "daily"     =>
                array(
                "week_days" =>
                    array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday")
                ),
                "time"      =>
                array
                (
                    "hour"      =>"05",
                    "minute"    => "05"
                )
                                    )
                ),
                array(
                "job_id"=> "8742",
                "task_type" => "shipped_order_email",
                "task_name" => "Yesterday Shipped orders",
                "email" => array(
                    "email_from"    => "purchasing@tntdealsinc.com",
                    "email_subject"=>("ERP Yesterday Shipped Orders"),
                    "to_email" => "brian@tntdealsinc.com"
                ),
                "run_time"  => array(
                "daily"     =>
                array(
                "week_days" =>
                    array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday")
                ),
                "time"      =>
                array
                (
                    "hour"      =>"07",
                    "minute"    => "05"
                )
                                    )
                ),
                array(
                "job_id"=> "110",
                "task_type" => "inventory_by_warehouse",
                "task_name" => "Daily Inventory By Warehouse Backup",
                "target_file_name"=>("dailyinventorybywarehouse ".date("M-d-Y")),
                "ftp"=>
                array(
                            'ftp_user' => 'tntdealsinc',
                            'ftp_password' => 'Ya7h7chE',
                            'ftp_host' => '02aabcc.netsolhost.com',
                            'path_upload' => '/htdocs/ERP/Daily Inventory By Warehouse/'
                     ),
                "run_time"  => array(
                "daily"     =>
                array(
                "week_days" =>
                    array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday")
                ),
                "time"      =>
                array
                (
                    "hour"      =>"02",
                    "minute"    => "00"
                )
                                    )
                ),
                array(
                "job_id"=> "135254",
                "task_type" => "QUANTITY_SOLD_REPORT_EXPORT",
                "task_name" => "Daily Quantity Sold Report",
                "email" => array(
                    "email_from"    => "customerservice@pensnmore.com",
                    "email_subject"=>("Daily Quantity Sold Report ".date("Y-m-d H:i:A")),
                    "to_email" => array('brian@tntdealsinc.com','johnson.toni@tntdealsinc.com')
                ),
                "run_time"  => array(
                "daily"     =>
                array(
                "week_days" =>
                    array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday")
                ),
                "time"      =>
                array
                (
                    "hour"      =>"04",
                    "minute"    => "00"
                )
                                    )
                ),
            );
    }


    function get_jet_product_shipping_exception($day='')
    {
        $shipping_level = array(
            '1'=>'Second Day',
            '2'=>'Next Day',
            '3'=>'Priority',
            '4'=>'Expedited',
            '5'=>'Standard',
            '6'=>'Scheduled (freight)',
            '7'=>'5 to 10 Day',
            '8'=>'11 to 20 Day',
            '9'=>'21 to 30 Day',
            '10'=>'Scheduled (freight 11 to 20 day)',
            '11'=>'Scheduled (freight 21 to 30 day)'
        );

        return (isset($shipping_level[$day])) ? $shipping_level[$day] : 'Scheduled (freight)';
    }

    function get_order_document_type()
    {
        $document_type = array(

          'Order Invoice'                  => 'Order Invoice',
          'Order Shipment Acknowledgement' => 'Order Shipment Acknowledgement',
          'Order Packing Slip'             => 'Order Packing Slip',
          'Other'                          => 'Other'
      );

        return $document_type;
    }

    function get_shipping_packages_type()
    {
        $shipping_packages_type = array( 
            'poly'          => 'Poly',
            'bubble_mailer' => 'Bubble Mailer',
            'box'           => 'Box'
            );
        return $shipping_packages_type;
    }

   function get_carrier_name()
    {
        $carrier_name = array( 
            'fedex' => 'FedEx',
            'ups'   => 'UPS',
            'apc'   => 'APC',            // Added by Akshit on 2 Apr 2018
            'osm'   => 'OSM',           // Added by Akshit on 30 Apr 2020
            'other' => 'Other'
            );
        return $carrier_name;
    }

    function get_sellercloud_order_source()
    {
        $order_source = array(
            'Overstock'  => 'Overstock',
            'Groupon'    => 'Groupon',
            'Amazon'     => 'Amazon',
            'Jet'        => 'JET',
            'Ebay'       => 'eBayOrder',
            'Newegg'     => 'NewEggdotcom',
            'Newegg Biz' => 'NewEgg_Business',
            'Bonanza'    => 'Bonanza'
        );

        return $order_source;
    }


    function get_sellercloud_shipping_carrier()
    {
        $shipping_carrier = array(
            'Fedex'   => 'FedEx',
            'USPS'    => 'USPS',
            'UPS'     => 'UPS',
            'APC'     =>'APC'
        );

        return $shipping_carrier;
    }


    function get_sellercloud_shipping_service()
    {
        $shipping_service = array(
            'SMART_POST'           => 'FedEx SmartPost Standard Mail',
            'FEDEX_GROUND'         => 'FedExGround',
            'GROUND_HOME_DELIVERY' => 'FedEx Home Delivery',
            'First'                => 'USPSFirstClass',
            'Priority'             => 'USPS Priority',
            '03'                   => 'UPSGround',
            'M4'                   => 'UPS Mail Innovations Expedited', 
            'IPA'                  => 'APC IPA',
            'PC'                   => 'APC Postal Consolidator'
        );

        return $shipping_service;
    }

    /*
    @Description : Array for marketplace list edit
    @Author : Jayesh Chavda
    @Date : 22-3-2018
    */

    function get_store_credentials_key_mapping($store_name)
    {
        $data['Amazon'] = array(
            'merchant_id' =>'Amazon Merchant Id',
            'mws_access_key_id'=> 'Amazon MWS Access Key',
            'mws_secret_key'=> 'Amazon MWS Access Key',
            'aws_access_key_id' => 'AWS Access key ID',
            'aws_secret_key'    => 'AWS Secret Key'
        );
        $data['Ebay'] = array(
            'ebay_developer_key' =>'Ebay Developer Key',
            'ebay_application_key'=> 'Ebay Application Key',
            'ebay_certificate_key'=> 'Ebay Certificate Key',
            'ebay_request_token' => 'Ebay Request Token'
        );
        $data['Shopify'] = array(
            'shopify_api_key' =>'Shopify API Key',
            'shopify_password'=> 'Shopify Password',
            'shopify_store_address'=> 'Shopify Store Address'
            
        );
        $data['Rakuten'] = array(
            'rakuten_ftp_user_name' =>'Rakuten FTP User Name',
            'rakuten_ftp_password'=> 'Rakuten FTP Password',
            'rakuten_ftp_host'=> 'Rakuten FTP Host'
        );
        $data['Overstock'] = array(
            'overstock_id' =>'Overstock User ID',
            'overstock_password'=> 'Overstock Password',
        );
        $data['Newegg'] = array(
            'newegg_ftp_host' =>'Newegg FTP Host',
            'newegg_ftp_user'=> 'Newegg FTP User',
            'newegg_ftp_password'=> 'Newegg FTP Password'
        );
        $data['Wayfair'] = array(
            'wayfair_ftp_host' =>'Wayfair FTP Host',
            'wayfair_ftp_user'=> 'Wayfair FTP User',
            'wayfair_ftp_password'=> 'Wayfair FTP Password'
        );
        $data['Walmart'] = array(
            'walmart_consumer_id' =>'Walmart Consumer ID',
            'walmart_private_key'=> 'Walmart Private Key',
            'walmart_api_key'=> 'Walmart API Key',
            'walmart_endpoint'=> 'Walmart End Point',
            'walmart_chanel_type'=> 'Walmart Channel Type'
        );
        $data['Jet'] = array(
            'jet_user_name' =>'Jet User Name',
            'jet_password'=> 'Jet Password',
            'jet_api_url'=> 'Jet API URL'
        );
        $data['Groupon'] = array(
            'groupon_supplier_id' =>'Groupon Supplier ID',
            'groupon_token'=> 'Groupon Token',
            // 'groupon_account_number'=>'Groupon Account Number',
            // 'groupon_irs_number'=>'Groupon IRS Number'
        );
        $data['Newegg Biz'] = array(
            'newegg_biz_ftp_host' =>'Newegg Biz FTP Host',
            'newegg_biz_ftp_user'=> 'Newegg Biz FTP User',
            'newegg_biz_ftp_password'=> 'Newegg Biz FTP Password'
        );
        $data['Bonanza'] = array(
            'bonanza_cert_name' =>'Bonanza Certificate Name',
            'bonanza_dev_name'=> 'Bonanza Developer Name',
            'bonanza_token'=> 'Bonanza Token',
            'bonanza_booth_name'=> 'Bonanza Booth Name' 
        );
        $data['Woot'] = array(
            'Woot credential ' =>'Woot Certificate Name',
            'Woot credential'=> 'Woot Developer Name'
        );
        $data['Sears'] = array(
            'sears_seller_id' =>'Sears Seller ID',
            'sears_secret_key'=> 'Sears Secret Key',
            'sears_email'=> 'Sears Email'
        );
        $data['Tanga'] = array(
            'tanga_vendor_id' =>'Tanga Vendor ID',
            'tanga_user_name'=> 'Tanga User Name',
            'tanga_password'=> 'Tanga Password'
        );

        $data['Google'] = array(
            'merchant_id' =>'Google Merchant ID'
        );

        return isset($data[$store_name]) ? $data[$store_name] : array();
    }

    /*
    @Description : Get Order Adjustment 
    @Author : Jayesh Chavda
    @Date : 22-3-2018
    */

    function get_order_adjustment_type()
    {
        $adjustment_type = array(
            'Misc'                          =>'Misc',
            'eBay Subsidy'                  =>'eBay Subsidy',
            'FBAServiceFee'                 =>'FBAServiceFee',
            'Return Label'                  =>'Return Label',
            'FBA Reimbursement'             =>'FBA Reimbursement',
            'FBA CSErrorItem'               =>'FBA CSErrorItem',
            'FBA SalesTaxServiceFee'        =>'FBA SalesTaxServiceFee',
            'eBay Top Seller Discount'      =>'eBay Top Seller Discount',
            'FBA RestockingFee'             =>'FBA RestockingFee',
            'FBA Order Retrocharge'         =>'FBA Order Retrocharge',
            'FBA Refund Retrocharge'        =>'FBA Refund Retrocharge',
            'FBA Shipping Cost Adjustment'  =>'FBA Shipping Cost Adjustment',
            'FBA ShippingLabelForReturn'    =>'FBA ShippingLabelForReturn',
            'ShippingClaim'                 =>'ShippingClaim',
            'Amazon ShippingServicesRefund' =>'Amazon ShippingServicesRefund',
            'Amazon Adjustment'             =>'Amazon Adjustment'
        );

        return $adjustment_type;
    }

    /*
    @Description : Get Order Fullfillment type 
    @Author : Harshad Hiarapara
    @Date : 05-04-2018
    */

    function get_order_fullfillment_type()
    {
        return array(
            'whole_sale' => 'WholeSale',
            'warehouse'  => 'WareHouse',
            'drop_ship'  => 'Drop Ship',
            'multi'      => 'Multi',
            'fba'        => 'FBA'
        );
    }

     /*
    @Description : Get Order Fullfillment type 
    @Author : Harshad Hiarapara
    @Date : 05-04-2018
    */

    function get_order_refunded()
    {
        return array(
            '0'  => '-',
            '1'  => 'Partially Refunded',
            '2'  => 'Full Refunded'
        );
    }

    /*
    @Description : Get services allowed in stores
    @Author : Shantanu
    @Date : 01-05-2018
    */

    function get_service_allowed_in_store()
    {
        return array(
            'PC' => array('Amazon CA')
        );
    }

    function get_months()
    {
        return array(
            '1'     => 'January',
            '2'     => 'February',
            '3'     => 'March',
            '4'     => 'April',
            '5'     => 'May',
            '6'     => 'June',
            '7'     => 'July',
            '8'     => 'August',
            '9'     => 'September',
            '10'    => 'October',
            '11'    => 'November',
            '12'    => 'December'
        );
    }

    function restricted_service_for_price_overwrite()
    {
        return array(
            'First','Priority','M4','IPA','PC','PriorityMailInternational','2','1'
        );
    }

    /*
    @Description: Get warehouse Fullfillment type 
    @Author     : Mehul
    @Date       : 05-04-2018
    */

    function get_warehouse_fulfilment_type()
    {
        return array(
            'warehouse'     => 'In-House Physical',
            'dropship'      => 'DropShip',
            'wholesale'     => 'WholeSale',
            'other'         => 'Other'
        );
    }

    /*
    @Description: Get contiguous us list 
    @Author     : Shantanu
    @Date       : 30-06-2018
    */

    function get_contiguous_us_list()
    {
        return array(
            'AL' => 'Alabama',
            'AZ' => 'Arizona',
            'AR' => 'Arkansas',
            'CA' => 'California',
            'CO' => 'Colorado',
            'CT' => 'Connecticut',
            'DE' => 'Delaware',
            'FL' => 'Florida',
            'GA' => 'Georgia',
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
            'WY' => 'Wyoming'
        ); 
    }

    /*
    @Description: Get non contiguous us list 
    @Author     : Shantanu
    @Date       : 30-06-2018
    */

    function get_non_contiguous_us_list()
    {
        return array(
            'AK' => 'Alaska',
            'HI' => 'Hawaii',
            'PR' => 'Puerto Rico',
            'GU' => 'Guam',
        );
    }

    /*
    @Description: Get military state list 
    @Author     : Shantanu
    @Date       : 30-06-2018
    */

    function get_military_state_list()
    {
        return array(
            'AE' => 'Armed Forces Africa',
            'AA' => 'Armed Forces Americas',
            'AE' => 'Armed Forces Canada',
            'AE' => 'Armed Forces Europe',
            'AE' => 'Armed Forces Middle East',
            'AP' => 'Armed Forces Pacific'
        );
    }

    /*
    @Description: Get us territory list 
    @Author     : Shantanu
    @Date       : 30-06-2018
    */

    function get_us_territory_list()
    {
        return array(
            'AS' => 'American Samoa',
            'GU' => 'Guam',
            'MH' => 'Marshall Islands',
            'FM' => 'Micronesia Federated States Of',
            'MP' => 'Northern Mariana Islands',
            'PW' => 'Palau',
            'VI' => 'Virgin Islands (U.S.)'
        );
    }

    /*
    @Description: Get Woot Address Detail
    @Author     : Mehul
    @Date       : 17-07-2019
    */

    function get_woot_address_detail()
    {
        return array(
            'Contact' => array(
                'PersonName'    => 'Shipping Department',
                'CompanyName'   => 'Woot.com',
                'PhoneNumber'   => '000-000-0000',
            ),
            'Address' => array(
                'StreetLines'   => '4121 International Pkwy',
                'City'          => 'Carrollton',
                'StateOrProvinceCode' => 'TX',
                'PostalCode'    => '75007',
                'CountryCode'   => 'US'
            )
        );
    }


    /*
    @Description: Get us territory list 
    @Author     : Shantanu
    @Date       : 30-06-2018
    */

    function get_store_custom_name()
    {
        return array(
            '2' => 'PNM',
            '3' => 'US',
            '36' => 'PNM',
            '37' => 'TLG',
            '38' => 'TAS',
            '26' => 'BTC',
            '27' => 'TLG',
        );
    }

    /*
    @Description: Get payment terms for exempt customers 
    @Author     : Akshit
    @Date       : 27-7-2018
    */

    function get_exempt_payment_terms()
    {
        return array(
            'prepaid'   =>  'Prepaid',
            'net_15'    =>  'Net 15',
            'net_30'    =>  'Net 30',
            'deposit_50'=>  '50% Deposit/Net 30'
        );
    }
    
    /*
    @Description: Get ebay site visibility 
    @Author     : Shantanu
    @Date       : 31-7-2018
    */

    function get_ebay_site_visibility()
    {
        return array(
            'yes' => 'Yes',
            'no' => 'No'
        );
    }

     /*
    @Description: Get order inquiry platform
    @Author     : Ankita Mandlik
    @Date       : 12-05-2020
    */

    function get_platform()
    {
        return array(
            'email' => 'Email',
            'call'  => 'Call'
        );
    }

    /*
    @Description: Get ebay package type 
    @Author     : Shantanu
    @Date       : 01-08-2018
    */

    function get_ebay_package_type()
    {
        return array(
            'BulkyGoods'                   => 'Bulky goods',
            'Caravan'                      => 'Caravan',
            'Cars'                         => 'Cars',  
            'CustomCode'                   => 'Reserved for internal or future use.',
            'Europallet'                   => 'Europallet',
            'ExpandableToughBags'          => 'Expandable Tough Bags',
            'ExtraLargePack'               => 'Extra Large Package/Oversize 3',
            'Furniture'                    => 'Furniture',
            'IndustryVehicles'             => 'Industry vehicles',
            'LargeCanadaPostBox'           => 'Large Canada Post Box',
            'LargeCanadaPostBubbleMailer'  => 'Large Canada Post Bubble Mailer',
            'LargeEnvelope'                => 'LargeEnvelope',
            'Letter'                       => 'Letter',
            'MailingBoxes'                 => 'Mailing Boxes',
            'MediumCanadaPostBox'          => 'Medium Canada Post Box',
            'MediumCanadaPostBubbleMailer' => 'Medium Canada Post Bubble Mailer',
            'Motorbikes'                   => 'Motorbikes',
            'None'                         => 'None',
            'OneWayPallet'                 => 'Onewaypallet',
            'PackageThickEnvelope'         => 'Package/thick envelope',
            'PaddedBags'                   => 'Padded Bags',
            'ParcelOrPaddedEnvelope'       => 'Parcel or padded Envelope',
            'Roll'                         => 'Roll',
            'SmallCanadaPostBox'           => 'Small Canada Post Box',
            'SmallCanadaPostBubbleMailer'  => 'Small Canada Post Bubble Mailer',
            'ToughBags'                    => 'Tough Bags',
            'UPSLetter'                    => 'UPS Letter',
            'USPSFlatRateEnvelope'         => 'USPS Flat Rate Envelope',
            'USPSLargePack'                => 'USPS Large Package/Oversize 1',
            'VeryLargePack'                => 'Very Large Package/Oversize 2',
            'Winepak'                      => 'Winepak'
        );
    }

    /*
    @Description    : Function to get the item conditions for Rakuten products
    @Author         : Akshit Arora
    @Input          : 
    @Output         : array of rakuten conditions with code as key
    @Date           : 4-9-2018
    */
    function get_rakuten_item_conditions()
    {
        return array(
            '1'     => 'Brand New',
            '2'     => 'Used-Like New',
            '3'     => 'Used-Very Good',
            '4'     => 'Used-Good',
            '5'     => 'Used-Acceptable',
            '10'    => 'Refurbished'
        );
    }

    /*
    @Description    : Function to get the map types for Rakuten products
    @Author         : Akshit Arora
    @Input          : 
    @Output         : array of map types with code as key
    @Date           : 4-9-2018
    */
    function get_rakuten_map_types()
    {
        return array(
            '0' => 'None',
            '1' => 'Click for Price',
            '2' => 'Cart for Price',
            '3' => 'Checkout for Price'
        );
    }

    function get_etsy_shipping_carrier()
    {
        return array(
            "4px" => "4PX Worldwide Express",
            "abf" => "ABF Freight",
            "acscourier" => "ACS Courier",
            "apc" => "APC Postal Logistics",
            "aeroflash" => "AeroFlash",
            "afghan-post" => "Afghan Post",
            "an-post" => "An Post",
            "anguilla-post" => "Anguilla Postal Service",
            "aramex" => "Aramex",
            "asendia-uk" => "Asendia UK",
            "asendia-usa" => "Asendia USA",
            "australia-post" => "Australia Post",
            "austrian-post" => "Austrian Post",
            "austrian-post-registered" => "Austrian Post Registered",
            "bh-posta" => "BH Posta",
            "bahrain-post" => "Bahrain Post",
            "bangladesh-post" => "Bangladesh Post Office",
            "bpost" => "Belgium Post Domestic",
            "bpost-international" => "Belgium Post International",
            "belpost" => "Belposhta",
            "bluedart" => "Blue Dart",
            "botswanapost" => "BotswanaPost",
            "brunei-post" => "Brunei Postal Services",
            "bgpost" => "Bulgarian Posts",
            "cambodia-post" => "Cambodia Post",
            "canada-post" => "Canada Post",
            "canpar" => "Canpar Courier",
            "ceska-posta" => "Ceska Posta",
            "china-ems" => "China EMS",
            "china-post" => "China Post",
            "chitchats" => "Chit Chats",
            "chronopost-france" => "Chronopost France",
            "chronopost-portugal" => "Chronopost Portugal",
            "taiwan-post" => "Chunghwa Post",
            "city-link" => "City Link",
            "colissimo" => "Colissimo",
            "collectplus" => "Collect+",
            "brazil-correios" => "Correios de Brasil",
            "correios-macau" => "Correios de Macau",
            "portugal-ctt" => "Correios de Portugal (CTT)",
            "correo-argentino" => "Correo Argentino Domestic",
            "correo-argentino-intl" => "Correo Argentino International",
            "correo-uruguayo" => "Correo Uruguayo",
            "spain-correos-es" => "Correos - Espana",
            "correos-chile" => "Correos Chile",
            "correos-de-mexico" => "Correos De Mexico",
            "correos-de-costa-rica" => "Correos de Costa Rica",
            "correos-ecuador" => "Correos del Ecuador",
            "courierpost" => "Courier Post",
            "couriers-please" => "Couriers Please",
            "cyprus-post" => "Cyprus Post",
            "dhl-benelux" => "DHL Benelux",
            "dhl" => "DHL Express",
            "dhl-germany" => "DHL Germany",
            "dhl-global-mail" => "DHL Global Mail",
            "dhl-global-mail-asia" => "DHL Global Mail Asia",
            "dhl-nl" => "DHL Netherlands",
            "dhlparcel-nl" => "DHL Parcel NL",
            "dhl-poland" => "DHL Polska",
            "dhl-es" => "DHL Spain Domestic",
            "dpd" => "DPD",
            "dpd-de" => "DPD Germany",
            "dpd-poland" => "DPD Polska",
            "dpd-uk" => "DPD UK",
            "dtdc" => "DTDC India",
            "deltec-courier" => "Deltec Courier",
            "deutsch-post" => "Deutsche Post",
            "directlink" => "Direct Link",
            "ec-firstclass" => "EC-Firstclass",
            "egypt-post" => "Egypt Post",
            "el-correo" => "El Correo",
            "elta-courier" => "Elta Courier",
            "emirates-post" => "Empost",
            "correos-bolivia" => "Empresa de Correos de Bolivia",
            "estafeta" => "Estafeta",
            "estes" => "Estes",
            "estonian-post" => "Estonian Post",
            "ethiopian-post" => "Ethiopian Postal Service",
            "evergreen" => "Evergreen",
            "fastway-au" => "Fastway Australia",
            "fastway-ireland" => "Fastway Couriers",
            "fastway-nz" => "Fastway New Zealand",
            "fastway-za" => "Fastways Couriers South Africa",
            "fedex" => "FedEx",
            "fedex-uk" => "Fedex UK (Domestic)",
            "first-flight" => "First Flight Couriers",
            "flash-courier" => "Flash Courier",
            "gati-kwe" => "GATI-KWE",
            "gls" => "GLS",
            "ghana-post" => "Ghana Post",
            "globegistics" => "Globegistics",
            "greyhound" => "Greyhound",
            "guernsey-post" => "Guernsey Post",
            "hay-post" => "Hay Post",
            "hellenic-post" => "Hellenic Post",
            "hermes-de" => "Hermes",
            "hermes-it" => "Hermes Italy",
            "hermes" => "Hermes UK",
            "hong-kong-post" => "Hong Kong Post",
            "hrvatska-posta" => "Hrvatska Posta",
            "india-post" => "India Post",
            "india-post-int" => "India Post International",
            "interlink-express" => "Interlink Express",
            "international-seur" => "International Seur",
            "ipostel" => "Ipostel",
            "iran-post" => "Iran Post",
            "islandspostur" => "Islandspostur",
            "isle-of-man-post" => "Isle of Man Post Office",
            "israel-post" => "Israel Post",
            "israel-post-domestic" => "Israel Post Domestic",
            "jamaica-post" => "Jamaica Post",
            "japan-post" => "Japan Post",
            "jersey-post" => "Jersey Post",
            "jordan-post" => "Jordan Post",
            "kazpost" => "Kazpost",
            "kpost" => "Korea Post",
            "korea-post" => "Korea Post EMS",
            "kn" => "Kuehne + Nagel",
            "la-poste-colissimo" => "La Poste",
            "poste-monaco" => "La Poste Monaco",
            "poste-tunisienne" => "La Poste Tunisienne",
            "poste-senegal" => "La Poste du Senegal",
            "landmark-global" => "Landmark Global",
            "lasership" => "LaserShip",
            "latvijas-pasts" => "Latvijas Pasts",
            "libanpost" => "LibanPost",
            "lietuvos-pastas" => "Lietuvos Pastas",
            "mrw-spain" => "MRW",
            "magyar-posta" => "Magyar Posta",
            "makedonska-posta" => "Makedonska Posta",
            "malaysia-post-posdaftar" => "Malaysia Pos Daftar",
            "maldives-post" => "Maldives Post",
            "maltapost" => "MaltaPost",
            "mauritius-post" => "Mauritius Post",
            "mondialrelay" => "Mondial Relay",
            "mexico-multipack" => "Multipack",
            "nacex-spain" => "Nacex",
            "new-zealand-post" => "New Zealand Post",
            "tntpost-it" => "Nexive",
            "nieuwe-post-nederlandse-antillen-pna" => "Nieuwe Post Nederlandse Antillen (PNA)",
            "nipost" => "Nigerian Postal Service",
            "nova-poshta" => "Nova Poshta",
            "oca-ar" => "OCA",
            "opek" => "OPEK",
            "opt" => "OPT",
            "opt-nouvelle-caledonie" => "OPT de Nouvelle-Caledonie",
            "oman-post" => "Oman Post",
            "ontrac" => "OnTrac",
            "ptt-posta" => "PTT Posta",
            "pakistan-post" => "Pakistan Post",
            "parcel-force" => "Parcelforce Worldwide",
            "poczta-polska" => "Poczta Polska",
            "pos-indonesia" => "Pos Indonesia",
            "pos-indonesia-int" => "Pos Indonesia International",
            "malaysia-post" => "Pos Malaysia",
            "post-aruba" => "Post Aruba",
            "post-fiji" => "Post Fiji",
            "post-luxembourg" => "Post Luxembourg",
            "postnl" => "PostNL Domestic",
            "postnl-international" => "PostNL International",
            "postnl-3s" => "PostNL International 3S",
            "danmark-post" => "PostNord",
            "postnord" => "PostNord Logistics",
            "posta" => "Posta",
            "posta-kenya" => "Posta Kenya",
            "posta-moldovei" => "Posta Moldovei",
            "posta-romana" => "Posta Romana",
            "posta-shqiptare" => "Posta Shqiptare",
            "posta-slovenije" => "Posta Slovenije",
            "posta-srbije" => "Posta Srbije",
            "posta-uganda" => "Posta Uganda",
            "poste-italiane" => "Poste Italiane",
            "poste-italiane-paccocelere" => "Poste Italiane Paccocelere",
            "poste-maroc" => "Poste Maroc",
            "sweden-posten" => "Posten AB",
            "posten-norge" => "Posten Norge",
            "posti" => "Posti",
            "postmates" => "Postmates",
            "purolator" => "Purolator",
            "qatar-post" => "Qatar Post",
            "rl-carriers" => "RL Carriers",
            "rpx" => "RPX Indonesia",
            "red-express" => "Red Express",
            "mexico-redpack" => "Redpack",
            "royal-mail" => "Royal Mail",
            "russian-post" => "Russian Post",
            "sfb2c" => "S.F International",
            "italy-sda" => "SDA Express Courier",
            "spanish-seur" => "SEUR Espana (Domestico)",
            "portugal-seur" => "SEUR Portugal (Domestico)",
            "sf-express" => "SF Express",
            "safexpress" => "Safexpress",
            "sagawa" => "Sagawa",
            "saudi-post" => "Saudi Post",
            "selektvracht" => "Selektvracht",
            "mexico-senda-express" => "Senda Express",
            "sendle" => "Sendle",
            "serpost" => "Serpost",
            "singapore-post" => "Singapore Post",
            "singapore-speedpost" => "Singapore SpeedPost",
            "siodemka" => "Siodemka",
            "skynetworldwide" => "SkyNet Wordwide Express",
            "skynet-malaysia" => "Skynet Malaysia",
            "skynetworldwide" => "Skynet Worldwide Express",
            "slovenska-posta" => "Slovenska posta",
            "sapo" => "South Africa Post Office",
            "star-track" => "StarTrack",
            "swiss-post" => "Swiss Post",
            "taqbin-hk" => "TA-Q-BIN Hong Kong",
            "taqbin-jp" => "TA-Q-BIN Japan",
            "taqbin-my" => "TA-Q-BIN Malaysia",
            "taqbin-sg" => "TA-Q-BIN Singapore",
            "tgx" => "TGX",
            "tnt" => "TNT",
            "tnt-au" => "TNT Australia",
            "tnt-fr" => "TNT France",
            "tnt-it" => "TNT Italia",
            "tnt-uk" => "TNT UK",
            "ttpost" => "TTPost",
            "thailand-post" => "Thailand Post",
            "toll-global-express" => "Toll Global Express",
            "toll-priority" => "Toll Priority",
            "uk-mail" => "UK Mail",
            "ups" => "UPS",
            "ups-freight" => "UPS Freight",
            "usps" => "USPS",
            "ukrposhta" => "UkrPoshta",
            "vanuatu-post" => "Vanuatu Post",
            "vnpost" => "Vietnam Post",
            "vnpost-ems" => "Vietnam Post EMS",
            "whistl" => "Whistl",
            "xend" => "Xend",
            "yrc" => "YRC Freight",
            "yanwen" => "Yanwen",
            "yemen-post" => "Yemen Post",
            "yodel" => "Yodel",
            "yodel-international" => "Yodel International",
            "zampost" => "Zampost",
            "zimpost" => "Zimpost",
            "i-parcel" => "i-parcel",
            "myhermes-uk" => "myHermes UK",
        );
    }

    /*
    @Description    : Function to get po other charges type
    @Author         : Harshad Hirapara
    @Input          : N/A
    @Output         : array of map types with code as key
    @Date           : 05-10-2018
    */
    function get_po_other_charges_type()
    {
        return array(
            'customs_entry_service'       => 'Customs Entry Service',
            'duty_subject_to_liquidation' => 'Duty Subject To Liquidation',
            'import_security_filing'      => 'Import Security Filing',
            'ocean_freight'               => 'Ocean Freight',
            'domestic_freight'			  => 'Domestic Freight',
            'cartage_and_services'        => 'Cartage And Services',
            'fuel'                        => 'Fuel',
            'chassis_rental'              => 'Chassis Rental',
            'one_hour_detention'          => 'One Hour Detention',
            'us_custom_border_charge'     => 'US Customs & Border Protection',
            'terminal_charges'            => 'Terminal Charges',
            'other_misc_charges'          => 'Other Misc Charges'
        );
    }

     /*
    @Description    : Function to get sears shipping carriers
    @Author         : Akshit Arora
    @Input          : N/A
    @Output         : array of carriers with codes in keys
    @Date           : 10-10-2018
    */
    function get_sears_shipping_carriers()
    {
        return array
        (
            'UPS' => "United Parcel Service",
            'FDE' => "Federal Express",
            'OTH' => "Carrier - not in Sears System",
            'USPS' => "United States Postal Service",
            'DELG' => "Demar",
            'DHLC' => "DHL",
            'SMRT' => "FedEx SmartPost",
            'RNLO' => "R+L Carriers",
            'BEKN' => "Home Direct USA",
            'SAIA' => "SAIA",
            'RDWY' => "YRC (Formerly Roadway or Yellow)",
            'RRTS' => "Road Runner",
            'ODFL' => "Old Dominion",
            'PYLE' => "A. Duie Pyle",
            'AIMN' => "AIM Transportation",
            'AIIH' => "AIT Worldwide Logistics",
            'AMKI' => "AM Home Delivery",
            'AVRT' => "Averitt Trucking",
            'BTVP' => "Best Overnite",
            'CUOT' => "Ceva Logistics",
            'CWCE' => "Conway",
            'CRST' => "Crystal Motor Express",
            'FBTI' => "FOX BROTHERS TRANSFER INCORPORATED",
            'LREC' => "Land Air Express",
            'LASG' => "Lasership",
            'MEFE' => "Main Freight Inc",
            'MFSY' => "MANNA FREIGHT SYSTEMS INC",
            'NEFW' => "New England Freightways",
            'OTCL' => "ONTRACC LOGISTICS INC",
            'PAAF' => "Pilot Freight Services",
            'PITD' => "Pitt Ohio",
            'SJTT' => "S&J Transportation",
            'SKWE' => "SEKO Worldwide",
            'SEFL' => "Southeastern Freight Lines",
            'TOWN' => "Towne Air Freight",
            'USFG' => "USF Holland",
            'ABFS' => "ABF",
            'EXLA' => "Estes Express Lines",
            'FXFT' => "FedEx Freight",
            'HJBT' => "JB Hunt",
            'AACT' => "AAACooper",
            'AEWS' => "American West Worldwide Express, Inc",
            'AOIT' => "A-1 International Inc.",
            'AVFE' => "Air Traffic Services",
            'BNAF' => "DB Schenker",
            'BTNB' => "Benton Express",
            'BWTQ' => "Barrett Distribution",
            'CAAE' => "Campbells Express",
            'CCFI' => "Central Freight Lines",
            'CCYQ' => "CrossCountryCourier",
            'CEMF' => "CMS Logistics",
            'CETR' => "Central Transport Inc",
            'CIAF' => "Cavalier Logistics",
            'CIIP' => "CRST Specialized Transportation, Inc.",
            'CNWQ' => "Crane Worldwide",
            'CNWY' => "Con-way Freight",
            'COOG' => "CorTrans",
            'CTBV' => "Custom Companies",
            'CXIT' => "CXI Trucking",
            'DAFG' => "Dayton Freight",
            'DHRN' => "Dohrn Transfer Company",
            'DOLR' => "Dot-Line Transportation",
            'DPHE' => "Dependable Highway Express",
            'DYLT' => "Daylight Transport",
            'DYXE' => "DYNAMEX",
            'GLDF' => "Gold Coast Freightways",
            'HLDS' => "Hotline Delivery Systems",
            'HRCF' => "Hercules Freight",
            'HWDQ' => "Hollywood Delivery Service",
            'ICAO' => "ICAT Logistics",
            'LKVL' => "Lakeville Motor Express",
            'LSOV' => "Lone Star Overnight",
            'MLXP' => "Milan Express",
            'MSIF' => "MSI",
            'MTJG' => "Moran Transportation",
            'MTVL' => "Mountain Valley Express",
            'NDSN' => "National Delivery Systems",
            'NEMF' => "New England Motor Freight",
            'NPME' => "New Penn Motor Express",
            'NSD' => "Nonstop Delivery",
            'OAKH' => "Oak Harbor Freight Lines",
            'PFEG' => "Performance Freight Systems",
            'PUTB' => "Peninsula Trucklines",
            'RETL' => "USF Reddaway",
            'SBAG' => "SBA Global",
            'SDVE' => "Star Delivery Solutions",
            'SHFT' => "Shift Freight",
            'SLSV' => "States Logistics",
            'SMTL' => "Southwestern Motor Transport",
            'SPDD' => "Spee Dee Delivery Service",
            'TECH' => "TechTrans",
            'TOWE' => "Towne Aire",
            'TRLN' => "Trail Lines",
            'UDSL' => "United Delivery Service",
            'UPGF' => "UPS Freight",
            'UPSI' => "UPS i-parcel",
            'UPSM' => "UPS Mail Innovations",
            'VITR' => "Vitran Express",
            'VOLP' => "Volpe Express",
            'VOLT' => "Volunteer Express",
            'WARD' => "Ward Trucking",
            'WKSH' => "Watkins and Shepard",
            'WTVA' => "Wilson Trucking Corp",
            'XGSI' => "Xpress Global"
        );
    }

    function get_sears_shipping_methods()
    {
        return array
        (
            "UPS" => array
                (
                    "Next Day Saver",
                    "Ground",
                    "Next Day",
                    "Second Day",
                    "SurePost",
                ),

            "FDE" => array
                (
                    "Ground",
                    "Next Day",
                    "Second Day",
                ),

            "OTH" => array
                (
                    "Expedited",
                    "Pickup",
                    "Standard",
                    "Premium",
                ),

            "USPS" => array
                (
                    "First Class",
                    "Parcel Post",
                    "Priority",
                    "Standard Mail",
                ),

            "DELG" => array
                (
                    "Standard",
                    "Premium",
                ),

            "DHLC" => array
                (
                    "Economy",
                    "Priority",
                    "Connect",
                ),

            "SMRT" => array
                (
                    "Smart Post",
                ),

            "RNLO" => array
                (
                    "LTL",
                ),

            "BEKN" => array
                (
                    "White Glove",
                    "Standard",
                ),

            "SAIA" => array
                (
                    "LTL",
                ),

            "RDWY" => array
                (
                    "LTL",
                ),

            "RRTS" => array
                (
                    "LTL",
                ),

            "ODFL" => array
                (
                    "LTL",
                ),

            "PYLE" => array
                (
                    "LTL",
                ),

            "AIMN" => array
                (
                    "LTL",
                ),

            "AIIH" => array
                (
                    "LTL",
                ),

            "AMKI" => array
                (
                    "LTL",
                ),

            "AVRT" => array
                (
                    "LTL",
                    "LTL",
                ),

            "BTVP" => array
                (
                    "LTL",
                ),

            "CUOT" => array
                (
                    "LTL",
                ),

            "CWCE" => array
                (
                    "LTL",
                ),

            "CRST" => array
                (
                    "LTL",
                ),

            "FBTI" => array
                (
                    "LTL",
                ),

            "LREC" => array
                (
                    "LTL",
                ),

            "LASG" => array
                (
                    "LTL",
                ),

            "MEFE" => array
                (
                    "LTL",
                ),

            "MFSY" => array
                (
                    "LTL",
                ),

            "NEFW" => array
                (
                    "LTL",
                ),

            "OTCL" => array
                (
                    "LTL",
                ),

            "PAAF" => array
                (
                    "LTL",
                ),

            "PITD" => array
                (
                    "LTL",
                ),

            "SJTT" => array
                (
                    "LTL",
                ),

            "SKWE" => array
                (
                    "LTL",
                ),

            "SEFL" => array
                (
                    "LTL",
                ),

            "TOWN" => array
                (
                    "LTL",
                ),

            "USFG" => array
                (
                    "LTL",
                ),

            "ABFS" => array
                (
                    "LTL",
                ),

            "EXLA" => array
                (
                    "LTL",
                ),

            "FXFT" => array
                (
                    "LTL",
                ),

            "HJBT" => array
                (
                    "LTL",
                ),

            "AACT" => array
                (
                    "LTL",
                ),

            "AEWS" => array
                (
                    "LTL",
                ),

            "AOIT" => array
                (
                    "LTL",
                ),

            "AVFE" => array
                (
                    "LTL",
                ),

            "BNAF" => array
                (
                    "LTL",
                ),

            "BTNB" => array
                (
                    "LTL",
                ),

            "BWTQ" => array
                (
                    "LTL",
                ),

            "CAAE" => array
                (
                    "LTL",
                ),

            "CCFI" => array
                (
                    "LTL",
                ),

            "CCYQ" => array
                (
                    "LTL",
                ),

            "CEMF" => array
                (
                    "LTL",
                ),

            "CETR" => array
                (
                    "LTL",
                ),

            "CIAF" => array
                (
                    "LTL",
                ),

            "CIIP" => array
                (
                    "LTL",
                ),

            "CNWQ" => array
                (
                    "LTL",
                ),

            "CNWY" => array
                (
                    "LTL",
                ),

            "COOG" => array
                (
                    "LTL",
                ),

            "CTBV" => array
                (
                    "LTL",
                ),

            "CXIT" => array
                (
                    "LTL",
                ),

            "DAFG" => array
                (
                    "LTL",
                ),

            "DHRN" => array
                (
                    "LTL",
                ),

            "DOLR" => array
                (
                    "LTL",
                ),

            "DPHE" => array
                (
                    "LTL",
                ),

            "DYLT" => array
                (
                    "LTL",
                ),

            "DYXE" => array
                (
                    "LTL",
                ),

            "GLDF" => array
                (
                    "LTL",
                ),

            "HLDS" => array
                (
                    "LTL",
                ),

            "HRCF" => array
                (
                    "LTL",
                ),

            "HWDQ" => array
                (
                    "LTL",
                ),

            "ICAO" => array
                (
                    "LTL",
                ),

            "LKVL" => array
                (
                    "LTL",
                ),

            "LSOV" => array
                (
                    "LTL",
                ),

            "MLXP" => array
                (
                    "LTL",
                ),

            "MSIF" => array
                (
                    "LTL",
                ),

            "MTJG" => array
                (
                    "LTL",
                ),

            "MTVL" => array
                (
                    "LTL",
                ),

            "NDSN" => array
                (
                    "LTL",
                ),

            "NEMF" => array
                (
                    "LTL",
                ),

            "NPME" => array
                (
                    "LTL",
                ),

            "NSD" => array
                (
                    "LTL",
                ),

            "OAKH" => array
                (
                    "LTL",
                ),

            "PFEG" => array
                (
                    "LTL",
                ),

            "PUTB" => array
                (
                    "LTL",
                ),

            "RETL" => array
                (
                    "LTL",
                ),

            "SBAG" => array
                (
                    "LTL",
                ),

            "SDVE" => array
                (
                    "LTL",
                ),

            "SHFT" => array
                (
                    "LTL",
                ),

            "SLSV" => array
                (
                    "LTL",
                ),

            "SMTL" => array
                (
                    "LTL",
                ),

            "SPDD" => array
                (
                    "Parcel",
                ),

            "TECH" => array
                (
                    "LTL",
                ),

            "TOWE" => array
                (
                    "LTL",
                ),

            "TRLN" => array
                (
                    "LTL",
                ),

            "UDSL" => array
                (
                    "LTL",
                ),

            "UPGF" => array
                (
                    "LTL",
                ),

            "UPSI" => array
                (
                    "Parcel",
                ),

            "UPSM" => array
                (
                    "Parcel",
                ),

            "VITR" => array
                (
                    "LTL",
                ),

            "VOLP" => array
                (
                    "LTL",
                ),

            "VOLT" => array
                (
                    "LTL",
                ),

            "WARD" => array
                (
                    "LTL",
                ),

            "WKSH" => array
                (
                    "LTL",
                ),

            "WTVA" => array
                (
                    "LTL",
                ),

            "XGSI" => array
                (
                    "LTL",
                ),
        );
    }

   function get_zero_quantity_product_module()
   {
        return array(
            'loss_order_product'                 => 'Loss Order Products',
            'wrong_selling_price'                => 'Wrong Selling Price',
            'high_min_qty_products'              => 'Products with Min. Order Qty > 0',
            'high_min_qty_kits'                  => 'Kits with Min. Order Qty > 0',
            'products_without_shipping'          => 'Products Without Shipping Cost',
            'products_without_shipping_package'  => 'Products Without Shipping Package',
            'true_value_product_with_member_qty' => 'True Value Products With Member Pack Type F',
            'high_min_qty_products_for_notion5'  => 'Notion.5 High Min Order Qty',
            'high_min_qty_kits_for_notion5'      => 'Notion.5 High Min Order Qty Kits'
        );
    }

    function get_custom_document_types()
    {
        return array(
            'customs_7501'          => 'Customs 7501',
            'commercial_invoice'    => 'Commercial Invoice',
            'packing_lists'         => 'Packing Lists'
        );
    }

    function get_fedex_package_rates($package_type = '')
    {
        $final_rate = array();

        $fedex_rates = array(
            'FEDEX_ENVELOPE'        => '6.99',
            'FEDEX_PAK'             => '8.99',
            'FEDEX_SMALL_BOX'       => '10.90',
            'FEDEX_MEDIUM_BOX'      => '13.45',
            // 'FEDEX_EXTRA_LARGE_BOX' => '',
            // 'FEDEX_LARGE_BOX'       => '',
            // 'FEDEX_TUBE'            => ''
        );

        if($package_type != '')
        {
            if(isset($fedex_rates[$package_type]))
            {
                return $final_rate = $fedex_rates[$package_type];
            }
            else
            {
                return $final_rate = '';
            }    
        } 
        else
        {
            return $fedex_rates;
        }   

        // FedEx Express Envelope => Envelope - $6.50
        // FedEx Express Large Pak => Pak - $7.50
        // FedEx Express Small Box - S1 => Small Boxes - $9.95
        // FedEx Express Small Box - S2 => Small Boxes - $9.95
        // FedEx Express Medium Box - M1 => Large Boxes - $12.80
    }

    /*
    @Description: Get Ebay Instant revise type
    @Author     : Harshad Hirapara
    @Date       : 01-01-2019
    */

    function get_ebay_instant_revise_list()
    {
        return array(
            "revise_title"             => "Revise Title",
            "revise_qty"               => "Revise Quantity",
            "revise_price"             => "Revise Price",
            "revise_brand"             => "Revise Brand",
            "return"                   => "Revise Return Policy",
            "payment"                  => "Revise Payment Policy",
            "shipping"                 => "Revise Shipping Policy",
            "revise_site_visibility"   => "Revise Site Visibility",
            "revise_package_type"      => "Revise Package",
            "revise_product_dimention" => "Revise Product Dimensions & Weight",
            "revise_category"          => "Revise Category",
            "revise_store_category"    => "Revise Store Category",
            "revise_image"             => "Revise Images",
            "revise_description"       => "Revise Description",
            "item_specification"       => "Revise Item Specification"
         );
     }

	function get_valid_service_for_service($service = '')
    {
        $fedex_services = array(
            'FEDEX_ONE_RATE_2_DAY' => 'FEDEX_2_DAY'
        );

        if($service != '')
        {
            return $fedex_services[$service];   
        } 
        else
        {
            return '';
        }   
    }

    function get_shopify_shipping_carriers()
    {
        return array(
            "4px" => "4PX",
            "apc" => "APC",
            "amazon logistics uk" => "Amazon Logistics UK",
            "amazon logistics us" => "Amazon Logistics US",
            "australia post" => "Australia Post",
            "bluedart" => "Bluedart",
            "canada post" => "Canada Post",
            "china post" => "China Post",
            "correios" => "Correios",
            "dhl express" => "DHL Express",
            "dhl ecommerce" => "DHL eCommerce",
            "dhl ecommerce asia" => "DHL eCommerce Asia",
            "dpd" => "DPD",
            "dpd local" => "DPD Local",
            "dpd uk" => "DPD UK",
            "delhivery" => "Delhivery",
            "eagle" => "Eagle",
            "fsc" => "FSC",
            "fedex" => "FedEx",
            "fedex uk" => "FedEx UK",
            "gls" => "GLS",
            "globegistics" => "Globegistics",
            "japan post (en)" => "Japan Post (EN)",
            "japan post (ja)" => "Japan Post (JA)",
            "la poste" => "La Poste",
            "new zealand post" => "New Zealand Post",
            "newgistics" => "Newgistics",
            "postnl" => "PostNL",
            "postnord" => "PostNord",
            "purolator" => "Purolator",
            "royal mail" => "Royal Mail",
            "sf express" => "SF Express",
            "sagawa (en)" => "Sagawa (EN)",
            "sagawa (ja)" => "Sagawa (JA)",
            "singapore post" => "Singapore Post",
            "tnt" => "TNT",
            "ups" => "UPS",
            "usps" => "USPS",
            "whistl" => "Whistl",
            "yamato (en)" => "Yamato (EN)",
            "yamato (ja)" => "Yamato (JA)"
        );
    }

    /*
    @Description: system level task types
    @Author     : Akshit Arora
    @Date       : 05-03-2019
    */
    function get_system_task_types()
    {
        return array(
            'shipping' => 'Shipping',
            'picking' => 'Picking'
        );
    }

    /*
    @Description: FBA Prep material type
    @Author     : Akshit Arora
    @Date       : 03-05-2019
    */
    function get_fba_prep_material_types()
    {
        return array(
            "Label",
            "Tape",
            "Suffocation Bag",
            "Reclosable Poly Bag",
            "Box",
            "Bubble Wrap",
        );
    }

    /*
    @Description: Sales Comparison Duration
    @Author     : Akshit Arora
    @Date       : 03-05-2019
    */
    function get_sales_comparison_duration_group()
    {
        return array(
            '7_days'    => array(
                'sale_last_7' => 'Sale Last 7',
                'sale_prior_7' => 'Sale Prior 7'
            ),
            '14_days'   => array(
                'sale_last_14' => 'Sale Last 14',
                'sale_prior_14' => 'Sale Prior 14'
            ),
            '30_days'   => array(
                'sale_last_30' => 'Sale Last 30',
                'sale_prior_30' => 'Sale Prior 30'
            ),
            '60_days'   => array(
                'sale_last_60' => 'Sale Last 60',
                'sale_prior_60' => 'Sale Prior 60'
            )
        );
    }


    /*
    @Description: Vendor Fulfillment Type
    @Author     : Akshit Arora
    @Date       : 17-06-2019
    */
    function get_vendor_fulfillment_type()
    {
        return array(
            'whole_sale'    => 'Wholesale',
            'warehouse'     => 'WareHouse',
            'drop_ship'     => 'Drop Ship',
            'fba'           => 'FBA');
    }

    /*
    @Description: wallmart repricer published status
    @Author     : Drishtant Leuva
    @Date       : 20-06-2019
    */
    function get_walmart_repricer_published_status()
    {
        return array(
            'PUBLISHED'        => 'Published',
            'READY_TO_PUBLISH' => 'Ready To Publish',
            'IN_PROGRESS'      => 'In Progress',
            'UNPUBLISHED'      => 'Unpublished',
            'STAGE'            => 'Stage',
            'SYSTEM_PROBLEM'   => 'System Problem'
        );
    }

    /*
    @Description: Sales log duration values
    @Author     : Akshit Arora
    @Date       : 09-07-2019
    */
    function get_sales_log_durations()
    {
        return array(
            '2d'    => '2 Days',
            '7d'    => '7 Days',
            '30d'   => '30 Days',
            '60d'   => '60 Days',
            '90d'   => '90 Days',
            '120d'  => '120 Days',
            '180d'  => '180 Days',
            '365d'  => '365 Days',
            '3600d' => 'Lifetime'
        );
    }

    /*
    @Description: Get Daily backup report list
    @Author     : Harshad Hirapara
    @Date       : 09-07-2019
    */
    function get_daily_backup_report_list()
    {
        return array(
            'inventory_by_warehouse' => 'Daily Inventory By Warehouse Backup',
            'shipped_order_email'    => 'Yesterday Shipped Orders',
            'unshipped_order_email'  => 'Unshipped Orders Daily',
            'schedule_sales_report'  => 'Scheduled Sales Reports'
        );
    }

    /*
    @Description: Get Quebec states available in order_master
    @Author     : Akshit Arora
    @Date       : 05-08-2019
    */
    function get_quebec_order_states()
    {
        return array(
                    "Quebec",
                    "QC",
                    "Que",
                    "PQ",
                    "Québec"
                );
    }

    /*
    @Description: Get GroupOn Ship Method
    @Author     : Mehul Modh
    @Date       : 12-09-2019
    */
    function get_groupon_ship_method()
    {
        return array(
                    "BEST",
                    "FSPL",
                    "FXSP",
                    "FEXS",
                    "FHMD",
                    "OTHER"
                );
    }

    function get_taxjar_providers()
    {
        return array(
            'amazon'    => 'Amazon',
            'etsy'      => 'Etsy',
            'shopify'   => 'Shopify',
            'api'       => 'API',
            'groupon'   => 'Groupon',
            'woot'      => 'Woot',
            'overstock' => 'Overstock',
            'wayfair'   => 'Wayfair',
            'manual'    => 'Manual',
            'newegg'    => 'Newegg',
            'newegg_biz' => 'Newegg Biz',
            'rakuten'   => 'Rakuten',
            'ebay'      => 'Ebay'
        );
    }

    /*
    @Description: Get Package types for Shipping manifest
    @Author     : Akshit Arora
    @Date       : 24-09-2019
    */
    function get_shipping_manifest_package_type()
    {
        return array(
            'pallet'    => 'Pallet',
            'carton'    => 'Carton'
        );
    }

    function taxjar_integration_status_values()
    {
        return array(
            '3' => 'Not Integrated',
            '1' => 'Marketplace Integrated',
            '2' => 'Manual Integrated'
        );
    }

    /*
    @Description: Get actions available for amazon product policy violations
    @Author     : Akshit Arora
    @Date       : 02-10-2019
    */
    function get_amazon_policy_actions()
    {
        return array(
            'listing_removed' => 'Listing Removed',
            'listing_at_risk_of_removal' => 'Listing At Risk Of Removal',
        );
    }

    /*
    @Description: Get Order Promise Date Range
    @Author     : Harshad Hirapara
    @Date       : 06-11-2019
    */
    function get_order_promise_date_range()
    {
        return array(
            'late_order' => 'Late Order',
            'due_today' => 'Due Today',
            'due_1' => 'Due 1 Day',
            'due_2' => 'Due 2 Day',
            'due_3' => 'Due 3 Day',
            'due_3' => 'Due 3 Day',
            'due_4' => 'Due 4 Day',
            'due_5' => 'Due 5 Day',
            'due_6' => 'Due 6 Day',
            'due_7' => 'Due 7 Day'
        );
    }

    /*
    @Description  : get Import schedule job type
    @Author       : Harshad Hirapara
    @Input        : N/A
    @Output       : N/A
    @Date         : 13-11-2019
    */

    function get_import_schedule_job_type()
    {   
        $import_inventory = array(
            "filter_file_name"=>"file_name",
            "file_path"=>"uploads/bulk_inventory_excel/",
            "filter_type"=>"serialize"
        );

        $import_master = array(
            "filter_file_name"=>"file_name",
            "file_path"=>"uploads/bulk_import_excel/",
            "filter_type"=>"serialize"
        );

        $import_shipping_cost = array(
            "filter_file_name"=>"file_name",
            "file_path"=>"uploads/import_shipping_cost/",
            "filter_type"=>"serialize"
        );

        $job_type['import_inventory']                          =$import_inventory;
        $job_type['import_inventory_group']                    =$import_inventory;
        $job_type['import_inventory_vendor']                   =$import_inventory;
        $job_type['import_inventory_warehouse']                =$import_inventory;
        $job_type['import_kit_component']                      =$import_inventory;
        $job_type['import_shadow']                             =$import_inventory;
        $job_type['import_product_custom_column']              =$import_inventory;
        $job_type['import_listing_manager_selling_price']      =$import_inventory;
        $job_type['update_overstock_selling_price']            =$import_inventory;
        $job_type['update_walmart_listing_date']               =$import_inventory;
        $job_type['import_walmart_quick_post_product']         =$import_inventory;
        $job_type['import_new_product']                        =$import_inventory;
        $job_type['import_new_ebay_product']                   =$import_inventory;
        $job_type['import_marketplace_pushed_product_posting'] =$import_inventory;
        $job_type['import_product_status']                     =$import_inventory;
        $job_type['import_amazon_properties']                  =$import_inventory;
        $job_type['import_ebay_product_category']              =$import_inventory;
        $job_type['import_ebay_item_specifications']           =$import_inventory;
        $job_type['import_product_repricer_values']            =$import_inventory;
        $job_type['import_product_upc']                        =$import_inventory;
        $job_type['amazon_sale_details']                       =$import_inventory;
        $job_type['ebay_sale_details']                         =$import_inventory;
        $job_type['inventory_adjustment_import']               =$import_inventory;
        $job_type['cycle_count_list_import']                   =$import_inventory;
        $job_type['update_primary_location']                   =$import_inventory;
        $job_type['update_product_buying_cost']                =$import_inventory;
        $job_type['update_landed_buying_price']                =$import_inventory;
        $job_type['import_product_ingredient']                 =$import_inventory;
        $job_type['update_product_classification']             =$import_inventory;
        $job_type['update_manual_shipping_cost']               =$import_inventory;
        $job_type['update_channel_or_country_specific']        =$import_inventory;
        $job_type['update_product_location_notes']             =$import_inventory;
        $job_type["update_product_multiple_upc"]               =$import_inventory;
        $job_type["bulk_upload_auto_repricer"]                 =$import_inventory;
        $job_type['import_marketplace_product_auto_repricer']  =$import_inventory;
        $job_type['import_ebay_repricer_values']               =$import_inventory;
        $job_type['bulk_import_employee_working_hours']        =$import_master;
        $job_type['import_item_to_list']                       =$import_master;
        $job_type['import_ingredient_list']                    =$import_master;
        $job_type['import_customer_wholesale_price']           =$import_master;
        $job_type['import_ebay_bulk_listing_products']         =$import_master;
        $job_type['import_amazon_bulk_listing_products']       =$import_master;
        $job_type['import_shipping_cost']                      =$import_shipping_cost;

        return $job_type;  
    }

    /*
    @Description  : get order payment status
    @Author       : Akshit Arora
    @Input        : N/A
    @Output       : N/A
    @Date         : 04-12-2019
    */
    function get_order_payment_status()
    {
        return array(
            '0' => 'Payment Pending',
            '1' => 'Payment Received',
            '2' => 'Payment Partially Received',
        );
    }

    /*
    @Description  : get order payment types
    @Author       : Akshit Arora
    @Input        : N/A
    @Output       : N/A
    @Date         : 04-12-2019
    */
    function get_order_payment_types()
    {
        return array(
            "paypal_send"       => "Paypal",
            "Cash"              => "Cash",
            "Wire"              => "Wire",
            "Email"             => "Email",
            "Other"             => "Other",
            "Purchase Order"    => "Purchase Order",
            "Gift Certificate"  => "Gift Certificate",
            "Telephone"         => "Telephone",
            "check"             => "Check",
        );
    }

    /*
    @Description  : get order payment types
    @Author       : Akshit Arora
    @Input        : N/A
    @Output       : N/A
    @Date         : 04-12-2019
    */
    function get_restricted_cron_name()
    {
        return array(
            "AMAZON_PRODUCT_DELIST_BY_KEYWORD",
            "EBAY_PRODUCT_DELIST_BY_KEYWORD",
            "WALMART_PRODUCT_DELIST_BY_KEYWORD",
            "PROCESS_PRODUCT_IMAGES",
            "UPDATE_PRODUCT_SALES_DETAILS",
            "PROCESS_MARKETPLACE_PROPERTIES"
        );
    }

    /*
    @Description  : get channels which can have multiple payments
    @Author       : Akshit Arora
    @Input        : N/A
    @Output       : N/A
    @Date         : 09-12-2019
    */
    function get_channels_with_multiple_payments()
    {
        return array(
            "Amazon",
            "Ebay",
            "Manual"
        );
    }

     /*
    @Description: Get team group
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 01-05-2020
    */
    function get_team_group()
    {
       return array(
        'Inhouse'    => 'Inhouse',
        'Ace'        => 'Ace',
        'Notions'    => 'Notions'        
        );
    }

     /*
    @Description: Get walmart status
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 04-05-2020
    */
    function get_walmart_status()
    {
       return array(
        '0'    => 'Not Processed',
        '1'        => 'Processed',
        '2'    => 'Error'        
        );
    }

    /*
    @Description: Get team type
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 01-05-2020
    */
    function get_team_type()
    {
       return array(
        'Picking'    => 'Picking Team',
        'Shipping'   => 'Shipping Team',
        'Receiveing' => 'Receiveing Team'
        );
    }

    /*
    @Description: Get Google Item Condition
    @Author     : Akshit Arora
    @Input      : 
    @Output     : 
    @Date       : 07-05-2020
    */
    function get_google_item_conditions()
    {
        return array(
            'new' => 'New'
        );
    }

    /*
    @Description: Get Google Product Channels
    @Author     : Akshit Arora
    @Input      : 
    @Output     : 
    @Date       : 07-05-2020
    */
    function get_google_product_channels()
    {
        return array(
            'local' => 'Local',
            'online' => 'Online'
        );
    }

    /*
    @Description: Get vendor classification  array
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 19-05-2020
    */
    function get_vendor_classification()
    {
        return array(
            
            'Private Label','Wholesale','Warehouse','Closeout'  
           
        );
    }

      /*
    @Description: Get hr management status
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 19-05-2020
    */
    function get_hr_management_status()
    {
       return array(
        '0' => 'Deactive',
        '1' => 'Active',
            
        );
    }

      /*
    @Description: Get hr Document type
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 19-05-2020
    */
    function get_hr_document_type()
    {
       return array(

        'Job Descriptions','Performance Appraisal', 'Employee Handbook', 'Employment Contract', 'Onboarding Procedure',
            
        );
    }

    /*
    @Description: Get Task type for task tickit
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 26-05-2020
    */
    function get_task_master_type()
    {
       return array(
        'General','Specific'            
        );
    }

     /*
    @Description: Get Task priority for task tickit
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 09-06-2020
    */
    function get_task_master_priority()
    {
       return array(
        'low'    => 'Low',
        'medium' => 'Medium',
        'high'   => 'High'            
        );
    }

    /*
    @Description: Get Task status for task tickit
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 28-05-2020
    */
    function get_task_master_status()
    {
       return array(
        'Pending',
        'On Hold',
        'Need Review',
        'In Process',
        'Developer Completed',
        'Completed',
        );
    }

      /*
    @Description: Get Task status for task tickit
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 28-05-2020
    */
    function get_task_bulk_options()
    {
       return array(
        'status'    => 'Change Status',
        'priority'  => 'Change Priority',
        'task_type' => 'Change Task Type',
        'internal_developer' => 'Change Internal Developer Value',
        'task_department' => 'Change Dapartment',
        
        );
    }



     /*
    @Description: Get article status 
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 11-06-2020
    */
    function get_article_master_status()
    {
       return array(
       'Post','Draft'
        );
    }

     /*
    @Description: Get task type labels
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 11-06-2020
    */
    function get_task_master_type_labels($id)
    {
       $labels =  array(
       '1'=>'General',
       '2'=>'System Bug',
       '3'=>'Data Query',
       '4'=>'Order ID',
       '9'=>'System Enhancement'
        );

       return $labels[$id];
    }
       /*
    @Description: Get report type list for 
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 31-07-2020
    */
    function get_report_type_list()
    {
       $labels =  array(
       'total_in_house_orders'  =>'In-House Orders List',
       'total_not_picked'       =>'Not Picked Orders List',
       'total_unshipped_picked' =>'Unshipped Picked Orders List',
       'total_shipped_picked'   =>'Shipped Picked Orders List'     
        );

       return  $labels;
    }

    /*
    @Description: Get True Value Credential
    @Author     : Bhavesh Chaudhari
    @Input      : 
    @Output     : 
    @Date       : 25-08-2020
    */
    function true_value_credentials()
    {
        $credentials = array(
            'storenumber'  => '21797',
            'authkey'      => 'ep-:gARibrY-wLIUP%4_X;:B!vN#]_W9#Bb+oqN5#Jk_khjp',
            'Accept'       => 'application/xml'
        );

        return  $credentials;
    }

    /*
    @Description: Get  Internal Developer value
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : developer name
    @Date       : 12-10-2020
    */
    function internal_developer_value()
    {
        $internal_developer_value = array(
            'Ankita'  => 'Ankita',
            'Mehul'   => 'Mehul',
            'Harshad' => 'Harshad',
            'Bhavesh' => 'Bhavesh'
        );

        return  $internal_developer_value;
    }

    /*
    @Description: Get pesticide regisration status
    @Author     : Harshad Hirapara
    @Input      : 
    @Output     : 
    @Date       : 12-10-2020
    */
    function get_pesticide_registration_status()
    {
        $pesticide_registration_status = array(
            'yes'    => 'This product is a pesticide or pesticide device, as defined under the U.S. Federal Insecticide, Fungicide and Rodenticide Act',
            'no'     => 'This product is not a pesticide or pesticide device, as defined under the U.S. Federal Insecticide, Fungicide, and Rodenticide Act',
            'exempt' => 'This product qualifies for an exemption from registration under the U.S. Federal Insecticide, Fungicide, and Rodenticide Act'
        );

        return $pesticide_registration_status;
    }
    
    /*
    @Description: Get pesticide regisration status
    @Author     : Harshad Hirapara
    @Input      : 
    @Output     : 
    @Date       : 12-10-2020
    */

    function get_pesticide_marking()
    {
        $pesticide_marking = array(
            'EPARN' => 'EPA Registration Number',
            'EPAEN' => 'EPA Establishment Number',
        );

        return $pesticide_marking;

    }

        /*
    @Description: Get  California Proposition 65
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 20-10-2020
    */
    function get_california_prop_65_warning_type()
    {
        $type = array(  
                        'alcoholic_beverage'                      => 'Alcoholic Beverage',
                        'chemical'                                => 'Chemical',
                        'diesel_engines'                          => 'Diesel Engines',
                        'food'                                    => 'Food',
                        'furniture'                               => 'Furniture',
                        'on_product_cancer'                       => 'On Product Cancer',
                        'on_product_combined_cancer_reproductive' => 'On Product Combined Cancer Reproductive',
                        'on_product_reproductive'                 => 'On Product Reproductive',
                        'passenger_or_off_road_vehicle'           => 'Passenger Or Off Road Vehicle',
                        'raw_wood'                                => 'Raw Wood',
                        'recreational_vessel'                       => 'Recreational Vessel'
        );

        return $type;
    }



      /*
    @Description: Get Email type
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 11-01-2021
    */

    function get_email_display_name_list()
    {
        $pesticide_marking = array(
            'SALES_REPORT'                       => 'Sales Report',
            'FBA_PRODUCT_QTY'                    => 'FBA Product Qty',
            'CRON_MASTER_BREAKDOWN'              => 'Cron Master Breakdown',
            'SEND_WOOT_ORDERS_EMAIL'             => 'Send Woot Orders Email',
            'SEND_PRIME_ORDERS_EMAIL'            => 'Send Prime Orders Email',
            'SHIPPING_AND_PICKING_NUMBERS_EMAIL' => 'Shipping And Picking Numbers Email',
            'STOPPED_BACKGROUND_PROCESS_EMAIL'   => 'Stopped Background Process Email',
            'RECEIVING_NUMBERS_EMAIL'            => 'Receiving Numbers Email',
            'INCOMMING_PO_NOT_VERIFIED_EMAIL'    => 'Incomming PO Not Verified Email',
        );

        return $pesticide_marking;

    }

    /*
    @Description: From Email array
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 12-01-2021
    */

    function get_from_email_list()
    {

        $to_email_array = array(   
            'no-reply@tntdealsinc.com'   => array('email_id'=>'no-reply@tntdealsinc.com','password'=>'Spou7iuy$'),
            'purchasing@tntdealsinc.com' => array('email_id'=>'purchasing@tntdealsinc.com','password'=>'JSf!#b1!9R6$$'),
            'customerservice@pensnmore.com'   => array('email_id'=>'customerservice@pensnmore.com','password'=>'Spou7iuy$')           
        );

        return $to_email_array;

    }

    /*
    @Description: ebay product url
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 12-01-2021
    */
    function get_epid_product_url($store_type = NULL,$marketplace_sku=NULL)
    { 
     
        $CI = &get_instance();
        $store_type = strtolower($store_type);
        if($store_type != '' && $marketplace_sku != '')
        {
            $store_url = array(
               
                'ebay'       => 'https://www.ebay.com/p/'.$marketplace_sku,
                'ebay us'    => 'https://www.ebay.com/p/'.$marketplace_sku,
                'ebay uk'    => 'https://www.ebay.co.uk/p/'.$marketplace_sku,
                'ebay au'    => 'https://www.ebay.com.au/p/'.$marketplace_sku,
               
                );
            return (isset($store_url[$store_type])) ?  $store_url[$store_type] : '';
        }   
        else
        {
            return 'javascript:void(0)';
        }
    }

    /*
    @Description: Get S&S Activewear Credential
    @Author     : Bhavesh Chaudhari
    @Input      : 
    @Output     : 
    @Date       : 26-01-2021
    */
    function ss_activewear_credentials()
    {
        $credentials = array(
            'auth'          => true,
            'auth_type'     => 'basic',
            'auth_username' => '583922',
            'auth_password' => '9718b4f0-8346-4a9a-9e75-59b052675d4c',
        );

        return  $credentials;
    }

    /*
    @Description: Get S&S Activewear product brand link
    @Author     : Ankita Mandlik
    @Input      : 
    @Output     : 
    @Date       : 09-02-2021
    */
    function ss_activewear_brand_link($style_name='')
    {
        $link = '';
        
        if($style_name !== '')
        {
            $link = 'https://www.ssactivewear.com/ps/?q='.$style_name;
        }
        
        return  $link;
    }

?>
