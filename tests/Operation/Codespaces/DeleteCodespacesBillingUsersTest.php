<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Codespaces;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation\Codespaces\DeleteCodespacesBillingUsers;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class DeleteCodespacesBillingUsersTest extends AsyncTestCase
{
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
        $browser->request('DELETE', '/orgs/generated_null/codespaces/billing/selected_users', Argument::type('array'), Schema\Codespaces\DeleteCodespacesBillingUsers\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(DeleteCodespacesBillingUsers::OPERATION_MATCH, (static function (array $data): array {
            $data['org'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Codespaces\DeleteCodespacesBillingUsers\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
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
        $browser->request('DELETE', '/orgs/generated_null/codespaces/billing/selected_users', Argument::type('array'), Schema\Codespaces\DeleteCodespacesBillingUsers\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(DeleteCodespacesBillingUsers::OPERATION_MATCH, (static function (array $data): array {
            $data['org'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Codespaces\DeleteCodespacesBillingUsers\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function httpCode_500_requestContentType_application_json_responseContentType_application_json(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(500, ['Content-Type' => 'application/json'], Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('DELETE', '/orgs/generated_null/codespaces/billing/selected_users', Argument::type('array'), Schema\Codespaces\DeleteCodespacesBillingUsers\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(DeleteCodespacesBillingUsers::OPERATION_MATCH, (static function (array $data): array {
            $data['org'] = 'generated_null';

            return $data;
        })(json_decode(Schema\Codespaces\DeleteCodespacesBillingUsers\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
