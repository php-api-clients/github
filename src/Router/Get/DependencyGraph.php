<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class DependencyGraph
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function exportSbom(array $params): DependencyGraphSpdxSbom|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Sbom::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Sbom::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom();
        }

        $operator = new Operator\DependencyGraph\ExportSbom($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Sbom::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return iterable<Schema\DependencyGraphDiff> */
    public function diffRange(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists('basehead', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: basehead');
        }

        $arguments['basehead'] = $params['basehead'];
        unset($params['basehead']);
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead();
        }

        $operator = new Operator\DependencyGraph\DiffRange($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['basehead'], $arguments['name']);
    }
}
