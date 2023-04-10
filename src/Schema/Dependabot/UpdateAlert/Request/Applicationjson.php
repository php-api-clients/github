<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Dependabot\UpdateAlert\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["dismissed","open"],"type":"string","description":"The state of the Dependabot alert.\\nA `dismissed_reason` must be provided when setting the state to `dismissed`."},"dismissed_reason":{"enum":["fix_started","inaccurate","no_bandwidth","not_used","tolerable_risk"],"type":"string","description":"**Required when `state` is `dismissed`.** A reason for dismissing the alert."},"dismissed_comment":{"maxLength":280,"type":"string","description":"An optional comment associated with dismissing the alert."}},"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"dismissed","dismissed_reason":"fix_started","dismissed_comment":"generated_dismissed_comment_null"}';
    /**
    * state: The state of the Dependabot alert.
    A `dismissed_reason` must be provided when setting the state to `dismissed`.
    * dismissedReason: **Required when `state` is `dismissed`.** A reason for dismissing the alert.
    * dismissedComment: An optional comment associated with dismissing the alert.
    */
    public function __construct(public string $state, #[\EventSauce\ObjectHydrator\MapFrom('dismissed_reason')] public ?string $dismissedReason, #[\EventSauce\ObjectHydrator\MapFrom('dismissed_comment')] public ?string $dismissedComment)
    {
    }
}
