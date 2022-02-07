<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AdvancedSecurityActiveCommittersRepository
{
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
