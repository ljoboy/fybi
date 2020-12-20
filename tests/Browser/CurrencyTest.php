<?php
/**
 * FILE CurrencyTest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/18/2020 - 1:50 AM
 */

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CurrencyTest extends DuskTestCase
{
    public function testIndex()
    {
        $admin = App\Models\User::find(1);
        $this->browse(function (Browser $browser) use ($admin) {
            $browser->loginAs($admin);
            $browser->visit(route('admin.currency.index'));
            $browser->assertRouteIs('admin.currency.index');
        });
    }
}
