<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Migrations;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Migrations\DownloadArchiveForOrg;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class DownloadArchiveForOrgTest extends AsyncTestCase
{
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
        $browser->request('GET', '/orgs/generated_null/migrations/13/archive', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(DownloadArchiveForOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']          = 'generated_null';
            $data['migration_id'] = 13;

            return $data;
        })([]));
    }
}
