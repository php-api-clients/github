<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookCheckRunRequestedAction;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class RequestedAction
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"identifier":{"type":"string","description":"The integrator reference of the action requested by the user."}},"description":"The action requested by the user."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The action requested by the user.';
    public const SCHEMA_EXAMPLE_DATA = '{"identifier":"generated_identifier"}';
    /**
     * identifier: The integrator reference of the action requested by the user.
     */
    public function __construct(public ?string $identifier)
    {
    }
}
