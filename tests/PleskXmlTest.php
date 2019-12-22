<?php

namespace nickurt\PleskXml\tests;

use nickurt\PleskXml\Facade as Plesk;

class PleskXmlTest extends TestCase
{
    /** @test */
    public function it_can_prefer_auth_key_based_auth_above_user_and_pass_auth()
    {
        config(['plesk-xml.default' => 'server-with-key-and-user-pass-auth']);

        /** @var \nickurt\PleskXml\HttpClient\HttpClient $httpClient */
        $httpClient = Plesk::getHttpClient();

        $this->assertSame(['port' => 8443, 'version' => '1.6.9.1', 'host' => 'plesk-xml.tld'], $httpClient->getOptions());
        $this->assertSame(['KEY' => 'plesk-key'], $httpClient->getHeaders());
    }

    /** @test */
    public function it_can_use_a_custom_plesk_server()
    {
        config(['plesk-xml.default' => 'server-with-custom-port']);

        /** @var \nickurt\PleskXml\HttpClient\HttpClient $httpClient */
        $httpClient = Plesk::getHttpClient();

        $this->assertSame('https://xml-plesk-xml.tld:8444/enterprise/control/agent.php', sprintf(
            'https://%s:%s%s', $httpClient->getOptions()['host'], $httpClient->getOptions()['port'], '/enterprise/control/agent.php'
        ));

        $this->assertSame(['port' => 8444, 'version' => '1.6.9.1', 'host' => 'xml-plesk-xml.tld'], $httpClient->getOptions());
        $this->assertSame(["HTTP_AUTH_LOGIN" => "xml-plesk-xml", "HTTP_AUTH_PASSWD" => "plesk-xml-plesk"], $httpClient->getHeaders());
    }

    /** @test */
    public function it_can_use_the_default_plesk_server()
    {
        /** @var \nickurt\PleskXml\HttpClient\HttpClient $httpClient */
        $httpClient = Plesk::getHttpClient();

        $this->assertSame('https://plesk-xml.tld:8443/enterprise/control/agent.php', sprintf(
            'https://%s:%s%s', $httpClient->getOptions()['host'], $httpClient->getOptions()['port'], '/enterprise/control/agent.php'
        ));

        $this->assertSame(['port' => 8443, 'version' => '1.6.9.1', 'host' => 'plesk-xml.tld'], $httpClient->getOptions());
        $this->assertSame(["HTTP_AUTH_LOGIN" => "plesk-xml", "HTTP_AUTH_PASSWD" => "xml-plesk"], $httpClient->getHeaders());
    }

    /** @test */
    public function it_can_work_with_key_based_auth()
    {
        config(['plesk-xml.default' => 'server-with-key-auth']);

        /** @var \nickurt\PleskXml\HttpClient\HttpClient $httpClient */
        $httpClient = Plesk::getHttpClient();

        $this->assertSame(['port' => 8443, 'version' => '1.6.9.1', 'host' => 'plesk-xml.tld'], $httpClient->getOptions());
        $this->assertSame(['KEY' => 'key-plesk'], $httpClient->getHeaders());
    }
}
