<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Orgs\Update\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"billing_email":{"type":"string","description":"Billing email address. This address is not publicized."},"company":{"type":"string","description":"The company name."},"email":{"type":"string","description":"The publicly visible email address."},"twitter_username":{"type":"string","description":"The Twitter username of the company."},"location":{"type":"string","description":"The location."},"name":{"type":"string","description":"The shorthand name of the company."},"description":{"type":"string","description":"The description of the company."},"has_organization_projects":{"type":"boolean","description":"Whether an organization can use organization projects."},"has_repository_projects":{"type":"boolean","description":"Whether repositories that belong to the organization can use repository projects."},"default_repository_permission":{"enum":["read","write","admin","none"],"type":"string","description":"Default permission level members have for organization repositories.","default":"read"},"members_can_create_repositories":{"type":"boolean","description":"Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.","default":true},"members_can_create_internal_repositories":{"type":"boolean","description":"Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."},"members_can_create_private_repositories":{"type":"boolean","description":"Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."},"members_can_create_public_repositories":{"type":"boolean","description":"Whether organization members can create public repositories, which are visible to anyone. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."},"members_allowed_repository_creation_type":{"enum":["all","private","none"],"type":"string","description":"Specifies which types of repositories non-admin organization members can create. `private` is only available to repositories that are part of an organization on GitHub Enterprise Cloud. \\n**Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details."},"members_can_create_pages":{"type":"boolean","description":"Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.","default":true},"members_can_create_public_pages":{"type":"boolean","description":"Whether organization members can create public GitHub Pages sites. Existing published sites will not be impacted.","default":true},"members_can_create_private_pages":{"type":"boolean","description":"Whether organization members can create private GitHub Pages sites. Existing published sites will not be impacted.","default":true},"members_can_fork_private_repositories":{"type":"boolean","description":"Whether organization members can fork private organization repositories.","default":false},"web_commit_signoff_required":{"type":"boolean","description":"Whether contributors to organization repositories are required to sign off on commits they make through GitHub\'s web interface.","default":false},"blog":{"type":"string","examples":["\\"http:\\/\\/github.blog\\""]},"advanced_security_enabled_for_new_repositories":{"type":"boolean","description":"Whether GitHub Advanced Security is automatically enabled for new repositories.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request."},"dependabot_alerts_enabled_for_new_repositories":{"type":"boolean","description":"Whether Dependabot alerts is automatically enabled for new repositories.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request."},"dependabot_security_updates_enabled_for_new_repositories":{"type":"boolean","description":"Whether Dependabot security updates is automatically enabled for new repositories.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request."},"dependency_graph_enabled_for_new_repositories":{"type":"boolean","description":"Whether dependency graph is automatically enabled for new repositories.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request."},"secret_scanning_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning is automatically enabled for new repositories.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request."},"secret_scanning_push_protection_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning push protection is automatically enabled for new repositories.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request."},"secret_scanning_push_protection_custom_link_enabled":{"type":"boolean","description":"Whether a custom link is shown to contributors who are blocked from pushing a secret by push protection."},"secret_scanning_push_protection_custom_link":{"type":"string","description":"If `secret_scanning_push_protection_custom_link_enabled` is true, the URL that will be displayed to contributors who are blocked from pushing a secret."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Billing email address. This address is not publicized.
     */
    public ?string $billing_email;
    /**
     * The company name.
     */
    public ?string $company;
    /**
     * The publicly visible email address.
     */
    public ?string $email;
    /**
     * The Twitter username of the company.
     */
    public ?string $twitter_username;
    /**
     * The location.
     */
    public ?string $location;
    /**
     * The shorthand name of the company.
     */
    public ?string $name;
    /**
     * The description of the company.
     */
    public ?string $description;
    /**
     * Whether an organization can use organization projects.
     */
    public ?bool $has_organization_projects;
    /**
     * Whether repositories that belong to the organization can use repository projects.
     */
    public ?bool $has_repository_projects;
    /**
     * Default permission level members have for organization repositories.
     */
    public ?string $default_repository_permission;
    /**
     * Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.
     */
    public ?bool $members_can_create_repositories;
    /**
     * Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     */
    public ?bool $members_can_create_internal_repositories;
    /**
     * Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     */
    public ?bool $members_can_create_private_repositories;
    /**
     * Whether organization members can create public repositories, which are visible to anyone. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     */
    public ?bool $members_can_create_public_repositories;
    /**
     * Specifies which types of repositories non-admin organization members can create. `private` is only available to repositories that are part of an organization on GitHub Enterprise Cloud.
     * *Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details.
     */
    public ?string $members_allowed_repository_creation_type;
    /**
     * Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.
     */
    public ?bool $members_can_create_pages;
    /**
     * Whether organization members can create public GitHub Pages sites. Existing published sites will not be impacted.
     */
    public ?bool $members_can_create_public_pages;
    /**
     * Whether organization members can create private GitHub Pages sites. Existing published sites will not be impacted.
     */
    public ?bool $members_can_create_private_pages;
    /**
     * Whether organization members can fork private organization repositories.
     */
    public ?bool $members_can_fork_private_repositories;
    /**
     * Whether contributors to organization repositories are required to sign off on commits they make through GitHub's web interface.
     */
    public ?bool $web_commit_signoff_required;
    public ?string $blog;
    /**
     * Whether GitHub Advanced Security is automatically enabled for new repositories.

    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
     */
    public ?bool $advanced_security_enabled_for_new_repositories;
    /**
     * Whether Dependabot alerts is automatically enabled for new repositories.

    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
     */
    public ?bool $dependabot_alerts_enabled_for_new_repositories;
    /**
     * Whether Dependabot security updates is automatically enabled for new repositories.

    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
     */
    public ?bool $dependabot_security_updates_enabled_for_new_repositories;
    /**
     * Whether dependency graph is automatically enabled for new repositories.

    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
     */
    public ?bool $dependency_graph_enabled_for_new_repositories;
    /**
     * Whether secret scanning is automatically enabled for new repositories.

    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
     */
    public ?bool $secret_scanning_enabled_for_new_repositories;
    /**
     * Whether secret scanning push protection is automatically enabled for new repositories.

    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
     */
    public ?bool $secret_scanning_push_protection_enabled_for_new_repositories;
    /**
     * Whether a custom link is shown to contributors who are blocked from pushing a secret by push protection.
     */
    public ?bool $secret_scanning_push_protection_custom_link_enabled;
    /**
     * If `secret_scanning_push_protection_custom_link_enabled` is true, the URL that will be displayed to contributors who are blocked from pushing a secret.
     */
    public ?string $secret_scanning_push_protection_custom_link;

    public function __construct(string $billing_email, string $company, string $email, string $twitter_username, string $location, string $name, string $description, bool $has_organization_projects, bool $has_repository_projects, string $default_repository_permission, bool $members_can_create_repositories, bool $members_can_create_internal_repositories, bool $members_can_create_private_repositories, bool $members_can_create_public_repositories, string $members_allowed_repository_creation_type, bool $members_can_create_pages, bool $members_can_create_public_pages, bool $members_can_create_private_pages, bool $members_can_fork_private_repositories, bool $web_commit_signoff_required, string $blog, bool $advanced_security_enabled_for_new_repositories, bool $dependabot_alerts_enabled_for_new_repositories, bool $dependabot_security_updates_enabled_for_new_repositories, bool $dependency_graph_enabled_for_new_repositories, bool $secret_scanning_enabled_for_new_repositories, bool $secret_scanning_push_protection_enabled_for_new_repositories, bool $secret_scanning_push_protection_custom_link_enabled, string $secret_scanning_push_protection_custom_link)
    {
        $this->billing_email                                                = $billing_email;
        $this->company                                                      = $company;
        $this->email                                                        = $email;
        $this->twitter_username                                             = $twitter_username;
        $this->location                                                     = $location;
        $this->name                                                         = $name;
        $this->description                                                  = $description;
        $this->has_organization_projects                                    = $has_organization_projects;
        $this->has_repository_projects                                      = $has_repository_projects;
        $this->default_repository_permission                                = $default_repository_permission;
        $this->members_can_create_repositories                              = $members_can_create_repositories;
        $this->members_can_create_internal_repositories                     = $members_can_create_internal_repositories;
        $this->members_can_create_private_repositories                      = $members_can_create_private_repositories;
        $this->members_can_create_public_repositories                       = $members_can_create_public_repositories;
        $this->members_allowed_repository_creation_type                     = $members_allowed_repository_creation_type;
        $this->members_can_create_pages                                     = $members_can_create_pages;
        $this->members_can_create_public_pages                              = $members_can_create_public_pages;
        $this->members_can_create_private_pages                             = $members_can_create_private_pages;
        $this->members_can_fork_private_repositories                        = $members_can_fork_private_repositories;
        $this->web_commit_signoff_required                                  = $web_commit_signoff_required;
        $this->blog                                                         = $blog;
        $this->advanced_security_enabled_for_new_repositories               = $advanced_security_enabled_for_new_repositories;
        $this->dependabot_alerts_enabled_for_new_repositories               = $dependabot_alerts_enabled_for_new_repositories;
        $this->dependabot_security_updates_enabled_for_new_repositories     = $dependabot_security_updates_enabled_for_new_repositories;
        $this->dependency_graph_enabled_for_new_repositories                = $dependency_graph_enabled_for_new_repositories;
        $this->secret_scanning_enabled_for_new_repositories                 = $secret_scanning_enabled_for_new_repositories;
        $this->secret_scanning_push_protection_enabled_for_new_repositories = $secret_scanning_push_protection_enabled_for_new_repositories;
        $this->secret_scanning_push_protection_custom_link_enabled          = $secret_scanning_push_protection_custom_link_enabled;
        $this->secret_scanning_push_protection_custom_link                  = $secret_scanning_push_protection_custom_link;
    }
}
