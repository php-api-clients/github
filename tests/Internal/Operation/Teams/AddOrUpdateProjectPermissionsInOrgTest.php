<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\Teams;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Internal\Operation\Teams\AddOrUpdateProjectPermissionsInOrg */
final class AddOrUpdateProjectPermissionsInOrgTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_403_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\Teams\AddOrUpdateProjectPermissionsInOrg\Response\ApplicationJson\Forbidden\Application\Json::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\Teams\AddOrUpdateProjectPermissionsInOrg\Response\ApplicationJson\Forbidden\Application\Json::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated/teams/generated/projects/10', Argument::type('array'), json_encode(json_decode(Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Teams\AddOrUpdateProjectPermissionsInOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']        = 'generated';
            $data['team_slug']  = 'generated';
            $data['project_id'] = 10;

            return $data;
        })(json_decode(Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_403_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\Teams\AddOrUpdateProjectPermissionsInOrg\Response\ApplicationJson\Forbidden\Application\Json::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\Teams\AddOrUpdateProjectPermissionsInOrg\Response\ApplicationJson\Forbidden\Application\Json::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated/teams/generated/projects/10', Argument::type('array'), json_encode(json_decode(Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->teams()->addOrUpdateProjectPermissionsInOrg('generated', 'generated', 10, json_decode(Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_204_requestContentType_application_json_empty(): void
    {
        $response = new Response(204, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated/teams/generated/projects/10', Argument::type('array'), json_encode(json_decode(Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Teams\AddOrUpdateProjectPermissionsInOrg::OPERATION_MATCH, (static function (array $data): array {
            $data['org']        = 'generated';
            $data['team_slug']  = 'generated';
            $data['project_id'] = 10;

            return $data;
        })(json_decode(Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_204_requestContentType_application_json_empty(): void
    {
        $response = new Response(204, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated/teams/generated/projects/10', Argument::type('array'), json_encode(json_decode(Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->teams()->addOrUpdateProjectPermissionsInOrg('generated', 'generated', 10, json_decode(Schema\Teams\AddOrUpdateProjectPermissionsInOrg\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
        self::assertArrayHasKey('code', $result);
        self::assertSame(204, $result['code']);
    }
}
