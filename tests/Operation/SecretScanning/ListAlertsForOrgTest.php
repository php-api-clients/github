<?php

declare (strict_types=1);
namespace ApiClients\Tests\Client\GitHub\Operation\SecretScanning;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListAlertsForOrgTest extends \WyriHaximus\AsyncTestUtilities\AsyncTestCase
{
    /**
     * @test
     */
    public function t200td1f5a9d446c6cec2cf63545e8163e585()
    {
        $response = new \React\Http\Message\Response(200, array('Content-Type' => 'application/json'), '[' . (Schema\OrganizationSecretScanningAlert::SCHEMA_EXAMPLE_DATA . ']'));
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/secret-scanning/alerts?state=generated_null&secret_type=generated_null&resolution=generated_null&before=generated_null&after=generated_null&sort=generated_null&direction=generated_null&page=13&per_page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\SecretScanning\ListAlertsForOrg::OPERATION_MATCH, array('org' => 'generated_null', 'state' => 'generated_null', 'secret_type' => 'generated_null', 'resolution' => 'generated_null', 'before' => 'generated_null', 'after' => 'generated_null', 'sort' => 'generated_null', 'direction' => 'generated_null', 'page' => 13, 'per_page' => 13));
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
        $browser->request('GET', '/orgs/generated_null/secret-scanning/alerts?state=generated_null&secret_type=generated_null&resolution=generated_null&before=generated_null&after=generated_null&sort=generated_null&direction=generated_null&page=13&per_page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\SecretScanning\ListAlertsForOrg::OPERATION_MATCH, array('org' => 'generated_null', 'state' => 'generated_null', 'secret_type' => 'generated_null', 'resolution' => 'generated_null', 'before' => 'generated_null', 'after' => 'generated_null', 'sort' => 'generated_null', 'direction' => 'generated_null', 'page' => 13, 'per_page' => 13));
    }
    /**
     * @test
     */
    public function t503td1f5a9d446c6cec2cf63545e8163e585()
    {
        self::expectException(ErrorSchemas\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class);
        $response = new \React\Http\Message\Response(503, array('Content-Type' => 'application/json'), Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::SCHEMA_EXAMPLE_DATA);
        $auth = $this->prophesize(\ApiClients\Contracts\HTTP\Headers\AuthenticationInterface::class);
        $auth->authHeader(\Prophecy\Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(\React\Http\Browser::class);
        $browser->withBase(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(\Prophecy\Argument::any())->willReturn($browser->reveal());
        $browser->request('GET', '/orgs/generated_null/secret-scanning/alerts?state=generated_null&secret_type=generated_null&resolution=generated_null&before=generated_null&after=generated_null&sort=generated_null&direction=generated_null&page=13&per_page=13', \Prophecy\Argument::type('array'), '')->willReturn(\React\Promise\resolve($response))->shouldBeCalled();
        $client = new \ApiClients\Client\GitHub\Client($auth->reveal(), $browser->reveal());
        $client->call(\ApiClients\Client\GitHub\Operation\SecretScanning\ListAlertsForOrg::OPERATION_MATCH, array('org' => 'generated_null', 'state' => 'generated_null', 'secret_type' => 'generated_null', 'resolution' => 'generated_null', 'before' => 'generated_null', 'after' => 'generated_null', 'sort' => 'generated_null', 'direction' => 'generated_null', 'page' => 13, 'per_page' => 13));
    }
}
