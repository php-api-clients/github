<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CFd7F1157Ce674175F74751Ab8Ade34Da
{
    public const SCHEMA_JSON = '{"required":["message","tree"],"type":"object","properties":{"message":{"type":"string","description":"The commit message"},"tree":{"type":"string","description":"The SHA of the tree object this commit points to"},"parents":{"type":"array","items":{"type":"string"},"description":"The SHAs of the commits that were the parents of this commit. If omitted or empty, the commit will be written as a root commit. For a single parent, an array of one SHA should be provided; for a merge commit, an array of more than one should be provided."},"author":{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"},"date":{"type":"string","description":"Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"Information about the author of the commit. By default, the `author` will be the authenticated user and the current date. See the `author` and `committer` object below for details."},"committer":{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"},"date":{"type":"string","description":"Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"Information about the person who is making the commit. By default, `committer` will use the information set in `author`. See the `author` and `committer` object below for details."},"signature":{"type":"string","description":"The [PGP signature](https:\\/\\/en.wikipedia.org\\/wiki\\/Pretty_Good_Privacy) of the commit. GitHub adds the signature to the `gpgsig` header of the created commit. For a commit signature to be verifiable by Git or GitHub, it must be an ASCII-armored detached PGP signature over the string commit as it would be written to the object database. To pass a `signature` parameter, you need to first manually create a valid PGP signature, which can be complicated. You may find it easier to [use the command line](https:\\/\\/git-scm.com\\/book\\/id\\/v2\\/Git-Tools-Signing-Your-Work) to create signed commits."}}}';
    public const SCHEMA_TITLE = 'c_fd7f1157ce674175f74751ab8ade34da';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The commit message
     */
    private string $message;
    /**
     * The SHA of the tree object this commit points to
     */
    private string $tree;
    /**
     * The SHAs of the commits that were the parents of this commit. If omitted or empty, the commit will be written as a root commit. For a single parent, an array of one SHA should be provided; for a merge commit, an array of more than one should be provided.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CFd7F1157Ce674175F74751Ab8Ade34Da\Parents>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CFd7F1157Ce674175F74751Ab8Ade34Da\Parents::class)
     */
    private array $parents = array();
    /**
     * Information about the author of the commit. By default, the `author` will be the authenticated user and the current date. See the `author` and `committer` object below for details.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CFd7F1157Ce674175F74751Ab8Ade34Da\Author::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CFd7F1157Ce674175F74751Ab8Ade34Da\Author $author = null;
    /**
     * Information about the person who is making the commit. By default, `committer` will use the information set in `author`. See the `author` and `committer` object below for details.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CFd7F1157Ce674175F74751Ab8Ade34Da\Committer::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CFd7F1157Ce674175F74751Ab8Ade34Da\Committer $committer = null;
    /**
     * The [PGP signature](https://en.wikipedia.org/wiki/Pretty_Good_Privacy) of the commit. GitHub adds the signature to the `gpgsig` header of the created commit. For a commit signature to be verifiable by Git or GitHub, it must be an ASCII-armored detached PGP signature over the string commit as it would be written to the object database. To pass a `signature` parameter, you need to first manually create a valid PGP signature, which can be complicated. You may find it easier to [use the command line](https://git-scm.com/book/id/v2/Git-Tools-Signing-Your-Work) to create signed commits.
     */
    private ?string $signature = null;
    /**
     * The commit message
     */
    public function message() : string
    {
        return $this->message;
    }
    /**
     * The SHA of the tree object this commit points to
     */
    public function tree() : string
    {
        return $this->tree;
    }
    /**
     * The SHAs of the commits that were the parents of this commit. If omitted or empty, the commit will be written as a root commit. For a single parent, an array of one SHA should be provided; for a merge commit, an array of more than one should be provided.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CFd7F1157Ce674175F74751Ab8Ade34Da\Parents>
     */
    public function parents() : array
    {
        return $this->parents;
    }
    /**
     * Information about the author of the commit. By default, the `author` will be the authenticated user and the current date. See the `author` and `committer` object below for details.
     */
    public function author() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CFd7F1157Ce674175F74751Ab8Ade34Da\Author
    {
        return $this->author;
    }
    /**
     * Information about the person who is making the commit. By default, `committer` will use the information set in `author`. See the `author` and `committer` object below for details.
     */
    public function committer() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CFd7F1157Ce674175F74751Ab8Ade34Da\Committer
    {
        return $this->committer;
    }
    /**
     * The [PGP signature](https://en.wikipedia.org/wiki/Pretty_Good_Privacy) of the commit. GitHub adds the signature to the `gpgsig` header of the created commit. For a commit signature to be verifiable by Git or GitHub, it must be an ASCII-armored detached PGP signature over the string commit as it would be written to the object database. To pass a `signature` parameter, you need to first manually create a valid PGP signature, which can be complicated. You may find it easier to [use the command line](https://git-scm.com/book/id/v2/Git-Tools-Signing-Your-Work) to create signed commits.
     */
    public function signature() : ?string
    {
        return $this->signature;
    }
}
