<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","labels"],"type":"object","properties":{"total_count":{"type":"integer"},"labels":{"type":"array","items":{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"labels":[{"id":13,"name":"generated_name_null","type":"read-only"}]}';
    /**
     * @param array<\ApiClients\Client\GitHub\Schema\RunnerLabel> $labels
     */
    public function __construct(public int $total_count, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\RunnerLabel::class)] public array $labels)
    {
    }
}
