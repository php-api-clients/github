<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\User;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class MarketplacePurchases implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\UserMarketplacePurchase' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️UserMarketplacePurchase($payload),
                'ApiClients\Client\GitHub\Schema\MarketplaceAccount' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceAccount($payload),
                'ApiClients\Client\GitHub\Schema\MarketplaceListingPlan' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️UserMarketplacePurchase(array $payload): \ApiClients\Client\GitHub\Schema\UserMarketplacePurchase
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['billing_cycle'] ?? null;
    
                if ($value === null) {
                    $properties['billing_cycle'] = null;
                    goto after_billing_cycle;
                }

                $properties['billing_cycle'] = $value;
    
                after_billing_cycle:

                $value = $payload['next_billing_date'] ?? null;
    
                if ($value === null) {
                    $properties['next_billing_date'] = null;
                    goto after_next_billing_date;
                }

                $properties['next_billing_date'] = $value;
    
                after_next_billing_date:

                $value = $payload['unit_count'] ?? null;
    
                if ($value === null) {
                    $properties['unit_count'] = null;
                    goto after_unit_count;
                }

                $properties['unit_count'] = $value;
    
                after_unit_count:

                $value = $payload['on_free_trial'] ?? null;
    
                if ($value === null) {
                    $properties['on_free_trial'] = null;
                    goto after_on_free_trial;
                }

                $properties['on_free_trial'] = $value;
    
                after_on_free_trial:

                $value = $payload['free_trial_ends_on'] ?? null;
    
                if ($value === null) {
                    $properties['free_trial_ends_on'] = null;
                    goto after_free_trial_ends_on;
                }

                $properties['free_trial_ends_on'] = $value;
    
                after_free_trial_ends_on:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['account'] ?? null;
    
                if ($value === null) {
                    $properties['account'] = null;
                    goto after_account;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'account';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceAccount($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['account'] = $value;
    
                after_account:

                $value = $payload['plan'] ?? null;
    
                if ($value === null) {
                    $properties['plan'] = null;
                    goto after_plan;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'plan';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['plan'] = $value;
    
                after_plan:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\UserMarketplacePurchase', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\UserMarketplacePurchase::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\UserMarketplacePurchase(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\UserMarketplacePurchase', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceAccount(array $payload): \ApiClients\Client\GitHub\Schema\MarketplaceAccount
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

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $properties['type'] = null;
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'node_id';
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['login'] ?? null;
    
                if ($value === null) {
                    $properties['login'] = null;
                    goto after_login;
                }

                $properties['login'] = $value;
    
                after_login:

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $properties['email'] = null;
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['organization_billing_email'] ?? null;
    
                if ($value === null) {
                    $properties['organization_billing_email'] = null;
                    goto after_organization_billing_email;
                }

                $properties['organization_billing_email'] = $value;
    
                after_organization_billing_email:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplaceAccount', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\MarketplaceAccount::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\MarketplaceAccount(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplaceAccount', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan(array $payload): \ApiClients\Client\GitHub\Schema\MarketplaceListingPlan
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

                $value = $payload['accounts_url'] ?? null;
    
                if ($value === null) {
                    $properties['accounts_url'] = null;
                    goto after_accounts_url;
                }

                $properties['accounts_url'] = $value;
    
                after_accounts_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $properties['number'] = null;
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['monthly_price_in_cents'] ?? null;
    
                if ($value === null) {
                    $properties['monthly_price_in_cents'] = null;
                    goto after_monthly_price_in_cents;
                }

                $properties['monthly_price_in_cents'] = $value;
    
                after_monthly_price_in_cents:

                $value = $payload['yearly_price_in_cents'] ?? null;
    
                if ($value === null) {
                    $properties['yearly_price_in_cents'] = null;
                    goto after_yearly_price_in_cents;
                }

                $properties['yearly_price_in_cents'] = $value;
    
                after_yearly_price_in_cents:

                $value = $payload['price_model'] ?? null;
    
                if ($value === null) {
                    $properties['price_model'] = null;
                    goto after_price_model;
                }

                $properties['price_model'] = $value;
    
                after_price_model:

                $value = $payload['has_free_trial'] ?? null;
    
                if ($value === null) {
                    $properties['has_free_trial'] = null;
                    goto after_has_free_trial;
                }

                $properties['has_free_trial'] = $value;
    
                after_has_free_trial:

                $value = $payload['unit_name'] ?? null;
    
                if ($value === null) {
                    $properties['unit_name'] = null;
                    goto after_unit_name;
                }

                $properties['unit_name'] = $value;
    
                after_unit_name:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['bullets'] ?? null;
    
                if ($value === null) {
                    $properties['bullets'] = null;
                    goto after_bullets;
                }

                $properties['bullets'] = $value;
    
                after_bullets:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\MarketplaceListingPlan::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\MarketplaceListingPlan(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $properties['message'] = null;
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $properties['status'] = null;
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\UserMarketplacePurchase' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️UserMarketplacePurchase($object),
                'ApiClients\Client\GitHub\Schema\MarketplaceAccount' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceAccount($object),
                'ApiClients\Client\GitHub\Schema\MarketplaceListingPlan' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️UserMarketplacePurchase(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\UserMarketplacePurchase);
        $result = [];
        
        $billing_cycle = $object->billing_cycle;

        if ($billing_cycle === null) {
            goto after_billing_cycle;
        }
        after_billing_cycle:        $result['billing_cycle'] = $billing_cycle;

        
        $next_billing_date = $object->next_billing_date;

        if ($next_billing_date === null) {
            goto after_next_billing_date;
        }
        after_next_billing_date:        $result['next_billing_date'] = $next_billing_date;

        
        $unit_count = $object->unit_count;

        if ($unit_count === null) {
            goto after_unit_count;
        }
        after_unit_count:        $result['unit_count'] = $unit_count;

        
        $on_free_trial = $object->on_free_trial;

        if ($on_free_trial === null) {
            goto after_on_free_trial;
        }
        after_on_free_trial:        $result['on_free_trial'] = $on_free_trial;

        
        $free_trial_ends_on = $object->free_trial_ends_on;

        if ($free_trial_ends_on === null) {
            goto after_free_trial_ends_on;
        }
        after_free_trial_ends_on:        $result['free_trial_ends_on'] = $free_trial_ends_on;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $account = $object->account;

        if ($account === null) {
            goto after_account;
        }
        $account = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceAccount($account);
        after_account:        $result['account'] = $account;

        
        $plan = $object->plan;

        if ($plan === null) {
            goto after_plan;
        }
        $plan = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($plan);
        after_plan:        $result['plan'] = $plan;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceAccount(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\MarketplaceAccount);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $login = $object->login;

        if ($login === null) {
            goto after_login;
        }
        after_login:        $result['login'] = $login;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $organization_billing_email = $object->organization_billing_email;

        if ($organization_billing_email === null) {
            goto after_organization_billing_email;
        }
        after_organization_billing_email:        $result['organization_billing_email'] = $organization_billing_email;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\MarketplaceListingPlan);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $accounts_url = $object->accounts_url;

        if ($accounts_url === null) {
            goto after_accounts_url;
        }
        after_accounts_url:        $result['accounts_url'] = $accounts_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $monthly_price_in_cents = $object->monthly_price_in_cents;

        if ($monthly_price_in_cents === null) {
            goto after_monthly_price_in_cents;
        }
        after_monthly_price_in_cents:        $result['monthly_price_in_cents'] = $monthly_price_in_cents;

        
        $yearly_price_in_cents = $object->yearly_price_in_cents;

        if ($yearly_price_in_cents === null) {
            goto after_yearly_price_in_cents;
        }
        after_yearly_price_in_cents:        $result['yearly_price_in_cents'] = $yearly_price_in_cents;

        
        $price_model = $object->price_model;

        if ($price_model === null) {
            goto after_price_model;
        }
        after_price_model:        $result['price_model'] = $price_model;

        
        $has_free_trial = $object->has_free_trial;

        if ($has_free_trial === null) {
            goto after_has_free_trial;
        }
        after_has_free_trial:        $result['has_free_trial'] = $has_free_trial;

        
        $unit_name = $object->unit_name;

        if ($unit_name === null) {
            goto after_unit_name;
        }
        after_unit_name:        $result['unit_name'] = $unit_name;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $bullets = $object->bullets;

        if ($bullets === null) {
            goto after_bullets;
        }
        static $bulletsSerializer0;

        if ($bulletsSerializer0 === null) {
            $bulletsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $bullets = $bulletsSerializer0->serialize($bullets, $this);
        after_bullets:        $result['bullets'] = $bullets;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


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
