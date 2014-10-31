<?php
/* ---adding code in links--- */
function bootstrap_subtheme_preprocess_link(&$variables) {
	$variables['text']= 'Click Me';

}

/* --adding images--- */

function bootstrap_subtheme_preprocess_image(&$variables) {
	$variables['image']= 'arr.png';
}

/* --To see all the hooks-- */
function bootstrap_subtheme_preprocess(&$variables, $hook) {
		kpr($hook);
 }
 
 
/* --To change the site name and site slogan Variable data using array--- */
function bootstrap_subtheme_preprocess(&$variables) {
		$variables['site_name'] = 'Ugly Guys';
		$slogans = array(
		t('Life is Beautiful'),
		t('Your wish our Mission'),
		t('Anything like Nothing'),
		t('Happiness Comes with Success'),
		);
		$slogan = $slogans[array_rand($slogans)];
		$variables['site_slogan'] = $slogan;
		//kpr($variables);
 }
