<?php

namespace Dynamic\CountryDropdownField\Tests;

use Dynamic\CountryDropdownField\Fields\CountryDropdownField;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\i18n\Data\Intl\IntlLocales;

/**
 * Class CountryDropdownTest
 * @package Dynamic\CountryDropdownField\Tests
 */
class CountryDropdownTest extends SapphireTest
{
    /**
     * 
     */
    public function testSetCountries()
    {
        $countries = [
            'fo' => 'Foo',
            'ba' => 'Bar',
            'bz' => 'Baz',
        ];

        $field = CountryDropdownField::create('Country')
            ->setCountries($countries);

        $this->assertEquals($countries, $field->getCountries());
    }

    /**
     * 
     */
    public function testGetDefaultCountriesList()
    {
        $field = CountryDropdownField::create('Country');

        $this->assertEquals(IntlLocales::singleton()->config()->get('countries'), $field->getCountries());
    }

    /**
     * 
     */
    public function testSetSource()
    {
        $source = ['fo' => 'Foo'];

        $field = CountryDropdownField::create('Country')
            ->setSource($source);

        $this->assertEquals($source, $field->getSource());
    }

    /**
     * 
     */
    public function testGetSource()
    {
        $default = IntlLocales::singleton()->config()->get('countries');
        $newSource = ['fo' => 'Foo'];

        $field = CountryDropdownField::create('Country');

        $this->assertEquals($default, $field->getSource());

        $field->setSource($newSource);

        $this->assertEquals($newSource, $field->getSource());
    }

    /**
     * 
     */
    public function testSetDisabledItems()
    {
        $toDisable = ['us'];

        $field = CountryDropdownField::create('Country')
            ->setDisabledItems($toDisable);

        $this->assertEquals($toDisable, $field->getDisabledItems());
    }
}
