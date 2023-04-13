<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListForAuthenticatedUserTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\Repository::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/user/repos?direction=generated_null&since=1970-01-01T00:00:00+00:00&before=1970-01-01T00:00:00+00:00&visibility=generated_null&affiliation=generated_null&type=generated_null&sort=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Repos\ListForAuthenticatedUser::OPERATION_MATCH, (static function (array $data) : array {
            $data['direction'] = 'generated_null';
            $data['since'] = '1970-01-01T00:00:00+00:00';
            $data['before'] = '1970-01-01T00:00:00+00:00';
            $data['visibility'] = 'generated_null';
            $data['affiliation'] = 'generated_null';
            $data['type'] = 'generated_null';
            $data['sort'] = 'generated_null';
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
        $browser->request('GET', '/user/repos?direction=generated_null&since=1970-01-01T00:00:00+00:00&before=1970-01-01T00:00:00+00:00&visibility=generated_null&affiliation=generated_null&type=generated_null&sort=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Repos\ListForAuthenticatedUser::OPERATION_MATCH, (static function (array $data) : array {
            $data['direction'] = 'generated_null';
            $data['since'] = '1970-01-01T00:00:00+00:00';
            $data['before'] = '1970-01-01T00:00:00+00:00';
            $data['visibility'] = 'generated_null';
            $data['affiliation'] = 'generated_null';
            $data['type'] = 'generated_null';
            $data['sort'] = 'generated_null';
            $data['per_page'] = 13;
            $data['page'] = 13;
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
        $browser->request('GET', '/user/repos?direction=generated_null&since=1970-01-01T00:00:00+00:00&before=1970-01-01T00:00:00+00:00&visibility=generated_null&affiliation=generated_null&type=generated_null&sort=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Repos\ListForAuthenticatedUser::OPERATION_MATCH, (static function (array $data) : array {
            $data['direction'] = 'generated_null';
            $data['since'] = '1970-01-01T00:00:00+00:00';
            $data['before'] = '1970-01-01T00:00:00+00:00';
            $data['visibility'] = 'generated_null';
            $data['affiliation'] = 'generated_null';
            $data['type'] = 'generated_null';
            $data['sort'] = 'generated_null';
            $data['per_page'] = 13;
            $data['page'] = 13;
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_401_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(401, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/user/repos?direction=generated_null&since=1970-01-01T00:00:00+00:00&before=1970-01-01T00:00:00+00:00&visibility=generated_null&affiliation=generated_null&type=generated_null&sort=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Repos\ListForAuthenticatedUser::OPERATION_MATCH, (static function (array $data) : array {
            $data['direction'] = 'generated_null';
            $data['since'] = '1970-01-01T00:00:00+00:00';
            $data['before'] = '1970-01-01T00:00:00+00:00';
            $data['visibility'] = 'generated_null';
            $data['affiliation'] = 'generated_null';
            $data['type'] = 'generated_null';
            $data['sort'] = 'generated_null';
            $data['per_page'] = 13;
            $data['page'] = 13;
            return $data;
        })(array()));
    }
}
