<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema\Operations\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class SecurityAdvisories
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function createPrivateVulnerabilityReport(array $params): RepositoryAdvisory|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\Reports::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\Reports::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports();
        }

        $operator = new Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\Reports::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function createRepositoryAdvisory(array $params): RepositoryAdvisory|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories();
        }

        $operator = new Operator\SecurityAdvisories\CreateRepositoryAdvisory($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function createRepositoryAdvisoryCveRequest(array $params): Json|array
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
        if (array_key_exists('ghsa_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ghsa_id');
        }

        $arguments['ghsa_id'] = $params['ghsa_id'];
        unset($params['ghsa_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Cve::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Cve::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve();
        }

        $operator = new Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Cve::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ghsa_id']);
    }
}
