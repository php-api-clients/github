<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation\Teams\AddOrUpdateMembershipForUserInOrg;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class AddOrUpdateMembershipForUserInOrgTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\TeamMembership::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated_null/teams/generated_null/memberships/generated_null', Argument::type('array'), Schema\Teams\AddOrUpdateMembershipForUserInOrg\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(AddOrUpdateMembershipForUserInOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']       = 'generated_null';
            $data['team_slug'] = 'generated_null';
            $data['username']  = 'generated_null';

            return $data;
        })(json_decode(Schema\Teams\AddOrUpdateMembershipForUserInOrg\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
