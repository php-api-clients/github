<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookCommitCommentCreated;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Comment
{
    public const SCHEMA_JSON         = '{"required":["url","html_url","id","node_id","user","position","line","path","commit_id","created_at","updated_at","author_association","body"],"type":"object","properties":{"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":"string","description":"The text of the comment."},"commit_id":{"type":"string","description":"The SHA of the commit to which the comment applies."},"created_at":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"The ID of the commit comment."},"line":{"type":["integer","null"],"description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment"},"node_id":{"type":"string","description":"The node ID of the commit comment."},"path":{"type":["string","null"],"description":"The relative path of the file to which the comment applies."},"position":{"type":["integer","null"],"description":"The line index in the diff to which the comment applies."},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"updated_at":{"type":"string"},"url":{"type":"string","format":"uri"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The [commit comment](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#get-a-commit-comment) resource."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The [commit comment](https://docs.github.com/rest/reference/repos#get-a-commit-comment) resource.';
    public const SCHEMA_EXAMPLE_DATA = '{"author_association":"OWNER","body":"generated","commit_id":"generated","created_at":"generated","html_url":"https:\\/\\/example.com\\/","id":2,"line":4,"node_id":"generated","path":"generated","position":8,"reactions":{"+1":11,"-1":10,"confused":8,"eyes":4,"heart":5,"hooray":6,"laugh":5,"rocket":6,"total_count":11,"url":"https:\\/\\/example.com\\/"},"updated_at":"generated","url":"https:\\/\\/example.com\\/","user":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated","events_url":"generated","followers_url":"https:\\/\\/example.com\\/","following_url":"generated","gists_url":"generated","gravatar_id":"generated","html_url":"https:\\/\\/example.com\\/","id":2,"login":"generated","name":"generated","node_id":"generated","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated","subscriptions_url":"https:\\/\\/example.com\\/","type":"Organization","url":"https:\\/\\/example.com\\/"}}';

    /**
     * authorAssociation: How the author is associated with the repository.
     * body: The text of the comment.
     * commitId: The SHA of the commit to which the comment applies.
     * id: The ID of the commit comment.
     * line: The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     * nodeId: The node ID of the commit comment.
     * path: The relative path of the file to which the comment applies.
     * position: The line index in the diff to which the comment applies.
     */
    public function __construct(#[MapFrom('author_association')] public string $authorAssociation, public string $body, #[MapFrom('commit_id')] public string $commitId, #[MapFrom('created_at')] public string $createdAt, #[MapFrom('html_url')] public string $htmlUrl, public int $id, public ?int $line, #[MapFrom('node_id')] public string $nodeId, public ?string $path, public ?int $position, public ?Schema\Discussion\Reactions $reactions, #[MapFrom('updated_at')] public string $updatedAt, public string $url, public ?Schema\Discussion\AnswerChosenBy $user)
    {
    }
}
