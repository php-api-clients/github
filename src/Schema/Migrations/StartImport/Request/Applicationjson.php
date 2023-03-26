<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Migrations\StartImport\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["vcs_url"],"type":"object","properties":{"vcs_url":{"type":"string","description":"The URL of the originating repository."},"vcs":{"enum":["subversion","git","mercurial","tfvc"],"type":"string","description":"The originating VCS type. Without this parameter, the import job will take additional time to detect the VCS type before beginning the import. This detection step will be reflected in the response."},"vcs_username":{"type":"string","description":"If authentication is required, the username to provide to `vcs_url`."},"vcs_password":{"type":"string","description":"If authentication is required, the password to provide to `vcs_url`."},"tfvc_project":{"type":"string","description":"For a tfvc import, the name of the project that is being imported."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"vcs_url":"generated_vcs_url_null","vcs":"subversion","vcs_username":"generated_vcs_username_null","vcs_password":"generated_vcs_password_null","tfvc_project":"generated_tfvc_project_null"}';
    /**
     * vcsUrl: The URL of the originating repository.
     * vcs: The originating VCS type. Without this parameter, the import job will take additional time to detect the VCS type before beginning the import. This detection step will be reflected in the response.
     * vcsUsername: If authentication is required, the username to provide to `vcs_url`.
     * vcsPassword: If authentication is required, the password to provide to `vcs_url`.
     * tfvcProject: For a tfvc import, the name of the project that is being imported.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('vcs_url')] public string $vcsUrl, public ?string $vcs, #[\EventSauce\ObjectHydrator\MapFrom('vcs_username')] public ?string $vcsUsername, #[\EventSauce\ObjectHydrator\MapFrom('vcs_password')] public ?string $vcsPassword, #[\EventSauce\ObjectHydrator\MapFrom('tfvc_project')] public ?string $tfvcProject)
    {
    }
}
