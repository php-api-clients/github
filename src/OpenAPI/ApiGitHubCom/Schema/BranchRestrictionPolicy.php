<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class BranchRestrictionPolicy
{
    public const SCHEMA_JSON = '{"title":"Branch Restriction Policy","required":["url","users_url","teams_url","apps_url","users","teams","apps"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"users_url":{"type":"string","format":"uri"},"teams_url":{"type":"string","format":"uri"},"apps_url":{"type":"string","format":"uri"},"users":{"type":"array","items":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string"},"gravatar_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"organizations_url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"received_events_url":{"type":"string"},"type":{"type":"string"},"site_admin":{"type":"boolean"}}}},"teams":{"type":"array","items":{"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"name":{"type":"string"},"slug":{"type":"string"},"description":{"type":["string","null"]},"privacy":{"type":"string"},"permission":{"type":"string"},"members_url":{"type":"string"},"repositories_url":{"type":"string"},"parent":{"type":["string","null"]}}}},"apps":{"type":"array","items":{"type":"object","properties":{"id":{"type":"integer"},"slug":{"type":"string"},"node_id":{"type":"string"},"owner":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"hooks_url":{"type":"string"},"issues_url":{"type":"string"},"members_url":{"type":"string"},"public_members_url":{"type":"string"},"avatar_url":{"type":"string"},"description":{"type":"string"},"gravatar_id":{"type":"string","examples":["\\"\\""]},"html_url":{"type":"string","examples":["\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\""]},"followers_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\""]},"following_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\""]},"gists_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\""]},"starred_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\""]},"subscriptions_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\""]},"organizations_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\""]},"received_events_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\""]},"type":{"type":"string","examples":["\\"Organization\\""]},"site_admin":{"type":"boolean","examples":[false]}}},"name":{"type":"string"},"description":{"type":"string"},"external_url":{"type":"string"},"html_url":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"permissions":{"type":"object","properties":{"metadata":{"type":"string"},"contents":{"type":"string"},"issues":{"type":"string"},"single_file":{"type":"string"}}},"events":{"type":"array","items":{"type":"string"}}}}}},"description":"Branch Restriction Policy"}';
    public const SCHEMA_EXAMPLE = '{"apps":[{"owner":{"gravatar_id":"\\"\\"","html_url":"\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\"","followers_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\"","following_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\"","gists_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\"","starred_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\"","subscriptions_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\"","organizations_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\"","received_events_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\"","type":"\\"Organization\\"","site_admin":false}}]}';
    public const SCHEMA_TITLE = 'Branch Restriction Policy';
    public const SCHEMA_DESCRIPTION = 'Branch Restriction Policy';
    public readonly string $url;
    public readonly string $users_url;
    public readonly string $teams_url;
    public readonly string $apps_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy\Users>
     */
    public readonly array $users;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy\Teams>
     */
    public readonly array $teams;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy\Apps>
     */
    public readonly array $apps;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy\Users> $users
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy\Teams> $teams
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy\Apps> $apps
     */
    public function __construct(string $url, string $users_url, string $teams_url, string $apps_url, array $users, array $teams, array $apps)
    {
        $this->url = $url;
        $this->users_url = $users_url;
        $this->teams_url = $teams_url;
        $this->apps_url = $apps_url;
        $this->users = $users;
        $this->teams = $teams;
        $this->apps = $apps;
    }
}
