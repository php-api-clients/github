<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListDeploymentBranchPolicies\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","branch_policies"],"type":"object","properties":{"total_count":{"type":"integer","description":"The number of deployment branch policies for the environment.","examples":[2]},"branch_policies":{"type":"array","items":{"title":"Deployment branch policy","type":"object","properties":{"id":{"type":"integer","description":"The unique identifier of the branch policy.","examples":[361471]},"node_id":{"type":"string","examples":["MDE2OkdhdGVCcmFuY2hQb2xpY3kzNjE0NzE="]},"name":{"type":"string","description":"The name pattern that branches must match in order to deploy to the environment.","examples":["release\\/*"]}},"description":"Details of a deployment branch policy."}}}}';
    public const SCHEMA_TITLE = 'ListDeploymentBranchPolicies\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The number of deployment branch policies for the environment.
     */
    private int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy::class)
     */
    private array $branch_policies = array();
    /**
     * The number of deployment branch policies for the environment.
     */
    public function total_count() : int
    {
        return $this->total_count;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicy>
     */
    public function branch_policies() : array
    {
        return $this->branch_policies;
    }
}
