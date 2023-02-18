<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckRunRequestedAction;

final readonly class RequestedAction
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"identifier":{"type":"string","description":"The integrator reference of the action requested by the user."}},"description":"The action requested by the user."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The action requested by the user.';
    /**
     * The integrator reference of the action requested by the user.
     */
    public ?string $identifier;

    public function __construct(string $identifier)
    {
        $this->identifier = $identifier;
    }
}
