<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Gists;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Gists\List_;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class List_Test extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], '[' . Schema\BaseGist::SCHEMA_EXAMPLE_DATA . ']');
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/gists?since=1970-01-01T00:00:00+00:00&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(List_::OPERATION_MATCH, (static function (array $data): array {
            $data['since']    = '1970-01-01T00:00:00+00:00';
            $data['per_page'] = 13;
            $data['page']     = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_403_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/gists?since=1970-01-01T00:00:00+00:00&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(List_::OPERATION_MATCH, (static function (array $data): array {
            $data['since']    = '1970-01-01T00:00:00+00:00';
            $data['per_page'] = 13;
            $data['page']     = 13;

            return $data;
        })([]));
    }
}
