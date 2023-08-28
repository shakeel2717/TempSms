<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use App\Models\Number;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = new User();
        $user->name = 'Administrator';
        $user->username = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt("asdfasdf");
        $user->save();


        $country = new Country();
        $country->name = 'Pakistan';
        $country->flag = 'https://flagcdn.com/w160/pk.png';
        $country->description = "The country is far from the rest of the world, but it is a mistake to think that everything is upside down. The websites of Australian companies have an unusual design for us, but this is due to the fact that they have taken a different path to improve the work on the Internet.

        And often to use the TOP-20 sites in Australia, you may be asked to registration from the phone number of this country. Where can I get it? Our service sms24.me will come to the rescue!
        
        The owners of media spaces in Australia want to protect themselves from fraudsters, and you can protect yourself from registering on dubious resources.
        
        Using the sms24.me website, you can confirm your registration in messengers with the phone number of Australia. SMS confirmation of verification will come very quickly, without forcing you to give!
        
        Just a couple of clicks - and in successfully confirmed and verified on Australian websites with a local valid virtual phone number.
        
        All confirmations with Australia's number will pass online, which means you do not spend money on buying a number and paying for sending it sms! Our site sms24.me is absolutely free with no hidden fees or subscription fees!
        
        We do not include you in our mailings and give you complete anonymity on the network!
        
        It is worth remembering that, although all numbers are tied to real SIM cards, they can still be used for temporary confirmation. And some sites will not allow you to re-register if you have verified accounts from your current phone number.
        
        We try to work for you by providing freshAustralia phone numbers at regular intervals on our service sms24.me.
        
        We will be glad if you subscribe to our updates and will be aware of when theAustralian phone database will be updated! Be careful on the worldwide network, and we will help you with this!
        
        sms24.me is the best service that will help you stay anonymous and use messengers from Australia numbers!";
        $country->save();


        $number = new Number();
        $number->country_id = $country->id;
        $number->number = "+92456456789";
        $number->save();


        $number = new Number();
        $number->country_id = $country->id;
        $number->number = "+92456345343";
        $number->save();


        $number = new Number();
        $number->country_id = $country->id;
        $number->number = "+924523426789";
        $number->save();


        $number = new Number();
        $number->country_id = $country->id;
        $number->number = "+92456444534";
        $number->save();

        $country = new Country();
        $country->name = 'India';
        $country->flag = 'https://flagcdn.com/w160/in.png';
        $country->description = "The country is far from the rest of the world, but it is a mistake to think that everything is upside down. The websites of Australian companies have an unusual design for us, but this is due to the fact that they have taken a different path to improve the work on the Internet.

        And often to use the TOP-20 sites in Australia, you may be asked to registration from the phone number of this country. Where can I get it? Our service sms24.me will come to the rescue!
        
        The owners of media spaces in Australia want to protect themselves from fraudsters, and you can protect yourself from registering on dubious resources.
        
        Using the sms24.me website, you can confirm your registration in messengers with the phone number of Australia. SMS confirmation of verification will come very quickly, without forcing you to give!
        
        Just a couple of clicks - and in successfully confirmed and verified on Australian websites with a local valid virtual phone number.
        
        All confirmations with Australia's number will pass online, which means you do not spend money on buying a number and paying for sending it sms! Our site sms24.me is absolutely free with no hidden fees or subscription fees!
        
        We do not include you in our mailings and give you complete anonymity on the network!
        
        It is worth remembering that, although all numbers are tied to real SIM cards, they can still be used for temporary confirmation. And some sites will not allow you to re-register if you have verified accounts from your current phone number.
        
        We try to work for you by providing freshAustralia phone numbers at regular intervals on our service sms24.me.
        
        We will be glad if you subscribe to our updates and will be aware of when theAustralian phone database will be updated! Be careful on the worldwide network, and we will help you with this!
        
        sms24.me is the best service that will help you stay anonymous and use messengers from Australia numbers!";
        $country->save();

        $number = new Number();
        $number->country_id = $country->id;
        $number->number = "+91456456789";
        $number->save();

        $number = new Number();
        $number->country_id = $country->id;
        $number->number = "+9143423789";
        $number->save();

        $number = new Number();
        $number->country_id = $country->id;
        $number->number = "+914564564543";
        $number->save();

        $number = new Number();
        $number->country_id = $country->id;
        $number->number = "+91456456754";
        $number->save();

        $number = new Number();
        $number->country_id = $country->id;
        $number->number = "+914564345389";
        $number->save();
    }
}
