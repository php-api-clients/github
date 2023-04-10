<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\Merge\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["base","head"],"type":"object","properties":{"base":{"type":"string","description":"The name of the base branch that the head will be merged into."},"head":{"type":"string","description":"The head to merge. This can be a branch name or a commit SHA1."},"commit_message":{"type":"string","description":"Commit message to use for the merge commit. If omitted, a default message will be used."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"base":"generated_base_null","head":"generated_head_null","commit_message":"generated_commit_message_null"}';
    /**
     * base: The name of the base branch that the head will be merged into.
     * head: The head to merge. This can be a branch name or a commit SHA1.
     * commitMessage: Commit message to use for the merge commit. If omitted, a default message will be used.
     */
    public function __construct(public string $base, public string $head, #[\EventSauce\ObjectHydrator\MapFrom('commit_message')] public ?string $commitMessage)
    {
    }
}
