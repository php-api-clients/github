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
     */
    public readonly array $selected_repository_ids;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat> $selected_repository_ids
     */
    public function __construct(array $selected_repository_ids)
    {
        $this->selected_repository_ids = $selected_repository_ids;
    }
}
