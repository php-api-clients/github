<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation\Repos\UploadReleaseAsset;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class UploadReleaseAssetTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_201_requestContentType_application_octet_stream_responseContentType_application_json(): void
    {
        $response = new Response(201, ['Content-Type' => 'application/json'], Schema\ReleaseAsset::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated_null/generated_null/releases/13/assets?name=generated_null&label=generated_null', Argument::type('array'), Schema\Repos\UploadReleaseAsset\Request\ApplicationoctetStream::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UploadReleaseAsset::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']      = 'generated_null';
            $data['repo']       = 'generated_null';
            $data['release_id'] = 13;
            $data['name']       = 'generated_null';
            $data['label']      = 'generated_null';

            return $data;
        })(json_decode(Schema\Repos\UploadReleaseAsset\Request\ApplicationoctetStream::SCHEMA_EXAMPLE_DATA, true)));
    }
}
