<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Packages;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation\Packages\ListPackagesForAuthenticatedUser;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class ListPackagesForAuthenticatedUserTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], '[' . Schema\Package::SCHEMA_EXAMPLE_DATA . ']');
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/user/packages?package_type=generated_null&visibility=generated_null&page=13&per_page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListPackagesForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['package_type'] = 'generated_null';
            $data['visibility']   = 'generated_null';
            $data['page']         = 13;
            $data['per_page']     = 13;

            return $data;
        })([]));
    }
}
