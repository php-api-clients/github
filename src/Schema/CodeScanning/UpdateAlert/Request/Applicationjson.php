<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CodeScanning\UpdateAlert\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["open","dismissed"],"type":"string","description":"Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`."},"dismissed_reason":{"enum":[null,"false positive","won\'t fix","used in tests"],"type":["string","null"],"description":"**Required when the state is dismissed.** The reason for dismissing or closing the alert."},"dismissed_comment":{"maxLength":280,"type":["string","null"],"description":"The dismissal comment associated with the dismissal of the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"open","dismissed_reason":"generated_dismissed_reason_null","dismissed_comment":"generated_dismissed_comment_null"}';
    /**
     * state: Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`.
     * dismissedReason: **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     * dismissedComment: The dismissal comment associated with the dismissal of the alert.
     */
    public function __construct(public string $state, #[\EventSauce\ObjectHydrator\MapFrom('dismissed_reason')] public ?string $dismissedReason, #[\EventSauce\ObjectHydrator\MapFrom('dismissed_comment')] public ?string $dismissedComment)
    {
    }
}
