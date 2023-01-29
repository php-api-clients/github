<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListSelfHostedRunnersForOrg\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","runners"],"type":"object","properties":{"total_count":{"type":"integer"},"runners":{"type":"array","items":{"title":"Self hosted runners","required":["id","name","os","status","busy","labels"],"type":"object","properties":{"id":{"type":"integer","description":"The id of the runner.","examples":[5]},"name":{"type":"string","description":"The name of the runner.","examples":["iMac"]},"os":{"type":"string","description":"The Operating System of the runner.","examples":["macos"]},"status":{"type":"string","description":"The status of the runner.","examples":["online"]},"busy":{"type":"boolean"},"labels":{"type":"array","items":{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}}},"description":"A self hosted runner"}}}}';
    public const SCHEMA_TITLE = 'Operation\\ListSelfHostedRunnersForOrg\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner>
     */
    public readonly array $runners;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Runner> $runners
     */
    public function __construct(int $total_count, array $runners)
    {
        $this->total_count = $total_count;
        $this->runners = $runners;
    }
}
