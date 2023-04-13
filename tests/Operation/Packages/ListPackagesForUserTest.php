<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHub\Operation\Packages;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListPackagesForUserTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\Package::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/users/generated_null/packages?package_type=generated_null&visibility=generated_null&page=13&per_page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Packages\ListPackagesForUser::OPERATION_MATCH, (static function (array $data) : array {
            $data['package_type'] = 'generated_null';
            $data['visibility'] = 'generated_null';
            $data['username'] = 'generated_null';
            $data['page'] = 13;
            $data['per_page'] = 13;
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
        $browser->request('GET', '/users/generated_null/packages?package_type=generated_null&visibility=generated_null&page=13&per_page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Packages\ListPackagesForUser::OPERATION_MATCH, (static function (array $data) : array {
            $data['package_type'] = 'generated_null';
            $data['visibility'] = 'generated_null';
            $data['username'] = 'generated_null';
            $data['page'] = 13;
            $data['per_page'] = 13;
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
        $browser->request('GET', '/users/generated_null/packages?package_type=generated_null&visibility=generated_null&page=13&per_page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Packages\ListPackagesForUser::OPERATION_MATCH, (static function (array $data) : array {
            $data['package_type'] = 'generated_null';
            $data['visibility'] = 'generated_null';
            $data['username'] = 'generated_null';
            $data['page'] = 13;
            $data['per_page'] = 13;
            return $data;
        })(array()));
    }
}
