<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Teams\AddOrUpdateProjectPermissionsInOrg;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class AddOrUpdateProjectPermissionsInOrgTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_403_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\Operation\Teams\AddOrUpdateProjectPermissionsInOrg\Response\Applicationjson\H403::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], Schema\Operation\Teams\AddOrUpdateProjectPermissionsInOrg\Response\Applicationjson\H403::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated_null/teams/generated_null/projects/13', Argument::type('array'), Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(AddOrUpdateProjectPermissionsInOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']        = 'generated_null';
            $data['team_slug']  = 'generated_null';
            $data['project_id'] = 13;

            return $data;
        })(json_decode(Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
