<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookBranchProtectionRuleEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"admin_enforced":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_actor_names":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"authorized_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_dismissal_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"linear_history_requirement_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}},"required_status_checks":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"required_status_checks_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}},"description":"If the action was `edited`, the changes to the rule."}';
    public const SCHEMA_TITLE = 'WebhookBranchProtectionRuleEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'If the action was `edited`, the changes to the rule.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\AdminEnforced::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\AdminEnforced $admin_enforced;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\AuthorizedActorNames::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\AuthorizedActorNames $authorized_actor_names;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\AuthorizedActorsOnly::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\AuthorizedActorsOnly $authorized_actors_only;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\AuthorizedDismissalActorsOnly::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\AuthorizedDismissalActorsOnly $authorized_dismissal_actors_only;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\LinearHistoryRequirementEnforcementLevel::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\LinearHistoryRequirementEnforcementLevel $linear_history_requirement_enforcement_level;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\RequiredStatusChecks::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\RequiredStatusChecks $required_status_checks;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\RequiredStatusChecksEnforcementLevel::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\RequiredStatusChecksEnforcementLevel $required_status_checks_enforcement_level;
    public function admin_enforced() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\AdminEnforced
    {
        return $this->admin_enforced;
    }
    public function authorized_actor_names() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\AuthorizedActorNames
    {
        return $this->authorized_actor_names;
    }
    public function authorized_actors_only() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\AuthorizedActorsOnly
    {
        return $this->authorized_actors_only;
    }
    public function authorized_dismissal_actors_only() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\AuthorizedDismissalActorsOnly
    {
        return $this->authorized_dismissal_actors_only;
    }
    public function linear_history_requirement_enforcement_level() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\LinearHistoryRequirementEnforcementLevel
    {
        return $this->linear_history_requirement_enforcement_level;
    }
    public function required_status_checks() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\RequiredStatusChecks
    {
        return $this->required_status_checks;
    }
    public function required_status_checks_enforcement_level() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\RequiredStatusChecksEnforcementLevel
    {
        return $this->required_status_checks_enforcement_level;
    }
}
