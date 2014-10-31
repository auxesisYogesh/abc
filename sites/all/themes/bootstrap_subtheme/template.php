<?php

/**
 * @file
 * template.php
 */ 
 /* --to change variable--- */
function bootstrap_subtheme_preprocess(&$variables) {
		//$variables['site_name'] = 'Ugly Guys';
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
