<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Import;

final class ProjectChoices
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"vcs":{"type":"string"},"tfvc_project":{"type":"string"},"human_name":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Import\\ProjectChoices';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $vcs;
    public readonly string $tfvc_project;
    public readonly string $human_name;
    public function __construct(string $vcs, string $tfvc_project, string $human_name)
    {
        $this->vcs = $vcs;
        $this->tfvc_project = $tfvc_project;
        $this->human_name = $human_name;
    }
}
