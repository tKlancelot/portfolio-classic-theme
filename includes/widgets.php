<?php

function theme_widgets_init()
{

    register_sidebar(
        array(
            'name'          => esc_html__('Job-Description', 'classic-portfolio'),
            'id'            => 'job-description',
            'description'   => esc_html__('Add widgets.', 'classic-portfolio'),
            'before_widget' => '<div id="%1$s" class="widget widget-job-description %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-job-description g-text">',
            'after_title'   => '</h3>',
        )
    );
}

add_action('widgets_init', 'theme_widgets_init');