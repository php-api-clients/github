<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class RepositoryPreReceiveHook
{
    public const SCHEMA_TITLE = 'repository-pre-receive-hook';
    public const SPL_HASH = '000000000c92e2e1000000006ad867a6';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $id = null;
    private ?string $name = null;
    private ?string $enforcement = null;
    private ?string $configuration_url = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function enforcement() : ?string
    {
        return $this->enforcement;
    }
    public function configuration_url() : ?string
    {
        return $this->configuration_url;
    }
}
