<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookLabelEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"color":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the color if the action was `edited`."}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}}},"description":"The changes to the label if the action was `edited`."}';
    public const SCHEMA_TITLE = 'WebhookLabelEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the label if the action was `edited`.';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Color $color;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Description $description;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Name $name;
    public function __construct(object $color, object $description, object $name)
    {
        $this->color = $color;
        $this->description = $description;
        $this->name = $name;
    }
}
