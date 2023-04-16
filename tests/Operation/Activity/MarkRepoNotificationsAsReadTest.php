<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHub\Operation\Activity;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class MarkRepoNotificationsAsReadTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_202_requestContentType_application_json_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(202, array('Content-Type' => 'application/json'), Schema\Operation\Activity\MarkRepoNotificationsAsRead\Response\Applicationjson\H202::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated_null/generated_null/notifications', \Prophecy\Argument::type('array'), Schema\Activity\MarkRepoNotificationsAsRead\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Activity\MarkRepoNotificationsAsRead::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            return $data;
        })(json_decode(Schema\Activity\MarkRepoNotificationsAsRead\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
