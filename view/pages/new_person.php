<?php get_header(); ?>
    <div class="content-area">
        <form method="post" action="<?php echo SITE_URL ?>/person/addnew/">
            <input type="hidden" name="new_user_form" value="YES">
            <div class="form-element">
                <label for="first-name">First Name</label>
                <input type="text" name="first_name" id="first-name">
            </div>
            <div class="form-element">
                <label for="last-name">Last Name</label>
                <input type="text" name="last_name" id="last-name">
            </div>
            <div class="form-element">
                <label for="address">Address</label>
                <input type="text" name="address" id="address">
            </div>
            <div class="form-element">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
<?php get_footer(); ?>