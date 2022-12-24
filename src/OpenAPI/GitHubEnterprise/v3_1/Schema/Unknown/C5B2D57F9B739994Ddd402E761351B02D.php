<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C5B2D57F9B739994Ddd402E761351B02D
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the repository.","examples":["Team Environment"]},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Whether the repository is private.","default":false},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true,"examples":[true]},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true,"examples":[true]},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true,"examples":[true]},"team_id":{"type":"integer","description":"The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization."},"auto_init":{"type":"boolean","description":"Whether the repository is initialized with a minimal README.","default":false},"gitignore_template":{"type":"string","description":"The desired language or platform to apply to the .gitignore.","examples":["Haskell"]},"license_template":{"type":"string","description":"The license keyword of the open source license for this repository.","examples":["mit"]},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true,"examples":[true]},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true,"examples":[true]},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true,"examples":[true]},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false,"examples":[false]},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true,"examples":[true]},"is_template":{"type":"boolean","description":"Whether this repository acts as a template that can be used to generate new repositories.","default":false,"examples":[true]}}}';
    public const SCHEMA_TITLE = 'c_5b2d57f9b739994ddd402e761351b02d';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the repository.
     */
    private string $name;
    /**
     * A short description of the repository.
     */
    private ?string $description = null;
    /**
     * A URL with more information about the repository.
     */
    private ?string $homepage = null;
    /**
     * Whether the repository is private.
     */
    private ?bool $private = null;
    /**
     * Whether issues are enabled.
     */
    private ?bool $has_issues = null;
    /**
     * Whether projects are enabled.
     */
    private ?bool $has_projects = null;
    /**
     * Whether the wiki is enabled.
     */
    private ?bool $has_wiki = null;
    /**
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     */
    private ?int $team_id = null;
    /**
     * Whether the repository is initialized with a minimal README.
     */
    private ?bool $auto_init = null;
    /**
     * The desired language or platform to apply to the .gitignore.
     */
    private ?string $gitignore_template = null;
    /**
     * The license keyword of the open source license for this repository.
     */
    private ?string $license_template = null;
    /**
     * Whether to allow squash merges for pull requests.
     */
    private ?bool $allow_squash_merge = null;
    /**
     * Whether to allow merge commits for pull requests.
     */
    private ?bool $allow_merge_commit = null;
    /**
     * Whether to allow rebase merges for pull requests.
     */
    private ?bool $allow_rebase_merge = null;
    /**
     * Whether to delete head branches when pull requests are merged
     */
    private ?bool $delete_branch_on_merge = null;
    /**
     * Whether downloads are enabled.
     */
    private ?bool $has_downloads = null;
    /**
     * Whether this repository acts as a template that can be used to generate new repositories.
     */
    private ?bool $is_template = null;
    /**
     * The name of the repository.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * A short description of the repository.
     */
    public function description() : ?string
    {
        return $this->description;
    }
    /**
     * A URL with more information about the repository.
     */
    public function homepage() : ?string
    {
        return $this->homepage;
    }
    /**
     * Whether the repository is private.
     */
    public function private() : ?bool
    {
        return $this->private;
    }
    /**
     * Whether issues are enabled.
     */
    public function has_issues() : ?bool
    {
        return $this->has_issues;
    }
    /**
     * Whether projects are enabled.
     */
    public function has_projects() : ?bool
    {
        return $this->has_projects;
    }
    /**
     * Whether the wiki is enabled.
     */
    public function has_wiki() : ?bool
    {
        return $this->has_wiki;
    }
    /**
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     */
    public function team_id() : ?int
    {
        return $this->team_id;
    }
    /**
     * Whether the repository is initialized with a minimal README.
     */
    public function auto_init() : ?bool
    {
        return $this->auto_init;
    }
    /**
     * The desired language or platform to apply to the .gitignore.
     */
    public function gitignore_template() : ?string
    {
        return $this->gitignore_template;
    }
    /**
     * The license keyword of the open source license for this repository.
     */
    public function license_template() : ?string
    {
        return $this->license_template;
    }
    /**
     * Whether to allow squash merges for pull requests.
     */
    public function allow_squash_merge() : ?bool
    {
        return $this->allow_squash_merge;
    }
    /**
     * Whether to allow merge commits for pull requests.
     */
    public function allow_merge_commit() : ?bool
    {
        return $this->allow_merge_commit;
    }
    /**
     * Whether to allow rebase merges for pull requests.
     */
    public function allow_rebase_merge() : ?bool
    {
        return $this->allow_rebase_merge;
    }
    /**
     * Whether to delete head branches when pull requests are merged
     */
    public function delete_branch_on_merge() : ?bool
    {
        return $this->delete_branch_on_merge;
    }
    /**
     * Whether downloads are enabled.
     */
    public function has_downloads() : ?bool
    {
        return $this->has_downloads;
    }
    /**
     * Whether this repository acts as a template that can be used to generate new repositories.
     */
    public function is_template() : ?bool
    {
        return $this->is_template;
    }
}
