<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHub\Operation\Issues;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class List_Test extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\Issue::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/issues?labels=generated_null&since=1970-01-01T00:00:00+00:00&collab=&orgs=&owned=&pulls=&filter=generated_null&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Issues\List_::OPERATION_MATCH, (static function (array $data) : array {
            $data['labels'] = 'generated_null';
            $data['since'] = '1970-01-01T00:00:00+00:00';
            $data['collab'] = false;
            $data['orgs'] = false;
            $data['owned'] = false;
            $data['pulls'] = false;
            $data['filter'] = 'generated_null';
            $data['state'] = 'generated_null';
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['per_page'] = 13;
            $data['page'] = 13;
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_422_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new \React\Http\Message\Response(422, array('Content-Type' => 'application/json'), Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/issues?labels=generated_null&since=1970-01-01T00:00:00+00:00&collab=&orgs=&owned=&pulls=&filter=generated_null&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Issues\List_::OPERATION_MATCH, (static function (array $data) : array {
            $data['labels'] = 'generated_null';
            $data['since'] = '1970-01-01T00:00:00+00:00';
            $data['collab'] = false;
            $data['orgs'] = false;
            $data['owned'] = false;
            $data['pulls'] = false;
            $data['filter'] = 'generated_null';
            $data['state'] = 'generated_null';
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['per_page'] = 13;
            $data['page'] = 13;
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_404_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(404, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/issues?labels=generated_null&since=1970-01-01T00:00:00+00:00&collab=&orgs=&owned=&pulls=&filter=generated_null&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Issues\List_::OPERATION_MATCH, (static function (array $data) : array {
            $data['labels'] = 'generated_null';
            $data['since'] = '1970-01-01T00:00:00+00:00';
            $data['collab'] = false;
            $data['orgs'] = false;
            $data['owned'] = false;
            $data['pulls'] = false;
            $data['filter'] = 'generated_null';
            $data['state'] = 'generated_null';
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['per_page'] = 13;
            $data['page'] = 13;
            return $data;
        })(array()));
    }
}
