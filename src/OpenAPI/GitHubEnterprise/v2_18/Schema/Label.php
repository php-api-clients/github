<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Label
{
    public const SCHEMA_TITLE = 'Label';
    public const SPL_HASH = '0000000051ede3f30000000051f77f0f';
    public const SCHEMA_DESCRIPTION = 'Color-coded labels help you categorize and filter your issues (just like labels in Gmail).';
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
    private ?string $description = null;
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
    public function description() : ?string
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
