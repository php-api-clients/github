<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\Actions;

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

/** @covers \ApiClients\Client\GitHub\Internal\Operation\Actions\DownloadArtifact */
final class DownloadArtifactTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_410_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(410, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/actions/artifacts/11/generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Actions\DownloadArtifact::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']          = 'generated';
            $data['repo']           = 'generated';
            $data['artifact_id']    = 11;
            $data['archive_format'] = 'generated';

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_410_responseContentType_application_json_zero(): void
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new Response(410, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\BasicError::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/actions/artifacts/11/generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->actions()->downloadArtifact('generated', 'generated', 11, 'generated');
    }

    /** @test */
    public function call_httpCode_302_empty(): void
    {
        $response = new Response(302, ['Location' => 'https://pipelines.actions.githubusercontent.com/OhgS4QRKqmgx7bKC27GKU83jnQjyeqG8oIMTge8eqtheppcmw8/_apis/pipelines/1/runs/176/signedlogcontent?urlExpires=2020-01-24T18%3A10%3A31.5729946Z&urlSigningMethod=HMACV1&urlSignature=agG73JakPYkHrh06seAkvmH7rBR4Ji4c2%2B6a2ejYh3E%3D']);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/actions/artifacts/11/generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Actions\DownloadArtifact::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']          = 'generated';
            $data['repo']           = 'generated';
            $data['artifact_id']    = 11;
            $data['archive_format'] = 'generated';

            return $data;
        })([]));
    }

    /** @test */
    public function operations_httpCode_302_empty(): void
    {
        $response = new Response(302, ['Location' => 'https://pipelines.actions.githubusercontent.com/OhgS4QRKqmgx7bKC27GKU83jnQjyeqG8oIMTge8eqtheppcmw8/_apis/pipelines/1/runs/176/signedlogcontent?urlExpires=2020-01-24T18%3A10%3A31.5729946Z&urlSigningMethod=HMACV1&urlSignature=agG73JakPYkHrh06seAkvmH7rBR4Ji4c2%2B6a2ejYh3E%3D']);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated/generated/actions/artifacts/11/generated', Argument::type('array'), Argument::any())->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->actions()->downloadArtifact('generated', 'generated', 11, 'generated');
        self::assertArrayHasKey('code', $result);
        self::assertSame(302, $result['code']);
        self::assertArrayHasKey('location', $result);
        self::assertSame('https://pipelines.actions.githubusercontent.com/OhgS4QRKqmgx7bKC27GKU83jnQjyeqG8oIMTge8eqtheppcmw8/_apis/pipelines/1/runs/176/signedlogcontent?urlExpires=2020-01-24T18%3A10%3A31.5729946Z&urlSigningMethod=HMACV1&urlSignature=agG73JakPYkHrh06seAkvmH7rBR4Ji4c2%2B6a2ejYh3E%3D', $result['location']);
    }
}
