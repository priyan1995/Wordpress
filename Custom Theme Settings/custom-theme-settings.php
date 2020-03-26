


// ----------------- theme options page

add_action("admin_menu", "mythemeoptions");

function mythemeoptions()
{

  add_menu_page(
    "theme-options", //page title
    "Theme-options", //Menu title
    "manage_options", //Capability
    "theme-options", //Menu Slug
    "mycustom_options", //callback funtion
    "dashicons-admin-generic" //icon

  );
}
// ==========

function mycustom_options()
{
  // we have to link our custom settings
  ?>
  <div>
  <h1>Theme Options Panel</h1>
  <?php settings_errors(); ?>
    <form action="options.php" method="post">
      <?php
      settings_fields("section");
      do_settings_sections("theme-options");
      submit_button();
      ?>
    </form>
  </div>
<?php
}

// ===========

// theme options settings page
function theme_options_setting()
{

  add_settings_section(
    "section", //id of setting section
    "All Page", // title
    "", // callback function
    "theme-options" // page
  );

  // add_settings_field(

   add_settings_field(
    "facebook_url",
    "Facebook Url",
    "display_fb_url",
    "theme-options",
    "section"

  );

  add_settings_field(
    "twitter_url",
    "Twitter Url",
    "display_twitt_url",
    "theme-options",
    "section"

  );

  add_settings_field(
    "insta_url",
    "Instagram Url",
    "display_insta_url",
    "theme-options",
    "section"

  );


  add_settings_field(
    "linkedin_url",
    "LinkedIn Url",
    "display_linkedin_url",
    "theme-options",
    "section"

  );


  add_settings_field(
    "phoneNo",
    "Contact Number",
    "display_cont_num",
    "theme-options",
    "section"

  );

  
  add_settings_field(
    "email_hy",
    "Email",
    "display_email",
    "theme-options",
    "section"

  );

  add_settings_field(
    "address_hy",
    "Address",
    "display_address",
    "theme-options",
    "section"

  );

  add_settings_field(
    "footer_desc",
    "Footer Description",
    "display_footer_desc",
    "theme-options",
    "section"

  );

  add_settings_field(
    "sidebar_desc",
    "Sidebar Description",
    "display_sidebar_desc",
    "theme-options",
    "section"

  );

  add_settings_field(
    "footer_logo",
    "Footer Logo",
    "display_footer_logo",
    "theme-options",
    "section"

  );

  add_settings_field(
    "sidebar_logo",
    "Sidebar Logo",
    "display_sidebar_logo",
    "theme-options",
    "section"

  );


  // we need to add this setting to area
  // register_setting("section", "channel_name");
  register_setting("section", "facebook_url");
  register_setting("section", "twitter_url");
  register_setting("section", "insta_url");
  register_setting("section", "linkedin_url");
  register_setting("section", "phoneNo");
  register_setting("section", "email_hy");
  register_setting("section", "address_hy");
  register_setting("section", "footer_desc");
  register_setting("section", "sidebar_desc");
  register_setting("section", "footer_logo");
  register_setting("section", "sidebar_logo");
}

add_action("admin_init", "theme_options_setting");

function display_fb_url()
{?>
  <input type="url" name="facebook_url" value="<?php echo get_option('facebook_url'); ?>" id="facebook_url" /> 
<?php
}

function display_twitt_url(){
  ?>
  <input type="url" name="twitter_url" value="<?php echo get_option('twitter_url'); ?>" id="twitter_url" /> 
<?php
}

function display_insta_url(){
  ?>
  <input type="url" name="insta_url" value="<?php echo get_option('insta_url'); ?>" id="insta_url" /> 
<?php
}

function display_linkedin_url(){
  ?>
  <input type="url" name="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>" id="linkedin_url" /> 
<?php
}

function display_cont_num(){
  ?>
  <input type="text" name="phoneNo" value="<?php echo get_option('phoneNo'); ?>" id="phoneNo" /> 
<?php
}

function display_email(){
  ?>
  <input type="email" name="email_hy" value="<?php echo get_option('email_hy'); ?>" id="email_hy" /> 
<?php
}

function display_address(){
  ?>
  <textarea  name="address_hy"  id="address_hy" >
  <?php echo get_option('address_hy'); ?>
 </textarea>
<?php
}

function display_footer_desc(){
  ?>
  <textarea  name="footer_desc"  id="footer_desc" >
  <?php echo get_option('footer_desc'); ?>
 </textarea>
<?php
}

function display_sidebar_desc(){
  ?>
  <textarea  name="sidebar_desc"  id="sidebar_desc" >
  <?php echo get_option('sidebar_desc'); ?>
 </textarea>
<?php
}

function display_footer_logo(){
  ?>
  <img src="<?php echo get_option('footer_logo'); ?>">
  <br>
 <input type="url" name="footer_logo" value="<?php echo get_option('footer_logo'); ?>" id="footer_logo" />
 
 
<?php
}

function display_sidebar_logo(){
  ?>
  <img src="<?php echo get_option('sidebar_logo'); ?>">
  <br>
 <input type="url" name="sidebar_logo" value="<?php echo get_option('sidebar_logo'); ?>" id="sidebar_logo" />
 
 
<?php
}
