<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Label
{
    public const SCHEMA_JSON = '{"title":"Label","required":["id","node_id","url","name","description","color","default"],"type":"object","properties":{"id":{"type":"integer","format":"int64","examples":[208045946]},"node_id":{"type":"string","examples":["MDU6TGFiZWwyMDgwNDU5NDY="]},"url":{"type":"string","description":"URL for the label","format":"uri","examples":["https:\\/\\/api.github.com\\/repositories\\/42\\/labels\\/bug"]},"name":{"type":"string","description":"The name of the label.","examples":["bug"]},"description":{"type":["string","null"],"examples":["Something isn\'t working"]},"color":{"type":"string","description":"6-character hex code, without the leading #, identifying the color","examples":["FFFFFF"]},"default":{"type":"boolean","examples":[true]}},"description":"Color-coded labels help you categorize and filter your issues (just like labels in Gmail)."}';
    public const SCHEMA_TITLE = 'Label';
    public const SCHEMA_DESCRIPTION = 'Color-coded labels help you categorize and filter your issues (just like labels in Gmail).';
    private int $id;
    private string $node_id;
    /**
     * URL for the label
     */
    private string $url;
    /**
     * The name of the label.
     */
    private string $name;
    private $description;
    /**
     * 6-character hex code, without the leading #, identifying the color
     */
    private string $color;
    private bool $default;
    public function id() : int
    {
        return $this->id;
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
    /**
     * The name of the label.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function description()
    {
        return $this->description;
    }
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
}
