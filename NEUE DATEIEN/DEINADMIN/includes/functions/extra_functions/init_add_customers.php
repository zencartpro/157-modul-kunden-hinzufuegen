<?php
    if (!defined('IS_ADMIN_FLAG')) {
        die('Illegal Access');
    } 
    
    
if (!zen_page_key_exists('customersAddCustomer')) {
    zen_register_admin_page('customersAddCustomer', 'BOX_CUSTOMERS_ADD_CUSTOMERS', 'FILENAME_ADD_CUSTOMERS','' , 'customers', 'Y');
}
    
