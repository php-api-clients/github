<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrganizationFull
{
    public const SCHEMA_JSON = '{"title":"Organization Full","required":["login","url","id","node_id","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description","html_url","has_organization_projects","has_repository_projects","public_repos","public_gists","followers","following","type","created_at","updated_at"],"type":"object","properties":{"login":{"type":"string","examples":["github"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDEyOk9yZ2FuaXphdGlvbjE="]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/repos"]},"events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/events"]},"hooks_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/hooks"]},"issues_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/issues"]},"members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}"]},"public_members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}"]},"avatar_url":{"type":"string","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"description":{"type":["string","null"],"examples":["A great organization"]},"name":{"type":"string","examples":["github"]},"company":{"type":"string","examples":["GitHub"]},"blog":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/blog"]},"location":{"type":"string","examples":["San Francisco"]},"email":{"type":"string","format":"email","examples":["octocat@github.com"]},"twitter_username":{"type":["string","null"],"examples":["github"]},"is_verified":{"type":"boolean","examples":[true]},"has_organization_projects":{"type":"boolean","examples":[true]},"has_repository_projects":{"type":"boolean","examples":[true]},"public_repos":{"type":"integer","examples":[2]},"public_gists":{"type":"integer","examples":[1]},"followers":{"type":"integer","examples":[20]},"following":{"type":"integer","examples":[0]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"created_at":{"type":"string","format":"date-time","examples":["2008-01-14T04:33:35Z"]},"type":{"type":"string","examples":["Organization"]},"total_private_repos":{"type":"integer","examples":[100]},"owned_private_repos":{"type":"integer","examples":[100]},"private_gists":{"type":["integer","null"],"examples":[81]},"disk_usage":{"type":["integer","null"],"examples":[10000]},"collaborators":{"type":["integer","null"],"examples":[8]},"billing_email":{"type":["string","null"],"format":"email","examples":["org@example.com"]},"plan":{"required":["name","space","private_repos"],"type":"object","properties":{"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"},"filled_seats":{"type":"integer"},"seats":{"type":"integer"}}},"default_repository_permission":{"type":["string","null"]},"members_can_create_repositories":{"type":["boolean","null"],"examples":[true]},"two_factor_requirement_enabled":{"type":["boolean","null"],"examples":[true]},"members_allowed_repository_creation_type":{"type":"string","examples":["all"]},"members_can_create_public_repositories":{"type":"boolean","examples":[true]},"members_can_create_private_repositories":{"type":"boolean","examples":[true]},"members_can_create_internal_repositories":{"type":"boolean","examples":[true]},"members_can_create_pages":{"type":"boolean","examples":[true]},"members_can_create_public_pages":{"type":"boolean","examples":[true]},"members_can_create_private_pages":{"type":"boolean","examples":[true]},"members_can_fork_private_repositories":{"type":["boolean","null"],"examples":[false]},"web_commit_signoff_required":{"type":"boolean","examples":[false]},"updated_at":{"type":"string","format":"date-time"},"advanced_security_enabled_for_new_repositories":{"type":"boolean","description":"Whether GitHub Advanced Security is enabled for new repositories and repositories transferred to this organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.","examples":[false]},"dependabot_alerts_enabled_for_new_repositories":{"type":"boolean","description":"Whether GitHub Advanced Security is automatically enabled for new repositories and repositories transferred to\\nthis organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.","examples":[false]},"dependabot_security_updates_enabled_for_new_repositories":{"type":"boolean","description":"Whether dependabot security updates are automatically enabled for new repositories and repositories transferred\\nto this organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.","examples":[false]},"dependency_graph_enabled_for_new_repositories":{"type":"boolean","description":"Whether dependency graph is automatically enabled for new repositories and repositories transferred to this\\norganization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.","examples":[false]},"secret_scanning_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning is automatically enabled for new repositories and repositories transferred to this\\norganization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.","examples":[false]},"secret_scanning_push_protection_enabled_for_new_repositories":{"type":"boolean","description":"Whether secret scanning push protection is automatically enabled for new repositories and repositories\\ntransferred to this organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.","examples":[false]},"secret_scanning_push_protection_custom_link_enabled":{"type":"boolean","description":"Whether a custom link is shown to contributors who are blocked from pushing a secret by push protection.","examples":[false]},"secret_scanning_push_protection_custom_link":{"type":["string","null"],"description":"An optional URL string to display to contributors who are blocked from pushing a secret.","examples":["https:\\/\\/github.com\\/test-org\\/test-repo\\/blob\\/main\\/README.md"]}},"description":"Organization Full"}';
    public const SCHEMA_TITLE = 'Organization Full';
    public const SCHEMA_DESCRIPTION = 'Organization Full';
    private string $login;
    private int $id;
    private string $node_id;
    private string $url;
    private string $repos_url;
    private string $events_url;
    private string $hooks_url;
    private string $issues_url;
    private string $members_url;
    private string $public_members_url;
    private string $avatar_url;
    private ?string $description;
    private ?string $name = null;
    private ?string $company = null;
    private ?string $blog = null;
    private ?string $location = null;
    private ?string $email = null;
    private ?string $twitter_username = null;
    private ?bool $is_verified = null;
    private bool $has_organization_projects;
    private bool $has_repository_projects;
    private int $public_repos;
    private int $public_gists;
    private int $followers;
    private int $following;
    private string $html_url;
    private string $created_at;
    private string $type;
    private ?int $total_private_repos = null;
    private ?int $owned_private_repos = null;
    private ?int $private_gists = null;
    private ?int $disk_usage = null;
    private ?int $collaborators = null;
    private ?string $billing_email = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull\Plan::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull\Plan $plan = null;
    private ?string $default_repository_permission = null;
    private ?bool $members_can_create_repositories = null;
    private ?bool $two_factor_requirement_enabled = null;
    private ?string $members_allowed_repository_creation_type = null;
    private ?bool $members_can_create_public_repositories = null;
    private ?bool $members_can_create_private_repositories = null;
    private ?bool $members_can_create_internal_repositories = null;
    private ?bool $members_can_create_pages = null;
    private ?bool $members_can_create_public_pages = null;
    private ?bool $members_can_create_private_pages = null;
    private ?bool $members_can_fork_private_repositories = null;
    private ?bool $web_commit_signoff_required = null;
    private string $updated_at;
    /**
    * Whether GitHub Advanced Security is enabled for new repositories and repositories transferred to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    private ?bool $advanced_security_enabled_for_new_repositories = null;
    /**
    * Whether GitHub Advanced Security is automatically enabled for new repositories and repositories transferred to
    this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    private ?bool $dependabot_alerts_enabled_for_new_repositories = null;
    /**
    * Whether dependabot security updates are automatically enabled for new repositories and repositories transferred
    to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    private ?bool $dependabot_security_updates_enabled_for_new_repositories = null;
    /**
    * Whether dependency graph is automatically enabled for new repositories and repositories transferred to this
    organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    private ?bool $dependency_graph_enabled_for_new_repositories = null;
    /**
    * Whether secret scanning is automatically enabled for new repositories and repositories transferred to this
    organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    private ?bool $secret_scanning_enabled_for_new_repositories = null;
    /**
    * Whether secret scanning push protection is automatically enabled for new repositories and repositories
    transferred to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    private ?bool $secret_scanning_push_protection_enabled_for_new_repositories = null;
    /**
     * Whether a custom link is shown to contributors who are blocked from pushing a secret by push protection.
     */
    private ?bool $secret_scanning_push_protection_custom_link_enabled = null;
    /**
     * An optional URL string to display to contributors who are blocked from pushing a secret.
     */
    private ?string $secret_scanning_push_protection_custom_link = null;
    public function login() : string
    {
        return $this->login;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function repos_url() : string
    {
        return $this->repos_url;
    }
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function hooks_url() : string
    {
        return $this->hooks_url;
    }
    public function issues_url() : string
    {
        return $this->issues_url;
    }
    public function members_url() : string
    {
        return $this->members_url;
    }
    public function public_members_url() : string
    {
        return $this->public_members_url;
    }
    public function avatar_url() : string
    {
        return $this->avatar_url;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function company() : ?string
    {
        return $this->company;
    }
    public function blog() : ?string
    {
        return $this->blog;
    }
    public function location() : ?string
    {
        return $this->location;
    }
    public function email() : ?string
    {
        return $this->email;
    }
    public function twitter_username() : ?string
    {
        return $this->twitter_username;
    }
    public function is_verified() : ?bool
    {
        return $this->is_verified;
    }
    public function has_organization_projects() : bool
    {
        return $this->has_organization_projects;
    }
    public function has_repository_projects() : bool
    {
        return $this->has_repository_projects;
    }
    public function public_repos() : int
    {
        return $this->public_repos;
    }
    public function public_gists() : int
    {
        return $this->public_gists;
    }
    public function followers() : int
    {
        return $this->followers;
    }
    public function following() : int
    {
        return $this->following;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function total_private_repos() : ?int
    {
        return $this->total_private_repos;
    }
    public function owned_private_repos() : ?int
    {
        return $this->owned_private_repos;
    }
    public function private_gists() : ?int
    {
        return $this->private_gists;
    }
    public function disk_usage() : ?int
    {
        return $this->disk_usage;
    }
    public function collaborators() : ?int
    {
        return $this->collaborators;
    }
    public function billing_email() : ?string
    {
        return $this->billing_email;
    }
    public function plan() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationFull\Plan
    {
        return $this->plan;
    }
    public function default_repository_permission() : ?string
    {
        return $this->default_repository_permission;
    }
    public function members_can_create_repositories() : ?bool
    {
        return $this->members_can_create_repositories;
    }
    public function two_factor_requirement_enabled() : ?bool
    {
        return $this->two_factor_requirement_enabled;
    }
    public function members_allowed_repository_creation_type() : ?string
    {
        return $this->members_allowed_repository_creation_type;
    }
    public function members_can_create_public_repositories() : ?bool
    {
        return $this->members_can_create_public_repositories;
    }
    public function members_can_create_private_repositories() : ?bool
    {
        return $this->members_can_create_private_repositories;
    }
    public function members_can_create_internal_repositories() : ?bool
    {
        return $this->members_can_create_internal_repositories;
    }
    public function members_can_create_pages() : ?bool
    {
        return $this->members_can_create_pages;
    }
    public function members_can_create_public_pages() : ?bool
    {
        return $this->members_can_create_public_pages;
    }
    public function members_can_create_private_pages() : ?bool
    {
        return $this->members_can_create_private_pages;
    }
    public function members_can_fork_private_repositories() : ?bool
    {
        return $this->members_can_fork_private_repositories;
    }
    public function web_commit_signoff_required() : ?bool
    {
        return $this->web_commit_signoff_required;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
    * Whether GitHub Advanced Security is enabled for new repositories and repositories transferred to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    public function advanced_security_enabled_for_new_repositories() : ?bool
    {
        return $this->advanced_security_enabled_for_new_repositories;
    }
    /**
    * Whether GitHub Advanced Security is automatically enabled for new repositories and repositories transferred to
    this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    public function dependabot_alerts_enabled_for_new_repositories() : ?bool
    {
        return $this->dependabot_alerts_enabled_for_new_repositories;
    }
    /**
    * Whether dependabot security updates are automatically enabled for new repositories and repositories transferred
    to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    public function dependabot_security_updates_enabled_for_new_repositories() : ?bool
    {
        return $this->dependabot_security_updates_enabled_for_new_repositories;
    }
    /**
    * Whether dependency graph is automatically enabled for new repositories and repositories transferred to this
    organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    public function dependency_graph_enabled_for_new_repositories() : ?bool
    {
        return $this->dependency_graph_enabled_for_new_repositories;
    }
    /**
    * Whether secret scanning is automatically enabled for new repositories and repositories transferred to this
    organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    public function secret_scanning_enabled_for_new_repositories() : ?bool
    {
        return $this->secret_scanning_enabled_for_new_repositories;
    }
    /**
    * Whether secret scanning push protection is automatically enabled for new repositories and repositories
    transferred to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    */
    public function secret_scanning_push_protection_enabled_for_new_repositories() : ?bool
    {
        return $this->secret_scanning_push_protection_enabled_for_new_repositories;
    }
    /**
     * Whether a custom link is shown to contributors who are blocked from pushing a secret by push protection.
     */
    public function secret_scanning_push_protection_custom_link_enabled() : ?bool
    {
        return $this->secret_scanning_push_protection_custom_link_enabled;
    }
    /**
     * An optional URL string to display to contributors who are blocked from pushing a secret.
     */
    public function secret_scanning_push_protection_custom_link() : ?string
    {
        return $this->secret_scanning_push_protection_custom_link;
    }
}
