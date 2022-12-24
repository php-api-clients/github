<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CF16C731B303279F97D0Ccd5E2Dd1C4B9
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"admin_enforced":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_actor_names":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"authorized_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"authorized_dismissal_actors_only":{"required":["from"],"type":"object","properties":{"from":{"type":["boolean","null"]}}},"linear_history_requirement_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}},"required_status_checks":{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}},"required_status_checks_enforcement_level":{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}},"description":"If the action was `edited`, the changes to the rule."}';
    public const SCHEMA_TITLE = 'c_f16c731b303279f97d0ccd5e2dd1c4b9';
    public const SCHEMA_DESCRIPTION = 'If the action was `edited`, the changes to the rule.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF72F794E2732Dfb673Ccb569295F5040::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF72F794E2732Dfb673Ccb569295F5040 $admin_enforced;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6229Afd364100D1F8D5C869C17A05C57::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6229Afd364100D1F8D5C869C17A05C57 $authorized_actor_names;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF72F794E2732Dfb673Ccb569295F5040::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF72F794E2732Dfb673Ccb569295F5040 $authorized_actors_only;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF72F794E2732Dfb673Ccb569295F5040::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF72F794E2732Dfb673Ccb569295F5040 $authorized_dismissal_actors_only;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Eb176F6A0Beaf772D79F2Ae70A0066C::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Eb176F6A0Beaf772D79F2Ae70A0066C $linear_history_requirement_enforcement_level;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6229Afd364100D1F8D5C869C17A05C57::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6229Afd364100D1F8D5C869C17A05C57 $required_status_checks;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Eb176F6A0Beaf772D79F2Ae70A0066C::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Eb176F6A0Beaf772D79F2Ae70A0066C $required_status_checks_enforcement_level;
    public function admin_enforced() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF72F794E2732Dfb673Ccb569295F5040
    {
        return $this->admin_enforced;
    }
    public function authorized_actor_names() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6229Afd364100D1F8D5C869C17A05C57
    {
        return $this->authorized_actor_names;
    }
    public function authorized_actors_only() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF72F794E2732Dfb673Ccb569295F5040
    {
        return $this->authorized_actors_only;
    }
    public function authorized_dismissal_actors_only() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CF72F794E2732Dfb673Ccb569295F5040
    {
        return $this->authorized_dismissal_actors_only;
    }
    public function linear_history_requirement_enforcement_level() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Eb176F6A0Beaf772D79F2Ae70A0066C
    {
        return $this->linear_history_requirement_enforcement_level;
    }
    public function required_status_checks() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6229Afd364100D1F8D5C869C17A05C57
    {
        return $this->required_status_checks;
    }
    public function required_status_checks_enforcement_level() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Eb176F6A0Beaf772D79F2Ae70A0066C
    {
        return $this->required_status_checks_enforcement_level;
    }
}
