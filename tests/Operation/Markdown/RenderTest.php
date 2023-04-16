<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Markdown;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation\Markdown\Render;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class RenderTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_requestContentType_application_json_responseContentType_text_html(): void
    {
        $response = new Response(200, ['Content-Type' => 'text/html'], Schema\Operation\Markdown\Render\Response\Texthtml\H200::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/markdown', Argument::type('array'), Schema\Markdown\Render\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(Render::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })(json_decode(Schema\Markdown\Render\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
