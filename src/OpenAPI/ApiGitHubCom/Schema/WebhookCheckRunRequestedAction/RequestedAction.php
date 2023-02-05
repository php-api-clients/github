<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckRunRequestedAction;

final class RequestedAction
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"identifier":{"type":"string","description":"The integrator reference of the action requested by the user."}},"description":"The action requested by the user."}';
    public const SCHEMA_TITLE = 'WebhookCheckRunRequestedAction\\RequestedAction';
    public const SCHEMA_DESCRIPTION = 'The action requested by the user.';
    /**
     * The integrator reference of the action requested by the user.
     */
    public readonly string $identifier;
    public function __construct(string $identifier)
    {
        $this->identifier = $identifier;
    }
}
