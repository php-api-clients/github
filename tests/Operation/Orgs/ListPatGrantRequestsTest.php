<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHub\Operation\Orgs;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListPatGrantRequestsTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_500_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(500, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated_null/personal-access-token-requests?owner=&repository=generated_null&permission=generated_null&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=13&page=13&sort=generated_null&direction=generated_null', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Orgs\ListPatGrantRequests::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['owner'] = null;
            $data['repository'] = 'generated_null';
            $data['permission'] = 'generated_null';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after'] = '1970-01-01T00:00:00+00:00';
            $data['per_page'] = 13;
            $data['page'] = 13;
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
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
        $browser->request('GET', '/organizations/generated_null/personal-access-token-requests?owner=&repository=generated_null&permission=generated_null&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=13&page=13&sort=generated_null&direction=generated_null', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Orgs\ListPatGrantRequests::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['owner'] = null;
            $data['repository'] = 'generated_null';
            $data['permission'] = 'generated_null';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after'] = '1970-01-01T00:00:00+00:00';
            $data['per_page'] = 13;
            $data['page'] = 13;
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
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
        $browser->request('GET', '/organizations/generated_null/personal-access-token-requests?owner=&repository=generated_null&permission=generated_null&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=13&page=13&sort=generated_null&direction=generated_null', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Orgs\ListPatGrantRequests::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['owner'] = null;
            $data['repository'] = 'generated_null';
            $data['permission'] = 'generated_null';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after'] = '1970-01-01T00:00:00+00:00';
            $data['per_page'] = 13;
            $data['page'] = 13;
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_403_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(403, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated_null/personal-access-token-requests?owner=&repository=generated_null&permission=generated_null&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=13&page=13&sort=generated_null&direction=generated_null', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Orgs\ListPatGrantRequests::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['owner'] = null;
            $data['repository'] = 'generated_null';
            $data['permission'] = 'generated_null';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after'] = '1970-01-01T00:00:00+00:00';
            $data['per_page'] = 13;
            $data['page'] = 13;
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\OrganizationProgrammaticAccessGrantRequest::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated_null/personal-access-token-requests?owner=&repository=generated_null&permission=generated_null&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=13&page=13&sort=generated_null&direction=generated_null', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Orgs\ListPatGrantRequests::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['owner'] = null;
            $data['repository'] = 'generated_null';
            $data['permission'] = 'generated_null';
            $data['last_used_before'] = '1970-01-01T00:00:00+00:00';
            $data['last_used_after'] = '1970-01-01T00:00:00+00:00';
            $data['per_page'] = 13;
            $data['page'] = 13;
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            return $data;
        })(array()));
    }
}
