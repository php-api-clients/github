<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Operation\Actions\ApproveWorkflowRun */
final class ApproveWorkflowRunTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_201_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\EmptyObject::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/actions/runs/6/approve', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Actions\ApproveWorkflowRun::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']  = 'generated';
            $data['repo']   = 'generated';
            $data['run_id'] = 6;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_201_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\EmptyObject::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/actions/runs/6/approve', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->actions()->approveWorkflowRun('generated', 'generated', 6);
    }

    /** @test */
    public function call_httpCode_404_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/actions/runs/6/approve', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Actions\ApproveWorkflowRun::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']  = 'generated';
            $data['repo']   = 'generated';
            $data['run_id'] = 6;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_404_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/actions/runs/6/approve', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->actions()->approveWorkflowRun('generated', 'generated', 6);
    }

    /** @test */
    public function call_httpCode_403_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/actions/runs/6/approve', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Actions\ApproveWorkflowRun::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']  = 'generated';
            $data['repo']   = 'generated';
            $data['run_id'] = 6;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_403_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/actions/runs/6/approve', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->actions()->approveWorkflowRun('generated', 'generated', 6);
    }
}
