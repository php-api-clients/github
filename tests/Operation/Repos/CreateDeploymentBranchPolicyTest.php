<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Async\await;
use function React\Promise\resolve;

final class CreateDeploymentBranchPolicyTest extends AsyncTestCase
{
    /** @test */
    public function call_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\DeploymentBranchPolicy::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/environments/generated/deployment-branch-policies', Argument::type('array'), Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Repos\CreateDeploymentBranchPolicy::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']            = 'generated';
            $data['repo']             = 'generated';
            $data['environment_name'] = 'generated';

            return $data;
        })(json_decode(Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_200_requestContentType_application_json_responseContentType_application_json_zero(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\DeploymentBranchPolicy::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/environments/generated/deployment-branch-policies', Argument::type('array'), Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->repos()->createDeploymentBranchPolicy('generated', 'generated', 'generated', json_decode(Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function call_httpCode_404_requestContentType_application_json_empty(): void
    {
        $response = new Response(404, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/environments/generated/deployment-branch-policies', Argument::type('array'), Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Repos\CreateDeploymentBranchPolicy::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']            = 'generated';
            $data['repo']             = 'generated';
            $data['environment_name'] = 'generated';

            return $data;
        })(json_decode(Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_404_requestContentType_application_json_empty(): void
    {
        $response = new Response(404, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/environments/generated/deployment-branch-policies', Argument::type('array'), Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->repos()->createDeploymentBranchPolicy('generated', 'generated', 'generated', json_decode(Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA, true)));
        self::assertArrayHasKey('code', $result);
        self::assertSame(404, $result['code']);
    }

    /** @test */
    public function call_httpCode_303_requestContentType_application_json_empty(): void
    {
        $response = new Response(303, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/environments/generated/deployment-branch-policies', Argument::type('array'), Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = $client->call(Operation\Repos\CreateDeploymentBranchPolicy::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']            = 'generated';
            $data['repo']             = 'generated';
            $data['environment_name'] = 'generated';

            return $data;
        })(json_decode(Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA, true)));
    }

    /** @test */
    public function operations_httpCode_303_requestContentType_application_json_empty(): void
    {
        $response = new Response(303, []);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('POST', '/repos/generated/generated/environments/generated/deployment-branch-policies', Argument::type('array'), Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $result = await($client->operations()->repos()->createDeploymentBranchPolicy('generated', 'generated', 'generated', json_decode(Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA, true)));
        self::assertArrayHasKey('code', $result);
        self::assertSame(303, $result['code']);
    }
}
