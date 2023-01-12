<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetSelectedReposForOrgVariable\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer"},"description":"The IDs of the repositories that can access the organization variable."}}}';
    public const SCHEMA_TITLE = 'SetSelectedReposForOrgVariable\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The IDs of the repositories that can access the organization variable.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat::class)
     */
    private array $selected_repository_ids = array();
    /**
     * The IDs of the repositories that can access the organization variable.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
}
