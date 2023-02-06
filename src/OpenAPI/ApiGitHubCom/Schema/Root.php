<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Root
{
    public const SCHEMA_JSON = '{"required":["current_user_url","current_user_authorizations_html_url","authorizations_url","code_search_url","commit_search_url","emails_url","emojis_url","events_url","feeds_url","followers_url","following_url","gists_url","hub_url","issue_search_url","issues_url","keys_url","label_search_url","notifications_url","organization_url","organization_repositories_url","organization_teams_url","public_gists_url","rate_limit_url","repository_url","repository_search_url","current_user_repositories_url","starred_url","starred_gists_url","user_url","user_organizations_url","user_repositories_url","user_search_url"],"type":"object","properties":{"current_user_url":{"type":"string","format":"uri-template"},"current_user_authorizations_html_url":{"type":"string","format":"uri-template"},"authorizations_url":{"type":"string","format":"uri-template"},"code_search_url":{"type":"string","format":"uri-template"},"commit_search_url":{"type":"string","format":"uri-template"},"emails_url":{"type":"string","format":"uri-template"},"emojis_url":{"type":"string","format":"uri-template"},"events_url":{"type":"string","format":"uri-template"},"feeds_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri-template"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"hub_url":{"type":"string","format":"uri-template"},"issue_search_url":{"type":"string","format":"uri-template"},"issues_url":{"type":"string","format":"uri-template"},"keys_url":{"type":"string","format":"uri-template"},"label_search_url":{"type":"string","format":"uri-template"},"notifications_url":{"type":"string","format":"uri-template"},"organization_url":{"type":"string","format":"uri-template"},"organization_repositories_url":{"type":"string","format":"uri-template"},"organization_teams_url":{"type":"string","format":"uri-template"},"public_gists_url":{"type":"string","format":"uri-template"},"rate_limit_url":{"type":"string","format":"uri-template"},"repository_url":{"type":"string","format":"uri-template"},"repository_search_url":{"type":"string","format":"uri-template"},"current_user_repositories_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"starred_gists_url":{"type":"string","format":"uri-template"},"topic_search_url":{"type":"string","format":"uri-template"},"user_url":{"type":"string","format":"uri-template"},"user_organizations_url":{"type":"string","format":"uri-template"},"user_repositories_url":{"type":"string","format":"uri-template"},"user_search_url":{"type":"string","format":"uri-template"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'root';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $current_user_url;
    public readonly string $current_user_authorizations_html_url;
    public readonly string $authorizations_url;
    public readonly string $code_search_url;
    public readonly string $commit_search_url;
    public readonly string $emails_url;
    public readonly string $emojis_url;
    public readonly string $events_url;
    public readonly string $feeds_url;
    public readonly string $followers_url;
    public readonly string $following_url;
    public readonly string $gists_url;
    public readonly string $hub_url;
    public readonly string $issue_search_url;
    public readonly string $issues_url;
    public readonly string $keys_url;
    public readonly string $label_search_url;
    public readonly string $notifications_url;
    public readonly string $organization_url;
    public readonly string $organization_repositories_url;
    public readonly string $organization_teams_url;
    public readonly string $public_gists_url;
    public readonly string $rate_limit_url;
    public readonly string $repository_url;
    public readonly string $repository_search_url;
    public readonly string $current_user_repositories_url;
    public readonly string $starred_url;
    public readonly string $starred_gists_url;
    public readonly ?string $topic_search_url;
    public readonly string $user_url;
    public readonly string $user_organizations_url;
    public readonly string $user_repositories_url;
    public readonly string $user_search_url;
    public function __construct(string $current_user_url, string $current_user_authorizations_html_url, string $authorizations_url, string $code_search_url, string $commit_search_url, string $emails_url, string $emojis_url, string $events_url, string $feeds_url, string $followers_url, string $following_url, string $gists_url, string $hub_url, string $issue_search_url, string $issues_url, string $keys_url, string $label_search_url, string $notifications_url, string $organization_url, string $organization_repositories_url, string $organization_teams_url, string $public_gists_url, string $rate_limit_url, string $repository_url, string $repository_search_url, string $current_user_repositories_url, string $starred_url, string $starred_gists_url, string $topic_search_url, string $user_url, string $user_organizations_url, string $user_repositories_url, string $user_search_url)
    {
        $this->current_user_url = $current_user_url;
        $this->current_user_authorizations_html_url = $current_user_authorizations_html_url;
        $this->authorizations_url = $authorizations_url;
        $this->code_search_url = $code_search_url;
        $this->commit_search_url = $commit_search_url;
        $this->emails_url = $emails_url;
        $this->emojis_url = $emojis_url;
        $this->events_url = $events_url;
        $this->feeds_url = $feeds_url;
        $this->followers_url = $followers_url;
        $this->following_url = $following_url;
        $this->gists_url = $gists_url;
        $this->hub_url = $hub_url;
        $this->issue_search_url = $issue_search_url;
        $this->issues_url = $issues_url;
        $this->keys_url = $keys_url;
        $this->label_search_url = $label_search_url;
        $this->notifications_url = $notifications_url;
        $this->organization_url = $organization_url;
        $this->organization_repositories_url = $organization_repositories_url;
        $this->organization_teams_url = $organization_teams_url;
        $this->public_gists_url = $public_gists_url;
        $this->rate_limit_url = $rate_limit_url;
        $this->repository_url = $repository_url;
        $this->repository_search_url = $repository_search_url;
        $this->current_user_repositories_url = $current_user_repositories_url;
        $this->starred_url = $starred_url;
        $this->starred_gists_url = $starred_gists_url;
        $this->topic_search_url = $topic_search_url;
        $this->user_url = $user_url;
        $this->user_organizations_url = $user_organizations_url;
        $this->user_repositories_url = $user_repositories_url;
        $this->user_search_url = $user_search_url;
    }
}
