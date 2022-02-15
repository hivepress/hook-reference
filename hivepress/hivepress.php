<?php
/**
 * Filters the taxonomies that should be synced.
 *
 * @since 1.0
 * @hook dt_syncablez_taxonomies
 *
 * @param {array}  $taxonomies  Associative array list of taxonomies supported by current post in the format of `$taxonomy => $terms`.
 * @param {WP_Post} $post       The post object.
 *
 * @return {array} Associative array list of taxonomies supported by current post in the format of `$taxonomy => $terms`.
 */
$taxonomies = apply_filters( 'dt_syncable_taxonomies', $taxonomies, $post );
