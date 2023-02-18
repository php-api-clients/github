<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookBranchProtectionRuleEdited\Changes;

final readonly class AuthorizedActorNames
{
    public const SCHEMA_JSON        = '{"required":["from"],"type":"object","properties":{"from":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?array $from;

    public function __construct(array $from)
    {
        $this->from = $from;
    }
}
