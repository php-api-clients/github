<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\GlobalAdvisory;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class SecurityAdvisories
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\GlobalAdvisory> */
    public function listGlobalAdvisories(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('ghsa_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ghsa_id');
        }

        $arguments['ghsa_id'] = $params['ghsa_id'];
        unset($params['ghsa_id']);
        if (array_key_exists('cve_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: cve_id');
        }

        $arguments['cve_id'] = $params['cve_id'];
        unset($params['cve_id']);
        if (array_key_exists('ecosystem', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ecosystem');
        }

        $arguments['ecosystem'] = $params['ecosystem'];
        unset($params['ecosystem']);
        if (array_key_exists('severity', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: severity');
        }

        $arguments['severity'] = $params['severity'];
        unset($params['severity']);
        if (array_key_exists('cwes', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: cwes');
        }

        $arguments['cwes'] = $params['cwes'];
        unset($params['cwes']);
        if (array_key_exists('is_withdrawn', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: is_withdrawn');
        }

        $arguments['is_withdrawn'] = $params['is_withdrawn'];
        unset($params['is_withdrawn']);
        if (array_key_exists('affects', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: affects');
        }

        $arguments['affects'] = $params['affects'];
        unset($params['affects']);
        if (array_key_exists('published', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: published');
        }

        $arguments['published'] = $params['published'];
        unset($params['published']);
        if (array_key_exists('updated', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: updated');
        }

        $arguments['updated'] = $params['updated'];
        unset($params['updated']);
        if (array_key_exists('modified', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: modified');
        }

        $arguments['modified'] = $params['modified'];
        unset($params['modified']);
        if (array_key_exists('epss_percentage', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: epss_percentage');
        }

        $arguments['epss_percentage'] = $params['epss_percentage'];
        unset($params['epss_percentage']);
        if (array_key_exists('epss_percentile', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: epss_percentile');
        }

        $arguments['epss_percentile'] = $params['epss_percentile'];
        unset($params['epss_percentile']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: type');
        }

        $arguments['type'] = $params['type'];
        unset($params['type']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        $operator = new Internal\Operator\SecurityAdvisories\ListGlobalAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Advisories());

        return $operator->call($arguments['ghsa_id'], $arguments['cve_id'], $arguments['ecosystem'], $arguments['severity'], $arguments['cwes'], $arguments['is_withdrawn'], $arguments['affects'], $arguments['published'], $arguments['updated'], $arguments['modified'], $arguments['epss_percentage'], $arguments['epss_percentile'], $arguments['before'], $arguments['after'], $arguments['type'], $arguments['direction'], $arguments['per_page'], $arguments['sort']);
    }

    /** @return */
    public function getGlobalAdvisory(array $params): GlobalAdvisory
    {
        $arguments = [];
        if (array_key_exists('ghsa_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ghsa_id');
        }

        $arguments['ghsa_id'] = $params['ghsa_id'];
        unset($params['ghsa_id']);
        $operator = new Internal\Operator\SecurityAdvisories\GetGlobalAdvisory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Advisories🌀GhsaId());

        return $operator->call($arguments['ghsa_id']);
    }

    /** @return Observable<Schema\RepositoryAdvisory> */
    public function listOrgRepositoryAdvisories(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new Internal\Operator\SecurityAdvisories\ListOrgRepositoryAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecurityAdvisories());

        return $operator->call($arguments['org'], $arguments['before'], $arguments['after'], $arguments['state'], $arguments['direction'], $arguments['sort'], $arguments['per_page']);
    }

    /** @return Observable<Schema\RepositoryAdvisory> */
    public function listRepositoryAdvisories(array $params): iterable
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
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new Internal\Operator\SecurityAdvisories\ListRepositoryAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['before'], $arguments['after'], $arguments['state'], $arguments['direction'], $arguments['sort'], $arguments['per_page']);
    }

    /** @return */
    public function getRepositoryAdvisory(array $params): RepositoryAdvisory
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
        if (array_key_exists('ghsa_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ghsa_id');
        }

        $arguments['ghsa_id'] = $params['ghsa_id'];
        unset($params['ghsa_id']);
        $operator = new Internal\Operator\SecurityAdvisories\GetRepositoryAdvisory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ghsa_id']);
    }
}
