<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookLabelEdited;

final class Label
{
    public const SCHEMA_JSON = '{"title":"Label","required":["id","node_id","url","name","color","default","description"],"type":"object","properties":{"color":{"type":"string","description":"6-character hex code, without the leading #, identifying the color"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"id":{"type":"integer"},"name":{"type":"string","description":"The name of the label."},"node_id":{"type":"string"},"url":{"type":"string","description":"URL for the label","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Label';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * 6-character hex code, without the leading #, identifying the color
     */
    private string $color;
    private bool $default;
    private $description;
    private int $id;
    /**
     * The name of the label.
     */
    private string $name;
    private string $node_id;
    /**
     * URL for the label
     */
    private string $url;
    /**
     * 6-character hex code, without the leading #, identifying the color
     */
    public function color() : string
    {
        return $this->color;
    }
    public function default() : bool
    {
        return $this->default;
    }
    public function description()
    {
        return $this->description;
    }
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The name of the label.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * URL for the label
     */
    public function url() : string
    {
        return $this->url;
    }
}
