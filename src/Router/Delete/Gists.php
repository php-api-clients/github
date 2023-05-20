<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Gists
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

    public function unstar(array $params)
    {
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists(Hydrator\Operation\Gists\GistId\Star::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId\Star::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star();
        }

        $operator = new Operator\Gists\Unstar($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId\Star::class]);

        return $operator->call($arguments['gist_id']);
    }

    public function deleteComment(array $params)
    {
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists(Hydrator\Operation\Gists\GistId\Comments\CommentId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId\Comments\CommentId::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId();
        }

        $operator = new Operator\Gists\DeleteComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId\Comments\CommentId::class]);

        return $operator->call($arguments['gist_id'], $arguments['comment_id']);
    }

    public function delete(array $params)
    {
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists(Hydrator\Operation\Gists\GistId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId();
        }

        $operator = new Operator\Gists\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId::class]);

        return $operator->call($arguments['gist_id']);
    }
}
