<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateUsingTemplate;

final class Request
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"owner":{"type":"string","description":"The organization or person who will own the new repository. To create a new repository in an organization, the authenticated user must be a member of the specified organization."},"name":{"type":"string","description":"The name of the new repository."},"description":{"type":"string","description":"A short description of the new repository."},"include_all_branches":{"type":"boolean","description":"Set to `true` to include the directory structure and files from all branches in the template repository, and not just the default branch. Default: `false`.","default":false},"private":{"type":"boolean","description":"Either `true` to create a new private repository or `false` to create a new public one.","default":false}}}';
    public const SCHEMA_TITLE = 'CreateUsingTemplate\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The organization or person who will own the new repository. To create a new repository in an organization, the authenticated user must be a member of the specified organization.
     */
    private ?string $owner = null;
    /**
     * The name of the new repository.
     */
    private string $name;
    /**
     * A short description of the new repository.
     */
    private ?string $description = null;
    /**
     * Set to `true` to include the directory structure and files from all branches in the template repository, and not just the default branch. Default: `false`.
     */
    private ?bool $include_all_branches = null;
    /**
     * Either `true` to create a new private repository or `false` to create a new public one.
     */
    private ?bool $private = null;
    /**
     * The organization or person who will own the new repository. To create a new repository in an organization, the authenticated user must be a member of the specified organization.
     */
    public function owner() : ?string
    {
        return $this->owner;
    }
    /**
     * The name of the new repository.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * A short description of the new repository.
     */
    public function description() : ?string
    {
        return $this->description;
    }
    /**
     * Set to `true` to include the directory structure and files from all branches in the template repository, and not just the default branch. Default: `false`.
     */
    public function include_all_branches() : ?bool
    {
        return $this->include_all_branches;
    }
    /**
     * Either `true` to create a new private repository or `false` to create a new public one.
     */
    public function private() : ?bool
    {
        return $this->private;
    }
}
