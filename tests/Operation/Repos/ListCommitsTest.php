<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Repos\ListCommits;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class ListCommitsTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], '[' . Schema\Commit::SCHEMA_EXAMPLE_DATA . ']');
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/commits?sha=generated_null&path=generated_null&author=generated_null&committer=generated_null&since=1970-01-01T00:00:00+00:00&until=1970-01-01T00:00:00+00:00&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListCommits::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['sha']       = 'generated_null';
            $data['path']      = 'generated_null';
            $data['author']    = 'generated_null';
            $data['committer'] = 'generated_null';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['until']     = '1970-01-01T00:00:00+00:00';
            $data['per_page']  = 13;
            $data['page']      = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_500_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/commits?sha=generated_null&path=generated_null&author=generated_null&committer=generated_null&since=1970-01-01T00:00:00+00:00&until=1970-01-01T00:00:00+00:00&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListCommits::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['sha']       = 'generated_null';
            $data['path']      = 'generated_null';
            $data['author']    = 'generated_null';
            $data['committer'] = 'generated_null';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['until']     = '1970-01-01T00:00:00+00:00';
            $data['per_page']  = 13;
            $data['page']      = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_400_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/commits?sha=generated_null&path=generated_null&author=generated_null&committer=generated_null&since=1970-01-01T00:00:00+00:00&until=1970-01-01T00:00:00+00:00&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListCommits::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['sha']       = 'generated_null';
            $data['path']      = 'generated_null';
            $data['author']    = 'generated_null';
            $data['committer'] = 'generated_null';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['until']     = '1970-01-01T00:00:00+00:00';
            $data['per_page']  = 13;
            $data['page']      = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_400_responseContentType_application_scim_json(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/commits?sha=generated_null&path=generated_null&author=generated_null&committer=generated_null&since=1970-01-01T00:00:00+00:00&until=1970-01-01T00:00:00+00:00&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListCommits::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['sha']       = 'generated_null';
            $data['path']      = 'generated_null';
            $data['author']    = 'generated_null';
            $data['committer'] = 'generated_null';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['until']     = '1970-01-01T00:00:00+00:00';
            $data['per_page']  = 13;
            $data['page']      = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_404_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/commits?sha=generated_null&path=generated_null&author=generated_null&committer=generated_null&since=1970-01-01T00:00:00+00:00&until=1970-01-01T00:00:00+00:00&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListCommits::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['sha']       = 'generated_null';
            $data['path']      = 'generated_null';
            $data['author']    = 'generated_null';
            $data['committer'] = 'generated_null';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['until']     = '1970-01-01T00:00:00+00:00';
            $data['per_page']  = 13;
            $data['page']      = 13;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_409_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(409, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/commits?sha=generated_null&path=generated_null&author=generated_null&committer=generated_null&since=1970-01-01T00:00:00+00:00&until=1970-01-01T00:00:00+00:00&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListCommits::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['sha']       = 'generated_null';
            $data['path']      = 'generated_null';
            $data['author']    = 'generated_null';
            $data['committer'] = 'generated_null';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['until']     = '1970-01-01T00:00:00+00:00';
            $data['per_page']  = 13;
            $data['page']      = 13;

            return $data;
        })([]));
    }
}
