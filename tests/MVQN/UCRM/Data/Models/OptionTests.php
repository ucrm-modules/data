<?php
declare(strict_types=1);

namespace MVQN\UCRM\Data\Models;

use MVQN\Data\Database;

/**
 * Class OptionTests
 *
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 */
class OptionTests extends \PHPUnit\Framework\TestCase
{
    protected function setUp()
    {
        $env = new \Dotenv\Dotenv(__DIR__."/../../../../../");
        $env->load();

        Database::connect(
            getenv("POSTGRES_HOST"),
            (int)getenv("POSTGRES_PORT"),
            getenv("POSTGRES_DB"),
            getenv("POSTGRES_USER"),
            getenv("POSTGRES_PASSWORD")
        );

    }

    // =================================================================================================================
    // DATABASE
    // -----------------------------------------------------------------------------------------------------------------

    public function testDatabaseOption()
    {
        $options = Option::select();
        echo $options;

    }




}