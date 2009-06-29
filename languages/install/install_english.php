<?php

// INSTALL 

/* **************************************************************************************************** 
 *  File: /languages/install/install_english.php
 *  Purpose: A language file for English. It's used whenever an install file needs to output language.
 *  Notes: ---
 *  License:
 *
 *   This file is part of Hotaru CMS (http://www.hotarucms.org/).
 *
 *   Hotaru CMS is free software: you can redistribute it and/or modify it under the terms of the 
 *   GNU General Public License as published by the Free Software Foundation, either version 3 of 
 *   the License, or (at your option) any later version.
 *
 *   Hotaru CMS is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 *   even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License along with Hotaru CMS. If not, 
 *   see http://www.gnu.org/licenses/.
 *   
 *   Copyright (C) 2009 Hotaru CMS - http://www.hotarucms.org/
 *
 **************************************************************************************************** */

/* Common language */
$lang["install_title"] = "Hotaru CMS Setup";
$lang["install_next"] = "Next";
$lang["install_back"] = "Back";
$lang["install_trouble"] = "Having trouble? Visit the forums at <a href='http://hotarucms.org'>HotaruCMS.org</a> for help.";

/* Step 1 */
$lang["install_step1"] = "Step 1/6: Welcome";
$lang["install_step1_welcome"] = "Welcome to Hotaru CMS. Click \"Next\" to begin setting up your site...";

/* Step 2 */
$lang["install_step2"] = "Step 2/6: Database Setup";
$lang["install_step2_instructions"] = "To set up a database for Hotaru CMS, you'll need to do the following";
$lang["install_step2_instructions1"] = "Create a database called <i>hotaru</i> in your web host's control panel. Make a note of your username and password!";
$lang["install_step2_instructions2"] = "Open <pre>/hotaru_settings.php</pre> and fill in the \"Database Details\" section.";
$lang["install_step2_instructions3"] = "Save and upload <pre>hotaru_settings.php</pre> to your server, then click \"Next\"...";
$lang["install_step2_warning"] = "<b>Warning</b>";
$lang["install_step2_warning_note"] = "When you click \"Next\", new database tables will be created, deleting any old ones you may have!";


/* Step 3 */
$lang["install_step3"] = "Step 3/6: Create Database Tables";
$lang["install_step3_creating_table"] = "Creating table";
$lang["install_step3_already_exists"] = "It seems there are already tables for Hotaru CMS in the database.";
$lang["install_step3_continue"] = "Click \"Next\" to continue.";
$lang["install_step3_rebuild_note"] = "<i>Note</i>: If you'd like to start fresh, ";
$lang["install_step3_rebuild_link"] = "delete and rebuild the database tables";
$lang["install_step3_success"] = "Database tables created successfully. Click \"Next\" to configure Hotaru CMS.";

/* Step 4 */
$lang["install_step4"] = "Step 4/6: Names, Paths and Themes";
$lang["install_step4_instructions"] = "Remember <pre>hotaru_settings.php</pre>? If you haven't already, you'll need to fill in the other details now";
$lang["install_step4_instructions1"] = "Give your site a <pre>sitename</pre>, e.g \"My Fantastic Hotaru Site\".";
$lang["install_step4_instructions2"] = "Fill in the <pre>baseurl</pre>, e.g. http://www.myfantastichotarusite.com/. Don't forget the trailing slash (/)";
$lang["install_step4_instructions3"] = "If you want to use a custom theme instead of the default one, change <i>current_theme</i> to match the folder name of your custom theme.";
$lang["install_step4_instructions4"] = "Save and upload <pre>hotaru_settings.php</pre> to your server, then click \"Next\"...";

/* Step 5 */
$lang["install_step5"] = "Step 5/6: Admin Registration";
$lang["install_step5_instructions"] = "Register yourself as a site administrator";
$lang["install_step5_username_error"] = "Your username must be at least 4 characters and can contain letters, dashes and underscores only.";
$lang["install_step5_password_error"] = "The password must be at least 8 characters and can only contain letters, numbers and these symbols: @ * # - _";
$lang["install_step5_email_error"] = "That doesn't parse as a valid email address.";
$lang["install_step5_make_note"] = "Make a note of your new username, email and password before clicking \"Next\"...";
$lang["install_step5_update_success"] = "Updated successfully.";
$lang["install_step5_form_update"] = "Update";

/* Step 6 */
$lang["install_step6"] = "Step 6/6: Completion";
$lang["install_step6_installation_complete"] = "Installation has been successfully completed.";
$lang["install_step6_installation_delete"] = "You <b>must</b> delete the install folder or someone else could run the install script and wipe everything!";
$lang["install_step6_installation_go_play"] = "Done? Okay, go and play with your new Hotaru site!";
$lang["install_home"] = "Visit";

?>