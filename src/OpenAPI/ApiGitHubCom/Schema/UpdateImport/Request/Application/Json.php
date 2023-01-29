<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateImport\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"vcs_username":{"type":"string","description":"The username to provide to the originating repository."},"vcs_password":{"type":"string","description":"The password to provide to the originating repository."},"vcs":{"enum":["subversion","tfvc","git","mercurial"],"type":"string","description":"The type of version control system you are migrating from.","examples":["\\"git\\""]},"tfvc_project":{"type":"string","description":"For a tfvc import, the name of the project that is being imported.","examples":["\\"project1\\""]}}}';
    public const SCHEMA_TITLE = 'UpdateImport\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The username to provide to the originating repository.
     */
    public readonly string $vcs_username;
    /**
     * The password to provide to the originating repository.
     */
    public readonly string $vcs_password;
    /**
     * The type of version control system you are migrating from.
     */
    public readonly string $vcs;
    /**
     * For a tfvc import, the name of the project that is being imported.
     */
    public readonly string $tfvc_project;
    public function __construct(string $vcs_username, string $vcs_password, string $vcs, string $tfvc_project)
    {
        $this->vcs_username = $vcs_username;
        $this->vcs_password = $vcs_password;
        $this->vcs = $vcs;
        $this->tfvc_project = $tfvc_project;
    }
}
