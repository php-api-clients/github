<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class Label
{
    public const SCHEMA_TITLE = 'Label';
    public const SPL_HASH = '000000001c23f90e000000003890ca58';
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
    private string $description;
    /**
     * 6-character hex code, without the leading #, identifying the color
     */
    private string $color;
    private boolean $default;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function color() : string
    {
        return $this->color;
    }
    public function default() : boolean
    {
        return $this->default;
    }
}
