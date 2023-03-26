<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class GistComment
{
    public const SCHEMA_JSON = '{"title":"Gist Comment","required":["url","id","node_id","user","body","author_association","created_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDExOkdpc3RDb21tZW50MQ=="]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/gists\\/a6db0bec360bb87e9418\\/comments\\/1"]},"body":{"maxLength":65535,"type":"string","description":"The comment text.","examples":["Body of the attachment"]},"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"created_at":{"type":"string","format":"date-time","examples":["2011-04-18T23:23:56Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2011-04-18T23:23:56Z"]},"author_association":{"title":"author_association","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository.","examples":["OWNER"]}},"description":"A comment made to a gist."}';
    public const SCHEMA_TITLE = 'Gist Comment';
    public const SCHEMA_DESCRIPTION = 'A comment made to a gist.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":1,"node_id":"MDExOkdpc3RDb21tZW50MQ==","url":"https:\\/\\/api.github.com\\/gists\\/a6db0bec360bb87e9418\\/comments\\/1","body":"Body of the attachment","user":null,"created_at":"2011-04-18T23:23:56Z","updated_at":"2011-04-18T23:23:56Z","author_association":"OWNER"}';
    /**
     * body: The comment text.
     * authorAssociation: How the author is associated with the repository.
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $url, public string $body, public mixed $user, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, #[\EventSauce\ObjectHydrator\MapFrom('author_association')] public string $authorAssociation)
    {
    }
}
