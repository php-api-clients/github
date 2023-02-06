<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListLabelsForSelfHostedRunnerForRepo\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","labels"],"type":"object","properties":{"total_count":{"type":"integer"},"labels":{"type":"array","items":{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Operation\\ListLabelsForSelfHostedRunnerForRepo\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerLabel>
     */
    public readonly array $labels;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RunnerLabel> $labels
     */
    public function __construct(int $total_count, array $labels)
    {
        $this->total_count = $total_count;
        $this->labels = $labels;
    }
}
