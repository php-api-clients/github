<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredStatusChecks;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Checks
{
    public const SCHEMA_JSON         = '{"required":["context"],"type":"object","properties":{"context":{"type":"string","description":"The name of the required check"},"app_id":{"type":"integer","description":"The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"context":"generated","app_id":6}';

    /**
     * context: The name of the required check
     * appId: The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status.
     */
    public function __construct(public string $context, #[MapFrom('app_id')] public ?int $appId)
    {
    }
}
