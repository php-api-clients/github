<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMemberAdded\Changes;

final readonly class Permission
{
    public const SCHEMA_JSON        = '{"required":["to"],"type":"object","properties":{"to":{"enum":["write","admin","read"],"type":"string"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $to;

    public function __construct(string $to)
    {
        $this->to = $to;
    }
}
