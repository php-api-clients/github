<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookOrganizationRenamed;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookOrganizationRenamed\Changes\Login;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"login":{"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Login $login;

    public function __construct(Login $login)
    {
        $this->login = $login;
    }
}
