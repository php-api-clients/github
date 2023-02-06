<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListDeploymentBranchPolicies\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","branch_policies"],"type":"object","properties":{"total_count":{"type":"integer","description":"The number of deployment branch policies for the environment.","examples":[2]},"branch_policies":{"type":"array","items":{"title":"Deployment branch policy","type":"object","properties":{"id":{"type":"integer","description":"The unique identifier of the branch policy.","examples":[361471]},"node_id":{"type":"string","examples":["MDE2OkdhdGVCcmFuY2hQb2xpY3kzNjE0NzE="]},"name":{"type":"string","description":"The name pattern that branches must match in order to deploy to the environment.","examples":["release\\/*"]}},"description":"Details of a deployment branch policy."}}}}';
    public const SCHEMA_EXAMPLE = '{"total_count":2,"branch_policies":[{"id":361471,"node_id":"MDE2OkdhdGVCcmFuY2hQb2xpY3kzNjE0NzE=","name":"release\\/*"}]}';
    public const SCHEMA_TITLE = 'Operation\\ListDeploymentBranchPolicies\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The number of deployment branch policies for the environment.
     */
    public readonly int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy>
     */
    public readonly array $branch_policies;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy> $branch_policies
     */
    public function __construct(int $total_count, array $branch_policies)
    {
        $this->total_count = $total_count;
        $this->branch_policies = $branch_policies;
    }
}
