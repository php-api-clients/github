<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Issues;

use ApiClients\Client\GitHub\Client;
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

/** @covers \ApiClients\Client\GitHub\Operation\Issues\RemoveAssignees */
final class RemoveAssigneesTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Issue::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/repos/generated/generated/issues/12/assignees', Argument::type('array'), json_encode(json_decode(Schema\Issues\RemoveAssignees\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Issues\RemoveAssignees::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']        = 'generated';
            $data['repo']         = 'generated';
            $data['issue_number'] = 12;

            return $data;
        })(json_decode(Schema\Issues\RemoveAssignees\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Issue::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/repos/generated/generated/issues/12/assignees', Argument::type('array'), json_encode(json_decode(Schema\Issues\RemoveAssignees\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->issues()->removeAssignees('generated', 'generated', 12, json_decode(Schema\Issues\RemoveAssignees\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }
}
