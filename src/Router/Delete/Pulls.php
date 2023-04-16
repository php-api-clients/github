<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema\PullRequestReview;
use ApiClients\Client\GitHub\Schema\PullRequestSimple;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Pulls
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function deleteReviewComment(array $params)
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb();
        }

        $operation = new Operation\Pulls\DeleteReviewComment($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb::class], $arguments['owner'], $arguments['repo'], $arguments['comment_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }

    public function removeRequestedReviewers(array $params)
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('pull_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pull_number');
        }

        $arguments['pull_number'] = $params['pull_number'];
        unset($params['pull_number']);
        if (array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers();
        }

        $operation = new Operation\Pulls\RemoveRequestedReviewers($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers::class], $arguments['owner'], $arguments['repo'], $arguments['pull_number']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PullRequestSimple {
            return $operation->createResponse($response);
        });
    }

    public function deletePendingReview(array $params)
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('pull_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pull_number');
        }

        $arguments['pull_number'] = $params['pull_number'];
        unset($params['pull_number']);
        if (array_key_exists('review_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: review_id');
        }

        $arguments['review_id'] = $params['review_id'];
        unset($params['review_id']);
        if (array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb();
        }

        $operation = new Operation\Pulls\DeletePendingReview($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb::class], $arguments['owner'], $arguments['repo'], $arguments['pull_number'], $arguments['review_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PullRequestReview {
            return $operation->createResponse($response);
        });
    }
}
