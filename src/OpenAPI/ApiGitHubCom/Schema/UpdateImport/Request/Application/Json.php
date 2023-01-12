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
    private string $vcs_username;
    /**
     * The password to provide to the originating repository.
     */
    private string $vcs_password;
    /**
     * The type of version control system you are migrating from.
     */
    private string $vcs;
    /**
     * For a tfvc import, the name of the project that is being imported.
     */
    private string $tfvc_project;
    /**
     * The username to provide to the originating repository.
     */
    public function vcs_username() : string
    {
        return $this->vcs_username;
    }
    /**
     * The password to provide to the originating repository.
     */
    public function vcs_password() : string
    {
        return $this->vcs_password;
    }
    /**
     * The type of version control system you are migrating from.
     */
    public function vcs() : string
    {
        return $this->vcs;
    }
    /**
     * For a tfvc import, the name of the project that is being imported.
     */
    public function tfvc_project() : string
    {
        return $this->tfvc_project;
    }
}
