<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CD3470C77F10F907C22620E8B8Eb96E8E
{
    public const SCHEMA_JSON = '{"required":["id","key","url","title","verified","created_at","read_only"],"type":"object","properties":{"added_by":{"type":["string","null"]},"created_at":{"type":"string"},"id":{"type":"integer"},"key":{"type":"string"},"last_used":{"type":["string","null"]},"read_only":{"type":"boolean"},"title":{"type":"string"},"url":{"type":"string","format":"uri"},"verified":{"type":"boolean"}},"description":"The [`deploy key`](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/deployments#get-a-deploy-key) resource."}';
    public const SCHEMA_TITLE = 'c_d3470c77f10f907c22620e8b8eb96e8e';
    public const SCHEMA_DESCRIPTION = 'The [`deploy key`](https://docs.github.com/github-ae@latest/rest/reference/deployments#get-a-deploy-key) resource.';
    private $added_by;
    private string $created_at;
    private int $id;
    private string $key;
    private $last_used;
    private bool $read_only;
    private string $title;
    private string $url;
    private bool $verified;
    public function added_by()
    {
        return $this->added_by;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function key() : string
    {
        return $this->key;
    }
    public function last_used()
    {
        return $this->last_used;
    }
    public function read_only() : bool
    {
        return $this->read_only;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function verified() : bool
    {
        return $this->verified;
    }
}
