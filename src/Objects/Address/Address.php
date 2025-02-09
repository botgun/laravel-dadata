<?php

namespace BotGun\DaData\Objects\Address;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property string|null    $postal_code
 * @property string|null    $country
 * @property string|null    $country_iso_code
 * @property string|null    $federal_district
 * @property string|null    $region_fias_id
 * @property string|null    $region_kladr_id
 * @property string|null    $region_iso_code
 * @property string|null    $region_with_type
 * @property string|null    $region_type
 * @property string|null    $region_type_full
 * @property string|null    $region
 * @property string|null    $area_fias_id
 * @property string|null    $area_kladr_id
 * @property string|null    $area_with_type
 * @property string|null    $area_type
 * @property string|null    $area_type_full
 * @property string|null    $area
 * @property string|null    $sub_area_fias_id
 * @property string|null    $sub_area_kladr_id
 * @property string|null    $sub_area_with_type
 * @property string|null    $sub_area_type
 * @property string|null    $sub_area_type_full
 * @property string|null    $sub_area
 * @property string|null    $city_fias_id
 * @property string|null    $city_kladr_id
 * @property string|null    $city_with_type
 * @property string|null    $city_type
 * @property string|null    $city_type_full
 * @property string|null    $city
 * @property string|null    $city_district_fias_id
 * @property string|null    $city_district_kladr_id
 * @property string|null    $city_district_with_type
 * @property string|null    $city_district_type
 * @property string|null    $city_district_type_full
 * @property string|null    $city_district
 * @property string|null    $settlement_fias_id
 * @property string|null    $settlement_kladr_id
 * @property string|null    $settlement_with_type
 * @property string|null    $settlement_type
 * @property string|null    $settlement_type_full
 * @property string|null    $settlement
 * @property string|null    $street_fias_id
 * @property string|null    $street_kladr_id
 * @property string|null    $street_with_type
 * @property string|null    $street_type
 * @property string|null    $street_type_full
 * @property string|null    $street
 * @property string|null    $stead_fias_id
 * @property string|null    $stead_kladr_id
 * @property string|null    $stead_type
 * @property string|null    $stead_type_full
 * @property string|null    $stead
 * @property string|null    $house_fias_id
 * @property string|null    $house_kladr_id
 * @property string|null    $house_type
 * @property string|null    $house_type_full
 * @property string|null    $house
 * @property string|null    $block_type
 * @property string|null    $block_type_full
 * @property string|null    $block
 * @property string|null    $entrance
 * @property string|null    $floor
 * @property string|null    $flat_fias_id
 * @property string|null    $flat_type
 * @property string|null    $flat_type_full
 * @property string|null    $flat
 * @property string|null    $room_fias_id
 * @property string|null    $room_type
 * @property string|null    $room_type_full
 * @property string|null    $room
 * @property string|null    $postal_box
 * @property string|null    $fias_id
 * @property string|null    $fias_level
 * @property string|null    $kladr_id
 * @property string|null    $geoname_id
 * @property string|null    $capital_marker
 * @property string|null    $okato
 * @property string|null    $oktmo
 * @property string|null    $tax_office
 * @property string|null    $tax_office_legal
 * @property string|null    $geo_lat
 * @property string|null    $geo_lon
 * @property string|null    $qc_geo
 * @property string|null    $fias_actuality_state
 * @property string|null    $city_area
 * @property string|null    $beltway_hit
 * @property string|null    $beltway_distance
 * @property string|null    $stead_cadnum
 * @property string|null    $house_cadnum
 * @property string|null    $flat_cadnum
 * @property string|null    $room_cadnum
 * @property string|null    $house_flat_count
 * @property string|null    $flat_area
 * @property string|null    $square_meter_price
 * @property string|null    $flat_price
 * @property string|null    $timezone
 * @property string|null    $qc_complete
 * @property string|null    $qc_house
 * @property string|null    $qc
 * @property string|null    $source
 * @property string|null    $result
 * @property string|null    $unparsed_parts
 * @property Metro[]        $metro
 * @property string[]       $history_values
 */
