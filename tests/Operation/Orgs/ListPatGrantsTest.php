<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\Github\Operation\Orgs;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class ListPatGrantsTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t500td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\BasicError::class);
        $response = new \React\Http\Message\Response(500, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated_null/personal-access-tokens?owner=&repository=generated_null&permission=generated_null&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=13&page=13&sort=generated_null&direction=generated_null', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Orgs\ListPatGrants::OPERATION_MATCH, array('org' => 'generated_null', 'owner' => null, 'repository' => 'generated_null', 'permission' => 'generated_null', 'last_used_before' => '1970-01-01T00:00:00+00:00', 'last_used_after' => '1970-01-01T00:00:00+00:00', 'per_page' => 13, 'page' => 13, 'sort' => 'generated_null', 'direction' => 'generated_null'));
    }
    /**
     * @test
     */
    public function t422td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\ValidationError::class);
        $response = new \React\Http\Message\Response(422, array('Content-Type' => 'application/json'), Schema\ValidationError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated_null/personal-access-tokens?owner=&repository=generated_null&permission=generated_null&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=13&page=13&sort=generated_null&direction=generated_null', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Orgs\ListPatGrants::OPERATION_MATCH, array('org' => 'generated_null', 'owner' => null, 'repository' => 'generated_null', 'permission' => 'generated_null', 'last_used_before' => '1970-01-01T00:00:00+00:00', 'last_used_after' => '1970-01-01T00:00:00+00:00', 'per_page' => 13, 'page' => 13, 'sort' => 'generated_null', 'direction' => 'generated_null'));
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
        $browser->request('GET', '/organizations/generated_null/personal-access-tokens?owner=&repository=generated_null&permission=generated_null&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=13&page=13&sort=generated_null&direction=generated_null', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Orgs\ListPatGrants::OPERATION_MATCH, array('org' => 'generated_null', 'owner' => null, 'repository' => 'generated_null', 'permission' => 'generated_null', 'last_used_before' => '1970-01-01T00:00:00+00:00', 'last_used_after' => '1970-01-01T00:00:00+00:00', 'per_page' => 13, 'page' => 13, 'sort' => 'generated_null', 'direction' => 'generated_null'));
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
        $browser->request('GET', '/organizations/generated_null/personal-access-tokens?owner=&repository=generated_null&permission=generated_null&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=13&page=13&sort=generated_null&direction=generated_null', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Orgs\ListPatGrants::OPERATION_MATCH, array('org' => 'generated_null', 'owner' => null, 'repository' => 'generated_null', 'permission' => 'generated_null', 'last_used_before' => '1970-01-01T00:00:00+00:00', 'last_used_after' => '1970-01-01T00:00:00+00:00', 'per_page' => 13, 'page' => 13, 'sort' => 'generated_null', 'direction' => 'generated_null'));
    }
    /**
     * @test
     */
    public function t200td1f5a9d446c6cec2cf63545e8163e585()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\OrganizationProgrammaticAccessGrant::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/organizations/generated_null/personal-access-tokens?owner=&repository=generated_null&permission=generated_null&last_used_before=1970-01-01T00:00:00+00:00&last_used_after=1970-01-01T00:00:00+00:00&per_page=13&page=13&sort=generated_null&direction=generated_null', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Orgs\ListPatGrants::OPERATION_MATCH, array('org' => 'generated_null', 'owner' => null, 'repository' => 'generated_null', 'permission' => 'generated_null', 'last_used_before' => '1970-01-01T00:00:00+00:00', 'last_used_after' => '1970-01-01T00:00:00+00:00', 'per_page' => 13, 'page' => 13, 'sort' => 'generated_null', 'direction' => 'generated_null'));
    }
}
