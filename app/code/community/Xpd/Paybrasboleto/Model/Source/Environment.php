<?php
/**
 * Paybras
 *
 * @category   Payments
 * @package    Xpd_Paybrasboleto
 * @license    OSL v3.0
 */
class Xpd_Paybrasboleto_Model_Source_Environment
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 0,
                'label' => 'Sandbox'
            ),
            array(
                'value' => 1,
                'label' => 'Produção'
            ),
        );
    }
}

