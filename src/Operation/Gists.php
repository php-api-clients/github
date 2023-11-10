<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\BaseGist;
use ApiClients\Client\GitHub\Schema\GistComment;
use ApiClients\Client\GitHub\Schema\GistSimple;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Gists
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\BaseGist>|WithoutBody */
    public function list(string $since, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->gists👷List_()->call($since, $perPage, $page);
    }

    /** @return Observable<Schema\BaseGist>|WithoutBody */
    public function listListing(string $since, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->gists👷ListListing()->call($since, $perPage, $page);
    }

    /** @return */
    public function create(array $params): GistSimple|WithoutBody
    {
        return $this->operators->gists👷Create()->call($params);
    }

    /** @return Observable<Schema\BaseGist>|WithoutBody */
    public function listPublic(string $since, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->gists👷ListPublic()->call($since, $perPage, $page);
    }

    /** @return Observable<Schema\BaseGist>|WithoutBody */
    public function listPublicListing(string $since, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->gists👷ListPublicListing()->call($since, $perPage, $page);
    }

    /** @return Observable<Schema\BaseGist>|WithoutBody */
    public function listStarred(string $since, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->gists👷ListStarred()->call($since, $perPage, $page);
    }

    /** @return Observable<Schema\BaseGist>|WithoutBody */
    public function listStarredListing(string $since, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->gists👷ListStarredListing()->call($since, $perPage, $page);
    }

    /** @return */
    public function get(string $gistId): GistSimple|WithoutBody
    {
        return $this->operators->gists👷Get()->call($gistId);
    }

    /** @return */
    public function delete(string $gistId): WithoutBody
    {
        return $this->operators->gists👷Delete()->call($gistId);
    }

    /** @return */
    public function update(string $gistId, array $params): GistSimple
    {
        return $this->operators->gists👷Update()->call($gistId, $params);
    }

    /** @return Observable<Schema\GistComment>|WithoutBody */
    public function listComments(string $gistId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->gists👷ListComments()->call($gistId, $perPage, $page);
    }

    /** @return Observable<Schema\GistComment>|WithoutBody */
    public function listCommentsListing(string $gistId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->gists👷ListCommentsListing()->call($gistId, $perPage, $page);
    }

    /** @return */
    public function createComment(string $gistId, array $params): GistComment|WithoutBody
    {
        return $this->operators->gists👷CreateComment()->call($gistId, $params);
    }

    /** @return */
    public function getComment(string $gistId, int $commentId): GistComment|WithoutBody
    {
        return $this->operators->gists👷GetComment()->call($gistId, $commentId);
    }

    /** @return */
    public function deleteComment(string $gistId, int $commentId): WithoutBody
    {
        return $this->operators->gists👷DeleteComment()->call($gistId, $commentId);
    }

    /** @return */
    public function updateComment(string $gistId, int $commentId, array $params): GistComment
    {
        return $this->operators->gists👷UpdateComment()->call($gistId, $commentId, $params);
    }

    /** @return Observable<Schema\GistCommit>|WithoutBody */
    public function listCommits(string $gistId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->gists👷ListCommits()->call($gistId, $perPage, $page);
    }

    /** @return Observable<Schema\GistCommit>|WithoutBody */
    public function listCommitsListing(string $gistId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->gists👷ListCommitsListing()->call($gistId, $perPage, $page);
    }

    /** @return Observable<Schema\GistSimple>|WithoutBody */
    public function listForks(string $gistId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->gists👷ListForks()->call($gistId, $perPage, $page);
    }

    /** @return Observable<Schema\GistSimple>|WithoutBody */
    public function listForksListing(string $gistId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->gists👷ListForksListing()->call($gistId, $perPage, $page);
    }

    /** @return */
    public function fork(string $gistId): BaseGist|WithoutBody
    {
        return $this->operators->gists👷Fork()->call($gistId);
    }

    /** @return */
    public function checkIsStarred(string $gistId): WithoutBody
    {
        return $this->operators->gists👷CheckIsStarred()->call($gistId);
    }

    /** @return */
    public function star(string $gistId): WithoutBody
    {
        return $this->operators->gists👷Star()->call($gistId);
    }

    /** @return */
    public function unstar(string $gistId): WithoutBody
    {
        return $this->operators->gists👷Unstar()->call($gistId);
    }

    /** @return */
    public function getRevision(string $gistId, string $sha): GistSimple
    {
        return $this->operators->gists👷GetRevision()->call($gistId, $sha);
    }

    /** @return Observable<Schema\BaseGist> */
    public function listForUser(string $username, string $since, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListForUser()->call($username, $since, $perPage, $page);
    }

    /** @return Observable<Schema\BaseGist> */
    public function listForUserListing(string $username, string $since, int $perPage, int $page): iterable
    {
        return $this->operators->gists👷ListForUserListing()->call($username, $since, $perPage, $page);
    }
}
