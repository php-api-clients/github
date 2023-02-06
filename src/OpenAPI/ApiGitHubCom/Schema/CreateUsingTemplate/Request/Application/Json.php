<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateUsingTemplate\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"owner":{"type":"string","description":"The organization or person who will own the new repository. To create a new repository in an organization, the authenticated user must be a member of the specified organization."},"name":{"type":"string","description":"The name of the new repository."},"description":{"type":"string","description":"A short description of the new repository."},"include_all_branches":{"type":"boolean","description":"Set to `true` to include the directory structure and files from all branches in the template repository, and not just the default branch. Default: `false`.","default":false},"private":{"type":"boolean","description":"Either `true` to create a new private repository or `false` to create a new public one.","default":false}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CreateUsingTemplate\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The organization or person who will own the new repository. To create a new repository in an organization, the authenticated user must be a member of the specified organization.
     */
    public readonly ?string $owner;
    /**
     * The name of the new repository.
     */
    public readonly string $name;
    /**
     * A short description of the new repository.
     */
    public readonly ?string $description;
    /**
     * Set to `true` to include the directory structure and files from all branches in the template repository, and not just the default branch. Default: `false`.
     */
    public readonly ?bool $include_all_branches;
    /**
     * Either `true` to create a new private repository or `false` to create a new public one.
     */
    public readonly ?bool $private;
    public function __construct(string $owner, string $name, string $description, bool $include_all_branches, bool $private)
    {
        $this->owner = $owner;
        $this->name = $name;
        $this->description = $description;
        $this->include_all_branches = $include_all_branches;
        $this->private = $private;
    }
}
