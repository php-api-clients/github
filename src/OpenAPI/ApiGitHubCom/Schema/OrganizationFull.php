<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrganizationFull
{
    public const SCHEMA_JSON = '{"title":"Organization Full","required":["login","url","id","node_id","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description","html_url","has_organization_projects","has_repository_projects","public_repos","public_gists","followers","following","type","created_at","updated_at"],"type":"object","properties":{"login":{"type":"string","examples":["github"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDEyOk9yZ2FuaXphdGlvbjE="]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/repos"]},"events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/events"]},"hooks_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/hooks"]},"issues_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/issues"]},"members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}"]},"public_members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}"]},"avatar_url":{"type":"string","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"description":{"type":["string","null"],"examples":["A great organization"]},"name":{"type":"string","examples":["github"]},"company":{"type":"string","examples":["GitHub"]},"blog":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/blog"]},"location":{"type":"string","examples":["San Francisco"]},"email":{"type":"string","format":"email","examples":["octocat@github.com"]},"twitter_username":{"type":["string","null"],"examples":["github"]},"is_verified":{"type":"boolean","examples":[true]},"has_organization_projects":{"type":"boolean","examples":[true]},"has_repository_projects":{"type":"boolean","examples":[true]},"public_repos":{"type":"integer","examples":[2]},"public_gists":{"type":"integer","examples":[1]},"followers":{"type":"integer","examples":[20]},"following":{"type":"integer","examples":[0]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"created_at":{"type":"string","format":"date-time","examples":["2008-01-14T04:33:35Z"]},"type":{"type":"string","examples":["Organization"]},"total_private_repos":{"type":"integer","examples":[100]},"owned_private_repos":{"type":"integer","examples":[100]},"private_gists":{"type":["integer","null"],"examples":[81]},"disk_usage":{"type":["integer","null"],"examples":[10000]},"collaborators":{"type":["integer","null"],"examples":[8]},"billing_email":{"type":["string","null"],"format":"email","examples":["org@example.com"]},"plan":{"required":["name","space","private_repos"],"type":"object","properties":{"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"},"filled_seats":{"type":"integer"},"seats":{"type":"integer"}}},"default_repository_permission":{"type":["string","null"]},"members_can_create_repositories":{"type":["boolean","null"],"examples":[true]},"two_factor_requirement_enabled":{"type":["boolean","null"],"examples":[true]},"members_allowed_repository_creation_type":{"type":"string","examples":["all"]},"members_can_create_public_repositories":{"type":"boolean","examples":[true]},"members_can_create_private_repositories":{"type":"boolean","examples":[true]},"members_can_create_internal_repositories":{"type":"boolean","examples":[true]},"members_can_create_pages":{"type":"boolean","examples":[true]},"members_can_create_public_pages":{"type":"boolean","examples":[true]},"members_can_create_private_pages":{"type":"boolean","examples":[true]},"members_can_fork_private_repositories":{"type":["boolean","null"],"examples":[false]},"web_commit_signoff_required":{"type":"boolean","examples":[false]},"updated_at":{"type":"string","format":"date-time"},"advanced_security_enabled_for_new_repositories":{"type":"boolean","description":"Whether GitHub Advanced Security is enabled for new repositories and repositories transferred to this organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.","examples":[false]},"dependabot_alerts_enabled_for_new_repositories":{"type":"boolean","description":"Whether GitHub Advanced Security is automatically enabled for new repositories and repositories transferred to\\nthis organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.","examples":[false]},"dependabot_security_updates_enabled_for_new_repositories":{"type":"boolean","description":"Whether dependabot security updates are automatically enabled for new repositories and repositories transferred\\nto this organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.","examples":[false]},"dependency_graph_enabled_for_new_repositories":{"type":"boolean","description":"Whether dependency graph is automatically enabled for new repositories and repositories transferred to this\\norganization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.","examples":[false]},"secret_scanning_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning is automatically enabled for new repositories and repositories transferred to this\\norganization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.","examples":[false]},"secret_scanning_push_protection_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning push protection is automatically enabled for new repositories and repositories\\ntransferred to this organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.","examples":[false]},"secret_scanning_push_protection_custom_link_enabled":{"type":"boolean","description":"Whether a custom link is shown to contributors who are blocked from pushing a secret by push protection.","examples":[false]},"secret_scanning_push_protection_custom_link":{"type":["string","null"],"description":"An optional URL string to display to contributors who are blocked from pushing a secret.","examples":["https:\\/\\/github.com\\/test-org\\/test-repo\\/blob\\/main\\/README.md"]}},"description":"Organization Full"}';
    public const SCHEMA_EXAMPLE = '{"login":"github","id":1,"node_id":"MDEyOk9yZ2FuaXphdGlvbjE=","url":"https:\\/\\/api.github.com\\/orgs\\/github","repos_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/repos","events_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/events","hooks_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/hooks","issues_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/issues","members_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}","public_members_url":"https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","description":"A great organization","name":"github","company":"GitHub","blog":"https:\\/\\/github.com\\/blog","location":"San Francisco","email":"octocat@github.com","twitter_username":"github","is_verified":true,"has_organization_projects":true,"has_repository_projects":true,"public_repos":2,"public_gists":1,"followers":20,"following":0,"html_url":"https:\\/\\/github.com\\/octocat","created_at":"2008-01-14T04:33:35Z","type":"Organization","total_private_repos":100,"owned_private_repos":100,"private_gists":81,"disk_usage":10000,"collaborators":8,"billing_email":"org@example.com","members_can_create_repositories":true,"two_factor_requirement_enabled":true,"members_allowed_repository_creation_type":"all","members_can_create_public_repositories":true,"members_can_create_private_repositories":true,"members_can_create_internal_repositories":true,"members_can_create_pages":true,"members_can_create_public_pages":true,"members_can_create_private_pages":true,"members_can_fork_private_repositories":false,"web_commit_signoff_required":false,"advanced_security_enabled_for_new_repositories":false,"dependabot_alerts_enabled_for_new_repositories":false,"dependabot_security_updates_enabled_for_new_repositories":false,"dependency_graph_enabled_for_new_repositories":false,"secret_scanning_enabled_for_new_repositories":false,"secret_scanning_push_protection_enabled_for_new_repositories":false,"secret_scanning_push_protection_custom_link_enabled":false,"secret_scanning_push_protection_custom_link":"https:\\/\\/github.com\\/test-org\\/test-repo\\/blob\\/main\\/README.md"}';
    public const SCHEMA_TITLE = 'Organization Full';
    public const SCHEMA_DESCRIPTION = 'Organization Full';
    public readonly string $login;
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $url;
    public readonly string $repos_url;
    public readonly string $events_url;
    public readonly string $hooks_url;
    public readonly string $issues_url;
    public readonly string $members_url;
    public readonly string $public_members_url;
    public readonly string $avatar_url;
    public readonly ?string $description;
    public readonly ?string $name;
    public readonly ?string $company;
    public readonly ?string $blog;
    public readonly ?string $location;
    public readonly ?string $email;
    public readonly ?string $twitter_username;
    public readonly ?bool $is_verified;
    public readonly bool $has_organization_projects;
    public readonly bool $has_repository_projects;
    public readonly int $public_repos;
    public readonly int $public_gists;
    public readonly int $followers;
    public readonly int $following;
    public readonly string $html_url;
    public readonly string $created_at;
    public readonly string $type;
    public readonly ?int $total_private_repos;
    public readonly ?int $owned_private_repos;
    public readonly ?int $private_gists;
    public readonly ?int $disk_usage;
    public readonly ?int $collaborators;
    public readonly ?string $billing_email;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull\Plan $plan;
    public readonly ?string $default_repository_permission;
    public readonly ?bool $members_can_create_repositories;
    public readonly ?bool $two_factor_requirement_enabled;
    public readonly ?string $members_allowed_repository_creation_type;
    public readonly ?bool $members_can_create_public_repositories;
    public readonly ?bool $members_can_create_private_repositories;
    public readonly ?bool $members_can_create_internal_repositories;
    public readonly ?bool $members_can_create_pages;
    public readonly ?bool $members_can_create_public_pages;
    public readonly ?bool $members_can_create_private_pages;
    public readonly ?bool $members_can_fork_private_repositories;
    public readonly ?bool $web_commit_signoff_required;
    public readonly string $updated_at;
    /**
    * Whether GitHub Advanced Security is enabled for new repositories and repositories transferred to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    public readonly ?bool $advanced_security_enabled_for_new_repositories;
    /**
    * Whether GitHub Advanced Security is automatically enabled for new repositories and repositories transferred to
    this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    public readonly ?bool $dependabot_alerts_enabled_for_new_repositories;
    /**
    * Whether dependabot security updates are automatically enabled for new repositories and repositories transferred
    to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    public readonly ?bool $dependabot_security_updates_enabled_for_new_repositories;
    /**
    * Whether dependency graph is automatically enabled for new repositories and repositories transferred to this
    organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    public readonly ?bool $dependency_graph_enabled_for_new_repositories;
    /**
    * Whether secret scanning is automatically enabled for new repositories and repositories transferred to this
    organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    public readonly ?bool $secret_scanning_enabled_for_new_repositories;
    /**
    * Whether secret scanning push protection is automatically enabled for new repositories and repositories
    transferred to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    public readonly ?bool $secret_scanning_push_protection_enabled_for_new_repositories;
    /**
     * Whether a custom link is shown to contributors who are blocked from pushing a secret by push protection.
     */
    public readonly ?bool $secret_scanning_push_protection_custom_link_enabled;
    /**
     * An optional URL string to display to contributors who are blocked from pushing a secret.
     */
    public readonly ?string $secret_scanning_push_protection_custom_link;
    public function __construct(string $login, int $id, string $node_id, string $url, string $repos_url, string $events_url, string $hooks_url, string $issues_url, string $members_url, string $public_members_url, string $avatar_url, string $description, string $name, string $company, string $blog, string $location, string $email, string $twitter_username, bool $is_verified, bool $has_organization_projects, bool $has_repository_projects, int $public_repos, int $public_gists, int $followers, int $following, string $html_url, string $created_at, string $type, int $total_private_repos, int $owned_private_repos, int $private_gists, int $disk_usage, int $collaborators, string $billing_email, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull\Plan $plan, string $default_repository_permission, bool $members_can_create_repositories, bool $two_factor_requirement_enabled, string $members_allowed_repository_creation_type, bool $members_can_create_public_repositories, bool $members_can_create_private_repositories, bool $members_can_create_internal_repositories, bool $members_can_create_pages, bool $members_can_create_public_pages, bool $members_can_create_private_pages, bool $members_can_fork_private_repositories, bool $web_commit_signoff_required, string $updated_at, bool $advanced_security_enabled_for_new_repositories, bool $dependabot_alerts_enabled_for_new_repositories, bool $dependabot_security_updates_enabled_for_new_repositories, bool $dependency_graph_enabled_for_new_repositories, bool $secret_scanning_enabled_for_new_repositories, bool $secret_scanning_push_protection_enabled_for_new_repositories, bool $secret_scanning_push_protection_custom_link_enabled, string $secret_scanning_push_protection_custom_link)
    {
        $this->login = $login;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->repos_url = $repos_url;
        $this->events_url = $events_url;
        $this->hooks_url = $hooks_url;
        $this->issues_url = $issues_url;
        $this->members_url = $members_url;
        $this->public_members_url = $public_members_url;
        $this->avatar_url = $avatar_url;
        $this->description = $description;
        $this->name = $name;
        $this->company = $company;
        $this->blog = $blog;
        $this->location = $location;
        $this->email = $email;
        $this->twitter_username = $twitter_username;
        $this->is_verified = $is_verified;
        $this->has_organization_projects = $has_organization_projects;
        $this->has_repository_projects = $has_repository_projects;
        $this->public_repos = $public_repos;
        $this->public_gists = $public_gists;
        $this->followers = $followers;
        $this->following = $following;
        $this->html_url = $html_url;
        $this->created_at = $created_at;
        $this->type = $type;
        $this->total_private_repos = $total_private_repos;
        $this->owned_private_repos = $owned_private_repos;
        $this->private_gists = $private_gists;
        $this->disk_usage = $disk_usage;
        $this->collaborators = $collaborators;
        $this->billing_email = $billing_email;
        $this->plan = $plan;
        $this->default_repository_permission = $default_repository_permission;
        $this->members_can_create_repositories = $members_can_create_repositories;
        $this->two_factor_requirement_enabled = $two_factor_requirement_enabled;
        $this->members_allowed_repository_creation_type = $members_allowed_repository_creation_type;
        $this->members_can_create_public_repositories = $members_can_create_public_repositories;
        $this->members_can_create_private_repositories = $members_can_create_private_repositories;
        $this->members_can_create_internal_repositories = $members_can_create_internal_repositories;
        $this->members_can_create_pages = $members_can_create_pages;
        $this->members_can_create_public_pages = $members_can_create_public_pages;
        $this->members_can_create_private_pages = $members_can_create_private_pages;
        $this->members_can_fork_private_repositories = $members_can_fork_private_repositories;
        $this->web_commit_signoff_required = $web_commit_signoff_required;
        $this->updated_at = $updated_at;
        $this->advanced_security_enabled_for_new_repositories = $advanced_security_enabled_for_new_repositories;
        $this->dependabot_alerts_enabled_for_new_repositories = $dependabot_alerts_enabled_for_new_repositories;
        $this->dependabot_security_updates_enabled_for_new_repositories = $dependabot_security_updates_enabled_for_new_repositories;
        $this->dependency_graph_enabled_for_new_repositories = $dependency_graph_enabled_for_new_repositories;
        $this->secret_scanning_enabled_for_new_repositories = $secret_scanning_enabled_for_new_repositories;
        $this->secret_scanning_push_protection_enabled_for_new_repositories = $secret_scanning_push_protection_enabled_for_new_repositories;
        $this->secret_scanning_push_protection_custom_link_enabled = $secret_scanning_push_protection_custom_link_enabled;
        $this->secret_scanning_push_protection_custom_link = $secret_scanning_push_protection_custom_link;
    }
}
