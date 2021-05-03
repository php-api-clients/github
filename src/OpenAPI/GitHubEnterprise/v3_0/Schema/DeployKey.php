<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class DeployKey
{
    public const SCHEMA_TITLE = 'Deploy Key';
    public const SPL_HASH = '0000000065dd6bbe000000006352672d';
    public const SCHEMA_DESCRIPTION = 'An SSH key granting access to a single repository.';
    private int $id;
    private string $key;
    private string $url;
    private string $title;
    private boolean $verified;
    private string $created_at;
    private boolean $read_only;
    public function id() : int
    {
        return $this->id;
    }
    public function key() : string
    {
        return $this->key;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function verified() : boolean
    {
        return $this->verified;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function read_only() : boolean
    {
        return $this->read_only;
    }
}
