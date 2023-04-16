<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Meta;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation\Meta\GetOctocat;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class GetOctocatTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_octocat_stream(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/octocat-stream'], Schema\Operation\Meta\GetOctocat\Response\ApplicationoctocatStream\H200::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/octocat?s=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(GetOctocat::OPERATION_MATCH, (static function (array $data): array {
            $data['s'] = 'generated_null';

            return $data;
        })([]));
    }
}
