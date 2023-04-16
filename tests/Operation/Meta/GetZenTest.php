<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Meta;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation\Meta\GetZen;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class GetZenTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_text_plain(): void
    {
        $response = new Response(200, ['Content-Type' => 'text/plain'], Schema\Operation\Meta\GetZen\Response\Textplain\H200::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/zen', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(GetZen::OPERATION_MATCH, (static function (array $data): array {
            return $data;
        })([]));
    }
}
