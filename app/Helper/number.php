<?php

if (!function_exists('parse_numbers')) {
    /**
     * This function parses numbers so that it'd not be null or string or any other type
     *
     * @param string        $numbers      - the string that contains number, or not, or null, anyhow this will be converted into number or 0
     * @param boolean       $is_integer   - this determines the result to be int or float
     *
     * @return int|float
     * */
    function parse_numbers($numbers, $is_integer = false) {
        if (!isset($numbers) || is_null($numbers) || empty($numbers)) return 0;

        return $is_integer
            ? intval(str_replace(',','', $numbers))
            : floatval(str_replace(',','', $numbers));
    }
}

if(!function_exists('display_numbers') ) {
    /**
     * This function displays numbers so that it'd not be null or string or any other type
     * This function is useful to display data in report or interface
     *
     * @param string        $numbers      - the string that contains number, or not, or null, anyhow this will be converted into number or 0
     * @param boolean       $is_integer   - this determines the result to be int or float
     *
     * @return string     return either '-' | '1' | '1.00' | '1.000'
     * */
    function display_numbers($numbers, $decimal_count = 0, $is_integer = false) {
        if (is_null($numbers) || empty($numbers) || $numbers == 0) return '-';

        $formatted_value = number_format(parse_numbers($numbers, $is_integer), $decimal_count);

        return $formatted_value;
    }
}