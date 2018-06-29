<?php

namespace Dynamic\CountryDropdownField\Fields;

use SilverStripe\Dev\Debug;
use SilverStripe\Forms\DropdownField;
use SilverStripe\i18n\Data\Intl\IntlLocales;

/**
 * A simple extension to dropdown field, pre-configured to list states.
 *
 * Class CountryDropdownField
 * @package Dynamic\CountryDropdownField\Fields
 */
class CountryDropdownField extends DropdownField
{
    /**
     * @var
     */
    private $countries;

    /**
     * @var array
     */
    protected $disabled_options;

    /**
     * @var array
     */
    protected $extraClasses = array('dropdown');

    /**
     * StateDropdownField constructor.
     * @param string $name
     * @param null $title
     * @param null|array $source
     * @param string $value
     * @param null $form
     */
    public function __construct($name, $title = null, $source = [], $value = '', $form = null)
    {

        if (!empty($source)) {
            $this->setCountries($source);
        }

        $this->setDisabledItems();

        parent::__construct($name, ($title === null) ? $name : $title, $source, $value, $form);
    }

    /**
     * @param array $states
     * @param bool $includeProvinces
     * @return $this
     */
    public function setCountries($countries = [])
    {
        if ($countries !== (array)$countries) {
            trigger_error(
                "The \$source passed isn't an array. When passing a source it must be an array.",
                E_USER_ERROR
            );
        }

        $globalDefaults = empty($countries);

        if ($globalDefaults) {
            $countries = $this->getDefaultCountriesList();
        }

        reset($countries);
        if ((int)key($countries) === key($countries)) {
            foreach ($countries as $country) {
                $updatedSource[$country] = $country;
            }
        }

        $this->countries = isset($updatedSource) ? $updatedSource : $countries;

        return $this;
    }

    /**
     * @return array Map of country code => name
     */
    protected function getDefaultCountriesList()
    {
        return IntlLocales::singleton()->getCountries();
    }

    /**
     * @return array
     */
    public function getCountries()
    {
        if (!$this->countries || empty($this->countries)) {
            $this->setCountries();
        }

        return $this->countries;
    }

    /**
     * @param array $source
     * @return $this
     */
    public function setSource($source = [])
    {
        $this->setCountries($source);

        return $this;
    }

    /**
     * @return array
     */
    public function getSource()
    {
        return $this->getCountries();
    }

    /**
     * Prepend disabled array with separator value
     *
     * @param array $disabled
     * @return DropdownField
     */
    public function setDisabledItems($disabled = [])
    {
        return parent::setDisabledItems($disabled);
    }
}
