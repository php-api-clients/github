<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookLabelEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"color":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the color if the action was `edited`."}}},"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}}},"description":"The changes to the label if the action was `edited`."}';
    public const SCHEMA_TITLE = 'WebhookLabelEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the label if the action was `edited`.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Color::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Color $color;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Description::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Description $description;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Name::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Name $name;
    public function color() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Color
    {
        return $this->color;
    }
    public function description() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Description
    {
        return $this->description;
    }
    public function name() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Name
    {
        return $this->name;
    }
}
