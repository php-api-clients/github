<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Orgs;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Orgs\RemoveOutsideCollaborator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function React\Promise\resolve;

final class RemoveOutsideCollaboratorTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_422_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson\H422::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], Schema\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson\H422::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/orgs/generated_null/outside_collaborators/generated_null', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(RemoveOutsideCollaborator::OPERATION_MATCH, (static function (array $data): array {
            $data['org']      = 'generated_null';
            $data['username'] = 'generated_null';

            return $data;
        })([]));
    }
}
