<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"properties":{"query_suite":{"enum":["default","extended"],"type":"string","description":"CodeQL query suite to be used. If you specify the `query_suite` parameter, the default setup will be configured with this query suite only on all repositories that didn\'t have default setup already configured. It will not change the query suite on repositories that already have default setup configured.\\nIf you don\'t specify any `query_suite` in your request, the preferred query suite of the organization will be applied."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"query_suite":"default"}';

    /**
     * querySuite: CodeQL query suite to be used. If you specify the `query_suite` parameter, the default setup will be configured with this query suite only on all repositories that didn't have default setup already configured. It will not change the query suite on repositories that already have default setup configured.
    If you don't specify any `query_suite` in your request, the preferred query suite of the organization will be applied.
     */
    public function __construct(#[MapFrom('query_suite')]
    public string|null $querySuite,)
    {
    }
}
