<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy;

final class Apps
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"slug":{"type":"string"},"node_id":{"type":"string"},"owner":{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"hooks_url":{"type":"string"},"issues_url":{"type":"string"},"members_url":{"type":"string"},"public_members_url":{"type":"string"},"avatar_url":{"type":"string"},"description":{"type":"string"},"gravatar_id":{"type":"string","examples":["\\"\\""]},"html_url":{"type":"string","examples":["\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\""]},"followers_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\""]},"following_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\""]},"gists_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\""]},"starred_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\""]},"subscriptions_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\""]},"organizations_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\""]},"received_events_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\""]},"type":{"type":"string","examples":["\\"Organization\\""]},"site_admin":{"type":"boolean","examples":[false]}}},"name":{"type":"string"},"description":{"type":"string"},"external_url":{"type":"string"},"html_url":{"type":"string"},"created_at":{"type":"string"},"updated_at":{"type":"string"},"permissions":{"type":"object","properties":{"metadata":{"type":"string"},"contents":{"type":"string"},"issues":{"type":"string"},"single_file":{"type":"string"}}},"events":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'BranchRestrictionPolicy\\Apps';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $slug;
    private string $node_id;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Owner::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Owner $owner;
    private string $name;
    private string $description;
    private string $external_url;
    private string $html_url;
    private string $created_at;
    private string $updated_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Permissions::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Permissions $permissions;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Events>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Events::class)
     */
    private array $events = array();
    public function id() : int
    {
        return $this->id;
    }
    public function slug() : string
    {
        return $this->slug;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function owner() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Owner
    {
        return $this->owner;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function external_url() : string
    {
        return $this->external_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function permissions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Permissions
    {
        return $this->permissions;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps\Events>
     */
    public function events() : array
    {
        return $this->events;
    }
}
