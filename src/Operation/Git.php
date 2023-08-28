<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Blob;
use ApiClients\Client\GitHub\Schema\GitCommit;
use ApiClients\Client\GitHub\Schema\GitRef;
use ApiClients\Client\GitHub\Schema\GitTag;
use ApiClients\Client\GitHub\Schema\GitTree;
use ApiClients\Client\GitHub\Schema\ShortBlob;

final class Git
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\ShortBlob */
    public function createBlob(string $owner, string $repo, array $params): ShortBlob|array
    {
        return $this->operators->git👷CreateBlob()->call($owner, $repo, $params);
    }

    /** @return Schema\Blob */
    public function getBlob(string $owner, string $repo, string $fileSha): Blob|array
    {
        return $this->operators->git👷GetBlob()->call($owner, $repo, $fileSha);
    }

    /** @return Schema\GitCommit */
    public function createCommit(string $owner, string $repo, array $params): GitCommit|array
    {
        return $this->operators->git👷CreateCommit()->call($owner, $repo, $params);
    }

    /** @return Schema\GitCommit */
    public function getCommit(string $owner, string $repo, string $commitSha): GitCommit|array
    {
        return $this->operators->git👷GetCommit()->call($owner, $repo, $commitSha);
    }

    /** @return iterable<Schema\GitRef> */
    public function listMatchingRefs(string $owner, string $repo, string $ref): iterable
    {
        return $this->operators->git👷ListMatchingRefs()->call($owner, $repo, $ref);
    }

    /** @return Schema\GitRef */
    public function getRef(string $owner, string $repo, string $ref): GitRef|array
    {
        return $this->operators->git👷GetRef()->call($owner, $repo, $ref);
    }

    /** @return Schema\GitRef */
    public function createRef(string $owner, string $repo, array $params): GitRef|array
    {
        return $this->operators->git👷CreateRef()->call($owner, $repo, $params);
    }

    /** @return array{code:int} */
    public function deleteRef(string $owner, string $repo, string $ref): array
    {
        return $this->operators->git👷DeleteRef()->call($owner, $repo, $ref);
    }

    /** @return Schema\GitRef */
    public function updateRef(string $owner, string $repo, string $ref, array $params): GitRef|array
    {
        return $this->operators->git👷UpdateRef()->call($owner, $repo, $ref, $params);
    }

    /** @return Schema\GitTag */
    public function createTag(string $owner, string $repo, array $params): GitTag|array
    {
        return $this->operators->git👷CreateTag()->call($owner, $repo, $params);
    }

    /** @return Schema\GitTag */
    public function getTag(string $owner, string $repo, string $tagSha): GitTag|array
    {
        return $this->operators->git👷GetTag()->call($owner, $repo, $tagSha);
    }

    /** @return Schema\GitTree */
    public function createTree(string $owner, string $repo, array $params): GitTree|array
    {
        return $this->operators->git👷CreateTree()->call($owner, $repo, $params);
    }

    /** @return Schema\GitTree */
    public function getTree(string $owner, string $repo, string $treeSha, string $recursive): GitTree|array
    {
        return $this->operators->git👷GetTree()->call($owner, $repo, $treeSha, $recursive);
    }
}
