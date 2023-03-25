<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\Merge\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["base","head"],"type":"object","properties":{"base":{"type":"string","description":"The name of the base branch that the head will be merged into."},"head":{"type":"string","description":"The head to merge. This can be a branch name or a commit SHA1."},"commit_message":{"type":"string","description":"Commit message to use for the merge commit. If omitted, a default message will be used."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"base":"generated_base_null","head":"generated_head_null","commitMessage":"generated_commit_message_null"}';
    /**
     * base: The name of the base branch that the head will be merged into.
     * head: The head to merge. This can be a branch name or a commit SHA1.
     * commitMessage: Commit message to use for the merge commit. If omitted, a default message will be used.
     */
    public function __construct(public string $base, public string $head, #[\EventSauce\ObjectHydrator\MapFrom('commit_message')] public ?string $commitMessage)
    {
    }
}
