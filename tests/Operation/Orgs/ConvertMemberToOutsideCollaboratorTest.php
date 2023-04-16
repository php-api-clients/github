<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Orgs;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Orgs\ConvertMemberToOutsideCollaborator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class ConvertMemberToOutsideCollaboratorTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_202_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], Schema\Operation\Orgs\ConvertMemberToOutsideCollaborator\Response\Applicationjson\H202::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated_null/outside_collaborators/generated_null', Argument::type('array'), Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ConvertMemberToOutsideCollaborator::OPERATION_MATCH, (static function (array $data): array {
            $data['org']      = 'generated_null';
            $data['username'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_404_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/orgs/generated_null/outside_collaborators/generated_null', Argument::type('array'), Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(ConvertMemberToOutsideCollaborator::OPERATION_MATCH, (static function (array $data): array {
            $data['org']      = 'generated_null';
            $data['username'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Orgs\ConvertMemberToOutsideCollaborator\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
