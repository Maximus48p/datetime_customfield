<?php
/**
 * MantisBT - A PHP based bugtracking system
 *
 * MantisBT is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * MantisBT is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright Copyright 2002  MantisBT Team - mantisbt-dev@lists.sourceforge.net
 * @link http://www.mantisbt.org
 * @package MantisBT
 */

$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_STRING] = array (
	'#display_possible_values' => true,
	'#display_valid_regexp' => true,
	'#display_length_min' => true,
	'#display_length_max' => true,
	'#display_default_value' => true,
	'#function_return_distinct_values' => null,
	# MySQL 4-bytes UTF-8 chars workaround #21101
	'#function_value_to_database' => 'db_mysql_fix_utf8',
	'#function_database_to_value' => null,
	'#function_print_input' => 'cfdef_input_textbox',
	'#function_print_value' => null,
	'#function_string_value' => 'cfdef_prepare_string',
	'#function_string_value_for_email' => null,
);

$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_TEXTAREA] = array (
	'#display_possible_values' => true,
	'#display_valid_regexp' => true,
	'#display_length_min' => true,
	'#display_length_max' => true,
	'#display_default_value' => true,
	'#function_return_distinct_values' => null,
	# MySQL 4-bytes UTF-8 chars workaround #21101
	'#function_value_to_database' => 'db_mysql_fix_utf8',
	'#function_database_to_value' => null,
	'#function_print_input' => 'cfdef_input_textarea',
	'#function_print_value' => 'cfdef_print_textarea',
	'#function_string_value' => 'cfdef_prepare_string',
	'#function_string_value_for_email' => null,
);

$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_NUMERIC] = array (
	'#display_possible_values' => true,
	'#display_valid_regexp' => true,
	'#display_length_min' => true,
	'#display_length_max' => true,
	'#display_default_value' => true,
	'#function_return_distinct_values' => null,
	'#function_value_to_database' => null,
	'#function_database_to_value' => null,
	'#function_print_input' => 'cfdef_input_textbox',
	'#function_print_value' => 'cfdef_print_numeric',
	'#function_string_value' => 'cfdef_prepare_numeric',
	'#function_string_value_for_email' => null,
);

$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_FLOAT] = array (
	'#display_possible_values' => true,
	'#display_valid_regexp' => true,
	'#display_length_min' => true,
	'#display_length_max' => true,
	'#display_default_value' => true,
	'#function_return_distinct_values' => null,
	'#function_value_to_database' => null,
	'#function_database_to_value' => null,
	'#function_print_input' => 'cfdef_input_textbox',
	'#function_print_value' => 'cfdef_print_float',
	'#function_string_value' => 'cfdef_prepare_float',
	'#function_string_value_for_email' => null,
);

$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_ENUM] = array (
	'#display_possible_values' => true,
	'#display_valid_regexp' => true,
	'#display_length_min' => true,
	'#display_length_max' => true,
	'#display_default_value' => true,
	'#function_return_distinct_values' => 'cfdef_prepare_list_distinct_values',
	'#function_value_to_database' => null,
	'#function_database_to_value' => null,
	'#function_print_input' => 'cfdef_input_list',
	'#function_print_value' => null,
	'#function_string_value' => 'cfdef_prepare_list_value',
	'#function_string_value_for_email' => 'cfdef_prepare_list_value_for_email',
);

$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_EMAIL] = array (
	'#display_possible_values' => true,
	'#display_valid_regexp' => true,
	'#display_length_min' => true,
	'#display_length_max' => true,
	'#display_default_value' => true,
	'#function_return_distinct_values' => null,
	'#function_value_to_database' => null,
	'#function_database_to_value' => null,
	'#function_print_input' => 'cfdef_input_textbox',
	'#function_print_value' => 'cfdef_print_email_value',
	'#function_string_value' => 'cfdef_prepare_email_value',
	'#function_string_value_for_email' => 'cfdef_prepare_email_value_for_email',
);

$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_CHECKBOX] = array (
	'#display_possible_values' => true,
	'#display_valid_regexp' => true,
	'#display_length_min' => true,
	'#display_length_max' => true,
	'#display_default_value' => true,
	'#function_return_distinct_values' => 'cfdef_prepare_list_distinct_values',
	'#function_value_to_database' => 'cfdef_prepare_list_value_to_database',
	'#function_database_to_value' => 'cfdef_prepare_list_database_to_value',
	'#function_print_input' => 'cfdef_input_checkbox',
	'#function_print_value' => null,
	'#function_string_value' => 'cfdef_prepare_list_value',
	'#function_string_value_for_email' => 'cfdef_prepare_list_value_for_email',
);

