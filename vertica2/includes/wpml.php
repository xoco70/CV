<?php

add_filter("get_next_post_plus_join", "m_get_next_post_plus_join");

add_filter("get_next_post_plus_where", "m_get_next_post_plus_where");

add_filter("get_previous_post_plus_join", "m_get_next_post_plus_join");

add_filter("get_previous_post_plus_where", "m_get_next_post_plus_where");

function m_get_next_post_plus_join($join) {
    global $wpdb;
    $join .= "LEFT JOIN {$wpdb->prefix}icl_translations as t on t.element_id = p.ID";
    return $join;
}

function m_get_next_post_plus_where($where) {
    global $sitepress;
    $where .= "AND t.language_code = '" . $sitepress->get_current_language() . "'";
    return $where;
}