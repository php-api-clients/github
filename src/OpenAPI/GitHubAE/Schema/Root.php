<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Root
{
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