$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_RADIO] = array (
	'#display_possible_values' => true,
	'#display_valid_regexp' => false,
	'#display_length_min' => false,
	'#display_length_max' => false,
	'#display_default_value' => true,
	'#function_return_distinct_values' => 'cfdef_prepare_list_distinct_values',
	'#function_value_to_database' => null,
	'#function_database_to_value' => null,
	'#function_print_input' => 'cfdef_input_radio',
	'#function_print_value' => null,
	'#function_string_value' => 'cfdef_prepare_list_value',
	'#function_string_value_for_email' => 'cfdef_prepare_list_value_for_email',
);

$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_LIST] = array (
	'#display_possible_values' => true,
	'#display_valid_regexp' => true,
	'#display_length_min' => true,
	'#display_length_max' => true,
	'#display_default_value' => true,
	'#function_return_distinct_values' => 'cfdef_prepare_list_distinct_values',
	'#function_value_to_database' => null,
	'#function_database_to_value' => null,
	'#function_print_input' => 'cfdef_input_list',
	'#function_print_value' => null,
	'#function_string_value' => 'cfdef_prepare_list_value',
	'#function_string_value_for_email' => 'cfdef_prepare_list_value_for_email',
);

$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_MULTILIST] = array (
	'#display_possible_values' => true,
	'#display_valid_regexp' => true,
	'#display_length_min' => true,
	'#display_length_max' => true,
	'#display_default_value' => true,
	'#function_return_distinct_values' => 'cfdef_prepare_list_distinct_values',
	'#function_value_to_database' => 'cfdef_prepare_list_value_to_database',
	'#function_database_to_value' => 'cfdef_prepare_list_database_to_value',
	'#function_print_input' => 'cfdef_input_list',
	'#function_print_value' => null,
	'#function_string_value' => 'cfdef_prepare_list_value',
	'#function_string_value_for_email' => 'cfdef_prepare_list_value_for_email',
);

$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_DATE] = array (
	'#display_possible_values' => true,
	'#display_valid_regexp' => true,
	'#display_length_min' => true,
	'#display_length_max' => true,
	'#display_default_value' => true,
	'#function_return_distinct_values' => null,
	'#function_value_to_database' => null,
	'#function_database_to_value' => null,
	'#function_default_to_value' => 'cfdef_prepare_date_default',
	'#function_print_input' => 'cfdef_input_date',
	'#function_print_value' => null,
	'#function_string_value' => 'cfdef_prepare_date_value',
	'#function_string_value_for_email' => 'cfdef_prepare_date_value_for_email',
);

$g_custom_field_type_definition[CUSTOM_FIELD_TYPE_DATETIME] = array (
	'#display_possible_values' => true,
	'#display_valid_regexp' => true,
	'#display_length_min' => true,
	'#display_length_max' => true,
	'#display_default_value' => true,
	'#function_return_distinct_values' => null,
	'#function_value_to_database' => null,
	'#function_database_to_value' => null,
	'#function_default_to_value' => 'cfdef_prepare_datetime_default',
	'#function_print_input' => 'cfdef_input_datetime',
	'#function_print_value' => 'cfdef_print_datetime',
	'#function_string_value' => 'cfdef_prepare_datetime_value',
	'#function_string_value_for_email' => 'cfdef_prepare_datetime_value_for_email',
); # datetime

/**
 * Prepare List Value for database storage
 * @param string $p_value Value.
 * @return string
 */
function cfdef_prepare_list_database_to_value( $p_value ) {
	return rtrim( ltrim( $p_value, '|' ), '|' );
}

/**
 * Print value of text area custom field with sanitization and link processing.
 * @param string $p_value The custom field value.
 */
function cfdef_print_textarea( $p_value ) {
	echo string_display_links( $p_value );
}

/**
 * Print value of numeric custom field with sanitization and link processing.
 * @param string $p_value The custom field value.
 */
function cfdef_print_numeric( $p_value ) {
	echo is_numeric( $p_value ) ? (int)$p_value : '';
}

/**
 * Print value of float custom field with sanitization and link processing.
 * @param string $p_value The custom field value.
 */
function cfdef_print_float( $p_value ) {
	echo is_numeric( $p_value ) ? (float)$p_value : '';
}

/**
 * Prepare value for custom fields of type numeric.
 * @param string $p_value The string value.
 * @return int The numeric value.
 */
function cfdef_prepare_numeric( $p_value ) {
	$t_value = (int)$p_value;
	return $t_value;
}

