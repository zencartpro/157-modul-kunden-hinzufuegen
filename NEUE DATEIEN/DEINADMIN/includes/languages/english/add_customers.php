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
 * Modified for Zen Cart 1.5.7 German webchills 2022-01-04
 */
require DIR_WS_LANGUAGES . $_SESSION['language'] . '/gv_name.php';

define('HEADING_TITLE', 'Add Customers');

define('TYPE_BELOW', 'Type below');
define('PLEASE_SELECT', 'Select One');
define('CUSTOMERS_REFERRAL', 'Customer Referral<br>1st Discount Coupon');

define('ENTRY_NONE', 'None');

define('TABLE_HEADING_COMPANY','Company');

define('CUSTOMERS_AUTHORIZATION', 'Customers Authorization Status');
define('CUSTOMERS_AUTHORIZATION_0', 'Approved');
define('CUSTOMERS_AUTHORIZATION_1', 'Pending Approval - Must be Authorized to Browse');
define('CUSTOMERS_AUTHORIZATION_2', 'Pending Approval - May Browse No Prices');
define('CUSTOMERS_AUTHORIZATION_3', 'Pending Approval - May browse with prices but may not buy');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Warning: Your shop is set up for Approval with No Browse. The customer has been set to Pending Approval - No Browse');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Warning: Your shop is set up for Approval with Browse no prices. The customer has been set to Pending Approval - Browse No Prices');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Your customer status has been updated. Thank you for shopping with us. We look forward to your business.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Customer Status Updated');

define('ENTRY_EMAIL', 'Send this customer the welcome e-mail?');

// greeting salutation
define('EMAIL_SUBJECT', 'Welcome to ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Dear Mr. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Dear Ms. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Dear %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'We wish to welcome you to <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Congratulations! To make your next visit to our online shop a more rewarding experience, listed below are details for a Discount Coupon created just for you!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'To use the Discount Coupon, enter the ' . TEXT_GV_REDEEM . ' code during checkout:  <strong>%s</strong>' . "\n\n");

