<?php

namespace Webfactor\Laravel\Generators\Schemas\Naming;

use Webfactor\Laravel\Generators\Contracts\NamingAbstract;

class Seeder extends NamingAbstract
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return ucfirst($this->entity);
    }

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return ucfirst($this->entity) . 'Seeder';
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->getName() . 'Seeder.php';
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return database_path('seeds');
    }

    /**
     * @return string
     */
    public function getRelativeFilePath(): string
    {
        return 'database/seeds/'.$this->getFileName();
    }

    /**
     * @return string
     */
    public function getStub(): string
    {
        return __DIR__ . '/../../../stubs/seeder.stub';
    }
}
