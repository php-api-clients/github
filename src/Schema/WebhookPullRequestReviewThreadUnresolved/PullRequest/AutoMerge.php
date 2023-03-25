<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewThreadUnresolved\PullRequest;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class AutoMerge
{
    public const SCHEMA_JSON = '{"title":"PullRequestAutoMerge","required":["enabled_by","merge_method","commit_title","commit_message"],"type":["object","null"],"properties":{"commit_message":{"type":["string","null"],"description":"Commit message for the merge commit."},"commit_title":{"type":"string","description":"Title for the merge commit message."},"enabled_by":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"merge_method":{"enum":["merge","squash","rebase"],"type":"string","description":"The merge method to use."}},"description":"The status of auto merging a pull request."}';
    public const SCHEMA_TITLE = 'PullRequestAutoMerge';
    public const SCHEMA_DESCRIPTION = 'The status of auto merging a pull request.';
    public const SCHEMA_EXAMPLE_DATA = '{"commitMessage":"generated_commit_message_null","commitTitle":"generated_commit_title_null","enabledBy":{"avatarUrl":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","eventsUrl":"generated_events_url_uri-template","followersUrl":"https:\\/\\/example.com\\/","followingUrl":"generated_following_url_uri-template","gistsUrl":"generated_gists_url_uri-template","gravatarId":"generated_gravatar_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","nodeId":"generated_node_id_null","organizationsUrl":"https:\\/\\/example.com\\/","receivedEventsUrl":"https:\\/\\/example.com\\/","reposUrl":"https:\\/\\/example.com\\/","siteAdmin":false,"starredUrl":"generated_starred_url_uri-template","subscriptionsUrl":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"mergeMethod":"merge"}';
    /**
     * commitMessage: Commit message for the merge commit.
     * commitTitle: Title for the merge commit message.
     * mergeMethod: The merge method to use.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('commit_message')] public ?string $commitMessage, #[\EventSauce\ObjectHydrator\MapFrom('commit_title')] public string $commitTitle, #[\EventSauce\ObjectHydrator\MapFrom('enabled_by')] public ?Schema\Discussion\AnswerChosenBy $enabledBy, #[\EventSauce\ObjectHydrator\MapFrom('merge_method')] public string $mergeMethod)
    {
    }
}
