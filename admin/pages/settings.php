<?php defined('ABSPATH') or die('No script kiddies please!');


if ($_REQUEST['submit']) {
    if (isset($_POST['delete_myph_db'])) {
        update_option('should_delete_myph_db', true);
    } else {
        update_option('should_delete_myph_db', false);
    }

    echo '<div class="updated" id="message"><p><strong>' . __("Settings Saved.", "prophets_horoscope") . '</strong>.</p></div>';
}
?>

<div class="wrap">
    <h2><?= __('Settings', 'prophets_horoscope') ?></h2>
    <div class="nav-tab-wrapper">
        <a href="?page=myph&amp;tab=main-settings" class="nav-tab"><?= __('Main Settings', 'prophets_horoscope') ?></a>
    </div>

    <form method="post" action="">
        <table class="form-table" role="presentation">
            <tbody>
                <tr>
                    <th scope="row">با حذف افزونه دیتای آن نیز حذف شود؟</th>
                    <td>
                        <input type="checkbox" name="delete_myph_db" <?= get_option('should_delete_myph_db') ? 'checked' : '' ?>>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="<?= __('Save Settings', 'prophets_horoscope') ?>">
        </p>
    </form>
</div>