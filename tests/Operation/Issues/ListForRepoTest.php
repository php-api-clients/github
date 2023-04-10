<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\Github\Operation\Issues;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class ListForRepoTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t200td1f5a9d446c6cec2cf63545e8163e585()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\Issue::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/issues?milestone=generated_null&assignee=generated_null&creator=generated_null&mentioned=generated_null&labels=generated_null&since=1970-01-01T00:00:00+00:00&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Issues\ListForRepo::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'milestone' => 'generated_null', 'assignee' => 'generated_null', 'creator' => 'generated_null', 'mentioned' => 'generated_null', 'labels' => 'generated_null', 'since' => '1970-01-01T00:00:00+00:00', 'state' => 'generated_null', 'sort' => 'generated_null', 'direction' => 'generated_null', 'per_page' => 13, 'page' => 13));
    }
    /**
     * @test
     */
    public function t301td1f5a9d446c6cec2cf63545e8163e585()
    {
        $response = new \React\Http\Message\Response(301, array('Content-Type' => 'application/json'), Schema\BasicError::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/repos/generated_null/generated_null/issues?milestone=generated_null&assignee=generated_null&creator=generated_null&mentioned=generated_null&labels=generated_null&since=1970-01-01T00:00:00+00:00&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Issues\ListForRepo::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'milestone' => 'generated_null', 'assignee' => 'generated_null', 'creator' => 'generated_null', 'mentioned' => 'generated_null', 'labels' => 'generated_null', 'since' => '1970-01-01T00:00:00+00:00', 'state' => 'generated_null', 'sort' => 'generated_null', 'direction' => 'generated_null', 'per_page' => 13, 'page' => 13));
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
        $browser->request('GET', '/repos/generated_null/generated_null/issues?milestone=generated_null&assignee=generated_null&creator=generated_null&mentioned=generated_null&labels=generated_null&since=1970-01-01T00:00:00+00:00&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Issues\ListForRepo::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'milestone' => 'generated_null', 'assignee' => 'generated_null', 'creator' => 'generated_null', 'mentioned' => 'generated_null', 'labels' => 'generated_null', 'since' => '1970-01-01T00:00:00+00:00', 'state' => 'generated_null', 'sort' => 'generated_null', 'direction' => 'generated_null', 'per_page' => 13, 'page' => 13));
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
        $browser->request('GET', '/repos/generated_null/generated_null/issues?milestone=generated_null&assignee=generated_null&creator=generated_null&mentioned=generated_null&labels=generated_null&since=1970-01-01T00:00:00+00:00&state=generated_null&sort=generated_null&direction=generated_null&per_page=13&page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\Github\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\Github\Operation\Issues\ListForRepo::OPERATION_MATCH, array('owner' => 'generated_null', 'repo' => 'generated_null', 'milestone' => 'generated_null', 'assignee' => 'generated_null', 'creator' => 'generated_null', 'mentioned' => 'generated_null', 'labels' => 'generated_null', 'since' => '1970-01-01T00:00:00+00:00', 'state' => 'generated_null', 'sort' => 'generated_null', 'direction' => 'generated_null', 'per_page' => 13, 'page' => 13));
    }
}
