<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Migrations\UpdateImport\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"vcs_username":{"type":"string","description":"The username to provide to the originating repository."},"vcs_password":{"type":"string","description":"The password to provide to the originating repository."},"vcs":{"enum":["subversion","tfvc","git","mercurial"],"type":"string","description":"The type of version control system you are migrating from.","examples":["\\"git\\""]},"tfvc_project":{"type":"string","description":"For a tfvc import, the name of the project that is being imported.","examples":["\\"project1\\""]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"vcs_username":"generated","vcs_password":"generated","vcs":"\\"git\\"","tfvc_project":"\\"project1\\""}';

    /**
     * vcsUsername: The username to provide to the originating repository.
     * vcsPassword: The password to provide to the originating repository.
     * vcs: The type of version control system you are migrating from.
     * tfvcProject: For a tfvc import, the name of the project that is being imported.
     */
    public function __construct(#[MapFrom('vcs_username')] public ?string $vcsUsername, #[MapFrom('vcs_password')] public ?string $vcsPassword, public ?string $vcs, #[MapFrom('tfvc_project')] public ?string $tfvcProject)
    {
    }
}
