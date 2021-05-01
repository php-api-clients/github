<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Schema;

final class SimpleCommitStatus
{
    public const SCHEMA_TITLE = 'Simple Commit Status';
    public const SCHEMA_DESCRIPTION = '';
    private string $description;
    private int $id;
    private string $node_id;
    private string $state;
    private string $context;
    private string $target_url;
    private boolean $required;
    private string $avatar_url;
    private string $url;
    private string $created_at;
    private string $updated_at;
    public function description() : string
    {
        return $this->description;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function context() : string
    {
        return $this->context;
    }
    public function target_url() : string
    {
        return $this->target_url;
    }
    public function required() : boolean
    {
        return $this->required;
    }
    public function avatar_url() : string
    {
        return $this->avatar_url;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
