<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Teams\AddOrUpdateRepoPermissionsLegacy;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class AddOrUpdateRepoPermissionsLegacyTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_403_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/teams/13/repos/generated_null/generated_null', Argument::type('array'), Schema\Teams\AddOrUpdateRepoPermissionsLegacy\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(AddOrUpdateRepoPermissionsLegacy::OPERATION_MATCH, (static function (array $data): array {
            $data['team_id'] = 13;
            $data['owner']   = 'generated_null';
            $data['repo']    = 'generated_null';

            return $data;
        })(json_decode(Schema\Teams\AddOrUpdateRepoPermissionsLegacy\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_422_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/teams/13/repos/generated_null/generated_null', Argument::type('array'), Schema\Teams\AddOrUpdateRepoPermissionsLegacy\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(AddOrUpdateRepoPermissionsLegacy::OPERATION_MATCH, (static function (array $data): array {
            $data['team_id'] = 13;
            $data['owner']   = 'generated_null';
            $data['repo']    = 'generated_null';

            return $data;
        })(json_decode(Schema\Teams\AddOrUpdateRepoPermissionsLegacy\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
