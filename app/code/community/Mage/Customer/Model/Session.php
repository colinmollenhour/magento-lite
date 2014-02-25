<?php

/**
 * Satisfies uses of customer/session in:
 *
 *     app/code/core/Mage/Page/Block/Html/Topmenu.php line 231
 *     app/code/core/Mage/Page/Block/Html/Welcome.php lines 44 and 61
 *     app/code/core/Mage/Page/Block/Html/Footer.php line 61
 *     app/code/core/Mage/Page/Block/Html/Header.php line 81
 *
 */
class Mage_Customer_Model_Session
{

    public function getCustomerGroupId()
    {
        return 1;
    }

    public function isLoggedIn()
    {
        return FALSE;
    }

}
