<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * @var array
     */
    protected $settings = [
        [
            'key'                       =>  'site_name',
            'value'                     =>  'Helit Holding Group',
        ],
        [
            'key'                       =>  'site_title',
            'value'                     =>  'Helit Holding Group',
        ],
        [
            'key'                       =>  'default_email_address',
            'value'                     =>  'helitesholdinggroups@gmail.com',
        ],
        [
            'key'                       =>  'currency_code',
            'value'                     =>  'FCFA',
        ],
        [
            'key'                       =>  'currency_symbol',
            'value'                     =>  'cfa',
        ],
        [
            'key'                       =>  'site_logo',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'site_favicon',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'social_facebook',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'social_twitter',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'social_instagram',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'social_linkedin',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'fact_crypto',
            'value'                     =>  30,
        ],
        [
            'key'                       =>  'fact_espece',
            'value'                     =>  70,
        ],

    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting)
        {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->settings). ' records');
    }
}
