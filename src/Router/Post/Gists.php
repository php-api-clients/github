<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\BaseGist;
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

    /** @return (Schema\GistComment | array{code: int}) */
    public function createComment(array $params): GistComment|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists(Hydrator\Operation\Gists\GistId\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments();
        }

        $operator = new Operator\Gists\CreateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId\Comments::class]);

        return $operator->call($arguments['gist_id'], $params);
    }

    /** @return (Schema\BaseGist | array{code: int}) */
    public function fork(array $params): BaseGist|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists(Hydrator\Operation\Gists\GistId\Forks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId\Forks::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks();
        }

        $operator = new Operator\Gists\Fork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId\Forks::class]);

        return $operator->call($arguments['gist_id']);
    }

    /** @return (Schema\GistSimple | array{code: int}) */
    public function create(array $params): GistSimple|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Gists::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists::class] = $this->hydrators->getObjectMapperOperation🌀Gists();
        }

        $operator = new Operator\Gists\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists::class]);

        return $operator->call($params);
    }
}
