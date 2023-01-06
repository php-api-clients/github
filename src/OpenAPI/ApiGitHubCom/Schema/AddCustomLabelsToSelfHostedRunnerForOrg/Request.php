<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddCustomLabelsToSelfHostedRunnerForOrg;

final class Request
{
    public const SCHEMA_JSON = '{"required":["labels"],"type":"object","properties":{"labels":{"maxItems":100,"minItems":1,"type":"array","items":{"type":"string"},"description":"The names of the custom labels to add to the runner."}}}';
    public const SCHEMA_TITLE = 'AddCustomLabelsToSelfHostedRunnerForOrg\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The names of the custom labels to add to the runner.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Labels>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Labels::class)
     */
    private array $labels = array();
    /**
     * The names of the custom labels to add to the runner.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Labels>
     */
    public function labels() : array
    {
        return $this->labels;
    }
}
