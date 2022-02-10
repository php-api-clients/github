<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AdvancedSecurityActiveCommitters
{
    public const SCHEMA_TITLE = 'advanced-security-active-committers';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $total_advanced_security_committers = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommittersRepository>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommittersRepository::class)
     */
    private array $repositories = array();
    public function total_advanced_security_committers() : ?int
    {
        return $this->total_advanced_security_committers;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AdvancedSecurityActiveCommittersRepository>
     */
    public function repositories() : array
    {
        return $this->repositories;
    }
}
