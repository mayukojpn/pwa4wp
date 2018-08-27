<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/ryu-compin/pwa4wp
 * @since      1.0.0
 *
 * @package    PWA_for_WordPress
 * @subpackage PWA_for_WordPress/admin/partials
 */

$manifestSettings = $data['manifestSettings'];
$cacheSettings    = $data['cacheSettings'];
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
    <h1>PWA for WordPress Configulations</h1>
    <h2><?php _e("Current PWA Status","pwa4wp");?></h2>
    <?php if($data['errorMsg']){
        echo('<ul class="msgArea">');
        echo("<li><h3>");
        _e("Errors or Messages.");
        echo("</h3></li>");
        foreach ($data['errorMsg'] as $msg){
            echo("<li>&gt;&gt;&nbsp;" . $msg ."</li>");
        }
        echo ('</ul>');
    }
    ?>
    <ul>
    <li>
        Manifest :
        <?php
            if(get_option('pwa4wp_manifest_created')){
                // icon-green
                _e("working","pwa4wp");
            }else{
                // icon-gray
                _e("not working","pwa4wp");
            }
        ?>
        <br>
    </li>
    <li>
        ServiceWorker :
        <?php
        if(get_option('pwa4wp_sw_created')){
            // icon-green
            _e("working","pwa4wp");
        }else{
            // icon-gray
            _e("not working","pwa4wp");
        }
        ?>
        <br>
    </li>
    </ul>
<hr>
    <h2><?php _e("Usage","pwa4wp"); ?></h2>
    <ul>
        <li>
	        <?php _e("To make your website to PWA, this plugin make two files, \"Manifest\" and \"ServiceWorker\" in your website.","pwa4wp"); ?><br>
	        <?php _e("Manifest file is a json file that has configurations of web applications.","pwa4wp"); ?><br>
	        <?php _e("ServiceWorker is a javascript file that controls PWA's functions.","pwa4wp"); ?><br>
	        <?php _e("To start PWA, configure two files from below setup links.","pwa4wp"); ?><br>
        </li>
        <li>
            <h3>STEP1</h3>
            <a href="admin.php?page=PWA+for+WordPress%3F1">
            <?php
            _e("Configure Manifest","pwa4wp");
            ?>
            </a><br>
            <?php
            echo "<br>";
            _e("Prepare icon image file, image file must be png format.","pwa4wp");
            echo "<br>";
            _e("Setup manifest file from Manifest Configuration page.","pwa4wp");
            echo "<br>";
            _e("Image file will be resized to fit icon sizes automatically.","pwa4wp");
            echo "<br>";
            ?><br>

        </li>
        <li>
            <h3>STEP2</h3>
            <a href="admin.php?page=PWA+for+WordPress%3F2">
            <?php _e("Configure ServiceWorker","pwa4wp");?>
            </a><br>
	        <?php
	        echo "<br>";
	        _e("Setup ServiceWorker file from ServiceWorker Configuration page.","pwa4wp");
	        ?><br><br>
        </li>
    </ul>
    <hr>
    <br>
    <h2><?php _e("About developer of this plugin","pwa4wp"); ?></h2>
    <ul>
        <li>
            <h3><?php _e("PWA for Wordpress develop team","pwa4wp"); ?></h3>
            <ul>
                <li>
                    Ryoichi Tsukada&nbsp;/&nbsp;Asial<br>
                </li>
                <li>
                    Yuki Okamoto&nbsp;/&nbsp;Asial<br>
                </li>
                <li>
                    Satoshi Tsuda&nbsp;/&nbsp;Asial<br>
                </li>
                <li>
                    Ryunosuke Shindo&nbsp;/&nbsp;Computing Initiative<br>
                </li>
            </ul>
            <br>
        </li>
        <li>
            <h3><?php _e("Contact us","pwa4wp"); ?></h3>
	        <?php _e("If you find anyting about this plugin, contact us from mailform below.","pwa4wp"); ?><br>
            <br>
            <a href="https://www.compin.jp/contact-pwa4wp/" target="_blank">https://www.compin.jp/contact-pwa4wp/</a>
            <br>
        </li>
    </ul>
    <br>
    <hr>
    <br>
    <?php
    echo "<br>";
    echo "<br>";
    ?>
</div>