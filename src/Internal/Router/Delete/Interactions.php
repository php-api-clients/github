<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Delete;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Interactions
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code:int} */
    public function removeRestrictionsForOrg(array $params): array
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Interactions\RemoveRestrictionsForOrg($this->browser, $this->authentication);

        return $operator->call($arguments['org']);
    }

    /** @return array{code:int} */
    public function removeRestrictionsForRepo(array $params): array
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
        $operator = new Internal\Operator\Interactions\RemoveRestrictionsForRepo($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return array{code:int} */
    public function removeRestrictionsForAuthenticatedUser(array $params): array
    {
        $operator = new Internal\Operator\Interactions\RemoveRestrictionsForAuthenticatedUser($this->browser, $this->authentication);

        return $operator->call();
    }
}
