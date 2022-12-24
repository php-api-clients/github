<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CEab5Cf1A67957Daaeca2Dda9F630Cb15
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"vcs":{"type":"string"},"tfvc_project":{"type":"string"},"human_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'c_eab5cf1a67957daaeca2dda9f630cb15';
    public const SCHEMA_DESCRIPTION = '';
    private string $vcs;
    private string $tfvc_project;
    private string $human_name;
    public function vcs() : string
    {
        return $this->vcs;
    }
    public function tfvc_project() : string
    {
        return $this->tfvc_project;
    }
    public function human_name() : string
    {
        return $this->human_name;
    }
}
