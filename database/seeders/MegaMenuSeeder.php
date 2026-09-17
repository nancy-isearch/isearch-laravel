<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MegaMenuSeeder extends Seeder
{
    public function run()
    {
        $menus = [
            [
                'name' => 'SEO Services',
                'location' => 'header',
                'items' => [
                    ['title' => 'SEO Services', 'url' => '/seo-services'],
                    ['title' => 'SEO Consultancy', 'url' => '/seo-consultancy'],
                    ['title' => 'Content Optimization', 'url' => '/content-optimization'],
                    ['title' => 'Link Building', 'url' => '/link-building'],
                    ['title' => 'SEO Packages', 'url' => '/seo-packages'],
                ]
            ],
            [
                'name' => 'Social Media Marketing',
                'location' => 'header',
                'items' => [
                    ['title' => 'SMO', 'url' => '/smo'],
                    ['title' => 'SMO Strategy', 'url' => '/smo-strategy'],
                    ['title' => 'Facebook Marketing', 'url' => '/facebook-marketing'],
                    ['title' => 'LinkedIn Marketing', 'url' => '/linkedin-marketing'],
                    ['title' => 'PPC Advertising', 'url' => '/ppc-advertising'],
                    ['title' => 'Email Marketing', 'url' => '/email-marketing'],
                ]
            ],
            [
                'name' => 'Web Development',
                'location' => 'header',
                'items' => [
                    ['title' => 'Web design', 'url' => '/web-design'],
                    ['title' => 'eCommerce Development', 'url' => '/ecommerce-development'],
                    ['title' => 'CMS Development', 'url' => '/cms-development'],
                    ['title' => 'PSD to HTML', 'url' => '/psd-to-html'],
                    ['title' => 'Payment Integration', 'url' => '/payment-integration'],
                ]
            ],
            [
                'name' => 'Mobile Apps',
                'location' => 'header',
                'items' => [
                    ['title' => 'Android App Development', 'url' => '/android-app-development'],
                    ['title' => 'iOS App Development', 'url' => '/ios-app-development'],
                    ['title' => 'Custom Mobile Apps', 'url' => '/custom-mobile-apps'],
                ]
            ]
        ];

        foreach ($menus as $menuData) {
            $menu = Menu::firstOrCreate(
                ['name' => $menuData['name']],
                ['location' => $menuData['location']]
            );

            // Re-create items to ensure fresh state
            $menu->items()->delete();

            foreach ($menuData['items'] as $index => $itemData) {
                $menu->items()->create([
                    'title' => $itemData['title'],
                    'url' => $itemData['url'],
                    'order_index' => $index
                ]);
            }
        }
    }
}
