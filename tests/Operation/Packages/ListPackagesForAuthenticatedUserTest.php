<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Packages;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Async\await;
use function React\Promise\resolve;

final class ListPackagesForAuthenticatedUserTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_400_empty(): void
    {
        $response = new Response(400, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/user/packages?package_type=generated&visibility=generated&page=4&per_page=8', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Packages\ListPackagesForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['package_type'] = 'generated';
            $data['visibility']   = 'generated';
            $data['page']         = 4;
            $data['per_page']     = 8;

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_400_empty(): void
    {
        $response = new Response(400, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/user/packages?package_type=generated&visibility=generated&page=4&per_page=8', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->packages()->listPackagesForAuthenticatedUser('generated', 'generated', 4, 8));
        self::assertArrayHasKey('code', $result);
        self::assertSame(400, $result['code']);
    }
}
