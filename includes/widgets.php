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

    register_sidebar(
        array(
            'name'          => esc_html__('Presentation-Heading', 'classic-portfolio'),
            'id'            => 'presentation-heading',
            'description'   => esc_html__('Add widgets.', 'classic-portfolio'),
            'before_widget' => '<div id="%1$s" class="widget widget-presentation-heading %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h1 class="presentation-heading g-text">',
            'after_title'   => '</h1>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__('Greetings', 'classic-portfolio'),
            'id'            => 'greetings',
            'description'   => esc_html__('Add widgets.', 'classic-portfolio'),
            'before_widget' => '<div id="%1$s" class="widget widget-greetings %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="greetings g-text section-heading">',
            'after_title'   => '</h2>',
        )
    );
}

add_action('widgets_init', 'theme_widgets_init');