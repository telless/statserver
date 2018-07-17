<?php

namespace App\Tests\Converter;

use App\Converter\JivoCommandConverter;
use App\Converter\RoiCommandConverter;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class RoiParamConverterTest extends KernelTestCase
{
    /** @var JivoCommandConverter */
    private $jivoParamConverter;

    public function testRoiParamConverterAvailable()
    {
        $this->assertTrue($this->jivoParamConverter instanceof RoiCommandConverter);
    }

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        parent::bootKernel();

        $this->jivoParamConverter = parent::$container->get('App\Converter\RoiCommandConverter');
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();

        $this->jivoParamConverter = null;
    }
}