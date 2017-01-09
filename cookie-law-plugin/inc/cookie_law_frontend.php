<?php

$settings = get_option('cookie_law_settings');


?>



<div id="overlay" style="background-color: <?php echo $settings['background_color']; ?>">

    <h2 id="cookie-header"><?php echo (!empty($settings['text_to_display'])) ? $settings['text_to_display'] : __('Cookie Law plugin','CL') ?> <a href="http://<?php echo (!empty($settings['link'])) ? $settings['link'] : 'www.twitter.com' ?>"><?php echo (!empty($settings['link_text'])) ? $settings['link_text'] : __('this is a link','CL') ?></a></h2>
    <input id="button" type="button" value="<?php echo (!empty($settings['button_text'])) ? $settings['button_text'] : __('Save','CL') ?>">

</div>

