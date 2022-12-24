<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C480B5Bdc17827754C1Cd26D66Aed1426
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer","examples":[2]},"ref":{"type":"string","examples":["refs\\/heads\\/main"]},"key":{"type":"string","examples":["Linux-node-958aff96db2d75d67787d1e634ae70b659de937b"]},"version":{"type":"string","examples":["73885106f58cc52a7df9ec4d4a5622a5614813162cb516c759a30af6bf56e6f0"]},"last_accessed_at":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"created_at":{"type":"string","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"size_in_bytes":{"type":"integer","examples":[1024]}}}';
    public const SCHEMA_TITLE = 'c_480b5bdc17827754c1cd26d66aed1426';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $ref;
    private string $key;
    private string $version;
    private string $last_accessed_at;
    private string $created_at;
    private int $size_in_bytes;
    public function id() : int
    {
        return $this->id;
    }
    public function ref() : string
    {
        return $this->ref;
    }
    public function key() : string
    {
        return $this->key;
    }
    public function version() : string
    {
        return $this->version;
    }
    public function last_accessed_at() : string
    {
        return $this->last_accessed_at;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function size_in_bytes() : int
    {
        return $this->size_in_bytes;
    }
}
