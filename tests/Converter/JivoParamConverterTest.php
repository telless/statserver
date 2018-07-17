<?php

namespace App\Tests\Converter;

use App\Converter\JivoCommandConverter;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class JivoParamConverterTest extends KernelTestCase
{
    /** @var JivoCommandConverter */
    private $jivoParamConverter;

    public function testJivoParamConverterAvailable()
    {
        $this->assertTrue($this->jivoParamConverter instanceof JivoCommandConverter);
    }

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        parent::bootKernel();

        $this->jivoParamConverter = parent::$container->get('App\Converter\JivoCommandConverter');
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