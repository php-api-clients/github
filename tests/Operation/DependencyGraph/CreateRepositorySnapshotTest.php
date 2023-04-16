<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\DependencyGraph;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation\DependencyGraph\CreateRepositorySnapshot;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class CreateRepositorySnapshotTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_201_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], Schema\Operation\DependencyGraph\CreateRepositorySnapshot\Response\Applicationjson\H201::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated_null/generated_null/dependency-graph/snapshots', Argument::type('array'), Schema\Snapshot::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(CreateRepositorySnapshot::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated_null';
            $data['repo']  = 'generated_null';

            return $data;
        })(json_decode(Schema\Snapshot::SCHEMA_EXAMPLE_DATA, true)));
    }
}
