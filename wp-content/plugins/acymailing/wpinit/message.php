<?php

namespace AcyMailing\Init;

class acyMessage
{
    public function __construct()
    {
        if (defined('WP_ADMIN') && WP_ADMIN) return;

        if (defined('DOING_AJAX') && DOING_AJAX) return;

        $locale = acym_getVar('string', '_locale', '');
        if (!empty($locale)) return;

        wp_enqueue_style('acy_front_messages_css', ACYM_CSS.'front/messages.min.css?v='.filemtime(ACYM_MEDIA.'css'.DS.'front'.DS.'messages.min.css'));
        wp_enqueue_script('acy_front_messages_js', ACYM_JS.'front/messages.min.js?v='.filemtime(ACYM_MEDIA.'js'.DS.'front'.DS.'messages.min.js'));
        wp_add_inline_script(
            'acy_front_messages_js',
            'var ACYM_AJAX = "admin-ajax.php?action='.ACYM_COMPONENT.'_router&'.acym_noTemplate().'&nocache='.time().'";',
            'before'
        );
    }
}

new acyMessage();
