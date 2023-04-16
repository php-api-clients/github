<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class UploadReleaseAssetTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_201_requestContentType_application_octet_stream_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(201, array('Content-Type' => 'application/json'), Schema\ReleaseAsset::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated_null/generated_null/releases/13/assets?name=generated_null&label=generated_null', \Prophecy\Argument::type('array'), Schema\Repos\UploadReleaseAsset\Request\ApplicationoctetStream::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Repos\UploadReleaseAsset::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['release_id'] = 13;
            $data['name'] = 'generated_null';
            $data['label'] = 'generated_null';
            return $data;
        })(json_decode(Schema\Repos\UploadReleaseAsset\Request\ApplicationoctetStream::SCHEMA_EXAMPLE_DATA, true)));
    }
}
