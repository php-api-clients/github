<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateUsingTemplate\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Applicationjson
{
    public const SCHEMA_JSON         = '{"required":["name"],"type":"object","properties":{"owner":{"type":"string","description":"The organization or person who will own the new repository. To create a new repository in an organization, the authenticated user must be a member of the specified organization."},"name":{"type":"string","description":"The name of the new repository."},"description":{"type":"string","description":"A short description of the new repository."},"include_all_branches":{"type":"boolean","description":"Set to `true` to include the directory structure and files from all branches in the template repository, and not just the default branch. Default: `false`.","default":false},"private":{"type":"boolean","description":"Either `true` to create a new private repository or `false` to create a new public one.","default":false}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"owner":"generated_owner_null","name":"generated_name_null","description":"generated_description_null","include_all_branches":false,"private":false}';

    /**
     * owner: The organization or person who will own the new repository. To create a new repository in an organization, the authenticated user must be a member of the specified organization.
     * name: The name of the new repository.
     * description: A short description of the new repository.
     * includeAllBranches: Set to `true` to include the directory structure and files from all branches in the template repository, and not just the default branch. Default: `false`.
     * private: Either `true` to create a new private repository or `false` to create a new public one.
     */
    public function __construct(public ?string $owner, public string $name, public ?string $description, #[MapFrom('include_all_branches')] public ?bool $includeAllBranches, public ?bool $private)
    {
    }
}
