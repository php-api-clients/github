<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Repos\ListForAuthenticatedUser;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class ListForAuthenticatedUserTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], '[' . Schema\Repository::SCHEMA_EXAMPLE_DATA . ']');
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/user/repos?direction=generated_null&since=1970-01-01T00:00:00+00:00&before=1970-01-01T00:00:00+00:00&visibility=generated_null&affiliation=generated_null&type=generated_null&sort=generated_null&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['direction']   = 'generated_null';
            $data['since']       = '1970-01-01T00:00:00+00:00';
            $data['before']      = '1970-01-01T00:00:00+00:00';
            $data['visibility']  = 'generated_null';
            $data['affiliation'] = 'generated_null';
            $data['type']        = 'generated_null';
            $data['sort']        = 'generated_null';
            $data['per_page']    = 13;
            $data['page']        = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_422_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/user/repos?direction=generated_null&since=1970-01-01T00:00:00+00:00&before=1970-01-01T00:00:00+00:00&visibility=generated_null&affiliation=generated_null&type=generated_null&sort=generated_null&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['direction']   = 'generated_null';
            $data['since']       = '1970-01-01T00:00:00+00:00';
            $data['before']      = '1970-01-01T00:00:00+00:00';
            $data['visibility']  = 'generated_null';
            $data['affiliation'] = 'generated_null';
            $data['type']        = 'generated_null';
            $data['sort']        = 'generated_null';
            $data['per_page']    = 13;
            $data['page']        = 13;

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
        $browser->request('GET', '/user/repos?direction=generated_null&since=1970-01-01T00:00:00+00:00&before=1970-01-01T00:00:00+00:00&visibility=generated_null&affiliation=generated_null&type=generated_null&sort=generated_null&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['direction']   = 'generated_null';
            $data['since']       = '1970-01-01T00:00:00+00:00';
            $data['before']      = '1970-01-01T00:00:00+00:00';
            $data['visibility']  = 'generated_null';
            $data['affiliation'] = 'generated_null';
            $data['type']        = 'generated_null';
            $data['sort']        = 'generated_null';
            $data['per_page']    = 13;
            $data['page']        = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_401_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(401, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/user/repos?direction=generated_null&since=1970-01-01T00:00:00+00:00&before=1970-01-01T00:00:00+00:00&visibility=generated_null&affiliation=generated_null&type=generated_null&sort=generated_null&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['direction']   = 'generated_null';
            $data['since']       = '1970-01-01T00:00:00+00:00';
            $data['before']      = '1970-01-01T00:00:00+00:00';
            $data['visibility']  = 'generated_null';
            $data['affiliation'] = 'generated_null';
            $data['type']        = 'generated_null';
            $data['sort']        = 'generated_null';
            $data['per_page']    = 13;
            $data['page']        = 13;

            return $data;
        })([]));
    }
}
