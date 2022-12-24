<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AdvancedSecurityActiveCommittersRepository
{
    public const SCHEMA_JSON = '{"required":["name","advanced_security_committers","advanced_security_committers_breakdown"],"type":"object","properties":{"name":{"type":"string","examples":["octocat\\/Hello-World"]},"advanced_security_committers":{"type":"integer","examples":[25]},"advanced_security_committers_breakdown":{"type":"array","items":{"required":["user_login","last_pushed_date"],"type":"object","properties":{"user_login":{"type":"string"},"last_pushed_date":{"type":"string","examples":["2021-11-03"]}}}}}}';
    public const SCHEMA_TITLE = 'advanced-security-active-committers-repository';
    public const SCHEMA_DESCRIPTION = '';
    private string $name;
    private int $advanced_security_committers;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommittersUser>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommittersUser::class)
     */
    private array $advanced_security_committers_breakdown = array();
    public function name() : string
    {
        return $this->name;
    }
    public function advanced_security_committers() : int
    {
        return $this->advanced_security_committers;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommittersUser>
     */
    public function advanced_security_committers_breakdown() : array
    {
        return $this->advanced_security_committers_breakdown;
    }
}
