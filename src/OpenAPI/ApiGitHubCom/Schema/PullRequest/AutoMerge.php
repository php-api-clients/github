<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest;

final class AutoMerge
{
    public const SCHEMA_JSON = '{"title":"PullRequestAutoMerge","required":["enabled_by","merge_method","commit_title","commit_message"],"type":["object","null"],"properties":{"commit_message":{"type":["string","null"],"description":"Commit message for the merge commit."},"commit_title":{"type":["string","null"],"description":"Title for the merge commit message."},"enabled_by":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"merge_method":{"enum":["merge","squash","rebase"],"type":"string","description":"The merge method to use."}},"description":"The status of auto merging a pull request."}';
    public const SCHEMA_TITLE = 'PullRequestAutoMerge';
    public const SCHEMA_DESCRIPTION = 'The status of auto merging a pull request.';
    /**
     * Commit message for the merge commit.
     */
    private ?string $commit_message;
    /**
     * Title for the merge commit message.
     */
    private ?string $commit_title;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AutoMerge\EnabledBy::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AutoMerge\EnabledBy $enabled_by;
    /**
     * The merge method to use.
     */
    private string $merge_method;
    /**
     * Commit message for the merge commit.
     */
    public function commit_message() : ?string
    {
        return $this->commit_message;
    }
    /**
     * Title for the merge commit message.
     */
    public function commit_title() : ?string
    {
        return $this->commit_title;
    }
    public function enabled_by() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AutoMerge\EnabledBy
    {
        return $this->enabled_by;
    }
    /**
     * The merge method to use.
     */
    public function merge_method() : string
    {
        return $this->merge_method;
    }
}