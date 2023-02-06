<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetCustomLabelsForSelfHostedRunnerForRepo\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["labels"],"type":"object","properties":{"labels":{"maxItems":100,"minItems":0,"type":"array","items":{"type":"string"},"description":"The names of the custom labels to set for the runner. You can pass an empty array to remove all custom labels."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'SetCustomLabelsForSelfHostedRunnerForRepo\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The names of the custom labels to set for the runner. You can pass an empty array to remove all custom labels.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Labels>
     */
    public readonly array $labels;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Labels> $labels
     */
    public function __construct(array $labels)
    {
        $this->labels = $labels;
    }
}
