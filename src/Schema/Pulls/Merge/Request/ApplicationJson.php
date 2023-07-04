<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Pulls\Merge\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"commit_title":{"type":"string","description":"Title for the automatic commit message."},"commit_message":{"type":"string","description":"Extra detail to append to automatic commit message."},"sha":{"type":"string","description":"SHA that pull request head must match to allow merge."},"merge_method":{"enum":["merge","squash","rebase"],"type":"string","description":"The merge method to use."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"commit_title":"generated","commit_message":"generated","sha":"generated","merge_method":"rebase"}';

    /**
     * commitTitle: Title for the automatic commit message.
     * commitMessage: Extra detail to append to automatic commit message.
     * sha: SHA that pull request head must match to allow merge.
     * mergeMethod: The merge method to use.
     */
    public function __construct(#[MapFrom('commit_title')]
    public string|null $commitTitle, #[MapFrom('commit_message')]
    public string|null $commitMessage, public string|null $sha, #[MapFrom('merge_method')]
    public string|null $mergeMethod,)
    {
    }
}
