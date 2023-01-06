<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddCustomLabelsToSelfHostedRunnerForOrg\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","labels"],"type":"object","properties":{"total_count":{"type":"integer"},"labels":{"type":"array","items":{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}}}}';
    public const SCHEMA_TITLE = 'AddCustomLabelsToSelfHostedRunnerForOrg\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerLabel>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerLabel::class)
     */
    private array $labels = array();
    public function total_count() : int
    {
        return $this->total_count;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerLabel>
     */
    public function labels() : array
    {
        return $this->labels;
    }
}
