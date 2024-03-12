<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\Git;

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

/** @covers \ApiClients\Client\GitHub\Internal\Operation\Git\UpdateRef */
final class UpdateRefTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\GitRef::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/git/refs/generated', Argument::type('array'), json_encode(json_decode(Schema\Git\UpdateRef\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Git\UpdateRef::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';
            $data['ref']   = 'generated';

            return $data;
        })(json_decode(Schema\Git\UpdateRef\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\GitRef::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/git/refs/generated', Argument::type('array'), json_encode(json_decode(Schema\Git\UpdateRef\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->git()->updateRef('generated', 'generated', 'generated', json_decode(Schema\Git\UpdateRef\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_422_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ValidationError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/git/refs/generated', Argument::type('array'), json_encode(json_decode(Schema\Git\UpdateRef\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Git\UpdateRef::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';
            $data['ref']   = 'generated';

            return $data;
        })(json_decode(Schema\Git\UpdateRef\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_422_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new Response(422, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ValidationError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/git/refs/generated', Argument::type('array'), json_encode(json_decode(Schema\Git\UpdateRef\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->git()->updateRef('generated', 'generated', 'generated', json_decode(Schema\Git\UpdateRef\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_409_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(409, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/git/refs/generated', Argument::type('array'), json_encode(json_decode(Schema\Git\UpdateRef\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Git\UpdateRef::OPERATION_MATCH, (static function (array $data): array {
            $data['owner'] = 'generated';
            $data['repo']  = 'generated';
            $data['ref']   = 'generated';

            return $data;
        })(json_decode(Schema\Git\UpdateRef\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_409_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(409, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated/generated/git/refs/generated', Argument::type('array'), json_encode(json_decode(Schema\Git\UpdateRef\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->git()->updateRef('generated', 'generated', 'generated', json_decode(Schema\Git\UpdateRef\Request\ApplicationJson::SCHEMA_EXAMPLE_DATA, true));
    }
}
