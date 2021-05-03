<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class OrgPreReceiveHook
{
    public const SCHEMA_TITLE = 'org-pre-receive-hook';
    public const SPL_HASH = '000000001c23f791000000003890ca58';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $name;
    private string $enforcement;
    private string $configuration_url;
    private boolean $allow_downstream_configuration;
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
    public function allow_downstream_configuration() : boolean
    {
        return $this->allow_downstream_configuration;
    }
}
