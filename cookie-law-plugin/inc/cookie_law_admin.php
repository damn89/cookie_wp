<?php
$settings = get_option('cookie_law_settings');

if (isset($_POST['submit'])) {

    $array = array(
        'background_color' => $_POST['bg_color'],
        'text_to_display' => $_POST['display_text'],
        'button_text' => $_POST['submit_text'],
        'text_link' => $_POST['text_link'],
        'link' => $_POST['link']
    );

    update_option('cookie_law_settings', $array, true);
}

?>

<form method="post">
    <input type="color" name="bg_color" value="<?php echo (!empty($settings['background_color'])) ? $settings['background_color'] : '#FFFFFF'; ?>"><br>
    <label> display text</label><input type="text" name="display_text" data-text="display_text" value="<?php echo $settings['text_to_display']; ?>"><br>
    <label> submit text</label><input type="text" name="submit_text" value="<?php echo $settings['button_text']; ?>"><br>
    <label>text to link</label><input type="text" name="text_link" value="<?php echo $settings['text_link']; ?>"><br>
    <label>link to cookies</label><input type="text" name="link" value="<?php echo $settings['link']; ?>"><br>
    <input type="submit" name="submit" value="<?php _e('Save', 'CL') ?>">
</form>