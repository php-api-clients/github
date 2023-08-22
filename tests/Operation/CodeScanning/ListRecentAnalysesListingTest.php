<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\CodeScanning;

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

/** @covers \ApiClients\Client\GitHub\Operation\CodeScanning\ListRecentAnalysesListing */
final class ListRecentAnalysesListingTest extends AsyncTestCase
{
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
        $browser->request('GET', '/repos/generated/generated/code-scanning/analyses?tool_name=generated&tool_guid=&ref=generated&sarif_id=generated&page=1&per_page=8&direction=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\CodeScanning\ListRecentAnalysesListing::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated';
            $data['repo']      = 'generated';
            $data['tool_name'] = 'generated';
            $data['tool_guid'] = null;
            $data['ref']       = 'generated';
            $data['sarif_id']  = 'generated';
            $data['page']      = 1;
            $data['per_page']  = 8;
            $data['direction'] = 'generated';
            $data['sort']      = 'generated';

            return $data;
        })([]));
        foreach ($result as $item) {
        }
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
        $browser->request('GET', '/repos/generated/generated/code-scanning/analyses?tool_name=generated&tool_guid=&ref=generated&sarif_id=generated&page=1&per_page=8&direction=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codeScanning()->listRecentAnalysesListing('generated', 'generated', 'generated', null, 'generated', 'generated', 1, 8, 'generated', 'generated');
        foreach ($result as $item) {
        }
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
        $browser->request('GET', '/repos/generated/generated/code-scanning/analyses?tool_name=generated&tool_guid=&ref=generated&sarif_id=generated&page=1&per_page=8&direction=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\CodeScanning\ListRecentAnalysesListing::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated';
            $data['repo']      = 'generated';
            $data['tool_name'] = 'generated';
            $data['tool_guid'] = null;
            $data['ref']       = 'generated';
            $data['sarif_id']  = 'generated';
            $data['page']      = 1;
            $data['per_page']  = 8;
            $data['direction'] = 'generated';
            $data['sort']      = 'generated';

            return $data;
        })([]));
        foreach ($result as $item) {
        }
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
        $browser->request('GET', '/repos/generated/generated/code-scanning/analyses?tool_name=generated&tool_guid=&ref=generated&sarif_id=generated&page=1&per_page=8&direction=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codeScanning()->listRecentAnalysesListing('generated', 'generated', 'generated', null, 'generated', 'generated', 1, 8, 'generated', 'generated');
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function call_httpCode_503_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class);
        $response = new Response(503, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/code-scanning/analyses?tool_name=generated&tool_guid=&ref=generated&sarif_id=generated&page=1&per_page=8&direction=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\CodeScanning\ListRecentAnalysesListing::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated';
            $data['repo']      = 'generated';
            $data['tool_name'] = 'generated';
            $data['tool_guid'] = null;
            $data['ref']       = 'generated';
            $data['sarif_id']  = 'generated';
            $data['page']      = 1;
            $data['per_page']  = 8;
            $data['direction'] = 'generated';
            $data['sort']      = 'generated';

            return $data;
        })([]));
        foreach ($result as $item) {
        }
    }

    /** @test */
    public function operations_httpCode_503_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class);
        $response = new Response(503, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/code-scanning/analyses?tool_name=generated&tool_guid=&ref=generated&sarif_id=generated&page=1&per_page=8&direction=generated&sort=generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codeScanning()->listRecentAnalysesListing('generated', 'generated', 'generated', null, 'generated', 'generated', 1, 8, 'generated', 'generated');
        foreach ($result as $item) {
        }
    }
}
