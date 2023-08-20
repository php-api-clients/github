<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Codespaces;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function json_encode;
use function React\Promise\resolve;

/** @covers \ApiClients\Client\GitHub\Operation\Codespaces\CreateWithRepoForAuthenticatedUser */
final class CreateWithRepoForAuthenticatedUserTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_201_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Codespace::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Codespaces\CreateWithRepoForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';

            return $data;
        })(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_201_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Codespace::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codespaces()->createWithRepoForAuthenticatedUser('generated', 'generated', json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_202_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Codespace::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Codespaces\CreateWithRepoForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';

            return $data;
        })(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_202_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(202, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Codespace::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codespaces()->createWithRepoForAuthenticatedUser('generated', 'generated', json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_400_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Codespaces\CreateWithRepoForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';

            return $data;
        })(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_400_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(400, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codespaces()->createWithRepoForAuthenticatedUser('generated', 'generated', json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_400_requestContentType_application_json_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Codespaces\CreateWithRepoForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';

            return $data;
        })(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_400_requestContentType_application_json_responseContentType_application_scim_json_zero(): void
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new Response(400, ['Content-Type' => 'application/scim+json'], json_encode(json_decode(Schema\ScimError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codespaces()->createWithRepoForAuthenticatedUser('generated', 'generated', json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_401_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(401, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Codespaces\CreateWithRepoForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';

            return $data;
        })(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_401_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(401, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codespaces()->createWithRepoForAuthenticatedUser('generated', 'generated', json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_403_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Codespaces\CreateWithRepoForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';

            return $data;
        })(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_403_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(403, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codespaces()->createWithRepoForAuthenticatedUser('generated', 'generated', json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_404_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Codespaces\CreateWithRepoForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';

            return $data;
        })(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_404_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(404, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codespaces()->createWithRepoForAuthenticatedUser('generated', 'generated', json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_503_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class);
        $response = new Response(503, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Codespaces\CreateWithRepoForAuthenticatedUser::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';

            return $data;
        })(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_503_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class);
        $response = new Response(503, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/codespaces', Argument::type('array'), json_encode(json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->codespaces()->createWithRepoForAuthenticatedUser('generated', 'generated', json_decode(Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }
}
