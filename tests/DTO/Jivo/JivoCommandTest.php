<?php

namespace App\Tests\DTO\Jivo;

use App\DTO\Jivo\JivoActionCommand;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Serializer\SerializerInterface;

class JivoCommandTest extends KernelTestCase
{
    /** @var SerializerInterface */
    private $serializer;

    public function testJivoCommandSerializable()
    {
        $json = <<<'JSON'
{
    "event_name": "call_event",
    "chat_id": 7952,
    "widget_id": "3739",
    "visitor": {
        "name": "John Smith",
        "email": "email@example.com",
        "phone": "+14084987855",
        "number": "3908",
        "description": "Description text",
        "social": {},
        "chats_count": 5
    },
    "agent": {
        "id": "3582",
        "name": "Thomas Anderson",
        "email": "agent@jivosite.com",
        "phone": "+14083682346"
    },
    "department": {
        "id": 110,
        "name": "Sales"
    },
    "session": {
        "geoip": {
            "region_code": "CA",
            "country": "United States",
            "country_code": "US",
            "region": "California",
            "city": "San Francisco",
            "latitude": "37.7898",
            "longitude": "-122.3942",
            "organization": "Wikimedia Foundation"
        },
        "utm": "source=google|medium=cpc|content=banner|campaign=campaign_name",
        "utm_json": {
            "source": "google",
            "campaign": "campaign_name",
            "content": "banner",
            "medium": "cpc",
            "term": "..."
        },
        "ip_addr": "208.80.152.201",
        "user_agent": "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36"
    },
    "page": {
        "url": "http://example.com/",
        "title": "Page title"
    },
    "call": {
        "type": "callback",
        "phone": "+14084987855",
        "status": "end",
        "record_url": "http://example.com/record.mp3"
    }
}
JSON;
        $result = $this->serializer->deserialize($json, JivoActionCommand::class, 'json');
        $this->assertTrue($result instanceof JivoActionCommand);
    }

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        parent::bootKernel();

        $this->serializer = parent::$container->get('Symfony\Component\Serializer\SerializerInterface');
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