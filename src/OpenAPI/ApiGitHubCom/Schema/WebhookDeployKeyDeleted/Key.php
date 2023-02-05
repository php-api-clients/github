<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDeployKeyDeleted;

final class Key
{
    public const SCHEMA_JSON = '{"required":["id","key","url","title","verified","created_at","read_only"],"type":"object","properties":{"added_by":{"type":["string","null"]},"created_at":{"type":"string"},"id":{"type":"integer"},"key":{"type":"string"},"last_used":{"type":["string","null"]},"read_only":{"type":"boolean"},"title":{"type":"string"},"url":{"type":"string","format":"uri"},"verified":{"type":"boolean"}},"description":"The [`deploy key`](https:\\/\\/docs.github.com\\/rest\\/reference\\/deployments#get-a-deploy-key) resource."}';
    public const SCHEMA_TITLE = 'WebhookDeployKeyDeleted\\Key';
    public const SCHEMA_DESCRIPTION = 'The [`deploy key`](https://docs.github.com/rest/reference/deployments#get-a-deploy-key) resource.';
    public readonly ?string $added_by;
    public readonly string $created_at;
    public readonly int $id;
    public readonly string $key;
    public readonly ?string $last_used;
    public readonly bool $read_only;
    public readonly string $title;
    public readonly string $url;
    public readonly bool $verified;
    public function __construct(string $added_by, string $created_at, int $id, string $key, string $last_used, bool $read_only, string $title, string $url, bool $verified)
    {
        $this->added_by = $added_by;
        $this->created_at = $created_at;
        $this->id = $id;
        $this->key = $key;
        $this->last_used = $last_used;
        $this->read_only = $read_only;
        $this->title = $title;
        $this->url = $url;
        $this->verified = $verified;
    }
}
