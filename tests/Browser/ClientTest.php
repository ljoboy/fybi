<?php
/**
 * FILE ClientTest.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/18/2020 - 1:48 AM
 */

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ClientTest extends DuskTestCase
{
    public function testIndex()
    {
        $admin = App\Models\User::find(1);
        $this->browse(function (Browser $browser) use ($admin) {
            $browser->loginAs($admin);
            $browser->visit(route('admin.client.index'));
            $browser->assertRouteIs('admin.client.index');
        });
    }
}
