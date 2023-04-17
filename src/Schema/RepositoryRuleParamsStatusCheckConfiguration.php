<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleParamsStatusCheckConfiguration
{
    public const SCHEMA_JSON         = '{"title":"StatusCheckConfiguration","required":["context"],"type":"object","properties":{"context":{"type":"string","description":"The status check context name that must be present on the commit."},"integration_id":{"type":"integer","description":"The optional integration ID that this status check must originate from."}},"description":"Required status check"}';
    public const SCHEMA_TITLE        = 'StatusCheckConfiguration';
    public const SCHEMA_DESCRIPTION  = 'Required status check';
    public const SCHEMA_EXAMPLE_DATA = '{"context":"generated_context_null","integration_id":13}';

    /**
     * context: The status check context name that must be present on the commit.
     * integrationId: The optional integration ID that this status check must originate from.
     */
    public function __construct(public string $context, #[MapFrom('integration_id')] public ?int $integrationId)
    {
    }
}
