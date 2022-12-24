<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C8E3C936860930746B69D40B5E98B8Fda
{
    public const SCHEMA_JSON = '{"required":["id","key","url","title","verified","created_at","read_only"],"type":"object","properties":{"added_by":{"type":["string","null"]},"created_at":{"type":"string"},"id":{"type":"integer"},"key":{"type":"string"},"last_used":{"type":["string","null"]},"read_only":{"type":"boolean"},"title":{"type":"string"},"url":{"type":"string","format":"uri"},"verified":{"type":"boolean"}},"description":"The [`deploy key`](https:\\/\\/docs.github.com\\/rest\\/reference\\/deployments#get-a-deploy-key) resource."}';
    public const SCHEMA_TITLE = 'c_8e3c936860930746b69d40b5e98b8fda';
    public const SCHEMA_DESCRIPTION = 'The [`deploy key`](https://docs.github.com/rest/reference/deployments#get-a-deploy-key) resource.';
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
