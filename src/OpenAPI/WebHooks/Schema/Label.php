<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Label
{
    public const SCHEMA_TITLE = 'Label';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $id = null;
    private ?string $node_id = null;
    /**
     * URL for the label
     */
    private ?string $url = null;
    /**
     * The name of the label.
     */
    private ?string $name = null;
    private $description;
    /**
     * 6-character hex code, without the leading #, identifying the color
     */
    private ?string $color = null;
    private ?bool $default = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function description()
    {
        return $this->description;
    }
    public function color() : ?string
    {
        return $this->color;
    }
    public function default() : ?bool
    {
        return $this->default;
    }
}
