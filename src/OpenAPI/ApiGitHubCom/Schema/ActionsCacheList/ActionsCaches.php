<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsCacheList;

final class ActionsCaches
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer","examples":[2]},"ref":{"type":"string","examples":["refs\\/heads\\/main"]},"key":{"type":"string","examples":["Linux-node-958aff96db2d75d67787d1e634ae70b659de937b"]},"version":{"type":"string","examples":["73885106f58cc52a7df9ec4d4a5622a5614813162cb516c759a30af6bf56e6f0"]},"last_accessed_at":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"created_at":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"size_in_bytes":{"type":"integer","examples":[1024]}}}';
    public const SCHEMA_TITLE = 'ActionsCacheList\\ActionsCaches';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $id;
    public readonly string $ref;
    public readonly string $key;
    public readonly string $version;
    public readonly string $last_accessed_at;
    public readonly string $created_at;
    public readonly int $size_in_bytes;
    public function __construct(int $id, string $ref, string $key, string $version, string $last_accessed_at, string $created_at, int $size_in_bytes)
    {
        $this->id = $id;
        $this->ref = $ref;
        $this->key = $key;
        $this->version = $version;
        $this->last_accessed_at = $last_accessed_at;
        $this->created_at = $created_at;
        $this->size_in_bytes = $size_in_bytes;
    }
}
