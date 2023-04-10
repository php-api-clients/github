<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookCheckRunRequestedAction;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class RequestedAction
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"identifier":{"type":"string","description":"The integrator reference of the action requested by the user."}},"description":"The action requested by the user."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The action requested by the user.';
    public const SCHEMA_EXAMPLE_DATA = '{"identifier":"generated_identifier_null"}';
    /**
     * identifier: The integrator reference of the action requested by the user.
     */
    public function __construct(public ?string $identifier)
    {
    }
}
