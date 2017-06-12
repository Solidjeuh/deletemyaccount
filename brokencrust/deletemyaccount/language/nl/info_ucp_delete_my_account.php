<?php
/**
 *
 * Delete My Account. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 BrokenCrust
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be> 
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(

	'DELETE_MY_ACCOUNT' => 'Verwijder Mijn Account',
	'DELETE_YOUR_ACCOUNT' => 'Verwijder je account',
	'DELETE_MY_ACCOUNT_TEXT' => 'Je kan dit formulier gebruiken om je account te verwijderen. Wanneer voltooit zal al je persoonlijke en private data verwijderd zijn van dit forum, en je zal niet meer kunnen inloggen.',
	'REALY_DELETE' => 'Ik wens echt mijn account te verwijderen.',
	'UNDERSTAND_DELETE' => 'Ik begrijp dat deze actie niet ongedaan gemaakt kan worden.',
	'DELETE_MY_POSTS' => 'Verwijder ook mijn berichten (berichten worden gast berichten indien niet gemarkeerd).',
	'ENTER_PASSWORD' => 'Vul je wachtwoord in',
	'ENTER_PASSWORD_HERE' => 'typ hier je wachtwoord ...',
	'DELETED_USER' => 'Verwijderde gebruiker %s',
	'DELETE_FINAL' => 'Laatste bevestiging',
	'DELETE_FINAL_CONFIRM' => '<p>Bedankt om lid te zijn van deze site. We vinden het erg om je te zien gaan.</p><p>Je aanvraag is goedgekeurd. Dit is de laatste bevestiging. Wens je jouw account permanent te verwijderen?</p>',

	'LOG_USER_DELETED' => 'Gebruiker %s (ID %s) heeft zijn/haar account verwijderd. ',
	'LOG_POST_REMOVED' => 'Zijn/haar berichten werden verwijderd.',
	'LOG_POST_RETAINED' => 'Zijn/haar berichten werden bijgehouden.',
	'LOG_NO_POSTS' => 'Ze hadden geen berichten.',

	'REALLY_ERROR' => 'Je moet bevestigen dat je jouw account echt wenst te verwijderen.',
	'UNDERSTAND_ERROR' => 'Je moet bevestigen dat je begrijpt dat deze actie niet ongedaan gemaakt kan worden.',
	'PASSWORD_ERROR' => 'Het opgegeven wachtwoord is niet correct.',
	'FOUNDER_ERROR' => 'Oprichters kunnen het zelf verwijderingsproces niet gebruiken.',
	'BAD_FORM_KEY_ERROR' => 'Het ingediende formulier kan niet worden gevalideerd. Gelieve uw aanvraag opnieuw in te dienen.',
	'GOODBYE_ERROR' => 'Uw account werd verwijderd.'

));
