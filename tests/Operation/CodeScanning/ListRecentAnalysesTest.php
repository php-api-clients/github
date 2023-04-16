<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\CodeScanning;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\CodeScanning\ListRecentAnalyses;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class ListRecentAnalysesTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], '[' . Schema\CodeScanningAnalysis::SCHEMA_EXAMPLE_DATA . ']');
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/code-scanning/analyses?tool_name=generated_null&tool_guid=&ref=generated_null&sarif_id=generated_null&page=13&per_page=13&direction=generated_null&sort=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListRecentAnalyses::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['tool_name'] = 'generated_null';
            $data['tool_guid'] = null;
            $data['ref']       = 'generated_null';
            $data['sarif_id']  = 'generated_null';
            $data['page']      = 13;
            $data['per_page']  = 13;
            $data['direction'] = 'generated_null';
            $data['sort']      = 'generated_null';

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
        $browser->request('GET', '/repos/generated_null/generated_null/code-scanning/analyses?tool_name=generated_null&tool_guid=&ref=generated_null&sarif_id=generated_null&page=13&per_page=13&direction=generated_null&sort=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListRecentAnalyses::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['tool_name'] = 'generated_null';
            $data['tool_guid'] = null;
            $data['ref']       = 'generated_null';
            $data['sarif_id']  = 'generated_null';
            $data['page']      = 13;
            $data['per_page']  = 13;
            $data['direction'] = 'generated_null';
            $data['sort']      = 'generated_null';

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
        $browser->request('GET', '/repos/generated_null/generated_null/code-scanning/analyses?tool_name=generated_null&tool_guid=&ref=generated_null&sarif_id=generated_null&page=13&per_page=13&direction=generated_null&sort=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListRecentAnalyses::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['tool_name'] = 'generated_null';
            $data['tool_guid'] = null;
            $data['ref']       = 'generated_null';
            $data['sarif_id']  = 'generated_null';
            $data['page']      = 13;
            $data['per_page']  = 13;
            $data['direction'] = 'generated_null';
            $data['sort']      = 'generated_null';

            return $data;
        })([]));
    }

    /**
     * @test
     */
    public function httpCode_503_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class);
        $response = new Response(503, ['Content-Type' => 'application/json'], Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/code-scanning/analyses?tool_name=generated_null&tool_guid=&ref=generated_null&sarif_id=generated_null&page=13&per_page=13&direction=generated_null&sort=generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListRecentAnalyses::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']     = 'generated_null';
            $data['repo']      = 'generated_null';
            $data['tool_name'] = 'generated_null';
            $data['tool_guid'] = null;
            $data['ref']       = 'generated_null';
            $data['sarif_id']  = 'generated_null';
            $data['page']      = 13;
            $data['per_page']  = 13;
            $data['direction'] = 'generated_null';
            $data['sort']      = 'generated_null';

            return $data;
        })([]));
    }
}
