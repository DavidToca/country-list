<?php

/**
 * This file is part of the Country List project.
 *
 *  (c) Саша Стаменковић <umpirsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Umpirsky\Country\Dumper\Format;

use Umpirsky\Country\Dumper\SqlDumper;

/**
 * SQLite dumper.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class Sqlite extends SqlDumper {

    /**
     * {@inheritdoc}
     */
    public function getDriver() {

        return 'pdo_sqlite';
    }
}
