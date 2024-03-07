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
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Git
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function createBlob(string $owner, string $repo, array $params): ShortBlob
    {
        return $this->operators->git👷CreateBlob()->call($owner, $repo, $params);
    }

    /** @return */
    public function getBlob(string $owner, string $repo, string $fileSha): Blob
    {
        return $this->operators->git👷GetBlob()->call($owner, $repo, $fileSha);
    }

    /** @return */
    public function createCommit(string $owner, string $repo, array $params): GitCommit
    {
        return $this->operators->git👷CreateCommit()->call($owner, $repo, $params);
    }

    /** @return */
    public function getCommit(string $owner, string $repo, string $commitSha): GitCommit
    {
        return $this->operators->git👷GetCommit()->call($owner, $repo, $commitSha);
    }

    /** @return iterable<int,Schema\GitRef> */
    public function listMatchingRefs(string $owner, string $repo, string $ref): iterable
    {
        return $this->operators->git👷ListMatchingRefs()->call($owner, $repo, $ref);
    }

    public function getRef(string $owner, string $repo, string $ref): GitRef
    {
        return $this->operators->git👷GetRef()->call($owner, $repo, $ref);
    }

    /** @return */
    public function createRef(string $owner, string $repo, array $params): GitRef
    {
        return $this->operators->git👷CreateRef()->call($owner, $repo, $params);
    }

    public function deleteRef(string $owner, string $repo, string $ref): WithoutBody
    {
        return $this->operators->git👷DeleteRef()->call($owner, $repo, $ref);
    }

    public function updateRef(string $owner, string $repo, string $ref, array $params): GitRef
    {
        return $this->operators->git👷UpdateRef()->call($owner, $repo, $ref, $params);
    }

    /** @return */
    public function createTag(string $owner, string $repo, array $params): GitTag
    {
        return $this->operators->git👷CreateTag()->call($owner, $repo, $params);
    }

    /** @return */
    public function getTag(string $owner, string $repo, string $tagSha): GitTag
    {
        return $this->operators->git👷GetTag()->call($owner, $repo, $tagSha);
    }

    /** @return */
    public function createTree(string $owner, string $repo, array $params): GitTree
    {
        return $this->operators->git👷CreateTree()->call($owner, $repo, $params);
    }

    /** @return */
    public function getTree(string $owner, string $repo, string $treeSha, string $recursive): GitTree
    {
        return $this->operators->git👷GetTree()->call($owner, $repo, $treeSha, $recursive);
    }
}
