<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Async\await;
use function React\Promise\resolve;

final class CreateOrUpdateEnvironmentSecretTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function call_httpCode_201_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], Schema\EmptyObject::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repositories/13/environments/generated/secrets/generated', Argument::type('array'), Schema\Actions\CreateOrUpdateEnvironmentSecret\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Actions\CreateOrUpdateEnvironmentSecret::OPERATION_MATCH, (static function (array $data): array {
            $data['repository_id']    = 13;
            $data['environment_name'] = 'generated';
            $data['secret_name']      = 'generated';

            return $data;
        })(json_decode(Schema\Actions\CreateOrUpdateEnvironmentSecret\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_201_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], Schema\EmptyObject::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repositories/13/environments/generated/secrets/generated', Argument::type('array'), Schema\Actions\CreateOrUpdateEnvironmentSecret\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->actions()->createOrUpdateEnvironmentSecret(13, 'generated', 'generated', json_decode(Schema\Actions\CreateOrUpdateEnvironmentSecret\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function call_httpCode_204_requestContentType_application_json_empty(): void
    {
        $response = new Response(204, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repositories/13/environments/generated/secrets/generated', Argument::type('array'), Schema\Actions\CreateOrUpdateEnvironmentSecret\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Actions\CreateOrUpdateEnvironmentSecret::OPERATION_MATCH, (static function (array $data): array {
            $data['repository_id']    = 13;
            $data['environment_name'] = 'generated';
            $data['secret_name']      = 'generated';

            return $data;
        })(json_decode(Schema\Actions\CreateOrUpdateEnvironmentSecret\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /**
     * @test
     */
    public function operations_httpCode_204_requestContentType_application_json_empty(): void
    {
        $response = new Response(204, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repositories/13/environments/generated/secrets/generated', Argument::type('array'), Schema\Actions\CreateOrUpdateEnvironmentSecret\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->actions()->createOrUpdateEnvironmentSecret(13, 'generated', 'generated', json_decode(Schema\Actions\CreateOrUpdateEnvironmentSecret\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
        self::assertArrayHasKey('code', $result);
        self::assertSame(204, $result['code']);
    }
}
