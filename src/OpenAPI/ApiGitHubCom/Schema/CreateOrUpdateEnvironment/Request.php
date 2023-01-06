<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateOrUpdateEnvironment;

final class Request
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"wait_timer":{"type":"integer","description":"The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).","examples":[30]},"reviewers":{"type":["array","null"],"items":{"type":"object","properties":{"type":{"enum":["User","Team"],"type":"string","description":"The type of reviewer.","examples":["User"]},"id":{"type":"integer","description":"The id of the user or team who can review the deployment","examples":[4532992]}}},"description":"The people or teams that may review jobs that reference the environment. You can list up to six users or teams as reviewers. The reviewers must have at least read access to the repository. Only one of the required reviewers needs to approve the job for it to proceed."},"deployment_branch_policy":{"required":["protected_branches","custom_branch_policies"],"type":["object","null"],"properties":{"protected_branches":{"type":"boolean","description":"Whether only branches with branch protection rules can deploy to this environment. If `protected_branches` is `true`, `custom_branch_policies` must be `false`; if `protected_branches` is `false`, `custom_branch_policies` must be `true`."},"custom_branch_policies":{"type":"boolean","description":"Whether only branches that match the specified name patterns can deploy to this environment.  If `custom_branch_policies` is `true`, `protected_branches` must be `false`; if `custom_branch_policies` is `false`, `protected_branches` must be `true`."}},"description":"The type of deployment branch policy for this environment. To allow all branches to deploy, set to `null`."}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'CreateOrUpdateEnvironment\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).
     */
    private int $wait_timer;
    /**
     * The people or teams that may review jobs that reference the environment. You can list up to six users or teams as reviewers. The reviewers must have at least read access to the repository. Only one of the required reviewers needs to approve the job for it to proceed.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Reviewers>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Reviewers::class)
     */
    private array $reviewers = array();
    /**
     * The type of deployment branch policy for this environment. To allow all branches to deploy, set to `null`.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicySettings::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicySettings $deployment_branch_policy;
    /**
     * The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).
     */
    public function wait_timer() : int
    {
        return $this->wait_timer;
    }
    /**
     * The people or teams that may review jobs that reference the environment. You can list up to six users or teams as reviewers. The reviewers must have at least read access to the repository. Only one of the required reviewers needs to approve the job for it to proceed.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Reviewers>
     */
    public function reviewers() : array
    {
        return $this->reviewers;
    }
    /**
     * The type of deployment branch policy for this environment. To allow all branches to deploy, set to `null`.
     */
    public function deployment_branch_policy() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentBranchPolicySettings
    {
        return $this->deployment_branch_policy;
    }
}
