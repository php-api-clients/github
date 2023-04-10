<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\Github\Operation\Actions;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class CreateOrUpdateEnvironmentSecretTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t201td1f5a9d446c6cec2cf63545e8163e585()
    {
        $response = new \React\Http\Message\Response(201, array('Content-Type' => 'application/json'), Schema\EmptyObject::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repositories/13/environments/generated_null/secrets/generated_null', \Prophecy\Argument::type('array'), Schema\Actions\CreateOrUpdateEnvironmentSecret\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Actions\CreateOrUpdateEnvironmentSecret::OPERATION_MATCH, (static function (array $data) : array {
            $data['repository_id'] = 13;
            $data['environment_name'] = 'generated_null';
            $data['secret_name'] = 'generated_null';
            return $data;
        })(json_decode(Schema\Actions\CreateOrUpdateEnvironmentSecret\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
