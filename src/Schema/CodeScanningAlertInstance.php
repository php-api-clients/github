<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class CodeScanningAlertInstance
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"ref":{"type":"string","description":"The full Git reference, formatted as `refs\\/heads\\/<branch name>`,\\n`refs\\/pull\\/<number>\\/merge`, or `refs\\/pull\\/<number>\\/head`."},"analysis_key":{"type":"string","description":"Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."},"environment":{"type":"string","description":"Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."},"category":{"type":"string","description":"Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code."},"state":{"enum":["open","closed","dismissed","fixed"],"type":"string","description":"State of a code scanning alert."},"commit_sha":{"type":"string"},"message":{"type":"object","properties":{"text":{"type":"string"}}},"location":{"type":"object","properties":{"path":{"type":"string"},"start_line":{"type":"integer"},"end_line":{"type":"integer"},"start_column":{"type":"integer"},"end_column":{"type":"integer"}},"description":"Describe a region within a file for the alert."},"html_url":{"type":"string"},"classifications":{"type":"array","items":{"enum":["source","generated","test","library",null],"type":["string","null"],"description":"A classification of the file. For example to identify it as generated."},"description":"Classifications that have been applied to the file that triggered the alert.\\nFor example identifying it as documentation, or a generated file."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
    * The full Git reference, formatted as `refs/heads/<branch name>`,
    `refs/pull/<number>/merge`, or `refs/pull/<number>/head`.
    */
    public ?string $ref;
    /**
     * Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     */
    public ?string $analysis_key;
    /**
     * Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     */
    public ?string $environment;
    /**
     * Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.
     */
    public ?string $category;
    /**
     * State of a code scanning alert.
     */
    public ?string $state;
    public ?string $commit_sha;
    public ?\ApiClients\Client\Github\Schema\CodeScanningAlertInstance\Message $message;
    /**
     * Describe a region within a file for the alert.
     */
    public ?\ApiClients\Client\Github\Schema\CodeScanningAlertLocation $location;
    public ?string $html_url;
    /**
    * Classifications that have been applied to the file that triggered the alert.
    For example identifying it as documentation, or a generated file.
    */
    public ?array $classifications;
    public function __construct(string $ref, string $analysis_key, string $environment, string $category, string $state, string $commit_sha, \ApiClients\Client\Github\Schema\CodeScanningAlertInstance\Message $message, \ApiClients\Client\Github\Schema\CodeScanningAlertLocation $location, string $html_url, array $classifications)
    {
        $this->ref = $ref;
        $this->analysis_key = $analysis_key;
        $this->environment = $environment;
        $this->category = $category;
        $this->state = $state;
        $this->commit_sha = $commit_sha;
        $this->message = $message;
        $this->location = $location;
        $this->html_url = $html_url;
        $this->classifications = $classifications;
    }
}