/**
 * Prepare value for custom fields of type float.
 * @param string $p_value The string value.
 * @return float The float value.
 */
function cfdef_prepare_float( $p_value ) {
	$t_value = (float)$p_value;
	return $t_value;
}

/**
 * Prepare value for custom fields of type string.
 * @param string $p_value The string value.
 * @return string The string value.
 */
function cfdef_prepare_string( $p_value ) {
	return $p_value;
}

/**
 * Prepare List Value for email
 * @param string $p_value Value.
 * @return string
 */
function cfdef_prepare_list_value_for_email( $p_value ) {
	# strip start and end markers before converting markers to commas
	return str_replace( '|', ', ', mb_substr( str_replace( '||', '|', '|' . $p_value . '|' ), 1, -1 ) );
}

/**
 * Print the value of the email custom field.
 * @param string $p_value The database value
 * @return void
 */
function cfdef_print_email_value( $p_value ) {
	if( !is_blank( $p_value ) ) {
		print_email_link( $p_value, $p_value );
	}
}

/**
 * Format email address for text email
 * @param string $p_value The database value.
 * @return string The plain text value
 */
function cfdef_prepare_email_value_for_email( $p_value ) {
	return is_null( $p_value ) ? '' : $p_value;
}

/**
 * format date value for email
 * @param integer $p_value Value.
 * @return string
 */
function cfdef_prepare_date_value_for_email( $p_value ) {
	return cfdef_prepare_date_value( $p_value );
}

/**
 * format datetime value for email
 * @param integer $p_value Value.
 * @return string
 */
function cfdef_prepare_datetime_value_for_email( $p_value ) {
    return cfdef_prepare_datetime_value( $p_value ); # datetime
}

/**
 * Translates the default date value entered by the creator of the custom
 * field into a date value.  For example, translate '=tomorrow' to tomorrow's
 * date.
 * @param string $p_value The default date string.
 * @return string The calculated default date value if $p_value starts with '=', otherwise, returns $p_value.
 */
function cfdef_prepare_date_default( $p_value ) {
	if( is_blank( $p_value ) ) {
		return '';
	}

	$t_value = trim( $p_value );
	$t_value_length = mb_strlen( $t_value );

	# We are expanding {tomorrow}, {yesterday}, {+3 days}, {-7 days}, {next week}
	# See strtotime() for more details about supported formats.
	if( $t_value_length >= 3 && $t_value[0] == '{' && $t_value[$t_value_length - 1] == '}' ) {
		$t_value = mb_substr( $t_value, 1, $t_value_length - 2 );
		$t_value = @strtotime( $t_value );

		# Different versions of PHP return different values in case of error.
		if( $t_value == -1 || $t_value === false ) {
			return '';
		}
	}

	return $t_value;
}

/**
 * Translates the default date value entered by the creator of the custom
 * field into a datetime value.  For example, translate '=tomorrow' to tomorrow's
 * datetime.
 * @param string $p_value The default datetime string.
 * @return string The calculated default datetime value if $p_value starts with '=', otherwise, returns $p_value.
 * datetime
 */
function cfdef_prepare_datetime_default( $p_value ) {
	if( is_blank( $p_value ) ) {
		return '';
	}

	$t_value = trim( $p_value );
	$t_value_length = mb_strlen( $t_value );

	# We are expanding {tomorrow}, {yesterday}, {+3 days}, {-7 days}, {next week}
	# See strtotime() for more details about supported formats.
	if( $t_value_length >= 3 && $t_value[0] == '{' && $t_value[$t_value_length - 1] == '}' ) {
		$t_value = mb_substr( $t_value, 1, $t_value_length - 2 );
		$t_value = @strtotime( $t_value );

		# Different versions of PHP return different values in case of error.
		if( $t_value == -1 || $t_value === false ) {
			return '';
		}
	}

	return $t_value;
}

/**
 * string_custom_field_value
 * @param string $p_value Value.
 * @return string
 */
function cfdef_prepare_list_value( $p_value ) {
	# strip start and end markers before converting markers to commas
	return string_display_line( str_replace( '|', ', ', mb_substr( str_replace( '||', '|', '|' . $p_value . '|' ), 1, -1 ) ) );
}

/**
 * Get the value for the email custom field.
 * @param string $p_value The database value
 * @return string The email value.
 */
function cfdef_prepare_email_value( $p_value ) {
	return $p_value;
}

/**
 * Prepare date value
 * @param integer $p_value Date timestamp.
 * @return string
 */
