<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\Github\Operation\Dependabot;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class UpdateAlertTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t200td1f5a9d446c6cec2cf63545e8163e585()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), Schema\DependabotAlert::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated_null/generated_null/dependabot/alerts/13', \Prophecy\Argument::type('array'), Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\UpdateAlert::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['alert_number'] = 13;
            return $data;
        })(json_decode(Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
    /**
     * @test
     */
    public function t400td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(400, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated_null/generated_null/dependabot/alerts/13', \Prophecy\Argument::type('array'), Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\UpdateAlert::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['alert_number'] = 13;
            return $data;
        })(json_decode(Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
    /**
     * @test
     */
    public function t400te721a100ec95fd3067a83a0920ca7a5e()
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new \React\Http\Message\Response(400, array('Content-Type' => 'application/scim+json'), Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated_null/generated_null/dependabot/alerts/13', \Prophecy\Argument::type('array'), Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\UpdateAlert::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['alert_number'] = 13;
            return $data;
        })(json_decode(Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
    /**
     * @test
     */
    public function t403td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(403, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated_null/generated_null/dependabot/alerts/13', \Prophecy\Argument::type('array'), Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\UpdateAlert::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['alert_number'] = 13;
            return $data;
        })(json_decode(Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
    /**
     * @test
     */
    public function t404td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(404, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated_null/generated_null/dependabot/alerts/13', \Prophecy\Argument::type('array'), Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\UpdateAlert::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['alert_number'] = 13;
            return $data;
        })(json_decode(Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
    /**
     * @test
     */
    public function t409td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(409, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated_null/generated_null/dependabot/alerts/13', \Prophecy\Argument::type('array'), Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\UpdateAlert::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['alert_number'] = 13;
            return $data;
        })(json_decode(Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
    /**
     * @test
     */
    public function t422td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\ValidationErrorSimple::class);
        $response = new \React\Http\Message\Response(422, array('Content-Type' => 'application/json'), Schema\ValidationErrorSimple::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('PATCH', '/repos/generated_null/generated_null/dependabot/alerts/13', \Prophecy\Argument::type('array'), Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA)->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\UpdateAlert::OPERATION_MATCH, (static function (array $data) : array {
            $data['owner'] = 'generated_null';
            $data['repo'] = 'generated_null';
            $data['alert_number'] = 13;
            return $data;
        })(json_decode(Schema\Dependabot\UpdateAlert\Request\Applicationjson::SCHEMA_EXAMPLE_DATA, true)));
    }
}
