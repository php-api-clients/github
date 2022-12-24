<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Root
{
    public const SCHEMA_JSON = '{"required":["current_user_url","current_user_authorizations_html_url","authorizations_url","code_search_url","commit_search_url","emails_url","emojis_url","events_url","feeds_url","followers_url","following_url","gists_url","hub_url","issue_search_url","issues_url","keys_url","label_search_url","notifications_url","organization_url","organization_repositories_url","organization_teams_url","public_gists_url","rate_limit_url","repository_url","repository_search_url","current_user_repositories_url","starred_url","starred_gists_url","user_url","user_organizations_url","user_repositories_url","user_search_url"],"type":"object","properties":{"current_user_url":{"type":"string","format":"uri-template"},"current_user_authorizations_html_url":{"type":"string","format":"uri-template"},"authorizations_url":{"type":"string","format":"uri-template"},"code_search_url":{"type":"string","format":"uri-template"},"commit_search_url":{"type":"string","format":"uri-template"},"emails_url":{"type":"string","format":"uri-template"},"emojis_url":{"type":"string","format":"uri-template"},"events_url":{"type":"string","format":"uri-template"},"feeds_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri-template"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"hub_url":{"type":"string","format":"uri-template"},"issue_search_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"label_search_url":{"type":"string","format":"uri-template"},"notifications_url":{"type":"string","format":"uri-template"},"organization_url":{"type":"string","format":"uri-template"},"organization_repositories_url":{"type":"string","format":"uri-template"},"organization_teams_url":{"type":"string","format":"uri-template"},"public_gists_url":{"type":"string","format":"uri-template"},"rate_limit_url":{"type":"string","format":"uri-template"},"repository_url":{"type":"string","format":"uri-template"},"repository_search_url":{"type":"string","format":"uri-template"},"current_user_repositories_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"starred_gists_url":{"type":"string","format":"uri-template"},"topic_search_url":{"type":"string","format":"uri-template"},"user_url":{"type":"string","format":"uri-template"},"user_organizations_url":{"type":"string","format":"uri-template"},"user_repositories_url":{"type":"string","format":"uri-template"},"user_search_url":{"type":"string","format":"uri-template"}}}';
    public const SCHEMA_TITLE = 'root';
    public const SCHEMA_DESCRIPTION = '';
    private string $current_user_url;
    private string $current_user_authorizations_html_url;
    private string $authorizations_url;
    private string $code_search_url;
    private string $commit_search_url;
    private string $emails_url;
    private string $emojis_url;
    private string $events_url;
    private string $feeds_url;
    private string $followers_url;
    private string $following_url;
    private string $gists_url;
    private string $hub_url;
    private string $issue_search_url;
    private string $issues_url;
    private string $keys_url;
    private string $label_search_url;
    private string $notifications_url;
    private string $organization_url;
    private string $organization_repositories_url;
    private string $organization_teams_url;
    private string $public_gists_url;
    private string $rate_limit_url;
    private string $repository_url;
    private string $repository_search_url;
    private string $current_user_repositories_url;
    private string $starred_url;
    private string $starred_gists_url;
    private ?string $topic_search_url = null;
    private string $user_url;
    private string $user_organizations_url;
    private string $user_repositories_url;
    private string $user_search_url;
    public function current_user_url() : string
    {
        return $this->current_user_url;
    }
    public function current_user_authorizations_html_url() : string
    {
        return $this->current_user_authorizations_html_url;
    }
    public function authorizations_url() : string
    {
        return $this->authorizations_url;
    }
    public function code_search_url() : string
    {
        return $this->code_search_url;
    }
    public function commit_search_url() : string
    {
        return $this->commit_search_url;
    }
    public function emails_url() : string
    {
        return $this->emails_url;
    }
    public function emojis_url() : string
    {
        return $this->emojis_url;
    }
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function feeds_url() : string
    {
        return $this->feeds_url;
    }
    public function followers_url() : string
    {
        return $this->followers_url;
    }
    public function following_url() : string
    {
        return $this->following_url;
    }
    public function gists_url() : string
    {
        return $this->gists_url;
    }
    public function hub_url() : string
    {
        return $this->hub_url;
    }
    public function issue_search_url() : string
    {
        return $this->issue_search_url;
    }
    public function issues_url() : string
    {
        return $this->issues_url;
    }
    public function keys_url() : string
    {
        return $this->keys_url;
    }
    public function label_search_url() : string
    {
        return $this->label_search_url;
    }
    public function notifications_url() : string
    {
        return $this->notifications_url;
    }
    public function organization_url() : string
    {
        return $this->organization_url;
    }
    public function organization_repositories_url() : string
    {
        return $this->organization_repositories_url;
    }
    public function organization_teams_url() : string
    {
        return $this->organization_teams_url;
    }
    public function public_gists_url() : string
    {
        return $this->public_gists_url;
    }
    public function rate_limit_url() : string
    {
        return $this->rate_limit_url;
    }
    public function repository_url() : string
    {
        return $this->repository_url;
    }
    public function repository_search_url() : string
    {
        return $this->repository_search_url;
    }
    public function current_user_repositories_url() : string
    {
        return $this->current_user_repositories_url;
    }
    public function starred_url() : string
    {
        return $this->starred_url;
    }
    public function starred_gists_url() : string
    {
        return $this->starred_gists_url;
    }
    public function topic_search_url() : ?string
    {
        return $this->topic_search_url;
    }
    public function user_url() : string
    {
        return $this->user_url;
    }
    public function user_organizations_url() : string
    {
        return $this->user_organizations_url;
    }
    public function user_repositories_url() : string
    {
        return $this->user_repositories_url;
    }
    public function user_search_url() : string
    {
        return $this->user_search_url;
    }
}