function cfdef_prepare_date_value( $p_value ) {
	if( $p_value != null ) {
		if( is_numeric( $p_value ) ) {
			return date( config_get( 'short_date_format' ), $p_value );
		}
	}

	return '';
}

/**
 * Prepare datetime value
 * @param integer $p_value DateTime timestamp.
 * @return string
 */
function cfdef_prepare_datetime_value( $p_value ) {
	if( $p_value != null ) {
    	if( is_numeric( $p_value ) ) {
      		return date( config_get( 'normal_date_format' ), $p_value );
    	}
  	}

  	return ''; # datetime
}

/**
 * print_custom_field_input
 * @param array $p_field_def          Custom field definition.
 * @param mixed $p_custom_field_value Custom field value.
 * @param string $p_required          The "required" attribute to add to the field
 * @return void
 */
function cfdef_input_list( array $p_field_def, $p_custom_field_value, $p_required = '' ) {
	$t_values = explode( '|', custom_field_prepare_possible_values( $p_field_def['possible_values'] ) );
	$t_list_size = $t_possible_values_count = count( $t_values );

	if( $t_possible_values_count > 5 ) {
		$t_list_size = 5;
	}

	if( $p_field_def['type'] == CUSTOM_FIELD_TYPE_ENUM ) {
		$t_list_size = 0;	# for enums the size is 0
	}

	if( $p_field_def['type'] == CUSTOM_FIELD_TYPE_MULTILIST ) {
		echo '<select ' . helper_get_tab_index() . ' id="custom_field_' . $p_field_def['id'] . '" name="custom_field_' . $p_field_def['id'] . '[]" size="' . $t_list_size . '" multiple="multiple"' . $p_required .'>';
	} else {
		echo '<select ' . helper_get_tab_index() . ' id="custom_field_' . $p_field_def['id'] . '" name="custom_field_' . $p_field_def['id'] . '" size="' . $t_list_size . '"' . $p_required .'>';
	}

	$t_selected_values = explode( '|', $p_custom_field_value );
	foreach( $t_values as $t_option ) {
		if( in_array( $t_option, $t_selected_values, true ) ) {
			echo '<option value="' . string_attribute( $t_option ) . '" selected="selected"> ' . string_display_line( $t_option ) . '</option>';
		} else {
			echo '<option value="' . string_attribute( $t_option ) . '">' . string_display_line( $t_option ) . '</option>';
		}
	}
	echo '</select>';
}

/**
 * print_custom_field_input
 * @param array $p_field_def          Custom field definition.
 * @param mixed $p_custom_field_value Custom field value.
 * @param string $p_required          The "required" attribute to add to the field
 * @return void
 */
function cfdef_input_checkbox( array $p_field_def, $p_custom_field_value, $p_required = '' ) {
	$t_values = explode( '|', custom_field_prepare_possible_values( $p_field_def['possible_values'] ) );
	$t_checked_values = explode( '|', $p_custom_field_value );
	for( $i = 0; $i < count( $t_values ); $i++ ) {
		$t_input_id = 'custom_field_' . $p_field_def['id'] . '_value_' . $i;
		$t_input_name = 'custom_field_' . $p_field_def['id'] . '[]';
		echo '<label for="' . $t_input_id . '">' . "\n";
		echo '<input class="ace" id="' . $t_input_id . '" ' . helper_get_tab_index() . ' type="checkbox" name="' . $t_input_name . '" value="' . string_attribute( $t_values[$i] ) . '"';
		check_checked( $t_checked_values, $t_values[$i] );
		echo " />\n";
		echo '<span class="lbl">&#160;' . string_display_line( $t_values[$i] ) . '</label>' . "\n";
		echo '</label>&#160;&#160;&#160;&#160;' . "\n";
	}
}

/**
 * print_custom_field_input
 * @param array $p_field_def          Custom field definition.
 * @param mixed $p_custom_field_value Custom field value.
 * @param string $p_required          The "required" attribute to add to the field
 * @return void
 */
