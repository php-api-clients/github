<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Orgs\Update\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "billing_email": {
            "type": "string",
            "description": "Billing email address. This address is not publicized."
        },
        "company": {
            "type": "string",
            "description": "The company name."
        },
        "email": {
            "type": "string",
            "description": "The publicly visible email address."
        },
        "twitter_username": {
            "type": "string",
            "description": "The Twitter username of the company."
        },
        "location": {
            "type": "string",
            "description": "The location."
        },
        "name": {
            "type": "string",
            "description": "The shorthand name of the company."
        },
        "description": {
            "type": "string",
            "description": "The description of the company. The maximum size is 160 characters."
        },
        "has_organization_projects": {
            "type": "boolean",
            "description": "Whether an organization can use organization projects."
        },
        "has_repository_projects": {
            "type": "boolean",
            "description": "Whether repositories that belong to the organization can use repository projects."
        },
        "default_repository_permission": {
            "enum": [
                "read",
                "write",
                "admin",
                "none"
            ],
            "type": "string",
            "description": "Default permission level members have for organization repositories.",
            "default": "read"
        },
        "members_can_create_repositories": {
            "type": "boolean",
            "description": "Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.",
            "default": true
        },
        "members_can_create_internal_repositories": {
            "type": "boolean",
            "description": "Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."
        },
        "members_can_create_private_repositories": {
            "type": "boolean",
            "description": "Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."
        },
        "members_can_create_public_repositories": {
            "type": "boolean",
            "description": "Whether organization members can create public repositories, which are visible to anyone. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."
        },
        "members_allowed_repository_creation_type": {
            "enum": [
                "all",
                "private",
                "none"
            ],
            "type": "string",
            "description": "Specifies which types of repositories non-admin organization members can create. `private` is only available to repositories that are part of an organization on GitHub Enterprise Cloud. \\n**Note:** This parameter is closing down and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details."
        },
        "members_can_create_pages": {
            "type": "boolean",
            "description": "Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.",
            "default": true
        },
        "members_can_create_public_pages": {
            "type": "boolean",
            "description": "Whether organization members can create public GitHub Pages sites. Existing published sites will not be impacted.",
            "default": true
        },
        "members_can_create_private_pages": {
            "type": "boolean",
            "description": "Whether organization members can create private GitHub Pages sites. Existing published sites will not be impacted.",
            "default": true
        },
        "members_can_fork_private_repositories": {
            "type": "boolean",
            "description": "Whether organization members can fork private organization repositories.",
            "default": false
        },
        "web_commit_signoff_required": {
            "type": "boolean",
            "description": "Whether contributors to organization repositories are required to sign off on commits they make through GitHub\'s web interface.",
            "default": false
        },
        "blog": {
            "type": "string",
            "examples": [
                "\\"http:\\/\\/github.blog\\""
            ]
        },
        "advanced_security_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "**Endpoint closing down notice.** Please use [code security configurations](https:\\/\\/docs.github.com\\/rest\\/code-security\\/configurations) instead.\\n\\nWhether GitHub Advanced Security is automatically enabled for new repositories and repositories transferred to this organization.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request.",
            "deprecated": true
        },
        "dependabot_alerts_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "**Endpoint closing down notice.** Please use [code security configurations](https:\\/\\/docs.github.com\\/rest\\/code-security\\/configurations) instead.\\n\\nWhether Dependabot alerts are automatically enabled for new repositories and repositories transferred to this organization.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request.",
            "deprecated": true
        },
        "dependabot_security_updates_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "**Endpoint closing down notice.** Please use [code security configurations](https:\\/\\/docs.github.com\\/rest\\/code-security\\/configurations) instead.\\n\\nWhether Dependabot security updates are automatically enabled for new repositories and repositories transferred to this organization.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request.",
            "deprecated": true
        },
        "dependency_graph_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "**Endpoint closing down notice.** Please use [code security configurations](https:\\/\\/docs.github.com\\/rest\\/code-security\\/configurations) instead.\\n\\nWhether dependency graph is automatically enabled for new repositories and repositories transferred to this organization.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request.",
            "deprecated": true
        },
        "secret_scanning_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "**Endpoint closing down notice.** Please use [code security configurations](https:\\/\\/docs.github.com\\/rest\\/code-security\\/configurations) instead.\\n\\nWhether secret scanning is automatically enabled for new repositories and repositories transferred to this organization.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request.",
            "deprecated": true
        },
        "secret_scanning_push_protection_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "**Endpoint closing down notice.** Please use [code security configurations](https:\\/\\/docs.github.com\\/rest\\/code-security\\/configurations) instead.\\n\\nWhether secret scanning push protection is automatically enabled for new repositories and repositories transferred to this organization.\\n\\nTo use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see \\"[Managing security managers in your organization](https:\\/\\/docs.github.com\\/organizations\\/managing-peoples-access-to-your-organization-with-roles\\/managing-security-managers-in-your-organization).\\"\\n\\nYou can check which security and analysis features are currently enabled by using a `GET \\/orgs\\/{org}` request.",
            "deprecated": true
        },
        "secret_scanning_push_protection_custom_link_enabled": {
            "type": "boolean",
            "description": "Whether a custom link is shown to contributors who are blocked from pushing a secret by push protection."
        },
        "secret_scanning_push_protection_custom_link": {
            "type": "string",
            "description": "If `secret_scanning_push_protection_custom_link_enabled` is true, the URL that will be displayed to contributors who are blocked from pushing a secret."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "billing_email": "generated",
    "company": "generated",
    "email": "generated",
    "twitter_username": "generated",
    "location": "generated",
    "name": "generated",
    "description": "generated",
    "has_organization_projects": false,
    "has_repository_projects": false,
    "default_repository_permission": "read",
    "members_can_create_repositories": false,
    "members_can_create_internal_repositories": false,
    "members_can_create_private_repositories": false,
    "members_can_create_public_repositories": false,
    "members_allowed_repository_creation_type": "none",
    "members_can_create_pages": false,
    "members_can_create_public_pages": false,
    "members_can_create_private_pages": false,
    "members_can_fork_private_repositories": false,
    "web_commit_signoff_required": false,
    "blog": "\\"http:\\/\\/github.blog\\"",
    "advanced_security_enabled_for_new_repositories": false,
    "dependabot_alerts_enabled_for_new_repositories": false,
    "dependabot_security_updates_enabled_for_new_repositories": false,
    "dependency_graph_enabled_for_new_repositories": false,
    "secret_scanning_enabled_for_new_repositories": false,
    "secret_scanning_push_protection_enabled_for_new_repositories": false,
    "secret_scanning_push_protection_custom_link_enabled": false,
    "secret_scanning_push_protection_custom_link": "generated"
}';

    /**
     * billingEmail: Billing email address. This address is not publicized.
     * company: The company name.
     * email: The publicly visible email address.
     * twitterUsername: The Twitter username of the company.
     * location: The location.
     * name: The shorthand name of the company.
     * description: The description of the company. The maximum size is 160 characters.
     * hasOrganizationProjects: Whether an organization can use organization projects.
     * hasRepositoryProjects: Whether repositories that belong to the organization can use repository projects.
     * defaultRepositoryPermission: Default permission level members have for organization repositories.
     * membersCanCreateRepositories: Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.
     * membersCanCreateInternalRepositories: Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     * membersCanCreatePrivateRepositories: Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     * membersCanCreatePublicRepositories: Whether organization members can create public repositories, which are visible to anyone. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     * membersAllowedRepositoryCreationType: Specifies which types of repositories non-admin organization members can create. `private` is only available to repositories that are part of an organization on GitHub Enterprise Cloud.
     * *Note:** This parameter is closing down and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details.
     * membersCanCreatePages: Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.
     * membersCanCreatePublicPages: Whether organization members can create public GitHub Pages sites. Existing published sites will not be impacted.
     * membersCanCreatePrivatePages: Whether organization members can create private GitHub Pages sites. Existing published sites will not be impacted.
     * membersCanForkPrivateRepositories: Whether organization members can fork private organization repositories.
     * webCommitSignoffRequired: Whether contributors to organization repositories are required to sign off on commits they make through GitHub's web interface.
     * advancedSecurityEnabledForNewRepositories: **Endpoint closing down notice.** Please use [code security configurations](https://docs.github.com/rest/code-security/configurations) instead.

    Whether GitHub Advanced Security is automatically enabled for new repositories and repositories transferred to this organization.

    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
     * dependabotAlertsEnabledForNewRepositories: **Endpoint closing down notice.** Please use [code security configurations](https://docs.github.com/rest/code-security/configurations) instead.

    Whether Dependabot alerts are automatically enabled for new repositories and repositories transferred to this organization.

    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
     * dependabotSecurityUpdatesEnabledForNewRepositories: **Endpoint closing down notice.** Please use [code security configurations](https://docs.github.com/rest/code-security/configurations) instead.

    Whether Dependabot security updates are automatically enabled for new repositories and repositories transferred to this organization.

    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
     * dependencyGraphEnabledForNewRepositories: **Endpoint closing down notice.** Please use [code security configurations](https://docs.github.com/rest/code-security/configurations) instead.

    Whether dependency graph is automatically enabled for new repositories and repositories transferred to this organization.

    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
     * secretScanningEnabledForNewRepositories: **Endpoint closing down notice.** Please use [code security configurations](https://docs.github.com/rest/code-security/configurations) instead.

    Whether secret scanning is automatically enabled for new repositories and repositories transferred to this organization.

    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
     * secretScanningPushProtectionEnabledForNewRepositories: **Endpoint closing down notice.** Please use [code security configurations](https://docs.github.com/rest/code-security/configurations) instead.

    Whether secret scanning push protection is automatically enabled for new repositories and repositories transferred to this organization.

    To use this parameter, you must have admin permissions for the repository or be an owner or security manager for the organization that owns the repository. For more information, see "[Managing security managers in your organization](https://docs.github.com/organizations/managing-peoples-access-to-your-organization-with-roles/managing-security-managers-in-your-organization)."

    You can check which security and analysis features are currently enabled by using a `GET /orgs/{org}` request.
     * secretScanningPushProtectionCustomLinkEnabled: Whether a custom link is shown to contributors who are blocked from pushing a secret by push protection.
     * secretScanningPushProtectionCustomLink: If `secret_scanning_push_protection_custom_link_enabled` is true, the URL that will be displayed to contributors who are blocked from pushing a secret.
     */
    public function __construct(#[MapFrom('billing_email')]
    public string|null $billingEmail, public string|null $company, public string|null $email, #[MapFrom('twitter_username')]
    public string|null $twitterUsername, public string|null $location, public string|null $name, public string|null $description, #[MapFrom('has_organization_projects')]
    public bool|null $hasOrganizationProjects, #[MapFrom('has_repository_projects')]
    public bool|null $hasRepositoryProjects, #[MapFrom('default_repository_permission')]
    public string|null $defaultRepositoryPermission, #[MapFrom('members_can_create_repositories')]
    public bool|null $membersCanCreateRepositories, #[MapFrom('members_can_create_internal_repositories')]
    public bool|null $membersCanCreateInternalRepositories, #[MapFrom('members_can_create_private_repositories')]
    public bool|null $membersCanCreatePrivateRepositories, #[MapFrom('members_can_create_public_repositories')]
    public bool|null $membersCanCreatePublicRepositories, #[MapFrom('members_allowed_repository_creation_type')]
    public string|null $membersAllowedRepositoryCreationType, #[MapFrom('members_can_create_pages')]
    public bool|null $membersCanCreatePages, #[MapFrom('members_can_create_public_pages')]
    public bool|null $membersCanCreatePublicPages, #[MapFrom('members_can_create_private_pages')]
    public bool|null $membersCanCreatePrivatePages, #[MapFrom('members_can_fork_private_repositories')]
    public bool|null $membersCanForkPrivateRepositories, #[MapFrom('web_commit_signoff_required')]
    public bool|null $webCommitSignoffRequired, public string|null $blog, #[MapFrom('advanced_security_enabled_for_new_repositories')]
    public bool|null $advancedSecurityEnabledForNewRepositories, #[MapFrom('dependabot_alerts_enabled_for_new_repositories')]
    public bool|null $dependabotAlertsEnabledForNewRepositories, #[MapFrom('dependabot_security_updates_enabled_for_new_repositories')]
    public bool|null $dependabotSecurityUpdatesEnabledForNewRepositories, #[MapFrom('dependency_graph_enabled_for_new_repositories')]
    public bool|null $dependencyGraphEnabledForNewRepositories, #[MapFrom('secret_scanning_enabled_for_new_repositories')]
    public bool|null $secretScanningEnabledForNewRepositories, #[MapFrom('secret_scanning_push_protection_enabled_for_new_repositories')]
    public bool|null $secretScanningPushProtectionEnabledForNewRepositories, #[MapFrom('secret_scanning_push_protection_custom_link_enabled')]
    public bool|null $secretScanningPushProtectionCustomLinkEnabled, #[MapFrom('secret_scanning_push_protection_custom_link')]
    public string|null $secretScanningPushProtectionCustomLink,)
    {
    }
}
