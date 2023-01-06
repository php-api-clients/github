<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StartImport;

final class Request
{
    public const SCHEMA_JSON = '{"required":["vcs_url"],"type":"object","properties":{"vcs_url":{"type":"string","description":"The URL of the originating repository."},"vcs":{"enum":["subversion","git","mercurial","tfvc"],"type":"string","description":"The originating VCS type. Without this parameter, the import job will take additional time to detect the VCS type before beginning the import. This detection step will be reflected in the response."},"vcs_username":{"type":"string","description":"If authentication is required, the username to provide to `vcs_url`."},"vcs_password":{"type":"string","description":"If authentication is required, the password to provide to `vcs_url`."},"tfvc_project":{"type":"string","description":"For a tfvc import, the name of the project that is being imported."}}}';
    public const SCHEMA_TITLE = 'StartImport\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The URL of the originating repository.
     */
    private string $vcs_url;
    /**
     * The originating VCS type. Without this parameter, the import job will take additional time to detect the VCS type before beginning the import. This detection step will be reflected in the response.
     */
    private ?string $vcs = null;
    /**
     * If authentication is required, the username to provide to `vcs_url`.
     */
    private ?string $vcs_username = null;
    /**
     * If authentication is required, the password to provide to `vcs_url`.
     */
    private ?string $vcs_password = null;
    /**
     * For a tfvc import, the name of the project that is being imported.
     */
    private ?string $tfvc_project = null;
    /**
     * The URL of the originating repository.
     */
    public function vcs_url() : string
    {
        return $this->vcs_url;
    }
    /**
     * The originating VCS type. Without this parameter, the import job will take additional time to detect the VCS type before beginning the import. This detection step will be reflected in the response.
     */
    public function vcs() : ?string
    {
        return $this->vcs;
    }
    /**
     * If authentication is required, the username to provide to `vcs_url`.
     */
    public function vcs_username() : ?string
    {
        return $this->vcs_username;
    }
    /**
     * If authentication is required, the password to provide to `vcs_url`.
     */
    public function vcs_password() : ?string
    {
        return $this->vcs_password;
    }
    /**
     * For a tfvc import, the name of the project that is being imported.
     */
    public function tfvc_project() : ?string
    {
        return $this->tfvc_project;
    }
}
