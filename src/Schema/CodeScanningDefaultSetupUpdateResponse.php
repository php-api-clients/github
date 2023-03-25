<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CodeScanningDefaultSetupUpdateResponse
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"run_id":{"type":"integer","description":"ID of the corresponding run."},"run_url":{"type":"string","description":"URL of the corresponding run."}},"description":"You can use `run_url` to track the status of the run. This includes a property status and conclusion.\\nYou should not rely on this always being an actions workflow run object."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'You can use `run_url` to track the status of the run. This includes a property status and conclusion.
You should not rely on this always being an actions workflow run object.';
    public const SCHEMA_EXAMPLE_DATA = '{"runId":13,"runUrl":"generated_run_url_null"}';
    /**
     * runId: ID of the corresponding run.
     * runUrl: URL of the corresponding run.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('run_id')] public ?int $runId, #[\EventSauce\ObjectHydrator\MapFrom('run_url')] public ?string $runUrl)
    {
    }
}
