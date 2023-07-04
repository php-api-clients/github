<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookOrganizationRenamed\Changes;

final readonly class Login
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"from":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated"}';

    public function __construct(public string|null $from)
    {
    }
}
