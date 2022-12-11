<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueSearchResultItem;

final class Labels
{
    public const SCHEMA_TITLE = 'issue-search-result-item::labels';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $node_id;
    private string $url;
    private string $name;
    private string $color;
    private bool $default;
    private $description;
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
}
