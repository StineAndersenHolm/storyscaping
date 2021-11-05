<?php
/*
* Plugin Name: Rabat Plugin 
* Plugin URI: http://truestory.stineholm.dk
* Description: This is a discount form Plugin for Truestory based on HTML5, CSS, JS and PHP
* Version: 3.0.0
* Author: Stine Holm
* Author URI: http://truestory.stineholm.dk
* License: GPL2
*/

function rabat_form()
{
    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<section>';
  	$content .= '<div class="logo_div">';
    $content .= '<img id="logo" src=" '.plugins_url("rabat-form/img/logo.png").' " ';
    $content .= 'alt="Logo">';
  	$content .= '</div>';
    $content .= '<h2 id="velkommen">Stop scrolling - Start rolling</h2>';
    $content .= '<p class="sofakartoffel_tekst">Hvilken sofakartoffel skal du dele din Truestory oplevelse med? </p>';
    $content .= '<h1 id="rabat">Få 20%</h1>';
    $content .= '<p class="sofakartoffel_tekst2">på din næste Truestory oplevelse</p>';
    $content .= '</section>';
    
    $content .= '<section class="form">';
	$content .= '<h5 class="sofakartoffel_tekst3">Tilmeld dig og få tilsendt en rabatkode</h5>';
    $content .= '<form action="sti-holm@hotmail.com" id="myForm">';
    $content .= '<div class="input">';
    $content .= '<input type="text" name="fname" id="fname" placeholder="Udfyld dit navn" required>';
    $content .= '<input type="email" name="email" id="email" placeholder="Din Email" required>';
    $content .= '</div>';

  	$content .= '<div>';
 	$content .= '<input type="submit" value="Indsend" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';

  	$content .= '<div>';
    $content .= '<p class="sofakartoffel_tekst4">*Rabatkoden skal bruges indenfor 6 mdr.</p>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_rabat','rabat_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('rabat-form/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('rabat-form/js/script.js'), array('jquery'), null, true);
    }