class Address extends BaseObject
{
    protected array $attributes = [
        'postal_code'               => 'string|null',
        'country'                   => 'string|null',
        'country_iso_code'          => 'string|null',
        'federal_district'          => 'string|null',
        'region_fias_id'            => 'string|null',
        'region_kladr_id'           => 'string|null',
        'region_iso_code'           => 'string|null',
        'region_with_type'          => 'string|null',
        'region_type'               => 'string|null',
        'region_type_full'          => 'string|null',
        'region'                    => 'string|null',
        'area_fias_id'              => 'string|null',
        'area_kladr_id'             => 'string|null',
        'area_with_type'            => 'string|null',
        'area_type'                 => 'string|null',
        'area_type_full'            => 'string|null',
        'area'                      => 'string|null',
        'sub_area_fias_id'          => 'string|null',
        'sub_area_kladr_id'         => 'string|null',
        'sub_area_with_type'        => 'string|null',
        'sub_area_type'             => 'string|null',
        'sub_area_type_full'        => 'string|null',
        'sub_area'                  => 'string|null',
        'city_fias_id'              => 'string|null',
        'city_kladr_id'             => 'string|null',
        'city_with_type'            => 'string|null',
        'city_type'                 => 'string|null',
        'city_type_full'            => 'string|null',
        'city'                      => 'string|null',
        'city_district_fias_id'     => 'string|null',
        'city_district_kladr_id'    => 'string|null',
        'city_district_with_type'   => 'string|null',
        'city_district_type'        => 'string|null',
        'city_district_type_full'   => 'string|null',
        'city_district'             => 'string|null',
        'settlement_fias_id'        => 'string|null',
        'settlement_kladr_id'       => 'string|null',
        'settlement_with_type'      => 'string|null',
        'settlement_type'           => 'string|null',
        'settlement_type_full'      => 'string|null',
        'settlement'                => 'string|null',
        'street_fias_id'            => 'string|null',
        'street_kladr_id'           => 'string|null',
        'street_with_type'          => 'string|null',
        'street_type'               => 'string|null',
        'street_type_full'          => 'string|null',
        'street'                    => 'string|null',
        'stead_fias_id'             => 'string|null',
        'stead_kladr_id'            => 'string|null',
        'stead_type'                => 'string|null',
        'stead_type_full'           => 'string|null',
        'stead'                     => 'string|null',
        'house_fias_id'             => 'string|null',
        'house_kladr_id'            => 'string|null',
        'house_type'                => 'string|null',
        'house_type_full'           => 'string|null',
        'house'                     => 'string|null',
        'block_type'                => 'string|null',
        'block_type_full'           => 'string|null',
        'block'                     => 'string|null',
        'entrance'                  => 'string|null',
        'floor'                     => 'string|null',
        'flat_fias_id'              => 'string|null',
        'flat_type'                 => 'string|null',
        'flat_type_full'            => 'string|null',
        'flat'                      => 'string|null',
        'room_fias_id'              => 'string|null',
        'room_type'                 => 'string|null',
        'room_type_full'            => 'string|null',
        'room'                      => 'string|null',
        'postal_box'                => 'string|null',
        'fias_id'                   => 'string|null',
        'fias_level'                => 'string|null',
        'kladr_id'                  => 'string|null',
        'geoname_id'                => 'string|null',
        'capital_marker'            => 'string|null',
        'okato'                     => 'string|null',
        'oktmo'                     => 'string|null',
        'tax_office'                => 'string|null',
        'tax_office_legal'          => 'string|null',
        'geo_lat'                   => 'string|null',
        'geo_lon'                   => 'string|null',
        'qc_geo'                    => 'string|null',
        'fias_actuality_state'      => 'string|null',
        'city_area'                 => 'string|null',
        'beltway_hit'               => 'string|null',
        'beltway_distance'          => 'string|null',
        'stead_cadnum'              => 'string|null',
        'house_cadnum'              => 'string|null',
        'flat_cadnum'               => 'string|null',
        'room_cadnum'               => 'string|null',
        'house_flat_count'          => 'string|null',
        'flat_area'                 => 'string|null',
        'square_meter_price'        => 'string|null',
        'flat_price'                => 'string|null',
        'timezone'                  => 'string|null',
        'qc_complete'               => 'string|null',
        'qc_house'                  => 'string|null',
        'qc'                        => 'string|null',
        'source'                    => 'string|null',
        'result'                    => 'string|null',
        'unparsed_parts'            => 'string|null',
        'metro'                     => 'Address\\Metro[]',
        'history_values'            => 'string[]',
    ];
}
