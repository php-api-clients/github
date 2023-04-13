<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ReRunWorkflowTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_201_requestContentType_application_json_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(201, array('Content-Type' => 'application/json'), Schema\EmptyObject::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated_null/generated_null/actions/runs/13/rerun', \Prophecy\Argument::type('array'), Schema\Actions\ReRunWorkflow\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Actions\ReRunWorkflow::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['run_id'] = 13;
            return $data;
        })(json_decode(Schema\Actions\ReRunWorkflow\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
