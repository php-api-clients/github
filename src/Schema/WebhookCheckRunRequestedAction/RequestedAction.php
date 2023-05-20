<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookCheckRunRequestedAction;

final readonly class RequestedAction
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"identifier":{"type":"string","description":"The integrator reference of the action requested by the user."}},"description":"The action requested by the user."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The action requested by the user.';
    public const SCHEMA_EXAMPLE_DATA = '{"identifier":"generated"}';

    /**
     * identifier: The integrator reference of the action requested by the user.
     */
    public function __construct(public ?string $identifier)
    {
    }
}