function cfdef_input_radio( array $p_field_def, $p_custom_field_value, $p_required = '' ) {
	$t_values = explode( '|', custom_field_prepare_possible_values( $p_field_def['possible_values'] ) );

	$t_len = strlen( $p_custom_field_value );
	if( $t_len >= 2 && ( $p_custom_field_value[0] == '|' ) && ( $p_custom_field_value[$t_len-1] == '|' ) ) {
		$t_checked_value = substr( $p_custom_field_value, 1, $t_len - 2 );
	} else {
		$t_checked_value = $p_custom_field_value;
	}

	for( $i = 0; $i < count( $t_values ); $i++ ) {
		$t_input_id = 'custom_field_' . $p_field_def['id'] . '_value_' . $i;
		$t_input_name = 'custom_field_' . $p_field_def['id'];
		echo '<label for="' . $t_input_id . '">';
		echo '<input class="ace" id="' . $t_input_id . '" ' . helper_get_tab_index() . ' type="radio" name="' . $t_input_name . '" value="' . string_attribute( $t_values[$i] ) . '"' . $p_required;
		check_checked( $t_checked_value, $t_values[$i] );
		echo " />\n";
		echo '<span class="lbl">&#160;' . string_display_line( $t_values[$i] ) . '</span>' . "\n";
		echo '</label>&#160;&#160;&#160;&#160;' . "\n";
	}
}

/**
 * print_custom_field_input
 * @param array $p_field_def          Custom field definition.
 * @param mixed $p_custom_field_value Custom field value.
 * @param string $p_required          The "required" attribute to add to the field
 * @return void
 */
function cfdef_input_textbox( array $p_field_def, $p_custom_field_value, $p_required = '' ) {
	echo '<input ' . helper_get_tab_index() . ' type="text" id="custom_field_' . $p_field_def['id'] . '" name="custom_field_' . $p_field_def['id'] . '" size="80"' . $p_required;
	if( 0 < $p_field_def['length_max'] ) {
		echo ' maxlength="' . $p_field_def['length_max'] . '"';
	} else {
		echo ' maxlength="255"';
	}
	echo ' value="' . string_attribute( $p_custom_field_value ) .'" />';
}

/**
 * print_custom_field_input
 * @param array $p_field_def          Custom field definition.
 * @param mixed $p_custom_field_value Custom field value.
 * @param string $p_required          The "required" attribute to add to the field
 * @return void
 */
function cfdef_input_textarea( array $p_field_def, $p_custom_field_value, $p_required = '' ) {
	echo '<textarea class="form-control" ' . helper_get_tab_index() . ' id="custom_field_' . $p_field_def['id'] . '" name="custom_field_' . $p_field_def['id'] . '"' . $p_required;
	echo ' cols="70" rows="8">' . $p_custom_field_value .'</textarea>';
}

/**
 * Prints the controls for the date selector.
 *
 * @param string $p_field_def          The custom field definition.
 * @param string $p_custom_field_value The custom field value to print.
 * @param string $p_required           The "required" attribute to add to the field
 * @return void
 */
function cfdef_input_date( $p_field_def, $p_custom_field_value, $p_required = '' ) {
	print_date_selection_set( 'custom_field_' . $p_field_def['id'], config_get( 'short_date_format' ), $p_custom_field_value, false, true, 0, 0, 'input-sm', $p_required );
}

/**
 * Prints the controls for the datetime selector.
 *
 * @param string $p_field_def          The custom field definition.
 * @param string $p_custom_field_value The custom field value to print.
 * @param string $p_required           The "required" attribute to add to the field
 * @return void
 */
function cfdef_input_datetime( $p_field_def, $p_custom_field_value, $p_required = '' ) {
  print_datetime_selection_set( 'custom_field_' . $p_field_def['id'], config_get( 'normal_date_format' ), $p_custom_field_value, false, true, 0, 0, 'input-sm', $p_required );
}

/**
 * Print value of datetime custom field
 * @param string $p_value The custom field value.
 */
function cfdef_print_datetime( $p_value ) {
  error_log($p_value);
  if ($p_value != null) {
    echo date(config_get('normal_date_format'), $p_value);
  }
}


/**
 * value to database
 * @param string $p_value Value.
 * @return string
 */
function cfdef_prepare_list_value_to_database( $p_value ) {
	if( '' == $p_value ) {
		return '';
	} else {
		return '|' . $p_value . '|';
	}
}

/**
 * Prepare possible values for option list
 * @param array $p_field_def Custom field definition.
 * @return array|boolean
 */
function cfdef_prepare_list_distinct_values( array $p_field_def ) {
	db_param_push();
	$t_query = 'SELECT possible_values FROM {custom_field} WHERE id=' . db_param();
	$t_result = db_query( $t_query, array( $p_field_def['id'] ) );

	$t_row = db_fetch_array( $t_result );
	if( !$t_row ) {
		return false;
	}

	$t_possible_values = custom_field_prepare_possible_values( $t_row['possible_values'] );
	$t_values_arr = explode( '|', $t_possible_values );
	$t_return_arr = array();

	foreach( $t_values_arr as $t_option ) {
		array_push( $t_return_arr, $t_option );
	}
	return $t_return_arr;
}
