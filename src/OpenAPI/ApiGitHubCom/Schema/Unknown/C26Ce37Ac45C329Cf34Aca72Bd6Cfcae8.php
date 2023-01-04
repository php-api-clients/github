<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C26Ce37Ac45C329Cf34Aca72Bd6Cfcae8
{
    public const SCHEMA_JSON = '{"required":["labels"],"type":"object","properties":{"labels":{"maxItems":100,"minItems":0,"type":"array","items":{"type":"string"},"description":"The names of the custom labels to set for the runner. You can pass an empty array to remove all custom labels."}}}';
    public const SCHEMA_TITLE = 'c_26ce37ac45c329cf34aca72bd6cfcae8';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The names of the custom labels to set for the runner. You can pass an empty array to remove all custom labels.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C26Ce37Ac45C329Cf34Aca72Bd6Cfcae8\Labels>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C26Ce37Ac45C329Cf34Aca72Bd6Cfcae8\Labels::class)
     */
    private array $labels = array();
    /**
     * The names of the custom labels to set for the runner. You can pass an empty array to remove all custom labels.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C26Ce37Ac45C329Cf34Aca72Bd6Cfcae8\Labels>
     */
    public function labels() : array
    {
        return $this->labels;
    }
}
