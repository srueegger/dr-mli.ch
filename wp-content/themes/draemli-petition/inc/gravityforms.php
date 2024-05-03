<?php
/* GravityForms: Europäsisches Adressformat anzeigen (PLZ vor Ortschaft) */
function gf_change_address_format( $format, $field ) {
  return 'zip_before_city';
}
add_filter( 'gform_address_display_format', 'gf_change_address_format', 10, 2 );

/* Gravityforms: CSV-Exporte mit ";" statt "," für bessere Microsoft Excel Kompatibilität */
add_filter( 'gform_export_separator', function() {
  return ';';
} );