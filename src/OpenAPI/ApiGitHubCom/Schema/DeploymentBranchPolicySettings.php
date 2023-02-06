<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DeploymentBranchPolicySettings
{
    public const SCHEMA_JSON = '{"required":["protected_branches","custom_branch_policies"],"type":["object","null"],"properties":{"protected_branches":{"type":"boolean","description":"Whether only branches with branch protection rules can deploy to this environment. If `protected_branches` is `true`, `custom_branch_policies` must be `false`; if `protected_branches` is `false`, `custom_branch_policies` must be `true`."},"custom_branch_policies":{"type":"boolean","description":"Whether only branches that match the specified name patterns can deploy to this environment.  If `custom_branch_policies` is `true`, `protected_branches` must be `false`; if `custom_branch_policies` is `false`, `protected_branches` must be `true`."}},"description":"The type of deployment branch policy for this environment. To allow all branches to deploy, set to `null`."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'deployment-branch-policy-settings';
    public const SCHEMA_DESCRIPTION = 'The type of deployment branch policy for this environment. To allow all branches to deploy, set to `null`.';
    /**
     * Whether only branches with branch protection rules can deploy to this environment. If `protected_branches` is `true`, `custom_branch_policies` must be `false`; if `protected_branches` is `false`, `custom_branch_policies` must be `true`.
     */
    public readonly bool $protected_branches;
    /**
     * Whether only branches that match the specified name patterns can deploy to this environment.  If `custom_branch_policies` is `true`, `protected_branches` must be `false`; if `custom_branch_policies` is `false`, `protected_branches` must be `true`.
     */
    public readonly bool $custom_branch_policies;
    public function __construct(bool $protected_branches, bool $custom_branch_policies)
    {
        $this->protected_branches = $protected_branches;
        $this->custom_branch_policies = $custom_branch_policies;
    }
}
