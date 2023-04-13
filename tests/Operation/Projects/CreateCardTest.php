<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHub\Operation\Projects;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class CreateCardTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_201_requestContentType_application_json_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(201, array('Content-Type' => 'application/json'), Schema\ProjectCard::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/projects/columns/13/cards', \Prophecy\Argument::type('array'), Schema\Projects\CreateCard\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Projects\CreateCard::OPERATION_MATCH, (static function (array $data) : array {
            $data['column_id'] = 13;
            return $data;
        })(json_decode(Schema\Projects\CreateCard\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
    /**
     * @test
     */
    public function httpCode_403_requestContentType_application_json_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(403, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/projects/columns/13/cards', \Prophecy\Argument::type('array'), Schema\Projects\CreateCard\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Projects\CreateCard::OPERATION_MATCH, (static function (array $data) : array {
            $data['column_id'] = 13;
            return $data;
        })(json_decode(Schema\Projects\CreateCard\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
    /**
     * @test
     */
    public function httpCode_401_requestContentType_application_json_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(401, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/projects/columns/13/cards', \Prophecy\Argument::type('array'), Schema\Projects\CreateCard\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Projects\CreateCard::OPERATION_MATCH, (static function (array $data) : array {
            $data['column_id'] = 13;
            return $data;
        })(json_decode(Schema\Projects\CreateCard\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
    /**
     * @test
     */
    public function httpCode_422_requestContentType_application_json_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\Operation\Projects\CreateCard\Response\Applicationjson\H422::class);
        $response = new \React\Http\Message\Response(422, array('Content-Type' => 'application/json'), Schema\Operation\Projects\CreateCard\Response\Applicationjson\H422::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/projects/columns/13/cards', \Prophecy\Argument::type('array'), Schema\Projects\CreateCard\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Projects\CreateCard::OPERATION_MATCH, (static function (array $data) : array {
            $data['column_id'] = 13;
            return $data;
        })(json_decode(Schema\Projects\CreateCard\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
    /**
     * @test
     */
    public function httpCode_503_requestContentType_application_json_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\Operation\Projects\CreateCard\Response\Applicationjson\H503::class);
        $response = new \React\Http\Message\Response(503, array('Content-Type' => 'application/json'), Schema\Operation\Projects\CreateCard\Response\Applicationjson\H503::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/projects/columns/13/cards', \Prophecy\Argument::type('array'), Schema\Projects\CreateCard\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Projects\CreateCard::OPERATION_MATCH, (static function (array $data) : array {
            $data['column_id'] = 13;
            return $data;
        })(json_decode(Schema\Projects\CreateCard\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
