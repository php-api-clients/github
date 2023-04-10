<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\Github\Operation\Markdown;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class RenderTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t200t6ffaad09c30216c38c8888e6d6757d2f()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'text/html'), Schema\Operation\Markdown\Render\Response\Texthtml\H200::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/markdown', \Prophecy\Argument::type('array'), Schema\Markdown\Render\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Markdown\Render::OPERATION_MATCH, (static function (array $data) : array {
            return $data;
        })(json_decode(Schema\Markdown\Render\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
