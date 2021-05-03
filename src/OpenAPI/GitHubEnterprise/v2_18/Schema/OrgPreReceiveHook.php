<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class OrgPreReceiveHook
{
    public const SCHEMA_TITLE = 'org-pre-receive-hook';
    public const SPL_HASH = '000000000c92e445000000006ad867a6';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $id = null;
    private ?string $name = null;
    private ?string $enforcement = null;
    private ?string $configuration_url = null;
    private ?bool $allow_downstream_configuration = null;
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
    public function allow_downstream_configuration() : ?bool
    {
        return $this->allow_downstream_configuration;
    }
}
