<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class EnterprisePublicKey
{
    public const SCHEMA_TITLE = 'enterprise-public-key';
    public const SPL_HASH = '00000000238247d9000000001c501073';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $id = null;
    private ?string $key_id = null;
    private ?string $key = null;
    private ?int $user_id = null;
    private ?int $repository_id = null;
    private ?string $url = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function key_id() : ?string
    {
        return $this->key_id;
    }
    public function key() : ?string
    {
        return $this->key;
    }
    public function user_id() : ?int
    {
        return $this->user_id;
    }
    public function repository_id() : ?int
    {
        return $this->repository_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
}
