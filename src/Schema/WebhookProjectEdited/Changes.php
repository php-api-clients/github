<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookProjectEdited;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The changes to the project if the action was `edited`."}}}},"description":"The changes to the project if the action was `edited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the project if the action was `edited`.';
    public ?\ApiClients\Client\Github\Schema\WebhookProjectEdited\Changes\Body $body;
    public ?\ApiClients\Client\Github\Schema\WebhookProjectEdited\Changes\Name $name;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookProjectEdited\Changes\Body $body, \ApiClients\Client\Github\Schema\WebhookProjectEdited\Changes\Name $name)
    {
        $this->body = $body;
        $this->name = $name;
    }
}
