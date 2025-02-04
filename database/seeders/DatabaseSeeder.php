<?php

namespace Database\Seeders;

use App\Models\SetMenu;
use App\Models\Cuisine;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
 
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $response = Http::get('https://staging.yhangry.com/booking/test/set-menus');

        $setMenus = json_decode($response->body(), true)['data'];

        foreach($setMenus as $setMenu) {
            $menu = new SetMenu;
            $menu->name = $setMenu['name'];
            $menu->description = $setMenu['description'];
            $menu->image = $setMenu['image'];
            $menu->thumbnail = $setMenu['thumbnail'];
            $menu->is_vegan = $setMenu['is_vegan'];
            $menu->is_vegetarian = $setMenu['is_vegetarian'];
            $menu->is_seated = $setMenu['is_seated'];
            $menu->is_standing = $setMenu['is_standing'];
            $menu->is_canape = $setMenu['is_canape'];
            $menu->is_mixed_dietary = $setMenu['is_mixed_dietary'];
            $menu->is_meal_prep = $setMenu['is_meal_prep'];
            $menu->is_halal = $setMenu['is_halal'];
            $menu->is_kosher = $setMenu['is_kosher'];
            $menu->display_text = $setMenu['display_text'];
            $menu->status = $setMenu['status'];
            $menu->groups = json_encode($setMenu['groups']);
            $menu->price_per_person = $setMenu['price_per_person'];
            $menu->min_spend = $setMenu['min_spend'];
            $menu->price_includes = $setMenu['price_includes'];
            $menu->highlight = $setMenu['highlight'];
            $menu->available = $setMenu['available'];
            $menu->number_of_orders = $setMenu['number_of_orders'];

            $menu->save();

            $cuisines = $setMenu['cuisines'];

            foreach($cuisines as $cuisine) {
                $c = new Cuisine;
                $c->id = $cuisine['id'];
                $c->set_menu_id = $menu->id;
                $c->name = $cuisine['name'];
                $c->save();
            }
        }

    }
}
