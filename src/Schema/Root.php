<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Root
{
    public const SCHEMA_JSON         = '{
    "required": [
        "current_user_url",
        "current_user_authorizations_html_url",
        "authorizations_url",
        "code_search_url",
        "commit_search_url",
        "emails_url",
        "emojis_url",
        "events_url",
        "feeds_url",
        "followers_url",
        "following_url",
        "gists_url",
        "issue_search_url",
        "issues_url",
        "keys_url",
        "label_search_url",
        "notifications_url",
        "organization_url",
        "organization_repositories_url",
        "organization_teams_url",
        "public_gists_url",
        "rate_limit_url",
        "repository_url",
        "repository_search_url",
        "current_user_repositories_url",
        "starred_url",
        "starred_gists_url",
        "user_url",
        "user_organizations_url",
        "user_repositories_url",
        "user_search_url"
    ],
    "type": "object",
    "properties": {
        "current_user_url": {
            "type": "string",
            "format": "uri-template"
        },
        "current_user_authorizations_html_url": {
            "type": "string",
            "format": "uri-template"
        },
        "authorizations_url": {
            "type": "string",
            "format": "uri-template"
        },
        "code_search_url": {
            "type": "string",
            "format": "uri-template"
        },
        "commit_search_url": {
            "type": "string",
            "format": "uri-template"
        },
        "emails_url": {
            "type": "string",
            "format": "uri-template"
        },
        "emojis_url": {
            "type": "string",
            "format": "uri-template"
        },
        "events_url": {
            "type": "string",
            "format": "uri-template"
        },
        "feeds_url": {
            "type": "string",
            "format": "uri-template"
        },
        "followers_url": {
            "type": "string",
            "format": "uri-template"
        },
        "following_url": {
            "type": "string",
            "format": "uri-template"
        },
        "gists_url": {
            "type": "string",
            "format": "uri-template"
        },
        "hub_url": {
            "type": "string",
            "format": "uri-template",
            "deprecated": true
        },
        "issue_search_url": {
            "type": "string",
            "format": "uri-template"
        },
        "issues_url": {
            "type": "string",
            "format": "uri-template"
        },
        "keys_url": {
            "type": "string",
            "format": "uri-template"
        },
        "label_search_url": {
            "type": "string",
            "format": "uri-template"
        },
        "notifications_url": {
            "type": "string",
            "format": "uri-template"
        },
        "organization_url": {
            "type": "string",
            "format": "uri-template"
        },
        "organization_repositories_url": {
            "type": "string",
            "format": "uri-template"
        },
        "organization_teams_url": {
            "type": "string",
            "format": "uri-template"
        },
        "public_gists_url": {
            "type": "string",
            "format": "uri-template"
        },
        "rate_limit_url": {
            "type": "string",
            "format": "uri-template"
        },
        "repository_url": {
            "type": "string",
            "format": "uri-template"
        },
        "repository_search_url": {
            "type": "string",
            "format": "uri-template"
        },
        "current_user_repositories_url": {
            "type": "string",
            "format": "uri-template"
        },
        "starred_url": {
            "type": "string",
            "format": "uri-template"
        },
        "starred_gists_url": {
            "type": "string",
            "format": "uri-template"
        },
        "topic_search_url": {
            "type": "string",
            "format": "uri-template"
        },
        "user_url": {
            "type": "string",
            "format": "uri-template"
        },
        "user_organizations_url": {
            "type": "string",
            "format": "uri-template"
        },
        "user_repositories_url": {
            "type": "string",
            "format": "uri-template"
        },
        "user_search_url": {
            "type": "string",
            "format": "uri-template"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "current_user_url": "generated",
    "current_user_authorizations_html_url": "generated",
    "authorizations_url": "generated",
    "code_search_url": "generated",
    "commit_search_url": "generated",
    "emails_url": "generated",
    "emojis_url": "generated",
    "events_url": "generated",
    "feeds_url": "generated",
    "followers_url": "generated",
    "following_url": "generated",
    "gists_url": "generated",
    "hub_url": "generated",
    "issue_search_url": "generated",
    "issues_url": "generated",
    "keys_url": "generated",
    "label_search_url": "generated",
    "notifications_url": "generated",
    "organization_url": "generated",
    "organization_repositories_url": "generated",
    "organization_teams_url": "generated",
    "public_gists_url": "generated",
    "rate_limit_url": "generated",
    "repository_url": "generated",
    "repository_search_url": "generated",
    "current_user_repositories_url": "generated",
    "starred_url": "generated",
    "starred_gists_url": "generated",
    "topic_search_url": "generated",
    "user_url": "generated",
    "user_organizations_url": "generated",
    "user_repositories_url": "generated",
    "user_search_url": "generated"
}';

    public function __construct(#[MapFrom('current_user_url')]
    public string $currentUserUrl, #[MapFrom('current_user_authorizations_html_url')]
    public string $currentUserAuthorizationsHtmlUrl, #[MapFrom('authorizations_url')]
    public string $authorizationsUrl, #[MapFrom('code_search_url')]
    public string $codeSearchUrl, #[MapFrom('commit_search_url')]
    public string $commitSearchUrl, #[MapFrom('emails_url')]
    public string $emailsUrl, #[MapFrom('emojis_url')]
    public string $emojisUrl, #[MapFrom('events_url')]
    public string $eventsUrl, #[MapFrom('feeds_url')]
    public string $feedsUrl, #[MapFrom('followers_url')]
    public string $followersUrl, #[MapFrom('following_url')]
    public string $followingUrl, #[MapFrom('gists_url')]
    public string $gistsUrl, #[MapFrom('hub_url')]
    public string|null $hubUrl, #[MapFrom('issue_search_url')]
    public string $issueSearchUrl, #[MapFrom('issues_url')]
    public string $issuesUrl, #[MapFrom('keys_url')]
    public string $keysUrl, #[MapFrom('label_search_url')]
    public string $labelSearchUrl, #[MapFrom('notifications_url')]
    public string $notificationsUrl, #[MapFrom('organization_url')]
    public string $organizationUrl, #[MapFrom('organization_repositories_url')]
    public string $organizationRepositoriesUrl, #[MapFrom('organization_teams_url')]
    public string $organizationTeamsUrl, #[MapFrom('public_gists_url')]
    public string $publicGistsUrl, #[MapFrom('rate_limit_url')]
    public string $rateLimitUrl, #[MapFrom('repository_url')]
    public string $repositoryUrl, #[MapFrom('repository_search_url')]
    public string $repositorySearchUrl, #[MapFrom('current_user_repositories_url')]
    public string $currentUserRepositoriesUrl, #[MapFrom('starred_url')]
    public string $starredUrl, #[MapFrom('starred_gists_url')]
    public string $starredGistsUrl, #[MapFrom('topic_search_url')]
    public string|null $topicSearchUrl, #[MapFrom('user_url')]
    public string $userUrl, #[MapFrom('user_organizations_url')]
    public string $userOrganizationsUrl, #[MapFrom('user_repositories_url')]
    public string $userRepositoriesUrl, #[MapFrom('user_search_url')]
    public string $userSearchUrl,)
    {
    }
}
