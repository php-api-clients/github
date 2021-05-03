<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class SimpleCommitStatus
{
    public const SCHEMA_TITLE = 'Simple Commit Status';
    public const SPL_HASH = '000000005f182c2800000000682da57f';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $description = null;
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $state = null;
    private ?string $context = null;
    private ?string $target_url = null;
    private ?bool $required = null;
    private ?string $avatar_url = null;
    private ?string $url = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    public function description() : ?string
    {
        return $this->description;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function context() : ?string
    {
        return $this->context;
    }
    public function target_url() : ?string
    {
        return $this->target_url;
    }
    public function required() : ?bool
    {
        return $this->required;
    }
    public function avatar_url() : ?string
    {
        return $this->avatar_url;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
}
