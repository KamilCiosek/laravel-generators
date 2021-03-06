<?php

namespace Webfactor\Laravel\Generators\Schemas\FieldTypes;

use Webfactor\Laravel\Generators\Contracts\SchemaFieldAbstract;

class StringType extends SchemaFieldAbstract
{
    public $validationRule = 'required';

    public $migrationField = [
        'type' => 'string',
    ];

    public $crudColumn = [
        'type' => 'text',
    ];

    public $crudField = [
        'type' => 'text',
    ];
}
