<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookCheckRunRequestedAction;

final class RequestedAction
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"identifier":{"type":"string","description":"The integrator reference of the action requested by the user."}},"description":"The action requested by the user."}';
    public const SCHEMA_TITLE = 'WebhookCheckRunRequestedAction\\RequestedAction';
    public const SCHEMA_DESCRIPTION = 'The action requested by the user.';
    /**
     * The integrator reference of the action requested by the user.
     */
    private string $identifier;
    /**
     * The integrator reference of the action requested by the user.
     */
    public function identifier() : string
    {
        return $this->identifier;
    }
}
