<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\SecretScanning;

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

/** @covers \ApiClients\Client\GitHub\Operation\SecretScanning\ListAlertsForRepo */
final class ListAlertsForRepoTest extends AsyncTestCase
{
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
        $browser->request('GET', '/repos/generated/generated/secret-scanning/alerts?state=generated&secret_type=generated&resolution=generated&before=generated&after=generated&sort=generated&direction=generated&page=1&per_page=8', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\SecretScanning\ListAlertsForRepo::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated';
            $data['repo']        = 'generated';
            $data['state']       = 'generated';
            $data['secret_type'] = 'generated';
            $data['resolution']  = 'generated';
            $data['before']      = 'generated';
            $data['after']       = 'generated';
            $data['sort']        = 'generated';
            $data['direction']   = 'generated';
            $data['page']        = 1;
            $data['per_page']    = 8;

            return $data;
        })([]));
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
        $browser->request('GET', '/repos/generated/generated/secret-scanning/alerts?state=generated&secret_type=generated&resolution=generated&before=generated&after=generated&sort=generated&direction=generated&page=1&per_page=8', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->secretScanning()->listAlertsForRepo('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 1, 8);
    }

    /** @test */
    public function call_httpCode_404_empty(): void
    {
        $response = new Response(404, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/secret-scanning/alerts?state=generated&secret_type=generated&resolution=generated&before=generated&after=generated&sort=generated&direction=generated&page=1&per_page=8', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\SecretScanning\ListAlertsForRepo::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated';
            $data['repo']        = 'generated';
            $data['state']       = 'generated';
            $data['secret_type'] = 'generated';
            $data['resolution']  = 'generated';
            $data['before']      = 'generated';
            $data['after']       = 'generated';
            $data['sort']        = 'generated';
            $data['direction']   = 'generated';
            $data['page']        = 1;
            $data['per_page']    = 8;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_404_empty(): void
    {
        $response = new Response(404, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/secret-scanning/alerts?state=generated&secret_type=generated&resolution=generated&before=generated&after=generated&sort=generated&direction=generated&page=1&per_page=8', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->secretScanning()->listAlertsForRepo('generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 'generated', 1, 8);
        self::assertArrayHasKey('code', $result);
        self::assertSame(404, $result['code']);
    }
}
