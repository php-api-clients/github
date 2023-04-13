<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHub\Operation\Activity;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class SetThreadSubscriptionTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_requestContentType_application_json_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), Schema\ThreadSubscription::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/notifications/threads/13/subscription', \Prophecy\Argument::type('array'), Schema\Activity\SetThreadSubscription\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Activity\SetThreadSubscription::OPERATION_MATCH, (static function (array $data) : array {
            $data['thread_id'] = 13;
            return $data;
        })(json_decode(Schema\Activity\SetThreadSubscription\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
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
        $browser->request('PUT', '/notifications/threads/13/subscription', \Prophecy\Argument::type('array'), Schema\Activity\SetThreadSubscription\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Activity\SetThreadSubscription::OPERATION_MATCH, (static function (array $data) : array {
            $data['thread_id'] = 13;
            return $data;
        })(json_decode(Schema\Activity\SetThreadSubscription\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
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
        $browser->request('PUT', '/notifications/threads/13/subscription', \Prophecy\Argument::type('array'), Schema\Activity\SetThreadSubscription\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Activity\SetThreadSubscription::OPERATION_MATCH, (static function (array $data) : array {
            $data['thread_id'] = 13;
            return $data;
        })(json_decode(Schema\Activity\SetThreadSubscription\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
