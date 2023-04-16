<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract454e97886d6e977b013cdab3c3d76ebb
{
    public const SCHEMA_JSON         = '{"title":"PullRequestAutoMerge","required":["enabled_by","merge_method","commit_title","commit_message"],"type":["object","null"],"properties":{"commit_message":{"type":["string","null"],"description":"Commit message for the merge commit."},"commit_title":{"type":["string","null"],"description":"Title for the merge commit message."},"enabled_by":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"merge_method":{"enum":["merge","squash","rebase"],"type":"string","description":"The merge method to use."}},"description":"The status of auto merging a pull request."}';
    public const SCHEMA_TITLE        = 'PullRequestAutoMerge';
    public const SCHEMA_DESCRIPTION  = 'The status of auto merging a pull request.';
    public const SCHEMA_EXAMPLE_DATA = '{"commit_message":"generated_commit_message_null","commit_title":"generated_commit_title_null","enabled_by":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"merge_method":"merge"}';

    /**
     * commitMessage: Commit message for the merge commit.
     * commitTitle: Title for the merge commit message.
     * mergeMethod: The merge method to use.
     */
    public function __construct(#[MapFrom('commit_message')] public ?string $commitMessage, #[MapFrom('commit_title')] public ?string $commitTitle, #[MapFrom('enabled_by')] public ?Schema\WebhookPullRequestAssigned\PullRequest\AutoMerge\EnabledBy $enabledBy, #[MapFrom('merge_method')] public string $mergeMethod)
    {
    }
}
