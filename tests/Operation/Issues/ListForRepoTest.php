<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Issues;

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

final class ListForRepoTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_301_responseContentType_application_json_zero(): void
    {
        $response = new Response(301, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/issues?milestone=generated&assignee=generated&creator=generated&mentioned=generated&labels=generated&since=1970-01-01T00:00:00+00:00&state=generated&sort=generated&direction=generated&per_page=8&page=4', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Issues\ListForRepo::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated';
            $data['repo']      = 'generated';
            $data['milestone'] = 'generated';
            $data['assignee']  = 'generated';
            $data['creator']   = 'generated';
            $data['mentioned'] = 'generated';
            $data['labels']    = 'generated';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['state']     = 'generated';
            $data['sort']      = 'generated';
            $data['direction'] = 'generated';
            $data['per_page']  = 8;
            $data['page']      = 4;

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function operations_httpCode_301_responseContentType_application_json_zero(): void
    {
        $response = new Response(301, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/issues?milestone=generated&assignee=generated&creator=generated&mentioned=generated&labels=generated&since=1970-01-01T00:00:00+00:00&state=generated&sort=generated&direction=generated&per_page=8&page=4', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->issues()->listForRepo('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', '1970-01-01T00:00:00+00:00', 'generated', 'generated', 'generated', 8, 4));
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
        $browser->request('GET', '/repos/generated/generated/issues?milestone=generated&assignee=generated&creator=generated&mentioned=generated&labels=generated&since=1970-01-01T00:00:00+00:00&state=generated&sort=generated&direction=generated&per_page=8&page=4', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Issues\ListForRepo::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated';
            $data['repo']      = 'generated';
            $data['milestone'] = 'generated';
            $data['assignee']  = 'generated';
            $data['creator']   = 'generated';
            $data['mentioned'] = 'generated';
            $data['labels']    = 'generated';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['state']     = 'generated';
            $data['sort']      = 'generated';
            $data['direction'] = 'generated';
            $data['per_page']  = 8;
            $data['page']      = 4;

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
        $browser->request('GET', '/repos/generated/generated/issues?milestone=generated&assignee=generated&creator=generated&mentioned=generated&labels=generated&since=1970-01-01T00:00:00+00:00&state=generated&sort=generated&direction=generated&per_page=8&page=4', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->issues()->listForRepo('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', '1970-01-01T00:00:00+00:00', 'generated', 'generated', 'generated', 8, 4));
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
        $browser->request('GET', '/repos/generated/generated/issues?milestone=generated&assignee=generated&creator=generated&mentioned=generated&labels=generated&since=1970-01-01T00:00:00+00:00&state=generated&sort=generated&direction=generated&per_page=8&page=4', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Issues\ListForRepo::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated';
            $data['repo']      = 'generated';
            $data['milestone'] = 'generated';
            $data['assignee']  = 'generated';
            $data['creator']   = 'generated';
            $data['mentioned'] = 'generated';
            $data['labels']    = 'generated';
            $data['since']     = '1970-01-01T00:00:00+00:00';
            $data['state']     = 'generated';
            $data['sort']      = 'generated';
            $data['direction'] = 'generated';
            $data['per_page']  = 8;
            $data['page']      = 4;

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
        $browser->request('GET', '/repos/generated/generated/issues?milestone=generated&assignee=generated&creator=generated&mentioned=generated&labels=generated&since=1970-01-01T00:00:00+00:00&state=generated&sort=generated&direction=generated&per_page=8&page=4', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->issues()->listForRepo('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', '1970-01-01T00:00:00+00:00', 'generated', 'generated', 'generated', 8, 4));
    }
}
