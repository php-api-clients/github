<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Packages;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation\Packages\GetPackageVersionForAuthenticatedUser;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class GetPackageVersionForAuthenticatedUserTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\PackageVersion::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/user/packages/generated_null/generated_null/versions/13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(GetPackageVersionForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['package_type']       = 'generated_null';
            $data['package_name']       = 'generated_null';
            $data['package_version_id'] = 13;

            return $data;
        })([]));
    }
}
