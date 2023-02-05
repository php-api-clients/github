<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookBranchProtectionRuleEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"admin_enforced":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_actor_names":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"authorized_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_dismissal_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"linear_history_requirement_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}},"required_status_checks":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"required_status_checks_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}},"description":"If the action was `edited`, the changes to the rule."}';
    public const SCHEMA_TITLE = 'WebhookBranchProtectionRuleEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'If the action was `edited`, the changes to the rule.';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\AdminEnforced $admin_enforced;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\AuthorizedActorNames $authorized_actor_names;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\AuthorizedActorsOnly $authorized_actors_only;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\AuthorizedDismissalActorsOnly $authorized_dismissal_actors_only;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\LinearHistoryRequirementEnforcementLevel $linear_history_requirement_enforcement_level;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\RequiredStatusChecks $required_status_checks;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\RequiredStatusChecksEnforcementLevel $required_status_checks_enforcement_level;
    public function __construct(object $admin_enforced, object $authorized_actor_names, object $authorized_actors_only, object $authorized_dismissal_actors_only, object $linear_history_requirement_enforcement_level, object $required_status_checks, object $required_status_checks_enforcement_level)
    {
        $this->admin_enforced = $admin_enforced;
        $this->authorized_actor_names = $authorized_actor_names;
        $this->authorized_actors_only = $authorized_actors_only;
        $this->authorized_dismissal_actors_only = $authorized_dismissal_actors_only;
        $this->linear_history_requirement_enforcement_level = $linear_history_requirement_enforcement_level;
        $this->required_status_checks = $required_status_checks;
        $this->required_status_checks_enforcement_level = $required_status_checks_enforcement_level;
    }
}