define('EMAIL_GV_INCENTIVE_HEADER', 'Just for stopping by today, we have sent you a ' . TEXT_GV_NAME . ' for %s!' . "\n");
define('EMAIL_GV_REDEEM', 'The ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' is: %s ' . "\n\n" . 'You can enter the ' . TEXT_GV_REDEEM . ' during Checkout, after making your selections in the store. ');
define('EMAIL_GV_LINK', ' Or, you may redeem it now by following this link: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Once you have added the ' . TEXT_GV_NAME . ' to your account, you may use the ' . TEXT_GV_NAME . ' for yourself, or send it to a friend!' . "\n\n");

define('EMAIL_TEXT_1', 'Your login ID is the e-mail address at which you received this message.' . "\n\n");
define('EMAIL_TEXT_2', 'Your new password is: %s ' . "\n\n");
define('EMAIL_TEXT_3', 'With your account, you can now take part in the <strong>various services</strong> we have to offer you. Some of these services include:' . "\n\n" . '<li><strong>Permanent Cart</strong> - Any products added to your online cart remain there until you remove them, or check them out.' . "\n\n" . '<li><strong>Address Book</strong> - We can now deliver your products to another address other than yours! This is perfect to send birthday gifts direct to the birthday-person themselves.' . "\n\n" . '<li><strong>Order History</strong> - View your history of purchases that you have made with us.' . "\n\n" . '<li><strong>Products Reviews</strong> - Share your opinions on products with our other customers.' . "\n\n");
define('EMAIL_CONTACT', 'For help with any of our online services, please email the store-owner: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','Sincerely,' . "\n\n" . STORE_OWNER . "\nStore Owner\n\n". '<a href="' . zen_catalog_href_link(FILENAME_DEFAULT) . '">' . zen_catalog_href_link(FILENAME_DEFAULT) . "</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'This email address was given to us by you or by one of our customers. If you did not signup for an account, or feel that you have received this email in error, please send an email to %s ');
define('ERROR_CUSTOMER_ERROR_1','There were errors');
define('ERROR_CUSTOMER_EXISTS','Customers exist: ');
define('CUSTOMERS_BULK_UPLOAD','Bulk Upload (CSV): ');
define('CUSTOMERS_FILE_IMPORT','File to import: ');
define('CUSTOMERS_INSERT_MODE','Insert Mode: ');
define('CUSTOMERS_INSERT_MODE_VALID',' Part (Insert valid lines)');
define('CUSTOMERS_INSERT_MODE_FILE',' File (Require whole file to be valid)');
define('TEXT_FULL_NAME','(Full State)');
define('CUSTOMERS_ONE_FORMS','Click here to see the Single Customer form');

define('ERROR_ON_LINE', 'Errors on line %u of the imported file');
define('MESSAGE_CUSTOMERS_OK', '%u customers were successfully inserted.');
define('MESSAGE_LINES_OK_NOT_INSERTED', 'The following lines were validated but, due to errors in other records, were not inserted into the database.');
define('MESSAGE_CUSTOMER_OK', 'The customer (%s) was inserted successfully.');
define('LINE_MSG', 'Line %u (%s %s)');
define('FORMATTING_THE_CSV', 'Formatting the CSV');
define('CUSTOMERS_SINGLE_ENTRY', 'Single Customer Entry: ');
define('DATE_FORMAT_CHOOSE_MULTI', 'DOB Format: ');
define('DATE_FORMAT_CHOOSE_SINGLE', 'Date of Birth Format: ');
define('RESEND_WELCOME_EMAIL', 'Resend the Welcome E-Mail');
define('BUTTON_RESEND', 'Resend');
define('TEXT_PLEASE_CHOOSE', 'Please Choose');
define('TEXT_CHOOSE_CUSTOMER', 'Choose a Customer: ');
define('TEXT_RESET_PASSWORD', 'Reset the customer\'s password?');
define('CUSTOMER_EMAIL_RESENT', 'The "Welcome E-Mail" was re-sent to the customer.');

// Configuration and messages for the phone_validate function
define('ENTRY_PHONE_NO_DELIMS', '-. ()'); 
define('ENTRY_PHONE_NO_MIN_DIGITS', '6');
define('ENTRY_PHONE_NO_MAX_DIGITS', '15');
define('ENTRY_PHONE_NO_DELIM_WORLD', '+');  // Set to false if you don't support world phone numbers
define('ENTRY_PHONE_NO_CHAR_ERROR', 'There is an invalid character (%s) in the "Telephone Number".');
define('ENTRY_PHONE_NO_MIN_ERROR', 'There are fewer than ' . ENTRY_PHONE_NO_MIN_DIGITS . ' digits (0-9) in the "Telephone Number".');
define('ENTRY_PHONE_NO_MAX_ERROR', 'There are more than ' . ENTRY_PHONE_NO_MAX_DIGITS . ' digits (0-9) in the "Telephone Number".');

define('ERROR_NO_UPLOAD_FILE', 'Please choose a "File to Import" before pressing "Upload"');
define('ERROR_FILE_UPLOAD', 'Error (%s) uploading file');
define('ERROR_BAD_FILE_EXTENSION', 'The file extension (%s) must be one of: ');
define('ERROR_BAD_FILE_HEADER', 'Either the header row in the input file is empty or it was not recognised.');
define('ERROR_NO_RECORDS', 'No customer records were found in the imported file.');  /*v2.0.3a*/
define('ERROR_FIRST_NAME', '"First Name" must be at least ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' characters in length.');
define('ERROR_LAST_NAME', '"Last Name" must be at least ' . ENTRY_LAST_NAME_MIN_LENGTH . ' characters in length.');
define('ERROR_GENDER', 'Gender not recognised. Expected "m" or "f", got: ');
define('ERROR_EMAIL_LENGTH', '"E-Mail Address" must be at least ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' characters in length.');
define('ERROR_EMAIL_INVALID', 'The "E-Mail Address" format is not valid.');
define('ERROR_EMAIL_ADDRESS_ERROR_EXISTS', 'The "E-Mail Address" (%s) already exists.');
define('ERROR_STREET_ADDRESS', '"Street Address" must be at least ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' characters in length.');
define('ERROR_CITY', '"City" must be at least ' . ENTRY_CITY_MIN_LENGTH . ' characters in length.');
define('ERROR_DOB_INVALID', '"Date of Birth" must be in the format %s.');
define('ERROR_COMPANY', '"Company" must be at least ' . ENTRY_COMPANY_MIN_LENGTH . ' characters in length.');
define('ERROR_POSTCODE', '"Post Code" must be at least ' . ENTRY_POSTCODE_MIN_LENGTH . ' characters in length.');
define('ENTRY_POSTCODE_NOT_VALID', 'The "Post Code" (%s) is not valid for %s.');
define('ERROR_COUNTRY', 'Please select a "Country"');
define('ERROR_TELEPHONE', '"Telephone Number" must be at least ' . ENTRY_TELEPHONE_MIN_LENGTH . ' characters in length.');
define('ERROR_STATE_REQUIRED', '"State" is required for the currently selected "Country".');
define('ERROR_SELECT_STATE', 'Please select a "State".');
define('ERROR_CANT_MOVE_FILE', 'Could not move file, check folder permissions.');
define('ERROR_NO_CUSTOMER_SELECTED', 'Please select a customer before you press "Resend".');
define('ERROR_UNKNOWN_GROUP_PRICING', 'Unknown "Customer Group Pricing" value (%u).');
define('ERROR_MISSING_CREATE_ACCOUNT_COUPON', 'The create-account coupon (%s) is not valid; it has not been included in the customer welcome email.');
