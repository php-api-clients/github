<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class OrgPreReceiveHook
{
    public const SCHEMA_TITLE = 'org-pre-receive-hook';
    public const SPL_HASH = '000000006e7b75b5000000005d0d00fd';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $name;
    private string $enforcement;
    private string $configuration_url;
    private bool $allow_downstream_configuration;
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function enforcement() : string
    {
        return $this->enforcement;
    }
    public function configuration_url() : string
    {
        return $this->configuration_url;
    }
    public function allow_downstream_configuration() : bool
    {
        return $this->allow_downstream_configuration;
    }
}
