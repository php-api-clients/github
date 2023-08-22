<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\GitignoreTemplate;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Gitignore
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Observable<string> | array{code: int}) */
    public function getAllTemplates(array $params): iterable
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Gitignore\Templates::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gitignore\Templates::class] = $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates();
        }

        $operator = new Operator\Gitignore\GetAllTemplates($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gitignore\Templates::class]);

        return $operator->call();
    }

    /** @return (Schema\GitignoreTemplate | array{code: int}) */
    public function getTemplate(array $params): GitignoreTemplate|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        if (array_key_exists(Hydrator\Operation\Gitignore\Templates\Name::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gitignore\Templates\Name::class] = $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name();
        }

        $operator = new Operator\Gitignore\GetTemplate($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gitignore\Templates\Name::class]);

        return $operator->call($arguments['name']);
    }
}
