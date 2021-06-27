<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import;

final class ProjectChoices
{
    public const SCHEMA_TITLE = 'import::project_choices';
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
