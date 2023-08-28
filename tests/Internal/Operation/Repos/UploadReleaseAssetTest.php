<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Client;
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

/** @covers \ApiClients\Client\GitHub\Internal\Operation\Repos\UploadReleaseAsset */
final class UploadReleaseAssetTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_201_requestContentType_application_octet_stream_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ReleaseAsset::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/releases/10/assets?name=generated&label=generated', Argument::type('array'), json_encode(json_decode(Schema\Repos\UploadReleaseAsset\Request\ApplicationOctetStream::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Repos\UploadReleaseAsset::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']      = 'generated';
            $data['repo']       = 'generated';
            $data['release_id'] = 10;
            $data['name']       = 'generated';
            $data['label']      = 'generated';

            return $data;
        })(json_decode(Schema\Repos\UploadReleaseAsset\Request\ApplicationOctetStream::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_201_requestContentType_application_octet_stream_responseContentType_application_json_zero(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], json_encode(json_decode(Schema\ReleaseAsset::SCHEMA_EXAMPLE_DATA, true)));
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/releases/10/assets?name=generated&label=generated', Argument::type('array'), json_encode(json_decode(Schema\Repos\UploadReleaseAsset\Request\ApplicationOctetStream::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->repos()->uploadReleaseAsset('generated', 'generated', 10, 'generated', 'generated', json_decode(Schema\Repos\UploadReleaseAsset\Request\ApplicationOctetStream::SCHEMA_EXAMPLE_DATA, true));
    }

    /** @test */
    public function call_httpCode_422_requestContentType_application_octet_stream_empty(): void
    {
        $response = new Response(422, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/releases/10/assets?name=generated&label=generated', Argument::type('array'), json_encode(json_decode(Schema\Repos\UploadReleaseAsset\Request\ApplicationOctetStream::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Internal\Operation\Repos\UploadReleaseAsset::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']      = 'generated';
            $data['repo']       = 'generated';
            $data['release_id'] = 10;
            $data['name']       = 'generated';
            $data['label']      = 'generated';

            return $data;
        })(json_decode(Schema\Repos\UploadReleaseAsset\Request\ApplicationOctetStream::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_422_requestContentType_application_octet_stream_empty(): void
    {
        $response = new Response(422, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/releases/10/assets?name=generated&label=generated', Argument::type('array'), json_encode(json_decode(Schema\Repos\UploadReleaseAsset\Request\ApplicationOctetStream::SCHEMA_EXAMPLE_DATA, true)))->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->operations()->repos()->uploadReleaseAsset('generated', 'generated', 10, 'generated', 'generated', json_decode(Schema\Repos\UploadReleaseAsset\Request\ApplicationOctetStream::SCHEMA_EXAMPLE_DATA, true));
        self::assertArrayHasKey('code', $result);
        self::assertSame(422, $result['code']);
    }
}
