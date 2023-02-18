<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookOrganizationRenamed\Changes;

final readonly class Login
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"from":{"type":"string"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $from;

    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
