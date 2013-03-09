<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Logo file setting
    $name = 'theme_anole/logo';
    $title = get_string('logo','theme_anole');
    $description = get_string('logodesc', 'theme_anole');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $settings->add($setting);

     // Foot note setting
    $name = 'theme_anole/footnote';
    $title = get_string('footnote','theme_anole');
    $description = get_string('footnotedesc', 'theme_anole');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $settings->add($setting);

    //Background color                                                                                                                                                               
    $name = 'theme_anole/bgcolor';
    $title = get_string('bgcolor','theme_anole');
    $description = get_string('bgcolordesc', 'theme_anole');
    $default = 'f5f5f5';
    $previewconfig = array('selector'=>'#page-header', 'style'=>'header');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // theme color setting
    $name = 'theme_anole/themecolor';
    $title = get_string('themecolor','theme_anole');
    $description = get_string('themecolordesc', 'theme_anole');
    $default = '#2E3332';
    $previewconfig = array('selector'=>'#page-header', 'style'=>'header');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // blocks header colors
    $name = 'theme_anole/headercolor';
    $title = get_string('headercolor','theme_anole');
    $description = get_string('headercolordesc', 'theme_anole');
    $default = '#A7A39B';
    $previewconfig = array('selector'=> 'div.region-content div.header', 'style'=>'header');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // blocks header current colors
    $name = 'theme_anole/currentcolor';
    $title = get_string('currentcolor','theme_anole');
    $description = get_string('currentcolordesc', 'theme_anole');
    $default = '#2E3332';
    $previewconfig = array('selector'=> 'div.region-content div.header.current', 'style'=>'header');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // custommenucurrent color
    $name = 'theme_anole/currentcustommenucolor';
    $title = get_string('currentcustommenucolor','theme_anole');
    $description = get_string('currentcustommenucolor', 'theme_anole');
    $default = '#342917';
    $previewconfig = array('selector'=> 'div.region-content div.header.current', 'style'=>'header');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // Custom CSS file
    $name = 'theme_anole/customcss';
    $title = get_string('customcss','theme_anole');
    $description = get_string('customcssdesc', 'theme_anole');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);

    //Activate 
    $name = "theme_anole/collasibleTopics";
    $title = get_string("collapsibleTopics", 'theme_anole');
    $description = get_string('collasibleTopicsdesc', 'theme_anole');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $settings->add($setting);

    // Custom Javascript file
    $name = 'theme_anole/customjs';
    $title = get_string('customjs','theme_anole');
    $description = get_string('customjsdesc', 'theme_anole');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);

}
