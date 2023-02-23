<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson;

final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","labels"],"type":"object","properties":{"total_count":{"type":"integer"},"labels":{"type":"array","items":{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $total_count;
    public ?array $labels;
    public function __construct(int $total_count, array $labels)
    {
        $this->total_count = $total_count;
        $this->labels = $labels;
    }
}
