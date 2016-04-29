<?php
/**
 * Smart Core
 *
 * @author      Pavel Panchyshnyy
 * @category    code
 * @codePool    local
 */

class Smart_Core_Block_Directory_Currency extends Mage_Directory_Block_Currency
{
    /**
     * @param $code
     * @return string
     */
    public function getCurrentCurrencySymbol($code)
    {
        return Mage::app()->getLocale()->currency($code)->getSymbol();
    }

    /**
     * Retrieve currencies array
     * Return array: code => currency name
     * Return empty array if only one currency
     *
     * @return array
     */
    public function getCurrencies()
    {
        $currencies = $this->getData('currencies');
        if (is_null($currencies)) {
            $currencies = array();
            $codes = Mage::app()->getStore()->getAvailableCurrencyCodes(true);
            if (is_array($codes) && count($codes) > 1) {
                $rates = Mage::getModel('directory/currency')->getCurrencyRates(
                    Mage::app()->getStore()->getBaseCurrency(),
                    $codes
                );

                foreach ($codes as $code) {
                    if (isset($rates[$code])) {
                        $currencies[$code] = Mage::app()->getLocale()
                            ->currency($code)->getSymbol();
                    }
                }
            }

            $this->setData('currencies', $currencies);
        }
        return $currencies;
    }
}