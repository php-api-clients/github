<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Orgs\ReviewPatGrantRequestsInBulk\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Applicationjson
{
    public const SCHEMA_JSON         = '{"required":["action"],"type":"object","properties":{"pat_request_ids":{"maxItems":100,"minItems":1,"type":"array","items":{"type":"integer"},"description":"Unique identifiers of the requests for access via fine-grained personal access token. Must be formed of between 1 and 100 `pat_request_id` values."},"action":{"enum":["approve","deny"],"type":"string","description":"Action to apply to the requests."},"reason":{"maxLength":1024,"type":["string","null"],"description":"Reason for approving or denying the requests. Max 1024 characters."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"pat_request_ids":[13],"action":"approve","reason":"generated_reason_null"}';

    /**
     * patRequestIds: Unique identifiers of the requests for access via fine-grained personal access token. Must be formed of between 1 and 100 `pat_request_id` values.
     *
     * @param ?array<int> $patRequestIds
     * action: Action to apply to the requests.
     * reason: Reason for approving or denying the requests. Max 1024 characters.
     */
    public function __construct(#[MapFrom('pat_request_ids')] public ?array $patRequestIds, public string $action, public ?string $reason)
    {
    }
}
