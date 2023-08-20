<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema\GistComment;
use ApiClients\Client\GitHub\Schema\GistSimple;
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

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function update(array $params): GistSimple|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists(Hydrator\Operation\Gists\GistId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId();
        }

        $operator = new Operator\Gists\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId::class]);

        return $operator->call($arguments['gist_id'], $params);
    }

    /** @return */
    public function updateComment(array $params): GistComment|array
    {
        $matched   = true;
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

        $operator = new Operator\Gists\UpdateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId\Comments\CommentId::class]);

        return $operator->call($arguments['gist_id'], $arguments['comment_id'], $params);
    }
}
