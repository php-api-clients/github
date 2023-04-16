<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\SecretScanning;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\SecretScanning\ListAlertsForRepo;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class ListAlertsForRepoTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], '[' . Schema\SecretScanningAlert::SCHEMA_EXAMPLE_DATA . ']');
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/secret-scanning/alerts?state=generated_null&secret_type=generated_null&resolution=generated_null&before=generated_null&after=generated_null&sort=generated_null&direction=generated_null&page=13&per_page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListAlertsForRepo::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated_null';
            $data['repo']        = 'generated_null';
            $data['state']       = 'generated_null';
            $data['secret_type'] = 'generated_null';
            $data['resolution']  = 'generated_null';
            $data['before']      = 'generated_null';
            $data['after']       = 'generated_null';
            $data['sort']        = 'generated_null';
            $data['direction']   = 'generated_null';
            $data['page']        = 13;
            $data['per_page']    = 13;

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
        $browser->request('GET', '/repos/generated_null/generated_null/secret-scanning/alerts?state=generated_null&secret_type=generated_null&resolution=generated_null&before=generated_null&after=generated_null&sort=generated_null&direction=generated_null&page=13&per_page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListAlertsForRepo::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']       = 'generated_null';
            $data['repo']        = 'generated_null';
            $data['state']       = 'generated_null';
            $data['secret_type'] = 'generated_null';
            $data['resolution']  = 'generated_null';
            $data['before']      = 'generated_null';
            $data['after']       = 'generated_null';
            $data['sort']        = 'generated_null';
            $data['direction']   = 'generated_null';
            $data['page']        = 13;
            $data['per_page']    = 13;

            return $data;
        })([]));
    }
}
