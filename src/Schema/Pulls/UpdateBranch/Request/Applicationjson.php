<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Pulls\UpdateBranch\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Applicationjson
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"expected_head_sha":{"type":"string","description":"The expected SHA of the pull request\'s HEAD ref. This is the most recent commit on the pull request\'s branch. If the expected SHA does not match the pull request\'s HEAD, you will receive a `422 Unprocessable Entity` status. You can use the \\"[List commits](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#list-commits)\\" endpoint to find the most recent commit SHA. Default: SHA of the pull request\'s current HEAD ref."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"expected_head_sha":"generated_expected_head_sha_null"}';

    /**
     * expectedHeadSha: The expected SHA of the pull request's HEAD ref. This is the most recent commit on the pull request's branch. If the expected SHA does not match the pull request's HEAD, you will receive a `422 Unprocessable Entity` status. You can use the "[List commits](https://docs.github.com/rest/reference/repos#list-commits)" endpoint to find the most recent commit SHA. Default: SHA of the pull request's current HEAD ref.
     */
    public function __construct(#[MapFrom('expected_head_sha')] public ?string $expectedHeadSha)
    {
    }
}
