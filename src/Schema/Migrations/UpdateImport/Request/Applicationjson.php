<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Migrations\UpdateImport\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"vcs_username":{"type":"string","description":"The username to provide to the originating repository."},"vcs_password":{"type":"string","description":"The password to provide to the originating repository."},"vcs":{"enum":["subversion","tfvc","git","mercurial"],"type":"string","description":"The type of version control system you are migrating from.","examples":["\\"git\\""]},"tfvc_project":{"type":"string","description":"For a tfvc import, the name of the project that is being imported.","examples":["\\"project1\\""]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"vcsUsername":"generated_vcs_username_null","vcsPassword":"generated_vcs_password_null","vcs":"\\"git\\"","tfvcProject":"\\"project1\\""}';
    /**
     * vcsUsername: The username to provide to the originating repository.
     * vcsPassword: The password to provide to the originating repository.
     * vcs: The type of version control system you are migrating from.
     * tfvcProject: For a tfvc import, the name of the project that is being imported.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('vcs_username')] public ?string $vcsUsername, #[\EventSauce\ObjectHydrator\MapFrom('vcs_password')] public ?string $vcsPassword, public ?string $vcs, #[\EventSauce\ObjectHydrator\MapFrom('tfvc_project')] public ?string $tfvcProject)
    {
    }
}
