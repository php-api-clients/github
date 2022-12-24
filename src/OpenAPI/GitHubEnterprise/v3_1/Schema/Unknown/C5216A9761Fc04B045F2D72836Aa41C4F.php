<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C5216A9761Fc04B045F2D72836Aa41C4F
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"billing_email":{"type":"string","description":"Billing email address. This address is not publicized."},"company":{"type":"string","description":"The company name."},"email":{"type":"string","description":"The publicly visible email address."},"twitter_username":{"type":"string","description":"The Twitter username of the company."},"location":{"type":"string","description":"The location."},"name":{"type":"string","description":"The shorthand name of the company."},"description":{"type":"string","description":"The description of the company."},"has_organization_projects":{"type":"boolean","description":"Whether an organization can use organization projects."},"has_repository_projects":{"type":"boolean","description":"Whether repositories that belong to the organization can use repository projects."},"default_repository_permission":{"enum":["read","write","admin","none"],"type":"string","description":"Default permission level members have for organization repositories.","default":"read"},"members_can_create_repositories":{"type":"boolean","description":"Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.","default":true},"members_can_create_internal_repositories":{"type":"boolean","description":"Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."},"members_can_create_private_repositories":{"type":"boolean","description":"Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."},"members_can_create_public_repositories":{"type":"boolean","description":"Whether organization members can create public repositories, which are visible to anyone. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."},"members_allowed_repository_creation_type":{"enum":["all","private","none"],"type":"string","description":"Specifies which types of repositories non-admin organization members can create. \\n**Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details."},"members_can_create_pages":{"type":"boolean","description":"Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.","default":true},"blog":{"type":"string","examples":["\\"http:\\/\\/github.blog\\""]}}}';
    public const SCHEMA_TITLE = 'c_5216a9761fc04b045f2d72836aa41c4f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Billing email address. This address is not publicized.
     */
    private string $billing_email;
    /**
     * The company name.
     */
    private string $company;
    /**
     * The publicly visible email address.
     */
    private string $email;
    /**
     * The Twitter username of the company.
     */
    private string $twitter_username;
    /**
     * The location.
     */
    private string $location;
    /**
     * The shorthand name of the company.
     */
    private string $name;
    /**
     * The description of the company.
     */
    private string $description;
    /**
     * Whether an organization can use organization projects.
     */
    private bool $has_organization_projects;
    /**
     * Whether repositories that belong to the organization can use repository projects.
     */
    private bool $has_repository_projects;
    /**
     * Default permission level members have for organization repositories.
     */
    private string $default_repository_permission;
    /**
     * Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.
     */
    private bool $members_can_create_repositories;
    /**
     * Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     */
    private bool $members_can_create_internal_repositories;
    /**
     * Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     */
    private bool $members_can_create_private_repositories;
    /**
     * Whether organization members can create public repositories, which are visible to anyone. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     */
    private bool $members_can_create_public_repositories;
    /**
    * Specifies which types of repositories non-admin organization members can create. 
    **Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details.
    */
    private string $members_allowed_repository_creation_type;
    /**
     * Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.
     */
    private bool $members_can_create_pages;
    private string $blog;
    /**
     * Billing email address. This address is not publicized.
     */
    public function billing_email() : string
    {
        return $this->billing_email;
    }
    /**
     * The company name.
     */
    public function company() : string
    {
        return $this->company;
    }
    /**
     * The publicly visible email address.
     */
    public function email() : string
    {
        return $this->email;
    }
    /**
     * The Twitter username of the company.
     */
    public function twitter_username() : string
    {
        return $this->twitter_username;
    }
    /**
     * The location.
     */
    public function location() : string
    {
        return $this->location;
    }
    /**
     * The shorthand name of the company.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The description of the company.
     */
    public function description() : string
    {
        return $this->description;
    }
    /**
     * Whether an organization can use organization projects.
     */
    public function has_organization_projects() : bool
    {
        return $this->has_organization_projects;
    }
    /**
     * Whether repositories that belong to the organization can use repository projects.
     */
    public function has_repository_projects() : bool
    {
        return $this->has_repository_projects;
    }
    /**
     * Default permission level members have for organization repositories.
     */
    public function default_repository_permission() : string
    {
        return $this->default_repository_permission;
    }
    /**
     * Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.
     */
    public function members_can_create_repositories() : bool
    {
        return $this->members_can_create_repositories;
    }
    /**
     * Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     */
    public function members_can_create_internal_repositories() : bool
    {
        return $this->members_can_create_internal_repositories;
    }
    /**
     * Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     */
    public function members_can_create_private_repositories() : bool
    {
        return $this->members_can_create_private_repositories;
    }
    /**
     * Whether organization members can create public repositories, which are visible to anyone. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     */
    public function members_can_create_public_repositories() : bool
    {
        return $this->members_can_create_public_repositories;
    }
    /**
    * Specifies which types of repositories non-admin organization members can create. 
    **Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details.
    */
    public function members_allowed_repository_creation_type() : string
    {
        return $this->members_allowed_repository_creation_type;
    }
    /**
     * Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.
     */
    public function members_can_create_pages() : bool
    {
        return $this->members_can_create_pages;
    }
    public function blog() : string
    {
        return $this->blog;
    }
}
