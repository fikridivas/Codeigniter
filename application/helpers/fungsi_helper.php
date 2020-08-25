<?php

function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('user_id');
    if ($user_session) {
        redirect('dashboard');
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('user_id');
    if (!$user_session) {
        redirect('auth/login');
    }
}

function check_admin()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->status != 1) {
        redirect('dashboard');
    }
}

function check_member()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->status != 2) {
        redirect('dashboard');
    }
}

function check_status_member_pendaftaran_pelatihan()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_confirm()->status_daftar_pelatihan == 0) {
        redirect('dashboard');
    }
}

function check_status_member_pendaftaran_pelatihan_sudah_terdaftar()
{
    $ci = &get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_confirm()->status_daftar_pelatihan == 1) {
        redirect('dashboard');
    }
}

function slug($text)
{
    // replace non letter or digits by -
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
    // trim
    $text = trim($text, '-');
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // lowercase
    $text = strtolower($text);
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}
