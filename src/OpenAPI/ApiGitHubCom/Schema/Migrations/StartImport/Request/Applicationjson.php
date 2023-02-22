<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Migrations\StartImport\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["vcs_url"],"type":"object","properties":{"vcs_url":{"type":"string","description":"The URL of the originating repository."},"vcs":{"enum":["subversion","git","mercurial","tfvc"],"type":"string","description":"The originating VCS type. Without this parameter, the import job will take additional time to detect the VCS type before beginning the import. This detection step will be reflected in the response."},"vcs_username":{"type":"string","description":"If authentication is required, the username to provide to `vcs_url`."},"vcs_password":{"type":"string","description":"If authentication is required, the password to provide to `vcs_url`."},"tfvc_project":{"type":"string","description":"For a tfvc import, the name of the project that is being imported."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The URL of the originating repository.
     */
    public ?string $vcs_url;
    /**
     * The originating VCS type. Without this parameter, the import job will take additional time to detect the VCS type before beginning the import. This detection step will be reflected in the response.
     */
    public string $vcs;
    /**
     * If authentication is required, the username to provide to `vcs_url`.
     */
    public string $vcs_username;
    /**
     * If authentication is required, the password to provide to `vcs_url`.
     */
    public string $vcs_password;
    /**
     * For a tfvc import, the name of the project that is being imported.
     */
    public string $tfvc_project;
    public function __construct(string $vcs_url, string $vcs, string $vcs_username, string $vcs_password, string $tfvc_project)
    {
        $this->vcs_url = $vcs_url;
        $this->vcs = $vcs;
        $this->vcs_username = $vcs_username;
        $this->vcs_password = $vcs_password;
        $this->tfvc_project = $tfvc_project;
    }
}
