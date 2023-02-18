<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionLabeled;

final readonly class Label
{
    public const SCHEMA_JSON        = '{"title":"Label","required":["id","node_id","url","name","color","default","description"],"type":"object","properties":{"color":{"type":"string","description":"6-character hex code, without the leading #, identifying the color"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"id":{"type":"integer"},"name":{"type":"string","description":"The name of the label."},"node_id":{"type":"string"},"url":{"type":"string","description":"URL for the label","format":"uri"}}}';
    public const SCHEMA_TITLE       = 'Label';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * 6-character hex code, without the leading #, identifying the color
     */
    public ?string $color;
    public ?bool $default;
    public ?string $description;
    public ?int $id;
    /**
     * The name of the label.
     */
    public ?string $name;
    public ?string $node_id;
    /**
     * URL for the label
     */
    public ?string $url;

    public function __construct(string $color, bool $default, string $description, int $id, string $name, string $node_id, string $url)
    {
        $this->color       = $color;
        $this->default     = $default;
        $this->description = $description;
        $this->id          = $id;
        $this->name        = $name;
        $this->node_id     = $node_id;
        $this->url         = $url;
    }
}
