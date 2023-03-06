<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Dependabot\UpdateAlert\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["dismissed","open"],"type":"string","description":"The state of the Dependabot alert.\\nA `dismissed_reason` must be provided when setting the state to `dismissed`."},"dismissed_reason":{"enum":["fix_started","inaccurate","no_bandwidth","not_used","tolerable_risk"],"type":"string","description":"**Required when `state` is `dismissed`.** A reason for dismissing the alert."},"dismissed_comment":{"maxLength":280,"type":"string","description":"An optional comment associated with dismissing the alert."}},"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"generated_state","dismissed_reason":"generated_dismissed_reason","dismissed_comment":"generated_dismissed_comment"}';
    /**
    * state: The state of the Dependabot alert.
    A `dismissed_reason` must be provided when setting the state to `dismissed`.
    * dismissed_reason: **Required when `state` is `dismissed`.** A reason for dismissing the alert.
    * dismissed_comment: An optional comment associated with dismissing the alert.
    */
    public function __construct(public ?string $state, public string $dismissed_reason, public string $dismissed_comment)
    {
    }
}
