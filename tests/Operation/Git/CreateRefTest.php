<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\Github\Operation\Git;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class CreateRefTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t201td1f5a9d446c6cec2cf63545e8163e585()
    {
        $response = new \React\Http\Message\Response(201, array('Content-Type' => 'application/json'), Schema\GitRef::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated_null/generated_null/git/refs', \Prophecy\Argument::type('array'), Schema\Git\CreateRef\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Git\CreateRef::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            return $data;
        })(json_decode(Schema\Git\CreateRef\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
    /**
     * @test
     */
    public function t422td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new \React\Http\Message\Response(422, array('Content-Type' => 'application/json'), Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated_null/generated_null/git/refs', \Prophecy\Argument::type('array'), Schema\Git\CreateRef\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Git\CreateRef::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            return $data;
        })(json_decode(Schema\Git\CreateRef\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
