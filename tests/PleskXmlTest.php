<?php

namespace nickurt\PleskXml\tests;

use nickurt\PleskXml\Facade as Plesk;

class PleskXmlTest extends TestCase
{
    /** @test */
    public function it_can_use_a_custom_plesk_server()
    {
        config(['plesk-xml.default' => 'custom']);

        $plesk = Plesk::getHttpClient();

        $this->assertSame('https://xml-plesk-xml.tld:8444/enterprise/control/agent.php', sprintf(
            'https://%s:%s%s', $plesk->getOptions()['host'], $plesk->getOptions()['port'], '/enterprise/control/agent.php'
        ));

        $this->assertSame('xml-plesk-xml.tld', $plesk->getOptions()['host']);
        $this->assertSame(8444, $plesk->getOptions()['port']);

        $this->assertSame('xml-plesk-xml', $plesk->getHeaders()['HTTP_AUTH_LOGIN']);
        $this->assertSame('plesk-xml-plesk', $plesk->getHeaders()['HTTP_AUTH_PASSWD']);
    }

    /** @test */
    public function it_can_use_the_default_plesk_server()
    {
        $plesk = Plesk::getHttpClient();

        $this->assertSame('https://plesk-xml.tld:8443/enterprise/control/agent.php', sprintf(
            'https://%s:%s%s', $plesk->getOptions()['host'], $plesk->getOptions()['port'], '/enterprise/control/agent.php'
        ));

        $this->assertSame('plesk-xml.tld', $plesk->getOptions()['host']);
        $this->assertSame(8443, $plesk->getOptions()['port']);

        $this->assertSame('plesk-xml', $plesk->getHeaders()['HTTP_AUTH_LOGIN']);
        $this->assertSame('xml-plesk', $plesk->getHeaders()['HTTP_AUTH_PASSWD']);
    }
}
