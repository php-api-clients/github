<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\Github\Operation\Dependabot;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class ListAlertsForOrgTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t200td1f5a9d446c6cec2cf63545e8163e585()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\DependabotAlertWithRepository::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH, array('org' => 'generated_null', 'state' => 'generated_null', 'severity' => 'generated_null', 'ecosystem' => 'generated_null', 'package' => 'generated_null', 'scope' => 'generated_null', 'before' => 'generated_null', 'after' => 'generated_null', 'last' => 13, 'sort' => 'generated_null', 'direction' => 'generated_null', 'first' => 13, 'per_page' => 13));
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
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH, array('org' => 'generated_null', 'state' => 'generated_null', 'severity' => 'generated_null', 'ecosystem' => 'generated_null', 'package' => 'generated_null', 'scope' => 'generated_null', 'before' => 'generated_null', 'after' => 'generated_null', 'last' => 13, 'sort' => 'generated_null', 'direction' => 'generated_null', 'first' => 13, 'per_page' => 13));
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
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH, array('org' => 'generated_null', 'state' => 'generated_null', 'severity' => 'generated_null', 'ecosystem' => 'generated_null', 'package' => 'generated_null', 'scope' => 'generated_null', 'before' => 'generated_null', 'after' => 'generated_null', 'last' => 13, 'sort' => 'generated_null', 'direction' => 'generated_null', 'first' => 13, 'per_page' => 13));
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
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH, array('org' => 'generated_null', 'state' => 'generated_null', 'severity' => 'generated_null', 'ecosystem' => 'generated_null', 'package' => 'generated_null', 'scope' => 'generated_null', 'before' => 'generated_null', 'after' => 'generated_null', 'last' => 13, 'sort' => 'generated_null', 'direction' => 'generated_null', 'first' => 13, 'per_page' => 13));
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
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH, array('org' => 'generated_null', 'state' => 'generated_null', 'severity' => 'generated_null', 'ecosystem' => 'generated_null', 'package' => 'generated_null', 'scope' => 'generated_null', 'before' => 'generated_null', 'after' => 'generated_null', 'last' => 13, 'sort' => 'generated_null', 'direction' => 'generated_null', 'first' => 13, 'per_page' => 13));
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
        $browser->request('GET', '/orgs/generated_null/dependabot/alerts?state=generated_null&severity=generated_null&ecosystem=generated_null&package=generated_null&scope=generated_null&before=generated_null&after=generated_null&last=13&sort=generated_null&direction=generated_null&first=13&per_page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Dependabot\ListAlertsForOrg::OPERATION_MATCH, array('org' => 'generated_null', 'state' => 'generated_null', 'severity' => 'generated_null', 'ecosystem' => 'generated_null', 'package' => 'generated_null', 'scope' => 'generated_null', 'before' => 'generated_null', 'after' => 'generated_null', 'last' => 13, 'sort' => 'generated_null', 'direction' => 'generated_null', 'first' => 13, 'per_page' => 13));
    }
}
