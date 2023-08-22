<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\List;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class Checks
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return iterable<Schema\CheckAnnotation> */
    public function listAnnotationsListing(array $params): iterable
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
        if (array_key_exists('check_run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_run_id');
        }

        $arguments['check_run_id'] = $params['check_run_id'];
        unset($params['check_run_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Checks\ListAnnotationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations::class]);
            $items    = $operator->call($arguments['owner'], $arguments['repo'], $arguments['check_run_id'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}
