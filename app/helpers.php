<?php

use App\Models\WebsiteSetup;

if (!function_exists('websiteSetupValue')) {
    function websiteSetupValue($name) {
        return WebsiteSetup::where('name', $name)->first() ? WebsiteSetup::where('name', $name)->first()->value : "";
    }
}

?>
