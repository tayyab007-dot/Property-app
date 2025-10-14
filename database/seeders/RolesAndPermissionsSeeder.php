<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Property;
use App\Models\Agent;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Permissions
        $permissions = [ 
            'create properties',
            'update properties',
            'delete properties',
            'view properties',
            'manage properties',
            

            'manage agents',
            'view agents',

            'view payments',

            'manage reports',

            'manage orders',

            'manage users',
            'view dashboard',
        ];

        foreach ($permissions as $permission){
            Permission::firstOrCreate(['name' => $permission]);
        }

        //create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $agentRole = Role::firstOrCreate(['name' => 'agent']);
        $customerRole = Role::firstOrCreate(['name' => 'customer']);

        //Assign permissions to roles
        $adminRole->givePermissionTo(Permission::all());
        $agentRole->givePermissionTo(['create properties', 'update properties', 'delete properties', 'view properties', 'manage properties']);
        $customerRole->givePermissionTo(['view properties']);


        //Create Users

        //Admin
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@app.com'],
            ['name' => 'Admin User', 'password' => bcrypt('password')]
        );
        $adminUser->assignRole($adminRole);

        //Agent
        $agentUser = User::firstOrCreate(
            ['email' => 'agent@app.com'],
            ['name' => 'Agent User', 'password' => bcrypt('password')]
        );
        $agentUser->assignRole($agentRole);

        //Customer
        $customerUser = User::firstOrCreate(
            ['email' => 'customer@app.com'],
            ['name' => 'Customer User', 'password' =>bcrypt('password')]
        );
        $customerUser->assignRole($customerRole);


        // Create Agent Profile
$agentProfile = Agent::firstOrCreate([
    'user_id' => $agentUser->id,
],[
    'agency_name' => 'Granna Real State',
    'license_no' => 'GRS-787898',
    'bio' => 'Experienced agent specializing in residential and commercial properties.',
]);

// Create Sample Properties - CORRECT values for type and status
Property::firstOrCreate([ 
    'title' => 'Luxury 5 Marla House in Islamabad',
],[
    'user_id' => $agentUser->id,
    'agent_id' => $agentProfile->id, // <-- Add this line
    'description' => 'Modern design with 3 bedrooms, a spacious lounge, and car parking.',
    'price' => 15000000,
    'address' => 'Sector G-11, Islamabad',
    'type' => 'sale', 
    'property_type' => 'house', 
    'status' => 'published', 
    'bedrooms' => 3,
    'bathrooms' => 2,
    'area' => 125.5,
]);

Property::firstOrCreate([
    'title' => '1 Kanal Plot in Bahria Town',
], [
    'user_id' => $agentUser->id,
    'agent_id' => $agentProfile->id, // <-- Add this line
    'description' => 'Prime location, ideal for building your dream home.',
    'price' => 25000000,
    'address' => 'Bahria Town, Rawalpindi',
    'type' => 'sale', 
    'property_type' => 'plot', 
    'status' => 'published',
    'area' => 500,
]);

         // Refresh cached permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
    }
}
