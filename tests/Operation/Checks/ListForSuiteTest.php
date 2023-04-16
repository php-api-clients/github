<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Checks;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation\Checks\ListForSuite;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class ListForSuiteTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/check-suites/13/check-runs?check_name=generated_null&status=generated_null&filter=generated_null&per_page=13&page=13', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ListForSuite::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']          = 'generated_null';
            $data['repo']           = 'generated_null';
            $data['check_suite_id'] = 13;
            $data['check_name']     = 'generated_null';
            $data['status']         = 'generated_null';
            $data['filter']         = 'generated_null';
            $data['per_page']       = 13;
            $data['page']           = 13;

            return $data;
        })([]));
    }
}
