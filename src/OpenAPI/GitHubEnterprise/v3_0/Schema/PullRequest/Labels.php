<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\PullRequest;

final class Labels
{
    public const SCHEMA_TITLE = 'pull-request::labels';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $node_id;
    private string $url;
    private string $name;
    private ?string $description = null;
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
    public function url() : string
    {
        return $this->url;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function color() : string
    {
        return $this->color;
    }
    public function default() : bool
    {
        return $this->default;
    }
}
