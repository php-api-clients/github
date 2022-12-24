<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class SimpleCommitStatus
{
    public const SCHEMA_JSON = '{"title":"Simple Commit Status","required":["description","id","node_id","state","context","target_url","avatar_url","url","created_at","updated_at"],"type":"object","properties":{"description":{"type":["string","null"]},"id":{"type":"integer"},"node_id":{"type":"string"},"state":{"type":"string"},"context":{"type":"string"},"target_url":{"type":["string","null"],"format":"uri"},"required":{"type":["boolean","null"]},"avatar_url":{"type":["string","null"],"format":"uri"},"url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}}}';
    public const SCHEMA_TITLE = 'Simple Commit Status';
    public const SCHEMA_DESCRIPTION = '';
    private $description;
    private int $id;
    private string $node_id;
    private string $state;
    private string $context;
    private $target_url;
    private $required;
    private $avatar_url;
    private string $url;
    private string $created_at;
    private string $updated_at;
    public function description()
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
    public function target_url()
    {
        return $this->target_url;
    }
    public function required()
    {
        return $this->required;
    }
    public function avatar_url()
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
