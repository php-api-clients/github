<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHub\Operation\Dependabot;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class ListAlertsForOrgTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_responseContentType_application_json()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\DependabotAlertWithRepository::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['state'] = 'generated_null';
            $data['severity'] = 'generated_null';
            $data['ecosystem'] = 'generated_null';
            $data['package'] = 'generated_null';
            $data['scope'] = 'generated_null';
            $data['before'] = 'generated_null';
            $data['after'] = 'generated_null';
            $data['last'] = 13;
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['first'] = 13;
            $data['per_page'] = 13;
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_400_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(400, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['state'] = 'generated_null';
            $data['severity'] = 'generated_null';
            $data['ecosystem'] = 'generated_null';
            $data['package'] = 'generated_null';
            $data['scope'] = 'generated_null';
            $data['before'] = 'generated_null';
            $data['after'] = 'generated_null';
            $data['last'] = 13;
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['first'] = 13;
            $data['per_page'] = 13;
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_400_responseContentType_application_scim_json()
    {
        self::expectException(ErrorSchemas\ScimError::class);
        $response = new \React\Http\Message\Response(400, array('Content-Type' => 'application/scim+json'), Schema\ScimError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['state'] = 'generated_null';
            $data['severity'] = 'generated_null';
            $data['ecosystem'] = 'generated_null';
            $data['package'] = 'generated_null';
            $data['scope'] = 'generated_null';
            $data['before'] = 'generated_null';
            $data['after'] = 'generated_null';
            $data['last'] = 13;
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['first'] = 13;
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
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['state'] = 'generated_null';
            $data['severity'] = 'generated_null';
            $data['ecosystem'] = 'generated_null';
            $data['package'] = 'generated_null';
            $data['scope'] = 'generated_null';
            $data['before'] = 'generated_null';
            $data['after'] = 'generated_null';
            $data['last'] = 13;
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['first'] = 13;
            $data['per_page'] = 13;
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
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['state'] = 'generated_null';
            $data['severity'] = 'generated_null';
            $data['ecosystem'] = 'generated_null';
            $data['package'] = 'generated_null';
            $data['scope'] = 'generated_null';
            $data['before'] = 'generated_null';
            $data['after'] = 'generated_null';
            $data['last'] = 13;
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['first'] = 13;
            $data['per_page'] = 13;
            return $data;
        })(array()));
    }
    /**
     * @test
     */
    public function httpCode_422_responseContentType_application_json()
    {
        self::expectException(ErrorSchemas\ValidationErrorSimple::class);
        $response = new \React\Http\Message\Response(422, array('Content-Type' => 'application/json'), Schema\ValidationErrorSimple::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', \Prophecy\Argument::type('array'), \Prophecy\Argument::any())->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH, (static function (array $data) : array {
            $data['org'] = 'generated_null';
            $data['state'] = 'generated_null';
            $data['severity'] = 'generated_null';
            $data['ecosystem'] = 'generated_null';
            $data['package'] = 'generated_null';
            $data['scope'] = 'generated_null';
            $data['before'] = 'generated_null';
            $data['after'] = 'generated_null';
            $data['last'] = 13;
            $data['sort'] = 'generated_null';
            $data['direction'] = 'generated_null';
            $data['first'] = 13;
            $data['per_page'] = 13;
            return $data;
        })(array()));
    }
}
