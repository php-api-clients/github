<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ProjectEdited;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMemberEdited\Changes\Permission;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ProjectEdited\Changes\Public_;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ProjectEdited\Changes\Title;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"description":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}},"public":{"type":"object","properties":{"from":{"type":"boolean"},"to":{"type":"boolean"}}},"short_description":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}},"title":{"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Permission $description;
    public ?Public_ $public;
    public ?Permission $short_description;
    public ?Title $title;

    public function __construct(Permission $description, Public_ $public, Permission $short_description, Title $title)
    {
        $this->description       = $description;
        $this->public            = $public;
        $this->short_description = $short_description;
        $this->title             = $title;
    }
}
