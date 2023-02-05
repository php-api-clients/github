<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Installation
{
    public const SCHEMA_JSON = '{"title":"Installation","required":["id","app_id","app_slug","target_id","target_type","single_file_name","repository_selection","access_tokens_url","html_url","repositories_url","events","account","permissions","created_at","updated_at","suspended_by","suspended_at"],"type":"object","properties":{"id":{"type":"integer","description":"The ID of the installation.","examples":[1]},"account":{"type":["null","object"],"anyOf":[{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},{"title":"Enterprise","required":["id","node_id","name","slug","html_url","created_at","updated_at","avatar_url"],"type":"object","properties":{"description":{"type":["string","null"],"description":"A short description of the enterprise."},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/enterprises\\/octo-business"]},"website_url":{"type":["string","null"],"description":"The enterprise\'s website URL.","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the enterprise","examples":[42]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the enterprise.","examples":["Octo Business"]},"slug":{"type":"string","description":"The slug url identifier for the enterprise.","examples":["octo-business"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2019-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2019-01-26T19:14:43Z"]},"avatar_url":{"type":"string","format":"uri"}},"description":"An enterprise on GitHub."}]},"repository_selection":{"enum":["all","selected"],"type":"string","description":"Describe whether all repositories have been selected or there\'s a selection involved"},"access_tokens_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/installations\\/1\\/access_tokens"]},"repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/installation\\/repositories"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/organizations\\/github\\/settings\\/installations\\/1"]},"app_id":{"type":"integer","examples":[1]},"target_id":{"type":"integer","description":"The ID of the user or organization this token is being scoped to."},"target_type":{"type":"string","examples":["Organization"]},"permissions":{"title":"App Permissions","type":"object","properties":{"actions":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts."},"administration":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation."},"checks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for checks on code."},"contents":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges."},"deployments":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for deployments and deployment statuses."},"environments":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for managing repository environments."},"issues":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones."},"metadata":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata."},"packages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for packages published to GitHub Packages."},"pages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds."},"pull_requests":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges."},"repository_announcement_banners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage announcement banners for a repository."},"repository_hooks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage the post-receive hooks for a repository."},"repository_projects":{"enum":["read","write","admin"],"type":"string","description":"The level of permission to grant the access token to manage repository projects, columns, and cards."},"secret_scanning_alerts":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage secret scanning alerts."},"secrets":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage repository secrets."},"security_events":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage security events like code scanning alerts."},"single_file":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage just a single file."},"statuses":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for commit statuses."},"vulnerability_alerts":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage Dependabot alerts."},"workflows":{"enum":["write"],"type":"string","description":"The level of permission to grant the access token to update GitHub Actions workflow files."},"members":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for organization teams and members."},"organization_administration":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage access to an organization."},"organization_custom_roles":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for custom repository roles management. This property is in beta and is subject to change."},"organization_announcement_banners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage announcement banners for an organization."},"organization_hooks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage the post-receive hooks for an organization."},"organization_plan":{"enum":["read"],"type":"string","description":"The level of permission to grant the access token for viewing an organization\'s plan."},"organization_projects":{"enum":["read","write","admin"],"type":"string","description":"The level of permission to grant the access token to manage organization projects and projects beta (where available)."},"organization_packages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for organization packages published to GitHub Packages."},"organization_secrets":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage organization secrets."},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization."},"organization_user_blocking":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage users blocked by the organization."},"team_discussions":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage team discussions and related comments."}},"description":"The permissions granted to the user-to-server access token.","example":{"contents":"read","issues":"read","deployments":"write","single_file":"read"}},"events":{"type":"array","items":{"type":"string"}},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"single_file_name":{"type":["string","null"],"examples":["config.yaml"]},"has_multiple_single_files":{"type":"boolean","examples":[true]},"single_file_paths":{"type":"array","items":{"type":"string"},"examples":["config.yml",".github\\/issue_TEMPLATE.md"]},"app_slug":{"type":"string","examples":["github-actions"]},"suspended_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"suspended_at":{"type":["string","null"],"format":"date-time"},"contact_email":{"type":["string","null"],"examples":["\\"test_13f1e99741e3e004@d7e1eb0bc0a1ba12.com\\""]}},"description":"Installation"}';
    public const SCHEMA_TITLE = 'Installation';
    public const SCHEMA_DESCRIPTION = 'Installation';
    /**
     * The ID of the installation.
     */
    public readonly int $id;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation\Account $account;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    public readonly string $repository_selection;
    public readonly string $access_tokens_url;
    public readonly string $repositories_url;
    public readonly string $html_url;
    public readonly int $app_id;
    /**
     * The ID of the user or organization this token is being scoped to.
     */
    public readonly int $target_id;
    public readonly string $target_type;
    /**
     * The permissions granted to the user-to-server access token.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AppPermissions $permissions;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation\Events>
     */
    public readonly array $events;
    public readonly string $created_at;
    public readonly string $updated_at;
    public readonly ?string $single_file_name;
    public readonly ?bool $has_multiple_single_files;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation\SingleFilePaths>
     */
    public readonly array $single_file_paths;
    public readonly string $app_slug;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation\SuspendedBy $suspended_by;
    public readonly ?string $suspended_at;
    public readonly ?string $contact_email;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation\Events> $events
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation\SingleFilePaths> $single_file_paths
     */
    public function __construct(int $id, object $account, string $repository_selection, string $access_tokens_url, string $repositories_url, string $html_url, int $app_id, int $target_id, string $target_type, object $permissions, array $events, string $created_at, string $updated_at, string $single_file_name, bool $has_multiple_single_files, array $single_file_paths, string $app_slug, mixed $suspended_by, string $suspended_at, string $contact_email)
    {
        $this->id = $id;
        $this->account = $account;
        $this->repository_selection = $repository_selection;
        $this->access_tokens_url = $access_tokens_url;
        $this->repositories_url = $repositories_url;
        $this->html_url = $html_url;
        $this->app_id = $app_id;
        $this->target_id = $target_id;
        $this->target_type = $target_type;
        $this->permissions = $permissions;
        $this->events = $events;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->single_file_name = $single_file_name;
        $this->has_multiple_single_files = $has_multiple_single_files;
        $this->single_file_paths = $single_file_paths;
        $this->app_slug = $app_slug;
        $this->suspended_by = $suspended_by;
        $this->suspended_at = $suspended_at;
        $this->contact_email = $contact_email;
    }
}
