<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Operators;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\BaseGist;
use ApiClients\Client\GitHub\Schema\GistComment;
use ApiClients\Client\GitHub\Schema\GistSimple;

final class Gists
{
    public function __construct(private Operators $operators)
    {
    }

    /** @return iterable<Schema\BaseGist>|array{code:int} */
    public function list(string $since, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷List_()->call($since, $perPage, $page);
    }

    /** @return iterable<Schema\BaseGist>|array{code:int} */
    public function listListing(string $since, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListListing()->call($since, $perPage, $page);
    }

    /** @return Schema\GistSimple|array{code:int} */
    public function create(array $params): GistSimple|array
    {
        return $this->operators->gists👷Create()->call($params);
    }

    /** @return iterable<Schema\BaseGist>|array{code:int} */
    public function listPublic(string $since, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListPublic()->call($since, $perPage, $page);
    }

    /** @return iterable<Schema\BaseGist>|array{code:int} */
    public function listPublicListing(string $since, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListPublicListing()->call($since, $perPage, $page);
    }

    /** @return iterable<Schema\BaseGist>|array{code:int} */
    public function listStarred(string $since, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListStarred()->call($since, $perPage, $page);
    }

    /** @return iterable<Schema\BaseGist>|array{code:int} */
    public function listStarredListing(string $since, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListStarredListing()->call($since, $perPage, $page);
    }

    /** @return Schema\GistSimple|array{code:int} */
    public function get(string $gistId): GistSimple|array
    {
        return $this->operators->gists👷Get()->call($gistId);
    }

    /** @return array{code:int} */
    public function delete(string $gistId): array
    {
        return $this->operators->gists👷Delete()->call($gistId);
    }

    /** @return */
    public function update(string $gistId, array $params): GistSimple|array
    {
        return $this->operators->gists👷Update()->call($gistId, $params);
    }

    /** @return iterable<Schema\GistComment>|array{code:int} */
    public function listComments(string $gistId, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListComments()->call($gistId, $perPage, $page);
    }

    /** @return iterable<Schema\GistComment>|array{code:int} */
    public function listCommentsListing(string $gistId, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListCommentsListing()->call($gistId, $perPage, $page);
    }

    /** @return Schema\GistComment|array{code:int} */
    public function createComment(string $gistId, array $params): GistComment|array
    {
        return $this->operators->gists👷CreateComment()->call($gistId, $params);
    }

    /** @return Schema\GistComment|array{code:int} */
    public function getComment(string $gistId, int $commentId): GistComment|array
    {
        return $this->operators->gists👷GetComment()->call($gistId, $commentId);
    }

    /** @return array{code:int} */
    public function deleteComment(string $gistId, int $commentId): array
    {
        return $this->operators->gists👷DeleteComment()->call($gistId, $commentId);
    }

    /** @return */
    public function updateComment(string $gistId, int $commentId, array $params): GistComment|array
    {
        return $this->operators->gists👷UpdateComment()->call($gistId, $commentId, $params);
    }

    /** @return iterable<Schema\GistCommit>|array{code:int} */
    public function listCommits(string $gistId, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListCommits()->call($gistId, $perPage, $page);
    }

    /** @return iterable<Schema\GistCommit>|array{code:int} */
    public function listCommitsListing(string $gistId, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListCommitsListing()->call($gistId, $perPage, $page);
    }

    /** @return iterable<Schema\GistSimple>|array{code:int} */
    public function listForks(string $gistId, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListForks()->call($gistId, $perPage, $page);
    }

    /** @return iterable<Schema\GistSimple>|array{code:int} */
    public function listForksListing(string $gistId, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListForksListing()->call($gistId, $perPage, $page);
    }

    /** @return Schema\BaseGist|array{code:int} */
    public function fork(string $gistId): BaseGist|array
    {
        return $this->operators->gists👷Fork()->call($gistId);
    }

    /** @return array{code:int} */
    public function checkIsStarred(string $gistId): array
    {
        return $this->operators->gists👷CheckIsStarred()->call($gistId);
    }

    /** @return array{code:int} */
    public function star(string $gistId): array
    {
        return $this->operators->gists👷Star()->call($gistId);
    }

    /** @return array{code:int} */
    public function unstar(string $gistId): array
    {
        return $this->operators->gists👷Unstar()->call($gistId);
    }

    /** @return */
    public function getRevision(string $gistId, string $sha): GistSimple|array
    {
        return $this->operators->gists👷GetRevision()->call($gistId, $sha);
    }

    /** @return iterable<Schema\BaseGist> */
    public function listForUser(string $username, string $since, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListForUser()->call($username, $since, $perPage, $page);
    }

    /** @return iterable<Schema\BaseGist> */
    public function listForUserListing(string $username, string $since, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListForUserListing()->call($username, $since, $perPage, $page);
    }
}
