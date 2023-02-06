<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy;

final class Apps
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"slug":{"type":"string"},"node_id":{"type":"string"},"owner":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"hooks_url":{"type":"string"},"issues_url":{"type":"string"},"members_url":{"type":"string"},"public_members_url":{"type":"string"},"avatar_url":{"type":"string"},"description":{"type":"string"},"gravatar_id":{"type":"string","examples":["\\"\\""]},"html_url":{"type":"string","examples":["\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\""]},"followers_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\""]},"following_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\""]},"gists_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\""]},"starred_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\""]},"subscriptions_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\""]},"organizations_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\""]},"received_events_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\""]},"type":{"type":"string","examples":["\\"Organization\\""]},"site_admin":{"type":"boolean","examples":[false]}}},"name":{"type":"string"},"description":{"type":"string"},"external_url":{"type":"string"},"html_url":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"permissions":{"type":"object","properties":{"metadata":{"type":"string"},"contents":{"type":"string"},"issues":{"type":"string"},"single_file":{"type":"string"}}},"events":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_EXAMPLE = '{"owner":{"gravatar_id":"\\"\\"","html_url":"\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\"","followers_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\"","following_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\"","gists_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\"","starred_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\"","subscriptions_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\"","organizations_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\"","received_events_url":"\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\"","type":"\\"Organization\\"","site_admin":false}}';
    public const SCHEMA_TITLE = 'BranchRestrictionPolicy\\Apps';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $id;
    public readonly string $slug;
    public readonly string $node_id;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Owner $owner;
    public readonly string $name;
    public readonly string $description;
    public readonly string $external_url;
    public readonly string $html_url;
    public readonly string $created_at;
    public readonly string $updated_at;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Permissions $permissions;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Events>
     */
    public readonly array $events;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Events> $events
     */
    public function __construct(int $id, string $slug, string $node_id, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Owner $owner, string $name, string $description, string $external_url, string $html_url, string $created_at, string $updated_at, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Permissions $permissions, array $events)
    {
        $this->id = $id;
        $this->slug = $slug;
        $this->node_id = $node_id;
        $this->owner = $owner;
        $this->name = $name;
        $this->description = $description;
        $this->external_url = $external_url;
        $this->html_url = $html_url;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->permissions = $permissions;
        $this->events = $events;
    }
}
