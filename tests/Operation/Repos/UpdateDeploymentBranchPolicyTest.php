<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Client;
use ApiClients\Client\GitHub\Operation\Repos\UpdateDeploymentBranchPolicy;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Prophecy\Argument;
use React\Http\Browser;
use React\Http\Message\Response;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

use function json_decode;
use function React\Promise\resolve;

final class UpdateDeploymentBranchPolicyTest extends AsyncTestCase
{
    /**
     * @test
     */
    public function httpCode_200_requestContentType_application_json_responseContentType_application_json(): void
    {
        $response = new Response(200, ['Content-Type' => 'application/json'], Schema\DeploymentBranchPolicy::SCHEMA_EXAMPLE_DATA);
        $auth     = $this->prophesize(AuthenticationInterface::class);
        $auth->authHeader(Argument::any())->willReturn('Bearer beer')->shouldBeCalled();
        $browser = $this->prophesize(Browser::class);
        $browser->withBase(Argument::any())->willReturn($browser->reveal());
        $browser->withFollowRedirects(Argument::any())->willReturn($browser->reveal());
        $browser->request('PUT', '/repos/generated_null/generated_null/environments/generated_null/deployment-branch-policies/13', Argument::type('array'), Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA)->willReturn(resolve($response))->shouldBeCalled();
        $client = new Client($auth->reveal(), $browser->reveal());
        $client->call(UpdateDeploymentBranchPolicy::OPERATION_MATCH, (static function (array $data): array {
            $data['owner']            = 'generated_null';
            $data['repo']             = 'generated_null';
            $data['environment_name'] = 'generated_null';
            $data['branch_policy_id'] = 13;

            return $data;
        })(json_decode(Schema\DeploymentBranchPolicyNamePattern::SCHEMA_EXAMPLE_DATA, true)));
    }
}
