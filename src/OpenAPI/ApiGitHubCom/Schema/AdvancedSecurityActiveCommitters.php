<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AdvancedSecurityActiveCommitters
{
    public const SCHEMA_JSON = '{"required":["repositories"],"type":"object","properties":{"total_advanced_security_committers":{"type":"integer","examples":[25]},"total_count":{"type":"integer","examples":[2]},"repositories":{"type":"array","items":{"required":["name","advanced_security_committers","advanced_security_committers_breakdown"],"type":"object","properties":{"name":{"type":"string","examples":["octocat\\/Hello-World"]},"advanced_security_committers":{"type":"integer","examples":[25]},"advanced_security_committers_breakdown":{"type":"array","items":{"required":["user_login","last_pushed_date"],"type":"object","properties":{"user_login":{"type":"string"},"last_pushed_date":{"type":"string","examples":["2021-11-03"]}}}}}}}}}';
    public const SCHEMA_TITLE = 'advanced-security-active-committers';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $total_advanced_security_committers = null;
    private ?int $total_count = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommittersRepository>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommittersRepository::class)
     */
    private array $repositories = array();
    public function total_advanced_security_committers() : ?int
    {
        return $this->total_advanced_security_committers;
    }
    public function total_count() : ?int
    {
        return $this->total_count;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommittersRepository>
     */
    public function repositories() : array
    {
        return $this->repositories;
    }
}
