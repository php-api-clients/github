<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Orgs;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Async\await;
use function React\Promise\resolve;

final class ListPatGrantsTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_500_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated/personal-access-tokens?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=8&page=4&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Orgs\ListPatGrants::OPERATION_MATCH, (static function (array $data): array {
            $data['org']              = 'generated';
            $data['owner']            = null;
            $data['repository']       = 'generated';
            $data['permission']       = 'generated';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after']  = '1970-01-01T00:00:00+00:00';
            $data['per_page']         = 8;
            $data['page']             = 4;
            $data['sort']             = 'generated';
            $data['direction']        = 'generated';

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_500_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated/personal-access-tokens?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=8&page=4&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->orgs()->listPatGrants('generated', null, 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 4, 'generated', 'generated'));
    }

    /**
     * @test
     */
    public function call_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated/personal-access-tokens?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=8&page=4&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Orgs\ListPatGrants::OPERATION_MATCH, (static function (array $data): array {
            $data['org']              = 'generated';
            $data['owner']            = null;
            $data['repository']       = 'generated';
            $data['permission']       = 'generated';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after']  = '1970-01-01T00:00:00+00:00';
            $data['per_page']         = 8;
            $data['page']             = 4;
            $data['sort']             = 'generated';
            $data['direction']        = 'generated';

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_422_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated/personal-access-tokens?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=8&page=4&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->orgs()->listPatGrants('generated', null, 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 4, 'generated', 'generated'));
    }

    /**
     * @test
     */
    public function call_httpCode_404_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated/personal-access-tokens?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=8&page=4&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Orgs\ListPatGrants::OPERATION_MATCH, (static function (array $data): array {
            $data['org']              = 'generated';
            $data['owner']            = null;
            $data['repository']       = 'generated';
            $data['permission']       = 'generated';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after']  = '1970-01-01T00:00:00+00:00';
            $data['per_page']         = 8;
            $data['page']             = 4;
            $data['sort']             = 'generated';
            $data['direction']        = 'generated';

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_404_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated/personal-access-tokens?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=8&page=4&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->orgs()->listPatGrants('generated', null, 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 4, 'generated', 'generated'));
    }

    /**
     * @test
     */
    public function call_httpCode_403_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated/personal-access-tokens?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=8&page=4&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Orgs\ListPatGrants::OPERATION_MATCH, (static function (array $data): array {
            $data['org']              = 'generated';
            $data['owner']            = null;
            $data['repository']       = 'generated';
            $data['permission']       = 'generated';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after']  = '1970-01-01T00:00:00+00:00';
            $data['per_page']         = 8;
            $data['page']             = 4;
            $data['sort']             = 'generated';
            $data['direction']        = 'generated';

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_403_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated/personal-access-tokens?owner=&repository=generated&permission=generated&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=8&page=4&sort=generated&direction=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->orgs()->listPatGrants('generated', null, 'generated', 'generated', '1970-01-01T00:00:00+00:00', '1970-01-01T00:00:00+00:00', 8, 4, 'generated', 'generated'));
    }
}
