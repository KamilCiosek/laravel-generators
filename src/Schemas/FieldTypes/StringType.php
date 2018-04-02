<?php

namespace Webfactor\Laravel\Generators\Schemas\FieldTypes;

use Webfactor\Laravel\Generators\Contracts\MigrationFieldAbstract;

class StringType extends MigrationFieldAbstract
{
    protected $validationRule = 'required';

    protected $crudColumnType = 'text';

    protected $crudFieldType = 'text';
}
