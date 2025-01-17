<?php

function lang($word)
{
    $arr = array(
        "KFS_Hos" => "Kafr El-Shiekh Hospital",
        "home_page" => "Home Page",
        "doctors" => "Doctors",
        "appointments" => "Appointments",
        "clinics" => "Clinics",
        'make_appointment' => "Make an Appointment",
        "login" => "Login",
        "lang" => "Language",
        "arabic_lang" => "Arabic",
        "english_lang" => "English",

        "view_profile" => 'View Profile',
        'patients' => 'Patients',


        'important_links' => 'Our Important Links',
        'recent_news' => "Recent News",
        'contact_us' => 'Contact Us'
    );
    return isset($arr[$word]) ? $arr[$word] : $word;

}