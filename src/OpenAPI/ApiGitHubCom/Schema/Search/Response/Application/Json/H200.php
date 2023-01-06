<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Search\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","incomplete_results","items"],"type":"object","properties":{"total_count":{"type":"integer"},"incomplete_results":{"type":"boolean"},"items":{"type":"array","items":{"title":"User Search Result Item","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url","score"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"score":{"type":"number"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"events_url":{"type":"string"},"public_repos":{"type":"integer"},"public_gists":{"type":"integer"},"followers":{"type":"integer"},"following":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"name":{"type":["string","null"]},"bio":{"type":["string","null"]},"email":{"type":["string","null"],"format":"email"},"location":{"type":["string","null"]},"site_admin":{"type":"boolean"},"hireable":{"type":["boolean","null"]},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"blog":{"type":["string","null"]},"company":{"type":["string","null"]},"suspended_at":{"type":["string","null"],"format":"date-time"}},"description":"User Search Result Item"}}}}';
    public const SCHEMA_TITLE = 'Search\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_count;
    private bool $incomplete_results;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UserSearchResultItem>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UserSearchResultItem::class)
     */
    private array $items = array();
    public function total_count() : int
    {
        return $this->total_count;
    }
    public function incomplete_results() : bool
    {
        return $this->incomplete_results;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UserSearchResultItem>
     */
    public function items() : array
    {
        return $this->items;
    }
}
