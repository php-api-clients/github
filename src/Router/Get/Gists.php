<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Gists
{
    /**
     * @var array<class-string, \EventSauce\ObjectHydrator\ObjectMapper>
     */
    private array $hydrator = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHub\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHub\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function list_(array $params)
    {
        $arguments = array();
        if (array_key_exists('since', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: since');
        }
        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Gists::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gists::class] = $this->hydrators->getObjectMapperOperation🌀Gists();
        }
        $operation = new Operation\Gists\List_($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists::class], $arguments['since'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listComments(array $params)
    {
        $arguments = array();
        if (array_key_exists('gist_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: gist_id');
        }
        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Gists\CbGistIdRcb\Comments::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments();
        }
        $operation = new Operation\Gists\ListComments($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\Comments::class], $arguments['gist_id'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listCommits(array $params)
    {
        $arguments = array();
        if (array_key_exists('gist_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: gist_id');
        }
        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Gists\CbGistIdRcb\Commits::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\Commits::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits();
        }
        $operation = new Operation\Gists\ListCommits($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\Commits::class], $arguments['gist_id'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listForks(array $params)
    {
        $arguments = array();
        if (array_key_exists('gist_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: gist_id');
        }
        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Gists\CbGistIdRcb\Forks::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\Forks::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Forks();
        }
        $operation = new Operation\Gists\ListForks($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\Forks::class], $arguments['gist_id'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function checkIsStarred(array $params)
    {
        $arguments = array();
        if (array_key_exists('gist_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: gist_id');
        }
        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (\array_key_exists(Hydrator\Operation\Gists\CbGistIdRcb\Star::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\Star::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star();
        }
        $operation = new Operation\Gists\CheckIsStarred($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\Star::class], $arguments['gist_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function getRevision(array $params)
    {
        $arguments = array();
        if (array_key_exists('gist_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: gist_id');
        }
        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists('sha', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sha');
        }
        $arguments['sha'] = $params['sha'];
        unset($params['sha']);
        if (\array_key_exists(Hydrator\Operation\Gists\CbGistIdRcb\CbShaRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\CbShaRcb::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀CbShaRcb();
        }
        $operation = new Operation\Gists\GetRevision($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\CbShaRcb::class], $arguments['gist_id'], $arguments['sha']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\GistSimple {
            return $operation->createResponse($response);
        });
    }
    public function listForUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('since', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: since');
        }
        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Gists::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Gists::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Gists();
        }
        $operation = new Operation\Gists\ListForUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Gists::class], $arguments['username'], $arguments['since'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getComment(array $params)
    {
        $arguments = array();
        if (array_key_exists('gist_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: gist_id');
        }
        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: comment_id');
        }
        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (\array_key_exists(Hydrator\Operation\Gists\CbGistIdRcb\Comments\CbCommentIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\Comments\CbCommentIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments🌀CbCommentIdRcb();
        }
        $operation = new Operation\Gists\GetComment($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb\Comments\CbCommentIdRcb::class], $arguments['gist_id'], $arguments['comment_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\GistComment {
            return $operation->createResponse($response);
        });
    }
    public function listPublic(array $params)
    {
        $arguments = array();
        if (array_key_exists('since', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: since');
        }
        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Gists\Public_::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gists\Public_::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀Public_();
        }
        $operation = new Operation\Gists\ListPublic($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\Public_::class], $arguments['since'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listStarred(array $params)
    {
        $arguments = array();
        if (array_key_exists('since', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: since');
        }
        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Gists\Starred::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gists\Starred::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀Starred();
        }
        $operation = new Operation\Gists\ListStarred($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\Starred::class], $arguments['since'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function get(array $params)
    {
        $arguments = array();
        if (array_key_exists('gist_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: gist_id');
        }
        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (\array_key_exists(Hydrator\Operation\Gists\CbGistIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀CbGistIdRcb();
        }
        $operation = new Operation\Gists\Get($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\CbGistIdRcb::class], $arguments['gist_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\GistSimple {
            return $operation->createResponse($response);
        });
    }
}
