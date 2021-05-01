<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class EnterprisePublicKey
{
    public const SCHEMA_TITLE = 'enterprise-public-key';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $key_id;
    private string $key;
    private int $user_id;
    private int $repository_id;
    private string $url;
    public function id() : int
    {
        return $this->id;
    }
    public function key_id() : string
    {
        return $this->key_id;
    }
    public function key() : string
    {
        return $this->key;
    }
    public function user_id() : int
    {
        return $this->user_id;
    }
    public function repository_id() : int
    {
        return $this->repository_id;
    }
    public function url() : string
    {
        return $this->url;
    }
}
