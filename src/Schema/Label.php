<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class Label
{
    public const SCHEMA_JSON = '{"title":"Label","required":["id","node_id","url","name","description","color","default"],"type":"object","properties":{"id":{"type":"integer","format":"int64","examples":[208045946]},"node_id":{"type":"string","examples":["MDU6TGFiZWwyMDgwNDU5NDY="]},"url":{"type":"string","description":"URL for the label","format":"uri","examples":["https:\\/\\/api.github.com\\/repositories\\/42\\/labels\\/bug"]},"name":{"type":"string","description":"The name of the label.","examples":["bug"]},"description":{"type":["string","null"],"examples":["Something isn\'t working"]},"color":{"type":"string","description":"6-character hex code, without the leading #, identifying the color","examples":["FFFFFF"]},"default":{"type":"boolean","examples":[true]}},"description":"Color-coded labels help you categorize and filter your issues (just like labels in Gmail)."}';
    public const SCHEMA_TITLE = 'Label';
    public const SCHEMA_DESCRIPTION = 'Color-coded labels help you categorize and filter your issues (just like labels in Gmail).';
    public ?int $id;
    public ?string $node_id;
    /**
     * URL for the label
     */
    public ?string $url;
    /**
     * The name of the label.
     */
    public ?string $name;
    public ?string $description;
    /**
     * 6-character hex code, without the leading #, identifying the color
     */
    public ?string $color;
    public ?bool $default;
    public function __construct(int $id, string $node_id, string $url, string $name, string $description, string $color, bool $default)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->name = $name;
        $this->description = $description;
        $this->color = $color;
        $this->default = $default;
    }
}
