<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class EnterprisePublicKey
{
    public const SCHEMA_TITLE = 'enterprise-public-key';
    public const SPL_HASH = '0000000065dd6716000000006352672d';
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
