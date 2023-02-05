<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateCommit\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["message","tree"],"type":"object","properties":{"message":{"type":"string","description":"The commit message"},"tree":{"type":"string","description":"The SHA of the tree object this commit points to"},"parents":{"type":"array","items":{"type":"string"},"description":"The SHAs of the commits that were the parents of this commit. If omitted or empty, the commit will be written as a root commit. For a single parent, an array of one SHA should be provided; for a merge commit, an array of more than one should be provided."},"author":{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"},"date":{"type":"string","description":"Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"Information about the author of the commit. By default, the `author` will be the authenticated user and the current date. See the `author` and `committer` object below for details."},"committer":{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"},"date":{"type":"string","description":"Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"Information about the person who is making the commit. By default, `committer` will use the information set in `author`. See the `author` and `committer` object below for details."},"signature":{"type":"string","description":"The [PGP signature](https:\\/\\/en.wikipedia.org\\/wiki\\/Pretty_Good_Privacy) of the commit. GitHub adds the signature to the `gpgsig` header of the created commit. For a commit signature to be verifiable by Git or GitHub, it must be an ASCII-armored detached PGP signature over the string commit as it would be written to the object database. To pass a `signature` parameter, you need to first manually create a valid PGP signature, which can be complicated. You may find it easier to [use the command line](https:\\/\\/git-scm.com\\/book\\/id\\/v2\\/Git-Tools-Signing-Your-Work) to create signed commits."}}}';
    public const SCHEMA_TITLE = 'CreateCommit\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The commit message
     */
    public readonly string $message;
    /**
     * The SHA of the tree object this commit points to
     */
    public readonly string $tree;
    /**
     * The SHAs of the commits that were the parents of this commit. If omitted or empty, the commit will be written as a root commit. For a single parent, an array of one SHA should be provided; for a merge commit, an array of more than one should be provided.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Parents>
     */
    public readonly array $parents;
    /**
     * Information about the author of the commit. By default, the `author` will be the authenticated user and the current date. See the `author` and `committer` object below for details.
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Author $author;
    /**
     * Information about the person who is making the commit. By default, `committer` will use the information set in `author`. See the `author` and `committer` object below for details.
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Committer $committer;
    /**
     * The [PGP signature](https://en.wikipedia.org/wiki/Pretty_Good_Privacy) of the commit. GitHub adds the signature to the `gpgsig` header of the created commit. For a commit signature to be verifiable by Git or GitHub, it must be an ASCII-armored detached PGP signature over the string commit as it would be written to the object database. To pass a `signature` parameter, you need to first manually create a valid PGP signature, which can be complicated. You may find it easier to [use the command line](https://git-scm.com/book/id/v2/Git-Tools-Signing-Your-Work) to create signed commits.
     */
    public readonly ?string $signature;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Parents> $parents
     */
    public function __construct(string $message, string $tree, array $parents, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Author $author, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Committer $committer, string $signature)
    {
        $this->message = $message;
        $this->tree = $tree;
        $this->parents = $parents;
        $this->author = $author;
        $this->committer = $committer;
        $this->signature = $signature;
    }
}
