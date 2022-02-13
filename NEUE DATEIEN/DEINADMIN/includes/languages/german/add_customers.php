<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 *
 * add_customers module modified by Garden 2012-07-20
 * www.inzencart.cz Czech forum for ZenCart
 * Modified for Zen Cart 1.5.0, v1.5.1, lat9 2013-05-16
 * Modified for Zen Cart 1.5.5, lat9 2015-12-24
 * Modified for Zen Cart 1.5.7+, lat9, 2021-12-06
 * Modified for Zen Cart 1.5.7 German webchills 2022-02-13
 */
require DIR_WS_LANGUAGES . $_SESSION['language'] . '/gv_name.php';
define('HEADING_TITLE', 'Kunden hinzufügen');
define('TYPE_BELOW', 'Hier eingeben');
define('PLEASE_SELECT', 'Auswählen');
define('CUSTOMERS_REFERRAL', 'Kundenverweis (Referal)<br/>Erster Aktionskupon');
define('ENTRY_NONE', 'Keine');
define('TABLE_HEADING_COMPANY','Firma');
define('CUSTOMERS_AUTHORIZATION', 'Kunden - Autorisierungsstatus');
define('CUSTOMERS_AUTHORIZATION_0', 'Geprüft');
define('CUSTOMERS_AUTHORIZATION_1', 'Anstehende Autorisierung - Muss zum Browsen im Shop authorisiert sein');
define('CUSTOMERS_AUTHORIZATION_2', 'Anstehende Autorisierung - Darf im Shop browsen, aber keine Preise sehen');
define('CUSTOMERS_AUTHORIZATION_3', 'Anstehende Autorisierung - Darf im Shop browsen und Preise sehen, aber nicht kaufen');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Warnung: Ihr Shop ist auf "Autorisierung ohne Browsen" eingestellt. Der Kunde wurde auf "Anstehende Autorisierung - Muss zum Browsen im Shop authorisiert sein" gesetzt');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Warnung: Ihr Shop ist auf "Autorisierung mit browsen ohne Preisanzeige" eingestellt. Der Kunde wurde auf "Anstehende Autorisierung - Darf im Shop browsen, aber keine Preise sehen" gesetzt');
define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Ihr Kundenstatus wurde aktualisiert. Vielen Dank für Ihren Einkauf! Wir freuen uns auf Ihren nächsten Besuch.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Kundenstatus ist aktualisiert');
define('ENTRY_EMAIL', 'Willkommensemail mit Passwort senden');
// greeting salutation
define('EMAIL_SUBJECT', 'Willkommen bei ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Lieber Herr %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Liebe Frau %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Guten Tag %s' . "\n\n");
// First line of the greeting
define('EMAIL_WELCOME', 'Herzlich willkommen bei <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Herzlichen Glückwunsch! Um Ihren nächsten Besuch in unserem Online Shop zu belohnen, haben wir für Sie einen Aktionskupon reserviert!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Diesen Aktionskupon können Sie bei Ihrem nächsten Einkauf einlösen. Geben Sie dazu die Gutscheinnummer:<br /> %s während des Bestellvorgangs ein' . "\n\n");
define('EMAIL_GV_INCENTIVE_HEADER', 'Wenn Sie heute bei uns einkaufen, erhalten Sie den ' . TEXT_GV_NAME . ' für %s!' . "\n\n");
define('EMAIL_GV_REDEEM', 'Ihr ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' im Wert von: %s ' . "\n\n" . 'Geben Sie dazu bitte den ' . TEXT_GV_REDEEM . ' während des Bestellvorgangs ein, nachdem Sie Ihre Artikel ausgesucht haben.' . "\n\n");
define('EMAIL_GV_LINK', 'Oder lösen Sie den Gutschein mithilfe des folgenden Links ein: ' . "\n\n");
// GV link will automatically be included before this line
define('EMAIL_GV_LINK_OTHER', 'Einmal angegeben, können Sie den ' . TEXT_GV_NAME . ' verwenden. Oder machen Sie mit dem ' . TEXT_GV_NAME . ' doch anderen eine Freude und schenken Ihn an Ihre Freunde weiter!' . "\n\n");
define('EMAIL_TEXT_1', 'Sie können sich ab sofort mit der Emailadresse einloggen, an die Sie dieses Email erhalten haben' . "\n\n");
define('EMAIL_TEXT_2', 'Ihr neues Passwort ist: %s ' . "\n\n");
define('EMAIL_TEXT_3', 'Sie haben nun ein Kundenkonto bei '. STORE_NAME . ' und können unter anderem folgende Funktionen nutzen:' . "\n\n<ul>" . '<li><strong>Bestellhistorie:</strong> - Details zu Ihren Bestellungen ansehen.</li>' . "\n\n" . '<li><strong>Permanenter Warenkotb</strong> - Artikel, die Sie in Ihren Warenkorb gelegt haben, bleiben so lange darin erhalten bis sie entfernt oder bestellt werden.</li>' . "\n\n" . '<li><strong>Adressbuch</strong> - Legen Sie zusätzliche Adressen an (z.B. um ein Geschenk zu versenden).</li>' . "\n\n" . '<li><strong>Artikelbewertungen</strong> - Teilen Sie uns und anderen Kunden Ihre Erfahrungen mit unseren Artikeln mit!</li>' . "\n\n</ul>");
define('EMAIL_CONTACT', 'Sollten Sie einmal Hilfe zu unseren Diensten und Artikeln benötigen, kontaktieren Sie uns unter: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . '</a>' . "\n\n\n" . '');
define('EMAIL_GV_CLOSURE', 'Mit freundlichen Grüssen,' . "\n\n" . STORE_OWNER . "\nShopinhaber\n\n" . '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG . "</a>\n\n");
// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Diese E-Mail Adresse haben wir von Ihnen oder einer unserer Kunden erhalten. Sollten Sie diese Nachricht zu Unrecht erhalten haben, kontaktieren Sie uns bitte unter %s');
define('ERROR_CUSTOMER_ERROR_1','Es sind Fehler aufgetreten');
define('ERROR_CUSTOMER_EXISTS','Kunde besteht bereits: ');
define('CUSTOMERS_BULK_UPLOAD','Massenupload aus CSV Datei: ');
define('CUSTOMERS_FILE_IMPORT','Datei für den Import: ');
define('CUSTOMERS_INSERT_MODE','Importart: ');
define('CUSTOMERS_INSERT_MODE_VALID',' Teilimport (gültige Zeilen einfügen)');
define('CUSTOMERS_INSERT_MODE_FILE',' Datei (die gesamte Datei muss ein gültiges Format haben)');
define('TEXT_FULL_NAME','(Full State)');
define('CUSTOMERS_ONE_FORMS','Hier clicken um einen Kunden einzeln hinzuzufügen');
define('ERROR_ON_LINE', 'Fehler in Zeile %u der Importdatei');
define('MESSAGE_CUSTOMERS_OK', '%u  Kunden wurden erfolgreich hinzugefügt.');
define('MESSAGE_LINES_OK_NOT_INSERTED', 'Die folgenden Zeilen wurden geprüft, aber aufgrund von Fehlern in anderen Einträgen nicht in die Datenbank eingetragen.');
define('MESSAGE_CUSTOMER_OK', 'Der Kunde (%s) wurde erfolgreich hinzugefügt.');
define('LINE_MSG', 'Zeile %u (%s %s)');
define('FORMATTING_THE_CSV', 'Hilfe zur Formatierung deer CSV Datei');
define('CUSTOMERS_SINGLE_ENTRY', 'Einzelnen Kunden hinzufügen: ');
define('DATE_FORMAT_CHOOSE_MULTI', 'Geburtsdatum Format: ');
define('DATE_FORMAT_CHOOSE_SINGLE', 'Geburtsdatum Format: ');
define('RESEND_WELCOME_EMAIL', 'Willkommensmail erneut versenden');
define('BUTTON_RESEND', 'Nochmals versenden');
define('TEXT_PLEASE_CHOOSE', 'Bitte wählen');
define('TEXT_CHOOSE_CUSTOMER', 'Kunden auswählen: ');
define('TEXT_RESET_PASSWORD', 'Kundenpasswort zurücksetzen?');
define('CUSTOMER_EMAIL_RESENT', 'Das Willkommensmail wurde erneut an den Kunden versandt.');
// Configuration and messages for the phone_validate function
define('ENTRY_PHONE_NO_DELIMS', '-. ()'); 
define('ENTRY_PHONE_NO_MIN_DIGITS', '6');
define('ENTRY_PHONE_NO_MAX_DIGITS', '15');
define('ENTRY_PHONE_NO_DELIM_WORLD', '+');  // Set to false if you dont support world phone numbers
define('ENTRY_PHONE_NO_CHAR_ERROR', 'Ungültiges Zeichen (%s) bei "Telefonnummer".');
define('ENTRY_PHONE_NO_MIN_ERROR', 'Weniger als ' . ENTRY_PHONE_NO_MIN_DIGITS . ' Zeichen (0-9) in der "Telefonnummer".');
define('ENTRY_PHONE_NO_MAX_ERROR', 'Mehr als ' . ENTRY_PHONE_NO_MAX_DIGITS . ' Zeichen (0-9) in der "Telefonnummer".');
define('ERROR_NO_UPLOAD_FILE', 'Bitte wählen Sie eine "Importdatei" bevor Sie auf "Upload" clicken');
define('ERROR_FILE_UPLOAD', 'Fehler (%s) beim Hochladen der Datei');
define('ERROR_BAD_FILE_EXTENSION', 'Die Dateierweiterung (%s) muss eine der folgenden sein: ');
define('ERROR_BAD_FILE_HEADER', 'Entweder wurde die Kopfzeile der Importdatei nicht erkannt oder sie ist leer.');
define('ERROR_NO_RECORDS', 'In der Importdatei wurden keine Kundendaten gefunden.');
define('ERROR_FIRST_NAME', '"Vorname" muss mindestens ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' Zeichen haben.');
define('ERROR_LAST_NAME', '"Nachname" muss mindestens ' . ENTRY_LAST_NAME_MIN_LENGTH . ' Zeichen haben.');
define('ERROR_GENDER', 'Geschlecht nicht erkannt. Muss entweder "m" oder "f" sein, habe aber erhalten: ');
define('ERROR_EMAIL_LENGTH', '"E-Mail Adresse" muss mindestens ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' Zeichen haben.');
define('ERROR_EMAIL_INVALID', 'Das Format der "E-Mail Adresse" ist nicht gültig.');
define('ERROR_EMAIL_ADDRESS_ERROR_EXISTS', 'Die "E-Mail Adresse" (%s) besteht bereits in unserer Datenbank.');
define('ERROR_STREET_ADDRESS', '"Strasse" muss mindestens ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' Zeichen haben.');
define('ERROR_CITY', '"Ort" muss mindestens ' . ENTRY_CITY_MIN_LENGTH . ' Zeichen haben.');
define('ERROR_DOB_INVALID', '"Geburtsdatum" muss in folgendem Format sein %s.');
define('ERROR_COMPANY', '"Firma" muss mindestens ' . ENTRY_COMPANY_MIN_LENGTH . ' Zeichen haben.');
define('ERROR_POSTCODE', '"PLZ" muss mindestens ' . ENTRY_POSTCODE_MIN_LENGTH . ' Zeichen haben.');
define('ENTRY_POSTCODE_NOT_VALID', 'Die "PLZ" (%s) ist nicht gültig für %s.');
define('ERROR_COUNTRY', 'Bitte  "Land" angeben');
define('ERROR_TELEPHONE', '"Telefonnummer" muss mindestens ' . ENTRY_TELEPHONE_MIN_LENGTH . ' Zeichen haben.');
define('ERROR_STATE_REQUIRED', '"Bundesland" ist für das gewählte "Land" erforderlich.');
define('ERROR_SELECT_STATE', 'Bitte "Bundesland" wählen.');
define('ERROR_CANT_MOVE_FILE', 'Konnte Datei nicht verschieben, bitte Ordnerberechtigungen prüfen.');
define('ERROR_NO_CUSTOMER_SELECTED', 'Bitte wählen Sie erst einen Kunden, bevor Sie erneut absenden.');
define('ERROR_UNKNOWN_GROUP_PRICING', 'Unbekannter "Gruppenpreis" Wert (%u).');
define('ERROR_MISSING_CREATE_ACCOUNT_COUPON', 'Der Willkomensgutschein (%s) ist nicht gültig. Er wurde dem Willkommensemail nicht hinzugefügt.');