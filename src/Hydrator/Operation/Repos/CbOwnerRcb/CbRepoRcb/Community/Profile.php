<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Community;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Profile implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHub\Schema\CommunityProfile' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile($payload),
                'ApiClients\Client\GitHub\Schema\CommunityProfile\Files' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile⚡️Files($payload),
                'ApiClients\Client\GitHub\Schema\CodeOfConductSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConductSimple($payload),
                'ApiClients\Client\GitHub\Schema\CommunityHealthFile' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($payload),
                'ApiClients\Client\GitHub\Schema\LicenseSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile(array $payload): \ApiClients\Client\GitHub\Schema\CommunityProfile
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['health_percentage'] ?? null;
    
                if ($value === null) {
                    $properties['health_percentage'] = null;
                    goto after_health_percentage;
                }

                $properties['health_percentage'] = $value;
    
                after_health_percentage:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['documentation'] ?? null;
    
                if ($value === null) {
                    $properties['documentation'] = null;
                    goto after_documentation;
                }

                $properties['documentation'] = $value;
    
                after_documentation:

                $value = $payload['files'] ?? null;
    
                if ($value === null) {
                    $properties['files'] = null;
                    goto after_files;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'files';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile⚡️Files($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['files'] = $value;
    
                after_files:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['content_reports_enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'content_reports_enabled';
                    goto after_content_reports_enabled;
                }

                $properties['content_reports_enabled'] = $value;
    
                after_content_reports_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommunityProfile', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CommunityProfile::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\CommunityProfile(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommunityProfile', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile⚡️Files(array $payload): \ApiClients\Client\GitHub\Schema\CommunityProfile\Files
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['code_of_conduct'] ?? null;
    
                if ($value === null) {
                    $properties['code_of_conduct'] = null;
                    goto after_code_of_conduct;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'code_of_conduct';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConductSimple($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['code_of_conduct'] = $value;
    
                after_code_of_conduct:

                $value = $payload['code_of_conduct_file'] ?? null;
    
                if ($value === null) {
                    $properties['code_of_conduct_file'] = null;
                    goto after_code_of_conduct_file;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'code_of_conduct_file';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['code_of_conduct_file'] = $value;
    
                after_code_of_conduct_file:

                $value = $payload['license'] ?? null;
    
                if ($value === null) {
                    $properties['license'] = null;
                    goto after_license;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'license';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['license'] = $value;
    
                after_license:

                $value = $payload['contributing'] ?? null;
    
                if ($value === null) {
                    $properties['contributing'] = null;
                    goto after_contributing;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'contributing';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['contributing'] = $value;
    
                after_contributing:

                $value = $payload['readme'] ?? null;
    
                if ($value === null) {
                    $properties['readme'] = null;
                    goto after_readme;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'readme';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['readme'] = $value;
    
                after_readme:

                $value = $payload['issue_template'] ?? null;
    
                if ($value === null) {
                    $properties['issue_template'] = null;
                    goto after_issue_template;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'issue_template';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['issue_template'] = $value;
    
                after_issue_template:

                $value = $payload['pull_request_template'] ?? null;
    
                if ($value === null) {
                    $properties['pull_request_template'] = null;
                    goto after_pull_request_template;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'pull_request_template';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['pull_request_template'] = $value;
    
                after_pull_request_template:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommunityProfile\Files', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CommunityProfile\Files::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\CommunityProfile\Files(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommunityProfile\Files', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConductSimple(array $payload): \ApiClients\Client\GitHub\Schema\CodeOfConductSimple
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['key'] ?? null;
    
                if ($value === null) {
                    $properties['key'] = null;
                    goto after_key;
                }

                $properties['key'] = $value;
    
                after_key:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeOfConductSimple', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CodeOfConductSimple::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\CodeOfConductSimple(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeOfConductSimple', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile(array $payload): \ApiClients\Client\GitHub\Schema\CommunityHealthFile
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommunityHealthFile', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CommunityHealthFile::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\CommunityHealthFile(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommunityHealthFile', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple(array $payload): \ApiClients\Client\GitHub\Schema\LicenseSimple
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['key'] ?? null;
    
                if ($value === null) {
                    $properties['key'] = null;
                    goto after_key;
                }

                $properties['key'] = $value;
    
                after_key:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['spdx_id'] ?? null;
    
                if ($value === null) {
                    $properties['spdx_id'] = null;
                    goto after_spdx_id;
                }

                $properties['spdx_id'] = $value;
    
                after_spdx_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\LicenseSimple', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\LicenseSimple::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\LicenseSimple(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\LicenseSimple', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\CommunityProfile' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile($object),
                'ApiClients\Client\GitHub\Schema\CommunityProfile\Files' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile⚡️Files($object),
                'ApiClients\Client\GitHub\Schema\CodeOfConductSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConductSimple($object),
                'ApiClients\Client\GitHub\Schema\CommunityHealthFile' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($object),
                'ApiClients\Client\GitHub\Schema\LicenseSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CommunityProfile);
        $result = [];
        
        $health_percentage = $object->health_percentage;

        if ($health_percentage === null) {
            goto after_health_percentage;
        }
        after_health_percentage:        $result['health_percentage'] = $health_percentage;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $documentation = $object->documentation;

        if ($documentation === null) {
            goto after_documentation;
        }
        after_documentation:        $result['documentation'] = $documentation;

        
        $files = $object->files;

        if ($files === null) {
            goto after_files;
        }
        $files = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile⚡️Files($files);
        after_files:        $result['files'] = $files;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $content_reports_enabled = $object->content_reports_enabled;
        after_content_reports_enabled:        $result['content_reports_enabled'] = $content_reports_enabled;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile⚡️Files(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CommunityProfile\Files);
        $result = [];
        
        $code_of_conduct = $object->code_of_conduct;

        if ($code_of_conduct === null) {
            goto after_code_of_conduct;
        }
        $code_of_conduct = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConductSimple($code_of_conduct);
        after_code_of_conduct:        $result['code_of_conduct'] = $code_of_conduct;

        
        $code_of_conduct_file = $object->code_of_conduct_file;

        if ($code_of_conduct_file === null) {
            goto after_code_of_conduct_file;
        }
        $code_of_conduct_file = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($code_of_conduct_file);
        after_code_of_conduct_file:        $result['code_of_conduct_file'] = $code_of_conduct_file;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        $license = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple($license);
        after_license:        $result['license'] = $license;

        
        $contributing = $object->contributing;

        if ($contributing === null) {
            goto after_contributing;
        }
        $contributing = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($contributing);
        after_contributing:        $result['contributing'] = $contributing;

        
        $readme = $object->readme;

        if ($readme === null) {
            goto after_readme;
        }
        $readme = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($readme);
        after_readme:        $result['readme'] = $readme;

        
        $issue_template = $object->issue_template;

        if ($issue_template === null) {
            goto after_issue_template;
        }
        $issue_template = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($issue_template);
        after_issue_template:        $result['issue_template'] = $issue_template;

        
        $pull_request_template = $object->pull_request_template;

        if ($pull_request_template === null) {
            goto after_pull_request_template;
        }
        $pull_request_template = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($pull_request_template);
        after_pull_request_template:        $result['pull_request_template'] = $pull_request_template;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConductSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CodeOfConductSimple);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $key = $object->key;

        if ($key === null) {
            goto after_key;
        }
        after_key:        $result['key'] = $key;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CommunityHealthFile);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\LicenseSimple);
        $result = [];
        
        $key = $object->key;

        if ($key === null) {
            goto after_key;
        }
        after_key:        $result['key'] = $key;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $spdx_id = $object->spdx_id;

        if ($spdx_id === null) {
            goto after_spdx_id;
        }
        after_spdx_id:        $result['spdx_id'] = $spdx_id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
